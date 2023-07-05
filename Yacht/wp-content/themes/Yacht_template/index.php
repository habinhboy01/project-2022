<?php 
/*

	Template Name: Home page

*/	
get_header(); ?>
	<div class="container-banner">
		<div class="owl-carousel owl-theme carousel_1 post-intro">
			<?php
			  $args = array(
			  		'post_status' => 'publish',
					'post_type' => 'post',
			        'posts_per_page' => 3, //Số lượng bài viết muốn lấy 
			        'meta_key' => 'meta-checkbox',
			        'meta_value' => 'yes'
			    );

			    $featured = new WP_Query($args);
			?>

			<?php
			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<?php if ( has_post_thumbnail()) : ?>
					<div class="item">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						    <?php the_post_thumbnail(); ?>
						  </a>

						<div class="header-post font-content">
							<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
							<p><?php the_excerpt();?></p>
						</div>
					</div>
				<?php endif; ?>
			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>


	<!-- leader -->
	<div class="container leader">
		<h2 class="font-content"><?php echo get_cat_name( $category_id = 3 );?></h2>
		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 3,
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
				<div class="col-lg-4 col-12">
					<div class="content-leader font-content">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?></a>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

						<span class="text3 font-content"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> </span>

						<p><?php the_excerpt(); ?></p>	
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- News & Market  -->

	<div class="container market">
		<h2 class="font-content"><?php echo get_cat_name( $category_id = 2 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 2,
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
				
					<div class="col-lg-7 col-12">
						<div class="content-market">				
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?></a>
						</div>
					</div>

					<div class="col-lg-5 col-12 content-market2 font-content">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

						<p class="text3 font-content"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> </p>

						<p class="text-market"><?php the_excerpt(); ?></p>	
					</div>
				
				
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- Property Report  -->

	<div class="container property">
		<h2 class="font-content"><?php echo get_cat_name( $category_id = 4 );?></h2>
		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 6,
					'cat' => 4,
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
				<div class="col-lg-4 col-12">	
					<div class="content-leader font-content">		
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?></a>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

						<span class="text3 font-content"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> </span>

						<p><?php the_excerpt(); ?></p>
					</div>	
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- Luxe Living  -->

	<div class="container market">
		<h2 class="font-content"><?php echo get_cat_name( $category_id = 5 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 5,
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
				
					<div class="col-lg-7 col-12">
						<div class="content-market">				
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?></a>
						</div>
					</div>

					<div class="col-lg-5 col-12 content-market2 font-content">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

						<p class="text3 font-content"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> </p>

						<p class="text-market"><?php the_excerpt(); ?></p>	
					</div>
				
				
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>


	<!-- Manual Guide  -->
	<div class="container leader">
		<h2><?php echo get_cat_name( $category_id = 6 );?></h2>
		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 6,
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
				<div class="col-lg-4 col-12">
					<div class="content-leader font-content">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?></a>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

						<span class="text3 font-content"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> </span>

						<p><?php the_excerpt(); ?></p>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- video -->
	<div class="container leader">
		<h2><?php echo get_cat_name( $category_id = 9 );?></h2>
		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 9,
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
				<div class="col-lg-4 col-12">
					<div class="content-leader video">
						<?php if( get_field('featured') ): ?>
						    <div class="embed-container">
							<?php the_field('featured') ?>
							</div>
						<?php endif; ?>

						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

<?php get_footer(); ?>