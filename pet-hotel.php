<?php

/**
 * Template Name: Pet hotel
 * 
 * @package Vetexoticos WP Theme
 */

get_header();

$json_file = get_template_directory() . '/data/pet-hotel.json';

if (file_exists($json_file)) {
    // Read JSON and decode the JSON file into an array of objects.
    $json_data = file_get_contents($json_file);
    $faq_hotel = json_decode($json_data);

    // If decoding was successful loop and generate the HTML.
    if ($faq_hotel !== null) {
?>
        <section class="pet-hotel-page pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center mb-5">
                        <h2>¿Te vas de vacaciones?</h2>
                        <h2>¡Cuidamos de tu mejor amigo!</h2>
                        <p class="mt-4 mb-5">Contamos con guardería para tu animal de compañía no tradicional, cumpliendo las necesidades de cada especie.</p>
                        <h4>Preguntas frecuentes:</h4>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="accordion" id="accordionExample">
                            <?php
                            $index = 1;
                            foreach ($faq_hotel as $faq) : ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse<?php echo $index; ?>">
                                            <?php echo esc_html($faq->title); ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php
                                            if (is_array($faq->description)) {
                                                foreach ($faq->description as $desc) {
                                                    echo '<p>' . $desc . '</p>';
                                                }
                                            } else {
                                                echo '<p>' . $faq->description . '</p>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                $index++;
                            endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    } else {
        echo '<p>Hubo un error al cargar la página.</p>';
    }
} else {
    echo '<p>Hubo un error al cargar la página.</p>';
}

get_template_part('template-parts/wapp-call-to-action');
get_footer();
?>