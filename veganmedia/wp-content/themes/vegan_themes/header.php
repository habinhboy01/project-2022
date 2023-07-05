<!DOCTYPE html>
<html>
<head>
	<title>Vegan Media</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/css/bootstrap.min.css">

	 <!-- carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

  	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/fontawesome-free-5.15.3-web/css/all.min.css">

  	<!-- library animation -->
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/library-animation.css">

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/home.css"> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	<?php wp_head() ?>
</head>
<body>

<!-- menu mobile -->
<div class="container">
	<div class="box_menuMobile">
		<div class="bg-mobile">
			<a href="<?php echo home_url(); ?>">
			    <img class="img_logo2" src="<?php echo get_theme_mod( 'Logo' ); ?>">
			</a>

			<span id="openNav"><i class="fas fa-bars"></i></span>

		</div>

		<div class="bg_body">
			<div class="bg-mobile2" id="mySidenav">

				<!-- menu mobile chính -->

				<div class="main_menu">
					<?php wp_nav_menu (
			                array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile')); ?>
			        <span id="next_sub"><i class="fas fa-chevron-right"></i></span>

			        <span id="next_sub2"><i class="fas fa-chevron-right"></i></span>

			        <span id="next_sub3"><i class="fas fa-chevron-right"></i></span>

			        <span id="next_sub4"><i class="fas fa-chevron-right"></i></span>
			    </div>

			    <!-- sub menu mobile 1 -->

		        <div class="sub_mobile1">
		        	<h1 class="text-mobile"><?php echo get_field('title1','option'); ?></h1>

		        	<span id="previous_sub"><i class="fas fa-chevron-left"></i></span>

		        	<?php wp_nav_menu (
		                array('theme_location' => 'subMenu-1', 'menu_class' => 'menu-mobile')); ?>
		        </div>

		        <!-- sub menu mobile 2 -->
			    
		        <div class="sub_mobile2">
		        	<h1 class="text-mobile"><?php echo get_field('title2','option'); ?></h1>

		        	<span id="previous_sub2"><i class="fas fa-chevron-left"></i></span>

		        	<?php wp_nav_menu (
		                array('theme_location' => 'subMenu-2', 'menu_class' => 'menu-mobile')); ?>
		        </div>

		        <!-- sub menu mobile 3 -->
			    
		        <div class="sub_mobile3">
		        	<h1 class="text-mobile"><?php echo get_field('title3','option'); ?></h1>

		        	<span id="previous_sub3"><i class="fas fa-chevron-left"></i></span>

		        	<?php wp_nav_menu (
		                array('theme_location' => 'subMenu-3', 'menu_class' => 'menu-mobile')); ?>
		        </div>

		        <!-- sub menu mobile 4 -->
			    
		        <div class="sub_mobile4">
		        	<h1 class="text-mobile"><?php echo get_field('title4','option'); ?></h1>

		        	<span id="previous_sub4"><i class="fas fa-chevron-left"></i></span>

		        	<?php wp_nav_menu (
		                array('theme_location' => 'subMenu-4', 'menu_class' => 'menu-mobile')); ?>
		        </div>
			</div>
		</div>
	</div>
</div>


<!-- menu pc -->
<div id="main">
	<div class="container">
		<div class="box_menu">
			<a href="<?php echo home_url(); ?>">
			    <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
			</a>

			<?php wp_nav_menu (
		                array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc')); ?>
		</div>
	</div>




