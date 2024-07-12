<?php

/**
 * Template Name: About
 * 
 * @package Vetexoticos WP Theme
 */

get_header(); 
get_template_part('template-parts/company-description');

// Start Call to action section variables and template part
$cta_bg_image_url = '/assets/images/call-to-action-bg.jpg';
$cta_subtitle = 'Ofrecemos una amplia gama de productos para animales exóticos.';
$cta_title = 'Descubre todo lo que necesitas para cuidar y consentir a tu mascota.';
$shop_page = get_page_by_path('shop');
$cta_button_url = get_permalink($shop_page->ID);
$cta_button_text = 'Ir a la tienda';
$cta_icon = 'fa-store';
include get_template_directory() . '/template-parts/call-to-action.php';
// End Call to action section variables and template part

get_footer(); 

?>