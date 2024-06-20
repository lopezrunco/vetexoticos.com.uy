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