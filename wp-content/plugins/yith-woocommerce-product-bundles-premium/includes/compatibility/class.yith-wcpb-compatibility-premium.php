<?php
/**
 * Integration class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

/**
 * Compatibility Class
 *
 * @class   YITH_WCPB_Compatibility_Premium
 * @since   1.1.15
 *
 * @var YITH_WCPB_Wpml_Compatibility_Premium $wpml
 */
class YITH_WCPB_Compatibility_Premium extends YITH_WCPB_Compatibility {

	/**
	 * Single instance of the class.
	 *
	 * @var YITH_WCPB_Compatibility_Premium
	 */
	protected static $instance;

	/**
	 * Get plugins.
	 */
	protected function get_plugins() {
		return array(
			'wpml'                    => array(
				'always_enabled' => true,
			),
			'dynamic'                 => array(
				'always_enabled' => true,
			),
			'pdf-invoice'             => array(
				'always_enabled' => true,
			),
			'bh-pdf-invoices'           => array(
				'always_enabled' => true,
			),
			'elementor'               => array(),
			'aelia-currency-switcher' => array(),
			'role-based'              => array(),
			'request-a-quote'         => array(),
			'catalog-mode'            => array(),
			'bh-catalog-mode'         => array(),
			'multi-vendor'            => array(),
			'name-your-price'         => array(),
			'waiting-list'            => array(),
			'multi-currency'          => array(),
		);
	}

	/**
	 * Check if user has plugin
	 *
	 * @param string $plugin_slug The plugin name.
	 *
	 * @return bool
	 * @since   1.1.15
	 */
	public static function has_plugin( $plugin_slug ) {
		switch ( $plugin_slug ) {
			case 'catalog-mode':
				return defined( 'YWCTM_PREMIUM' ) && YWCTM_PREMIUM && defined( 'YWCTM_VERSION' ) && version_compare( YWCTM_VERSION, '1.4.8', '>=' );
			case 'bh-catalog-mode':
				return defined( 'BH_CATALOG_MODE_PREMIUM' ) && BH_CATALOG_MODE_PREMIUM && defined( 'BH_CATALOG_MODE_VERSION' );
			case 'role-based':
				return defined( 'YWCRBP_PREMIUM' ) && YWCRBP_PREMIUM && defined( 'YWCRBP_VERSION' ) && version_compare( YWCRBP_VERSION, '1.0.9', '>=' );
			case 'request-a-quote':
				return defined( 'YITH_YWRAQ_PREMIUM' ) && YITH_YWRAQ_PREMIUM && defined( 'YITH_YWRAQ_VERSION' ) && version_compare( YITH_YWRAQ_VERSION, '1.5.7', '>=' );
			case 'multi-vendor':
				return defined( 'YITH_WPV_INIT' ) && YITH_WPV_INIT;
			case 'name-your-price':
				return defined( 'YWCNP_PREMIUM' ) && YWCNP_PREMIUM && defined( 'YWCNP_VERSION' ) && version_compare( YWCNP_VERSION, '1.1.5', '>=' );
			case 'waiting-list':
				return defined( 'YITH_WCWTL_PREMIUM' ) && YITH_WCWTL_PREMIUM;
			case 'aelia-currency-switcher':
				return isset( $GLOBALS['woocommerce-aelia-currencyswitcher'] );
			case 'multi-currency':
				return defined( 'YITH_WCMCS_INIT' ) && YITH_WCMCS_INIT;
			case 'elementor':
				return defined( 'ELEMENTOR_VERSION' ) && version_compare( ELEMENTOR_VERSION, '3.0.0', '>=' );
			case 'bh-pdf-invoice':
				return defined( 'BH_PDF_INVOICES_PREMIUM' ) && BH_PDF_INVOICES_PREMIUM;
			default:
				return false;
		}
	}
}
