<?php
/*
Plugin Name: Woocommerce Aditional Countries
Description: Add England, Wales & Scotland
*/
/* Start Adding Functions Below this Line */
  
//* Add England, Wales & Scotland

add_filter( 'woocommerce_countries',  'handsome_bearded_guy_add_my_country' );
function handsome_bearded_guy_add_my_country( $countries ) {
  $new_countries = array(
	                    'ENG'  => __( 'England', 'woocommerce' ),
						'SCOT'  => __( 'Scotland', 'woocommerce' ),
						'WALE'  => __( 'Wales', 'woocommerce' ),
	                    );

	return array_merge( $countries, $new_countries );
} 
  
/* Stop Adding Functions Below this Line */
?>