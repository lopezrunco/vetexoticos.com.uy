<div class="bottom py-5">
    <div class="container">
        <div class="bottom-col">
            <?php
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>

            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo $logo[0] ?>" alt="logo">
            </a>
        </div>
        <div class="bottom-col">
            <h5>Información de contacto</h5>
            <a href=""><i class="fa-solid fa-location-dot"></i> Montevideo, Uruguay</a>
            <a href=""><i class="fa-solid fa-phone"></i> 1234 5678</a>
            <a href=""><i class="fa-solid fa-mobile"></i> 099 123 456</a>
        </div>
        <div class="bottom-col">
            <h5>Seguinos en las redes</h5>
            <a href=""><i class="fa-brands fa-facebook"></i> @dra.carinaesteves</a>
            <a href=""><i class="fa-brands fa-instagram"></i> vetexoticos.uy</a>
        </div>
    </div>
</div>

<footer class="footer text-center py-3 theme-bg-dark">
    <small>Vetexoticos © Copyright <?php echo date("Y"); ?> | Todos los derechos reservados | Desarrollo: <a href="https://damian-lopez.web.app/" target="_blank">Tecnomedios</a></small>

    <?php
    dynamic_sidebar('footer-1');
    ?>

</footer>
</div>

<?php
wp_footer();
?>

</body>

</html>