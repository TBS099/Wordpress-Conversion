<?php

//adding fonts, javascript and stylsheets
add_action('wp_enqueue_scripts', 'load_stylesheets');
function load_stylesheets()
{

    //CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . "/css/bootstrap.css", array(), '1.0', 'all');
    wp_enqueue_style('cart-css', get_template_directory_uri() . "/css/cart.css", array(), '1.0', 'all');
    wp_enqueue_style('checkout-css', get_template_directory_uri() . "/checkout.css", array(), '1.0', 'all');
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
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), null, true);
    wp_enqueue_script('jquery.min', get_template_directory_uri() . '/js/jquery-2.2.3.min.js', array('jquery'), null, true);
    wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), null, true);
    wp_enqueue_script('classie-search', get_template_directory_uri() . '/js/classie-search.js', array(), null, true);
    wp_enqueue_script('demo1-search', get_template_directory_uri() . '/js/demo1-search.js', array(), null, true);
    wp_enqueue_script('minicart', get_template_directory_uri() . '/js/minicart.js', array(), null, false);
    wp_enqueue_script('simply-countdown-js', get_template_directory_uri() . '/js/simplyCountdown.js', array(), null, false);
    wp_enqueue_script('move-top', get_template_directory_uri() . '/js/move-top.js', array(), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/js/easing.js', array(), null, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), null, true);
    wp_enqueue_script('imagezoom', get_template_directory_uri() . '/js/imagezoom.js', array(), null, true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), null, true);
    wp_enqueue_script('easy-responsive-tabs-js', get_template_directory_uri() . '/js/easy-responsive-tabs.js', array(), null, true);

    //Google Fonts
    wp_enqueue_style('googlefont1', "https://fonts.googleapis.com/css?family=Inconsolata:400,700", array(), '1.0', 'all');
    wp_enqueue_style('googlefont2', "https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800", array(), '1.0', 'all');
}

//Adding Customizer.php
include('customizer.php');

//Adding WooCommerce Support
function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

//Adding Widgets and Widget Block Editor support
add_theme_support('widgets');
add_theme_support('widgets-block-editor');

//Registering Custom Menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
    )

);

//Registering Custom Sidebars
function shop_sidebar()
{
    register_sidebar(

        array(
            'name' => 'Shop Sidebar',
            'id' => 'shop-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )

    );

    register_sidebar(

        array(
            'name' => 'Footer Sidebar 1',
            'id' => 'footer-sidebar1',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )

    );

    register_sidebar(

        array(
            'name' => 'Footer Sidebar 2',
            'id' => 'footer-sidebar2',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )

    );

    register_sidebar(

        array(
            'name' => 'Footer Sidebar 3',
            'id' => 'footer-sidebar3',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )

    );

    register_sidebar(

        array(
            'name' => 'Footer Sidebar 4',
            'id' => 'footer-sidebar4',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )

    );
};
add_action('widgets_init', 'shop_sidebar');

//retrieving and displaying product rating
add_shortcode('product_rating', 'display_the_product_rating');
function display_the_product_rating($atts)
{
    // Shortcode attributes
    $atts = shortcode_atts(
        array(
            'id' => '',
        ),
        $atts,
        'product_rating'
    );

    if (isset($atts['id']) && $atts['id'] > 0) :

        // Get an instance of the WC_Product Object
        $product = wc_get_product($atts['id']);

        // The product average rating (or how many stars this product has)
        $average = $product->get_average_rating();

    endif;

    if (isset($average) && $average != 0 && $average != '0' && $average != "0") {
        $stars = '';
        $rounded = round($average * 2) / 2;
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $rounded) {
                $stars .= '<i class="fa fa-star"></i>';
            } elseif ($i == ceil($rounded) && $rounded - floor($rounded) == 0.5) {
                $stars .= '<i class="fa fa-star-half"></i>';
            }
        }
        return $stars;
    } else {
        return 'No Ratings';
    }
}

