<section class="product-categories bg-light">
	<article class="container">
		<?php
		$product_categories = get_terms(
			array(
				'taxonomy' => 'product_cat', // WooCommerce product category taxonomy
				'orderby' => 'name',
				'order' => 'ASC',
				'hide_empty' => true, // Hide empty categories
			)
		);
		echo '
			<div class="section-title">
				<h2>Categorías de producto</h2>
				<p>
					Todo lo que necesitas para el bienestar y felicidad de tus compañeros. Ofrecemos alimentos de alta calidad para una nutrición equilibrada, una variedad de juguetes para mantener a tus mascotas activas y entretenidas.
				</p>
			</div>
		';
		if (!empty($product_categories) && !is_wp_error($product_categories)) {
			echo '<div class="product-categories-container">';
			foreach ($product_categories as $category) {
				$thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
				$image_url = wp_get_attachment_url($thumbnail_id);

				// Debugging output
				echo '<!-- Category: ' . $category->name . ', Thumbnail ID: ' . $thumbnail_id . ', Image URL: ' . $image_url . ' -->';

				echo '<div class="product-category-item-wrapper">';
				if ($image_url) {
					echo '<div class="image-wrapper"><a href="' . get_term_link($category) . '"><img src="' . esc_url($image_url) . '" alt="' . esc_attr($category->name) . '"></a></div>';
				} else {
					// If no image is found, output a default placeholder or message
					echo '<a href="' . get_term_link($category) . '"><img src="https://static.vecteezy.com/system/resources/previews/004/141/669/non_2x/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg" alt="No image available"></a>';
				}
				echo '<h5><a href="' . get_term_link($category) . '">' . $category->name . '</a><h5>';
				echo '</div>';
			}
			echo '</div>';
		} else {
			echo '<p>No se encontraron categorias de producto.</p>';
		}
		?>
	</article>
</section>