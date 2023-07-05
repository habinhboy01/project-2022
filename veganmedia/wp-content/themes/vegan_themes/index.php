<?php

/*

Template Name: Home page

*/

get_header(); ?>
	<div class="bg_banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="owl-carousel owl-theme carousel_1">
					    <?php if (have_rows('list-banner', 'option')) : ?>
				            <?php while (have_rows('list-banner', 'option')) : the_row();
				                $image = get_sub_field('img');
			                	$picture = $image['sizes']['thumbnail']; 
				                $social_link = get_sub_field('link');

				            ?>
				            <div class="item">            	

					            <a href="<?php echo $social_link; ?>">
					               <img id="img_banner" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					            </a>

					        </div>
				            <?php endwhile; ?>
				        <?php endif; ?>
					</div>
				</div>

				<!-- phần news -->

				<div class="col-lg-4">
					<?php
						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 2,
							'cat' => 2,
							'order' => 'DSC',
							
						);
					?>
					<?php $getposts = new WP_query($args); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
						<?php echo get_the_category()->cat_ID; ?>

							<div class="page-banner-right">
								<div class="content-banner">
									<h2><?php echo get_cat_name( $category_id = 2 );?></h2>

									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full'); ?></a>

									<div class="sub-content">
										<h1 class="text-sub"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

										<?php the_excerpt(); ?>	
									</div> 
								</div>
							</div>

					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>


	<!-- phần go vegan -->

	<div class="container bg-vegan">
		<h2 class="title-vegan"><?php echo get_cat_name( $category_id = 8 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 8,
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
					<div class="col-lg-4">
						<div class="page-vegan">
							<div class="content-vegan">
								<h2><?php echo get_cat_name( $category_id = 8 );?></h2>

								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?></a>

								<div class="sub-content2">
									<h1 class="text-sub"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

									<?php the_excerpt(); ?>	
								</div> 
							</div>
						</div>
					</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- phần get involved -->

	<div class="container bg-vegan">
		<h2 class="title-vegan"><?php echo get_cat_name( $category_id = 14 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 14,
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
					<div class="col-lg-4">
						<div class="page-vegan">
							<div class="content-vegan">
								<h2 class="color-involved"><?php echo get_cat_name( $category_id = 14 );?></h2>

								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?></a>

								<div class="sub-content2">
									<h1 class="text-sub"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

									<?php the_excerpt(); ?>	
								</div> 
							</div>
						</div>
					</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- phần lifestyle -->

	<div class="container bg-vegan">
		<h2 class="title-vegan"><?php echo get_cat_name( $category_id = 27 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 27,
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
					<div class="col-lg-4">
						<div class="page-vegan">
							<div class="content-vegan">
								<h2 class="color-involved"><?php echo get_cat_name( $category_id = 27 );?></h2>

								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?></a>

								<div class="sub-content2">
									<h1 class="text-sub"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

									<?php the_excerpt(); ?>	
								</div> 
							</div>
						</div>
					</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
<?php get_footer(); ?>