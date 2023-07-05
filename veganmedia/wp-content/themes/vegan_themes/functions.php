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
			'subMenu-1' => __('sub-menu1'),
			'subMenu-2' => __('sub-menu2'),
			'subMenu-3' => __('sub-menu3'),
			'subMenu-4' => __('sub-menu4'),
			'menu-footer' => __('menu-footer'),
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


// thanh tìm kiếm
/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="widget-search" action="' . home_url( '/' ) . '" >
    <input type="search" class="" value="' . get_search_query() . '" name="s" id="s" placeholder="Tìm kiếm"/>

    <button class="btn-search" type="submit" href="javascript:void(0);"><i class="fa fa-search"></i></button>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );
