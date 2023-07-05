<?php

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Primary'),
		)
	);
}
add_action('init', 'm_register_menu');


// add theme option menu bar admin 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function my_custom_wc_theme_support()
{

    add_theme_support('woocommerce');

    add_theme_support('wc-product-gallery-lightbox');

    add_theme_support('wc-product-gallery-slider');
    // add_theme_support('wc-product-gallery-zoom');
}
add_action('after_setup_theme', 'my_custom_wc_theme_support');



//  logo

function m_logo_web($wp_customize)
{
	$wp_customize->add_section(
		'logo',
		array(
			'title' => 'Logo',
			'description' => 'logo',
		)
	);

	$wp_customize->add_setting('Logo', array('default' => ''));
	$wp_customize->add_control(
		new WP_Customize_Image_Control($wp_customize, 'Logo', array(
			'label' => 'Logo',
			'section' => 'logo',
			'settings' => 'Logo'
		))
	);
}
add_action('customize_register', 'm_logo_web');

// thay đổi nút add to cart

//* Change add to cart button text single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'lv_custom_cart_button_text' );
function lv_custom_cart_button_text() {
  return __( 'Đặt hàng', 'woocommerce' );
}

// xóa input trong checkout

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_company']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_postcode']);
     return $fields;
}

/**
 * Set a custom add to cart URL to redirect to
 * @return string
 */
function custom_add_to_cart_redirect() { 
    return 'http://localhost/biotech/cart/'; 
}
add_filter( 'woocommerce_add_to_cart_redirect', 'custom_add_to_cart_redirect' );