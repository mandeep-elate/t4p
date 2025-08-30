<?php
if (!function_exists('breakdance_zero_theme_setup')) {
    function breakdance_zero_theme_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
}

add_action('after_setup_theme', 'breakdance_zero_theme_setup');

if (!function_exists('warn_if_breakdance_is_disabled')) {
    add_action('admin_notices', 'warn_if_breakdance_is_disabled');

    function warn_if_breakdance_is_disabled()
    {
        if (defined('__BREAKDANCE_DIR__')) {
            return;
        }

        ?>
        <div class="notice notice-error is-dismissible">
            <p>You're using Breakdance's Zero Theme but Breakdance is not enabled. This isn't supported.</p>
        </div>
        <?php
    }
}

function enqueue_elate_script()
{
    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri() . '/assets/css/elate.css',
        array(),
        null,
        'all'
    );
    if (is_product()) {
        wp_enqueue_style(
            'pdp-style',
            get_template_directory_uri() . '/assets/css/pdp.css',
            array('theme-style'), // Load after elate.css
            null,
            'all'
        );
    }
    wp_enqueue_script(
        'theme-t4p',
        get_template_directory_uri() . '/assets/js/elate.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_elate_script', 100);

add_action('admin_init', 'my_theme_add_editor_styles');
function my_theme_add_editor_styles()
{
    add_editor_style('elate.css');
}

add_action('wp_print_styles', 'elate_dequeue_styles');
function elate_dequeue_styles()
{
    if (!is_user_logged_in()) {
        wp_dequeue_style('dashicons');
        wp_deregister_style('dashicons');
    }
}

// Add this code to your theme's functions.php or a custom plugin
add_action('wp_head', 'custom_json_ld_for_woocommerce_products');

function custom_json_ld_for_woocommerce_products()
{
    if (is_product()) {
        global $product;
        if (!is_a($product, 'WC_Product')) {
            $product = wc_get_product(get_the_ID());
        }

        if (!$product || !is_a($product, 'WC_Product')) {
            return; // Still not a valid product, exit gracefully
        }

        // Build the basic JSON-LD structure for the product
        $json_ld = array(
            '@context' => 'https://schema.org/',
            '@type' => 'Product',
            //'@id'         => $product->get_id(),
            'name' => $product->get_name(),
            'image' => wp_get_attachment_url($product->get_image_id()),
            'description' => wp_strip_all_tags($product->get_description()),
            'sku' => $product->get_sku(),
            'brand' => array(
                '@type' => 'Brand',
                'name' => 'Tuning4performance.co.uk',
                'logo' => array(
                    '@type' => 'ImageObject',
                    'url' => 'logo.png'
                )
            ),
        );


        // Set priceValidUntil date (next 15 days)
        $price_valid_until = date('Y-m-d', strtotime('+15 days'));

        // For simple products: output a single offer
        if ($product->is_type('simple')) {
            $json_ld['offers'] = array(
                '@type' => 'Offer',
                'url' => get_permalink($product->get_id()),
                'productID' => $product->get_id(),
                'priceCurrency' => get_woocommerce_currency(),
                'price' => $product->get_price(),
                'availability' => $product->is_in_stock() ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock',
                'priceValidUntil' => $price_valid_until
            );
        }
        // For variable products: loop through each variation
        elseif ($product->is_type('variable')) {
            $variations = $product->get_available_variations();
            $prices = array_map(function ($variation) {
                return $variation['display_price'];
            }, $variations);

            $low_price = !empty($prices) ? min($prices) : $product->get_price();
            $high_price = !empty($prices) ? max($prices) : $product->get_price();

            $offers = array();

            $offers[] = array(
                '@type' => 'AggregateOffer',
                'url' => get_permalink($product->get_id()),
                'priceCurrency' => get_woocommerce_currency(),
                'lowPrice' => $low_price,
                'highPrice' => $high_price,
                'availability' => $product->is_in_stock() ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock',
                'priceValidUntil' => $price_valid_until
            );

            foreach ($variations as $variation) {
                $variation_name = $product->get_name();

                if (!empty($variation['attributes']['attribute_pa_colour'])) {
                    $color = $variation['attributes']['attribute_pa_colour'];
                    $variation_name .= ' - ' . $color;
                } else {
                    $color = null;
                }

                if (!empty($variation['attributes']['attribute_pa_size'])) {
                    $size = $variation['attributes']['attribute_pa_size'];
                    $variation_name .= ' / ' . $size;
                } else {
                    $size = null;
                }

                $offers[] = array(
                    '@type' => 'Offer',
                    'priceCurrency' => get_woocommerce_currency(),
                    'price' => $variation['display_price'],
                    'availability' => !empty($variation['is_in_stock']) && $variation['is_in_stock'] ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock',
                    'name' => $variation_name,
                    'productID' => $variation['variation_id'],
                    'gtin' => $variation['sku'],
                    'url' => $variation['variation_permalink'],
                    'priceValidUntil' => $price_valid_until
                );

                if ($color) {
                    $offers[count($offers) - 1]['color'] = $color;
                }

                if ($size) {
                    $offers[count($offers) - 1]['size'] = $size;
                }
            }
            $json_ld['offers'] = $offers;
        }

        // Output the JSON-LD
        echo '<script type="application/ld+json">' . wp_json_encode($json_ld) . '</script>';
    }
}

