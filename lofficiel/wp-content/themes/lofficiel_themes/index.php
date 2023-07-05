<?php 
/*
 Template Name: Home page
 */
get_header(); ?>
	<div class="allNews">
		<?php
            $args = array(
                'post_status' => 'publish',
                'post_type' => 'post',
                'posts_per_page' => 1,
                'orderby' => 'post_date',
                'order' => 'date',
            ); 
        ?>
            <?php $getposts = new WP_query($args); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php if (have_posts()) : ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            
                <a class="img-intro" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('full'); ?></a>

                <div class="content-intro">

                	<?php echo the_category(); ?> 

			        <a href="<?php the_permalink() ?>" class="text-home">
	                    <?php the_title() ?>
	                </a>

	           		<div class="text-home2"><?php the_excerpt(); ?></div>

                    <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                </div>

            <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>

        <div class="container-fluid bg-news">
        	<div class="bg-news2">
        		<div class="row">

        			<?php
			            $args = array(
			                'post_status' => 'publish',
			                'post_type' => 'post',
			                'posts_per_page' => 3,
			                'orderby' => 'post_date',
			                'order' => 'ASC ',
			            ); 
			        ?>
			            <?php $getposts = new WP_query($args); ?>
			            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
			            <?php if (have_posts()) : ?>
			            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			            	<div class="col-lg-4 col-12 bg-news3">
			            		<div class="row">
			            			<div class="col-lg-4 col-4">
			            				<a class="img-news" href="<?php the_permalink(); ?>">
						                <?php the_post_thumbnail('full'); ?></a>
			            			</div>


					                <div class="col-lg-8 col-8">

					                	<div class="title2"><?php echo the_category(); ?></div>

								        <a href="<?php the_permalink() ?>" class="text-news">
						                    <?php the_title() ?>
						                </a>

					                    <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
					                </div>

						        </div>
						    </div>

			            <?php endwhile; wp_reset_postdata(); ?>
			        <?php endif; ?>

        		</div>
        	</div>
        </div>
	</div>

	<!-- BEAUTY -->

	<div class="container-fluid bg-body">

		<h2 class="font-content"><?php echo get_cat_name( $category_id = 6 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 6,
					'order' => 'date',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>

                    <div class="col-lg-4 col-12 content-home">

                        <a href="<?php the_permalink() ?>" class="img-home">

                            <?php the_post_thumbnail() ?>

                        </a>

                        <div class="content-home2">

                            <?php echo the_category(); ?> 

                            <a href="<?php the_permalink() ?>" class="text-home">
                                <?php the_title() ?>
                            </a>

                            <div class="text-home2"><?php the_excerpt(); ?></div>

                            <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

                        </div>
                        	
                    </div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

	</div>

	<!-- BUSINESS -->

	<div class="container-fluid bg-body">

		<h2 class="font-content"><?php echo get_cat_name( $category_id = 8 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 8,
					'order' => 'date',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>

                    <div class="col-lg-4 col-12 content-home">

                        <a href="<?php the_permalink() ?>" class="img-home">

                            <?php the_post_thumbnail() ?>

                        </a>

                        <div class="content-home2">

                            <?php echo the_category(); ?> 

                            <a href="<?php the_permalink() ?>" class="text-home">
                                <?php the_title() ?>
                            </a>

                            <div class="text-home2"><?php the_excerpt(); ?></div>

                            <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

                        </div>
                        	
                    </div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

	</div>

	<!-- HOMMES -->

	<div class="container-fluid bg-body">

		<h2 class="font-content"><?php echo get_cat_name( $category_id = 9 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 9,
					'order' => 'date',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>

                    <div class="col-lg-4 col-12 content-home">

                        <a href="<?php the_permalink() ?>" class="img-home">

                            <?php the_post_thumbnail() ?>

                        </a>

                        <div class="content-home2">

                            <?php echo the_category(); ?> 

                            <a href="<?php the_permalink() ?>" class="text-home">
                                <?php the_title() ?>
                            </a>

                            <div class="text-home2"><?php the_excerpt(); ?></div>

                            <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

                        </div>
                        	
                    </div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

	</div>

	<!-- L’O LOVE -->

	<div class="bg-love">

		<?php
			$args = array(	
				'post_status' => 'publish',
				'post_type' => 'post',
				'posts_per_page' => 1,
				'cat' => 5,
				'order' => 'date',
				
			);
		?>
		<?php $getposts = new WP_query($args); ?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			<?php echo get_the_category()->cat_ID; ?>


                <a href="<?php the_permalink() ?>" class="img-love">

                    <?php the_post_thumbnail() ?>

                </a>

                <div class="content-intro content-love">

            		<?php
						$categories = get_the_category();
						$comma      = ', ';
						$output     = '';
						
						if ( $categories ) {
							foreach ( $categories as $category ) {
								$output .= '<h1><a id="text-love" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a></h1>' . $comma;
							}
							echo trim( $output, $comma );
					} ?>

                    <a href="<?php the_permalink() ?>" class="text-love2">
                        <?php the_title() ?>
                    </a>

                    <div class="text-home2"><?php the_excerpt(); ?></div>

                    <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                    	
                </div>

		<?php endwhile; wp_reset_postdata(); ?>

	</div>

	<!-- nội dung 2 love -->
	<div class="container-fluid bg-body bg-love2">

		<h2 class="font-content"><?php echo get_cat_name( $category_id = 5 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 5,
					'order' => 'date',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>

                    <div class="col-lg-4 col-12 content-home">

                        <a href="<?php the_permalink() ?>" class="img-home">

                            <?php the_post_thumbnail() ?>

                        </a>

                        <div class="content-home2">

                            <?php echo the_category(); ?> 

                            <a href="<?php the_permalink() ?>" class="text-home">
                                <?php the_title() ?>
                            </a>

                            <div class="text-home2"><?php the_excerpt(); ?></div>

                            <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

                        </div>
                        	
                    </div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

	</div>

	<!-- LOCAL -->

	<div class="container-fluid bg-body">

		<h2 class="font-content"><?php echo get_cat_name( $category_id = 7 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 7,
					'order' => 'date',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>

                    <div class="col-lg-4 col-12 content-home">

                        <a href="<?php the_permalink() ?>" class="img-home">

                            <?php the_post_thumbnail() ?>

                        </a>

                        <div class="content-home2">

                            <?php echo the_category(); ?> 

                            <a href="<?php the_permalink() ?>" class="text-home">
                                <?php the_title() ?>
                            </a>

                            <div class="text-home2"><?php the_excerpt(); ?></div>

                            <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

                        </div>
                        	
                    </div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

	</div>

	<!-- STYLE -->

	<div class="container-fluid bg-body">

		<h2 class="font-content"><?php echo get_cat_name( $category_id = 4 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 4,
					'order' => 'date',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>

                    <div class="col-lg-4 col-12 content-home">

                        <a href="<?php the_permalink() ?>" class="img-home">

                            <?php the_post_thumbnail() ?>

                        </a>

                        <div class="content-home2">

                            <?php echo the_category(); ?> 

                            <a href="<?php the_permalink() ?>" class="text-home">
                                <?php the_title() ?>
                            </a>

                            <div class="text-home2"><?php the_excerpt(); ?></div>

                            <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

                        </div>
                        	
                    </div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

	</div>

	<!-- WATCHES & JEWELRY -->

	<div class="container-fluid bg-body">

		<h2 class="font-content"><?php echo get_cat_name( $category_id = 25 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 25,
					'order' => 'date',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>

                    <div class="col-lg-4 col-12 content-home">

                        <a href="<?php the_permalink() ?>" class="img-home">

                            <?php the_post_thumbnail() ?>

                        </a>

                        <div class="content-home2">

                            <?php echo the_category(); ?> 

                            <a href="<?php the_permalink() ?>" class="text-home">
                                <?php the_title() ?>
                            </a>

                            <div class="text-home2"><?php the_excerpt(); ?></div>

                            <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

                        </div>
                        	
                    </div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

	</div>

	<!-- RUNWAY -->

	<div class="bg-love">

		<?php
			$args = array(	
				'post_status' => 'publish',
				'post_type' => 'post',
				'posts_per_page' => 1,
				'cat' => 26,
				'order' => 'date',
				
			);
		?>
		<?php $getposts = new WP_query($args); ?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			<?php echo get_the_category()->cat_ID; ?>


                <a href="<?php the_permalink() ?>" class="img-love">

                    <?php the_post_thumbnail() ?>

                </a>

                <div class="content-intro content-love">

            		<?php
						$categories = get_the_category();
						$comma      = ', ';
						$output     = '';
						
						if ( $categories ) {
							foreach ( $categories as $category ) {
								$output .= '<h1><a id="text-love" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a></h1>' . $comma;
							}
							echo trim( $output, $comma );
					} ?>

                    <a href="<?php the_permalink() ?>" class="text-love2">
                        <?php the_title() ?>
                    </a>

                    <div class="text-home2"><?php the_excerpt(); ?></div>

                    <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                    	
                </div>

		<?php endwhile; wp_reset_postdata(); ?>

	</div>

	<!-- nội dung 2 love -->
	<div class="container-fluid bg-body bg-love2">

		<h2 class="font-content"><?php echo get_cat_name( $category_id = 26 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 26,
					'order' => 'date',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>

                    <div class="col-lg-4 col-12 content-home">

                        <a href="<?php the_permalink() ?>" class="img-home">

                            <?php the_post_thumbnail() ?>

                        </a>

                        <div class="content-home2">

                            <?php echo the_category(); ?> 

                            <a href="<?php the_permalink() ?>" class="text-home">
                                <?php the_title() ?>
                            </a>

                            <div class="text-home2"><?php the_excerpt(); ?></div>

                            <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

                        </div>
                        	
                    </div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

	</div>

	<!-- ART & DESIGN -->

	<div class="container-fluid bg-body">

		<h2 class="font-content"><?php echo get_cat_name( $category_id = 27 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 27,
					'order' => 'date',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>

                    <div class="col-lg-4 col-12 content-home">

                        <a href="<?php the_permalink() ?>" class="img-home">

                            <?php the_post_thumbnail() ?>

                        </a>

                        <div class="content-home2">

                            <?php echo the_category(); ?> 

                            <a href="<?php the_permalink() ?>" class="text-home">
                                <?php the_title() ?>
                            </a>

                            <div class="text-home2"><?php the_excerpt(); ?></div>

                            <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

                        </div>
                        	
                    </div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

	</div>

	<!-- VOYAGE & GOURMET -->

	<div class="container-fluid bg-body">

		<h2 class="font-content"><?php echo get_cat_name( $category_id = 28 );?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 3,
					'cat' => 28,
					'order' => 'date',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>

                    <div class="col-lg-4 col-12 content-home">

                        <a href="<?php the_permalink() ?>" class="img-home">

                            <?php the_post_thumbnail() ?>

                        </a>

                        <div class="content-home2">

                            <?php echo the_category(); ?> 

                            <a href="<?php the_permalink() ?>" class="text-home">
                                <?php the_title() ?>
                            </a>

                            <div class="text-home2"><?php the_excerpt(); ?></div>

                            <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

                        </div>
                        	
                    </div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

	</div>

<?php get_footer(); ?>