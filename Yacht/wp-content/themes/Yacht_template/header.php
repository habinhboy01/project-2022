<!DOCTYPE html>
<html>
<head>
	<title>Yacht</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/css/bootstrap.min.css">

	 <!-- carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css"> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	 <!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/fontawesome-free-5.15.3-web/css/all.min.css">
	<?php wp_head() ?>
</head>
<body>
	<div class="container-banner">

        <?php if( have_rows('banner', 'option') ): ?>
            <?php while( have_rows('banner', 'option') ): the_row(); 
                $image = get_sub_field('img');
                $link = get_sub_field('link-banner');
                ?>
                <a href="<?php echo $link['url'];?>"><img class="banner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>"></a>
            <?php endwhile; ?>
        <?php endif; ?>

	</div>

    <!-- menu PC -->
    <div class="container-banner background-menu">
    	<div class="background-menu2">
	    	<a class="home-url" href="<?php echo home_url(); ?>">
	            <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
	        </a>

	        <div class="block_menu">
	        	<?php wp_nav_menu (
	            array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>

	            <ul class="menu-pc2">
	            	<li>
			        <?php if( have_rows('network', 'option') ): ?>
			            <?php while( have_rows('network', 'option') ): the_row(); 
			                $image = get_sub_field('icon');
			                $link = get_sub_field('link'); ?>

			                <a href="<?php echo $link['url'];?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>"></a>
			                
			            <?php endwhile; ?>
			        <?php endif; ?>
	            	</li>
	            	<li><img class="search" src="<?php bloginfo('template_directory') ?>/img/search.png"></li>
	            </ul>
	        </div>
	    </div>
    </div>

    <div class="container-banner bg-form">
    	<span class="close"><i class="fas fa-times"></i></span>

		<?php get_search_form(); ?>
    </div>

    <!-- menu mobile -->
    <div class="background-menu-mobile">
    	<div class="tab-mobile">
	    	<a class="home-url" href="<?php echo home_url(); ?>">
		        <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		    </a>
		    
		   	<span class="btn-open"><i class="fas fa-bars"></i></span>
		</div>

		<div class="tab-mobile2">

			<?php get_search_form(); ?>

	   		<?php wp_nav_menu (
	        array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
	    </div>
    </div>