add_action('save_post_product', function ($post_id) {
    // Get product object
    $product = wc_get_product($post_id);

    if (!$product)
        return;

    // Get raw meta where attributes are stored
    $attributes = get_post_meta($post_id, '_product_attributes', true);

    // Check if "type" is in the attributes
    if (isset($attributes['type'])) {
        // Rename to 'damper_type'
        $attributes['damper_type'] = $attributes['type'];
        unset($attributes['type']);

        // Save updated attributes
        update_post_meta($post_id, '_product_attributes', $attributes);
    }
});

//NOTE: Disable Gutenberg Editor for Products
if (function_exists('use_block_editor_for_post')) {
    remove_filter('use_block_editor_for_post', 'use_block_editor_for_post');
}


//NOTE: Custom Product Tab for Fitting Guide
add_filter('woocommerce_product_tabs', 'custom_product_tab');
function custom_product_tab($tabs)
{
    global $post;
    $fittingGuide = get_field('fitting_guide', $post->ID); // Replace with your ACF field name

    if (!empty($fittingGuide)) {
        $tabs['custom_tab'] = array(
            'title' => __('Fitting Guide', 'woocommerce'),
            'priority' => 50,
            'callback' => 'custom_product_tab_content'
        );
    }

    return $tabs;
}
//NOTE: Callback function to display the content of the custom tab
function custom_product_tab_content()
{
    global $post;
    $fittingGuide = get_field('fitting_guide', $post->ID);
    if (!empty($fittingGuide)) {
        echo $fittingGuide;
    }
}
//NOTE: Remove the breadcrumbs from PDP
add_action('init', 'woo_remove_wc_breadcrumbs');
function woo_remove_wc_breadcrumbs()
{
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
}

//NOTE: Rename Product Tabs
add_filter('woocommerce_product_tabs', 'misha_rename_description_tab');
function misha_rename_description_tab($tabs)
{
    $tabs['description']['title'] = 'Product Information';
    $tabs['additional_information']['title'] = 'Specifications';
    return $tabs;
}

//NOTE: Shortcode to display vehicle filter information
function vehicle_filter_shortcode()
{
    global $post;
    global $product;

    $p_brand = '';
    $p_sku = '';
    if (is_singular('product')) {
        $p_sku = esc_html($product->get_sku());
        $terms = get_the_terms($post->ID, 'product_brand');
        if (!empty($terms) && !is_wp_error($terms)) {
            $p_brand = esc_html($terms[0]->name);
        }
    }

    ob_start();
    ?>
    <div id="vehicle-filter-display">
        <div id="vehicle-filter-display2"></div>
        <div class="vehicle-filter-info">
            <?php if($p_brand): ?><div class="vfi"><div class="vfil">Manufacturer</div><div class="vfiv"><?php echo $p_brand; ?></div></div><?php endif; ?>
            <?php if($p_sku): ?><div class="vfi last"><div class="vfil">SKU</div><div class="vfiv"><?php echo $p_sku; ?></div></div><?php endif; ?>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const vehicleData = localStorage.getItem('vehicleFilter');
            if (vehicleData) {
                try {
                    const vehicle = JSON.parse(vehicleData);
                    const container = document.getElementById('vehicle-filter-display2');

                    if (container) {
                        const vehicleHTML = `
                            <div class="vehicle-filter-info">
                                <div class="vfi"><div class="vfil">Make</div><div class="vfiv">${vehicle.make}</div></div>
                                <div class="vfi"><div class="vfil">Model</div><div class="vfiv">${vehicle.model}</div></div>
                                <div class="vfi"><div class="vfil">Listing</div><div class="vfiv">${vehicle.listing}</div></div>
                                <div class="vfi"><div class="vfil">Year</div><div class="vfiv">${vehicle.year}</div></div>
                                <div class="vfi"><div class="vfil">Engine</div><div class="vfiv">${vehicle.engine}</div></div>
                            </div>
                        `;
                        container.innerHTML = vehicleHTML;
                    }
                } catch (e) {
                    console.error('Invalid vehicleFilter JSON:', e);
                }
            }
        });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('vehicle_filter_info', 'vehicle_filter_shortcode');


