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
				<li>Shop</li>
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
					<div class="search-hotel">
						<h3 class="agileits-sear-head">Search Here..</h3>
						<form action="#" method="post">
							<input class="form-control" type="search" name="search" placeholder="Search here..."
								required="">
							<button class="btn1">
								<i class="fas fa-search"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
					<!-- price range -->
					<div class="range">
						<h3 class="agileits-sear-head">Price range</h3>
						<ul class="dropdown-menu6">
							<li>

								<div id="slider-range"></div>
								<input type="text" id="amount"
									style="border: 0; color: #ffffff; font-weight: normal;" />
							</li>
						</ul>
					</div>
					<!-- //price range -->
					<!--preference -->
					<div class="left-side">
						<h3 class="agileits-sear-head">Deal Offer On</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Backpack</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Phone Pocket</span>
							</li>

						</ul>
					</div>
					<!-- // preference -->
					<!-- discounts -->
					<div class="left-side">
						<h3 class="agileits-sear-head">Discount</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">5% or More</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">10% or More</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">20% or More</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">30% or More</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">50% or More</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">60% or More</span>
							</li>
						</ul>
					</div>
					<!-- //discounts -->
					<!-- reviews -->
					<div class="customer-rev left-side">
						<h3 class="agileits-sear-head">Customer Review</h3>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>4.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>3.5</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>3.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>2.5</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- //reviews -->
				</div>
				<!-- //product left -->
				<!--/product right-->
				<div class="left-ads-display col-lg-9">
					<div class="wrapper_top_shop">
						<div class="row">
							<div class="col-md-6 shop_left">
								<img src="http://wordpress-conversion.local/wp-content/themes/wordpress-conversion/images/banner3.jpg"
									alt="">
								<h6>40% off</h6>
							</div>
							<div class="col-md-6 shop_right">
								<img src="http://wordpress-conversion.local/wp-content/themes/wordpress-conversion/images/banner4.jpg"
									alt="">
								<h6>50% off</h6>
							</div>
								
							<div class="row">
								<!-- /Products Display -->
								<?php
								global $post;
								$post->ID;
								$currPostID = get_option( 'woocommerce_shop_page_id' );
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
																<img src="'.get_the_post_thumbnail_url($post->ID,'medium').'" class="img-fluid" alt="">
																<div class="men-cart-pro">
																	<div class="inner-men-cart-pro">
																		<a href="'.get_permalink(get_the_ID()).'" class="link-product-add-cart">Quick
																			View</a>
																	</div>
																</div>
																<span class="product-new-top">New</span>
															</div>
															<div class="item-info-product">
																<div class="info-product-price">
																	<div class="grid_meta">
																		<div class="product_price">
																			<h4 class="product-title">
																				<a href="'.get_permalink(get_the_ID()).'">'.get_the_title().'</a>
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
																		'. do_shortcode( "[product_rating id=".get_the_id()."]" ).'
																		</ul>
																	</div>
																	<div class="googles single-item hvr-outline-out">';
																	if ( $product->is_in_stock() ) : ?>

																		<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
																	
																		<form class="cart" action="#" method="post" enctype='multipart/form-data'>
																			<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
																	
																			<?php
																			do_action( 'woocommerce_before_add_to_cart_quantity' );?>

																			<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="googles-cart pgoogles-cart single_add_to_cart_button button alt<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>">
																			<i class="fas fa-cart-plus"></i>
																			</button>
																	
																			<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
																		</form>
																	
																		<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
																	
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
	</div>
</section>
<?php get_footer();?>