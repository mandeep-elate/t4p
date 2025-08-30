<?php
/**
 * Cart & Checkout blocks class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

if ( ! class_exists( 'YITH_WCPB_Cart_Checkout_Blocks_Premium' ) ) {
	/**
	 * Cart & Checkout blocks  class.
	 * Manage Cart and Checkout blocks' behaviors.
	 *
	 * @since 1.29.0
	 */
	class YITH_WCPB_Cart_Checkout_Blocks_Premium extends YITH_WCPB_Cart_Checkout_Blocks {
		/**
		 * Single instance of the class
		 *
		 * @var self
		 */
		protected static $instance;

		/**
		 * Get bundle data of the cart item.
		 *
		 * @param array $cart_item Cart item data.
		 *
		 * @return array
		 */
		public function get_cart_item_bundle_data( $cart_item ): array {
			$is_bundle       = isset( $cart_item['cartstamp'] );
			$is_bundled_item = ! $is_bundle && isset( $cart_item['bundled_by'] );

			$data = array(
				'isBundle'      => $is_bundle,
				'isBundledItem' => $is_bundled_item,
			);

			$bundle_cart_item = $is_bundle ? $cart_item : array();
			$bundle_cart_item = $is_bundled_item ? ( WC()->cart->cart_contents[ $cart_item['bundled_by'] ] ?? array() ) : $bundle_cart_item;
			if ( $bundle_cart_item ) {
				$bundle_product = $bundle_cart_item['data'] ?? false;

				$data['bundleData'] = array(
					'hasFixedPrice'   => ! ! $bundle_product && empty( $bundle_product->per_items_pricing ),
					'bundledItemKeys' => array_values( $bundle_cart_item['bundled_items'] ?? array() ),
				);
			}

			if ( $is_bundled_item ) {
				$has_custom_name = ! empty( $cart_item['yith_wcpb_has_custom_title'] ) && isset( $cart_item['yith_wcpb_title'] );

				$data['itemData'] = array(
					'hasCustomName'     => $has_custom_name,
					'name'              => $has_custom_name ? $cart_item['yith_wcpb_title'] : '',
					'isHidden'          => ! ! ( $cart_item['yith_wcpb_hidden'] ?? false ),
					'isThumbnailHidden' => ! ! ( $cart_item['yith_wcpb_hide_thumbnail'] ?? false ),
				);
			}

			return $data;
		}

		/**
		 * Get frontend style.
		 *
		 * @return string
		 */
		protected function get_frontend_style() {
			$style = '';

			$hide_bundled_items_in_cart            = get_option( 'yith-wcpb-hide-bundled-items-in-cart', 'no' ) === 'yes';
			$show_item_prices_in_cart_and_checkout = get_option( 'yith-wcpb-show-bundled-item-prices', 'no' ) === 'yes';

			if ( $hide_bundled_items_in_cart ) {
				$style .= '
				.wc-block-cart .wc-block-cart-items tr.yith-wcpb-is-bundled-item{display: none !important;}
				.wc-block-components-order-summary .wc-block-components-order-summary-item.yith-wcpb-is-bundled-item{display: none !important;}
				';
			} else {
				$style .= '.wc-block-components-order-summary .wc-block-components-order-summary-item.yith-wcpb-is-bundle:after {border: none !important;}';
			}

			if ( ! $show_item_prices_in_cart_and_checkout ) {
				$style .= '
				.wc-block-cart .wc-block-cart-items tr.yith-wcpb-is-bundled-item .wc-block-cart-item__product .wc-block-cart-item__prices{display: none !important;}
				.wc-block-cart .wc-block-cart-items tr.yith-wcpb-is-bundled-item .wc-block-components-sale-badge{display: none !important;}
				.wc-block-components-order-summary .wc-block-components-order-summary-item.yith-wcpb-is-bundled-item .wc-block-components-product-price{display: none !important;}
				';
			}

			return $style;
		}
	}
}
