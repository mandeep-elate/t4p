<?php
/**
 * Out-of-stock Sync feature class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

if ( ! class_exists( 'YITH_WCPB_Out_Of_Stock_Sync' ) ) {

	/**
	 * Class YITH_WCPB_Out_Of_Stock_Sync
	 *
	 * @since  1.4.0
	 */
	class YITH_WCPB_Out_Of_Stock_Sync {
		/**
		 * Single instance of the class.
		 *
		 * @var YITH_WCPB_Out_Of_Stock_Sync
		 */
		private static $instance;

		/**
		 * Products to check.
		 *
		 * @var array
		 */
		private $products_to_check = array();

		/**
		 * Singleton implementation.
		 *
		 * @return YITH_WCPB_Out_Of_Stock_Sync
		 */
		public static function get_instance() {
			return ! is_null( self::$instance ) ? self::$instance : self::$instance = new self();
		}

		/**
		 * YITH_WCPB_Out_Of_Stock_Sync constructor.
		 */
		private function __construct() {
			if ( yith_wcpb_settings()->is_out_of_stock_sync_enabled() ) {
				add_action( 'woocommerce_product_object_updated_props', array( $this, 'item_stock_status_change' ), 10, 2 );
				add_action( 'woocommerce_update_product', array( $this, 'item_stock_status_change_update' ), 10, 2 );
				if ( yith_wcpb_check_all_variations_for_stock_status() ) {
					add_action( 'woocommerce_update_product_variation', array( $this, 'item_stock_status_change_update' ), 10, 2 );
				}
			}
		}

		/**
		 * Check for stock status change for products
		 *
		 * @param WC_Product $product       The product.
		 * @param array      $updated_props Updated props.
		 */
		public function item_stock_status_change( $product, $updated_props ) {
			$types = array_keys( yith_wcpb_get_allowed_product_types() );
			if ( in_array( 'variable', $types, true ) ) {
				$types[] = 'variation';
			}
			if ( in_array( 'stock_status', $updated_props, true ) && $product && $product->is_type( $types ) ) {
				$this->add_product_to_check( $product->get_id() );
			}
		}

		/**
		 * Check for bundle stock when updating the stock status in bundled items
		 *
		 * @param int             $product_id Product ID.
		 * @param WC_Product|bool $product    The product.
		 */
		public function item_stock_status_change_update( $product_id, $product = false ) {
			if ( ! $product ) {
				// The $product param of the 'woocommerce_update_product' action is available since WooCommerce 3.7.
				$product = wc_get_product( $product_id );
			}

			if ( $product && $this->is_product_to_check( $product_id ) ) {
				if ( $product->is_type( 'variation' ) ) {
					$product_id = $product->get_parent_id();
					$product    = wc_get_product( $product_id );
				}

				$bundle_products = yith_wcpb_get_bundle_products_by_item( $product );

				if ( $bundle_products ) {
					foreach ( $bundle_products as $id ) {
						$product = wc_get_product( $id );
						if ( $product && $product->is_type( 'yith_bundle' ) ) {
							// The check for the stock status is made in the WC_Product_YITH_Bundle constructor. So we need only to save changes.
							$product->save();
						}
					}
				}
				$this->remove_product_to_check( $product_id );
			}
		}


		/**
		 * Add product to check
		 *
		 * @param int $product_id The product ID.
		 */
		public function add_product_to_check( $product_id ) {
			$this->products_to_check = array_unique( array_merge( $this->products_to_check, array( absint( $product_id ) ) ) );
		}

		/**
		 * Remove product to check
		 *
		 * @param int $product_id The product ID.
		 */
		public function remove_product_to_check( $product_id ) {
			$this->products_to_check = array_diff( $this->products_to_check, array( absint( $product_id ) ) );
		}

		/**
		 * Is this product to be checked?
		 *
		 * @param int $product_id The product ID.
		 *
		 * @return bool
		 */
		public function is_product_to_check( $product_id ) {
			return in_array( absint( $product_id ), $this->products_to_check, true );
		}
	}
}
