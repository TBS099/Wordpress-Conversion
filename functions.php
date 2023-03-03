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
    wp_enqueue_style('fontawesome-min-css', get_template_directory_uri() . '/css/fontawesome.min.css', array(), '1.0', 'all');
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

    if ( isset($average) && $average != 0 && $average != '0' && $average != "0" ) {
        $stars = '';
        $rounded = round($average * 2) / 2;
        for ( $i = 1; $i <= 5; $i++ ) {
            if ( $i <= $rounded ) {
                $stars .= '<i class="fa fa-star"></i>';
            } elseif ( $i == ceil($rounded) && $rounded - floor($rounded) == 0.5 ) {
                $stars .= '<i class="fa fa-star-half"></i>';
            } 
        }
        return $stars;
    } else {
        return 'No Ratings';
    }
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

//Add Review
function display_woocommerce_review_form() {
    global $product;

    $commenter = wp_get_current_commenter();

    $comment_form = array(
        'title_reply'          => have_comments() ? __( 'Add a review', 'woocommerce' ) : sprintf( __( 'Be the first to review &    ldquo;%s&rdquo;', 'woocommerce' ), get_the_title() ),
        'title_reply_to'       => __( 'Leave a Reply to %s', 'woocommerce' ),
        'title_reply_before'   => '<span id="reply-title" class="comment-reply-title">',
        'title_reply_after'    => '</span>',
        'comment_notes_after'  => '',
        'fields'               => array(
            'author' => '<p class="comment-form-author">' . '<label for="author">' . esc_html__( 'Name', 'woocommerce' ) . '&nbsp;    <span class="required">*</span></label> ' .
                        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"     size="30" aria-required="true" required /></p>',
            'email'  => '<p class="comment-form-email"><label for="email">' . esc_html__( 'Email', 'woocommerce' ) . '&nbsp;<span     class="required">*</span></label> ' .
                        '<input id="email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '"     size="30" aria-required="true" required /></p>',
        ),
        'label_submit'  => __( 'Submit', 'woocommerce' ),
        'logged_in_as'  => '',
        'comment_field' => '',
    );

    if ( $account_page_url = wc_get_page_permalink( 'myaccount' ) ) {
        $comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a     review.', 'woocommerce' ), esc_url( $account_page_url ) ) . '</p>';
    }

    if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' ) {
        $comment_form['comment_field'] = '<div class="comment-form-rating"><label for="rating">' . esc_html__( 'Your rating',     'woocommerce' ) . '</label><select name="rating" id="rating" aria-required="true" required>
            <option value="">' . esc_html__( 'Rate&hellip;', 'woocommerce' ) . '</option>
            <option value="5">' . esc_html__( 'Perfect', 'woocommerce' ) . '</option>
            <option value="4">' . esc_html__( 'Good', 'woocommerce' ) . '</option>
            <option value="3">' . esc_html__( 'Average', 'woocommerce' ) . '</option>
            <option value="2">' . esc_html__( 'Not that bad', 'woocommerce' ) . '</option>
            <option value="1">' . esc_html__( 'Very poor', 'woocommerce' ) . '</option>
        </select></div>';
    }

    $comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Your review',     'woocommerce' ) . '&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8"     aria-required="true" required></textarea></p>';

    comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );

    
}