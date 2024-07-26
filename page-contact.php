<?php

/**
 * Template Name: Contact
 * 
 * @package Vetexoticos WP Theme
 */

get_header();
?>

<section>
    <article class="container">
        <div class="row">
            <div class="col-lg-4 mb-5">
                <?php get_template_part('template-parts/contact-info'); ?>
            </div>
            <div class="col-lg-7 offset-lg-1 mb-5 mb-lg-0">
                <?php 
                    // Dev form
                    // echo do_shortcode('[contact-form-7 id="39d3242" title="Contact form 1"]'); 

                    // Prod form
                    echo do_shortcode('[contact-form-7 id="949b6a3" title="Formulario de contacto 1"]'); 
                ?>
            </div>
        </div>
    </article>
</section>

<?php
get_footer();
