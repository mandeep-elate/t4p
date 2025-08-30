<?php
/**
 * YITH WooCommerce Role Based Pricing integration class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

/**
 * YITH WooCommerce Role Based Pricing Compatibility Class
 *
 * @class   YITH_WCPB_Role_Based_Compatibility
 * @since   1.1.1
 */
class YITH_WCPB_Role_Based_Compatibility {

	/**
	 * Single instance of the class
	 *
	 * @var YITH_WCPB_Role_Based_Compatibility
	 */
	protected static $instance;

	/**
	 * Returns single instance of the class
	 *
	 * @return YITH_WCPB_Role_Based_Compatibility
	 */
	public static function get_instance() {
		return ! is_null( self::$instance ) ? self::$instance : self::$instance = new self();
	}

	/**
	 * Constructor
	 */
	protected function __construct() {
		$regular_price_hooks = array(
			'add'    => array(
				'yith_wcpb_before_bundle_items_list',
				'yith_wcpb_get_product_variations_before',
				'yith_wcpb_before_bundle_woocommerce_cart_item_price',
				'yith_wcpb_before_bundle_bundles_item_subtotal',
				'yith_wcpb_before_bundle_woocommerce_add_cart_item',
				'yith_wcpb_before_bundle_woocommerce_get_cart_item_from_session_bundled_by',
				'yith_wcpb_before_get_per_item_price_tot',
				'yith_wcpb_before_get_per_item_price_tot_max',
			),
			'remove' => array(
				'yith_wcpb_after_bundle_items_list',
				'yith_wcpb_get_product_variations_after',
				'yith_wcpb_after_bundle_woocommerce_cart_item_price',
				'yith_wcpb_after_bundle_bundles_item_subtotal',
				'yith_wcpb_after_bundle_woocommerce_add_cart_item',
				'yith_wcpb_after_bundle_woocommerce_get_cart_item_from_session_bundled_by',
				'yith_wcpb_after_get_per_item_price_tot',
				'yith_wcpb_after_get_per_item_price_tot_max',
			),
		);

		foreach ( $regular_price_hooks as $action => $hooks ) {
			foreach ( $hooks as $hook ) {
				add_action( $hook, array( $this, $action . '_regular_price_actions' ) );
			}
		}

		$variation_price_hooks = array(
			'add'    => array(
				'yith_wcpb_before_get_per_item_price_tot',
				'yith_wcpb_before_get_per_item_price_tot_max',
				'yith_wcpb_before_bundled_item_construct',
				'yith_wcpb_before_get_per_item_price_tot_with_params',
			),
			'remove' => array(
				'yith_wcpb_after_get_per_item_price_tot',
				'yith_wcpb_after_get_per_item_price_tot_max',
				'yith_wcpb_after_bundled_item_construct',
				'yith_wcpb_after_get_per_item_price_tot_with_params',
			),
		);

		foreach ( $variation_price_hooks as $action => $hooks ) {
			foreach ( $hooks as $hook ) {
				add_action( $hook, array( $this, $action . '_regular_price_and_variations_regular_price_actions' ) );
			}
		}

		add_action( 'woocommerce_before_calculate_totals', array( $this, 'add_bundled_attribute' ) );
		add_action( 'woocommerce_after_calculate_totals', array( $this, 'remove_bundled_attribute' ) );

		add_filter( 'yith_wcrbp_return_original_price', array( $this, 'return_original_price' ), 10, 3 );
		add_filter( 'yith_wcrbp_get_role_based_price', array( $this, 'get_role_based_price' ), 10, 2 );
	}

	/**
	 * Return original price
	 *
	 * @param bool       $value   Flag.
	 * @param string     $price   The price.
	 * @param WC_Product $product The product.
	 *
	 * @return bool
	 */
	public function return_original_price( $value, $price, $product ) {
		return $product->is_type( 'yith_bundle' ) && isset( $product->per_items_pricing ) && $product->per_items_pricing;
	}