//Displaying the single products gallery
function display_product_gallery($id)
{
    if (is_array($id)) {
        foreach ($id as $product_id) {
            $product = new WC_product($product_id);
            $attachment_ids = $product->get_gallery_image_ids($context = 'view');
            foreach ($attachment_ids as $attachment_id) {
                // Display the image URL
                echo '<li data-thumb="' . wp_get_attachment_url($attachment_id) . '">';
                echo '<div class="thumb-image">';
                echo '<img src="' . wp_get_attachment_url($attachment_id) . '" data-imagezoom="true" class="img-fluid" alt=" "/>';
                echo '</div>';
                echo '</li>';
            }
        }
    } else {
        $product_id = $id;
        $product = new WC_product($product_id);
        $attachment_ids = $product->get_gallery_image_ids($context = 'view');
        foreach ($attachment_ids as $attachment_id) {
            // Display the image URL
            echo '<li data-thumb="' . wp_get_attachment_url($attachment_id) . '">';
            echo '<div class="thumb-image">';
            echo '<img src="' . wp_get_attachment_url($attachment_id) . '" data-imagezoom="true" class="img-fluid" alt=" "/>';
            echo '</div>';
            echo '</li>';
        }
    }
}
add_shortcode('product_gallery', 'display_product_gallery');

//Allow Comment Replies
add_action('wp_enqueue_scripts', 'theme_print_scripts');
function theme_print_scripts()
{
    if (is_singular())
        wp_enqueue_script('comment-reply');
}

//Add to cart shortcode which takes product id and quantity as values
function my_custom_add_to_cart_shortcode($atts)
{
    // Parse the shortcode attributes
    $atts = shortcode_atts(
        array(
            'product_id' => '',
            'dropdown_id' => '',
        ),
        $atts,
        'my_custom_add_to_cart'
    );

    // Get the quantity value from the dropdown menu
    $quantity = isset($_POST[$atts['dropdown_id']]) ? intval($_POST[$atts['dropdown_id']]) : 1;

    // Add the product to the cart
    if (!empty($atts['product_id'])) {
        WC()->cart->add_to_cart($atts['product_id'], $quantity);
    }

    // Return an empty string to prevent any content from being output
    return '';
}
add_shortcode('my_custom_add_to_cart', 'my_custom_add_to_cart_shortcode');


//Add to cart Execution Function
function add_to_cart_script()
{
    if (is_singular('product')) {
        // Single product page
?>
        <script>
            function add_to_cart() {
                var product_id = $('.product').data('product-id');
                var quantity = jQuery('quantity').val();

                var shortcode = '[my_custom_add_to_cart product_id="' + product_id + '" dropdown_id="' + quantity + '"]';
                var result = eval('"' + shortcode + '"');

                console.log(result);
            }
        </script>
    <?php
    } elseif (is_archive() || is_front_page()) {
        // Archive page or front page
    ?>
        <script>
            jQuery(document).ready(function($) {
                $('.add-to-cart-button').on('click', function() {
                    var product_id = $(this).data('product-id');
                    var quantity = $(this).closest('.product').find('.quantity').val();

                    var shortcode = '[my_custom_add_to_cart product_id="' + product_id + '" dropdown_id="' + quantity + '"]';
                    var result = do_shortcode(shortcode);

                    console.log(result);
                });
            });
        </script>
    <?php
    }
}
add_action('wp_head', 'add_to_cart_script');

// jQuery - cart jQuery script for quantity dropdown
add_action('woocommerce_after_cart', 'cart_quantity_dropdown_js');
function cart_quantity_dropdown_js()
{
    ?>
    <script type="text/javascript">
        jQuery(function($) {
            $(document.body).on('change blur', 'form.woocommerce-cart-form .quantity select', function(e) {
                var t = $(this),
                    q = t.val(),
                    p = t.parent();
                $(this).parent().find('input').val($(this).val());
                console.log($(this).parent().find('input').val());
            });
        });
    </script>
<?php
}

