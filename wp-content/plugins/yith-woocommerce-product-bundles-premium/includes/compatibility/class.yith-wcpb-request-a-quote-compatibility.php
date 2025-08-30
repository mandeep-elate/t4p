<?php
/**
 * YITH WooCommerce Request a Quote integration class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

/**
 * YITH WooCommerce Request a Quote Compatibility Class
 *
 * @class   YITH_WCPB_Request_A_Quote_Compatibility
 * @since   1.0.28
 */
class YITH_WCPB_Request_A_Quote_Compatibility {

	/**
	 * Single instance of the class
	 *
	 * @var YITH_WCPB_Request_A_Quote_Compatibility
	 */
	protected static $instance;

	/**
	 * Returns single instance of the class
	 *
	 * @return YITH_WCPB_Request_A_Quote_Compatibility
	 */
	public static function get_instance() {
		return ! is_null( self::$instance ) ? self::$instance : self::$instance = new self();
	}

	/**
	 * Constructor
	 */
	protected function __construct() {

		add_filter( 'yith_wcpb_woocommerce_get_price_html', array( $this, 'show_product_price' ), 10 );
		add_filter( 'yith_wcpb_show_bundled_items_prices', array( $this, 'check_show_bundled_items_prices' ), 10, 3 );
		add_filter( 'yith_wcpb_ajax_update_price_enabled', array( $this, 'check_ajax_update_price_enabled' ), 10, 2 );

		add_filter( 'ywraq_add_item', array( $this, 'add_bundle_to_quote' ), 11, 2 );
		add_action( 'ywraq_after_request_quote_view_item', array( $this, 'add_bundle_in_raq_table' ), 10, 2 );
		add_action( 'ywraq_after_request_quote_view_item_on_email', array( $this, 'add_bundle_in_raq_table' ), 10, 2 );

		add_action( 'ywraq_quote_adjust_price', array( $this, 'adjust_bundle_price' ), 10, 2 );

		add_action( 'ywraq_from_cart_to_order_item', array( $this, 'add_order_item_meta' ), 10, 4 );

		add_filter( 'ywraq_order_cart_item_data', array( $this, 'order_cart_item_data' ), 10, 3 );

		add_filter( 'ywraq_add_to_cart_validation', array( $this, 'remove_bundled_items' ), 10, 6 );

		add_filter( 'yith_wcpb_woocommerce_get_cart_item_from_session', array( $this, 'bundled_by_from_session' ), 10, 1 );
		add_filter( 'yith_wcpb_woocommerce_cart_item_price', array( $this, 'set_bundle_price' ), 10, 4 );
		add_filter( 'yith_wcpb_woocommerce_check_cart_items_for_bundle', array( $this, 'not_check_cart_items_for_raq_bundle' ), 10, 2 );

		add_filter( 'ywraq_formatted_line_total', array( $this, 'order_bundled_item_subtotal' ), 99, 3 );

		add_filter( 'yith_ywraq_item_class', array( $this, 'add_bundle_parent_class' ), 10, 3 );
		add_filter( 'yith_ywraq_item_attributes', array( $this, 'add_bundle_attributes' ), 10, 3 );

		// Prices of bundle is the sum of the items with taxes, so the taxes should be applied for each item, instead of applying them to the bundle product.
		add_filter( 'yith_ywraq_product_price', array( $this, 'bundle_price_in_raq_table_total' ), 10, 3 );
		add_filter( 'yith_ywraq_product_price_html', array( $this, 'bundle_price_in_raq_table' ), 10, 3 );
		add_filter( 'yith_ywraq_product_subtotal_html', array( $this, 'bundle_subtotal_in_raq_table' ), 10, 3 );

		add_filter( 'yith_wcpb_get_current_page_info', array( $this, 'filter_page_info' ), 10, 1 );
		add_filter( 'yith_wcpb_get_frontend_assets', array( $this, 'filter_frontend_assets' ), 10, 1 );
	}

	/**
	 * Filter the current page info to enqueue plugin assets in Quote page.
	 *
	 * @param array $info The page info.
	 *
	 * @return array
	 * @since 1.4.10
	 */
	public function filter_page_info( $info ) {
		global $post;

		$raq_page_id      = absint( YITH_Request_Quote()->get_raq_page_id() );
		$info['raq-page'] = is_singular() && is_a( $post, 'WP_Post' ) && $post->ID === $raq_page_id;

		return $info;
	}

