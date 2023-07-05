<!DOCTYPE html>
<html>
<head>
	<title>Biotech</title>
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
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/home.css"> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	 <!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/fontawesome-free-5.15.3-web/css/all.min.css">
	<?php wp_head() ?>
</head>
<body>
	<!-- menu PC -->

	<div class="container">
		<div class="menu_pc">
			<a href="<?php echo home_url(); ?>">
			    <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
			</a>

			<ul class="menu_pc list_menu1">
				<li>
					<a href="<?php echo home_url(); ?>"><?php echo get_field('title1', 'option'); ?></a>
				</li>

				<li id="intro">
					<a href="#"><?php echo get_field('title2', 'option'); ?></a>
				</li>

				<li id="effective">
					<a href="#"><?php echo get_field('title3', 'option'); ?></a>
				</li>

				<li id="license">
					<a href="#"><?php echo get_field('title4', 'option'); ?></a>
				</li>

				<li id="contact">
					<a href="#"><?php echo get_field('title5', 'option'); ?></a>
				</li>

				<li>
					<?php wp_nav_menu (
                array('theme_location' => 'menu-1', 'menu_class' => ''));?>
				</li>
			</ul>

			<ul class="menu_pc list_menu2">
				<?php if( have_rows('menu_2','option') ): ?>
		            <?php while( have_rows('menu_2','option') ): the_row(); 
		                $image = get_sub_field('icon');
		                $picture = $image['sizes']['thumbnail']; 
		                $link = get_sub_field('link_icon');
		                ?>

		                <li>
		                	<a href="<?php echo $link; ?>">
		                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                	</a>
		                </li>

		        	<?php endwhile; ?>
		        <?php endif; ?>
			</ul>

		</div>
	</div>

	<!-- menu mobile -->
	<div class="display_menu">
		<div class="container">
			<div class="menu_mobile">
				<a href="<?php echo home_url(); ?>">
				    <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
				</a>

				<div class="all_bar" onclick="myFunction(this)">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div>
			</div>
		</div>

		<ul class="sub_menu_mobile">
			<li>
				<a href="<?php echo home_url(); ?>"><?php echo get_field('title1', 'option'); ?></a>
			</li>

			<li id="intro1">
				<a href="#"><?php echo get_field('title2', 'option'); ?></a>
			</li>

			<li id="effective1">
				<a href="#"><?php echo get_field('title3', 'option'); ?></a>
			</li>

			<li id="license1">
				<a href="#"><?php echo get_field('title4', 'option'); ?></a>
			</li>

			<li id="contact1">
				<a href="#"><?php echo get_field('title5', 'option'); ?></a>
			</li>

			<li>
					<?php wp_nav_menu (
                array('theme_location' => 'menu-1', 'menu_class' => ''));?>
			</li>
		</ul>
	</div>