// Adding Custom Meta Box Field to Shop Page
function shop_banner_metabox()
{
    if (get_the_ID() == get_option('woocommerce_shop_page_id')) {
        add_meta_box("shop_banner_metabox_field", "Shop Banner Images", "shop_banner_metabox_field", "page", "side");
    }
}
add_action('add_meta_boxes', 'shop_banner_metabox');



//Creating the Custom Meta Box Field
function shop_banner_metabox_field()
{
?>
    <label for="shop_page_field">Top Banner Picture:</label><br>
    <input type='file' accept='image/png, image/jpeg' name="shop_banner_field_top" /><br><br>

    <label for="shop_page_field">Left Banner Picture:</label><br>
    <input type='file' accept='image/png, image/jpeg' name="shop_banner_field_left" /><br><br>

    <label for="shop_page_field">Right Banner Picture:</label><br>
    <input type='file' accept='image/png, image/jpeg' name="shop_banner_field_right" /><br><br>
<?php
}

//Saving Images from Meta Field
function save_banner_img()
{

    //Banner Image Top
    if (isset($_FILES['shop_banner_field_top'])) {
        $file = $_FILES['shop_banner_field_top'];

        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo 'Error uploading file.';
            exit;
        }

        // Use WordPress media_handle_upload function to handle file upload and generate attachment metadata
        $attachment_id = media_handle_upload('shop_banner_field_top', 0);

        // Check for errors in media_handle_upload
        if (is_wp_error($attachment_id)) {
            echo $attachment_id->get_error_message();
            exit;
        }

        // Update custom meta field with attachment ID
        update_post_meta(get_the_ID(), 'banner_img_top', $attachment_id);

        // Display success message
        echo 'File uploaded successfully!';
    }


    //Banner Image Left
    if (isset($_FILES['shop_banner_field_left'])) {
        $file = $_FILES['shop_banner_field_left'];

        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo 'Error uploading file.';
            exit;
        }

        // Use WordPress media_handle_upload function to handle file upload and generate attachment metadata
        $attachment_id = media_handle_upload('shop_banner_field_left', 0);

        // Check for errors in media_handle_upload
        if (is_wp_error($attachment_id)) {
            echo $attachment_id->get_error_message();
            exit;
        }

        // Update custom meta field with attachment ID
        update_post_meta(get_the_ID(), 'banner_img_left', $attachment_id);

        // Display success message
        echo 'File uploaded successfully!';
    }

    //Banner Image Right
    if (isset($_FILES['shop_banner_field_right'])) {
        $file = $_FILES['shop_banner_field_right'];

        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo 'Error uploading file.';
            exit;
        }

        // Use WordPress media_handle_upload function to handle file upload and generate attachment metadata
        $attachment_id = media_handle_upload('shop_banner_field_right', 0);

        // Check for errors in media_handle_upload
        if (is_wp_error($attachment_id)) {
            echo $attachment_id->get_error_message();
            exit;
        }

        // Update custom meta field with attachment ID
        update_post_meta(get_the_ID(), 'banner_img_right', $attachment_id);

        // Display success message
        echo 'File uploaded successfully!';
    }
}
add_action('save_post', 'save_banner_img');

// Adding Custom Meta Box Field to Front Page
function front_page_slider_metabox()
{
    if (get_the_ID() == get_option('page_on_front')) {
        add_meta_box("front_page_slider_metabox_field", "Slider Images", "front_page_slider_metabox_field", "page", "side");
    }
}
add_action('add_meta_boxes', 'front_page_slider_metabox');



//Creating the Custom Meta Box Field
function front_page_slider_metabox_field()
{
?>
    <label>1st Slider Picture:</label><br>
    <input type='file' accept='image/png, image/jpeg' name="front_page_slider1" /><br><br>

    <label>2nd Slider Picture:</label><br>
    <input type='file' accept='image/png, image/jpeg' name="front_page_slider2" /><br><br>

    <label>3rd Slider Picture:</label><br>
    <input type='file' accept='image/png, image/jpeg' name="front_page_slider3" /><br><br>

    <label>4th Slider Picture:</label><br>
    <input type='file' accept='image/png, image/jpeg' name="front_page_slider4" /><br><br>

<?php
}

