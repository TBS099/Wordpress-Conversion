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
					<p><span class="item_price">
							<?php echo get_woocommerce_currency_symbol() . get_post_meta(get_the_ID(), '_sale_price', true); ?>
						</span><br>
						<del>
							<?php echo get_woocommerce_currency_symbol() . get_post_meta(get_the_ID(), '_regular_price', true); ?>
						</del>
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
							<select id="quantity" class="frm-field required sect">
								<?php
								for ($x = 1; $x <= 10; $x++) {
									echo "<option value=" . $x . ">" . $x . "</option>";
								}
								?>
							</select>
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
							<button onclick="addToCart()" class="googles-cart pgoogles-cart">
								Add to Cart
							</button>
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
									<h6><?php the_title();?></h6>
									<p><?php the_content();?></p>
								</div>
							</div>
							<!--//tab_one-->
							<div class="tab2">

								<div class="single_page">
									<div class="bootstrap-tab-text-grids">
										<div class="bootstrap-tab-text-grid">
											<div class="bootstrap-tab-text-grid-left">
												<img src="images/team1.jpg" alt=" " class="img-fluid">
											</div>
											<div class="bootstrap-tab-text-grid-right">
												<ul>
													<li><a href="#">Admin</a></li>
													<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>
															Reply</a></li>
												</ul>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque
													vehicula augue eget.Ut enim ad minima veniam,
													quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi
													ut aliquid ex ea commodi consequatur? Quis
													autem vel eum iure reprehenderit.</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="add-review">
											<h4>add a review</h4>
										    <?php display_woocommerce_review_form(); ?>
										</div>
									</div>

								</div>
							</div>
							<div class="tab3">

								<div class="single_page">
									<h6>Irayz Butterfly Sunglasses (Black)</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue
										eget nisl ullamcorper, molestie
										blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit,
										sed do eiusmod tempor incididunt
										ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
										exercitation ullamco. labore et dolore
										magna aliqua.</p>
									<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque
										vehicula augue eget nisl ullamcorper, molestie
										blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit,
										sed do eiusmod tempor incididunt
										ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
										exercitation ullamco. labore et dolore
										magna aliqua.</p>
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
					<div class="item">
						<div class="gd-box-info text-center">
							<div class="product-men women_two bot-gd">
								<div class="product-googles-info slide-img googles">
									<div class="men-pro-item">
										<div class="men-thumb-item">
											<img src="images/s5.jpg" class="img-fluid" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
										</div>
										<div class="item-info-product">

											<div class="info-product-price">
												<div class="grid_meta">
													<div class="product_price">
														<h4>
															<a href="single.html">Fastrack Aviator </a>
														</h4>
														<div class="grid-price mt-2">
															<span class="money ">$325.00</span>
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
																<i class="fa fa-star-half-o" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star-o" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
												</div>
												<div class="googles single-item hvr-outline-out">
													<form action="#" method="post">
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="googles_item"
															value="Fastrack Aviator">
														<input type="hidden" name="amount" value="325.00">
														<button type="submit" class="googles-cart pgoogles-cart">
															<i class="fas fa-cart-plus"></i>
														</button>
													</form>

												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="gd-box-info text-center">
							<div class="product-men women_two bot-gd">
								<div class="product-googles-info slide-img googles">
									<div class="men-pro-item">
										<div class="men-thumb-item">
											<img src="images/s6.jpg" class="img-fluid" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
										</div>
										<div class="item-info-product">

											<div class="info-product-price">
												<div class="grid_meta">
													<div class="product_price">
														<h4>
															<a href="single.html">MARTIN Aviator </a>
														</h4>
														<div class="grid-price mt-2">
															<span class="money ">$425.00</span>
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
																<i class="fa fa-star-half-o" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star-o" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
												</div>
												<div class="googles single-item hvr-outline-out">
													<form action="#" method="post">
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="googles_item" value="MARTIN Aviator">
														<input type="hidden" name="amount" value="425.00">
														<button type="submit" class="googles-cart pgoogles-cart">
															<i class="fas fa-cart-plus"></i>
														</button>
													</form>

												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="gd-box-info text-center">
							<div class="product-men women_two bot-gd">
								<div class="product-googles-info slide-img googles">
									<div class="men-pro-item">
										<div class="men-thumb-item">
											<img src="images/s7.jpg" class="img-fluid" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
										</div>
										<div class="item-info-product">

											<div class="info-product-price">
												<div class="grid_meta">
													<div class="product_price">
														<h4>
															<a href="single.html">Royal Son Aviator </a>
														</h4>
														<div class="grid-price mt-2">
															<span class="money ">$425.00</span>
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
																<i class="fa fa-star-half-o" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star-o" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
												</div>
												<div class="googles single-item hvr-outline-out">
													<form action="#" method="post">
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="googles_item"
															value="Royal Son Aviator">
														<input type="hidden" name="amount" value="425.00">
														<button type="submit" class="googles-cart pgoogles-cart">
															<i class="fas fa-cart-plus"></i>
														</button>
													</form>

												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="gd-box-info text-center">
							<div class="product-men women_two bot-gd">
								<div class="product-googles-info slide-img googles">
									<div class="men-pro-item">
										<div class="men-thumb-item">
											<img src="images/s8.jpg" class="img-fluid" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
										</div>
										<div class="item-info-product">

											<div class="info-product-price">
												<div class="grid_meta">
													<div class="product_price">
														<h4>
															<a href="single.html">Irayz Butterfly </a>
														</h4>
														<div class="grid-price mt-2">
															<span class="money ">$281.00</span>
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
																<i class="fa fa-star-half-o" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star-o" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
												</div>
												<div class="googles single-item hvr-outline-out">
													<form action="#" method="post">
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="googles_item"
															value="Irayz Butterfly">
														<input type="hidden" name="amount" value="281.00">
														<button type="submit" class="googles-cart pgoogles-cart">
															<i class="fas fa-cart-plus"></i>
														</button>
													</form>

												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="gd-box-info text-center">
							<div class="product-men women_two bot-gd">
								<div class="product-googles-info slide-img googles">
									<div class="men-pro-item">
										<div class="men-thumb-item">
											<img src="images/s9.jpg" class="img-fluid" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
										</div>
										<div class="item-info-product">

											<div class="info-product-price">
												<div class="grid_meta">
													<div class="product_price">
														<h4>
															<a href="single.html">Jerry Rectangular </a>
														</h4>
														<div class="grid-price mt-2">
															<span class="money ">$525.00</span>
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
																<i class="fa fa-star-half-o" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star-o" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
												</div>
												<div class="googles single-item hvr-outline-out">
													<form action="#" method="post">
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="googles_item"
															value="Jerry Rectangular ">
														<input type="hidden" name="amount" value="525.00">
														<button type="submit" class="googles-cart pgoogles-cart">
															<i class="fas fa-cart-plus"></i>
														</button>
													</form>

												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="gd-box-info text-center">
							<div class="product-men women_two bot-gd">
								<div class="product-googles-info slide-img googles">
									<div class="men-pro-item">
										<div class="men-thumb-item">
											<img src="images/s10.jpg" class="img-fluid" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
										</div>
										<div class="item-info-product">

											<div class="info-product-price">
												<div class="grid_meta">
													<div class="product_price">
														<h4>
															<a href="single.html">Herdy Wayfarer </a>
														</h4>
														<div class="grid-price mt-2">
															<span class="money ">$325.00</span>
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
																<i class="fa fa-star-half-o" aria-hidden="true"></i>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-star-o" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
												</div>
												<div class="googles single-item hvr-outline-out">
													<form action="#" method="post">
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="googles_item"
															value="Royal Son Aviator">
														<input type="hidden" name="amount" value="425.00">
														<button type="submit" class="googles-cart pgoogles-cart">
															<i class="fas fa-cart-plus"></i>
														</button>


													</form>

												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//slider-->
	</div>
</section>

<?php get_footer(); ?>