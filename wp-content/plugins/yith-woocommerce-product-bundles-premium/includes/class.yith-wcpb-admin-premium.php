<?php
/**
 * Admin class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

if ( ! class_exists( 'YITH_WCPB_Admin_Premium' ) ) {
	/**
	 * Admin class.
	 * The class manage all the admin behaviors.
	 */
	class YITH_WCPB_Admin_Premium extends YITH_WCPB_Admin {

		/**
		 * Single instance of the class
		 *
		 * @var YITH_WCPB_Admin_Premium
		 * @since 1.0.0
		 */
		protected static $instance;

		/**
		 * Order items containing bundled items.
		 *
		 * @var array|false
		 */
		private $bundled_order_items = false;

		/**
		 * Constructor
		 */
		protected function __construct() {
			parent::__construct();

			add_filter( 'woocommerce_reports_get_order_report_data_args', array( $this, 'woocommerce_reports_get_order_report_data_args' ) );

			/**
			 * Set the price for "per item pricing" bundles so price sorting works.
			 *
			 * @since 1.1.7
			 */
			add_action( 'woocommerce_process_product_meta_yith_bundle', array( $this, 'save_price_in_pip_bundles' ) );
			add_action( 'init', array( $this, 'sync_bundles' ) );

		}

		/**
		 * Set the price for "per item pricing" bundles so price sorting works.
		 *
		 * @param int $product_id The product ID.
		 *
		 * @since 1.1.7
		 */
		public function save_price_in_pip_bundles( $product_id ) {
			$product = wc_get_product( $product_id );
			if ( $product && $product->is_type( 'yith_bundle' ) ) {
				/**
				 * The bundle product.
				 *
				 * @var WC_Product_Yith_Bundle $product
				 */
				if ( $product->per_items_pricing ) {
					$price = $product->get_per_item_price_tot();
					$product->set_regular_price( $price );
					$product->save();
					update_post_meta( $product->get_id(), '_price', $price );
				}
			}
		}


		/**
		 * Synchronize the bundle products
		 *
		 * @since 1.1.7
		 */
		public function sync_bundles() {
			$force_sync = isset( $_REQUEST['yith_wcpb_force_sync_bundle_products'], $_REQUEST['_wpnonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_REQUEST['_wpnonce'] ) ), 'yith-wcpb-sync-pip-prices' );

			if ( $force_sync ) {
				$bundle_term = get_term_by( 'slug', 'yith_bundle', 'product_type' );
				if ( $bundle_term ) {
					$product_ids = array_unique( (array) get_objects_in_term( $bundle_term->term_id, 'product_type' ) );
					if ( ! ! $product_ids ) {
						foreach ( $product_ids as $product_id ) {
							$this->save_price_in_pip_bundles( $product_id );
						}
					}
				}

				if ( isset( $_REQUEST['yith_wcpb_redirect'] ) ) {
					wp_safe_redirect( wp_unslash( $_REQUEST['yith_wcpb_redirect'] ) );
					exit;
				}
			}
		}

		/**
		 * Hide/Show product in bundle in Reports count
		 *
		 * @param array $args Arguments.
		 *
		 * @return array
		 */
		public function woocommerce_reports_get_order_report_data_args( $args ) {
			$show = get_option( 'yith-wcpb-show-bundled-items-in-report' );
			if ( 'yes' === $show ) {
				return $args;
			}

			if ( isset( $args['data']['_qty'] ) || isset( $args['data']['_line_total'] ) ) {
				$bundled_order_items_array = $this->get_bundled_order_item_ids();
				$bundled_order_items       = is_array( $bundled_order_items_array ) ? implode( ',', $bundled_order_items_array ) : '';
				if ( ! ! $bundled_order_items ) {
					// This NOT IN exclude products in bundle from selection.
					$not_in_bundled  = "NOT IN ($bundled_order_items) AND '1' =";
					$args['where'][] = array(
						'value'    => '1',
						'key'      => 'order_items.order_item_id',
						'operator' => $not_in_bundled,
					);
				}
			}

			return $args;
		}

		/**
		 * Get order items containing bundled-items.
		 *
		 * @return array|false
		 */
		public function get_bundled_order_item_ids() {
			if ( false === $this->bundled_order_items ) {
				global $wpdb;

				// TODO: avoid retrieving all order items to exclude them from reports; maybe it should be better editing the report "query".
				$query   = "SELECT oi.order_item_id FROM {$wpdb->prefix}posts AS posts LEFT JOIN {$wpdb->prefix}woocommerce_order_items AS oi ON posts.ID = oi.order_id  INNER JOIN {$wpdb->prefix}woocommerce_order_itemmeta AS order_item_meta__b ON oi.order_item_id = order_item_meta__b.order_item_id AND order_item_meta__b.meta_key = '_bundled_by'";
				$results = $wpdb->get_results( $query ); // phpcs:ignore WordPress.DB

				$this->bundled_order_items = array();

				if ( ! ! $results ) {
					foreach ( $results as $result ) {
						if ( ! empty( $result->order_item_id ) ) {
							$this->bundled_order_items[] = $result->order_item_id;
						}
					}
				}
			}

			return $this->bundled_order_items;
		}


		/**
		 * Hide meta in admin order
		 *
		 * @param array $hidden Hidden meta.
		 *
		 * @return array
		 */
		public function woocommerce_hidden_order_itemmeta( $hidden ) {
			return array_merge(
				$hidden,
				array(
					'_bundled_by',
					'_per_items_pricing',
					'_yith_bundle_cart_key',
					'_non_bundled_shipping',
					'_cartstamp',
					'_yith_wcpb_hidden',
				)
			);
		}

		/**
		 * Save Product Bandle Data
		 *
		 * @param WC_Product $product The product.
		 *
		 * @access public
		 * @since  1.0.0
		 */
		public function woocommerce_process_product_meta( $product ) {
			parent::woocommerce_process_product_meta( $product );
			// phpcs:disable WordPress.Security.NonceVerification.Missing

			if ( $product->is_type( 'yith_bundle' ) ) {
				$meta_data = array(
					'_yith_wcpb_per_item_pricing'        => isset( $_POST['_yith_wcpb_per_item_pricing'] ) && 'yes' === $_POST['_yith_wcpb_per_item_pricing'] ? 'yes' : 'no',
					'_yith_wcpb_non_bundled_shipping'    => isset( $_POST['_yith_wcpb_non_bundled_shipping'] ) && 'yes' === $_POST['_yith_wcpb_non_bundled_shipping'] ? 'yes' : 'no',
					'_yith_wcpb_show_saving_amount'      => isset( $_POST['_yith_wcpb_show_saving_amount'] ) && 'yes' === $_POST['_yith_wcpb_show_saving_amount'] ? 'yes' : 'no',
					'_yith_wcpb_bundle_advanced_options' => isset( $_POST['_yith_wcpb_bundle_advanced_options'] ) ? wc_clean( wp_unslash( $_POST['_yith_wcpb_bundle_advanced_options'] ) ) : array(),
				);

				foreach ( $meta_data as $key => $value ) {
					$product->update_meta_data( $key, $value );
				}
			}

			// phpcs:enable
		}

		/**
		 * Ajax Called in bundle_options_metabox.js
		 * return the empty form for the item
		 *
		 * @access public
		 * @since  1.0.0
		 */
		public function add_product_in_bundle() {
			$response = array();
			if ( check_ajax_referer( 'yith-wcpb-add-product-to-bundle', 'security', false ) && isset( $_POST['id'], $_POST['bundle_id'], $_POST['product_id'] ) ) {
				$metabox_id = intval( $_POST['id'] );
				$bundle_id  = absint( $_POST['bundle_id'] );
				$product_id = absint( $_POST['product_id'] );
				$product    = wc_get_product( $product_id );
				$response   = array();

				if ( $product->is_type( 'yith_bundle' ) ) {
					$response['error'] = __( 'You cannot add a bundle product', 'yith-woocommerce-product-bundles' );
				} else {
					$bundle_product = wc_get_product( $bundle_id );
					$bundled_item   = new YITH_WC_Bundled_Item( $bundle_product, $metabox_id, compact( 'product_id' ) );
					ob_start();
					yith_wcpb_get_view( '/admin/bundled-item.php', compact( 'metabox_id', 'bundled_item' ) );
					$response['html'] = ob_get_clean();
				}
			} else {
				$response['error'] = esc_html__( 'Something went wrong. Try again!', 'yith-woocommerce-product-bundles' );
			}

			wp_send_json( $response );
		}

		/**
		 * Add premium tabs
		 *
		 * @param array $tabs The tabs.
		 *
		 * @return array
		 * @deprecated 1.8.0
		 */
		public function settings_premium_tabs( $tabs ) {
			return array(
				'settings'      => __( 'General Settings', 'yith-woocommerce-product-bundles' ),
				'customization' => __( 'Customization', 'yith-woocommerce-product-bundles' ),
			);
		}

		/**
		 * Retrieve Panel tabs.
		 *
		 * @return array
		 * @since 1.8.0
		 */
		protected function get_panel_tabs() {
			$tabs = array(
				'settings'      => array(
					'title' => __( 'General Settings', 'yith-woocommerce-product-bundles' ),
					'icon'        => 'settings',
					'description' => __( 'Set the general options for the plugin behavior', 'yith-woocommerce-product-bundles' ),
				),
				'customization' => array(
					'title' => __( 'Customization', 'yith-woocommerce-product-bundles' ),
					'icon'        => '<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l1.5 1.5.75-.75V8.758l2.276-.61a3 3 0 10-3.675-3.675l-.61 2.277H12l-.75.75 1.5 1.5M15 11.25l-8.47 8.47c-.34.34-.8.53-1.28.53s-.94.19-1.28.53l-.97.97-.75-.75.97-.97c.34-.34.53-.8.53-1.28s.19-.94.53-1.28L12.75 9M15 11.25L12.75 9"></path>
				  </svg>',
					'description' => __( 'Customize the style and labels of your bundled products', 'yith-woocommerce-product-bundles' ),
				),
			);

			return apply_filters( 'yith_wcpb_settings_admin_tabs', $tabs );
		}

		/**
		 * Retrieve Panel arguments.
		 *
		 * @return array
		 * @since 1.8.0
		 */
		protected function get_panel_args() {
			$args = parent::get_panel_args();
			unset( $args['is_free'] );
			unset( $args['premium_tab'] );
			$args['is_premium'] = true;

			$args['help_tab'] = array(
				'hc_url'     => 'https://support.yithemes.com/hc/en-us/categories/4410952985745-YITH-WOOCOMMERCE-PRODUCT-BUNDLES',
				'main_video' => array(
					'desc' => _x( 'Check this video to learn how to <b>sell bundles of products in your shop:</b>', 'Help tab - Video title', 'yith-woocommerce-product-bundles' ),
					'url'  => array(
						'en' => 'https://www.youtube.com/embed/EIlq_qPFqRs',
						'it' => 'https://www.youtube.com/embed/otz1nz5CvKc',
						'es' => 'https://www.youtube.com/embed/kefZgaQUmbU',
					),
				),
				'playlists'  => array(
					'en' => 'https://www.youtube.com/watch?v=EIlq_qPFqRs&list=PLDriKG-6905nIjWtAm507-cPdf2Kjn249&ab_channel=YITH',
					'it' => 'https://www.youtube.com/watch?v=otz1nz5CvKc&list=PL9c19edGMs0-ksBDQzIMTVhzR9Ueizop8&ab_channel=YITHITALIA',
					'es' => 'https://www.youtube.com/watch?v=kefZgaQUmbU&list=PL9Ka3j92PYJOD70Ca0ulmdQW9M4fCdYEf&ab_channel=YITHESPA%C3%91A',
				),
			);

			$args['your_store_tools'] = array(
				'items' => array(
					'wishlist'               => array(
						'name'           => 'YITH WooCommerce Wishlist',
						'icon_url'       => YITH_WCPB_ASSETS_URL . '/images/plugins/wishlist.svg',
						'url'            => '//yithemes.com/themes/plugins/yith-woocommerce-wishlist/',
						'description'    => _x(
							'Allow your customers to create lists of products they want and share them with family and friends.',
							'[YOUR STORE TOOLS TAB] Description for plugin YITH WooCommerce Wishlist',
							'yith-woocommerce-product-bundles'
						),
						'is_active'      => defined( 'YITH_WCWL_PREMIUM' ),
						'is_recommended' => true,
					),
					'gift-cards'             => array(
						'name'           => 'YITH WooCommerce Gift Cards',
						'icon_url'       => YITH_WCPB_ASSETS_URL . '/images/plugins/gift-cards.svg',
						'url'            => '//yithemes.com/themes/plugins/yith-woocommerce-gift-cards/',
						'description'    => _x(
							'Sell gift cards in your shop to increase your earnings and attract new customers.',
							'[YOUR STORE TOOLS TAB] Description for plugin YITH WooCommerce Gift Cards',
							'yith-woocommerce-product-bundles'
						),
						'is_active'      => defined( 'YITH_YWGC_PREMIUM' ),
						'is_recommended' => true,
					),
					'request-a-quote'        => array(
						'name'        => 'YITH WooCommerce Request a Quote',
						'icon_url'    => YITH_WCPB_ASSETS_URL . '/images/plugins/request-a-quote.svg',
						'url'         => '//yithemes.com/themes/plugins/yith-woocommerce-request-a-quote/',
						'description' => _x(
							'Hide prices and/or the "Add to cart" button and let your customers request a custom quote for every product.',
							'[YOUR STORE TOOLS TAB] Description for plugin YITH WooCommerce Request a Quote',
							'yith-woocommerce-product-bundles'
						),
						'is_active'   => defined( 'YITH_YWRAQ_PREMIUM' ),
					),
					'points-rewards'         => array(
						'name'        => 'YITH WooCommerce Points and Rewards',
						'icon_url'    => YITH_WCPB_ASSETS_URL . '/images/plugins/points-rewards.svg',
						'url'         => '//yithemes.com/themes/plugins/yith-woocommerce-points-and-rewards/',
						'description' => _x(
							'Loyalize your customers with an effective points-based loyalty program and instant rewards.',
							'[YOUR STORE TOOLS TAB] Description for plugin YITH WooCommerce Points and Rewards',
							'yith-woocommerce-product-bundles'
						),
						'is_active'   => defined( 'YITH_YWPAR_PREMIUM' ),
					),
					'product-addons'         => array(
						'name'        => 'YITH WooCommerce Product Add-Ons & Extra Options',
						'icon_url'    => YITH_WCPB_ASSETS_URL . '/images/plugins/product-add-ons.svg',
						'url'         => '//yithemes.com/themes/plugins/yith-woocommerce-product-add-ons/',
						'description' => _x(
							'Add paid or free advanced options to your product pages using fields like radio buttons, checkboxes, drop-downs, custom text inputs, and more.',
							'[YOUR STORE TOOLS TAB] Description for plugin YITH WooCommerce Product Add-Ons',
							'yith-woocommerce-product-bundles'
						),
						'is_active'   => defined( 'YITH_WAPO_PREMIUM' ),
					),
					'dynamic-pricing'        => array(
						'name'        => 'YITH WooCommerce Dynamic Pricing and Discounts',
						'icon_url'    => YITH_WCPB_ASSETS_URL . '/images/plugins/dynamic-pricing-and-discounts.svg',
						'url'         => '//yithemes.com/themes/plugins/yith-woocommerce-dynamic-pricing-and-discounts/',
						'description' => _x(
							'Increase conversions through dynamic discounts and price rules, and build powerful and targeted offers.',
							'[YOUR STORE TOOLS TAB] Description for plugin YITH WooCommerce Dynamic Pricing and Discounts',
							'yith-woocommerce-product-bundles'
						),
						'is_active'   => defined( 'YITH_YWDPD_PREMIUM' ),
					),
					'customize-my-account'   => array(
						'name'        => 'YITH WooCommerce Customize My Account Page',
						'icon_url'    => YITH_WCPB_ASSETS_URL . '/images/plugins/customize-myaccount-page.svg',
						'url'         => '//yithemes.com/themes/plugins/yith-woocommerce-customize-my-account-page/',
						'description' => _x(
							'Customize the My Account page of your customers by creating custom sections with promotions and ad-hoc content based on your needs.',
							'[YOUR STORE TOOLS TAB] Description for plugin YITH WooCommerce Customize My Account',
							'yith-woocommerce-product-bundles'
						),
						'is_active'   => defined( 'YITH_WCMAP_PREMIUM' ),
					),
					'recover-abandoned-cart' => array(
						'name'        => 'YITH WooCommerce Recover Abandoned Cart',
						'icon_url'    => YITH_WCPB_ASSETS_URL . '/images/plugins/recover-abandoned-cart.svg',
						'url'         => '//yithemes.com/themes/plugins/yith-woocommerce-recover-abandoned-cart/',
						'description' => _x(
							'Contact users who have added products to the cart without completing the order and try to recover lost sales.',
							'[YOUR STORE TOOLS TAB] Description for plugin Recover Abandoned Cart',
							'yith-woocommerce-product-bundles'
						),
						'is_active'   => defined( 'YITH_YWRAC_PREMIUM' ),
					),
				),
			);

			return $args;
		}
	}
}

/**
 * Unique access to instance of YITH_WCPB_Admin_Premium class
 *
 * @return YITH_WCPB_Admin|YITH_WCPB_Admin_Premium
 * @deprecated 1.2.0 | use yith_wcpb_admin instead
 */
function yith_wcpb_admin_premium() {
	return yith_wcpb_admin();
}
