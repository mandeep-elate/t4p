<?php
/**
 * Main class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

if ( ! class_exists( 'YITH_WCPB_Premium' ) ) {
	/**
	 * Class YITH_WCPB_Premium
	 */
	class YITH_WCPB_Premium extends YITH_WCPB {

		/**
		 * Single instance of the class
		 *
		 * @var YITH_WCPB_Premium
		 */
		protected static $instance;

		/**
		 * YITH_WCPB_Premium constructor.
		 */
		public function __construct() {
			parent::__construct();

			YITH_WCPB_Out_Of_Stock_Sync::get_instance();

			add_action( 'wp_loaded', array( $this, 'register_plugin_for_activation' ), 99 );
			add_action( 'wp_loaded', array( $this, 'register_plugin_for_updates' ), 99 );
		}

		/**
		 * Register plugins for activation tab
		 *
		 * @return void
		 * @since 1.4.0
		 */
		public function register_plugin_for_activation() {
			if ( function_exists( 'YIT_Plugin_Licence' ) ) {
				YIT_Plugin_Licence()->register( YITH_WCPB_INIT, YITH_WCPB_SECRET_KEY, YITH_WCPB_SLUG );
			}
		}

		/**
		 * Register plugins for update tab
		 *
		 * @return void
		 * @since 1.4.0
		 */
		public function register_plugin_for_updates() {
			if ( function_exists( 'YIT_Upgrade' ) ) {
				YIT_Upgrade()->register( YITH_WCPB_SLUG, YITH_WCPB_INIT );
			}
		}
	}
}

/**
 * Unique access to instance of YITH_WCPB_Premium class
 *
 * @return YITH_WCPB_Premium
 * @deprecated 1.2.0 | use yith_wcpb instead
 */
function yith_wcpb_premium() {
	return yith_wcpb();
}
