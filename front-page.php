<?php
get_header();
?>

<div class="d-none d-lg-block top-hero bg-primary text-light">
	<div class="paws-overlay">
		<div class="container py-3">
			<div class="row">
				<div class="col-lg-4 text-center text-lg-left mb-2 mb-lg-0">
					<i class="fa-solid fa-box-open me-2"></i>
					<small>Envío por encomienda</small>
				</div>
				<div class="col-lg-4 text-center mb-2 mb-lg-0">
					<i class="fa-solid fa-clock me-2"></i>
					<small>Horarios amigables</small>
				</div>
				<div class="col-lg-4 text-center text-lg-right mb-2 mb-lg-0">
					<i class="fa-solid fa-truck me-2"></i>
					<small>Peluquería canina móvil</small>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="hero">
	<div class="gray-overlay">
		<div class="container">
			<div class="content-wrapper">
				<h6 class="subtitle">Encuentra los mejores suplementos</h6>
				<h1 class=title"">Sabemos que los animales son parte de tu familia, por eso, te ayudamos a cuidarlos.</h1>
				<?php
				$shop_page_url = get_permalink(wc_get_page_id('shop'));
				echo '<a class="btn btn-light" href="' . esc_url($shop_page_url) . '">Ir a la tienda <i class="fa-solid fa-paw"></i></a>'
				?>
			</div>
		</div>
	</div>
</div>

<div class="bottom-hero d-none d-lg-block bg-primary text-light pt-2">
	<div class="paws-overlay">
		<div class="container ">
			<div class="row justify-content-evenly align-items-center">
				<div class="col-lg-3 offset-1">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pet-food.png" alt="Comida para mascota">
				</div>
				<div class="col-lg-8">
					<p>Consigue importantes descuentos en compras al por mayor de comida para mascotas!</p>
				</div>
			</div>
		</div>
	</div>
</div>

<article class="content px-3 py-5 p-md-5">
	<div class="container">
		<?php
		$product_categories = get_terms(array(
			'taxonomy' => 'product_cat', // WooCommerce product category taxonomy
			'orderby' => 'name',
			'order' => 'ASC',
			'hide_empty' => true, // Hide empty categories
		));
		echo '<h3 class="text-center mb-5">Categorías</h3>';
		if (!empty($product_categories) && !is_wp_error($product_categories)) {
			echo '<div class="product-categories-container">';
			foreach ($product_categories as $category) {
				$thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
				$image_url = wp_get_attachment_url($thumbnail_id);

				// Debugging output
				echo '<!-- Category: ' . $category->name . ', Thumbnail ID: ' . $thumbnail_id . ', Image URL: ' . $image_url . ' -->';

				echo '<div class="product-category-item-wrapper">';
				if ($image_url) {
					echo '<a href="' . get_term_link($category) . '"><img src="' . esc_url($image_url) . '" alt="' . esc_attr($category->name) . '"></a>';
				} else {
					// If no image is found, output a default placeholder or message
					echo '<a href="' . get_term_link($category) . '"><img src="https://static.vecteezy.com/system/resources/previews/004/141/669/non_2x/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg" alt="No image available"></a>';
				}
				echo '<span><a href="' . get_term_link($category) . '">' . $category->name . '</a><span>';
				echo '</div>';
			}
			echo '</div>';
		} else {
			echo '<p>No se encontraron categorias de producto.</p>';
		}
		?>
	</div>
</article>

<article class="content px-3 py-5 p-md-5">
	<div class="container">
		<?php
		$latest_products = wc_get_products(array(
			'limit' => 6,
			'orderby' => 'date',
			'order' => 'DESC',
		));
		if ($latest_products) {
			echo '<h3 class="text-center mb-5">Últimos productos</h3>';
			echo '<div class="latest-products-container">';
			foreach ($latest_products as $product) {
		?>
				<div class="product-wrapper">
					<a href="<?php echo esc_url($product->get_permalink()); ?>">
						<?php echo $product->get_image(); ?>
						<h6><?php echo $product->get_name(); ?></h6>
						<span class="price"><?php echo $product->get_price_html(); ?></span>
					</a>
				</div>
		<?php
			}
			echo '</div>';
		} else {
			echo '<p>No se encontraron productos.</p>';
		}
		?>
	</div>
</article>

<article class="content px-3 py-5 p-md-5">
	<div class="container">
		<?php
		// Query latest blog posts
		$latest_posts = new WP_Query(array(
			'posts_per_page' => 5,
			'post_type' => 'post',
			'orderby' => 'date',
			'order' => 'DESC',
		));
		if ($latest_posts->have_posts()) {
			echo '<h3 class="text-center mb-5">Novedades recientes</h3>';
			echo '<div class="latest-news-container">';
			while ($latest_posts->have_posts()) {
				$latest_posts->the_post();
		?>
				<div class="new-wrapper">
					<?php if (has_post_thumbnail()) { ?>
						<div class="post-thumbnail">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
						</div>
					<?php } ?>
					<div class="post-content">
						<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
						<div class="post-excerpt">
							<?php the_excerpt(); ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="read-more">Leer más</a>
					</div>
				</div>
		<?php
			}
			echo '</div>';
			// Restore global post data
			wp_reset_postdata();
		} else {
			echo '<p>No blog posts found</p>';
		}
		?>
	</div>
</article>

<?php
get_footer();
?>