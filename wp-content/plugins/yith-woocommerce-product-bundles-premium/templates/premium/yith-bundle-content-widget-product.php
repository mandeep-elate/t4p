<?php
/**
 * Bundle widget - content product
 *
 * @var bool $show_rating        Show rating.
 * @var bool $show_bundled       Show bundled items.
 * @var bool $show_bundled_thumb Show thumbnails for bundled items.
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\ProductBundles\Templates
 */

/**
 * The bundle product.
 *
 * @var WC_Product_Yith_Bundle $product
 */
global $product;

// Late style and scripts loading.
wp_enqueue_style( 'yith_wcpb_bundle_frontend_style' );
?>
<li>
	<div class="yith-wcpb-widget-bundle-container">

		<?php do_action( 'yith_wcpb_widget_before_product_title', $product ); ?>

		<a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
			<span class="product-title"><?php echo esc_html( $product->get_title() ); ?></span>
		</a>
		<?php
		if ( ! empty( $show_rating ) ) {
			echo wc_get_rating_html( $product->get_average_rating() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
		?>
		<div class="yith-wcpb-widget-bundle-price"><?php echo $product->get_price_html(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
	</div>

	<?php
	if ( $show_bundled ) {
		$bundled_items = $product->get_bundled_items();
		if ( $bundled_items ) {
			?>
			<ul class="yith-wcpb-widget-bundled-items">
				<?php
				foreach ( $bundled_items as $item ) {
					if ( $item->is_hidden() ) {
						continue;
					}
					$item_product = $item->product;
					$product_link = $item_product->is_visible() ? get_permalink( $item_product->get_id() ) : '#';
					?>
					<li>
						<a href="<?php echo esc_url( $product_link ); ?>" title="<?php echo esc_attr( $item_product->get_title() ); ?>">

							<?php
							if ( ! $item->hide_thumbnail && $show_bundled_thumb ) {
								echo $item_product->get_image(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							}
							?>
							<span class="product-title"><?php echo esc_html( $item_product->get_title() ); ?></span>
					</li>
					<?php
				}
				?>
			</ul>
			<?php
		}
	}
	?>
</li>