//NOTE: Remove the default short description location
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
//NOTE: Add short description right after the title
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 6);
//NOTE: Remove the default price location
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
//NOTE: Add price just before the Add to Cart button
add_action('woocommerce_before_add_to_cart_button', 'woocommerce_template_single_price', 9);


/* ========================================================================
 *  Vehicle + Engine Compatibility Matrix
 *  Drop-in for functions.php        (prefix assumed: e6tw_)
 * =====================================================================*/

/**
 * Utility: Convert raw CSV / pipe / term list → int[]
 */
function evcm_parse_id_list( $raw ) : array {
	return array_map(
		'intval',
		array_filter(
			array_map( 'trim', preg_split( '/[\s,|]+/', (string) $raw ) )
		)
	);
}

/**
 * STEP 1 · Pull vehicle IDs for a given product
 *
 * - global attribute  pa_vehicle_no  (terms)
 * - custom attribute  vehicle_no     (free-text)
 * - custom field      _vehicle_no
 *
 * @return int[]
 */
function evcm_get_vehicle_ids_from_product( WC_Product $product ) : array {

	/* global attribute → terms: pa_vehicle_no */
	$ids = wc_get_product_terms(
		$product->get_id(),
		'pa_vehicle_no',
		[ 'fields' => 'names' ]
	);
	if ( ! empty( $ids ) ) {
		return evcm_parse_id_list( implode( ',', $ids ) );
	}

	/* local / custom attribute (text) */
	if ( $raw = $product->get_attribute( 'vehicle_no' ) ) {
		return evcm_parse_id_list( $raw );
	}

	/* custom field fallback */
	if ( $raw = $product->get_meta( '_vehicle_no', true ) ) {
		return evcm_parse_id_list( $raw );
	}

	return [];
}

/**
 * STEP 2 · Query vehicle rows + engine **codes**
 *
 * Tables (using WP prefix e6tw_):
 *   e6tw_vehicle_base   (vehicle_id, make, model, listing, year_from, year_to)
 *   e6tw_vehicle_engine (vehicle_id, engine_id)
 *   e6tw_engine         (engine_id,  engine_code)
 *
 * @param int[] $vehicle_ids
 * @return object[] stdClass rows
 */
function evcm_fetch_rows( array $vehicle_ids ) {

	global $wpdb;
	if ( ! $vehicle_ids ) {
		return [];
	}

	$placeholders = implode( ',', array_fill( 0, count( $vehicle_ids ), '%d' ) );

	return $wpdb->get_results(
		$wpdb->prepare(
			"SELECT  vb.vehicle_id,
			         vb.make,
			         vb.model,
			         vb.listing,
			         vb.year_from,
			         vb.year_to,
			         GROUP_CONCAT( DISTINCT eng.engine_code
			                        ORDER BY eng.engine_code SEPARATOR ', ' ) AS engines
			   FROM  {$wpdb->prefix}vehicle_base     vb
			   LEFT  JOIN {$wpdb->prefix}vehicle_engine ve  ON ve.vehicle_id = vb.vehicle_id
			   LEFT  JOIN {$wpdb->prefix}engine         eng ON eng.engine_id = ve.engine_id
			  WHERE  vb.vehicle_id IN ($placeholders)
			  GROUP  BY vb.vehicle_id
			  ORDER  BY vb.make, vb.model, vb.listing, vb.year_from",
			$vehicle_ids
		)
	);
}

/**
 * STEP 3 · Generate HTML table (shared by hook + shortcode)
 *
 * @param int[] $vehicle_ids
 * @return string
 */
