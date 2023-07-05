<!DOCTYPE html>
<html>
<head>
	<title>Callary</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/css/bootstrap.min.css">

	 <!-- carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

  	<!-- library animation -->
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/library-animation.css">

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom-body.css"> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	 <!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/fontawesome-free-5.15.3-web/css/all.min.css">
	<?php wp_head() ?>
</head>
<body>
	<div class="all-subMenu">
		<!-- sub menu mobile -->
		<div class="bg-mobile2">
			<h1 class="text-mobile"><?php echo get_field('title-menu-mobile','option'); ?></h1>

			<i class="fas fa-chevron-right icon-mobile"></i>

			<i class="fas fa-chevron-right icon-mobile2"></i>

			<?php wp_nav_menu (
			    array('theme_location' => 'menu-2', 'menu_class' => 'menu-mobile'));?>
		</div>

		<!-- sub menu tiệc cưới -->
		<div class="bg-mobile3">
			<i class="fas fa-chevron-left icon-mobile3"></i> 

			<i class="fas fa-chevron-right icon-mobile4"></i>

			<h1 class="text-mobile"><?php echo get_field('title-sub-menu1','option'); ?></h1>

			<?php wp_nav_menu (
			    array('theme_location' => 'menu-3', 'menu_class' => 'menu-mobile'));?>
		</div>

		<!-- sub menu sảnh cưới -->
		<div class="bg-mobile4">
			<i class="fas fa-chevron-left icon-mobile5"></i> 

			<h1 class="text-mobile"><?php echo get_field('title-sub-menu2','option'); ?></h1>

			<?php wp_nav_menu (
			    array('theme_location' => 'menu-4', 'menu_class' => 'menu-mobile'));?>
		</div>

		<!-- sub menu sự kiện công ty -->
		<div class="bg-mobile5">
			<i class="fas fa-chevron-left icon-mobile6"></i> 

			<h1 class="text-mobile"><?php echo get_field('title-sub-menu3','option'); ?></h1>

			<?php wp_nav_menu (
			    array('theme_location' => 'menu-5', 'menu_class' => 'menu-mobile'));?>
		</div>

	</div>

	<div class="main">
		<div class="bg-menu1">
			<div class="container box-info">
				<p><?php echo get_field('name-restaurant', 'option'); ?></p>

				<ul class="list-info">
					<li class="display-info">
						<a href="tel:(+84 28) 38 43 5556">
							<i class="fas fa-phone-alt"></i> 
							<?php echo get_field('phone','option'); ?>
						</a>
					</li>

					<li class="display-info">
						<a href="mailto:event@Callary.vn">
							<i class="far fa-envelope"></i> 
							<?php echo get_field('email','option'); ?>
						</a>
					</li>

					<li>
						<img src="<?php bloginfo('template_directory') ?>/images/flag-vn.png"> 
						<?php echo get_field('nation','option'); ?>
					</li>
				</ul>
			</div>
		</div>

		<!-- menu pc -->
		<div class="bg-menu3">
			<div class="container">
				<div class="bg-menu2">

					<a class="home-url" href="<?php echo home_url(); ?>">
			            <img class="img_logo logo1" src="<?php echo get_theme_mod( 'Logo' ); ?>">
			        </a>

			        <a class="text-url" href="<?php echo home_url(); ?>">
			            <img class="img_logo" src="<?php echo get_theme_mod( 'Logo2' ); ?>">
			        </a>

			        <?php wp_nav_menu (
			            array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>
				</div>
			</div>
		</div>

		<!-- menu mobile-->
		<div class="all-mobile">
			<div class="container bg-mobile">
				<a href="<?php echo home_url(); ?>">
			        <img class="img_logo" src="<?php echo get_theme_mod( 'Logo2' ); ?>">
			    </a>

				<div class="icon-bar">
				  <div class="bar1"></div>
				  <div class="bar2"></div>
				  <div class="bar3"></div>
				</div>
			</div>
		</div>
