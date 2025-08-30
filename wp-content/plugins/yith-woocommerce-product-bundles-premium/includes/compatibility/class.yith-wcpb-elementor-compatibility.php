<?php
/**
 * Elementor's integration class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

/**
 * Elementor's integration class
 *
 * @class   YITH_WCPB_Elementor_Compatibility
 */
class YITH_WCPB_Elementor_Compatibility {

	/**
	 * Single instance of the class
	 *
	 * @var YITH_WCPB_Elementor_Compatibility
	 */
	protected static $instance;

	/**
	 * Returns single instance of the class
	 *
	 * @return YITH_WCPB_Elementor_Compatibility
	 */
	public static function get_instance() {
		return ! is_null( self::$instance ) ? self::$instance : self::$instance = new self();
	}

	/**
	 * Constructor
	 */
	protected function __construct() {
		add_action( 'elementor/widget/before_render_content', array( $this, 'before_render_add_to_cart' ) );
	}

	/**
	 * Before rendering add-to-cart
	 *
	 * @param \Elementor\Widget_Base $widget The widget.
	 *
	 * @return void
	 */
	public function before_render_add_to_cart( $widget ) {

		if ( $widget->get_name() !== 'woocommerce-product-add-to-cart' ) {
			return;
		}

		if ( in_array( $widget->get_settings_for_display( 'layout' ), array( 'auto', 'stacked' ), true ) ) {
			add_action( 'woocommerce_before_add_to_cart_button', array( $this, 'before_add_to_cart_button' ), 5 );
		}
	}

	/**
	 * Before add to cart button.
	 */
	public function before_add_to_cart_button() {
		echo '<div class="e-atc-qty-button-holder">';
	}
}