//Saving Images from Meta Field
function save_front_page_slider()
{

    //Slider 1
    if (isset($_FILES['front_page_slider1']) && !empty($_FILES['front_page_slider1']['name'])) {
        $file = $_FILES['front_page_slider1'];

        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            var_dump($file);
            echo 'Error uploading slider 1.';
            exit;
        }

        // Use WordPress media_handle_upload function to handle file upload and generate attachment metadata
        $attachment_id = media_handle_upload('front_page_slider1', 0);

        // Check for errors in media_handle_upload
        if (is_wp_error($attachment_id)) {
            echo $attachment_id->get_error_message();
            exit;
        }

        // Update custom meta field with attachment ID
        update_post_meta(get_the_ID(), 'slider1', $attachment_id);

        // Display success message
        echo 'File uploaded successfully!';
    }

    //Slider 2
    if (isset($_FILES['front_page_slider2']) && !empty($_FILES['front_page_slider2']['name'])) {
        $file = $_FILES['front_page_slider2'];

        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo 'Error uploading slider 2.';
            exit;
        }

        // Use WordPress media_handle_upload function to handle file upload and generate attachment metadata
        $attachment_id = media_handle_upload('front_page_slider2', 0);

        // Check for errors in media_handle_upload
        if (is_wp_error($attachment_id)) {
            echo $attachment_id->get_error_message();
            exit;
        }

        // Update custom meta field with attachment ID
        update_post_meta(get_the_ID(), 'slider2', $attachment_id);

        // Display success message
        echo 'File uploaded successfully!';
    }

    //Slider 3
    if (isset($_FILES['front_page_slider3']) && !empty($_FILES['front_page_slider3']['name'])) {
        $file = $_FILES['front_page_slider3'];

        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo 'Error uploading slider 3.';
            exit;
        }

        // Use WordPress media_handle_upload function to handle file upload and generate attachment metadata
        $attachment_id = media_handle_upload('front_page_slider3', 0);

        // Check for errors in media_handle_upload
        if (is_wp_error($attachment_id)) {
            echo $attachment_id->get_error_message();
            exit;
        }

        // Update custom meta field with attachment ID
        update_post_meta(get_the_ID(), 'slider3', $attachment_id);

        // Display success message
        echo 'File uploaded successfully!';
    }

    //Slider 4
    if (isset($_FILES['front_page_slider4']) && !empty($_FILES['front_page_slider4']['name'])) {
        $file = $_FILES['front_page_slider4'];

        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo 'Error uploading slider 4.';
            exit;
        }

        // Use WordPress media_handle_upload function to handle file upload and generate attachment metadata
        $attachment_id = media_handle_upload('front_page_slider4', 0);

        // Check for errors in media_handle_upload
        if (is_wp_error($attachment_id)) {
            echo $attachment_id->get_error_message();
            exit;
        }

        // Update custom meta field with attachment ID
        update_post_meta(get_the_ID(), 'slider4', $attachment_id);

        // Display success message
        echo 'File uploaded successfully!';
    }
}
add_action('save_post', 'save_front_page_slider');

//Adding custom metabox to Front Page
function banner_metabox()
{
    if (get_the_ID() == get_option('page_on_front')) {
        add_meta_box("banner_metabox_field", "Banner Images", "banner_metabox_field", "page", "side");
    }
}
add_action('add_meta_boxes', 'banner_metabox');



//Creating the Custom Meta Box Field
function banner_metabox_field()
{
?>
    <label>Timer Banner Picture:</label><br>
    <input type='file' accept='image/png, image/jpeg' name="banner_field_top" /><br><br>

    <label>Left Banner Picture:</label><br>
    <input type='file' accept='image/png, image/jpeg' name="banner_field_left" /><br><br>

    <label>Right Banner Picture:</label><br>
    <input type='file' accept='image/png, image/jpeg' name="banner_field_right" /><br><br>
<?php
}