	/**
	 * Filter frontend assets to enqueue plugin assets in Quote page.
	 *
	 * @param array $assets The assets.
	 *
	 * @return array
	 * @since 1.4.10
	 */
	public function filter_frontend_assets( $assets ) {
		if (
			isset( $assets['styles'], $assets['styles']['yith_wcpb_bundle_frontend_style'], $assets['styles']['yith_wcpb_bundle_frontend_style']['where'] ) &&
			is_array( $assets['styles']['yith_wcpb_bundle_frontend_style']['where'] )
		) {
			$assets['styles']['yith_wcpb_bundle_frontend_style']['where'][] = 'raq-page';
		}

		return $assets;
	}

	/**
	 * Check for which users will not see the price.
	 *
	 * @param string|float $price Price.
	 *
	 * @return string
	 */
	public function show_product_price( $price ) {

		$hide_price = get_option( 'ywraq_hide_price' ) === 'yes';

		return ( $hide_price ) ? '' : $price;

	}

	/**
	 * Check sho bundled item prices.
	 *
	 * @param bool                   $show         Show flag.
	 * @param YITH_WC_Bundled_Item   $bundled_item Bundled item.
	 * @param WC_Product_Yith_Bundle $product      Bundle product.
	 *
	 * @return bool
	 * @since   1.1.4
	 */
	public function check_show_bundled_items_prices( $show, $bundled_item, $product ) {
		return $show && 'yes' !== get_option( 'ywraq_hide_price' );
	}

	/**
	 * Check ajax update price enabled
	 *
	 * @param bool                   $enabled Enabled flag.
	 * @param WC_Product_Yith_Bundle $product Bundle product.
	 *
	 * @return bool
	 * @since   1.1.4
	 */
	public function check_ajax_update_price_enabled( $enabled, $product ) {

		return $enabled && 'yes' !== get_option( 'ywraq_hide_price' );
	}


	/* --------------------------- Request a Quote TABLE ------------------------------ */

	/**
	 * Adjust bundle price.
	 *
	 * @param array      $raq     RAQ info.
	 * @param WC_Product $product The product.
	 *
	 * @throws WC_Data_Exception The exception.
	 */
	public function adjust_bundle_price( $raq, $product ) {

		if ( $product->is_type( 'yith_bundle' ) ) {
			/**
			 * The product.
			 *
			 * @var WC_Product_Yith_Bundle $product
			 */
			if ( $product->per_items_pricing ) {
				$raq_quantity = $raq['quantity'] ?? 1;
				$price        = $this->get_bundle_price_from_raq( $product, $raq );
				$product->set_price( $price / $raq_quantity );
				// Disable taxes for total calculation, since taxes are already added to the bundle items.
				$product->set_tax_status( 'none' );
			}
		}
	}

	/**
	 * Add bundle to quote.
	 *
	 * @param array $raq         RAQ data.
	 * @param array $product_raq Product RAQ data.
	 *
	 * @return mixed
	 */
	public function add_bundle_to_quote( $raq, $product_raq ) {
		$product_id = $raq['product_id'] ?? false;
		if ( $product_id ) {
			$product = wc_get_product( $product_id );
			if ( $product && $product->is_type( 'yith_bundle' ) ) {
				$bundle_info = array();
				foreach ( $product_raq as $key => $value ) {
					if ( strpos( $key, 'yith_bundle_' ) === 0 ) {
						$bundle_info[ $key ] = $value;
					}
				}

				$raq['yith-bundle-add-to-cart-params'] = $bundle_info;
			}
		}

		return $raq;
	}

