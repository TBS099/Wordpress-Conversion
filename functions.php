<?php

//adding fonts, javascript and stylsheets
add_action('wp_enqueue_scripts', 'load_stylesheets');
function load_stylesheets()
{

    //CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . "/css/bootstrap.css", array(), '1.0', 'all');
    wp_enqueue_style('login-overlay-css', get_template_directory_uri() . '/css/login_overlay.css', array(), '1.0', 'all');
    wp_enqueue_style('stylesheet-1-css', get_template_directory_uri() . '/css/style6.css', array(), '1.0', 'all');
    wp_enqueue_style('shop-stylesheet', get_template_directory_uri() . '/css/shop.css', array(), '1.0', 'all');
    wp_enqueue_style('carousel-css', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.0', 'all');
    wp_enqueue_style('carousel-theme-css', get_template_directory_uri() . '/css/owl.theme.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-stylesheet', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/fontawesome-all.css', array(), '1.0', 'all');
    wp_enqueue_style('simply-countdown-css', get_template_directory_uri() . '/css/simplyCountdown.css', array(), '1.0', 'all');
    wp_enqueue_style('flexslider-css', get_template_directory_uri() . '/css/flexslider.css', array(), '1.0', 'all');
    wp_enqueue_style('easy-responsive-tabs-css', get_template_directory_uri() . '/css/easy-responsive-tabs.css', array(), '1.0', 'all');
    
    //Javascript
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js',  array('jquery'), null, true);
    wp_enqueue_script('jquery.min', get_template_directory_uri() .'/js/jquery-2.2.3.min.js', array('jquery'), null, true);
    wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider.js',  array('jquery'), null, true);
    wp_enqueue_script('classie-search', get_template_directory_uri() .'/js/classie-search.js', array(), null, true);
    wp_enqueue_script('demo1-search', get_template_directory_uri() .'/js/demo1-search.js', array(), null, true);
    wp_enqueue_script('minicart', get_template_directory_uri() .'/js/minicart.js', array(), null, false);
    wp_enqueue_script('simply-countdown-js', get_template_directory_uri() .'/js/simplyCountdown.js', array(), null, false);
    wp_enqueue_script('move-top', get_template_directory_uri() .'/js/move-top.js', array(), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() .'/js/easing.js', array(), null, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/js/bootstrap.js', array(), null, true);
    wp_enqueue_script('imagezoom', get_template_directory_uri() . '/js/imagezoom.js',  array(), null, true);
    wp_enqueue_script('modernizr', get_template_directory_uri() .'/js/modernizr-2.6.2.min.js', array(), null, true);
    wp_enqueue_script('easy-responsive-tabs-js', get_template_directory_uri() .'/js/easy-responsive-tabs.js', array(), null, true);

    //Google Fonts
    wp_enqueue_style('googlefont1', "https://fonts.googleapis.com/css?family=Inconsolata:400,700", array(), '1.0', 'all');
    wp_enqueue_style('googlefont2', "https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800", array(), '1.0', 'all');

}

//Adding WooCommerce Support
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

//Registering the Menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )

);


//retrieving and displaying product rating
add_shortcode( 'product_rating', 'display_the_product_rating' );
function display_the_product_rating( $atts ) {
    // Shortcode attributes
    $atts = shortcode_atts( array(
        'id' => '',
    ), $atts, 'product_rating' );

    if ( isset($atts['id']) && $atts['id'] > 0 ):

    // Get an instance of the WC_Product Object
    $product = wc_get_product( $atts['id'] );

    // The product average rating (or how many stars this product has)
    $average = $product->get_average_rating();

    endif;

    if ( isset($average) ) :

    return wc_get_rating_html($average);

    endif;
}

//Displaying the single products gallery
function display_product_gallery($id) {
    if (is_array($id)) {
        foreach ($id as $product_id) {
            $product = new WC_product($product_id);
            $attachment_ids = $product->get_gallery_image_ids($context='view');
            foreach( $attachment_ids as $attachment_id ) 
            {
              // Display the image URL
              echo '<li data-thumb="'.wp_get_attachment_url($attachment_id).'">';
              echo '<div class="thumb-image">';
              echo '<img src="'.wp_get_attachment_url( $attachment_id ).'" data-imagezoom="true" class="img-fluid" alt=" "/>';
              echo '</div>';
              echo '</li>';
            }
        }
    } else {
        $product_id = $id;
        $product = new WC_product($product_id);
        $attachment_ids = $product->get_gallery_image_ids($context='view');
        foreach( $attachment_ids as $attachment_id ) 
        {
          // Display the image URL
          echo '<li data-thumb="'.wp_get_attachment_url($attachment_id).'">';
          echo '<div class="thumb-image">';
          echo '<img src="'.wp_get_attachment_url( $attachment_id ).'" data-imagezoom="true" class="img-fluid" alt=" "/>';
          echo '</div>';
          echo '</li>';
        }
    }
}
add_shortcode( 'product_gallery', 'display_product_gallery' );