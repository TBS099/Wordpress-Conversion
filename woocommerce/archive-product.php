<?php get_header(); ?>
<?php $banner_img_top = wp_get_attachment_image_url(get_post_meta(get_option('woocommerce_shop_page_id'), 'banner_img_top', true),'full'); ?>
<!-- banner -->
<div class="banner_inner" style="background-image: url('<?php echo $banner_img_top; ?>');no-repeat 0px -73px;">
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li>
					<a href="index.html">Home</a>
					<i class='shop-page'>|</i>
				</li>
				<li class='shop-page'>Shop</li>
			</ul>
		</div>
	</div>

</div>
<!--//banner -->
<!--/shop-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container-fluid">
		<div class="inner-sec-shop px-lg-4 px-3">
			<h3 class="tittle-w3layouts my-lg-4 mt-3">New Arrivals for you </h3>
			<div class="row">
				<!-- product left -->
				<div class="side-bar col-lg-3">
					<?php if (is_active_sidebar('shop-sidebar')):
						dynamic_sidebar('shop-sidebar');
					endif; ?>
				</div>
				<!-- //product left -->
				<!--/product right-->
				<div class="left-ads-display col-lg-9">
					<div class="wrapper_top_shop">
						<div class="row top-margin">
							<div class='row width'>
								<div class="col-md-6 shop_left">
									<?php $image_left = wp_get_attachment_image_url(get_post_meta(get_option('woocommerce_shop_page_id'), 'banner_img_left', true),'full'); ?>
									<img src="<?php echo $image_left; ?>" alt="">
									<h6>40% off</h6>
								</div>
								<div class="col-md-6 shop_right">
									<?php $image_right = wp_get_attachment_image_url(get_post_meta(get_option('woocommerce_shop_page_id'), 'banner_img_right', true),'full'); ?>
									<img src="<?php echo $image_right; ?>" alt="">
									<h6>50% off</h6>
								</div>
							</div>
							<div class="row gaps">
								<!-- /Products Display -->
								<?php
								global $post;
								$post->ID;
								$currPostID = get_option('woocommerce_shop_page_id');
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

													<button type="submit" name="add-to-cart"
														value="<?php echo esc_attr($product->get_id()); ?>"
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
					</div>


				</div>
			</div>
			<!--//product right-->
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
			<!--//slider-->
		</div>
	</div>

</section>

<?php get_footer(); ?>