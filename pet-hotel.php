<?php

/**
 * Template Name: Pet hotel
 * 
 * @package Vetexoticos WP Theme
 */

get_header();
?>

<section class="pet-hotel-page pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center mb-5">
                <h2>¿Te vas de vacaciones?</h2>
                <h2>¡Cuidamos de tu mejor amigo!</h2>
                <p class="mt-4 mb-5">Contamos con guardería para tu animal de compañía no tradicional, cumpliendo las necesidades de cada especie.</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-lg-8 mb-5">
                <?php get_template_part('template-parts/faq'); ?>
            </div>
            <div class="col-12 col-lg-4">
                <?php get_template_part('template-parts/vertical-slider'); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/wapp-call-to-action');
get_footer();
?>