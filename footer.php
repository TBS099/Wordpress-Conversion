<!--footer -->
<footer class="py-lg-5 py-3">

	<div class="container-fluid px-lg-5 px-3">
		<div class="row footer-top-w3layouts">
			<div class="col-lg-3 footer-grid-w3ls">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur
						sed, convallis at
						tellus. Nulla porttitor accumsana tincidunt.</p>
					<ul class="footer-social text-left mt-lg-4 mt-3">

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
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-vk"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 footer-grid-w3ls">
				<div class="footer-title">
					<h3>Get in touch</h3>
				</div>
				<div class="contact-info">
					<h4>Location :</h4>
					<p>0926k 4th block building, king Avenue, New York City.</p>
					<div class="phone">
						<h4>Contact :</h4>
						<p>Phone : +121 098 8907 9987</p>
						<p>Email :
							<a href="mailto:info@example.com">info@example.com</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 footer-grid-w3ls">
				<div class="footer-title">
					<h3>Quick Links</h3>
				</div>
				<ul class="links">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="404.html">Error</a>
					</li>
					<li>
						<a href="shop.html">Shop</a>
					</li>
					<li>
						<a href="contact.html">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 footer-grid-w3ls">
				<div class="footer-title">
					<h3>Sign up for your offers</h3>
				</div>
				<div class="footer-text">
					<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
					<form action="#" method="post">
						<input class="form-control" type="email" name="Email" placeholder="Enter your email..."
							required="">
						<button class="btn1">
							<i class="far fa-envelope" aria-hidden="true"></i>
						</button>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
		<div class="copyright-w3layouts mt-4">
			<p class="copy-right text-center ">&copy; 2018 Goggles. All Rights Reserved | Design by
				<a href="http://w3layouts.com/"> W3layouts </a>
			</p>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- newsletter modal -->
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center p-5 mx-auto mw-100">
				<h6>Join our newsletter and get</h6>
				<h3>50% Off for your first Pair of Eye wear</h3>
				<div class="login newsletter">
					<form action="#" method="post">
						<div class="form-group">
							<label class="mb-2">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail2"
								aria-describedby="emailHelp" placeholder="" required="">
						</div>
						<button type="submit" class="btn btn-primary submit mb-4">Get 50% Off</button>
					</form>
					<p class="text-center">
						<a href="#">No thanks I want to pay full Price</a>
					</p>
				</div>
			</div>

		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function () {
		jQuery("#myModal").modal();
	});
</script>
<!-- // modal -->

<!-- cart-js -->
<script>
	googles.render();

	googles.cart.on('googles_checkout', function (evt) {
		var items, len, i;

		if (this.subtotal() > 0) {
			items = this.items();

			for (i = 0, len = items.length; i < len; i++) { }
		}
	});
</script>
<!-- //cart-js -->
<script>
	jQuery(document).ready(function () {
		jQuery(".button-log a").click(function () {
			jQuery(".overlay-login").fadeToggle(200);
			jQuery(this).toggleClass('btn-open').toggleClass('btn-close');
		});
	});
	jQuery('.overlay-close1').on('click', function () {
		jQuery(".overlay-login").fadeToggle(200);
		jQuery(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
		open = false;
	});
</script>

<!-- Count-down -->
<script>
	var d = new Date();
	simplyCountdown('simply-countdown-custom', {
		year: d.getFullYear(),
		month: d.getMonth() + 2,
		day: 25
	});
</script>
<!--// Count-down -->

<!-- carousel -->
<script>
	jQuery(document).ready(function ($) {
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 2,
					nav: false
				},
				900: {
					items: 3,
					nav: false
				},
				1000: {
					items: 4,
					nav: true,
					loop: false,
					margin: 20
				}
			}
		})
	})
</script>
<!-- end carousel -->

<!-- Horizontal tab for single product page -->
<script>
	jQuery(document).ready(function () {
		jQuery('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			closed: 'accordion', // Start closed if in accordion view
			activate: function (event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
</script>
<!-- end of horizontal tab -->

<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
<script>
	// Can also be used with $(document).ready()
	jQuery(window).load(function () {
		jQuery('.flexslider1').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		});
	});
</script>
<!-- //FlexSlider-->

<!-- dropdown nav -->
<script>
	jQuery(document).ready(function () {
		jQuery(".dropdown").hover(
			function () {
				jQuery('.dropdown-menu', this).stop(true, true).slideDown("fast");
				jQuery(this).toggleClass('open');
			},
			function () {
				jQuery('.dropdown-menu', this).stop(true, true).slideUp("fast");
				jQuery(this).toggleClass('open');
			}
		);
	});
</script>
<!-- //dropdown nav -->

<script>
	jQuery(document).ready(function (jQuery) {
		jQuery(".scroll").click(function (event) {
			event.preventDefault();
			jQuery('html,body').animate({
				scrollTop: jQuery(this.hash).offset().top
			}, 900);
		});
	});
</script>

<!-- Smooth Scrolling -->
<script>
	jQuery(document).ready(function () {

								var defaults = {wp_footer,
									  containerID: 'toTop', // fading element id
									containerHoverID: 'toTopHover', // fading element hover id
									scrollSpeed: 1200,
									easingType: 'linear' 
								 };
								

		jQuery().UItoTop({
			easingType: 'easeOutQuart'
		});

	});
</script>
<!--// end-smoth-scrolling -->

<!-- Add to cart function for pages -->
<?php if ( is_singular() ) { ?>
	<script>
    function add_to_cart() {
        var product_id = <?php get_the_ID();?>; // Replace with the ID of your product
        var quantity = jQuery('quantity').val(); // Replace with the ID of your quantity dropdown

        var shortcode = '[my_custom_add_to_cart product_id="' + product_id + '" dropdown_id="' + quantity + '"]';
        var result = do_shortcode(shortcode);

        console.log(result);
    }
    </script>

<?php 
}
elseif( is_archive() || is_front_page() ){
?>
<script>
    function add_to_cart() {
        var product_id = <?php get_the_ID();?>; // Replace with the ID of your product

        var shortcode = '[my_custom_add_to_cart product_id="' + product_id + '"]';
        var result = do_shortcode(shortcode);

        console.log(result);
    }
    </script>

<?php 
}
else{
	"";
};
?>
<!-- End of Add to cart Function for pages -->

<!-- Add to cart Function for featured products -->
<script>
    function add_to_cart_featured() {
        var product_id = <?php $id;?>; // Replace with the ID of your product

        var shortcode = '[my_custom_add_to_cart product_id="' + product_id + '"]';
        var result = do_shortcode(shortcode);

        console.log(result);
    }
    </script>
<!-- End of Add to cart Function for featured products -->

<?php wp_footer(); ?>
</body>

</html>