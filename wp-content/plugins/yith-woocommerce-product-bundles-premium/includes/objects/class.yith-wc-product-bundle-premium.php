<?php
/**
 * Bundle Product class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

// phpcs:disable Generic.Classes.DuplicateClassName.Found

if ( ! class_exists( 'WC_Product_Yith_Bundle' ) ) {
	/**
	 * Class WC_Product_Yith_Bundle
	 */
	class WC_Product_Yith_Bundle extends WC_Product {

		/**
		 * Bundle data.
		 *
		 * @var array
		 */
		public $bundle_data = array();

		/**
		 * Bundled items.
		 *
		 * @var YITH_WC_Bundled_Item[]
		 */
		private $bundled_items;

		/**
		 * Is the price calculated by the sum of bundled item prices?
		 *
		 * @var bool
		 */
		public $per_items_pricing;

		/**
		 * Is non-bundled shipping?
		 *
		 * @var bool
		 */
		public $non_bundled_shipping;

		/**
		 * Max price for per-item-pricing bundle.
		 *
		 * @var float|string
		 */
		public $price_per_item_tot_max;

		/**
		 * Price for per-item-pricing bundle.
		 *
		 * @var float|string
		 */
		public $price_per_item_tot;

		/**
		 * Advanced options.
		 *
		 * @var array
		 */
		private $advanced_options;

		/**
		 * WC_Product_Yith_Bundle constructor.
		 *
		 * @param int|WC_Product|object $product Product to init.
		 */
		public function __construct( $product ) {
			parent::__construct( $product );
			$this->init_bundle();
		}


		/**
		 * Initialize the bundle properties
		 *
		 * @return void
		 */
		private function init_bundle() {
			$id      = $this->get_wpml_parent_id();
			$product = $id !== $this->get_id() ? wc_get_product( $id ) : $this;

			$this->bundle_data          = $product->get_meta( '_yith_wcpb_bundle_data' );
			$this->per_items_pricing    = 'yes' === $product->get_meta( '_yith_wcpb_per_item_pricing' );
			$this->non_bundled_shipping = 'yes' === $product->get_meta( '_yith_wcpb_non_bundled_shipping' );

			$advanced_options         = $product->get_meta( '_yith_wcpb_bundle_advanced_options' );
			$advanced_options         = ! ! $advanced_options ? $advanced_options : array();
			$default_advanced_options = array(
				'min'          => 0,
				'max'          => 0,
				'min_distinct' => 0,
				'max_distinct' => 0,
			);
			$this->advanced_options   = wp_parse_args( $advanced_options, $default_advanced_options );

			if ( ! empty( $this->bundle_data ) ) {
				$this->load_items();
			}

			$this->price_per_item_tot_max = $this->get_per_item_price_tot_max();
			$this->price_per_item_tot     = $this->get_per_item_price_tot();

			$ajax_add_to_cart_enabled = ! $this->has_optional() && ! $this->has_variables() && ! $this->has_quantity_to_choose();
			if ( $ajax_add_to_cart_enabled ) {
				$this->supports[] = 'ajax_add_to_cart';
			}
		}

		/**
		 * Get the stock status.
		 *
		 * @param string $context The context.
		 *
		 * @return string
		 * @since 1.4.12
		 */
		public function get_stock_status( $context = 'view' ) {
			$status = parent::get_stock_status( $context );
			if ( 'view' === $context && 'instock' === $status && yith_wcpb_settings()->is_out_of_stock_sync_enabled() && ! $this->all_items_in_stock() ) {
				return 'outofstock';
			}

			return $status;
		}

		/**
		 * Set outstock status if items are out of stock and the stock sync is enabled
		 *
		 * @param string $status The status.
		 *
		 * @since 1.2.18
		 */
		public function set_stock_status( $status = 'instock' ) {
			if ( 'instock' === $status && yith_wcpb_settings()->is_out_of_stock_sync_enabled() && ! $this->all_items_in_stock() ) {
				$status = 'outofstock';
			}

			parent::set_stock_status( $status );
		}


		/**
		 * Get product type.
		 *
		 * @return string
		 */
		public function get_type() {
			return 'yith_bundle';
		}

		/**
		 * Get advanced options
		 *
		 * @param string $option The option to retrieve. Set empty to retrieve all options.
		 *
		 * @return array|false|mixed
		 */
		public function get_advanced_options( $option = '' ) {
			if ( ! $option ) {
				return $this->advanced_options;
			}

			if ( isset( $this->advanced_options[ $option ] ) ) {
				return $this->advanced_options[ $option ];
			}

			return false;
		}

		/**
		 * Retrieve the WPML parent ID.
		 *
		 * @return int
		 */
		public function get_wpml_parent_id() {
			global $sitepress;

			$id = $this->get_id();

			if ( isset( $sitepress ) ) {
				$found = false;

				$details = $sitepress->get_element_language_details( $id );
				if ( $details->trid ) {
					$current_id  = absint( $details->trid );
					$bundle_data = get_post_meta( $current_id, '_yith_wcpb_bundle_data', true );
					if ( ! ! $bundle_data ) {
						$id    = $current_id;
						$found = true;
					}
				}

				if ( ! $found ) {
					$default_language = $sitepress->get_default_language();

					$source_language = ! empty( $details->source_language_code ) ? $details->source_language_code : $default_language;
					$current_id      = $this->get_id();
					if ( function_exists( 'icl_object_id' ) ) {
						$current_id = icl_object_id( $this->get_id(), 'product', true, $source_language );
					} elseif ( function_exists( 'wpml_object_id_filter' ) ) {
						$current_id = wpml_object_id_filter( $this->get_id(), 'product', true, $source_language );
					}

					$bundle_data = get_post_meta( $current_id, '_yith_wcpb_bundle_data', true );
					if ( ! ! $bundle_data ) {
						$id = $current_id;
					}
				}
			}

			return absint( $id );
		}

		/**
		 * Load bundled items
		 */
		private function load_items() {
			$virtual = true;

			foreach ( $this->bundle_data as $b_item_id => $b_item_data ) {
				$product_id = $b_item_data['product_id'] ?? false;
				if ( ! $product_id ) {
					continue;
				}

				// Load Simple and Variable products only.
				$terms        = get_the_terms( $product_id, 'product_type' );
				$product_type = ! empty( $terms ) && isset( current( $terms )->name ) ? sanitize_title( current( $terms )->name ) : 'simple';
				if ( ! in_array( $product_type, apply_filters( 'yith_wcpb_products_allowed_load_items_box', array( 'simple', 'variable' ) ), true ) ) {
					continue;
				}

				$b_item = new YITH_WC_Bundled_Item( $this, $b_item_id );
				if ( $b_item->exists() ) {
					$this->bundled_items[ $b_item_id ] = $b_item;

					if ( ! $b_item->product->is_virtual() ) {
						$virtual = false;
					}
				}
			}
			if ( $this->non_bundled_shipping ) {
				$virtual = true;
			}
			$this->set_virtual( $virtual );
		}

		/**
		 * Return bundled items.
		 *
		 * @return YITH_WC_Bundled_Item[]
		 */
		public function get_bundled_items() {
			return ! empty( $this->bundled_items ) ? $this->bundled_items : array();
		}

		/**
		 * Returns whether or not the product is in stock.
		 *
		 * @return bool
		 */
		public function is_in_stock() {
			$status = parent::is_in_stock();

			if ( $status && yith_wcpb_settings()->is_out_of_stock_sync_enabled() ) {
				$status = $this->all_items_in_stock();
			}

			return apply_filters( 'yith_wcpb_bundle_product_is_in_stock', $status, $this );
		}

		/**
		 * Returns false if the product cannot be bought.
		 *
		 * @return bool
		 */
		public function is_purchasable() {
			$purchasable = true;

			if ( ! $this->exists() ) {
				$purchasable = false;
			} elseif ( ! $this->per_items_pricing && $this->get_price() === '' ) {
				$purchasable = false;
			} elseif ( 'publish' !== $this->get_status() && ! current_user_can( 'edit_post', $this->get_id() ) ) {
				$purchasable = false;
			}

			// Check if bundle items are purchasable.
			$bundled_items = $this->get_bundled_items();
			foreach ( $bundled_items as $bundled_item ) {
				$bundled_product = $bundled_item->get_product();
				if ( $bundled_product && ! $bundled_product->is_type( 'variable' ) && ! $bundled_product->is_purchasable() ) {
					$purchasable = false;
				}
			}

			return apply_filters( 'woocommerce_is_purchasable', $purchasable, $this );
		}

		/**
		 * Returns true if all items is in stock
		 *
		 * @return bool
		 */
		public function all_items_in_stock() {
			$response = true;

			$bundled_items = $this->get_bundled_items();
			foreach ( $bundled_items as $bundled_item ) {
				if ( $bundled_item->is_optional() ) {
					continue;
				}
				$product = $bundled_item->get_product();

				if ( yith_wcpb_check_all_variations_for_stock_status() && $bundled_item->has_variables() && $bundled_item->get_filtered_variation_ids() ) {
					foreach ( $bundled_item->get_filtered_variation_ids() as $variation_id ) {
						$product = wc_get_product( $variation_id );
						if ( $product && ( ! $product->is_in_stock() || ! $product->has_enough_stock( $bundled_item->min_quantity ) ) ) {
							$response = false;
							break 2;
						}
					}
				} else {
					if ( ! $product->is_in_stock() || ! $product->has_enough_stock( $bundled_item->min_quantity ) ) {
						$response = false;
						break;
					}
				}
			}

			return $response;
		}

		/**
		 * Return true if some item has quantity to choose
		 *
		 * @return int
		 */
		public function has_quantity_to_choose() {
			$bundled_items = $this->get_bundled_items();
			foreach ( $bundled_items as $bundled_item ) {
				if ( $bundled_item->has_quantity_to_choose() ) {
					return true;
				}
			}

			return false;
		}

		/**
		 * Return true if some item is optional
		 *
		 * @return int
		 */
		public function has_optional() {
			$bundled_items = $this->get_bundled_items();
			foreach ( $bundled_items as $bundled_item ) {
				if ( $bundled_item->is_optional() ) {
					return true;
				}
			}

			return false;
		}

		/**
		 * Returns true if one item at least is variable product.
		 *
		 * @return bool
		 */
		public function has_variables() {
			$bundled_items = $this->get_bundled_items();
			foreach ( $bundled_items as $bundled_item ) {
				if ( $bundled_item->has_variables() ) {
					return true;
				}
			}

			return false;
		}

		/**
		 * Get the add to cart url used in loops.
		 *
		 * @return string
		 */
		public function add_to_cart_url() {
			$url = ! $this->has_optional() && ! $this->has_variables() && ! $this->has_quantity_to_choose() && $this->is_purchasable() && $this->is_in_stock() && $this->all_items_in_stock() ? remove_query_arg( 'added-to-cart', add_query_arg( 'add-to-cart', $this->get_id() ) ) : get_permalink( $this->get_id() );

			return apply_filters( 'woocommerce_product_add_to_cart_url', $url, $this );
		}

		/**
		 * Get the add to cart button text
		 *
		 * @return string
		 */
		public function add_to_cart_text() {
			$add_to_cart = yith_wcpb_settings()->get_option_and_translate( 'yith-wcpb-add-to-cart-label' );
			$read_more   = __( 'Read more', 'woocommerce' );
			$text        = ! $this->has_optional() && ! $this->has_variables() && ! $this->has_quantity_to_choose() && $this->is_purchasable() && $this->is_in_stock() && $this->all_items_in_stock() ? $add_to_cart : $read_more;

			return apply_filters( 'woocommerce_product_add_to_cart_text', $text, $this );
		}

		/**
		 * Get the add to cart button text for the single page.
		 *
		 * @return string
		 */
		public function single_add_to_cart_text() {
			$add_to_cart = yith_wcpb_settings()->get_option_and_translate( 'yith-wcpb-add-to-cart-label' );

			return apply_filters( 'woocommerce_product_single_add_to_cart_text', $add_to_cart, $this );
		}

		/**
		 * Get the title of the post.
		 *
		 * @return string
		 */
		public function get_title() {

			$title = get_the_title( $this->get_id() );

			if ( $this->get_parent_id() > 0 ) {
				$title = get_the_title( $this->get_parent_id() ) . ' &rarr; ' . $title;
			}

			return apply_filters( 'woocommerce_product_title', $title, $this );
		}

		/**
		 * Sync grouped products with the children lowest price (so they can be sorted by price accurately).
		 *
		 * @access public
		 * @return void
		 */
		public function grouped_product_sync() {
			if ( ! $this->get_parent_id() ) {
				return;
			}

			$children_by_price = get_posts(
				array(
					'post_parent'    => $this->get_parent_id(),
					'orderby'        => 'meta_value_num',
					'order'          => 'asc',
					'meta_key'       => '_price', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
					'posts_per_page' => 1,
					'post_type'      => 'product',
					'fields'         => 'ids',
				)
			);
			if ( $children_by_price ) {
				foreach ( $children_by_price as $child ) {
					$child_price = get_post_meta( $child, '_price', true );
					update_post_meta( $this->get_parent_id(), '_price', $child_price );
				}
			}

			delete_transient( 'wc_products_onsale' );

			do_action( 'woocommerce_grouped_product_sync', $this->get_id(), $children_by_price );
		}


		/**
		 * Retrieve a specific bundled item.
		 *
		 * @param int $item_id Item ID.
		 *
		 * @return false|YITH_WC_Bundled_Item
		 */
		public function get_bundled_item( $item_id ) {
			if ( ! empty( $this->bundle_data ) && isset( $this->bundle_data[ $item_id ] ) ) {
				if ( isset( $this->bundled_items[ $item_id ] ) ) {
					return $this->bundled_items[ $item_id ];
				} else {
					return new YITH_WC_Bundled_Item( $item_id, $this );
				}
			}

			return false;
		}

		/**
		 * Get price.
		 *
		 * @param string $context The context.
		 *
		 * @return mixed|string|void
		 */
		public function get_price( $context = 'view' ) {
			if ( $this->per_items_pricing ) {
				$price = parent::get_price( 'edit' );

				return apply_filters( 'woocommerce_yith_bundle_get_price', $price, $this );
			} else {
				return parent::get_price( $context );
			}
		}

		/**
		 * Get the MAX price of product bundle
		 *
		 * @param bool   $include_discount   Set true to include discounts.
		 * @param bool   $include_optionals  Set true to include optionals.
		 * @param bool   $use_max_quantities Set true to use the maximum quantity.
		 * @param string $context            The context.
		 *
		 * @return float
		 */
		public function get_per_item_price_tot_max( $include_discount = false, $include_optionals = false, $use_max_quantities = false, $context = 'view' ) {
			if ( 'view' === $context && isset( $this->price_per_item_tot_max ) && ! $include_discount ) {
				return (float) $this->price_per_item_tot_max;
			}
			$args = compact( 'include_discount', 'include_optionals', 'use_max_quantities' );

			if ( 'view' === $context ) {
				do_action( 'yith_wcpb_before_get_per_item_price_tot_max', $this, $args );
			}

			$price = 0;
			if ( $this->per_items_pricing ) {
				$bundled_items_price = 0;

				$bundled_items = $this->get_bundled_items();

				foreach ( $bundled_items as $bundled_item ) {
					if ( ! $include_optionals && $bundled_item->is_optional() ) {
						continue;
					}
					/**
					 * The product.
					 *
					 * @var WC_Product $product
					 */
					$product       = $bundled_item->product;
					$qty           = max( 0, ( $use_max_quantities ? $bundled_item->max_quantity : $bundled_item->min_quantity ) );
					$regular_price = $bundled_item->get_max_price( 'view' !== $context );

					$regular_price = floatval( $regular_price );

					if ( $include_discount ) {
						$discount = $regular_price * (float) $bundled_item->discount / 100;
						if ( 'view' === $context ) {
							$discount = apply_filters( 'yith_wcpb_bundled_item_calculated_discount', $discount, $bundled_item->discount, $regular_price, $bundled_item->get_product_id(), array() );
						}
						$bundled_item_price = $regular_price - $discount;
					} else {
						$bundled_item_price = $regular_price;
					}

					$bundled_item_price = yith_wcpb_round_bundled_item_price( $bundled_item_price );
					$bundled_item_price = yith_wcpb_get_price_to_display( $product, $bundled_item_price, $qty );
					$bundled_item_price = yith_wcpb_round_bundled_item_price( $bundled_item_price ); // Round twice to round the line price.

					$bundled_items_price += $bundled_item_price;
				}
				$price = $bundled_items_price;
			}

			if ( 'view' === $context ) {
				do_action( 'yith_wcpb_after_get_per_item_price_tot_max', $this, $args );
			}

			$price = 'view' === $context ? apply_filters( 'yith_wcpb_get_per_item_price_tot_max', $price, $this, $args ) : $price;

			return (float) $price;
		}


		/**
		 * Get price HTML.
		 *
		 * @param string $deprecated Deprecated argument.
		 *
		 * @return string
		 */
		public function get_price_html( $deprecated = '' ) {
			if ( $this->per_items_pricing ) {
				$bundle_price_display = get_option( 'yith-wcpb-pip-bundle-pricing', 'from-min' );
				$min                  = $this->get_per_item_price_tot();
				switch ( $bundle_price_display ) {
					case 'min-max':
						$max        = $this->get_per_item_price_tot_max( true, true, true );
						$price_html = $max > $min ? wc_format_price_range( $min, $max ) : wc_price( $min );
						break;

					case 'min':
						$price_html = wc_price( $min );
						break;

					case 'regular-and-discounted':
						$regular = $this->get_per_item_price_tot_max( false );

						$price_html = $regular > $min ? wc_format_sale_price( $regular, $min ) : wc_price( $min );
						break;

					case 'from-min':
					default:
						// translators: %s is the price.
						$price_html = sprintf( esc_html( _x( 'From %s', 'From price', 'yith-woocommerce-product-bundles' ) ), wc_price( $min ) );

				}
			} else {
				$price_html = parent::get_price_html();
			}

			if ( $this->show_saving_amount() && function_exists( 'is_product' ) && is_product() ) {
				$saving_amount = wc_get_price_to_display( $this, array( 'price' => $this->get_saving_amount() ) );
				// translators: %s is the the saved amount.
				$saving_text = sprintf( esc_html__( 'Save %s', 'yith-woocommerce-product-bundles' ), wc_price( $saving_amount ) );

				$price_html .= '<span class="yith-wcpb-saving-amount">' . $saving_text . '</span>';
			}

			return apply_filters( 'yith_wcpb_woocommerce_get_price_html', $price_html, $this );
		}

		/**
		 * Get the minimum price of product bundle
		 *
		 * @param string $context The context.
		 *
		 * @return float
		 */
		public function get_per_item_price_tot( $context = 'view' ) {
			if ( 'view' === $context ) {
				do_action( 'yith_wcpb_before_get_per_item_price_tot', $this );
			}

			$price = 0;
			if ( $this->per_items_pricing ) {
				$bundled_items_price = 0;

				$bundled_items = $this->get_bundled_items();

				foreach ( $bundled_items as $bundled_item ) {
					if ( $bundled_item->is_optional() ) {
						continue;
					}
					/**
					 * The product.
					 *
					 * @var WC_Product $product
					 */
					$product       = $bundled_item->product;
					$qty           = max( 0, $bundled_item->min_quantity );
					$regular_price = $bundled_item->get_min_price( 'view' !== $context );

					$regular_price = floatval( $regular_price );
					$discount      = $regular_price * (float) $bundled_item->discount / 100;
					$discount      = 'view' === $context ? apply_filters( 'yith_wcpb_bundled_item_calculated_discount', $discount, $bundled_item->discount, $regular_price, $product->get_id(), array() ) : $discount;

					$bundled_item_price = $regular_price - $discount;
					$bundled_item_price = yith_wcpb_round_bundled_item_price( $bundled_item_price );
					$bundled_item_price = yith_wcpb_get_price_to_display( $product, $bundled_item_price, $qty );
					$bundled_item_price = yith_wcpb_round_bundled_item_price( $bundled_item_price ); // Round twice to round the line price.

					$bundled_items_price += $bundled_item_price;
				}
				$price = $bundled_items_price;
			}

			if ( 'view' === $context ) {
				do_action( 'yith_wcpb_after_get_per_item_price_tot', $this );
			}

			$price = 'view' === $context ? apply_filters( 'yith_wcpb_get_per_item_price_tot', $price, $this ) : $price;

			return (float) $price;
		}

		/**
		 * Functions for getting parts of a price, in html, used by get_price_html.
		 *
		 * @param string|float $from String or float to wrap with 'from' text.
		 * @param string|float $to   String or float to wrap with 'to' text.
		 *
		 * @return string
		 */
		public function get_price_html_from_to( $from, $to ) {
			if ( ! $this->per_items_pricing || ( ! $this->has_variables() && ! $this->has_optional() ) ) {
				return apply_filters( 'woocommerce_get_price_html_from_to', wc_format_price_range( $from, $to ), $from, $to, $this );
			} else {
				return wc_price( $to ) . '-' . wc_price( $from );
			}
		}

		/**
		 * Get 'per-item-price' total price.
		 *
		 * @param array  $array_quantity Quantities.
		 * @param array  $array_opt      Optionals.
		 * @param array  $array_var      Variations.
		 * @param bool   $html           Set true to format as HTML.
		 * @param string $context        The context.
		 *
		 * @return float|int|mixed|string|void|null
		 */
		public function get_per_item_price_tot_with_params( $array_quantity, $array_opt, $array_var, $html = true, $context = 'view' ) {
			if ( ! is_array( $array_quantity ) ) {
				return $this->price_per_item_tot;
			}

			if ( 'view' === $context ) {
				do_action( 'yith_wcpb_before_get_per_item_price_tot_with_params', $array_quantity, $array_opt, $array_var, $html );
			}

			$price = $this->get_price( 'edit' );

			if ( $this->per_items_pricing ) {
				$bundled_items_price = 0;
				$bundled_items       = $this->get_bundled_items();
				$loop                = 0;

				foreach ( $bundled_items as $bundled_item ) {
					if ( $bundled_item->is_optional() && ( ( isset( $array_opt[ $loop ] ) && absint( $array_opt[ $loop ] ) === 0 ) || ! isset( $array_opt[ $loop ] ) ) ) {
						$loop ++;
						continue;
					}

					$product       = $bundled_item->get_product();
					$regular_price = null;
					if ( $product->is_type( 'variable' ) ) {
						$variation_id = $array_var[ $loop ] ?? false;
						$variation    = ! ! $variation_id ? wc_get_product( $variation_id ) : false;
						if ( $variation ) {
							$product       = $variation;
							$regular_price = $product->get_regular_price();
						}
					}

					if ( is_null( $regular_price ) ) {
						$regular_price = $bundled_item->get_min_price( 'view' !== $context );
					}

					$qty = ! empty( $array_quantity[ $loop ] ) ? $array_quantity[ $loop ] : max( 0, $bundled_item->min_quantity );

					$regular_price = floatval( $regular_price );
					$discount      = $regular_price * $bundled_item->discount / 100;
					$discount      = apply_filters( 'yith_wcpb_bundled_item_calculated_discount', $discount, $bundled_item->discount, $regular_price, $product->get_id(), array() );

					$bundled_item_price = $regular_price - $discount;
					$bundled_item_price = yith_wcpb_round_bundled_item_price( $bundled_item_price );
					$bundled_item_price = yith_wcpb_get_price_to_display( $product, $bundled_item_price, $qty );
					$bundled_item_price = yith_wcpb_round_bundled_item_price( $bundled_item_price ); // Round twice to round the line price.

					$bundled_items_price += $bundled_item_price;
					$loop ++;
				}

				$price = $bundled_items_price;
			}

			if ( 'view' === $context ) {
				do_action( 'yith_wcpb_after_get_per_item_price_tot_with_params', $array_quantity, $array_opt, $array_var, $html, $price );
			}

			return $html ? wc_price( $price ) : $price;
		}


		/**
		 * Gets product variation data which is passed to JS.
		 *
		 * @return array variation data array
		 */
		public function get_available_bundle_variations() {
			if ( ! $this->get_bundled_items() ) {
				return array();
			}

			$bundle_variations = array();
			$price_zero        = ! $this->per_items_pricing;
			foreach ( $this->get_bundled_items() as $bundled_item ) {
				$bundle_variations[ $bundled_item->item_id ] = $bundled_item->get_product_variations( $price_zero );
			}

			return $bundle_variations;
		}

		/**
		 * Gets the attributes of all variable bundled items.
		 *
		 * @return array attributes array
		 */
		public function get_bundle_variation_attributes() {

			if ( ! $this->get_bundled_items() ) {
				return array();
			}

			$bundle_attributes = array();

			foreach ( $this->get_bundled_items() as $bundled_item ) {
				$bundle_attributes[ $bundled_item->item_id ] = $bundled_item->get_product_variation_attributes();
			}

			return $bundle_attributes;
		}

		/**
		 * Get selected bundle variation attributes.
		 *
		 * @return array
		 */
		public function get_selected_bundle_variation_attributes() {

			if ( ! $this->get_bundled_items() ) {
				return array();
			}

			$seleted_bundle_attributes = array();

			foreach ( $this->get_bundled_items() as $bundled_item ) {
				$seleted_bundle_attributes[ $bundled_item->item_id ] = $bundled_item->get_selected_product_variation_attributes();
			}

			return $seleted_bundle_attributes;
		}

		/**
		 * Retrieve the bundle product version
		 *
		 * @return string
		 * @since 1.4.0
		 */
		public function get_bundle_product_version() {
			static $version = false;
			if ( false === $version ) {
				$version = $this->get_meta( '_yith_bundle_product_version' );
				if ( ! $version ) {
					$version = '1.0.0';
				}
			}

			return $version;
		}

		/**
		 * Returns whether or not the product is visible in the catalog.
		 *
		 * @return bool
		 * @since 1.4.0
		 */
		public function is_visible() {
			$visible = parent::is_visible();

			if ( $visible && 'hide' === yith_wcpb_settings()->get_out_of_stock_bundle_option() && ! $this->all_items_in_stock() ) {
				$visible = false;
			}

			return apply_filters( 'yith_wcpb_bundle_product_is_visible', $visible, $this );
		}

		/**
		 * Do we show saving amount?
		 *
		 * @return bool
		 * @since 1.4.0
		 */
		public function show_saving_amount() {
			return 'yes' === $this->get_meta( '_yith_wcpb_show_saving_amount', true ) && ! $this->per_items_pricing && $this->get_saving_amount() > 0;
		}

		/**
		 * Get the saving amount
		 *
		 * @return float
		 * @since 1.4.0
		 */
		public function get_saving_amount() {
			return (float) $this->get_regular_price() - (float) $this->get_price();
		}
	}
}
