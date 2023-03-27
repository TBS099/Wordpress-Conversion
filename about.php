<?php
/**
 * Template Name: About Us
 *
 * This template will be used to display the custom About Us page.
 *
 * @package WordPress
 * @subpackage woocommerce-conversion
 */
?>

<?php get_header(); ?>

<!-- banner -->
<div class="banner_inner">
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li>
					<a href="<?php echo home_url();?>">Home</a>
					<i class="color">|</i>
				</li>
				<li class="color">About Us</li>
			</ul>
		</div>
	</div>

</div>
<!--//banner -->
</div>
<!--// header_top -->
<!-- top Products -->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container-fluid">

		<div class="inner-sec-shop px-lg-4 px-3">
			<div class="about-content py-lg-5 py-3">
				<div class="row">

					<div class="col-lg-6 p-0">
						<?php $img_top = wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'about_banner_img_top', true), 'full'); ?>
						<img src="<?php echo $img_top; ?>" alt="Goggles" class="img-fluid"
							style="height:400px !important;">
					</div>
					<div class="col-lg-6 about-info">
						<h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">
							<?php the_title(); ?>
						</h3>
						<p class="my-xl-4 my-lg-3 my-md-4 my-3">
							<?php echo get_the_content(); ?>
						</p>

						<a href="http://woocommerce-conversion.local/shop/"
							class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

					</div>
				</div>
			</div>
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Partners</h3>
			<div class="partners-info">
				<div class="row mt-lg-5 mt-3">
					<?php
					$customizer_repeater_profile = get_theme_mod('customizer_repeater_profile');

					$customizer_repeater_decoded = json_decode($customizer_repeater_profile);
					foreach ($customizer_repeater_decoded as $repeater_item) {
						?>
						<div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">
									<img class="img-fluid rounded" src="<?php echo $repeater_item->image_url; ?>" alt="">
								</div>
								<div class="team-info">
									<h4>
										<?php echo $repeater_item->title; ?>
									</h4>
									<span>
										<?php echo $repeater_item->text; ?>
									</span>
									<ul class="d-flex justify-content-center py-3 social-icons">
										<?php
											$x = 1;
											$social_repeater = json_decode(html_entity_decode($repeater_item->social_repeater));
											if (!empty($social_repeater)) {
											foreach ($social_repeater as $social_repeater) {
												?>
												<li class="<?php echo (($x == 2) ? 'mx-3' : 'hello'); ?>">
													<a href="<?php echo $social_repeater->link; ?>">
														<i class="<?php echo $social_repeater->icon; ?>"></i>
													</a>
												</li>
												<?php
												$x++;
											}
											;
										}
										;
										?>
									</ul>
								</div>
							</div>
						</div>
					<?php
					}
					;
					?>
				</div>
			</div>
			<!-- /grids -->
			<div class="bottom-sub-grid-content py-lg-5 py-3">
				<div class="row">
					<div class="col-lg-4 bottom-sub-grid text-center">
						<div class="bt-icon">

							<span class="<?php echo get_theme_mod('icon1', ); ?>"></span>
						</div>

						<h4 class="sub-tittle-w3layouts my-lg-4 my-3">
							<?php echo get_theme_mod('sub-title1'); ?>
						</h4>
						<p>
							<?php echo get_theme_mod('text1'); ?>
						</p>
						<p>
							<a href="<?php echo get_theme_mod('button-link1'); ?>"
								class="btn btn-sm animated-button gibson-three mt-4"><?php echo get_theme_mod('button-text1'); ?></a>
						</p>
					</div>
					<!-- /.col-lg-4 -->
					<div class="col-lg-4 bottom-sub-grid text-center">
						<div class="bt-icon">
							<span class="<?php echo get_theme_mod('icon2'); ?>"></span>
						</div>

						<h4 class="sub-tittle-w3layouts my-lg-4 my-3">
							<?php echo get_theme_mod('sub-title2'); ?>
						</h4>
						<p>
							<?php echo get_theme_mod('text2'); ?>
						</p>
						<p>
							<a href="<?php echo get_theme_mod('button-link2'); ?>"
								class="btn btn-sm animated-button gibson-three mt-4"><?php echo get_theme_mod('button-text2'); ?></a>
						</p>
					</div>
					<!-- /.col-lg-4 -->
					<div class="col-lg-4 bottom-sub-grid text-center">
						<div class="bt-icon">
							<span class="<?php echo get_theme_mod('icon3'); ?>"></span>
						</div>

						<h4 class="sub-tittle-w3layouts my-lg-4 my-3">
							<?php echo get_theme_mod('sub-title3'); ?>
						</h4>
						<p>
							<?php echo get_theme_mod('text3'); ?>
						</p>
						<p>
							<a href="<?php echo get_theme_mod('button-link3'); ?>"
								class="btn btn-sm animated-button gibson-three mt-4"><?php echo get_theme_mod('button-text3'); ?></a>
						</p>
					</div>
					<!-- /.col-lg-4 -->
				</div>
			</div>
			<!-- //grids -->
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
								$x = 1;
								while ($the_query->have_posts()) {
									$the_query->the_post();
									if (get_the_id() != $currPostID) {
										$name = get_post_meta(get_the_id(), 'name', true);
										$position = get_post_meta(get_the_id(), 'position', true);
										$country = get_post_meta(get_the_id(), 'country', true);
										?>
										<div class="height carousel-item <?php echo (($x == 1) ? 'active' : ''); ?> ">
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
						<?php $img_left = wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'about_banner_img_left', true), 'full'); ?>
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
						<?php $img_right = wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'about_banner_img_right', true), 'full'); ?>
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
			<!-- /clients-sec -->
			<div class="testimonials p-lg-5 p-3 mt-4">
				<div class="row last-section">
					<div class="col-lg-3 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="<?php echo get_theme_mod('t-icon1'); ?>"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>
								<?php echo get_theme_mod('t-sub-title1'); ?>
							</h3>
							<p>
								<?php echo get_theme_mod('t-text1'); ?>
							</p>
						</div>
					</div>
					<div class="col-lg-3 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="<?php echo get_theme_mod('t-icon2'); ?>"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>
								<?php echo get_theme_mod('t-sub-title2'); ?>
							</h3>
							<p>
								<?php echo get_theme_mod('t-text2'); ?>
							</p>
						</div>
					</div>
					<div class="col-lg-3 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="<?php echo get_theme_mod('t-icon3'); ?>"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>
								<?php echo get_theme_mod('t-sub-title3'); ?>
							</h3>
							<p>
								<?php echo get_theme_mod('t-text3'); ?>
							</p>
						</div>
					</div>
					<div class="col-lg-3 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="<?php echo get_theme_mod('t-icon4'); ?>"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>
								<?php echo get_theme_mod('t-sub-title4'); ?>
							</h3>
							<p>
								<?php echo get_theme_mod('t-text4'); ?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- //clients-sec -->

		</div>
	</div>
</section>

<?php get_footer(); ?>