<?php
get_header();
get_template_part('template-parts/top-hero');
get_template_part('template-parts/hero');
get_template_part('template-parts/latest-products');

// Start Why us section variables and template part
$wu_left_subtitle = '¿Por qué elegirnos?';
$wu_left_text = 'En vetexoticos.uy nos hemos preparado para brindar una atención integral y especializada en animales no convencionales. Somos un equipo joven y altamente capacitado para resolver las necesidades de nuestros pequeños pacientes. ';
$wu_right_subtitle = 'Nuestra filosofía';
$wu_right_text = 'Confiamos en la formación permanente, sumada al respeto y cariño por nuestros pacientes.';
$about_page = get_page_by_path('nosotros');
$wu_button_url = get_permalink($about_page->ID);
$wu_button_text = 'Más sobre nosotros';
$wu_icon = 'fa-bone';
include get_template_directory() . '/template-parts/why-us.php';
// End Why us section variables and template part

// Start Call to action section variables and template part
$cta_subtitle = 'Encontrá los mejores suplementos';
$cta_title = '¿Por qué elegirnos?';
$about_page = get_page_by_path('nosotros');
$cta_button_url = get_permalink($about_page->ID);
$cta_button_text = 'Saber más sobre nosotros';
$cta_icon = 'fa-bone';
include get_template_directory() . '/template-parts/call-to-action.php';
// Emd Call to action section variables and template part

get_template_part('template-parts/product-categories');
get_template_part('template-parts/food-brands');
get_template_part('template-parts/testimonials');
get_template_part('template-parts/product-by-category');
get_template_part('template-parts/featured-services');
get_template_part('template-parts/latest-news');
get_footer();
?>
