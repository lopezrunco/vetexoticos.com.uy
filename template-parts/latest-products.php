<section class="product-grid">
	<article class="container fade-in delay-level2">
		<?php
		$latest_products = wc_get_products(
			array(
				'limit' => 4,
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
                        <a class="btn btn-primary d-none d-lg-inline-block" href="' . esc_url($shop_page_url) . '">Ver más productos <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            ';
			echo '<div class="row d-none d-lg-flex">'; // Desktop grid layout
			foreach ($latest_products as $product) {
		?>
				<div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
					<div class="product-wrapper">
						<a href="<?php echo esc_url($product->get_permalink()); ?>">
							<?php echo $product->get_image(); ?>
							<h5><?php echo $product->get_name(); ?></h5>
							<span class="price"><?php echo $product->get_price_html(); ?></span>
						</a>
						<?php 
							if (!$product->is_in_stock()) {
								include 'no-stock.php';
							}; 
						?>
					</div>
				</div>
			<?php
			}
			echo '</div>';

			// Mobile version (Bootstrap Carousel)
			echo '<div class="row d-block d-lg-none">';
			?>
			<div id="latestProductsCarouselMobile" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner py-5">
					<?php foreach ($latest_products as $index => $product) : ?>
						<div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
							<div class="col-12">
								<div class="product-wrapper">
									<a href="<?php echo esc_url($product->get_permalink()); ?>">
										<?php echo $product->get_image(); ?>
										<h5><?php echo $product->get_name(); ?></h5>
										<span class="price"><?php echo $product->get_price_html(); ?></span>
									</a>
									<?php 
										if (!$product->is_in_stock()) {
											include 'no-stock.php';
										}; 
									?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<a class="carousel-control-prev" href="#latestProductsCarouselMobile" role="button" data-slide="prev">
					<i class="fa-solid fa-chevron-left position-arrow"></i>
				</a>
				<a class="carousel-control-next" href="#latestProductsCarouselMobile" role="button" data-slide="next">
					<i class="fa-solid fa-chevron-right position-arrow"></i>
				</a>
			</div>
		<?php
			echo '</div>';
		} else {
			echo '<p>No se encontraron productos.</p>';
		}
		?>
	</article>
</section>