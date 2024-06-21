<?php

/**
 * Template Name: Services
 * 
 * @package Vetexoticos WP Theme
 */

get_header();

$json_file = get_template_directory() . '/data/services.json';

if ( file_exists( $json_file ) ) {
    // Read JSON and decode the JSON file into an array of objetcs.
    $json_data = file_get_contents( $json_file ); 
    $services = json_decode( $json_data );
    
    // If decoding was successful loop and generate the HTML.
    if ( $services !== null ) {
?>
    <section class="services-page">
        <article class="container">
            <div class="row">
                <?php foreach( $services as $service ) : ?>
                    <div class="col-lg-4 mb-5">
                        <div class="wrapper">
                            <div class="icon-wrapper mb-4">
                                <i class="<?php echo esc_html($service->icon) ?> icon"></i>
                            </div>
                            <h4 class="mb-3"><?php echo esc_html($service->title) ?></h4>
                            <p><?php echo esc_html($service->description) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </article>
    </section>
<?php 
    } else {
        echo '<p>Hubo un error al cargar los servicios.</p>';
    }
} else {
    echo '<p>Hubo un error al cargar los servicios.</p>';
}

get_footer(); 
?>