<!DOCTYPE html>
<html>
<head>
	<title>
	    <?php if (is_front_page()) : ?>
	        <?php bloginfo('name') ?>
	    <?php elseif (is_single()) : ?>
	        <?php echo wp_title('', true, ''); ?>
	    <?php else : ?>
	        <?php echo wp_title('', true, ''); ?>
	    <?php endif ?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/css/bootstrap.min.css">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/fontawesome-free-5.15.3-web/css/all.min.css">

	 <!-- carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

  	<!-- library animation -->
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/aos.css">
  	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory') ?>/images/logo.ico"/>

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	<?php wp_head() ?>
</head>
<body>
	<div class="bg-menu">
		<div class="container">
			<div class="menu-pc">
				<img class="logo-header" src="<?php bloginfo('template_directory') ?>/images/logoHeader.svg">

				<ul class="list-menu">
					<li id="drip">DRIP HYDRATION</li>

					<li id="story">CÂU CHUYỆN</li>

					<li id="privilege">ƯU ĐÃI</li>

					<li id="meet">KHÁCH MỜI</li>

					<li id="exchange">CHUYÊN GIA</li>

					<li id="contact">LIÊN HỆ</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- menu mobile -->

	<div class="bg-mobile">
		<div class="container">
			<div class="menu-mobile">
				<img class="logo-mobile" src="<?php bloginfo('template_directory') ?>/images/logoHeader.svg">

				<span class="icon-bar"><i class="fas fa-bars"></i></span>
			</div>

			<ul class="list-menuMobile">
				<li id="drip2">DRIP HYDRATION</li>

				<li id="story2">CÂU CHUYỆN</li>

				<li id="privilege2">ƯU ĐÃI</li>

				<li id="meet2">KHÁCH MỜI</li>

				<li id="exchange2">CHUYÊN GIA</li>

				<li id="contact2">LIÊN HỆ</li>
			</ul>
		</div>
	</div>