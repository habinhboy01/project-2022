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

	 <!-- carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

  	<!-- library animation -->
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/library-animation.css">

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom-page.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	 <!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/fontawesome-free-5.15.3-web/css/all.min.css">
	<?php wp_head() ?>
</head>
<body>

	<!-- menu pc -->
	<div class="header">
		<div class="container-fluid bg-header">
			<span class="btn-bar btn-bar2">
				<i class="fas fa-bars icon-bar"></i>

				Menu
			</span>

	        <a class="home-url" href="<?php echo home_url(); ?>">
	            <img class="img_logo" src="<?php bloginfo('template_directory') ?>/images/logo2.svg">
	        </a>

	        <a class="text-header text-header2" href="#">VIETNAM</a>
	    </div>
	</div>

    <!-- menu pc thứ 2 -->
    <div class="header2">
	   	<div class="container-fluid bg-header2">
			<span class="btn-bar">
				<i class="fas fa-bars icon-bar2"></i>

				Menu
			</span>

	        <a class="home-url" href="<?php echo home_url(); ?>">
	            <img class="img_logo2" src="<?php bloginfo('template_directory') ?>/images/logo2.svg">
	        </a>

	        <a class="text-header text-header2" href="#">VIETNAM</a>
	    </div>
	</div>

    <!-- modal menu pc -->

    <div class="model-menu">
    	<div class="bg-modalMenu">
	    	<span class="close-model"><i class="fas fa-times"></i></span>

	    	<div class="detail-model">

	    		<?php echo do_shortcode('[wp_search_form]'); ?>

	    		<p class="text-model"><?php echo get_field('title','option'); ?></p>

		    	<?php wp_nav_menu (
			        array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>
			</div>

			<div class="detail-model2">
				<img src="<?php bloginfo('template_directory') ?>/images/logo.svg">

				<?php wp_nav_menu (
			        array('theme_location' => 'menu-2', 'menu_class' => 'menu-pc2'));?>

			     <p class="text-model2"><?php echo get_field('title2','option'); ?></p>

		     	<?php if( have_rows('list-social', 'option') ): ?>
		            <?php while( have_rows('list-social', 'option') ): the_row(); 
		                $icon = get_sub_field('icon');
		                $link = get_sub_field('link'); ?>

		                <a class="icon-header" href="<?php echo $link; ?>">
		                	<?php echo $icon ?>
		                </a>
		                
		            <?php endwhile; ?>
		        <?php endif; ?>
			</div>
		</div>
    </div>


    <!-- phần thân -->

    <div class="container-fluid bg-search">
    	<?php echo do_shortcode('[wp_search_form_2]'); ?>

    	<p class="text-search">SEARCH RESULTS FOR</p>

		<h1 class="text-search2">" <?php the_search_query(); ?> "</h1>

		<?php
			if ( have_posts() ) :
				?>
	
				<?php
				while ( have_posts() ) : the_post(); ?>

			        <div class="row content-search">
			        	<div class="col-lg-6 col-12">
							<?php if ( has_post_thumbnail() ) { ?>
				               
				                <a class="img-search" href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>

							<?php } ?>
						</div>

						<div class="col-lg-6 col-12">

							<?php
								$categories = get_the_category();
								$comma      = ', ';
								$output     = '';
								
								if ( $categories ) {
									foreach ( $categories as $category ) {
										$output .= '<a class="text-search5" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
									}
									echo trim( $output, $comma );
							} ?>

				            <h2 class="text-search3"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

				            <p class="text-search4"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

				        </div>

			        </div>
				
				<?php endwhile;

			else :
				echo '<p>No search results found!</p>';

		endif; ?>
    </div>

    <!-- bài viết liên quan -->

    <div class="container-fluid bg-related">
		<?php
		/*
		 * Code hiển thị bài viết liên quan trong cùng 1 category
		 * Code by levantoan.com
		 */
		$categories = get_the_category(get_the_ID());
		if ($categories){
		    echo '<div class="row">';
		    $category_ids = array();
		    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		    $args=array(
		        'category__in' => $category_ids,
		        'post__not_in' => array(get_the_ID()),
		        'posts_per_page' => 6,
		        'order'        => 'ASC',
		        
		    );
		    $my_query = new wp_query($args);
		    if( $my_query->have_posts() ):
		        
		        while ($my_query->have_posts()):$my_query->the_post();
		            ?>
		            <div class="col-lg-4 col-12">
						<div class="content-category">
	                        <a href="<?php the_permalink() ?>" class="img-home">

	                            <?php the_post_thumbnail() ?>

	                        </a>
						</div>


						<div class="sub-content2">
							<?php
								$categories = get_the_category();
								$comma      = ', ';
								$output     = '';
								
								if ( $categories ) {
									foreach ( $categories as $category ) {
										$output .= '<a class="text-search5" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
									}
									echo trim( $output, $comma );
							} ?>

				            <h1>
				            	<a href="<?php the_permalink() ?>" class="text-home">
                                	<?php the_title() ?>
                            	</a>
                           	</h1>

				            <p class="text-search4"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
						</div> 
			        </div>
		            <?php
		        endwhile;
		        echo '</div>';
		    endif; wp_reset_query();
		    echo '</div>';
		}
		?>
	</div>


<?php get_footer(); ?>