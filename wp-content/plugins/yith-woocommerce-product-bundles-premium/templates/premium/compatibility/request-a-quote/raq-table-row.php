<?php
/**
 * RAQ table row.
 *
 * @var WC_Product $prod        The product
 * @var int        $id          Bundle item ID..
 * @var string     $link        The link.
 * @var string     $title       The title.
 * @var string     $image       The image.
 * @var string     $quantity    The quantity.
 * @var array      $raq_content RAQ data.
 * @var string     $key         The key.
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles\Templates
 */

$raq               = array();
$bundle_info       = $raq_info['yith-bundle-add-to-cart-params'] ?? array();
$show_prices       = 'no' === get_option( 'ywraq_hide_price', 'no' );
$show_line_total   = $show_prices && ywraq_show_element_on_list( 'line_total' );
$show_single_price = $show_prices && ywraq_show_element_on_list( 'single_price' );
$product_id        = $raq_info['product_id'];
/**
 * The bundle product.
 *
 * @var WC_Product_Yith_Bundle $product
 */
$product   = wc_get_product( $product_id );
$the_title = $title;
?>
<tr class="<?php echo esc_attr( apply_filters( 'yith_ywraq_item_class', 'cart_item yith-wcpb-child-of-bundle-table-item', $raq_content, $key ) ); ?>"
	<?php echo esc_attr( apply_filters( 'yith_ywraq_item_attributes', '', $raq_content, $key ) ); ?>>

	<td class="product-remove">
	</td>

	<td class="product-thumbnail">
		<?php echo $image; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</td>

	<td class="product-name">
		<?php
		if ( ! ! $prod->get_sku() && get_option( 'ywraq_show_sku' ) === 'yes' ) {
			$the_title .= apply_filters( 'ywraq_sku_label', __( ' SKU:', 'yith-woocommerce-request-a-quote' ) ) . $prod->get_sku();
		}
		?>
		<a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $the_title ); ?></a>
		<?php
		$item_data = array();

		if ( ! empty( $variation_id ) && ! empty( $variations ) ) {
			foreach ( $variations as $name => $value ) {
				$label = $name;
				$name  = strtolower( $name );
				$value = rawurldecode( $bundle_info[ 'yith_bundle_attribute_' . $name . '_' . $id ] ?? '' );

				if ( '' === $value ) {
					continue;
				}
				$name         = 'attribute_' . $name;
				$the_taxonomy = wc_attribute_taxonomy_name( str_replace( 'attribute_pa_', '', urldecode( $name ) ) );

				// If this is a term slug, get the term's nice name.
				if ( taxonomy_exists( $the_taxonomy ) ) {
					$the_term = get_term_by( 'slug', $value, $the_taxonomy );
					if ( ! is_wp_error( $the_term ) && $the_term && $the_term->name ) {
						$value = $the_term->name;
					}
					$label = wc_attribute_label( $the_taxonomy );

				} else {

					if ( strpos( $name, 'attribute_' ) !== false ) {
						$custom_att = str_replace( 'attribute_', '', $name );

						if ( ! ! $custom_att ) {
							$label = wc_attribute_label( $custom_att );
						}
					}
				}

				$item_data[] = array(
					'key'   => $label,
					'value' => $value,
				);
			}
		}
		$item_data = apply_filters( 'ywraq_request_quote_view_item_data', $item_data, $raq, $prod, false );

		if ( ! ! $item_data ) {
			foreach ( $item_data as $data ) {
				echo ' - ' . esc_html( $data['key'] ) . ': ' . wp_kses_post( $data['value'] );
			}
		}
		?>
	</td>
	<?php if ( $show_single_price ) : ?>
		<td class="product-price"
				data-title="<?php esc_attr_e( 'Price', 'yith-woocommerce-request-a-quote' ); ?>">
			<?php
			echo wp_kses_post( wc_price( wc_get_price_to_display( $prod ) ) );
			?>
		</td>
	<?php endif; ?>
	<td class="product-quantity">
		<?php echo esc_html( $quantity ); ?>
	</td>
	<?php if ( $show_line_total && $product->per_items_pricing ) : ?>
		<td class="product-subtotal">
			<?php echo wp_kses_post( wc_price( wc_get_price_to_display( $prod, array( 'qty' => $quantity ) ) ) ); ?>
		</td>
	<?php endif ?>
</tr>
