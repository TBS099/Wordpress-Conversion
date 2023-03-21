<?php

//Adding social buttons section
add_action('customize_register', 'social_customizer_setting');
function social_customizer_setting(WP_Customize_Manager $wp_customize)
{

    $wp_customize->add_section(
        'social_buttons_settings',
        array(
            'title' => __('Social Buttons Settings', 'customizing'),
            'priority' => 100
        )
    );

    //Facebook
    $wp_customize->add_setting(
        'facebook',
        array(
            'default' => '#',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'social_facebook',
        array(
            'label' => __('Facebook URL (Copy link from search bar)', 'customizing'),
            'section' => 'social_buttons_settings',
            'settings' => 'facebook'
        )
    );

    //Twitter
    $wp_customize->add_setting(
        'twitter',
        array(
            'default' => '#',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'social_twitter',
        array(
            'label' => __('Twitter URL (Copy link from search bar)', 'customizing'),
            'section' => 'social_buttons_settings',
            'settings' => 'twitter'
        )
    );

    //Linkedin
    $wp_customize->add_setting(
        'linkedin',
        array(
            'default' => '#',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'social_linkedin',
        array(
            'label' => __('Linkedin URL (Copy link from search bar)', 'customizing'),
            'section' => 'social_buttons_settings',
            'settings' => 'linkedin'
        )
    );

}

//Adding Bottom links section
add_action('customize_register', 'link_customizer_setting');
function link_customizer_setting(WP_Customize_Manager $wp_customize)
{

    $wp_customize->add_section(
        'link_buttons_settings',
        array(
            'title' => __('Link Buttons Settings', 'customizing'),
            'priority' => 100
        )
    );

    //Column2
    //Icon 1
    $wp_customize->add_setting(
        'icon1',
        array(
            'default' => 'far fa-hand-paper',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link_icon1',
        array(
            'label' => __('1st Icon class (FontAwesome)', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'icon1'
        )
    );

    //Icon 1 Sub-title
    $wp_customize->add_setting(
        'sub-title1',
        array(
            'default' => 'Satisfaction Guaranteed',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link-sub-title1',
        array(
            'label' => __('Sub-Title 1', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'sub-title1'
        )
    );

    //Text 1
    $wp_customize->add_setting(
        'text1',
        array(
            'default' => 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link-text1',
        array(
            'label' => __('Text 1', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'text1',
            'type'=>'textarea'
        )
    );

    //1st Button link
    $wp_customize->add_setting(
        'button-link1',
        array(
            'default' => 'http://localhost/woocommerce-conversion/shop/',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link_button-link1',
        array(
            'label' => __('Button Link 1', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'button-link1'
        )
    );

    //1st Button Text
    $wp_customize->add_setting(
        'button-text1',
        array(
            'default' => 'Shop Now',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link-button-text1',
        array(
            'label' => __('Button Text 1', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'button-text1'
        )
    );

    //Second Column
    //Icon 2
    $wp_customize->add_setting(
        'icon2',
        array(
            'default' => 'fas fa-rocket',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link_icon2',
        array(
            'label' => __('2nd Icon class (FontAwesome)', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'icon2'
        )
    );

    //Icon 2 Sub-title
    $wp_customize->add_setting(
        'sub-title2',
        array(
            'default' => 'Fast Shipping',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link-sub-title2',
        array(
            'label' => __('Sub-Title 2', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'sub-title2'
        )
    );

    //Text 2
    $wp_customize->add_setting(
        'text2',
        array(
            'default' => 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link-text2',
        array(
            'label' => __('Text 2', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'text2',
            'type'=>'textarea'
        )
    );

    //2nd Button link
    $wp_customize->add_setting(
        'button-link2',
        array(
            'default' => 'http://localhost/woocommerce-conversion/shop/',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link_button-link2',
        array(
            'label' => __('Button Link 2', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'button-link2'
        )
    );

    //2nd Button Text
    $wp_customize->add_setting(
        'button-text2',
        array(
            'default' => 'Shop Now',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link-button-text2',
        array(
            'label' => __('Button Text 2', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'button-text2'
        )
    );

        //Column 3
    //Icon 3
    $wp_customize->add_setting(
        'icon3',
        array(
            'default' => 'far fa-sun',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link_icon3',
        array(
            'label' => __('3rd Icon class (FontAwesome)', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'icon3'
        )
    );

    //Icon 3 Sub-title
    $wp_customize->add_setting(
        'sub-title3',
        array(
            'default' => 'UV Protection',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link-sub-title3',
        array(
            'label' => __('Sub-Title 3', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'sub-title3'
        )
    );

    //Text 3
    $wp_customize->add_setting(
        'text3',
        array(
            'default' => 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link-text3',
        array(
            'label' => __('Text 3', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'text3',
            'type'=>'textarea'
        )
    );

    //3rd Button link
    $wp_customize->add_setting(
        'button-link3',
        array(
            'default' => 'http://localhost/woocommerce-conversion/shop/',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link_button-link3',
        array(
            'label' => __('Button Link 3', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'button-link3'
        )
    );

    //3rd Button Text
    $wp_customize->add_setting(
        'button-text3',
        array(
            'default' => 'Shop Now',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'link-button-text3',
        array(
            'label' => __('Button Text 3', 'customizing'),
            'section' => 'link_buttons_settings',
            'settings' => 'button-text3'
        )
    );

}

//Adding Bottom links section
add_action('customize_register', 'bottom_testimonial_customizer_setting');
function bottom_testimonial_customizer_setting(WP_Customize_Manager $wp_customize)
{

    $wp_customize->add_section(
        'bottom_testimonial_settings',
        array(
            'title' => __('Bottom Testimonial Settings', 'customizing'),
            'priority' => 100
        )
    );

    //1st Column
    //Icon 1
    $wp_customize->add_setting(
        't-icon1',
        array(
            'default' => 'fas fa-gift',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        't-icon1',
        array(
            'label' => __('1st Icon class (FontAwesome)', 'customizing'),
            'section' => 'bottom_testimonial_settings',
            'settings' => 't-icon1'
        )
    );

    //Icon 1 Sub-title
    $wp_customize->add_setting(
        't-sub-title1',
        array(
            'default' => 'Genuine Product',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        't-sub-title1',
        array(
            'label' => __('Sub-Title 1', 'customizing'),
            'section' => 'bottom_testimonial_settings',
            'settings' => 't-sub-title1'
        )
    );

    //Text 1
    $wp_customize->add_setting(
        't-text1',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur.',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        't-text1',
        array(
            'label' => __('Text 1', 'customizing'),
            'section' => 'bottom_testimonial_settings',
            'settings' => 't-text1',
            'type'=>'textarea'
        )
    );

    //2nd Column
    //Icon 2
    $wp_customize->add_setting(
        't-icon2',
        array(
            'default' => 'fas fa-shield-alt',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        't-icon2',
        array(
            'label' => __('2nd Icon class (FontAwesome)', 'customizing'),
            'section' => 'bottom_testimonial_settings',
            'settings' => 't-icon2'
        )
    );

    //Icon 2 Sub-title
    $wp_customize->add_setting(
        't-sub-title2',
        array(
            'default' => 'Secure Products',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        't-sub-title2',
        array(
            'label' => __('Sub-Title 2', 'customizing'),
            'section' => 'bottom_testimonial_settings',
            'settings' => 't-sub-title2'
        )
    );

    //Text 2
    $wp_customize->add_setting(
        't-text2',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur.',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        't-text2',
        array(
            'label' => __('Text 2', 'customizing'),
            'section' => 'bottom_testimonial_settings',
            'settings' => 't-text2',
            'type'=>'textarea'
        )
    );

    //3rd Column
    //Icon 3
    $wp_customize->add_setting(
        't-icon3',
        array(
            'default' => 'fas fa-dollar-sign',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        't-icon3',
        array(
            'label' => __('3rd Icon class (FontAwesome)', 'customizing'),
            'section' => 'bottom_testimonial_settings',
            'settings' => 't-icon3'
        )
    );

    //Icon 3 Sub-title
    $wp_customize->add_setting(
        't-sub-title3',
        array(
            'default' => 'Cash on Delivery',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        't-sub-title3',
        array(
            'label' => __('Sub-Title 3', 'customizing'),
            'section' => 'bottom_testimonial_settings',
            'settings' => 't-sub-title3'
        )
    );

    //Text 3
    $wp_customize->add_setting(
        't-text3',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur.',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        't-text3',
        array(
            'label' => __('Text 3', 'customizing'),
            'section' => 'bottom_testimonial_settings',
            'settings' => 't-text3',
            'type'=>'textarea'
        )
    );

    //4th Column
    //Icon 4
    $wp_customize->add_setting(
        't-icon4',
        array(
            'default' => 'fas fa-truck',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        't-icon4',
        array(
            'label' => __('4th Icon class (FontAwesome)', 'customizing'),
            'section' => 'bottom_testimonial_settings',
            'settings' => 't-icon4'
        )
    );

    //Icon 4 Sub-title
    $wp_customize->add_setting(
        't-sub-title4',
        array(
            'default' => 'Easy Delivery',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        't-sub-title4',
        array(
            'label' => __('Sub-Title 4', 'customizing'),
            'section' => 'bottom_testimonial_settings',
            'settings' => 't-sub-title4'
        )
    );

    //Text 4
    $wp_customize->add_setting(
        't-text4',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur.',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        't-text4',
        array(
            'label' => __('Text 4', 'customizing'),
            'section' => 'bottom_testimonial_settings',
            'settings' => 't-text4',
            'type'=>'textarea'
        )
    );
} 

//Add Phone Number
add_action('customize_register', 'phone_number_customizer_setting');
function phone_number_customizer_setting(WP_Customize_Manager $wp_customize)
{

    $wp_customize->add_section(
        'phone-number_settings',
        array(
            'title' => __('Phone Number Settings', 'customizing'),
            'priority' => 100
        )
    );

    //Phone Number
    $wp_customize->add_setting(
        'phone_number',
        array(
            'default' => '12345678099',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        'phone_number_control',
        array(
            'label' => __('Phone Number', 'customizing'),
            'section' => 'phone-number_settings',
            'settings' => 'phone_number'
        )
    );
}