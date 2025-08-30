<?php
/**
 * YITH WooCommerce Catalog Mode integration class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

/**
 * YITH WooCommerce Catalog Mode Compatibility Class
 *
 * @class   YITH_WCPB_Catalog_Mode_Compatibility
 * @since   1.1.3
 */
class YITH_WCPB_Catalog_Mode_Compatibility {

	/**
	 * Single instance of the class
	 *
	 * @var YITH_WCPB_Catalog_Mode_Compatibility
	 */
	protected static $instance;

	/**
	 * Returns single instance of the class
	 *
	 * @return \YITH_WCPB_Catalog_Mode_Compatibility
	 */
	public static function get_instance() {
		return ! is_null( self::$instance ) ? self::$instance : self::$instance = new self();
	}

	/**
	 * Constructor
	 *
	 * @access private
	 */
	protected function __construct() {
		if ( ! function_exists( 'YITH_WCTM' ) ) {
			return;
		}

		if ( $this->is_applied() ) {
			$catalog_mode = YITH_WCTM();
			add_filter( 'yith_wcpb_woocommerce_get_price_html', array( $catalog_mode, 'show_product_price' ), 10, 2 );
			add_filter( 'yith_wcpb_show_bundled_items_prices', array( $this, 'check_show_bundled_items_prices' ), 10, 3 );
			add_filter( 'yith_wcpb_ajax_update_price_enabled', array( $this, 'check_ajax_update_price_enabled' ), 10, 2 );
		}
	}

	/**
	 * Check for sowing bundled item prices.
	 *
	 * @param bool                   $show         Show flag.
	 * @param YITH_WC_Bundled_Item   $bundled_item Bundled item.
	 * @param WC_Product_Yith_Bundle $product      The bundle product.
	 *
	 * @return bool
	 * @since   1.1.4
	 */
	public function check_show_bundled_items_prices( $show, $bundled_item, $product ) {
		return $show && ! YITH_WCTM()->check_price_hidden( $show, $product->get_id() );
	}

	/**
	 * Check if the ajax update price is enabled.
	 *
	 * @param bool                   $enabled Enabled flag.
	 * @param WC_Product_Yith_Bundle $product The bundle product.
	 *
	 * @return bool
	 * @since   1.1.4
	 */
	public function check_ajax_update_price_enabled( $enabled, $product ) {
		return $enabled && ! YITH_WCTM()->check_price_hidden( $enabled, $product->get_id() );
	}

	/**
	 * Return true if is applied catalog mode
	 * (plugin active, check admins,etc...)
	 *
	 * @return bool
	 */
	public function is_applied() {
		if ( ! function_exists( 'YITH_WCTM' ) ) {
			return false;
		}

		$catalog_mode = YITH_WCTM();
		if ( 'yes' === get_option( 'ywctm_enable_plugin' ) && $catalog_mode->check_user_admin_enable() ) {
			if ( ! is_admin() || $catalog_mode->is_quick_view() || ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
				return true;
			}
		}

		return false;
	}
}
