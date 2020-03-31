<?php

function seal_script_enqueue() {
    // adding my css styles
    wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap', false );
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/seal.css', array(), '1.0.0', 'all');
    // adding my js scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.3.1', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/seal.js', array(), '1.0.0', true);
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
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats' );

// Include custom navwalker
// require_once('bs4navwalker.php');

// Test for disable script and style type in these tags
add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);