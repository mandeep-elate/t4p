<?php
/**
 * YITH WooCommerce Name Your Price integration class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

/**
 * YITH WooCommerce Name Your Price Compatibility Class
 *
 * @class   YITH_WCPB_Name_Your_Price_Compatibility
 * @since   1.2.20
 */
class YITH_WCPB_Name_Your_Price_Compatibility {

	/**
	 * Single instance of the class.
	 *
	 * @var YITH_WCPB_Name_Your_Price_Compatibility
	 */
	protected static $instance;

	/**
	 * Returns single instance of the class
	 *
	 * @return YITH_WCPB_Name_Your_Price_Compatibility
	 */
	public static function get_instance() {
		return ! is_null( self::$instance ) ? self::$instance : self::$instance = new self();
	}

	/**
	 * YITH_WCPB_Name_Your_Price_Compatibility constructor.
	 */
	protected function __construct() {
		add_filter( 'ywcnp_product_types', array( $this, 'add_bundle_type' ) );
		add_filter( 'ywcnp_is_name_your_price', array( $this, 'is_name_your_price' ), 10, 2 );
		add_filter( 'yith_wcpb_product_bundle_options_tab_before_pricing', array( $this, 'render_fields_in_bundle' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
	}

	/**
	 * Add bundle type to product types.
	 *
	 * @param array $types Product Types.
	 *
	 * @return array
	 */
	public function add_bundle_type( $types ) {
		$types[] = 'yith_bundle';

		return $types;
	}

	/**
	 * Check if this is a "name your price" product
	 *
	 * @param bool                   $result  The result.
	 * @param WC_Product_Yith_Bundle $product The product.
	 *
	 * @return mixed
	 */
	public function is_name_your_price( $result, $product ) {
		if ( $product && $product->is_type( 'yith_bundle' ) ) {
			$result = ! $product->per_items_pricing && $product->get_meta( '_is_nameyourprice' );
		}

		return $result;
	}

	/**
	 * Render fields in Bundle product.
	 */
	public function render_fields_in_bundle() {
		yith_wcpb_get_view( 'integrations/name-your-price/bundle-product-options.php' );
	}

	/**
	 * Enqueue admin scripts.
	 */
	public function admin_enqueue_scripts() {
		$screen    = function_exists( 'get_current_screen' ) ? get_current_screen() : false;
		$screen_id = ! ! $screen ? $screen->id : false;

		wp_register_script( 'yith-wcpb-name-your-price-admin-product', yit_load_js_file( YITH_WCPB_ASSETS_URL . '/js/integrations/name-your-price/admin-product.js' ), array( 'jquery' ), YITH_WCPB_VERSION, true );

		if ( 'product' === $screen_id ) {
			wp_enqueue_script( 'yith-wcpb-name-your-price-admin-product' );
		}
	}
}

/**
 * Unique access to instance of YITH_WCPB_Name_Your_Price_Compatibility class
 *
 * @return YITH_WCPB_Name_Your_Price_Compatibility
 * @since 1.2.20
 */
function yith_wcpb_name_your_price_compatibility() {
	return YITH_WCPB_Name_Your_Price_Compatibility::get_instance();
}