	/**
	 * Add bundle in RAQ table.
	 *
	 * @param array  $raq_content RAQ content.
	 * @param string $key         the key.
	 */
	public function add_bundle_in_raq_table( $raq_content, $key ) {
		$raq_info   = $raq_content[ $key ];
		$product_id = $raq_info['product_id'];
		if ( $product_id ) {
			$product = wc_get_product( $product_id );
			if ( $product && $product->is_type( 'yith_bundle' ) ) {
				/**
				 * The bundle product.
				 *
				 * @var WC_Product_Yith_Bundle $product
				 */
				$bundled_items = $product->get_bundled_items();

				$raq_quantity = $raq_info['quantity'] ?? 1;
				$bundle_info  = $raq_info['yith-bundle-add-to-cart-params'] ?? array();
				if ( $bundled_items ) {
					foreach ( $bundled_items as $item ) {
						$id = $item->item_id;

						if ( $item->is_hidden() ) {
							continue;
						}

						if ( $item->is_optional() && ! isset( $bundle_info[ 'yith_bundle_optional_' . $id ] ) ) {
							continue;
						}

						$quantity = $bundle_info[ 'yith_bundle_quantity_' . $id ] ?? 0;

						if ( ! $quantity ) {
							continue;
						}

						$variation_id = '';
						$variations   = array();
						$prod         = $item->product;

						if ( isset( $bundle_info[ 'yith_bundle_variation_id_' . $id ] ) ) {
							$bundle_variations = $product->get_bundle_variation_attributes();
							$variations        = $bundle_variations[ $id ] ?? array();
							$product_id        = $bundle_info[ 'yith_bundle_variation_id_' . $id ];
							$variation_id      = $product_id;

							$prod = wc_get_product( $product_id );
						}

						if ( ! $prod ) {
							continue;
						}

						$quantity = $quantity * $raq_quantity;

						$link  = $prod->is_visible() ? get_permalink( $prod->get_id() ) : '#';
						$title = esc_attr( $prod->get_title() );
						$image = ! $item->hide_thumbnail ? $this->get_image( $prod ) : '';

						$is_raq_email = current_action() === 'ywraq_after_request_quote_view_item_on_email';

						$bundled_item_data = compact( 'id', 'prod', 'link', 'title', 'image', 'quantity', 'variation_id', 'variations', 'raq_info', 'raq_content', 'key' );

						$template = ! $is_raq_email ? 'compatibility/request-a-quote/raq-table-row.php' : 'compatibility/request-a-quote/raq-table-row-email.php';
						wc_get_template( $template, $bundled_item_data, '', YITH_WCPB_TEMPLATE_PATH . '/premium/' );
					}
				}
			}
		}
	}

	/**
	 * Get product image.
	 *
	 * @param WC_Product $product The product.
	 *
	 * @return string
	 */
	public function get_image( $product ) {
		$dimensions = wc_get_image_size( 'shop_thumbnail' );
		$height     = esc_attr( $dimensions['height'] );
		$width      = esc_attr( $dimensions['width'] );
		$src        = ( $product->get_image_id() ) ? current( wp_get_attachment_image_src( $product->get_image_id(), 'shop_thumbnail' ) ) : wc_placeholder_img_src();

		return '<a href="' . esc_url( $product->get_permalink() ) . '"><img src="' . esc_url( $src ) . '" height="' . esc_attr( $height ) . '" width="' . esc_attr( $width ) . '" /></a>';
	}

	/**
	 * Add bundle attributes.
	 *
	 * @param string $attributes  Attributes.
	 * @param array  $raq_content RAQ content.
	 * @param string $key         The key.
	 *
	 * @return string
	 */
	public function add_bundle_attributes( $attributes, $raq_content, $key ) {
		$raq_info   = $raq_content[ $key ];
		$product_id = $raq_info['product_id'];
		if ( $product_id ) {
			$product = wc_get_product( $product_id );
			if ( $product && $product->is_type( 'yith_bundle' ) ) {
				$attributes .= ' data-bundle-key="' . esc_attr( $key ) . '" ';
			}
		}

		return $attributes;
	}

	/**
	 * Add bundle parent class
	 *
	 * @param string $class       The class.
	 * @param array  $raq_content RAQ content.
	 * @param string $key         The key.
	 *
	 * @return string
	 */
	public function add_bundle_parent_class( $class, $raq_content, $key ) {
		$raq_info   = $raq_content[ $key ];
		$product_id = $raq_info['product_id'];
		if ( $product_id ) {
			$product = wc_get_product( $product_id );
			if ( $product && $product->is_type( 'yith_bundle' ) ) {
				$class .= ' bundle-parent';
			}
		}

		return $class;
	}

	/**
	 * Bundle price in RAQ table total.
	 *
	 * @param string     $price   The price.
	 * @param WC_Product $product The product.
	 * @param array      $raq     RAQ data.
	 *
	 * @return string
	 */
	public function bundle_price_in_raq_table_total( $price, $product, $raq ) {
		if ( $product->is_type( 'yith_bundle' ) ) {
			/**
			 * The bundle product.
			 *
			 * @var WC_Product_Yith_Bundle $product
			 */
			if ( $product->per_items_pricing ) {
				$price = $this->get_bundle_price_from_raq( $product, $raq );
			}
		}

		return $price;
	}

