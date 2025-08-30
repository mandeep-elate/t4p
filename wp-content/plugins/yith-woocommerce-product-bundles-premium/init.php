<?php
/**
 * Plugin Name: YITH WooCommerce Product Bundles Premium
 * Plugin URI: https://yithemes.com/themes/plugins/yith-woocommerce-product-bundles
 * Description: <code><strong>YITH WooCommerce Product Bundles</strong></code> allows you to bundle WooCommerce products and sell them at a unique price. You can configure bundled items as optional, set a discount, the minimum and maximum quantity, and so on! <a href="https://yithemes.com/" target="_blank">Get more plugins for your e-commerce shop on <strong>YITH</strong></a>
 * Version: 2.17.0
 * Author: YITH
 * Author URI: https://yithemes.com/
 * Text Domain: yith-woocommerce-product-bundles
 * Domain Path: /languages/
 * WC requires at least: 9.7.0
 * WC tested up to: 9.9.0
 * Requires Plugins: woocommerce
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH WooCommerce Product Bundles Premium
 * @version 2.17.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * WooCommerce admin notice.
 */
function yith_wcpb_pr_install_woocommerce_admin_notice() {
	?>
	<div class="error">
		<p><?php esc_html_e( 'YITH WooCommerce Product Bundles Premium is enabled but not effective. It requires WooCommerce in order to work.', 'yith-woocommerce-product-bundles' ); ?></p>
	</div>
	<?php
}

if ( ! function_exists( 'yith_plugin_registration_hook' ) ) {
	require_once 'plugin-fw/yit-plugin-registration-hook.php';
}
register_activation_hook( __FILE__, 'yith_plugin_registration_hook' );

if ( ! function_exists( 'yith_plugin_onboarding_registration_hook' ) ) {
	include_once 'plugin-upgrade/functions-yith-licence.php';
}
register_activation_hook( __FILE__, 'yith_plugin_onboarding_registration_hook' );

if ( ! defined( 'YITH_WCPB_VERSION' ) ) {
	define( 'YITH_WCPB_VERSION', '2.17.0' );
}

if ( ! defined( 'YITH_WCPB_PREMIUM' ) ) {
	define( 'YITH_WCPB_PREMIUM', '1' );
}

if ( ! defined( 'YITH_WCPB_INIT' ) ) {
	define( 'YITH_WCPB_INIT', plugin_basename( __FILE__ ) );
}

if ( ! defined( 'YITH_WCPB' ) ) {
	define( 'YITH_WCPB', true );
}

if ( ! defined( 'YITH_WCPB_FILE' ) ) {
	define( 'YITH_WCPB_FILE', __FILE__ );
}

