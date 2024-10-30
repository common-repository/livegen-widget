<?php
/*
Plugin Name: LiveGen widget
Plugin URI: http://data.generationdata.info/LiveGen
Description: Use [livegen-widget token='your-api-token'] to insert this widget into your page.
Author: Global-Roam
Author URI: http://www.global-roam.com/
Version: 1.0
*/

// short code attributes can only contain upper and lowercase letters, digits and underscores
// https://codex.wordpress.org/Shortcode_API

add_shortcode( 'livegen-widget', 'livegen_widget' );

function livegen_widget( $atts ) {

	$apiToken = $atts['token'];
    $dataParams = '{ "apiToken": "' . $apiToken . '" }';

    // in PHP, double quoted strings support string interpolation. 
    // http://au2.php.net/manual/en/language.types.string.php#language.types.string.parsing

	$shortcode_text = "<div class='gr-live-gen'></div>";
	$shortcode_text .= "<script class='gr-live-gen' data-params='$dataParams' ";
	$shortcode_text .= "src='http://data.generationdata.info/widgets/livegen.js' type='text/javascript'></script> ";

	return $shortcode_text;
}
