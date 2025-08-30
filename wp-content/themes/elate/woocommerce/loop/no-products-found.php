<?php
/**
 * Displayed when no products are found matching the current query
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/no-products-found.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined( 'ABSPATH' ) || exit;
/*
?>
<div class="woocommerce-no-products-found">
	<?php wc_print_notice( esc_html__( '<h3>Sorry, no products found.</h3><br>Please update the applied filters to see the available products.', 'woocommerce' ), 'notice' ); ?>
</div>
*/
?>
<div class="woocommerce-no-products-found">
    <?php
    // Get current queried object (should be product category)
    $term = get_queried_object();
    $category_name = isset($term->name) ? $term->name : ' ';

    wc_print_notice(
        sprintf(
            __('<h3>No products found for this vehicle in %s.</h3><p>Please check other categories or change your vehicle.</p>', 'woocommerce'),
            esc_html($category_name)
        ),
        'notice'
    );
    ?>
</div>