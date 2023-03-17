<?php get_header(); ?>
<!-- banner -->
<div class="banner_inner">
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li>
					<a href="index.html">Home</a>
					<i>|</i>
				</li>
				<li>Single Page</li>
			</ul>
		</div>
	</div>

</div>

</div>
<!--//banner -->
<!--/shop-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container">
		<div class="inner-sec-shop pt-lg-4 pt-3">
			<div class="row">
				<div class="col-lg-4 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider1">

							<ul class="slides">
								<?php echo do_shortcode("[product_gallery id=" . get_the_id() . "]"); ?>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 single-right-left simpleCart_shelfItem">
					<h3>
						<?php echo get_the_title(); ?>
					</h3>
					<p>
						<?php
						if (!empty(get_post_meta(get_the_ID(), '_sale_price', true))) { ?>
							<span class="item_price">
								<?php echo get_woocommerce_currency_symbol() . get_post_meta(get_the_ID(), '_sale_price', true); ?>
							</span><br>
							<del>
								<?php echo get_woocommerce_currency_symbol() . get_post_meta(get_the_ID(), '_regular_price', true); ?>
							</del>
							<?php
						} else { ?>
							<span class="item_price">
								<?php echo get_woocommerce_currency_symbol() . get_post_meta(get_the_ID(), '_price', true); ?>
							</span><br>
						<?php }
						; ?>
					</p>
					<div class="rating1">
						<ul class="stars">
							<?php echo do_shortcode("[product_rating id=" . get_the_id() . "]"); ?>
						</ul>
					</div>
					<div class="description">
						<h5>Check delivery, payment options and charges at your location</h5>
						<form action="#" method="post">
							<input class="form-control" type="text" name="Email" placeholder="Please enter..."
								required="">
							<input type="submit" value="Check">
						</form>
					</div>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Quantity:</h5>
							<?php
							global $product;

							if (!$product->is_purchasable()) {
								return;
							}

							if ($product->is_in_stock()): ?>

								<?php do_action('woocommerce_before_add_to_cart_form'); ?>

								<form class="cart" id='product-quantity'
									action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>"
									method="post" enctype='multipart/form-data'>
									<?php do_action('woocommerce_before_add_to_cart_button'); ?>

									<?php
									do_action('woocommerce_before_add_to_cart_quantity');

									woocommerce_quantity_input(
										array(
											'min_value' => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
											'max_value' => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
											'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(),
											// WPCS: CSRF ok, input var ok.
										)
									);

									do_action('woocommerce_after_add_to_cart_quantity');
									?>
							</div>
						</div>
						<div class="occasional">
							<h5>Types :</h5>
							<div class="colr ert">
								<label class="radio"><input type="radio" name="radio" checked=""><i></i> Irayz
									Butterfly(Black)</label>
							</div>
							<div class="colr">
								<label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (Grey)</label>
							</div>
							<div class="colr">
								<label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly
									(white)</label>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="occasion-cart">
							<div class="googles single-item singlepage">
								<button type='submit' form='product-quantity'
									class="googles-cart pgoogles-cart single_add_to_cart_button button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"
									name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>">
									<?php echo esc_html($product->single_add_to_cart_text()); ?>
								</button>
								<?php do_action('woocommerce_after_add_to_cart_button'); ?>
								</form>

								<?php do_action('woocommerce_after_add_to_cart_form'); ?>

							<?php endif; ?>
						</div>
					</div>
					<ul class="footer-social text-left mt-lg-4 mt-3">
						<li>Share On : </li>
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-facebook-f"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-google-plus-g"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-linkedin-in"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fas fa-rss"></span>
							</a>
						</li>

					</ul>

				</div>
				<div class="clearfix"> </div>
				<!--/tabs-->
				<div class="responsive_tabs">
					<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Description</li>
							<li>Reviews</li>
							<li>Information</li>
						</ul>
						<div class="resp-tabs-container">
							<!--/tab_one-->
							<div class="tab1">

								<div class="single_page">
									<h6>
										<?php the_title(); ?>
									</h6>
									<p>
										<?php the_excerpt(); ?>
									</p>
								</div>
							</div>
							<!--//tab_one-->
							<div class="tab2">

								<div class="single_page">
									<div class="bootstrap-tab-text-grids">
										<div class="bootstrap-tab-text-grid">

											<div class="clearfix"> </div>
										</div>
										<div class="add-review">
											<h4>add a review</h4>
											<?php comments_template('./wordpress-conversion/woocommerce/single-product-reviews.php'); ?>
										</div>
									</div>

								</div>
							</div>
							<div class="tab3">

								<div class="single_page">
									<h6>
										<?php the_title(); ?>
									</h6>
									<p>
										<?php the_content(); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--//tabs-->

			</div>
		</div>
	</div>
	<div class="container-fluid">
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
					WHERE term_taxonomy_id = 11
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
		<!--//slider-->
	</div>
</section>

<?php get_footer(); ?>