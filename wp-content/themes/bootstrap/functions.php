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