//Saving Images from Meta Field
function save_front_page_banner_img()
{

    //Banner Image Top
    if (isset($_FILES['banner_field_top']) && !empty($_FILES['banner_field_top']['name'])) {
        $file = $_FILES['banner_field_top'];

        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo 'Error uploading banner_field_top.';
            exit;
        }

        // Use WordPress media_handle_upload function to handle file upload and generate attachment metadata
        $attachment_id = media_handle_upload('banner_field_top', 0);

        // Check for errors in media_handle_upload
        if (is_wp_error($attachment_id)) {
            echo $attachment_id->get_error_message();
            exit;
        }

        // Update custom meta field with attachment ID
        update_post_meta(get_the_ID(), 'front_page_banner_img_top', $attachment_id);

        // Display success message
        echo 'File uploaded successfully!';
    }


    //Banner Image Left
    if (isset($_FILES['banner_field_left']) && !empty($_FILES['banner_field_left']['name'])) {
        $file = $_FILES['banner_field_left'];

        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo 'Error uploading banner_field_left.';
            exit;
        }

        // Use WordPress media_handle_upload function to handle file upload and generate attachment metadata
        $attachment_id = media_handle_upload('banner_field_left', 0);

        // Check for errors in media_handle_upload
        if (is_wp_error($attachment_id)) {
            echo $attachment_id->get_error_message();
            exit;
        }

        // Update custom meta field with attachment ID
        update_post_meta(get_the_ID(), 'front_page_banner_img_left', $attachment_id);

        // Display success message
        echo 'File uploaded successfully!';
    }

    //Banner Image Right
    if (isset($_FILES['banner_field_right']) && !empty($_FILES['banner_field_right']['name'])) {
        $file = $_FILES['banner_field_right'];

        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo 'Error uploading banner_field_right.';
            exit;
        }

        // Use WordPress media_handle_upload function to handle file upload and generate attachment metadata
        $attachment_id = media_handle_upload('banner_field_right', 0);

        // Check for errors in media_handle_upload
        if (is_wp_error($attachment_id)) {
            echo $attachment_id->get_error_message();
            exit;
        }

        // Update custom meta field with attachment ID
        update_post_meta(get_the_ID(), 'front_page_banner_img_right', $attachment_id);

        // Display success message
        echo 'File uploaded successfully!';
    }
}
add_action('save_post', 'save_front_page_banner_img');

//Create Custom Meta Box for Testimonial Post Type
function custom_metabox()
    {   
        add_meta_box("custom_metabox_field", "Custom Meta", "custom_metabox_field", "testimonial", "side");
    }
add_action('add_meta_boxes', 'custom_metabox');

//Creating the Custom Meta Box Field
function custom_metabox_field(){
    $country = get_post_meta(get_the_ID(), 'country', true);
    $name= get_post_meta(get_the_ID(),'name',true);
    $position=get_post_meta(get_the_ID(),'position',true);
    ?>
    Name:<br>
    <input type='text' name='name' value="<?php echo $name; ?>"><br><br>
    Position:<br>
    <input type='text' name='position' value="<?php echo $position; ?>"><br><br>
    Country:<br>
    <input type='text' name='country' value="<?php echo $country; ?>"><br><br>
    <?php
}

//Saving Meta Data
function save_custom_data(){
    global $post;

    //Save Name Data
    if (isset($_POST["name"])) {

        update_post_meta($post->ID, 'name', $_POST["name"]);

    }

    //Save Position Data
    if (isset($_POST["position"])) {

        update_post_meta($post->ID, 'position', $_POST["position"]);

    }

    //Save Country Data
    if (isset($_POST["country"])) {

        update_post_meta($post->ID, 'country', $_POST["country"]);

    }
}
add_action('save_post', 'save_custom_data');


//Creating a sales products widget
class woocommerce_conversion_sales_product_widget extends WP_Widget
{
    function __construct()
    {
        $widget_options = array(
            'classname' => 'sales_products_widget',
            'description' => 'This is a Widget to display products on sale',
        );
        parent::__construct('sales_products_widget', 'Sales Products Widget', $widget_options);
    }

