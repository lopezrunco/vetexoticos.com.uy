<?php
get_header();
?>

<section>
    <article class="container">
        <div class="row text-center">
            <div class="col-lg-6">
                <h1 class="text-center not-found-title">404!</h1>
                <h2 class="text-center mb-5">Página no encontrada</h2>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary mx-auto"><i class="fa-solid fa-house"></i> Volver a inicio</a>
            </div>
            <div class="col-lg-6">
                <div class="mb-5">
                    <p>
                        La página que estás buscando ha sido movida o eliminada.
                    </p>
                    <p>
                        Es posible que haya sido reubicada o que ya no esté disponible en este sitio web.
                    </p>
                    <p>
                        Por favor, regresa a la página de inicio para explorar más contenido interesante, o utiliza la caja de búsqueda para encontrar información específica que estés buscando.
                    </p>
                </div>
                <?php get_search_form(); ?>
            </div>
        </div>
    </article>
</section>

<?php
get_footer();
?>