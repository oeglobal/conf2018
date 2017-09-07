<?php

add_filter( 'gform_currencies', 'gw_modify_currencies' );
function gw_modify_currencies( $currencies ) {

	$currencies['EUR'] = array(
		'name'               => esc_html__( 'Euro', 'gravityforms' ),
		'symbol_left'        => '&#8364;',
		'symbol_right'       => '',
		'symbol_padding'     => ' ',
		'thousand_separator' => '.',
		'decimal_separator'  => ',',
		'decimals'           => 2
	);

	return $currencies;
}
