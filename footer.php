<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span>To Top</a>
<!--footer -->
<footer class="py-lg-5 py-3">

	<div class="container-fluid px-lg-5 px-3">
		<div class="row footer-top-w3layouts">
			<div class="col-lg-3 footer-grid-w3ls">
				<?php if (is_active_sidebar('footer-sidebar1')):
					dynamic_sidebar('footer-sidebar1');
				endif; ?>
			</div>
			<div class="col-lg-3 footer-grid-w3ls">
				<?php if (is_active_sidebar('footer-sidebar2')):
					dynamic_sidebar('footer-sidebar2');
				endif; ?>
			</div>
			<div class="col-lg-3 footer-grid-w3ls">
				<?php if (is_active_sidebar('footer-sidebar3')):
					dynamic_sidebar('footer-sidebar3');
				endif; ?>
			</div>
			<div class="col-lg-3 footer-grid-w3ls">
				<?php if (is_active_sidebar('footer-sidebar4')):
					dynamic_sidebar('footer-sidebar4');
				endif; ?>
				<div class="footer-text">
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
<?php if(is_home()){?>
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
<?php };?>
<script>
	jQuery(document).ready(function () {
		jQuery("#myModal").modal();
	});
</script>
<!-- // modal -->

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
		jQuery('.owl-carousel').owlCarousel({
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
				var jQuerytab = jQuery(this);
				var jQueryinfo = jQuery('#tabInfo');
				var jQueryname = jQuery('span', jQueryinfo);
				jQueryname.text(jQuerytab.text());
				jQueryinfo.show();
			}
		});
		jQuery('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
</script>
<!-- end of horizontal tab -->

<!-- FlexSlider -->
<script>
	// Can also be used with jQuery(document).ready()
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

<!-- Move to Top -->
<script>
	jQuery(document).ready(function(jQuery) {
            jQuery(".scroll").click(function(event) {
                event.preventDefault();
                jQuery('html,body').animate({
                    scrollTop: jQuery(this.hash).offset().top
                }, 900);
            });
        });
    
</script>
<!-- End of Move to Top -->

<!-- Smooth Scrolling -->
<script>
	
	jQuery(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            jQuery().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    
</script>
<!-- End of Smooth Scrolling -->

<!-- Removing screen-reader-text in checkout page -->
<?php
if (is_checkout()==true){?>
<script>
	var labels = document.getElementsByTagName("label");
  for (var i = 0; i < labels.length; i++) {
    var label = labels[i];
    if (label.classList.contains("screen-reader-text")) {
      label.classList.remove("screen-reader-text");
    }
	label.classList.add('breaker');
  }

  var textarea = document.getElementById("order_comments");
textarea.setAttribute("cols", "50");
</script>
<?php };?>

<?php wp_footer(); ?>
</body>

</html>