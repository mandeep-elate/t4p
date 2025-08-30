#!/usr/bin/env php
<?php
/**
 * compatibility-test.php
 * ---------------------------------------------------------------
 * Rebuild Compatibility data for ONE product (ID via ?id= or CLI arg)
 */

define( 'WP_USE_THEMES', false );
require_once __DIR__ . '/wp-load.php';   // boot WordPress + Woo

/* ────────────────────────────────────────────────────────────────
 * 1. Get product ID from URL (?id=) or CLI arg
 * ────────────────────────────────────────────────────────────────*/
$id = null;
if ( isset( $_GET['id'] ) )                 { $id = (int) $_GET['id']; }
if ( PHP_SAPI === 'cli' && isset( $argv[1] )){ $id = (int) $argv[1];   }
if ( ! $id ) { exit( "Pass product ID via ?id=123 or CLI.\n" ); }

/* ────────────────────────────────────────────────────────────────
 * 2. Load product object
 * ────────────────────────────────────────────────────────────────*/
$product = wc_get_product( $id );
if ( ! $product ) { exit( "Product $id not found.\n" ); }

/* ────────────────────────────────────────────────────────────────
 * 3. Use helpers from functions.php to get vehicle data
 * ────────────────────────────────────────────────────────────────*/
$vehicle_ids = evcm_get_vehicle_ids_from_product( $product );
$rows        = evcm_fetch_rows( $vehicle_ids );

/* Flatten rows → one string */
$flat_string = '';
if ( $rows ) {
	$parts = [];
	foreach ( $rows as $r ) {
		$parts[] = sprintf(
			'%s %s%s %s–%s – %s',
			$r->make,
			$r->model,
			$r->listing ? " ({$r->listing})" : '',
			$r->year_from,
			$r->year_to,
			$r->engines ?: ''
		);
	}
	$flat_string = implode( ' | ', $parts );
}

/* ────────────────────────────────────────────────────────────────
 * 4. Save meta field _compatibility
 * ────────────────────────────────────────────────────────────────*/
$changed = false;
if ( $flat_string !== $product->get_meta( '_compatibility', true ) ) {
	$product->update_meta_data( '_compatibility', $flat_string );
	$changed = true;
}

/* ────────────────────────────────────────────────────────────────
 * 5. Store / replace taxonomy term pa_compatibility
 * ────────────────────────────────────────────────────────────────*/
$taxonomy   = 'pa_compatibility';        // global attribute’s taxonomy
wp_set_object_terms( $id, $flat_string ? [ $flat_string ] : [], $taxonomy, false );
/* ---------------------------------------------------------------
 * 6. Ensure the attribute row exists AND has the value
 * -------------------------------------------------------------*/
$attr_slug = 'compatibility';          // without pa_
$attr_tax  = 'pa_' . $attr_slug;
$attributes = $product->get_attributes();
$needs_save = false;

if ( isset( $attributes[ $attr_slug ] ) ) {
    // Row already there → just update its options if changed
    $attr_obj = $attributes[ $attr_slug ];
    if ( $attr_obj->get_options() !== [ $flat_string ] ) {
        $attr_obj->set_options( [ $flat_string ] );
        $attributes[ $attr_slug ] = $attr_obj;
        $product->set_attributes( $attributes );
        $needs_save = true;
    }
} else {
    // Row missing → create it with the value in options
    $attr_obj = new WC_Product_Attribute();
    $attr_obj->set_id( wc_attribute_taxonomy_id_by_name( $attr_slug ) );
    $attr_obj->set_name( $attr_tax );
    $attr_obj->set_visible( false );
    $attr_obj->set_variation( false );
    $attr_obj->set_options( [ $flat_string ] );         // <-- key line
    $attributes[ $attr_slug ] = $attr_obj;
    $product->set_attributes( $attributes );
    $needs_save = true;
}

if ( $needs_save ) {
    $product->save();
}


/* ────────────────────────────────────────────────────────────────
 * 7. Plain-text report
 * ────────────────────────────────────────────────────────────────*/
header( 'Content-Type: text/plain; charset=utf-8' );
echo "Product:          $id\n";
echo "Vehicle IDs:      " . implode( ',', $vehicle_ids ) . "\n";
echo "Flat string:      $flat_string\n";
echo "Updated meta:     " . ( $changed ? 'YES' : 'No change needed' ) . "\n";
echo "Attribute row:    " . ( array_key_exists( $attr_slug, $attributes ) ? 'Present' : 'Missing!' ) . "\n";