function evcm_render_matrix_html( array $vehicle_ids ) : string {

	$rows = evcm_fetch_rows( $vehicle_ids );

	if ( ! $rows ) {
		return '<div class="evcm-wrapper"><p>' .
		       esc_html__( 'No compatibility data available.', 'evcm' ) .
		       '</p></div>';
	}

	ob_start(); ?>
    <div class="tab-content-c">
	<div class="evcm-wrapper">
		<table class="shop_table evcm-table">
			<thead>
				<tr>
					<th><?php esc_html_e( 'Make',      'evcm' ); ?></th>
					<th><?php esc_html_e( 'Model',     'evcm' ); ?></th>
					<th><?php esc_html_e( 'Listing',   'evcm' ); ?></th>
					<th><?php esc_html_e( 'Year From', 'evcm' ); ?></th>
					<th><?php esc_html_e( 'Year To',   'evcm' ); ?></th>
					<th><?php esc_html_e( 'Engine(s)', 'evcm' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ( $rows as $r ) : ?>
					<tr>
						<td data-label="<?php esc_html_e( 'Make',      'evcm' ); ?>"><?php echo esc_html( $r->make           ); ?></td>
						<td data-label="<?php esc_html_e( 'Model',     'evcm' ); ?>"><?php echo esc_html( $r->model          ); ?></td>
						<td data-label="<?php esc_html_e( 'Listing',   'evcm' ); ?>"><?php echo esc_html( $r->listing        ); ?></td>
						<td data-label="<?php esc_html_e( 'Year From', 'evcm' ); ?>"><?php echo esc_html( $r->year_from      ); ?></td>
						<td data-label="<?php esc_html_e( 'Year To',   'evcm' ); ?>"><?php echo esc_html( $r->year_to        ); ?></td>
						<td data-label="<?php esc_html_e( 'Engine(s)', 'evcm' ); ?>"><?php echo esc_html( $r->engines ?: '—' ); ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
    </div>
	<?php
	return ob_get_clean();
}

/* --------------------------------------------------------------------------
 *  A) AUTOMATIC DISPLAY under product summary  (priority 15)
 * ------------------------------------------------------------------------*/
/* add_action( 'woocommerce_after_single_product_summary', function () {

	if ( ! is_product() ) {
		return;
	}

	global $product;
	if ( ! $product instanceof WC_Product ) {
		return;
	}

	echo evcm_render_matrix_html( evcm_get_vehicle_ids_from_product( $product ) );

}, 15 ); */

/* --------------------------------------------------------------------------
 *  B) SHORTCODE  [vehicle_compatibility_matrix ids="1,4,7"]
 * ------------------------------------------------------------------------*/
add_shortcode( 'vehicle_compatibility_matrix', function ( $atts ) {

	$atts = shortcode_atts(
		[
			'ids'        => '',  // comma / pipe separated list
			'product_id' => ''   // ID of product to pull from
		],
		$atts,
		'vehicle_compatibility_matrix'
	);

	// 1️⃣ explicit ids attribute wins
	if ( $atts['ids'] ) {
		$vehicle_ids = evcm_parse_id_list( $atts['ids'] );
		return evcm_render_matrix_html( $vehicle_ids );
	}

	// 2️⃣ product_id attribute
	if ( $atts['product_id'] && ( $p = wc_get_product( (int) $atts['product_id'] ) ) ) {
		return evcm_render_matrix_html( evcm_get_vehicle_ids_from_product( $p ) );
	}

	// 3️⃣ fallback to current product context if inside The Loop
	if ( is_product() ) {
		global $product;
		if ( $product instanceof WC_Product ) {
			return evcm_render_matrix_html( evcm_get_vehicle_ids_from_product( $product ) );
		}
	}

	return '<p>' . esc_html__( 'No compatibility data available.', 'evcm' ) . '</p>';
});

//NOTE: Shortcode usage examples
// [vehicle_compatibility_matrix] - uses the current product's vehicle data
// [vehicle_compatibility_matrix ids="101,102,103"] - uses explicit vehicle IDs
// [vehicle_compatibility_matrix product_id="987"] - uses another product's vehicle data

/* --------------------------------------------------------------------------
 *  C) Tiny inline CSS so Woo tables stay neat
 * ------------------------------------------------------------------------*/
/* add_action( 'wp_enqueue_scripts', function () {
	if ( is_singular( 'product' ) || has_shortcode( get_post()->post_content ?? '', 'vehicle_compatibility_matrix' ) ) {
		wp_add_inline_style(
			'woocommerce-inline',
			'.evcm-table th, .evcm-table td { text-align:left; }'
		);
	}
} );
 */

//NOTE: Custom Product Tab for Fitting Guide
add_filter('woocommerce_product_tabs', 'custom_product_tab2');
function custom_product_tab2($tabs)
{
    $vehicleValues = do_shortcode ( '[vehicle_filter_info]' );

    if (!empty($vehicleValues)) {
        $tabs['custom_tab'] = array(
            'title' => __('Compatible Vehicles', 'woocommerce'),
            'priority' => 50,
            'callback' => 'custom_product_tab_content2'
        );
    }

    return $tabs;
}
//NOTE: Callback function to display the content of the custom tab
function custom_product_tab_content2()
{
    $vehicleValues = do_shortcode ( '[vehicle_compatibility_matrix]' );
    if (!empty($vehicleValues)) {
        echo '<h2 class="tab-heading d-none hidden">Compatible Vehicles</h2>';
        echo $vehicleValues;
    }
}