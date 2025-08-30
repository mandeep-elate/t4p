/* global jQuery, ajaxurl, woocommerce_admin_meta_boxes, yith_bundle_opts */
jQuery( function ( $ ) {
	'use strict';

	var nameYourPriceCheckbox     = $( '#_ywcnp_enabled_product' ),
		nameYourPriceLabel        = nameYourPriceCheckbox.closest( 'label' ),
		productDataContainer      = $( '#woocommerce-product-data' ),
		bundleRegularPriceWrapper = $( '#_yith_wcpb_bundle_regular_price' ).closest( '.yith-wcpb-form-field' ),
		bundleSalePriceWrapper    = $( '#_yith_wcpb_bundle_sale_price' ).closest( '.yith-wcpb-form-field' ),
		showSavingAmountWrapper   = $( '#_yith_wcpb_show_saving_amount' ).closest( '.yith-wcpb-form-field' ),
		setNameYourPriceClass     = function () {
			if ( nameYourPriceCheckbox.is( ':checked' ) ) {
				productDataContainer.addClass( 'yith-wcpb-product-data--is-name-your-price' );
			} else {
				productDataContainer.removeClass( 'yith-wcpb-product-data--is-name-your-price' );
			}
		};

	nameYourPriceCheckbox.on( 'change', setNameYourPriceClass )

	nameYourPriceLabel.addClass( 'yith_bundle_hide_if_per_item_pricing yith_bundle_show_if_fixed_pricing' );

	bundleRegularPriceWrapper.addClass( 'yith-wcpb-hide-if-name-your-price' );
	bundleSalePriceWrapper.addClass( 'yith-wcpb-hide-if-name-your-price' );
	showSavingAmountWrapper.addClass( 'yith-wcpb-hide-if-name-your-price' );

} );
