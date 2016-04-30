<?php
namespace AiIntelligence;
add_action( 'wp_enqueue_scripts', __NAMESPACE__.'\theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('zerif_font', zerif_slug_fonts_url(), array(), null );

    wp_enqueue_style( 'zerif_font_all', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600italic,600,700,700italic,800,800italic');

    wp_enqueue_style('zerif_bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css');

    wp_style_add_data( 'zerif_bootstrap_style', 'rtl', 'replace' );

    wp_enqueue_style('zerif_fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), 'v1');

    wp_enqueue_style('zerif_style', get_stylesheet_uri(), array('zerif_fontawesome'), 'v1');

    wp_enqueue_style('zerif_responsive_style', get_template_directory_uri() . '/css/responsive.css', array('zerif_style'), 'v1');

    if ( wp_is_mobile() ){

        wp_enqueue_style( 'zerif_style_mobile', get_template_directory_uri() . '/css/style-mobile.css', array('zerif_bootstrap_style', 'zerif_style'),'v1' );

    }
}
