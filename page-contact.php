<?php
/* Template Name: Contact */
get_header();
?>

<section>
    <article class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <?php echo do_shortcode('[contact-form-7 id="39d3242" title="Contact form 1"]'); ?>
            </div>
            <div class="col-lg-4">
                <h3>Nos interesa ofrecerte lo mejor para tu mascota</h3>
                <p class="my-4">
                    Amet pulvinar dignissim sapien massa amet, ac orci rutrum. Quam in sed leo mauris etiam ut diam id. Metus viverra parturient montes, purus condimentum quis non sit amet. Euismod ligula.
                </p>
                <div class="contact-info">
                    <a href="mailto:info@vetexoticos.com.uy"><i class="me-3 fa-solid fa-envelope"></i> info@vetexoticos.com.uy</a>
                    <a href="https://maps.app.goo.gl/c8SLfXCbRS7WcVt78" target="_blank"><i class="me-3 fa-solid fa-location-dot"></i> Montevideo, Uruguay</a>
                    <a href="tel:+59891210125"><i class="me-3 fa-solid fa-phone"></i> 1234 5678</a>
                    <a href="tel:+59891210125"><i class="me-3 fa-solid fa-mobile"></i> 091 210 125</a>
                </div>
                <div class="social-icons">
                    <a href="https://m.facebook.com/dra.carinaesteves/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/vetexoticos.uy/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </article>
</section>

<?php
get_footer();
