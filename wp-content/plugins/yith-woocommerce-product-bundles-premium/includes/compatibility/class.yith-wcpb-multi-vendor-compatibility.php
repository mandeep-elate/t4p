<?php
/**
 * YITH WooCommerce Multi Vendor integration class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

/**
 * YITH WooCommerce Multi Vendor Compatibility Class
 *
 * @class   YITH_WCPB_Multi_Vendor_Compatibility
 * @since   1.2.18
 */
class YITH_WCPB_Multi_Vendor_Compatibility {

	/**
	 * Single instance of the class
	 *
	 * @var YITH_WCPB_Multi_Vendor_Compatibility
	 */
	protected static $instance;

	/**
	 * Returns single instance of the class
	 *
	 * @return YITH_WCPB_Multi_Vendor_Compatibility
	 */
	public static function get_instance() {
		return ! is_null( self::$instance ) ? self::$instance : self::$instance = new self();
	}

	/**
	 * Constructor
	 */
	protected function __construct() {
		$is_integration_enabled = 'yes' === get_option( 'yith_wpv_vendors_option_product_bundles_management', 'no' );

		// Handle backward compatibility with Multi Vendor < 4.0. TODO: to fix when removing backward compatibility.
		// In previous Multi Vendor version, the integration was automatically enabled.
		if ( defined( 'YITH_WPV_VERSION' ) && version_compare( YITH_WPV_VERSION, '4.0.0', '<' ) ) {
			$is_integration_enabled = true;
		}

		if ( $is_integration_enabled ) {
			add_filter( 'yith_wcpb_select_product_box_args', array( $this, 'filter_products' ) );
		} else {
			if ( is_admin() ) {
				add_filter( 'product_type_selector', array( $this, 'remove_bundle_for_vendors' ), 999, 1 );
				add_action( 'init', array( $this, 'remove_bundle_panels_for_vendors' ), 999 );
			}
		}
	}

	/**
	 * Remove bundle product type for vendors.
	 *
	 * @param array $types Product types.
	 */
	public function remove_bundle_for_vendors( $types ) {
		$vendor = yith_wcmv_get_vendor( 'current', 'user' );
		if ( $vendor && $vendor->is_valid() && $vendor->has_limited_access() && isset( $types['yith_bundle'] ) ) {
			unset( $types['yith_bundle'] );
		}

		return $types;
	}

	/**
	 * Remove bundle panels in product for vendors if the integration is not active.
	 */
	public function remove_bundle_panels_for_vendors() {
		$vendor = yith_wcmv_get_vendor( 'current', 'user' );
		if ( $vendor && $vendor->is_valid() && $vendor->has_limited_access() ) {
			remove_filter( 'woocommerce_product_data_tabs', array( yith_wcpb_admin(), 'woocommerce_product_data_tabs' ), 10 );
			remove_action( 'woocommerce_product_data_panels', array( yith_wcpb_admin(), 'woocommerce_product_data_panels' ), 10 );
		}
	}

	/**
	 * Filter args of the product select box to show only vendor products
	 *
	 * @param array $args Arguments.
	 *
	 * @return array
	 */
	public function filter_products( $args ) {
		// Handle backward compatibility with Multi Vendor < 4.0. TODO: to fix when removing backward compatibility.
		$vendor = function_exists( 'yith_wcmv_get_vendor' ) ? yith_wcmv_get_vendor( 'current', 'user' ) : yith_get_vendor( 'current', 'user' );
		if ( $vendor->is_valid() && $vendor->has_limited_access() ) {

			// Handle backward compatibility with Multi Vendor < 4.0.
			$slug     = is_callable( array( $vendor, 'get_slug' ) ) ? $vendor->get_slug() : $vendor->slug;
			$taxonomy = defined( 'YITH_Vendors_Taxonomy::TAXONOMY_NAME' ) ? YITH_Vendors_Taxonomy::TAXONOMY_NAME : YITH_Vendors()->get_taxonomy_name();

			$args['tax_query'][] = array(
				'taxonomy' => $taxonomy,
				'field'    => 'slug',
				'terms'    => $slug,
			);

		}

		return $args;
	}

}

/**
 * Unique access to instance of YITH_WCPB_Multi_Vendor_Compatibility class
 *
 * @return YITH_WCPB_Multi_Vendor_Compatibility
 */
function yith_wcpb_multi_vendor_compatibility() {
	return YITH_WCPB_Multi_Vendor_Compatibility::get_instance();
}
