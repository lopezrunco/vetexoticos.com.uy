<?php
require_once get_template_directory() . '/functions.php';

if (file_exists(PET_HOTEL_DATA_PATH)) {
    // Read JSON and decode the JSON file into an array of objects.
    $json_data = file_get_contents(PET_HOTEL_DATA_PATH);
    $data = json_decode($json_data, true); // Decode as an associative array.
    $faq_hotel = $data['accordion'];

    // If decoding was successful loop and generate the HTML.
    if ($faq_hotel !== null) { ?>
        <h4 class="mb-4">Preguntas frecuentes:</h4>
        <div class="accordion" id="accordionExample">
            <?php
            $index = 1;
            foreach ($faq_hotel as $faq) : ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse<?php echo $index; ?>">
                            <?php echo esc_html($faq['title']); ?>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?php
                            if (is_array($faq['description'])) {
                                foreach ($faq['description'] as $desc) {
                                    echo '<p>' . $desc . '</p>';
                                }
                            } else {
                                echo '<p>' . $faq['description'] . '</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
                $index++;
            endforeach; ?>
        </div>
<?php
    } else {
        echo '<p>Hubo un error al cargar la página.</p>';
    }
} else {
    echo '<p>Hubo un error al cargar la página.</p>';
}
?>