<?php
/**
 * YITH WooCommerce PDF Invoice integration class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

/**
 * YITH WooCommerce PDF Invoice Compatibility Class
 *
 * @class   YITH_WCPB_Pdf_Invoice_Compatibility
 * @since   1.1.4
 */
class YITH_WCPB_Pdf_Invoice_Compatibility {

	/**
	 * Single instance of the class
	 *
	 * @var YITH_WCPB_Pdf_Invoice_Compatibility
	 */
	protected static $instance;

	/**
	 * Returns single instance of the class
	 *
	 * @return YITH_WCPB_Pdf_Invoice_Compatibility
	 */
	public static function get_instance() {
		return ! is_null( self::$instance ) ? self::$instance : self::$instance = new self();
	}

	/**
	 * Constructor
	 */
	protected function __construct() {
		add_filter( 'yith_ywpi_line_discount', array( $this, 'remove_bundled_items_from_discount_in_invoice' ), 10, 2 );
	}

	/**
	 * Set discounts to zero for bundled items.
	 *
	 * @param float|string        $discount Discount.
	 * @param array|WC_Order_Item $item     The item.
	 *
	 * @return int|mixed
	 */
	public function remove_bundled_items_from_discount_in_invoice( $discount, $item ) {
		if ( ! empty( $item['bundled_by'] ) ) {
			return 0;
		}

		return $discount;
	}
}
