<?php

// registering Navigation Walker class_alias

require_once('class-wp-bootstrap-navwalker.php');

// Theme Set Up

function bootstrap_theme_setup() {

    // Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'bootstrap_theme_setup');

// setting up excerpt length
function set_excerpt_length() {
    return 15;
}

add_filter('excerpt_length', 'set_excerpt_length');

// fetching all styles, fonts and js

function fetch_bootstrap_files() {
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.js',), NULL, '1.0', true);
    // wp_enqueue_style('google-custom-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    // wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'fetch_bootstrap_files');

add_theme_support('post-thumbnails');