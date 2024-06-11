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
				<h1 class=title"">Sabemos que los animales son parte de tu familia, por eso, te ayudamos a cuidarlos.
				</h1>
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
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pet-food.png"
						alt="Comida para mascota">
				</div>
				<div class="col-lg-8">
					<p>Consigue importantes descuentos en compras al por mayor de comida para mascotas!</p>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="product-grid">
	<article class="container">
		<?php
		$latest_products = wc_get_products(
			array(
				'limit' => 3,
				'orderby' => 'date',
				'order' => 'DESC',
			)
		);
		if ($latest_products) {
			$shop_page_url = get_permalink(wc_get_page_id('shop'));
			echo '
			<div class="section-title-more">
				<div>
					<span class="top-title">Cosas que ellos amarán</span>
					<h2>Últimos productos</h2>
				</div>
				<div>
					<a class="btn btn-primary" href="' . esc_url($shop_page_url) . '">Ver más productos <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
		';
			echo '<div class="row">';
			foreach ($latest_products as $product) {
				?>
				<div class="col-lg-4 mb-4">
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
			echo '<p>No se encontraron productos.</p>';
		}
		?>
	</article>
</section>

<section class="call-to-action">
	<article class="gray-overlay">
		<article class="container">
			<div class="content-wrapper">
				<h6>Encontrá los mejores suplementos</h6>
				<h1>Nuevos arrivos todas las semanas</h1>
				<?php
				$about_page = get_page_by_path('nosotros');
				$about_page_url = get_permalink($about_page->ID);
				echo '<a class="btn btn-light" href="' . esc_url($about_page_url) . '">Saber más sobre nosotros <i class="fa-solid fa-bone"></i></a>';
				?>
			</div>
		</article>
	</article>
</section>

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

<section class="food-brands bg-light">
	<article class="container">
		<div class="row">
			<div class="col-lg-4 mb-3">
				<div class="wrapper bg-primary">
					<div class="paws-overlay">
						<h2>Frost</h2>
						<span>Comida para cachorros</span>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-1.png"
							alt="Comida para mascotas">
						<?php
						$shop_page_url = get_permalink(wc_get_page_id('shop'));
						echo '<a class="btn btn-dark" href="' . esc_url($shop_page_url) . '">Más productos <i class="fa-solid fa-chevron-right"></i></a>'
							?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-3">
				<div class="wrapper bg-primary">
					<div class="paws-overlay">
						<h2>Equilibrio</h2>
						<span>Comida para perros adultos</span>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-2.png"
							alt="Comida para mascotas">
						<?php
						$shop_page_url = get_permalink(wc_get_page_id('shop'));
						echo '<a class="btn btn-dark" href="' . esc_url($shop_page_url) . '">Más productos <i class="fa-solid fa-chevron-right"></i></a>'
							?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-3">
				<div class="wrapper bg-primary">
					<div class="paws-overlay">
						<h2>Dog Chow</h2>
						<span>Comida para gatos</span>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-3.png"
							alt="Comida para mascotas">
						<?php
						$shop_page_url = get_permalink(wc_get_page_id('shop'));
						echo '<a class="btn btn-dark" href="' . esc_url($shop_page_url) . '">Más productos <i class="fa-solid fa-chevron-right"></i></a>'
							?>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>

<section class="testimonials bg-primary">
	<div class="paws-overlay">
		<div class="container">
			<div class="row">
				<div class="col mb-5">
					<h2>Testimonios de clientes</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 mb-5">
					<div class="content-wrapper">
						<div class="image-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-1.jpg"
								alt="Foto de cliente">
						</div>
						<p class="testimonial">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque, nisi sed
							sollicitudin interdum, nisl est bibendum massa, at cursus magna urna ut odio.
						</p>
						<span class="client-name">Dino Capelli</span>
					</div>
				</div>
				<div class="col-lg-4 mb-5">
					<div class="content-wrapper">
						<div class="image-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-2.jpg"
								alt="Foto de cliente">
						</div>
						<p class="testimonial">
							Vivamus dictum, sit amet orci tortor at placerat bibendum, erat lacus laoreet nulla, id
							egestas metus purus sit amet orci. Donec fringilla hendrerit convallis.
						</p>
						<span class="client-name">Mario Perazza</span>
					</div>
				</div>
				<div class="col-lg-4 mb-5">
					<div class="content-wrapper">
						<div class="image-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-3.jpg"
								alt="Foto de cliente">
						</div>
						<p class="testimonial">
							Auctor est habitasse amet nunc, interdum vel mattis sodales cras. Vivamus dictum, tortor at
							placerat bibendum, erat lacus laoreet nulla, id egestas metus purus sit amet orci.
						</p>
						<span class="client-name">Carlos Fontana</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="product-grid bg-light">
	<article class="container">
		<?php
		$category_slug = 'Accesorios';
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
				<div class="col-lg-3 mb-4">
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

<section class="featured-services bg-primary">
	<div class="paws-overlay">
		<article class="container">
			<div class="row">
				<div class="col-lg-3 mb-4">
					<i class="fa-solid fa-truck"></i>
					<p>Envíos gratuitos en Montevideo</p>
				</div>
				<div class="col-lg-3 mb-4">
					<i class="fa-regular fa-credit-card"></i>
					<p>Métodos de pago amigables</p>
				</div>
				<div class="col-lg-3 mb-4">
					<i class="fa-solid fa-truck"></i>
					<p>Descuentos al por mayor</p>
				</div>
				<div class="col-lg-3 mb-4">
					<i class="fa-regular fa-comments"></i>
					<p>Asistencia post venta</p>
				</div>
			</div>
		</article>
	</div>
</section>

<section class="news-grid">
	<article class="container">
		<?php
		// Query latest blog posts
		$latest_posts = new WP_Query(
			array(
				'posts_per_page' => 3,
				'post_type' => 'post',
				'orderby' => 'date',
				'order' => 'DESC',
			)
		);
		if ($latest_posts->have_posts()) {
			echo '
				<div class="section-title">
					<h2>Novedades recientes</h2>
					<p>
						Explora las últimas novedades y tendencias en el fascinante mundo de las mascotas.
						Mantente al día con los últimos productos, eventos y descubrimientos que harán que la vida junto a tu mascota sea aún más especial.
					</p>
				</div>
			';
			echo '<div class="row">';
			while ($latest_posts->have_posts()) {
				$latest_posts->the_post();
				?>
				<div class="col-lg-4 mb-5">
					<div class="new-wrapper">
						<?php if (has_post_thumbnail()) { ?>
							<div class="post-thumbnail">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
							</div>
						<?php } ?>
						<div class="post-content">
							<small class="post-date mb-3">
								<i class="fa-solid fa-calendar-days me-2"></i>
								<?php echo get_the_date('j \d\e F \d\e Y'); ?>
							</small>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<div class="post-excerpt">
								<?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
							</div>
							<a href="<?php the_permalink(); ?>" class="btn btn-primary read-more">Continuar leyendo <i
									class="fa-solid fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
				<?php
			}
			echo '</div>';
			// Restore global post data
			wp_reset_postdata();
		} else {
			echo '<p>No se encontraron novedades.</p>';
		}
		?>
	</article>
</section>

<?php
get_footer();
?>