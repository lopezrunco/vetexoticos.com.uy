<?php
require_once get_template_directory() . '/functions.php';

if (file_exists(SERVICES_DATA_PATH)) {
	$json_data = file_get_contents(SERVICES_DATA_PATH);
	$services = json_decode($json_data);
	$services_per_page = 4;

	// Randomize the order of the services array and select a few of them.
	shuffle($services);
	$selected_services = array_slice($services, 0, $services_per_page);
?>

	<section class="featured-services bg-primary">
		<div class="paws-overlay">
			<div class="dark-gradient-overlay">
				<article class="container fade-in delay-level2">
					<div class="row m-0">
						<?php foreach ($selected_services as $service) : ?>
							<div class="col-lg-3 mb-5 mb-lg-0">
								<i class="<?php echo esc_html($service->icon) ?>"></i>
								<p><?php echo esc_html($service->title) ?></p>
							</div>
						<?php endforeach; ?>
					</div>
				</article>
			</div>
		</div>
	</section>

<?php
} else {
	echo '<p>Ocurrió un error al cargar los servicios.</p>';
}
?>