	/**
	 * Get role based price.
	 *
	 * @param string|float $price   The price.
	 * @param WC_Product   $product The product.
	 *
	 * @return int|mixed|void
	 */
	public function get_role_based_price( $price, $product ) {
		if ( isset( $product->yith_wcpb_discount ) ) {
			$discount = absint( $product->yith_wcpb_discount ) / 100 * $price;
			$discount = apply_filters( 'yith_wcpb_bundled_item_calculated_discount', $discount, absint( $product->yith_wcpb_discount ), $price, $product->get_id(), array() );
			$price    = $price - $discount;
			$price    = yith_wcpb_round_bundled_item_price( $price );
		}

		if ( isset( $product->bundled_item_price_zero ) ) {
			$price = 0;
		}

		return $price;
	}

	/**
	 * Add regular price actions
	 */
	public function add_regular_price_actions() {
		add_filter( 'woocommerce_product_get_regular_price', array( YITH_Role_Based_Prices_Product(), 'get_price' ), 20, 2 );
		add_filter( 'woocommerce_product_variation_get_regular_price', array( YITH_Role_Based_Prices_Product(), 'get_price' ), 20, 2 );
		add_filter( 'woocommerce_get_variation_regular_price', array( YITH_Role_Based_Prices_Product(), 'get_variation_role_price' ), 20, 4 );
	}

	/**
	 * Remove regular price actions
	 */
	public function remove_regular_price_actions() {
		remove_filter( 'woocommerce_product_get_regular_price', array( YITH_Role_Based_Prices_Product(), 'get_price' ), 20 );
		remove_filter( 'woocommerce_product_variation_get_regular_price', array( YITH_Role_Based_Prices_Product(), 'get_price' ), 20 );
		remove_filter( 'woocommerce_get_variation_regular_price', array( YITH_Role_Based_Prices_Product(), 'get_variation_role_price' ), 20 );
	}

	/**
	 * Add regular price actions (including variations)
	 */
	public function add_regular_price_and_variations_regular_price_actions() {
		$this->add_regular_price_actions();
		add_filter( 'woocommerce_variation_prices_regular_price', array( YITH_Role_Based_Prices_Product(), 'get_price' ), 5, 2 );

	}

	/**
	 * Remove regular price actions (including variations)
	 */
	public function remove_regular_price_and_variations_regular_price_actions() {
		$this->remove_regular_price_actions();
		remove_filter( 'woocommerce_variation_prices_regular_price', array( YITH_Role_Based_Prices_Product(), 'get_price' ), 5 );
	}

	/**
	 * Add bundled discount attribute to apply discount on subtotals and totals.
	 *
	 * @param WC_Cart $cart_obj Cart object.
	 */
	public function add_bundled_attribute( $cart_obj ) {
		$cart = $cart_obj->get_cart();

		foreach ( $cart as $cart_item_key => $cart_item ) {
			if ( isset( $cart_item['bundled_by'] ) ) {
				$cart_item['data']->yith_wcpb_discount = $cart_item['discount'] ?? 0;
			}
		}

	}

	/**
	 * Remove bundled discount attribute to prevent issues in cart.
	 *
	 * @param WC_Cart $cart_obj Cart object.
	 */
	public function remove_bundled_attribute( $cart_obj ) {
		$cart = $cart_obj->get_cart();

		foreach ( $cart as $cart_item_key => $cart_item ) {
			if ( isset( $cart_item['bundled_by'] ) && isset( $cart_item['data']->yith_wcpb_discount ) ) {
				unset( $cart_item['data']->yith_wcpb_discount );
			}
		}

	}
}

/**
 * Unique access to instance of YITH_WCPB_Role_Based_Compatibility class
 *
 * @return YITH_WCPB_Role_Based_Compatibility
 * @since 1.0.11
 */
function yith_wcpb_role_based_compatibility() {
	return YITH_WCPB_Role_Based_Compatibility::get_instance();
}
