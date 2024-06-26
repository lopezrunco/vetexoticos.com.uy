<?php
$json_file = get_template_directory() . '/data/services.json';

if (file_exists($json_file)) {
	$json_data = file_get_contents($json_file);
	$services = json_decode($json_data);
	$services_per_page = 4;

	// Randomize the order of the services array and select a few of them.
	shuffle($services);
	$selected_services = array_slice($services, 0, $services_per_page);

?>

	<section class="featured-services bg-primary">
		<div class="paws-overlay">
			<div class="dark-gradient-overlay">
				<article class="container">
					<div class="row">
						<?php foreach ($selected_services as $service) : ?>
							<div class="col-lg-3 mb-4 mb-lg-0">
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
	echo '<p>Hubo un error al cargar los servicios.</p>';
}
?>