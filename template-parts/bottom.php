<section class="bottom bg-primary">
    <article class="container">
        <div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0 bottom-column">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                }
                ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vetexoticos-inverted.jpg" alt="Vetexoticos logo">
                </a>
                <p>Somos una clínica dedicada exclusivamente a la atención médica y quirúrgica de animales de compañía no tradicionales.</p>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0 bottom-column">
                <h4>Contacto</h4>
                <a><i class="me-3 fa-solid fa-envelope"></i> contacto@vetexoticos.uy</a>
                <a href="tel:+59891210125"><i class="me-3 fa-solid fa-mobile"></i> 091 210 125</a>
                <a href="https://m.facebook.com/dra.carinaesteves/" target="_blank"><i class="fa-brands me-3 fa-facebook"></i> @dra.carinaesteves</a>
                <a href="https://www.instagram.com/vetexoticos.uy/" target="_blank"><i class="fa-brands me-3 fa-instagram"></i> vetexoticos.uy</a>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0 bottom-column">
                <h4>Asociados a</h4>
                <div class="members overflow-hidden d-flex justify-content-start align-items-start">
                    <img class="h-auto object-fit-container border-radius me-3" width="100" src="<?php echo get_template_directory_uri(); ?>/assets/images/members/aemv.jpg" alt="AEMV logo" />
                    <img class="h-auto object-fit-container border-radius" width="100" src="<?php echo get_template_directory_uri(); ?>/assets/images/members/aav.jpg" alt="AAV logo" />
                </div>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0 bottom-column">
                <h4>Enlaces útiles</h4>
                <nav class="footer-nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'container' => false,
                            'menu_class' => 'footer-menu',
                            'fallback_cb' => false,
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </article>
</section>