	/**
	 * Bundle price in RAQ table.
	 *
	 * @param string     $price   The price.
	 * @param WC_Product $product The product.
	 * @param array      $raq     RAQ data.
	 *
	 * @return string
	 */
	public function bundle_price_in_raq_table( $price, $product, $raq ) {
		$raq_quantity = isset( $raq['quantity'] ) ? $raq['quantity'] : 1;
		if ( $product->is_type( 'yith_bundle' ) ) {
			/**
			 * The bundle product.
			 *
			 * @var WC_Product_Yith_Bundle $product
			 */
			if ( $product->per_items_pricing ) {
				$price = $this->get_bundle_price_from_raq( $product, $raq );
				$price = wc_price( $price / $raq_quantity );
			}
		}

		return $price;
	}

	/**
	 * Bundle subtotal in RAQ table.
	 *
	 * @param string     $price   The price.
	 * @param WC_Product $product The product.
	 * @param array      $raq     RAQ data.
	 *
	 * @return string
	 */
	public function bundle_subtotal_in_raq_table( $price, $product, $raq ) {
		if ( $product->is_type( 'yith_bundle' ) ) {
			/**
			 * The bundle product.
			 *
			 * @var WC_Product_Yith_Bundle $product
			 */
			if ( $product->per_items_pricing ) {
				$price = $this->get_bundle_price_from_raq( $product, $raq );
				$price = wc_price( $price );
			}
		}

		return $price;
	}

	/**
	 * Get bundle price from RAQ.
	 *
	 * @param WC_Product_Yith_Bundle $product The product.
	 * @param array                  $raq     RAQ data.
	 *
	 * @return mixed|string|void
	 */
	public function get_bundle_price_from_raq( $product, $raq ) {
		$raq_quantity = $raq['quantity'] ?? 1;

		if ( $product->is_type( 'yith_bundle' ) ) {
			if ( $product->per_items_pricing ) {
				$bundled_items = $product->get_bundled_items();

				$array_quantity = array();
				$array_opt      = array();
				$array_var      = array();
				if ( $bundled_items ) {
					$loop        = 0;
					$bundle_info = $raq['yith-bundle-add-to-cart-params'] ?? array();
					foreach ( $bundled_items as $item ) {
						$id = $item->item_id;

						if ( $item->is_optional() && isset( $bundle_info[ 'yith_bundle_optional_' . $id ] ) ) {
							$array_opt[ $loop ] = 1;
						}

						if ( isset( $bundle_info[ 'yith_bundle_quantity_' . $id ] ) ) {
							$array_quantity[ $loop ] = $bundle_info[ 'yith_bundle_quantity_' . $id ];
						} else {
							$array_quantity[ $loop ] = 0;
						}

						if ( isset( $bundle_info[ 'yith_bundle_variation_id_' . $id ] ) ) {
							$array_var[ $loop ] = $bundle_info[ 'yith_bundle_variation_id_' . $id ];
						} else {
							$array_var[ $loop ] = '';
						}
						$loop ++;
					}

					$price = $product->get_per_item_price_tot_with_params( $array_quantity, $array_opt, $array_var, false );

					return $price * $raq_quantity;
				}
			}
		}

		return $product->get_price() * $raq_quantity;
	}

	/**
	 * Order bundled item subtotal
	 *
	 * @param string   $line_total Line total.
	 * @param array    $item       The item.
	 * @param WC_Order $order      The order.
	 *
	 * @return string
	 */
	public function order_bundled_item_subtotal( $line_total, $item, $order ) {
		$show_bundled_item_subtotal = 'price-in-bundled-items' === get_option( 'yith-wcpb-pip-bundle-order-pricing', 'price-in-bundle' );
		if ( isset( $item['bundled_by'] ) && ! $show_bundled_item_subtotal ) {
			return '';
		}

		return $line_total;
	}

	/**
	 * "Bundled by" from session.
	 *
	 * @param array $cart_item Cart item.
	 *
	 * @return array
	 */
	public function bundled_by_from_session( $cart_item ) {
		$cart_contents = ! empty( WC()->cart ) ? WC()->cart->cart_contents : '';
		if ( isset( $cart_item['bundled_by'] ) ) {
			$bundle_cart_key = $cart_item['bundled_by'];

			if ( isset( $cart_contents[ $bundle_cart_key ] ) ) {
				$parent = $cart_contents[ $bundle_cart_key ]['data'];
				if ( ! $parent->per_items_pricing || isset( $cart_contents[ $bundle_cart_key ]['ywraq_price'] ) ) {
					$price = $cart_item['ywraq_price'] ?? 0;
					$cart_item['data']->set_price( $price );
				}
			}
		}

		return $cart_item;
	}

