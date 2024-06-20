<section class="call-to-action">
    <article class="gray-overlay">
        <div class="container">
            <div class="content-wrapper">
                <h6><?php echo esc_html($cta_subtitle); ?></h6>
                <h1><?php echo esc_html($cta_title); ?></h1>
                <a class="btn btn-light" href="<?php echo esc_url($cta_button_url); ?>">
                    <?php echo esc_html($cta_button_text); ?>
                    <i class="fa-solid <?php echo esc_attr($cta_icon); ?>"></i>
                </a>
            </div>
        </div>
    </article>
</section>

<!-- Usage: -->
<!-- // Call to action section variables
$cta_subtitle = 'Ofrecemos una amplia gama de productospara perros, gatos, aves, peces y más.';
$cta_title = 'Descubre todo lo que necesitas para cuidar y consentir a tu mascota.';
$shop_page = get_page_by_path('shop');
$cta_button_url = get_permalink($shop_page->ID);
$cta_button_text = 'Ir a la tienda';
$cta_icon = 'fa-store';
// Include the call-to-action template part with variables
include get_template_directory() . '/template-parts/call-to-action.php'; -->