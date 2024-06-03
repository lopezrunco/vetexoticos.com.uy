<?php
get_header();
?>

<article class="content px-3 py-5 p-md-5">
	<div class="slider">
		<div class="slide">
			<img src="https://images.pexels.com/photos/5368697/pexels-photo-5368697.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Slide 1">
		</div>
		<div class="slide">
			<img src="https://images.pexels.com/photos/406014/pexels-photo-406014.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Slide 2">
		</div>
	</div>
</article>

<article class="content px-3 py-5 p-md-5">
	<div class="container">
		<?php
		$product_categories = get_terms(array(
			'taxonomy' => 'product_cat', // WooCommerce product category taxonomy
			'orderby' => 'name',
			'order' => 'ASC',
			'hide_empty' => true, // Hide empty categories
		));
		echo '<h2>Categorias de producto:</h2>';
		if (!empty($product_categories) && !is_wp_error($product_categories)) {
			echo '<ul class="product-categories">';
			foreach ($product_categories as $category) {
				echo '<li><a href="' . get_term_link($category) . '">' . $category->name . '</a></li>';
			}
			echo '</ul>';
		} else {
			echo '<p>No product categories found</p>';
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
			echo '<h2>Ultimos productos:</h2>';
			echo '<ul class="latest-products">';
			foreach ($latest_products as $product) {
		?>
				<li>
					<a href="<?php echo esc_url($product->get_permalink()); ?>">
						<?php echo $product->get_image(); ?>
						<h3><?php echo $product->get_name(); ?></h3>
						<span class="price"><?php echo $product->get_price_html(); ?></span>
					</a>
				</li>
		<?php
			}
			echo '</ul>';
		} else {
			echo '<p>No products found</p>';
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
			echo '<h2>Ultimas novedades:</h2>';
			echo '<ul class="latest-posts">';
			while ($latest_posts->have_posts()) {
				$latest_posts->the_post();
		?>
				<li>
					<?php if (has_post_thumbnail()) { ?>
						<div class="post-thumbnail">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						</div>
					<?php } ?>
					<div class="post-content">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="post-excerpt">
							<?php the_excerpt(); ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="read-more">Read more</a>
					</div>
				</li>
		<?php
			}
			echo '</ul>';
			// Restore global post data
			wp_reset_postdata();
		} else {
			echo '<p>No blog posts found</p>';
		}
		?>
	</div>
</article>

<script>
	let slideIndex = 0;
	const slides = document.querySelectorAll('.slide');

	function showSlides() {
		for (let i = 0; i < slides.length; i++) {
			slides[i].style.display = 'none';
		}
		slideIndex++;
		if (slideIndex > slides.length) {
			slideIndex = 1
		}
		slides[slideIndex - 1].style.display = 'block';
		setTimeout(showSlides, 2000);
	}
	showSlides();
</script>

<?php
get_footer();
?>