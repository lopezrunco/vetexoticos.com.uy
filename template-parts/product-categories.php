<section class="product-categories bg-light">
	<article class="container">
		<?php
		$parent_category = get_term_by('name', 'Especie', 'product_cat');

		if ($parent_category && !is_wp_error($parent_category)) {
			$product_categories = get_terms(array(
				'taxonomy' => 'product_cat', // WooCommerce product category taxonomy
				'orderby' => 'name',
				'order' => 'ASC',
				'hide_empty' => true, // Hide empty categories
				'child_of' => $parent_category->term_id // Fetch subcategories of parent category
			));
			echo '
				<div class="section-title">
					<h2>¿A quién vas a mimar hoy?</h2>
				</div>
			';

			// Check if there are subcategories found.
			if (!empty($product_categories) && !is_wp_error($product_categories)) {
				echo '<div class="product-categories-container">';
				foreach ($product_categories as $category) {
					$thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
					$image_url = wp_get_attachment_url($thumbnail_id);

					// Debugging output
					echo '<!-- Category: ' . $category->name . ', Thumbnail ID: ' . $thumbnail_id . ', Image URL: ' . $image_url . ' -->';

					echo '<div class="product-category-item-wrapper">';
					if ($image_url) {
						echo '
							<div class="image-wrapper">
								<a href="' . get_term_link($category) . '">
									<img src="' . esc_url($image_url) . '" alt="' . esc_attr($category->name) . '" />
								</a>
							</div>';
					} else {
						// If no image is found, output a default placeholder image.
						echo '
							<div class="image-wrapper">
								<a href="' . get_term_link($category) . '">
									<img src="' . get_template_directory_uri() . '/assets/images/no-image-placeholder.png" alt="' . esc_attr($category->name) . '" />
								</a>
							</div>';
					}
					echo '<h5><a href="' . get_term_link($category) . '">' . $category->name . '</a><h5>';
					echo '</div>';
				}
				echo '</div>';
			} else {
				echo '<p>No se encontraron categorias de producto.</p>';
			}
		} else {
			echo '<p>No se encontraró la categoria padre Especies.</p>';
		}
		?>
	</article>
</section>