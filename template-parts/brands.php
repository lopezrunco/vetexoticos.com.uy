<?php
$images_names = array(
    'tiendanimal' => 'tiendanimal.png',
    'deribal' => 'deribal.png',
    'lilimascota' => 'lilimascota.png',
    'ferplast' => 'ferplast.png',
    'pawise' => 'pawise.png',
    'brit' => 'brit.png',
    'nilda' => 'nilda.jpeg'
);

$brands = get_terms(array(
    'taxonomy' => 'pa_marca',
    'hide_empty' => false
));

$no_image_placeholder = get_template_directory_uri() . '/assets/images/no-image-default.jpg';

if (!empty($brands) && !is_wp_error($brands)) : ?>
    <!-- Desktop Version (Grid Layout) -->
    <section class="brands-slider d-none d-lg-block">
        <article class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Nuestras marcas</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($brands as $brand) :
                    $term_slug = $brand->slug;
                    $image_name = isset($images_names[$term_slug]) ? $images_names[$term_slug] : null;
                    $image_url = $image_name ? get_template_directory_uri() . '/assets/images/brands/' . $image_name : $no_image_placeholder;
                    // Construct the link to filter product by brand.
                    $brand_link = home_url('/tienda/?filter_marca=' . $term_slug . '&query_type_marca=or');
                ?>
                    <div class="col" style="flex: 0 0 14.2857%;">
                        <div class="brand-wrapper p-2">
                            <a href="<?php echo esc_url($brand_link); ?>">
                                <img 
                                    width="100%" 
                                    class="border-radius box-shadow" 
                                    src="<?php echo esc_url($image_url); ?>" 
                                    alt="<?php echo esc_attr($brand->name); ?>" 
                                />
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </article>
    </section>

    <!-- Mobile Version (Bootstrap Carousel) -->
    <section class="brands-slider d-block d-lg-none">
        <article class="container">
            <div class="row">
                <div class="section-title mb-0">
                    <h2>Nuestras marcas</h2>
                </div>
            </div>
            <div id="brandCarouselMobile" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner py-5">
                    <?php foreach ($brands as $index => $brand) :
                        $term_slug = $brand->slug;
                        $image_name = isset($images_names[$term_slug]) ? $images_names[$term_slug] : null;
                        $image_url = $image_name ? get_template_directory_uri() . '/assets/images/brands/' . $image_name : $no_image_placeholder;
                        $brand_link = home_url('/tienda/?filter_marca=' . $term_slug . '&query_type_marca=or');
                    ?>
                        <div class="carousel-item px-5 <?php echo $index === 0 ? 'active' : ''; ?>">
                            <a href="<?php echo esc_url($brand_link); ?>">
                                <img 
                                    class="d-block w-100 border-radius box-shadow" 
                                    src="<?php echo esc_url($image_url); ?>" 
                                    alt="<?php echo esc_attr($brand->name); ?>" 
                                />
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#brandCarouselMobile" role="button" data-slide="prev">
                    <i class="fa-solid fa-chevron-left position-arrow"></i>
                </a>
                <a class="carousel-control-next" href="#brandCarouselMobile" role="button" data-slide="next">
                    <i class="fa-solid fa-chevron-right position-arrow"></i>
                </a>
            </div>
        </article>
    </section>
<?php endif; ?>