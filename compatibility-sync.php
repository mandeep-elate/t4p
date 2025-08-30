#!/usr/bin/env php
<?php
/**
 * compatibility-sync.php — refresh Compatibility for ALL published products
 * Works on every WooCommerce version (no get_total / get_pages).
 */

define( 'WP_USE_THEMES', false );
require_once __DIR__ . '/wp-load.php';

if ( ! class_exists( 'WooCommerce' ) ) {
    fwrite( STDERR, "WooCommerce not active.\n" );
    exit( 1 );
}

/* helper: rows → flat string */
function evcm_flatten_rows( array $rows ) : string {
    $out = [];
    foreach ( $rows as $r ) {
        $out[] = sprintf(
            '%s %s%s %s–%s – %s',
            $r->make,
            $r->model,
            $r->listing ? " ({$r->listing})" : '',
            $r->year_from,
            $r->year_to,
            $r->engines ?: ''
        );
    }
    return implode( ' | ', $out );
}

global $wpdb;

/* total published products */
$total = (int) $wpdb->get_var(
    "SELECT COUNT(ID)
       FROM {$wpdb->posts}
      WHERE post_type = 'product'
        AND post_status = 'publish'"
);
printf( "Found %d published products.\n", $total );

$batch     = 500;
$offset    = 0;
$scanned   = 0;
$updated   = 0;

while ( $offset < $total ) {

    /* fetch one page of IDs */
    $ids = $wpdb->get_col( $wpdb->prepare(
        "SELECT ID
           FROM {$wpdb->posts}
          WHERE post_type = 'product'
            AND post_status = 'publish'
          ORDER BY ID
          LIMIT %d OFFSET %d",
        $batch,
        $offset
    ) );

    if ( ! $ids ) {
        break;
    }

    foreach ( $ids as $pid ) {
        $scanned++;

        $product = wc_get_product( $pid );
        if ( ! $product ) { continue; }

        $vehicle_ids = evcm_get_vehicle_ids_from_product( $product );
        $rows        = evcm_fetch_rows( $vehicle_ids );
        $flat_string = $rows ? evcm_flatten_rows( $rows ) : '';

        $changed = false;

        /* 1. meta */
        if ( $flat_string !== $product->get_meta( '_compatibility', true ) ) {
            $product->update_meta_data( '_compatibility', $flat_string );
            $changed = true;
        }

        /* 2. taxonomy term */
        wp_set_object_terms(
            $pid,
            $flat_string ? [ $flat_string ] : [],
            'pa_compatibility',
            false
        );

        /* 3. attribute row */
        $attr_slug = 'compatibility';
        $attr_tax  = 'pa_' . $attr_slug;
        $attrs     = $product->get_attributes();

        if ( isset( $attrs[ $attr_slug ] ) ) {
            $attr_obj = $attrs[ $attr_slug ];
            if ( $attr_obj->get_options() !== [ $flat_string ] ) {
                $attr_obj->set_options( [ $flat_string ] );
                $attrs[ $attr_slug ] = $attr_obj;
                $product->set_attributes( $attrs );
                $changed = true;
            }
        } else {
            $attr_obj = new WC_Product_Attribute();
            $attr_obj->set_id( wc_attribute_taxonomy_id_by_name( $attr_slug ) );
            $attr_obj->set_name( $attr_tax );
            $attr_obj->set_visible( false );
            $attr_obj->set_variation( false );
            $attr_obj->set_options( [ $flat_string ] );
            $attrs[ $attr_slug ] = $attr_obj;
            $product->set_attributes( $attrs );
            $changed = true;
        }

        if ( $changed ) {
            $product->save();
            $updated++;
        }
    }

    printf(
        "[%s] processed %d / %d (updated %d)\n",
        date( 'H:i:s' ),
        min( $offset + $batch, $total ),
        $total,
        $updated
    );

    $offset += $batch;
}

printf( "DONE. %d scanned, %d updated.\n", $scanned, $updated );
