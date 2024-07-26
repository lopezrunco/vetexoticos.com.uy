<?php
require_once get_template_directory() . '/functions.php';
if (file_exists(COMPANY_DATA_PATH)) {
    $json_data = file_get_contents(COMPANY_DATA_PATH);
    $company_data = json_decode($json_data, true);
}
?>

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
                <p><?php echo get_bloginfo('description'); ?></p>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0 bottom-column">
                <h4>Contacto</h4>
                <a><i class="me-3 fa-solid fa-envelope"></i> <?php echo $company_data['email'] ?></a>

                <?php
                foreach ($company_data['social'] as $social_item) {
                ?>
                    <a href="<?php echo esc_url($social_item['link']); ?>" target="_blank">
                        <i class="me-3 <?php echo esc_attr($social_item['icon']) ?>"></i>
                        <?php echo esc_html($social_item['nickname']); ?>
                    </a>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0 bottom-column">
                <h4>Asociados a</h4>
                <div class="members overflow-hidden d-flex justify-content-start align-items-start">
                    <?php
                    foreach ($company_data['members'] as $member) {
                    ?>
                        <img class="h-auto object-fit-container border-radius me-3" width="100" src="<?php echo get_template_directory_uri(); ?>/assets/images/members/<?php echo esc_html($member['imgName']) ?>" alt="<?php echo esc_attr($member['title']) ?>" />
                    <?php } ?>
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