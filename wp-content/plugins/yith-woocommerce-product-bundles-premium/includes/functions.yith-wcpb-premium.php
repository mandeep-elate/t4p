<?php
/**
 * Premium Functions
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles
 */

defined( 'YITH_WCPB' ) || exit;

require_once 'functions.yith-wcpb-deprecated.php';
require_once 'functions.yith-wcpb-templates.php';

if ( ! function_exists( 'yith_wcpb_check_all_variations_for_stock_status' ) ) {
	/**
	 * Need to check all variations for stock status?
	 *
	 * @return bool
	 * @since 1.5.1
	 */
	function yith_wcpb_check_all_variations_for_stock_status() {
		// todo: maybe we can allow enabling this through an option in the plugin panel.
		return ! ! apply_filters( 'yith_wcpb_check_all_variations_for_stock_status', false );
	}
}
