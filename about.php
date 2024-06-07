<?php

/**
 * Template Name: About
 * 
 * @package Vetexoticos WP Theme
 */


get_header(); ?>

<section class="company-description">
    <article class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <img width="100%" class="border-radius" src="https://images.pexels.com/photos/220938/pexels-photo-220938.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagen de nosotros">
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h2>Nos apasiona cuidar de tus animales.</h2>
                    </div>
                    <div class="col-lg-6">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, facilis! Pariatur perferendis amet nesciunt alias debitis reprehenderit, ea excepturi nulla quibusdam libero. Enim culpa magni odio amet optio, velit ut. Pariatur perferendis amet nesciunt alias debitis reprehenderit, ea excepturi nulla quibusdam libero. Enim culpa magni odio amet optio, velit ut.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, facilis! Pariatur perferendis amet nesciunt alias debitis reprehenderit, ea excepturi nulla quibusdam libero. Enim culpa magni odio amet optio, velit ut. Pariatur perferendis amet nesciunt alias debitis reprehenderit, ea excepturi nulla quibusdam libero.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, facilis! Pariatur perferendis amet nesciunt alias debitis reprehenderit, ea excepturi nulla quibusdam libero.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, facilis! Pariatur perferendis amet nesciunt alias debitis reprehenderit, ea excepturi nulla quibusdam libero. Enim culpa magni odio amet optio, velit ut. Enim culpa magni odio amet optio, velit ut. Pariatur perferendis amet nesciunt alias debitis reprehenderit, ea excepturi nulla quibusdam libero. Enim culpa magni odio amet optio, velit ut.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img width="200" src="<?php echo get_template_directory_uri(); ?>/assets/images/signature.jpg" alt="Firma">
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<section class="call-to-action">
	<article class="gray-overlay">
		<article class="container">
			<div class="content-wrapper">
				<h6>Ofrecemos una amplia gama de productospara perros, gatos, aves, peces y más.</h6>
				<h1>Descubre todo lo que necesitas para cuidar y consentir a tu mascota.</h1>
				<?php
				$shop_page = get_page_by_path('shop');
				$shop_page_url = get_permalink($shop_page->ID);
				echo '<a class="btn btn-light" href="' . esc_url($shop_page_url) . '">Ir a la tienda <i class="fa-solid fa-store"></i></a>';
				?>
			</div>
		</article>
	</article>
</section>

<?php get_footer(); ?>