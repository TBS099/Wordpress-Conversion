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
							<?php global $post;
								$post->ID;
								$currPostID=get_the_ID();
								echo get_the_ID();
								echo $currPostID;?>
							<div class="row">
								<!-- /Products Display -->
								<?php
								global $post;
								$post->ID;
								$currPostID=get_the_ID();
								echo $currPostID;
								$page_id = get_queried_object_id();
								echo $page_id;
								$args = array('post-type' => 'product', 'posts_per_page' => '20');
								$the_query = new WP_Query($args);
								if ($the_query->have_posts()):
									while ($the_query->have_posts()):
										$the_query->the_post();
										if (get_the_id() != $currPostID) {
											echo '<div class="col-md-3 product-men women_two shop-gd">
													<div class="product-googles-info googles">
														<div class="men-pro-item">
															<div class="men-thumb-item">
																<img src="'.wp_get_attachment_image_url(get_post_meta(get_the_ID(), '_thumbnail_id', true));'" class="img-fluid" alt="">
																<div class="men-cart-pro">
																	<div class="inner-men-cart-pro">
																		<a href="single.html" class="link-product-add-cart">Quick
																			View</a>
																	</div>
																</div>
																<span class="product-new-top">New</span>
															</div>
															<div class="item-info-product">
																<div class="info-product-price">
																	<div class="grid_meta">
																		<div class="product_price">
																			<h4>
																				<a href="single.html">Farenheit (Grey)</a>
																			</h4>
																			<div class="grid-price mt-2">
																				<span class="money ">$575.00</span>
																			</div>
																		</div>
																		<ul class="stars">
																			<li>
																				<a href="#">
																					<i class="fa fa-star" aria-hidden="true"></i>
																				</a>
																			</li>
																			<li>
																				<a href="#">
																					<i class="fa fa-star" aria-hidden="true"></i>
																				</a>
																			</li>
																			<li>
																				<a href="#">
																					<i class="fa fa-star" aria-hidden="true"></i>
																				</a>
																			</li>
																			<li>
																				<a href="#">
																					<i class="fa fa-star" aria-hidden="true"></i>
																				</a>
																			</li>
																			<li>
																				<a href="#">
																					<i class="fa fa-star-half-o" aria-hidden="true"></i>
																				</a>
																			</li>
																		</ul>
																	</div>
																	<div class="googles single-item hvr-outline-out">
																		<form action="#" method="post">
																			<input type="hidden" name="cmd" value="_cart">
																			<input type="hidden" name="add" value="1">
																			<input type="hidden" name="googles_item" value="Farenheit">
																			<input type="hidden" name="amount" value="575.00">
																			<button type="submit" class="googles-cart pgoogles-cart">
																				<i class="fas fa-cart-plus"></i>
																			</button>
																		</form>

																	</div>
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

<?php get_footer(); ?>