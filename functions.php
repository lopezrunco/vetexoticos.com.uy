<?php

function starterwptheme_theme_support()
{
    // Adds dynamic title tag support
    add_theme_support('title-tag');
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
