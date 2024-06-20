<?php
get_header();
get_template_part('template-parts/top-hero');
get_template_part('template-parts/hero');
get_template_part('template-parts/bottom-hero');
get_template_part('template-parts/latest-products');

// Call to action section variables
$cta_subtitle = 'Encontrá los mejores suplementos';
$cta_title = '¿Por qué elegirnos?';
$about_page = get_page_by_path('nosotros');
$cta_button_url = get_permalink($about_page->ID);
$cta_button_text = 'Saber más sobre nosotros';
$cta_icon = 'fa-bone';
// Include the call-to-action template part with variables
include get_template_directory() . '/template-parts/call-to-action.php';

get_template_part('template-parts/product-categories');
get_template_part('template-parts/food-brands');
get_template_part('template-parts/testimonials');
get_template_part('template-parts/product-by-category');
get_template_part('template-parts/featured-services');
get_template_part('template-parts/latest-news');
get_footer();
?>
