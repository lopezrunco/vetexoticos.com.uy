<section class="food-brands bg-light">
	<article class="container">
		<div class="row">
			<div class="col-lg-4 mb-3">
				<div class="wrapper bg-primary">
					<div class="paws-overlay">
						<div class="dark-gradient-overlay">
							<h2>Frost</h2>
							<span>Comida para cachorros</span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-1.png" alt="Comida para mascotas">
							<?php
							$shop_page_url = get_permalink(wc_get_page_id('shop'));
							echo '<a class="btn btn-dark" href="' . esc_url($shop_page_url) . '">Más productos <i class="fa-solid fa-chevron-right"></i></a>'
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-3">
				<div class="wrapper bg-primary">
					<div class="paws-overlay">
						<div class="dark-gradient-overlay">
							<h2>Equilibrio</h2>
							<span>Comida para perros adultos</span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-2.png" alt="Comida para mascotas">
							<?php
							$shop_page_url = get_permalink(wc_get_page_id('shop'));
							echo '<a class="btn btn-dark" href="' . esc_url($shop_page_url) . '">Más productos <i class="fa-solid fa-chevron-right"></i></a>'
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-3">
				<div class="wrapper bg-primary">
					<div class="paws-overlay">
						<div class="dark-gradient-overlay">
							<h2>Dog Chow</h2>
							<span>Comida para gatos</span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-3.png" alt="Comida para mascotas">
							<?php
							$shop_page_url = get_permalink(wc_get_page_id('shop'));
							echo '<a class="btn btn-dark" href="' . esc_url($shop_page_url) . '">Más productos <i class="fa-solid fa-chevron-right"></i></a>'
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>