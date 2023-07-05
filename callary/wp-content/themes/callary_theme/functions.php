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
			'menu-2' => __('right Menu'),
			'menu-3' => __('sub Menu 1'),
			'menu-4' => __('sub Menu 2'),
			'menu-5' => __('sub Menu 3'),
			'menu-6' => __('invitation'),
		)
	);
}
add_action('init', 'm_register_menu');


// add theme option menu bar admin 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}


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



function m_logo_web2($wp_customize)
{
	$wp_customize->add_section(
		'logo2',
		array(
			'title' => 'Logo2',
			'description' => 'logo2',
		)
	);

	$wp_customize->add_setting('Logo2', array('default' => ''));
	$wp_customize->add_control(
		new WP_Customize_Image_Control($wp_customize, 'Logo2', array(
			'label' => 'Logo2',
			'section' => 'logo',
			'settings' => 'Logo2'
		))
	);
}
add_action('customize_register', 'm_logo_web2');


// thanh tìm kiếm ở sidebar
function search_form( $form ) {
	$form = '<form class="widget-search" role="search" method="get" action="' . home_url( '/' ) . '" > <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Tìm Kiếm" /><button class="btn-search" type="submit" href="javascript:void(0);"><i class="fa fa-search"></i></button></form>';
	return $form;
	}
	add_shortcode( 'wp_search_form', 'search_form' );


