<?php

/**
 * Template Name: About
 * 
 * @package Vetexoticos WP Theme
 */

get_header(); 
get_template_part('template-parts/company-description');

// Call to action section variables
$cta_subtitle = 'Ofrecemos una amplia gama de productospara perros, gatos, aves, peces y más.';
$cta_title = 'Descubre todo lo que necesitas para cuidar y consentir a tu mascota.';
$shop_page = get_page_by_path('shop');
$cta_button_url = get_permalink($shop_page->ID);
$cta_button_text = 'Ir a la tienda';
$cta_icon = 'fa-store';
// Include the call-to-action template part with variables
include get_template_directory() . '/template-parts/call-to-action.php';

get_template_part('template-parts/our-staff');
get_footer(); 

?>