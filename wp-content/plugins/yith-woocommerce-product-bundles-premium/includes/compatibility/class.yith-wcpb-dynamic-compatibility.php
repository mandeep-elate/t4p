<?php
/**
 * YITH WooCommerce Dynamic Pricing and Discount integration class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

/**
 * YITH WooCommerce Dynamic Pricing and Discount Compatibility Class
 *
 * @class   YITH_WCPB_Dynamic_Compatibility
 * @since   1.0.21
 */
class YITH_WCPB_Dynamic_Compatibility {

	/**
	 * Single instance of the class
	 *
	 * @var YITH_WCPB_Dynamic_Compatibility
	 */
	protected static $instance;

	/**
	 * Returns single instance of the class
	 *
	 * @return YITH_WCPB_Dynamic_Compatibility
	 */
	public static function get_instance() {
		return ! is_null( self::$instance ) ? self::$instance : self::$instance = new self();
	}

	/**
	 * Constructor
	 */
	protected function __construct() {
		add_filter( 'ywdpd_get_price_exclusion', array( $this, 'dynamic_bundle_exclusion' ), 10, 3 );
		add_filter( 'ywdpd_exclude_products_from_discount', array( $this, 'bundle_exclusion_from_discount' ), 10, 2 );
		add_filter( 'ywdpd_get_cart_item_quantities', array( $this, 'remove_bundle_quantities_in_cart' ), 10 );

	}

	/**
	 * Exclude dynamic pricing for bundle product.
	 *
	 * @param bool       $exclude Exclude flag.
	 * @param string     $price   The price.
	 * @param WC_Product $product The product.
	 *
	 * @return bool
	 */
	public function dynamic_bundle_exclusion( $exclude, $price, $product ) {
		if ( $product && $product->is_type( 'yith_bundle' ) ) {
			return true;
		}

		return $exclude;
	}

	/**
	 * Exclude bundle products for discounts.
	 *
	 * @param bool       $exclude Exclude flag.
	 * @param WC_Product $product The product.
	 *
	 * @return bool
	 */
	public function bundle_exclusion_from_discount( $exclude, $product ) {
		if ( $product && $product->is_type( 'yith_bundle' ) ) {
			return true;
		}

		return $exclude;
	}

	/**
	 * Remove bundle quantities in cart.
	 *
	 * @param array $quantities The quantities.
	 *
	 * @return array
	 */
	public function remove_bundle_quantities_in_cart( $quantities ) {
		if ( ! ! $quantities && is_array( $quantities ) ) {
			$cart = WC()->cart->get_cart();

			foreach ( $cart as $cart_item_key => $values ) {
				$product = $values['data'];

				if ( isset( $values['bundled_by'] ) && isset( $quantities[ $product->get_stock_managed_by_id() ] ) ) {
					unset( $quantities[ $product->get_stock_managed_by_id() ] );
				}
			}
		}

		return $quantities;
	}

}

/**
 * Unique access to instance of YITH_WCPB_Dynamic_Compatibility class
 *
 * @return YITH_WCPB_Dynamic_Compatibility
 * @since 1.0.21
 */
function yith_wcpb_dynamic_compatibility() {
	return YITH_WCPB_Dynamic_Compatibility::get_instance();
}
