<section class="product-grid">
	<article class="container">
		<?php
		$category_slug = 'Aves';
		$category = get_term_by('slug', $category_slug, 'product_cat');

		$latest_products = wc_get_products(
			array(
				'limit' => 4,
				'orderby' => 'date',
				'order' => 'DESC',
				'category' => array($category_slug),
			)
		);
		if ($latest_products) {
			$category_link = get_term_link($category->term_id, 'product_cat');
			echo '
			<div class="section-title-more">
				<div>
					<span class="top-title">Te ayudamos a cuidarlos</span>
					<h2>' . esc_html($category->name) . '</h2>
				</div>
				<div>
					<a class="btn btn-primary" href="' . esc_url($category_link) . '">Ver más ' . esc_html($category->name) . ' <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
		';
			echo '<div class="row">';
			foreach ($latest_products as $product) {
				?>
				<div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
					<div class="product-wrapper">
						<a href="<?php echo esc_url($product->get_permalink()); ?>">
							<?php echo $product->get_image(); ?>
							<h5><?php echo $product->get_name(); ?></h5>
							<span class="price"><?php echo $product->get_price_html(); ?></span>
						</a>
					</div>
				</div>
				<?php
			}
			echo '</div>';
		} else {
			echo '<p>No se encontraron productos en la categoría ' . $category_slug . '</p>';
		}
		?>
	</article>
</section>