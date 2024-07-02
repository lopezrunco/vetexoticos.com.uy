<?php
get_header();
get_template_part('template-parts/image-slider');
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

get_template_part('template-parts/product-categories');
get_template_part('template-parts/food-brands');
get_template_part('template-parts/product-by-category');
get_template_part('template-parts/featured-services');
get_template_part('template-parts/instagram-feed');
get_template_part('template-parts/brands');
get_footer();
?>
