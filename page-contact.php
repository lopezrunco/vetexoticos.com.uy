<?php
/* Template Name: Contact */
get_header();
?>

<section>
    <article class="container">
        <div class="row">
            <div class="col-lg-8 mb-0 mb-lg-5">
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

<div class="bg-primary">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25517.552489363698!2d-56.166678735456934!3d-34.89036941498789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959f80ffc63bf7d3%3A0x6b321b2e355bec99!2sMontevideo%2C%20Departamento%20de%20Montevideo%2C%20Uruguay!5e0!3m2!1ses-419!2sin!4v1717759775551!5m2!1ses-419!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php
get_footer();
