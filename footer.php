<section class="bottom bg-primary">
    <article class="container">
        <div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0 bottom-column">
                <h4>Contacto</h4>
                <a href="mailto:info@vetexoticos.com.uy"><i class="me-3 fa-solid fa-envelope"></i> info@vetexoticos.com.uy</a>
                <a href="https://maps.app.goo.gl/c8SLfXCbRS7WcVt78" target="_blank"><i class="me-3 fa-solid fa-location-dot"></i> Montevideo, Uruguay</a>
                <a href="tel:+59891210125"><i class="me-3 fa-solid fa-phone"></i> 1234 5678</a>
                <a href="tel:+59891210125"><i class="me-3 fa-solid fa-mobile"></i> 091 210 125</a>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0 bottom-column">
                <h4>Redes sociales</h4>
                <a href="https://m.facebook.com/dra.carinaesteves/" target="_blank"><i
                        class="fa-brands me-3 fa-facebook"></i> @dra.carinaesteves</a>
                <a href="https://www.instagram.com/vetexoticos.uy/" target="_blank"><i
                        class="fa-brands me-3 fa-instagram"></i> vetexoticos.uy</a>
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
            <div class="col-lg-3 mb-5 mb-lg-0 bottom-column">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                }
                ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vetexoticos-inverted.jpg"
                        alt="Vetexoticos logo">
                </a>
                <p>Creemos que las mascotas son nuestros mejores amigos, por eso, ofrecemos sólo lo mejor para ellos.
                </p>
            </div>
        </div>
    </article>
</section>

<footer class="footer text-center py-3 theme-bg-dark">
    <small>
        <?php echo get_bloginfo('name'); ?> © Copyright <?php echo date("Y"); ?> | Todos los derechos reservados |
        Desarrollo: <a class="developer" href="https://github.com/lopezrunco" target="_blank">Tecnomedios</a>
    </small>
    <?php dynamic_sidebar('footer-1'); ?>
</footer>
</div>

<?php
wp_footer();
?>

<!-- Bootstrap scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>

</html>