	/**
	 * Set bundle price.
	 *
	 * @param string       $price_html    The HTML price.
	 * @param string|float $price         The price.
	 * @param array        $cart_item     Cart item.
	 * @param string       $cart_item_key Cart item key.
	 *
	 * @return string
	 */
	public function set_bundle_price( $price_html, $price, $cart_item, $cart_item_key ) {
		if ( isset( $cart_item['bundled_items'] ) && isset( $cart_item['ywraq_price'] ) ) {
			return wc_price( $cart_item['ywraq_price'] );
		}

		return $price_html;
	}

	/**
	 * Not check cart items for RAQ bundle.
	 *
	 * @param bool  $check Check flag.
	 * @param array $item  The item.
	 *
	 * @return bool
	 */
	public function not_check_cart_items_for_raq_bundle( $check, $item ) {
		return $check && ! isset( $item['ywraq_price'] );
	}

	/**
	 * Bundle item subtotal
	 *
	 * @param string $subtotal      Subtotal.
	 * @param array  $cart_item     Cart item.
	 * @param string $cart_item_key Cart item key.
	 *
	 * @return string
	 */
	public function bundles_item_subtotal( $subtotal, $cart_item, $cart_item_key ) {
		if ( isset( $cart_item['bundled_items'] ) && isset( $cart_item['ywraq_price'] ) ) {
			return wc_price( $cart_item['ywraq_price'] );
		}

		return $subtotal;
	}

	/**
	 * Remove bundled items.
	 *
	 * @param bool  $valid          Valid flag.
	 * @param int   $product_id     Product ID.
	 * @param int   $quantity       Quantity.
	 * @param int   $variation_id   Variation ID.
	 * @param array $variations     Variation data.
	 * @param array $cart_item_data Cart item data.
	 *
	 * @return bool
	 */
	public function remove_bundled_items( $valid, $product_id, $quantity, $variation_id, $variations, $cart_item_data ) {
		if ( isset( $cart_item_data['bundled_by'] ) ) {
			return false;
		}

		return $valid;
	}

	/**
	 * Order cart item data.
	 *
	 * @param array    $cart_item_data Cart item data.
	 * @param array    $item           Item.
	 * @param WC_Order $order          Order.
	 *
	 * @return mixed
	 */
	public function order_cart_item_data( $cart_item_data, $item, $order ) {
		$to_copy = array(
			'yith-bundle-add-to-cart-params',
			'cartstamp',
			'bundled_by',
			'yith_parent',
			'bundled_items',
			'per_items_pricing',
			'non_bundled_shipping',
			'yith_bundle_cart_key',
		);

		foreach ( $to_copy as $c ) {
			if ( isset( $item[ $c ] ) ) {
				$cart_item_data[ $c ] = maybe_unserialize( $item[ $c ] );
			}
		}

		$cart_item_data['yith_bundle_from_raq'] = true;

		return $cart_item_data;
	}

	/**
	 * Add order item meta.
	 *
	 * @param array    $values        Values.
	 * @param string   $cart_item_key Cart item key.
	 * @param int      $item_id       Item ID.
	 * @param WC_Order $order         The order.
	 *
	 * @throws Exception The Exception.
	 */
	public function add_order_item_meta( $values, $cart_item_key, $item_id, $order ) {
		$item = $order->get_item( $item_id );
		if ( $item instanceof WC_Order_Item_Product ) {
			yith_wcpb_frontend()->woocommerce_checkout_create_order_line_item( $item, $cart_item_key, $values, $order );
			$item->save();
		}

		if ( isset( $values['yith-bundle-add-to-cart-params'] ) ) {
			wc_add_order_item_meta( $item_id, 'yith-bundle-add-to-cart-params', $values['yith-bundle-add-to-cart-params'] );
		}
	}


}

/**
 * Unique access to instance of YITH_WCPB_Request_A_Quote_Compatibility class
 *
 * @return YITH_WCPB_Request_A_Quote_Compatibility
 */
function yith_wcpb_request_a_quote_compatibility() {
	return YITH_WCPB_Request_A_Quote_Compatibility::get_instance();
}
