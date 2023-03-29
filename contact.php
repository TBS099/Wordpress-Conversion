<?php
/**
 * Template Name: Contact Us
 *
 * This template will be used to display the custom Conatct Us page.
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
                    <a href="<?php get_home_url(); ?>">Home</a>
                    <i class="color">|</i>
                </li>
                <li class="color">Contact Us</li>
            </ul>
        </div>
    </div>

</div>
<!--//banner -->
</div>
<!--// header_top -->
<!-- top Products -->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container">
        <h3 class="tittle-w3layouts text-center my-lg-4 my-4"><?php echo get_the_title();?></h3>
        <div class="inner_sec">
            <div class="sub text-center mb-lg-5 mb-3"><?php echo get_the_content()?></div>
            <div class="address row">

                <div class="col-lg-4 address-grid border-right">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="<?php echo get_post_meta(get_the_ID(),'icon1',true);?>"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6><?php echo get_post_meta(get_the_ID(),'contact-title1',true);?></h6>
                            <p> <?php echo get_post_meta(get_the_ID(),'contact1',true);?>

                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 address-grid border-right">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="<?php echo get_post_meta(get_the_ID(),'icon2');?>"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6><?php echo get_post_meta(get_the_ID(),'contact-title2',true);?></h6>
                            <p><?php echo get_post_meta(get_the_ID(),'contact-title2',true);?>:
                                <a href="mailto:<?php echo get_post_meta(get_the_ID(),'contact2',true);?>"> <?php echo get_post_meta(get_the_ID(),'contact2',true);?></a>

                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 address-grid">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="<?php echo get_post_meta(get_the_ID(),'icon3');?>"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6><?php echo get_post_meta(get_the_ID(),'contact-title3',true);?></h6>
                            <p><?php echo get_post_meta(get_the_ID(),'contact3',true);?></p>

                        </div>

                    </div>
                </div>
            </div>
            <div class="contact_grid_right">
                <form action="#" method="post">
                    <div class="row contact_left_grid">
                        <div class="col-md-6 con-left">
                            <div class="form-group">
                                <label class="my-2">Name</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="Email" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="my-2">Subject</label>
                                <input class="form-control" type="text" name="Subject" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-md-6 con-right">
                            <div class="form-group">
                                <label class="row move">Message</label>
                                <textarea id="textarea" placeholder="" required="" class="row"></textarea>
                            </div>
                            <input class="form-control" type="submit" value="Submit" id="submit">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="contact-map">

    <iframe
        src="<?php echo get_post_meta(get_the_ID(),'map',true);?>"
        class="map" style="border:0" allowfullscreen="">
    </iframe>
</div>


<?php get_footer(); ?>