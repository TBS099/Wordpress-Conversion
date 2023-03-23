<?php get_header(); ?>

<!-- banner -->
<div class="banner">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div class="carousel-caption text-center">
					<h3>Men’s eyewear
						<span>Cool summer sale 50% off</span>
					</h3>
					<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="carousel-caption text-center">
					<h3>Women’s eyewear
						<span>Want to Look Your Best?</span>
					</h3>
					<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

				</div>
			</div>
			<div class="carousel-item item3">
				<div class="carousel-caption text-center">
					<h3>Men’s eyewear
						<span>Cool summer sale 50% off</span>
					</h3>
					<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

				</div>
			</div>
			<div class="carousel-item item4">
				<div class="carousel-caption text-center">
					<h3>Women’s eyewear
						<span>Want to Look Your Best?</span>
					</h3>
					<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!--//banner -->
</div>
</div>
<!--//banner-sec-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container-fluid">
		<div class="inner-sec-shop px-lg-4 px-3">
			<h3 class="tittle-w3layouts my-lg-4 my-4">New Arrivals for you </h3>
			<div class="row gaps">
				<!-- /Products Display -->
				<?php
				global $post;
				$post->ID;
				$currPostID = get_option('page_on_front');
				$args = array('post_type' => 'product', 'posts_per_page' => '20');
				$the_query = new WP_Query($args);
				if ($the_query->have_posts()):
					while ($the_query->have_posts()):
						$the_query->the_post();
						if (get_the_id() != $currPostID) {
							echo '<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="' . get_the_post_thumbnail_url($post->ID, 'thumbnail') . '" class="img-fluid responsive-height" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="' . get_permalink(get_the_ID()) . '" class="link-product-add-cart">Quick
																View</a>
														</div>
													</div>
												</div>
												<div class="item-info-product">
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4 class="product-title">
																	<a href="' . get_permalink(get_the_ID()) . '">' . get_the_title() . '</a>
																</h4>
																<div class="grid-price mt-2">
																<span class="money ">';
							if (!empty(get_post_meta($id, '_sale_price', true))) { ?>
								<?php echo get_woocommerce_currency_symbol() . get_post_meta($id, '_sale_price', true); ?>
								<br>
								<del>
									<?php echo get_woocommerce_currency_symbol() . get_post_meta($id, '_regular_price', true); ?>
								</del>
								<?php
							} else { ?>

								<?php echo get_woocommerce_currency_symbol() . get_post_meta($id, '_price', true); ?>
								<br>
							<?php }
							;
							echo '</span>
																
																</div>
															</div>
															<ul class="stars">
															' . do_shortcode("[product_rating id=" . get_the_id() . "]") . '
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">';
							if ($product->is_in_stock()): ?>

								<?php do_action('woocommerce_before_add_to_cart_form'); ?>

								<form class="cart" action="#" method="post" enctype='multipart/form-data'>
									<?php do_action('woocommerce_before_add_to_cart_button'); ?>

									<?php
									do_action('woocommerce_before_add_to_cart_quantity'); ?>

									<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>"
										class="googles-cart pgoogles-cart single_add_to_cart_button button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>">
										<i class="fas fa-cart-plus"></i>
									</button>

									<?php do_action('woocommerce_after_add_to_cart_button'); ?>
								</form>

								<?php do_action('woocommerce_after_add_to_cart_form'); ?>

							<?php endif;

							echo '</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>';
						}
					endwhile;
					$total_pages = $the_query->max_num_pages;
					wp_reset_postdata();
				else:
					echo "<p>" . _e('0 results found') . "</p>";
				endif;
				echo "</div>";
				?>
			</div>
		</div>
		<!--//row-->
		<!--/meddle-->
		<div class="row">
			<div class="col-md-12 middle-slider my-4">
				<div class="middle-text-info ">

					<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Summer Flash sale</h3>
					<div class="simply-countdown-custom" id="simply-countdown-custom"></div>

				</div>
			</div>
		</div>
		<!--//meddle-->
		<!--/slide-->
		<div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
			<!--//banner-sec-->
			<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
			<div class="mid-slider">
				<div class="owl-carousel owl-theme row">
					<?php

					//Get Featured Items ID
					$results = $wpdb->get_results("
					SELECT * 
					FROM {$wpdb->prefix}term_relationships
					WHERE term_taxonomy_id = 8
					");
					//Singling id from array
					$ids = array();
					foreach ($results as $result) {
						$ids[] = $result->object_id;
					}
					;

					//Displaying result using ID
					foreach ($ids as $id) {

						echo '<div class="item">
								<div class="gd-box-info text-center">
									<div class="product-men women_two bot-gd">
										<div class="product-googles-info slide-img googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="' . get_the_post_thumbnail_url($id, 'thumbnail') . '" class="img-fluid responsive-height" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="' . get_permalink($id) . '" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="' . get_permalink($id) . '">' . get_the_title($id) . '</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">';
						if (!empty(get_post_meta($id, '_sale_price', true))) { ?>
							<?php echo get_woocommerce_currency_symbol() . get_post_meta($id, '_sale_price', true); ?>
							<br>
							<del>
								<?php echo get_woocommerce_currency_symbol() . get_post_meta($id, '_regular_price', true); ?>
							</del>
							<?php
						} else { ?>

							<?php echo get_woocommerce_currency_symbol() . get_post_meta($id, '_price', true); ?>
							<br>
						<?php }
						;
						echo '</span>
																</div>
															</div>
															<ul class="stars">
															' . do_shortcode("[product_rating id=" . $id . "]") . '
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">
																<button type="submit" onclick="addToCart("' . $id . '")" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>

														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
						</div>';
					} ?>
				</div>
			</div>
		</div>
		<!-- /testimonials -->
		<div class="testimonials py-lg-4 py-3 mt-4">
			<div class="testimonials-inner py-lg-4 py-3">
				<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Tesimonials</h3>
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">

						<?php
						// Create a new query for the "testimonial" post type
						global $post;
						$post->ID;
						$currPostID = get_option('page_on_front');
						$args = array('post_type' => 'testimonial', 'posts_per_page' => '20');
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) {
							$x=1;
							while ($the_query->have_posts()) {
								$the_query->the_post();
								if (get_the_id() != $currPostID) {
									$name = get_post_meta(get_the_id(), 'name',true);
									$position = get_post_meta(get_the_id(), 'position',true);
									$country = get_post_meta(get_the_id(), 'country',true);
									?>
									<div class="height carousel-item <?php echo( ($x==1) ? 'active' : '');?> ">
										<div class="testimonials_grid text-center">
											<h3>
												<?php echo $name; ?>
												<span>
													<?php echo $position; ?>
												</span>
											</h3>
											<label>
												<?php echo $country; ?>
											</label>
											<p>
												<?php echo get_the_content(); ?>
											</p>
										</div>
									</div>
									<?php
								}

								$x++;
							}
						} else {

						}

						// Reset the post data to the main query
						wp_reset_postdata();
						?>
						<a class="carousel-control-prev test" href="#carouselExampleControls" role="button"
							data-slide="prev">
							<span class="fas fa-long-arrow-alt-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next test" href="#carouselExampleControls" role="button"
							data-slide="next">
							<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>

						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- //testimonials -->
		<div class="row galsses-grids pt-lg-5 pt-3">
			<div class="col-lg-6 galsses-grid-left">
				<figure class="effect-lexi">
					<?php $img_left = wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'front_page_banner_img_left', true),'full'); ?>
					<img src="<?php echo $img_left ?>" alt="" class="img-fluid">
					<figcaption>
						<h3>Editor's
							<span>Pick</span>
						</h3>
						<p> Express your style now.</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-lg-6 galsses-grid-left">
				<figure class="effect-lexi">
					<?php $img_right = wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'front_page_banner_img_right', true),'full'); ?>
					<img src="<?php echo $img_right; ?>" alt="" class="img-fluid">
					<figcaption>
						<h3>Editor's
							<span>Pick</span>
						</h3>
						<p>Express your style now.</p>
					</figcaption>
				</figure>
			</div>
		</div>
		<!-- /grids -->
		<div class="bottom-sub-grid-content py-lg-5 py-3">
			<div class="row">
				<div class="col-lg-4 bottom-sub-grid text-center">
					<div class="bt-icon">

						<span class="<?php echo get_theme_mod('icon1',);?>"></span>
					</div>

					<h4 class="sub-tittle-w3layouts my-lg-4 my-3"><?php echo get_theme_mod('sub-title1');?></h4>
					<p><?php echo get_theme_mod('text1');?>
					</p>
					<p>
						<a href="<?php echo get_theme_mod('button-link1');?>" class="btn btn-sm animated-button gibson-three mt-4"><?php echo get_theme_mod('button-text1');?></a>
					</p>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-lg-4 bottom-sub-grid text-center">
					<div class="bt-icon">
						<span class="<?php echo get_theme_mod('icon2');?>"></span>
					</div>

					<h4 class="sub-tittle-w3layouts my-lg-4 my-3"><?php echo get_theme_mod('sub-title2');?></h4>
					<p><?php echo get_theme_mod('text2');?>
					</p>
					<p>
						<a href="<?php echo get_theme_mod('button-link2');?>" class="btn btn-sm animated-button gibson-three mt-4"><?php echo get_theme_mod('button-text2');?></a>
					</p>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-lg-4 bottom-sub-grid text-center">
					<div class="bt-icon">
						<span class="<?php echo get_theme_mod('icon3');?>"></span>
					</div>

					<h4 class="sub-tittle-w3layouts my-lg-4 my-3"><?php echo get_theme_mod('sub-title3');?></h4>
					<p><?php echo get_theme_mod('text3');?>
					</p>
					<p>
						<a href="<?php echo get_theme_mod('button-link3');?>" class="btn btn-sm animated-button gibson-three mt-4"><?php echo get_theme_mod('button-text3');?></a>
					</p>
				</div>
				<!-- /.col-lg-4 -->
			</div>
		</div>
		<!-- //grids -->
		<!-- /clients-sec -->
		<div class="testimonials p-lg-5 p-3 mt-4">
			<div class="row last-section">
				<div class="col-lg-3 footer-top-w3layouts-grid-sec">
					<div class="mail-grid-icon text-center">
						<i class="<?php echo get_theme_mod('t-icon1');?>"></i>
					</div>
					<div class="mail-grid-text-info">
						<h3><?php echo get_theme_mod('t-sub-title1');?></h3>
						<p><?php echo get_theme_mod('t-text1');?></p>
					</div>
				</div>
				<div class="col-lg-3 footer-top-w3layouts-grid-sec">
					<div class="mail-grid-icon text-center">
						<i class="<?php echo get_theme_mod('t-icon2');?>"></i>
					</div>
					<div class="mail-grid-text-info">
						<h3><?php echo get_theme_mod('t-sub-title2');?></h3>
						<p><?php echo get_theme_mod('t-text2');?></p>
					</div>
				</div>
				<div class="col-lg-3 footer-top-w3layouts-grid-sec">
					<div class="mail-grid-icon text-center">
						<i class="<?php echo get_theme_mod('t-icon3');?>"></i>
					</div>
					<div class="mail-grid-text-info">
						<h3><?php echo get_theme_mod('t-sub-title3');?></h3>
						<p><?php echo get_theme_mod('t-text3');?></p>
					</div>
				</div>
				<div class="col-lg-3 footer-top-w3layouts-grid-sec">
					<div class="mail-grid-icon text-center">
						<i class="<?php echo get_theme_mod('t-icon4');?>"></i>
					</div>
					<div class="mail-grid-text-info">
						<h3><?php echo get_theme_mod('t-sub-title4');?></h3>
						<p><?php echo get_theme_mod('t-text4');?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- //clients-sec -->
	</div>
	</div>
</section>
<!-- about -->

<?php get_footer(); ?>