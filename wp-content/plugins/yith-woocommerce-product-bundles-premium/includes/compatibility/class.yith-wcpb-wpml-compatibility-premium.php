<?php
/**
 * WPML integration class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

/**
 * WPML Compatibility Class
 *
 * @class   YITH_WCPB_Wpml_Compatibility
 * @since   1.0.11
 */
class YITH_WCPB_Wpml_Compatibility_Premium extends YITH_WCPB_Wpml_Compatibility {

	/**
	 * Single instance of the class
	 *
	 * @var YITH_WCPB_Wpml_Compatibility_Premium
	 */
	protected static $instance;

	/**
	 * Meta to copy.
	 *
	 * @var string[]
	 */
	public $bundle_meta_to_copy = array(
		'_yith_wcpb_bundle_data',
		'_yith_wcpb_per_item_pricing',
		'_yith_wcpb_non_bundled_shipping',
		'_yith_wcpb_bundle_advanced_options',
	);

	/**
	 * Constructor
	 */
	protected function __construct() {
		parent::__construct();

		global $sitepress;

		if ( $sitepress ) {

			add_filter( 'wcml_exception_duplicate_products_in_cart', array( $this, 'duplicate_exception_in_cart' ), 10, 2 );

			add_filter( 'wcml_cart_contents', array( $this, 'keep_bundle_keys_in_cart_contents' ), 10, 4 );

			// Multi Currency support.
			add_filter( 'wcml_multi_currency_ajax_actions', array( $this, 'filter_multi_currency_ajax_actions' ) );
		}
	}

	/**
	 * Filter multi-currency AJAX actions to autoload multi-currency actions and filters.
	 *
	 * @param string[] $actions Ajax actions.
	 *
	 * @return string[]
	 * @since 1.19.0
	 */
	public function filter_multi_currency_ajax_actions( $actions ) {
		$actions[] = 'yith_wcpb_get_bundle_total_price';

		return $actions;
	}

	/**
	 * Keep the same keys for bundled items and bundle product in Cart.
	 *
	 * @param array  $new_cart_data The new cart data.
	 * @param array  $cart_contents The cart contents.
	 * @param string $key           The cart item key.
	 * @param string $new_key       The new cart item key.
	 *
	 * @return array
	 * @since 2.4.1
	 */
	public function keep_bundle_keys_in_cart_contents( $new_cart_data, $cart_contents, $key, $new_key ) {
		if ( isset( $cart_contents[ $key ]['bundled_by'] ) || isset( $cart_contents[ $key ]['cartstamp'] ) ) {
			$new_cart_data[ $key ] = $new_cart_data[ $new_key ];
			unset( $new_cart_data[ $new_key ] );
		}

		return $new_cart_data;
	}

	/**
	 * Sync keys before loading cart from session, since WPML changes the cart item keys based on language.
	 */
	public function sync_keys_in_session_cart() {
		$cart_contents = WC()->session->get( 'cart', null );

		if ( $cart_contents ) {
			$bundle_keys_old_new_map  = array();
			$bundle_and_bundled_items = array();

			foreach ( $cart_contents as $key => $item ) {
				if ( isset( $item['cartstamp'] ) ) {
					$old_key = $item['yith_parent'] ?? '';
					if ( $old_key && $old_key !== $key ) {
						$bundle_keys_old_new_map[ $old_key ] = $key;
					}
				}
			}

			foreach ( $cart_contents as $key => $item ) {
				if ( isset( $item['bundled_by'] ) ) {
					$bundle_key                                = $bundle_keys_old_new_map[ $item['bundled_by'] ] ?? $item['bundled_by'];
					$bundle_and_bundled_items[ $bundle_key ]   = $bundle_and_bundled_items[ $bundle_key ] ?? array();
					$bundle_and_bundled_items[ $bundle_key ][] = $key;
				}
			}

			foreach ( $cart_contents as $key => $item ) {
				if ( isset( $item['cartstamp'] ) ) {
					$cart_contents[ $key ]['yith_parent']   = $bundle_keys_old_new_map[ $item['yith_parent'] ] ?? $item['yith_parent'];
					$cart_contents[ $key ]['bundled_items'] = $bundle_and_bundled_items[ $key ] ?? $item['bundled_items'];
				}

				if ( isset( $item['bundled_by'] ) ) {
					$cart_contents[ $key ]['bundled_by'] = $bundle_keys_old_new_map[ $item['bundled_by'] ] ?? $item['bundled_by'];
				}
			}

			WC()->session->set( 'cart', $cart_contents );
		}
	}

