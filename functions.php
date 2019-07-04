<?php

function seal_script_enqueue() {
    // adding my css styles
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/seal.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
    // adding my js scripts
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/seal.js', array(), '1.0.0', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.3.1', true);
}
add_action( 'wp_enqueue_scripts', 'seal_script_enqueue');


function seal_theme_setup() {
    // unlock menus
    add_theme_support('menus');

    register_nav_menu('main', ' Main Header Navigation');
    register_nav_menu('footer', ' Footer Navigation');
}
add_action('init', 'seal_theme_setup');

// Add thumbnails images to posts
add_theme_support('post_thumbnails');

// delete default wp jQuery and include custom jQuery
function shapeSpace_include_custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
