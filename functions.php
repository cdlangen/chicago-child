<?php


/* borrowed from https://www.sitepoint.com/using-font-awesome-with-wordpress/
 * I added the second wp_enqueue_style line to include Academicons
 * This code enqueues our external font awesome stylesheet 
 * 
 */
function enqueue_our_required_stylesheets(){
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/adc2e6740b.js'); 
    wp_enqueue_style('academicons', get_stylesheet_directory_uri() . '/css/academicons.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

/**
 * Loading Parent and child theme stylesheets
 *
 */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'chicago-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
?>