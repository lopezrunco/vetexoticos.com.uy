<?php
require_once get_template_directory() . '/functions.php';

if (file_exists(PET_HOTEL_DATA_PATH)) {
    // Obtain and decode static data from JSON file.
    $json_data = file_get_contents(PET_HOTEL_DATA_PATH);
    $data = json_decode($json_data, true); // Decode as an associative array.

    $assets_src = '/assets/images/pet-hotel/';

    // Check if images array exists and is not empty.
    if (!empty($data['images']) && !is_wp_error($data)) { ?>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $images = $data['images'];
                $active = true; // Set the first item as active

                foreach ($images as $index => $image) : ?>
                    <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                        <img class="d-block w-100 border-radius box-shadow" src="<?php echo esc_url(get_template_directory_uri() . $assets_src . esc_attr($image)); ?>" alt="Vetexoticos.uy Guardería" />
                    </div>
                <?php
                    $active = false; // Set next items to non-active.
                endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <?php
        } else {
            echo '<p>Hubo un error al procesar los datos del carrusel.</p>';
        };
} else {
    echo '<p>Hubo un error al cargar la página.</p>';
}
?>