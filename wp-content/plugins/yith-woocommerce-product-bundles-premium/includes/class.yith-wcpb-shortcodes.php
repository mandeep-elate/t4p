<?php
/**
 * Settings class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

/**
 * Class YITH_WCPB_Shortcodes
 */
class YITH_WCPB_Shortcodes {

	/**
	 * Single instance of the class
	 *
	 * @var YITH_WCPB_Shortcodes
	 */
	protected static $instance;

	/**
	 * Singleton implementation.
	 *
	 * @return YITH_WCPB_Shortcodes
	 */
	public static function get_instance() {
		return ! is_null( self::$instance ) ? self::$instance : self::$instance = new self();
	}

	/**
	 * YITH_WCPB_Shortcodes constructor.
	 */
	protected function __construct() {
		add_shortcode( 'bundled_items', array( $this, 'render_bundled_items' ) );

		add_shortcode( 'bundle_add_to_cart', array( $this, 'render_bundle_add_to_cart' ) );
	}

	/**
	 * Render Bundled Items
	 *
	 * EXAMPLE:
	 * <code>
	 *  [bundled_items]
	 * </code>
	 * this code displays the bundled items and add to cart for a bundle product
	 *
	 * EXAMPLE 2:
	 * <code>
	 *  [bundled_items type="list"]
	 * </code>
	 * this code displays only the bundled items for a bundle product [without add to cart]
	 *
	 * @access   public
	 *
	 * @param array       $atts    Shortcode attributes.
	 * @param string|null $content The content.
	 *
	 * @return string
	 */
	public function render_bundled_items( $atts, $content = null ) {
		global $product;
		if ( ! $product || ! $product->is_type( 'yith_bundle' ) ) {
			return '';
		}

		$type = $atts['type'] ?? 'list-add-to-cart';
		ob_start();
		switch ( $type ) {
			case 'list':
				global $product;
				if ( $product->is_type( 'yith_bundle' ) ) {
					/**
					 * The bundle product.
					 *
					 * @var WC_Product_Yith_Bundle $product
					 */
					$bundled_items = $product->get_bundled_items();
					if ( $bundled_items ) {
						$args = array(
							'product'              => $product,
							'available_variations' => $product->get_available_bundle_variations(),
							'attributes'           => $product->get_bundle_variation_attributes(),
							'selected_attributes'  => $product->get_selected_bundle_variation_attributes(),
							'bundled_items'        => $bundled_items,
						);
						wc_get_template( '/single-product/add-to-cart/yith-bundle-items-list.php', $args, '', YITH_WCPB_TEMPLATE_PATH . '/premium' );
					}
				}
				break;
			case 'list-add-to-cart':
			default:
				yith_wcpb_frontend()->woocommerce_yith_bundle_add_to_cart();
				break;

		}

		return ob_get_clean();
	}

	/**
	 * Render bundle product 'add-to-cart'
	 *
	 * @param array $atts Shortcode attributes.
	 *
	 * @return string
	 */
	public function render_bundle_add_to_cart( $atts ) {
		$html     = '';
		$defaults = array(
			'id' => false,
		);
		$atts     = wp_parse_args( $atts, $defaults );

		$id = $atts['id'];

		if ( $id ) {
			global $product;
			$old_product = $product;

			$product = wc_get_product( $id );
			if ( $product && $product->is_type( 'yith_bundle' ) ) {
				/**
				 * The bundle product.
				 *
				 * @var WC_Product_Yith_Bundle $product
				 */
				ob_start();
				echo "<div class='product'>";
				echo "<div class='price'>" . wp_kses_post( $product->get_price_html() ) . '</div>';
				yith_wcpb_frontend()->woocommerce_yith_bundle_add_to_cart();
				echo '</div>';
				$html = ob_get_clean();
			}

			$product = $old_product;
		}

		return $html;
	}

}

/**
 * Unique access to instance of YITH_WCPB_Shortcodes class
 *
 * @return YITH_WCPB_Shortcodes
 */
function yith_wcpb_shortcodes() {
	return YITH_WCPB_Shortcodes::get_instance();
}
