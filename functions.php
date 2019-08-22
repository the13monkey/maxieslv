<?php 

function load_styles()
{
//Load bootstrap and custom stylesheet
    wp_enqueue_style('bootstrap_style', get_template_directory_uri().'/css/bootstrap.css', array(), false, 'all');
    wp_enqueue_style('custom_style', get_template_directory_uri().'/css/custom.css', array(), false, 'all');

//Load fontawesome library    
    wp_enqueue_script('fontawesome', get_template_directory_uri().'/js/fontawesome.js', array('jquery'), '', false);
    wp_enqueue_script('solid', get_template_directory_uri().'/js/solid.js', array('jquery'), '', false);

//Load custom js
    wp_enqueue_script('custom_js', get_template_directory_uri().'/js/custom.js', array('jquery'), '', false);
}
add_action('wp_enqueue_scripts', 'load_styles');


add_theme_support('menus');
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);

add_theme_support('custom-logo');

function new_excerpt_length($length) {
    return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

