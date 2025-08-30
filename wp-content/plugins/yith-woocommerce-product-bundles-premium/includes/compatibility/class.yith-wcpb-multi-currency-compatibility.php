<?php
/**
 * Compatibility class with YITH WooCommerce Multi Currency
 *
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

/**
 * Class YITH_WCPB_Multi_Currency_Compatibility
 */
class YITH_WCPB_Multi_Currency_Compatibility {

	/**
	 * Single instance of the class
	 *
	 * @var YITH_WCPB_Multi_Currency_Compatibility
	 */
	private static $instance;

	/**
	 * Are Multi Currency filters enabled?
	 *
	 * @var bool
	 */
	private $are_multi_currency_filters_enabled = true;

	/**
	 * Returns single instance of the class
	 *
	 * @return YITH_WCPB_Multi_Currency_Compatibility
	 */
	public static function get_instance() {
		return ! is_null( self::$instance ) ? self::$instance : self::$instance = new self();
	}

	/**
	 * Constructor
	 */
	private function __construct() {
		add_filter( 'yith_wcpb_bundle_product_form_data', array( $this, 'add_currency_to_form_data' ), 10, 2 );

		add_action( 'wp_ajax_yith_wcpb_get_bundle_total_price', array( $this, 'set_currency_when_retrieving_bundle_price_in_ajax' ), 9 );
		add_action( 'wp_ajax_nopriv_yith_wcpb_get_bundle_total_price', array( $this, 'set_currency_when_retrieving_bundle_price_in_ajax' ), 9 );

		add_filter( 'yith_wcmcs_apply_currency_filters', array( $this, 'filter_multi_currency_price_filters_enabled' ), 10, 1 );
		add_filter( 'yith_wcpb_before_bundle_woocommerce_add_cart_item', array( $this, 'disable_price_filters' ) );
		add_filter( 'yith_wcpb_after_bundle_woocommerce_add_cart_item', array( $this, 'enable_price_filters' ) );
		add_filter( 'yith_wcpb_before_bundle_woocommerce_get_cart_item_from_session_bundled_by', array( $this, 'disable_price_filters' ) );
		add_filter( 'yith_wcpb_after_bundle_woocommerce_get_cart_item_from_session_bundled_by', array( $this, 'enable_price_filters' ) );
	}

	/**
	 * Add currency to form data
	 *
	 * @param array                  $form_data The form data.
	 * @param WC_Product_Yith_Bundle $product   The product.
	 */
	public function add_currency_to_form_data( $form_data, $product ) {
		if ( function_exists( 'yith_wcmcs_get_current_currency_id' ) ) {
			$form_data['yith-wcmcs-currency'] = yith_wcmcs_get_current_currency_id();
		}

		return $form_data;
	}

	/**
	 * Set currency when retrieving Bundle Product price via AJAX.
	 */
	public function set_currency_when_retrieving_bundle_price_in_ajax() {
		if ( function_exists( 'yith_wcmcs_set_currency' ) && isset( $_REQUEST['yith-wcmcs-currency'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			yith_wcmcs_set_currency( sanitize_text_field( wp_unslash( $_REQUEST['yith-wcmcs-currency'] ) ) ); // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		}
	}

	/**
	 * Filter where Multi Currency price filters are enabled.
	 *
	 * @param bool $enabled Enabled flag.
	 *
	 * @return bool
	 */
	public function filter_multi_currency_price_filters_enabled( $enabled ) {
		return $enabled && $this->are_multi_currency_filters_enabled;
	}

	/**
	 * Disable Multi Currency filters.
	 */
	public function disable_price_filters() {
		$this->are_multi_currency_filters_enabled = false;
	}

	/**
	 * Disable Multi Currency filters.
	 */
	public function enable_price_filters() {
		$this->are_multi_currency_filters_enabled = true;
	}

}