    //Front end display of widget
    function widget($args, $instance)
    {
        //Check if user entered how many products to display. Default=5 if field left empty
        $number_of_products = !empty($instance['number_of_products']) ? absint($instance['number_of_products']) : 5;

        // Query arguments for sales products
        $query_args = array(
            'post_type' => 'product',
            'meta_query' => array(
                array(
                    'key' => '_sale_price',
                    'value' => '0',
                    'compare' => '>',
                    'type' => 'NUMERIC'
                )
            ),
            'posts_per_page' => $number_of_products,
            'orderby' => 'rand'
        );
        $sales_products = new WP_Query($query_args);

        echo $args['before_widget'];

        $title = 'Products on Sale';
        echo $args['before_title'] . $title . $args['after_title'];

        if ($sales_products->have_posts()) {
            echo '<ul>';
            while ($sales_products->have_posts()) {
                $sales_products->the_post();
                echo '<li>
                        <div class="row">
                            <div class="col-5">
                                <img src="' . get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') . '" class="sales-product-img">
                            </div>
                            <div class="col-7">
                                <h7><a href="' . get_permalink() . '" class="black">' . get_the_title() . '</a></h7><br>
                                <div class="grid-price mt-2">
									<span class="money ">';
                echo get_woocommerce_currency_symbol() . get_post_meta(get_the_ID(), '_sale_price', true);
                echo '<br>
                                        <del>';
                echo get_woocommerce_currency_symbol() . get_post_meta(get_the_ID(), '_regular_price', true);
                echo '</del>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </li>';
            }
            echo '</ul>';
        } else {
            echo '<p>No sales products found.</p>';
        }

        wp_reset_postdata();

        echo $args['after_widget'];
    }

    function form($instance)
    {

        $number_of_products = isset($instance['number_of_products']) ? absint($instance['number_of_products']) : 5;

        // Number of products to display
        echo '<p><label for="' . $this->get_field_id('number_of_products') . '">' . __('Number of products to display:') . '</label>';
        echo '<input class="widefat" id="' . $this->get_field_id('number_of_products') . '" name="' . $this->get_field_name('number_of_products') . '" type="number" min="1" step="1" value="' . esc_attr($number_of_products) . '"></p>';
    }

    // Sanitize widget form values as they are saved
    public function update($new_instance, $old_instance)
    {

        $instance = array();
        $instance['number_of_products'] = isset($new_instance['number_of_products']) ? absint($new_instance['number_of_products']) : 5;

        return $instance;
    }
}


//Update Widget instance
function update($new_instance, $old_instance)
{
    $instance = array();
    $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
    return $instance;
}

//Loading in Sales Product Widget
function load_woocommerce_conversion_sales_product_widget()
{
    register_widget('woocommerce_conversion_sales_product_widget');
}
add_action('widgets_init', 'load_woocommerce_conversion_sales_product_widget');

//Adding custom rating function
function review_display_rating()
{
    if (post_type_supports('product', 'comments')) {
        wc_get_template('/review-rating.php');
    }
}

//Removing default star rating function and replacing with custom one
function remove_and_replace_hook()
{
    remove_action('woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating', 10);
    add_action('woocommerce_review_before_comment_meta', 'review_display_rating', 10);
}
add_action('woocommerce_review_before_comment_meta', 'remove_and_replace_hook', 1);

//Creating Testimonial Post Type
function create_post_type()
{

    $args = array(
        'labels' => array(
            'name' => __('Testimonial Post'),
            'singular_name' => __('Testimonial')
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array(
            'editor',
            'trackbacks',
            'title',
            'author',
            'page-attributes',
            'custom-fields',
            'post-formats'
        ),
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'testimonial')
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'create_post_type');

//Removing alert messages in cart and checkout pages
if(is_cart()||is_checkout()){
    add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
    add_filter( 'woocommerce_add_success', '__return_false' );
    add_filter( 'woocommerce_add_notice', '__return_false' );
    add_filter( 'woocommerce_add_error', '__return_false' );
};

?>