	/**
	 * Search for bundled items and synchronize the bundle product info
	 *
	 * @param WC_Cart $cart The cart.
	 */
	public function sync_bundled_item_keys( $cart ) {

		// Fix bundled item keys.
		foreach ( $cart->cart_contents as $key => $cart_item ) {
			if ( isset( $cart_item['cartstamp'] ) && isset( $cart_item['bundled_items'] ) ) {
				$cart->cart_contents[ $key ]['bundled_items'] = array();
			}
		}
		foreach ( $cart->cart_contents as $key => $cart_item ) {
			if ( isset( $cart_item['bundled_by'] ) && isset( $cart->cart_contents[ $cart_item['bundled_by'] ]['bundled_items'] ) ) {
				$cart->cart_contents[ $cart_item['bundled_by'] ]['bundled_items'][] = $key;
				$cart->cart_contents[ $cart_item['bundled_by'] ]['bundled_items']   = array_unique( $cart->cart_contents[ $cart_item['bundled_by'] ]['bundled_items'] );
			}
		}
	}

	/**
	 * Duplicate exception in cart
	 *
	 * @param bool  $exclude   Exclude flag.
	 * @param array $cart_item Cart item.
	 *
	 * @return bool
	 */
	public function duplicate_exception_in_cart( $exclude, $cart_item ) {
		if ( isset( $cart_item['bundled_items'] ) || isset( $cart_item['bundled_by'] ) ) {
			$exclude = true;
		}

		return $exclude;
	}

	/**
	 * Save temp bundle products.
	 *
	 * @param WC_Cart $cart Cart.
	 */
	public function save_temp_bundle_products( $cart ) {
		global $woocommerce;
		$temp_bundle_products = array();

		if ( ! empty( $cart->temp_bundle_products ) ) {
			return;
		}

		foreach ( $cart->cart_contents as $key => $item ) {
			if ( isset( $item['bundled_by'] ) || isset( $item['cartstamp'] ) ) {
				$temp_bundle_products[ $key ] = $item;
				unset( $cart->cart_contents[ $key ] );
			}
		}

		$cart->temp_bundle_products = $temp_bundle_products;

		$woocommerce->session->cart = $cart;
	}

	/**
	 * Restore temp bundle products.
	 *
	 * @param WC_Cart $cart Cart.
	 */
	public function restore_temp_bundle_products( $cart ) {
		global $woocommerce;

		if ( empty( $cart->temp_bundle_products ) ) {
			return;
		}

		$temp_bundle_products = $cart->temp_bundle_products;
		unset( $cart->temp_bundle_products );

		$cart->cart_contents = array_merge( $cart->cart_contents, $temp_bundle_products );

		$woocommerce->session->cart = $cart;
	}

	/**
	 * Get WPML product ID in current language.
	 *
	 * @param int $id The ID.
	 *
	 * @return int
	 */
	public function get_wpml_product_id_current_language( $id ) {
		return $this->wpml_object_id( $id, 'product', true );
	}

	/**
	 * Get WPML term slug in current language.
	 *
	 * @param string $slug      The slug.
	 * @param string $attribute The attribute.
	 *
	 * @return mixed
	 */
	public function get_wpml_term_slug_current_language( $slug, $attribute ) {
		global $woocommerce_wpml;

		if ( isset( $woocommerce_wpml ) ) {
			if ( $woocommerce_wpml->attributes->is_translatable_attribute( $attribute ) ) {
				$default_term_id = $woocommerce_wpml->terms->wcml_get_term_id_by_slug( $attribute, $slug );
				$tr_id           = apply_filters( 'translate_object_id', $default_term_id, $attribute, false );

				if ( $tr_id ) {
					$translated_term = $woocommerce_wpml->terms->wcml_get_term_by_id( $tr_id, $attribute );

					return $translated_term->slug;
				}
			}
		}

		return $slug;
	}
}
