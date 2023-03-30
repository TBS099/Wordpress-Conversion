<html lang="zxx">

<head>
	<?php wp_head() ?>
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script>
		function addToCart() {
			var quantity = document.getElementById("quantity").value;
			var add_to_cart_url = '<?= do_shortcode("[add_to_cart_url id='" . get_the_ID() . "' quantity='']"); ?>';
			add_to_cart_url = add_to_cart_url.replace('quantity=""', 'quantity="' + quantity + '"');
			window.location.href = add_to_cart_url;
		}
	</script>
	<style>
		.carousel-item {
			background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider1', true),'full'); ?>) no-repeat;
			background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider1', true),'full'); ?>) no-repeat;
			background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider1', true),'full'); ?>) no-repeat;
			background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider1', true),'full'); ?>) no-repeat;
			background-size: cover;
		}

		.carousel-item.item2 {
			background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider2', true),'full'); ?>) no-repeat;
			background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider2', true),'full'); ?>) no-repeat;
			background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider2', true),'full'); ?>) no-repeat;
			background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider2', true),'full'); ?>) no-repeat;
			background-size: cover;
		}

		.carousel-item.item3 {
			background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider3', true),'full'); ?>) no-repeat;
			background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider3', true),'full'); ?>) no-repeat;
			background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider3', true),'full'); ?>) no-repeat;
			background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider3', true),'full'); ?>) no-repeat;
			background-size: cover;
		}

		.carousel-item.item4 {
			background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider4', true),'full'); ?>) no-repeat;
			background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider4', true),'full'); ?>) no-repeat;
			background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider4', true),'full'); ?>) no-repeat;
			background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'slider4', true),'full'); ?>) no-repeat;
			background-size: cover;
		}

		.middle-text-info {
			background: url(<?php echo wp_get_attachment_image_url(get_post_meta(get_option('page_on_front'), 'front_page_banner_img_top', true),'full'); ?>) no-repeat 0px 0px;
		}
	</style>
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Need Help?</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Call
						</li>
						<li class="number-phone mt-3">
							<?php echo get_theme_mod('phone_number'); ?>
						</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="<?php echo home_url(); ?>">
							Goggles </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) );?>">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
							<?php
							global $woocommerce;
							$cart_url = $woocommerce->cart->get_cart_url();
							$cart_contents_count = $woocommerce->cart->cart_contents_count;
							$cart_total = $woocommerce->cart->get_cart_total();
							?>
							<a href="<?php echo $cart_url; ?>">
								<button class="top_googles_cart" target="_blank">
									<i class="fa fa-shopping-cart"></i><br>
									<?php echo $cart_contents_count . ' items - ' . $cart_total; ?>
								</button>
							</a>
						</li>
					</ul>
					<!---->
				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<?php 
					if (is_active_sidebar('search-sidebar')):
						dynamic_sidebar('search-sidebar');
					endif;
					 ?>

				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">

					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php wp_nav_menu(
						array(
							'menu' => 'Primary Menu',
							//name of the menu in the array created in functions.php
							'menu_class' => 'navbar-nav nav-mega mx-auto',
							'container' => '',
							'theme_location' => 'top-menu',
							//selected in wp admin 
					
						)
					) ?>
				</div>
			</nav>
		</header>
		<!-- //header -->