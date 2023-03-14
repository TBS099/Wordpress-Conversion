<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.4.0
 *
 * @var bool   $readonly If the input should be set to readonly mode.
 * @var string $type     The input type attribute.
 */

 defined( 'ABSPATH' ) || exit;

 if ( $max_value && $min_value === $max_value ) {
	 ?>
	 <div class="quantity hidden">
		 <input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	 </div>
	 <?php
 } else {
	 /* translators: %s: Quantity. */
	 $label = ! empty( $args['product_name'] ) ? sprintf( esc_html__( '%s quantity', 'woocommerce' ), wp_strip_all_tags( $args['product_name'] ) ) : esc_html__( 'Quantity', 'woocommerce' );
	 ?>
	 <div class="quantity">
		 <?php do_action( 'woocommerce_before_quantity_input_field' ); ?>
		 <label class="screen-reader-text" for="<?php echo esc_attr( $input_id ); ?>"><?php echo esc_attr( $label ); ?></label>
		 <?php
		 if ( is_cart() ) :
		 ?>
		 <input
			 type="hidden"
			 id="<?php echo esc_attr( $input_id ); ?>"
			 class="<?php echo esc_attr( join( ' ', (array) $classes ) ); ?>"
			 name="<?php echo esc_attr( $input_name ); ?>"
			 value="<?php echo esc_attr( $input_value ); ?>"
			 title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' );
		 ?>" />
		 <?php
		 endif;
 
		 $options = ''; // Initializing
 
		 for ( $i = $min_value; $i <= $max_value; $i += $step ) :
			 $selected = ( '' !== $input_value && $input_value >= 1 && $i == $input_value ) ? 'selected' : '';
			 $options .= '<option value="' . $i . '"' . $selected . '>' . $i . '</option>';
		 endfor;
		 // Change input name on select field
		 $attr_name = is_cart() ? 'data-name' : 'name';
		 ?>
			 <select <?php echo $attr_name; ?>="<?php echo $input_name; ?>"><?php echo $options; ?></select>
		 <?php do_action( 'woocommerce_after_quantity_input_field' ); ?>
	 </div>
	 <?php
 }
 