<?php

/*
Plugin Name: PropertyAi
Plugin URI: http://akismet.com/
Description: An app that puts all your property information in one place
Version: 3.1.10
Author: Team PropertyAi
Author URI: http://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: property-ai
*/
namespace PropertyAi;

// Use composer autoloader
require_once( \ABSPATH.'/vendor/autoload.php' );

use LightnCandy\LightnCandy;

add_action( 'init', __NAMESPACE__.'register_scripts' );
add_shortcode('property_ai_app', __NAMESPACE__.'\property_ai_app' );

function register_scripts() {
  wp_register_script('handlebars', 'https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.js') );
  wp_register_script('property_ai_app', plugins_url('js/app.js', __FILE__ ), array( 'backbone', 'underscore', 'jquery', 'handlebars' ) );
}

function property_ai_app( $atts ) {
  $atts = shortcode_atts( array(
	), $atts, 'property_ai_app' );



  $template = include('templates/main.php');

	return $template;
}
