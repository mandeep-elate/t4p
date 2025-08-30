<?php

/**
 * The product.
 *
 * @var WC_Product $product_object
 */
global $product_object;

$reflection_fields = array(
	array(
		// translators: %s is the currency symbol.
		'label'       => sprintf( __( 'Suggested price (%s)', 'yith-woocommerce-product-bundles' ), get_woocommerce_currency_symbol() ),
		'type'        => 'text',
		'class'       => 'short wc_input_price yith-wcpb-short-price-field',
		'original'    => '#ywcnp_simple_suggest_price',
		'description' => __( 'Set the suggested price for this bundle.', 'yith-woocommerce-product-bundles' ),
	),
	array(
		// translators: %s is the currency symbol.
		'label'       => sprintf( __( 'Minimum price (%s)', 'yith-woocommerce-product-bundles' ), get_woocommerce_currency_symbol() ),
		'type'        => 'text',
		'class'       => 'short wc_input_price yith-wcpb-short-price-field',
		'original'    => '#ywcnp_simple_min_price',
		'description' => __( 'Set the minimum price for this bundle.', 'yith-woocommerce-product-bundles' ),
	),
	array(
		// translators: %s is the currency symbol.
		'label'       => sprintf( __( 'Maximum price (%s)', 'yith-woocommerce-product-bundles' ), get_woocommerce_currency_symbol() ),
		'type'        => 'text',
		'class'       => 'short wc_input_price yith-wcpb-short-price-field',
		'original'    => '#ywcnp_simple_max_price',
		'description' => __( 'Set the maximum price for this bundle.', 'yith-woocommerce-product-bundles' ),
	),
);

?>
<div
	class="yith-wcpb-bundle-options-section yith-wcpb-show-conditional"
	data-rules="<?php echo esc_attr( wp_json_encode(
											array(
												array(
													'_ywcnp_enabled_product'      => 'yes',
													'_yith_wcpb_per_item_pricing' => 'no',
												),
											)
										) ) ?>"
>


	<?php foreach ( $reflection_fields as $field ): ?>
		<div class="yith-wcpb-form-field">
			<label class="yith-wcpb-form-field__label">
				<?php echo esc_html( $field['label'] ); ?>
			</label>
			<div class="yith-wcpb-form-field__content">
				<?php
				yith_plugin_fw_get_field(
					array(
						// The 'name' is not set since this is a "reflection" of the real Name Your Price field.
						'type'  => $field['type'],
						'class' => 'yith-wcpb-reflection-field ' . $field['class'],
						'value' => '', // The value is retrieved via JS from the original field.
						'data'  => array(
							'original' => $field['original'],
						),
					),
					true
				);
				?>
			</div>
			<div class='yith-wcpb-form-field__description'>
				<?php echo esc_html( $field['description'] ); ?>
			</div>
		</div>
	<?php endforeach; ?>
</div>