if ( ! defined( 'YITH_WCPB_URL' ) ) {
	define( 'YITH_WCPB_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'YITH_WCPB_DIR' ) ) {
	define( 'YITH_WCPB_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'YITH_WCPB_TEMPLATE_PATH' ) ) {
	define( 'YITH_WCPB_TEMPLATE_PATH', YITH_WCPB_DIR . 'templates' );
}

if ( ! defined( 'YITH_WCPB_VIEWS_PATH' ) ) {
	define( 'YITH_WCPB_VIEWS_PATH', YITH_WCPB_DIR . 'views' );
}

if ( ! defined( 'YITH_WCPB_INCLUDES_PATH' ) ) {
	define( 'YITH_WCPB_INCLUDES_PATH', YITH_WCPB_DIR . 'includes' );
}

if ( ! defined( 'YITH_WCPB_ASSETS_URL' ) ) {
	define( 'YITH_WCPB_ASSETS_URL', YITH_WCPB_URL . 'assets' );
}

if ( ! defined( 'YITH_WCPB_ASSETS_PATH' ) ) {
	define( 'YITH_WCPB_ASSETS_PATH', YITH_WCPB_DIR . 'assets' );
}

if ( ! defined( 'YITH_WCPB_DIST_URL' ) ) {
	define( 'YITH_WCPB_DIST_URL', YITH_WCPB_URL . 'dist' );
}

if ( ! defined( 'YITH_WCPB_DIST_PATH' ) ) {
	define( 'YITH_WCPB_DIST_PATH', YITH_WCPB_DIR . 'dist' );
}

if ( ! defined( 'YITH_WCPB_SLUG' ) ) {
	define( 'YITH_WCPB_SLUG', 'yith-woocommerce-product-bundles' );
}

if ( ! defined( 'YITH_WCPB_SECRET_KEY' ) ) {
	define( 'YITH_WCPB_SECRET_KEY', 'qhNNwsl95FnqhNIeby7z' );
}

/**
 * Init.
 */
function yith_wcpb_pr_init() {
	yith_plugin_fw_load_plugin_textdomain( 'yith-woocommerce-product-bundles', dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	
	require_once YITH_WCPB_DIR . 'includes/functions.yith-wcpb.php';
	require_once YITH_WCPB_DIR . 'includes/functions.yith-wcpb-premium.php';
	require_once YITH_WCPB_DIR . 'includes/objects/class.yith-wc-product-bundle-premium.php';
	require_once YITH_WCPB_DIR . 'includes/objects/class.yith-wc-bundled-item-premium.php';
	require_once YITH_WCPB_DIR . 'includes/compatibility/class.yith-wcpb-compatibility.php';
	require_once YITH_WCPB_DIR . 'includes/compatibility/class.yith-wcpb-compatibility-premium.php';
	require_once YITH_WCPB_DIR . 'includes/class.yith-wcpb-shortcodes.php';
	require_once YITH_WCPB_DIR . 'includes/class.yith-wcpb-bundle-widget.php';
	require_once YITH_WCPB_DIR . 'includes/class.yith-wcpb-admin.php';
	require_once YITH_WCPB_DIR . 'includes/class.yith-wcpb-frontend.php';
	require_once YITH_WCPB_DIR . 'includes/class.yith-wcpb.php';
	require_once YITH_WCPB_DIR . 'includes/class.yith-wcpb-admin-premium.php';
	require_once YITH_WCPB_DIR . 'includes/class.yith-wcpb-frontend-premium.php';
	require_once YITH_WCPB_DIR . 'includes/class.yith-wcpb-premium.php';
	require_once YITH_WCPB_DIR . 'includes/class.yith-wcpb-settings.php';
	require_once YITH_WCPB_DIR . 'includes/class.yith-wcpb-out-of-stock-sync.php';
	require_once YITH_WCPB_DIR . 'includes/class.yith-wcpb-cart-checkout-blocks.php';
	require_once YITH_WCPB_DIR . 'includes/class.yith-wcpb-cart-checkout-blocks-premium.php';

	// Let's start the game!
	yith_wcpb();
}

add_action( 'yith_wcpb_pr_init', 'yith_wcpb_pr_init' );

if ( ! function_exists( 'yith_deactivate_plugins' ) && file_exists( plugin_dir_path( __FILE__ ) . 'plugin-fw/yit-deactive-plugin.php' ) ) {
	require_once plugin_dir_path( __FILE__ ) . 'plugin-fw/yit-deactive-plugin.php';
}

/**
 * Install.
 */
function yith_wcpb_pr_install() {
	if ( function_exists( 'yith_deactivate_plugins' ) ) {
		yith_deactivate_plugins( 'YITH_WCPB_FREE_INIT' );
	}

	if ( ! function_exists( 'WC' ) ) {
		add_action( 'admin_notices', 'yith_wcpb_pr_install_woocommerce_admin_notice' );
	} else {
		do_action( 'yith_wcpb_pr_init' );
	}
}

add_action( 'plugins_loaded', 'yith_wcpb_pr_install', 11 );

// Plugin Framework Loader.
if ( file_exists( plugin_dir_path( __FILE__ ) . 'plugin-fw/init.php' ) ) {
	require_once plugin_dir_path( __FILE__ ) . 'plugin-fw/init.php';
}