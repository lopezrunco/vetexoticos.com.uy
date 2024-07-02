<?php
$images_names = array(
    'tiendanimal' => 'tiendanimal.png',
    'deribal' => 'deribal.png',
    'lilimascota' => 'lilimascota.png',
    'ferplast' => 'ferplast.png',
    'pawise' => 'pawise.png',
);

$brands = get_terms(array(
    'taxonomy' => 'pa_marca',
    'hide_empty' => false
));

if (!empty($brands) && !is_wp_error($brands)) : ?>
    <section class="brands-slider">
        <article class="container">
            <div class="row">
                <?php foreach ($brands as $brand) :
                    $term_slug = $brand->slug;
                    $image_name = isset($images_names[$term_slug]) ? $images_names[$term_slug] : null;
                    $image_url = $image_name ? get_template_directory_uri() . '/assets/images/brands/' . $image_name : null;
                    // Construct the link to filter product by brand.
                    $brand_link = home_url('/shop/?filter_marca=' . $term_slug . '&query_type_marca=or');

                ?>
                    <div class="col-sm-4 col-lg-2">
                        <div class="brand-wrapper p-4">
                            <?php if ($image_url) : ?>
                                <a href="<?php echo esc_url($brand_link); ?>">
                                    <img 
                                        width="100%" 
                                        class="border-radius" 
                                        src="<?php echo esc_url($image_url); ?>" 
                                        alt="<?php echo esc_attr($brand->name); ?>" 
                                    />
                                </a>
                            <?php else : ?>
                                <a href="<?php echo esc_url($brand_link); ?>">
                                    <h2><?php echo esc_html($brand->name); ?></h2>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </article>
    </section>

<?php endif; ?>