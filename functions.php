<?php
/**
 * Child Theme functions and definitions
 *
 */


/**
 * Loading Parent theme stylesheet
 *
 */
add_action( 'wp_enqueue_scripts', 'catchbox_child_enqueue_styles' );
function catchbox_child_enqueue_styles() {
    wp_enqueue_style( 'catchbox-parent-style', get_template_directory_uri() . '/style.css' );
}
