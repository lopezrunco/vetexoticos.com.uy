<?php

function starterwptheme_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'starterwptheme_theme_support');

function starterwptheme_menus()
{
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}

add_action('init', 'starterwptheme_menus');

function starterwptheme_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('starterwptheme-style', get_template_directory_uri() . "/style.css", array('starterwptheme-bootstrap'), $version, 'all');
    wp_enqueue_style('starterwptheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('starterwptheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'starterwptheme_register_styles');

function starterwptheme_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('starterwptheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('starterwptheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('starterwptheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('starterwptheme-main', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'starterwptheme_register_scripts');

function starterwptheme_widget_areas()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area',
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area',
        )
    );
}

add_action('widgets_init', 'starterwptheme_widget_areas');

function custom_woocommerce_product_query( $query ) {
    if ( ! is_admin() && $query->is_main_query() && is_shop() ) {
        $query->set( 'posts_per_page', 12 );
    }
}
add_action( 'pre_get_posts', 'custom_woocommerce_product_query' );

function vetexoticos_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'vetexoticos_woocommerce_support' );

function vetexoticos_enqueue_styles() {
    // Enqueue the theme's main stylesheet
    wp_enqueue_style( 'vetexoticos-style', get_stylesheet_uri() );

    // Enqueue the custom WooCommerce stylesheet
    wp_enqueue_style( 'custom-woocommerce', get_template_directory_uri() . '/custom-woocommerce.css', array('vetexoticos-style') );
}
add_action( 'wp_enqueue_scripts', 'vetexoticos_enqueue_styles' );
