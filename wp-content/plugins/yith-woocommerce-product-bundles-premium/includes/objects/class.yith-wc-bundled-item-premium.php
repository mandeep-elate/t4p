<?php
/**
 * Bundled Item class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

// phpcs:disable Generic.Classes.DuplicateClassName.Found

if ( ! class_exists( 'YITH_WC_Bundled_Item' ) ) {
	/**
	 * Product Bundle Item Object
	 *
	 * @since  1.0.0
	 */
	class YITH_WC_Bundled_Item {

		/**
		 * Item ID.
		 *
		 * @var int
		 */
		public $item_id;

		/**
		 * Product ID.
		 *
		 * @var int
		 */
		public $product_id;

		/**
		 * The product.
		 *
		 * @var WC_Product|WC_Product_Variable|false
		 */
		public $product = false;

		/**
		 * The parent bundle product.
		 *
		 * @var WC_Product_Yith_Bundle
		 */
		public $parent;

		/**
		 * The quantity
		 *
		 * @var int
		 */
		private $quantity;

		/**
		 * Hide thumbnail?
		 *
		 * @var bool
		 */
		public $hide_thumbnail;

		/**
		 * Is hidden?
		 *
		 * @var bool
		 */
		public $hidden;

		/**
		 * Minimum quantity
		 *
		 * @var int|mixed
		 */
		public $min_quantity;

		/**
		 * Maximum quantity
		 *
		 * @var int|mixed
		 */
		public $max_quantity;

		/**
		 * Show name type.
		 *
		 * @var mixed|string
		 */
		public $show_name;

		/**
		 * Product title
		 *
		 * @var string|null
		 */
		public $product_title = null;

		/**
		 * The title.
		 *
		 * @var mixed|string
		 */
		public $title;

		/**
		 * Show description type.
		 *
		 * @var mixed|string
		 */
		public $show_description;

		/**
		 * Description.
		 *
		 * @var mixed|string
		 */
		public $description;

		/**
		 * Product description.
		 *
		 * @var string|null
		 */
		public $product_description = null;

		/**
		 * Is optional?
		 *
		 * @var bool
		 */
		public $optional;

		/**
		 * Apply discount?
		 *
		 * @var bool
		 */
		public $apply_discount;

		/**
		 * The percentage discount.
		 *
		 * @var int|float
		 */
		public $discount;

		/**
		 * Product attributes.
		 *
		 * @var array
		 */
		public $product_attributes;

		/**
		 * Product variations.
		 *
		 * @var array
		 */
		public $product_variations;

		/**
		 * Selected product attributes.
		 *
		 * @var array
		 */
		public $selected_product_attributes;

		/**
		 * Selection overrides.
		 *
		 * @var array|mixed
		 */
		public $selection_overrides;

		/**
		 * Minimum price
		 *
		 * @var string|float
		 */
		protected $min_price = null;

		/**
		 * Maximum price
		 *
		 * @var string|float
		 */
		protected $max_price = null;

		/**
		 * Filtered variations.
		 *
		 * @var array
		 */
		public $filtered_variations = array();

		/**
		 * WPML translated flag.
		 *
		 * @var bool
		 */
		public $wpml_translated = false;


		/**
		 * YITH_WC_Bundled_Item constructor.
		 *
		 * @param WC_Product_Yith_Bundle $parent    The parent bundle product.
		 * @param int                    $item_id   Item ID.
		 * @param array|false            $item_data Item data.
		 */
		public function __construct( $parent, $item_id, $item_data = false ) {
			do_action( 'yith_wcpb_before_bundled_item_construct', $parent, $item_id );
			$this->parent = $parent;

			if ( false === $item_data ) {
				$item_data = $parent->bundle_data[ $item_id ];
			}

			$this->item_id    = $item_id;
			$this->product_id = absint( $item_data['product_id'] );

			$this->quantity            = $item_data['bp_quantity'] ?? 1;
			$this->quantity            = $item_data['bp_min_qty'] ?? $this->quantity;
			$this->hide_thumbnail      = isset( $item_data['bp_hide_bundled_thumbs'] ) && in_array( $item_data['bp_hide_bundled_thumbs'], array( 'on', 'yes' ), true );
			$this->hidden              = isset( $item_data['bp_hide_item'] ) && in_array( $item_data['bp_hide_item'], array( 'on', 'yes' ), true );
			$this->min_quantity        = $item_data['bp_min_qty'] ?? $this->quantity;
			$this->max_quantity        = $item_data['bp_max_qty'] ?? $this->quantity;
			$this->optional            = isset( $item_data['bp_optional'] ) && in_array( $item_data['bp_optional'], array( 'on', 'yes' ), true );
			$this->apply_discount      = isset( $item_data['bp_apply_discount'] ) && 'yes' === $item_data['bp_apply_discount'];
			$this->discount            = isset( $item_data['bp_discount'] ) ? floatval( $item_data['bp_discount'] ) : 0;
			$this->filtered_variations = $item_data['bp_filtered_variations'] ?? array();
			$this->selection_overrides = $item_data['bp_selection_overrides'] ?? array();

			// The maximum quantity cannot be less than the minimum quantity.
			$this->max_quantity = max( $this->min_quantity, $this->max_quantity );

			$bundled_product = wc_get_product( $this->product_id );
			if ( ! $bundled_product || $bundled_product->is_type( 'yith_bundle' ) ) {
				return;
			}

			$this->filtered_variations = array_map( 'absint', $this->filtered_variations );
			$this->filtered_variations = array_map( array( yith_wcpb()->compatibility->wpml, 'get_wpml_product_id_current_language' ), $this->filtered_variations );
			$this->filtered_variations = array_map( 'absint', $this->filtered_variations );

			$this->product             = $bundled_product;
			$this->product_title       = $bundled_product->get_name();
			$this->product_description = $bundled_product->get_short_description();
			$this->title               = $item_data['bp_title'] ?? '';
			$this->description         = $item_data['bp_description'] ?? '';
			$this->show_name           = $item_data['bp_show_name'] ?? 'product';
			$this->show_description    = $item_data['bp_show_description'] ?? 'product';

			// WPML integration start.
			$parent_wpml_id = $this->get_wpml_product_id_current_language();
			if ( $this->product_id !== $parent_wpml_id ) {
				$this->wpml_translated     = true;
				$this->product_title       = get_the_title( $parent_wpml_id );
				$this->product_description = get_the_excerpt( $parent_wpml_id );
			}
			// WPML integration end.

			$this->legacy_init_before_1_4_0();

			if ( ! $this->apply_discount ) {
				$this->discount = 0;
			}

			do_action( 'yith_wcpb_after_bundled_item_construct', $this );
		}

		/**
		 * Magic getter to handle backward compatibility and deprecations.
		 *
		 * @param string $key The key.
		 *
		 * @return float|mixed|string|null
		 */
		public function __get( $key ) {
			switch ( $key ) {
				case 'min_price':
					return $this->get_min_price();
				case 'max_price':
					return $this->get_max_price();
			}

			return null;
		}

		/**
		 * Retrieve the minimum price for the bundled item.
		 *
		 * @param bool $force Force retrieving prices again.
		 *
		 * @return float|mixed|string
		 * @since 1.19.0
		 */
		public function get_min_price( bool $force = false ) {
			if ( $force || is_null( $this->min_price ) ) {
				list ( $min_price, $max_price ) = $this->get_min_max_prices();

				$this->min_price = $min_price;
			}

			return $this->min_price;
		}

		/**
		 * Retrieve the maximum price for the bundled item.
		 *
		 * @param bool $force Force retrieving prices again.
		 *
		 * @return float|mixed|string
		 * @since 1.19.0
		 */
		public function get_max_price( bool $force = false ) {
			if ( $force || is_null( $this->max_price ) ) {
				list ( $min_price, $max_price ) = $this->get_min_max_prices();

				$this->max_price = $max_price;
			}

			return $this->max_price;
		}

		/**
		 * Retrieve min and max prices.
		 *
		 * @return array
		 */
		public function get_min_max_prices() {
			if ( $this->product->is_type( 'variable' ) ) {
				if ( $this->filtered_variations ) {
					$regular_prices = array();
					foreach ( $this->filtered_variations as $id ) {
						$variation = wc_get_product( $id );
						if ( $variation ) {
							$regular_prices[] = $variation->get_regular_price();
						}
					}
					asort( $regular_prices );
				} else {
					$prices         = $this->product->get_variation_prices( false );
					$regular_prices = $prices['regular_price'];
				}

				$min_price = current( $regular_prices );
				$max_price = end( $regular_prices );
			} else {
				$regular_price = $this->product->get_regular_price();
				$min_price     = $regular_price;
				$max_price     = $regular_price;
			}

			return array( $min_price, $max_price );
		}

		/**
		 * Return the product ID.
		 *
		 * @return int
		 * @since 1.2.8
		 */
		public function get_product_id() {
			return $this->product_id;
		}

		/**
		 * Return the filtered variation IDs.
		 *
		 * @return int
		 * @since 1.5.1
		 */
		public function get_filtered_variation_ids() {
			return $this->filtered_variations;
		}

		/**
		 * Return true if the bundled item is hidden.
		 *
		 * @return bool
		 * @since 1.2.8
		 */
		public function is_hidden() {
			return ! ! apply_filters( 'yith_wcpb_bundled_item_is_hidden', $this->hidden, $this );
		}

		/**
		 * Get the product ID in the current language (through WPML)
		 *
		 * @return int
		 */
		public function get_wpml_product_id_current_language() {
			global $sitepress;
			$id = $this->product_id;
			if ( isset( $sitepress ) ) {
				if ( function_exists( 'icl_object_id' ) ) {
					$id = icl_object_id( $id, 'product', true );
				} elseif ( function_exists( 'wpml_object_id_filter' ) ) {
					$id = wpml_object_id_filter( $id, 'product', true );
				}
			}

			return absint( $id );
		}

		/**
		 * Return true if the related product exists.
		 *
		 * @return  bool
		 */
		public function exists() {
			return ! empty( $this->product );
		}

		/**
		 * Return the related product, or false if the product doesn't exist.
		 *
		 * @return WC_Product|false
		 */
		public function get_product() {
			return ! empty( $this->product ) ? $this->product : false;
		}

		/**
		 * Return the quantity.
		 *
		 * @return  int
		 */
		public function get_quantity() {
			return ! empty( $this->quantity ) ? $this->quantity : 0;
		}

		/**
		 * Return true if min_quantity < max_quantity
		 *
		 * @return  bool
		 */
		public function has_quantity_to_choose() {
			return $this->min_quantity < $this->max_quantity;
		}

		/**
		 * Return true if is optional
		 *
		 * @return  bool
		 */
		public function is_optional() {
			return ! ! apply_filters( 'yith_wcpb_bundled_item_is_optional', $this->optional, $this );

		}

		/**
		 * Return true the related product is variable
		 *
		 * @return  bool
		 */
		public function has_variables() {
			return $this->product->is_type( 'variable' );
		}


		/**
		 * Returns this product's available variations array.
		 *
		 * @param bool $price_zero Set true to filter prices to zero.
		 *
		 * @return array
		 */
		public function get_product_variations( $price_zero = false ) {
			if ( ! empty( $this->product_variations ) ) {
				return $this->product_variations;
			}

			if ( $this->product->is_type( 'variable' ) ) {
				do_action( 'yith_wcpb_get_product_variations_before', $this );
				do_action( 'woocommerce_before_init_bundled_item', $this );
				add_filter( 'woocommerce_get_children', array( $this, 'bundled_item_children' ), 10, 2 );
				add_filter( 'woocommerce_show_variation_price', '__return_true', 98 );

				if ( $price_zero ) {
					add_filter( 'woocommerce_get_variation_price_html', array( $this, 'price_zero' ), 99, 2 );
					add_filter( 'woocommerce_get_price_html', array( $this, 'price_zero' ), 99, 2 );
				} else {
					add_filter( 'woocommerce_get_variation_price_html', array( $this, 'get_price_html' ), 99, 2 );
					add_filter( 'woocommerce_get_price_html', array( $this, 'get_price_html' ), 99, 2 );
				}

				$parent_wpml_id = $this->get_wpml_product_id_current_language();
				if ( $this->product_id !== $parent_wpml_id ) {
					$wpml_parent_product     = wc_get_product( $parent_wpml_id );
					$bundled_item_variations = $wpml_parent_product->get_available_variations();
				} else {
					$bundled_item_variations = $this->product->get_available_variations();
				}
				if ( $price_zero ) {
					remove_filter( 'woocommerce_get_variation_price_html', array( $this, 'price_zero' ), 99 );
					remove_filter( 'woocommerce_get_price_html', array( $this, 'price_zero' ), 99 );
				} else {
					remove_filter( 'woocommerce_get_variation_price_html', array( $this, 'get_price_html' ), 99 );
					remove_filter( 'woocommerce_get_price_html', array( $this, 'get_price_html' ), 99 );
				}

				remove_filter( 'woocommerce_show_variation_price', '__return_true', 98 );
				remove_filter( 'woocommerce_get_children', array( $this, 'bundled_item_children' ), 10 );

				// Add only active variations.
				foreach ( $bundled_item_variations as $variation_data ) {
					if ( ! empty( $variation_data ) ) {
						$show_price                                   = ! $this->parent->per_items_pricing || $this->discount > 0;
						$variation_data['display_regular_price_html'] = $show_price ? wc_price( $variation_data['display_regular_price'] ) : '';
						$this->product_variations[]                   = $variation_data;
					}
				}

				do_action( 'yith_wcpb_get_product_variations_after', $this );

				return $this->product_variations;
			}

			return array();
		}

		/**
		 * Filter price to be empty.
		 *
		 * @param string     $price_html The price HTML.
		 * @param WC_Product $product    The product.
		 *
		 * @return string
		 */
		public function price_zero( $price_html, $product ) {
			return '';
		}

		/**
		 * Filter the children.
		 *
		 * @param array      $children        Children.
		 * @param WC_Product $bundled_product The product.
		 *
		 * @return array|mixed
		 */
		public function bundled_item_children( $children, $bundled_product ) {
			if ( empty( $this->filtered_variations ) || ! is_array( $this->filtered_variations ) ) {
				return $children;
			} else {
				$filtered_children = array();

				foreach ( $children as $variation_id ) {
					if ( in_array( absint( $variation_id ), $this->filtered_variations, true ) ) {
						$filtered_children[] = $variation_id;
					}
				}

				return $filtered_children;
			}
		}

		/**
		 * Filter HTML price.
		 *
		 * @param string     $price_html The HTML price.
		 * @param WC_Product $product    The product.
		 *
		 * @return string
		 */
		public function get_price_html( $price_html, $product ) {
			if ( ! $product->is_type( 'variation' ) ) {
				return $price_html;
			}

			$regular_price = $product->get_regular_price();
			$discount      = apply_filters( 'yith_wcpb_bundled_item_calculated_discount', $regular_price * $this->discount / 100, $this->discount, $regular_price, $product->get_id(), array() );
			$price         = $regular_price - $discount;
			$price         = yith_wcpb_get_price_to_display( $product, $price );
			$price         = yith_wcpb_round_bundled_item_price( $price );

			return apply_filters( 'yith_wcpb_bundled_item_get_price_html', wc_price( $price ), $price, $product );
		}

		/**
		 * Returns the variation attributes array if this product is variable.
		 *
		 * @return array
		 */
		public function get_product_variation_attributes() {

			if ( ! empty( $this->product_attributes ) ) {
				return $this->product_attributes;
			}

			if ( $this->product->is_type( 'variable' ) ) {
				$parent_wpml_id = $this->get_wpml_product_id_current_language();
				if ( $this->product_id !== $parent_wpml_id ) {
					$wpml_parent_product      = wc_get_product( $parent_wpml_id );
					$this->product_attributes = $wpml_parent_product->get_variation_attributes();
				} else {
					$this->product_attributes = $this->product->get_variation_attributes();
				}

				return $this->product_attributes;
			}

			return false;

		}

		/**
		 * Return the selected product variation attributes.
		 *
		 * @return array|false|mixed|void
		 */
		public function get_selected_product_variation_attributes() {
			if ( ! empty( $this->selected_product_attributes ) ) {
				return $this->selected_product_attributes;
			}

			if ( $this->product->is_type( 'variable' ) ) {
				if ( ! empty( $this->selection_overrides ) ) {
					$selected_product_attributes = $this->selection_overrides;
				} else {
					$selected_product_attributes = $this->product->get_default_attributes( 'edit' );
				}

				$this->selected_product_attributes = apply_filters( 'woocommerce_product_default_attributes', $selected_product_attributes, $this->product );

				return $this->selected_product_attributes;
			}

			return false;
		}

		/**
		 * Retrieve the parent bundle product
		 *
		 * @return WC_Product_YITH_Bundle
		 * @since 1.4.0
		 */
		public function get_bundle() {
			return $this->parent;
		}

		/**
		 * Retrieve the name to be shown based on settings
		 *
		 * @return string
		 * @since 1.4.0
		 */
		public function get_name_to_be_shown() {
			switch ( $this->show_name ) {
				case 'product':
					$name = ! is_null( $this->product_title ) ? $this->product_title : $this->title;
					break;
				case 'hide':
					$name = '';
					break;
				case 'custom':
				default:
					$name = $this->title;
					$name = call_user_func( '__', $name, 'yith-woocommerce-product-bundles' );
					break;
			}

			return apply_filters( 'yith_wcpb_bundled_item_get_name_to_be_shown', $name, $this );
		}

		/**
		 * Retrieve the description to be shown based on settings
		 *
		 * @return string
		 * @since 1.4.0
		 */
		public function get_description_to_be_shown() {
			switch ( $this->show_description ) {
				case 'product':
					$description = ! is_null( $this->product_description ) ? $this->product_description : $this->description;
					break;
				case 'hide':
					$description = '';
					break;
				case 'custom':
				default:
					$description = $this->description;
					$description = call_user_func( '__', $description, 'yith-woocommerce-product-bundles' );
					break;
			}

			return apply_filters( 'yith_wcpb_bundled_item_get_description_to_be_shown', $description, $this );
		}

		/**
		 * Legacy method to init new values for old bundle products
		 *
		 * @return void
		 * @since 1.4.0
		 */
		private function legacy_init_before_1_4_0() {
			$bundle = $this->get_bundle();
			if ( $bundle && $bundle->is_type( 'yith_bundle' ) && version_compare( $bundle->get_bundle_product_version(), '1.4.0', '<' ) ) {
				$this->apply_discount = $this->discount > 0;

				if ( ! empty( $bundle->bundle_data[ $this->item_id ]['bp_title'] ) ) {
					$title = str_replace( ' ', '', $bundle->bundle_data[ $this->item_id ]['bp_title'] );
					if ( ! $title ) {
						$this->show_name = 'hide';
					} else {
						$this->show_name = 'custom';
					}
				}

				if ( ! empty( $bundle->bundle_data[ $this->item_id ]['bp_description'] ) ) {
					$description = str_replace( ' ', '', $bundle->bundle_data[ $this->item_id ]['bp_description'] );
					if ( ! $description ) {
						$this->show_description = 'hide';
					} else {
						$this->show_description = 'custom';
					}
				}
			}
		}
	}
}
