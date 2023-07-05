<?php
/*

Template Name: Home page

*/

get_header(); ?>
	
	<div class="container">
		<div class="row bg-new">
			<div class="col-lg-6 col-12">
				<div class="content-news">
					<?php
			            $args = array(
			                'post_status' => 'publish',
			                'post_type' => 'post',
			                'posts_per_page' => 1,
			                'cat' => 3,
			                'orderby' => 'post_date',
			                'order' => 'date',
			            ); 
			        ?>
			            <?php $getposts = new WP_query($args); ?>
			            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
			            <?php if (have_posts()) : ?>
			            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

			            	<a class="img-intro2" href="<?php the_permalink(); ?>">
                				<?php the_post_thumbnail('full'); ?>              			
                			</a>

                			<div class="title-news">
                				<div>
		                			<p class="text-news"><?php echo get_cat_name( $category_id = 3 );?></p>

		                			<a class="text-news2" href="<?php the_permalink() ?>">
			                    		<?php the_title() ?>
			                    	</a>
			                    </div>

		                    	<div class="img-save">
		                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
		                    	</div>
		                    </div>

			           	<?php endwhile; wp_reset_postdata(); ?>
        			<?php endif; ?>
				</div>
			</div>

			<div class="col-lg-6 col-12">
				<div class="content-news">
					<?php
			            $args = array(
			                'post_status' => 'publish',
			                'post_type' => 'post',
			                'posts_per_page' => 1,
			                'cat' => 7,
			                'orderby' => 'post_date',
			                'order' => 'date',
			            ); 
			        ?>
			            <?php $getposts = new WP_query($args); ?>
			            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
			            <?php if (have_posts()) : ?>
			            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

			            	<a class="img-intro2" href="<?php the_permalink(); ?>">
                				<?php the_post_thumbnail('full'); ?>              			
                			</a>

                			<div class="title-news">
                				<div>
		                			<p class="text-news"><?php echo get_cat_name( $category_id = 7 );?></p>

		                			<a class="text-news2" href="<?php the_permalink() ?>">
			                    		<?php the_title() ?>
			                    	</a>
			                    </div>

		                    	<div class="img-save">
		                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
		                    	</div>
		                    </div>

			           	<?php endwhile; wp_reset_postdata(); ?>
        			<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="row bg-new2">
			<div class="col-lg-4 col-12">
				<div class="content-news">
					<?php
			            $args = array(
			                'post_status' => 'publish',
			                'post_type' => 'post',
			                'posts_per_page' => 1,
			                'cat' => 4,
			                'orderby' => 'post_date',
			                'order' => 'date',
			            ); 
			        ?>
			            <?php $getposts = new WP_query($args); ?>
			            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
			            <?php if (have_posts()) : ?>
			            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

			            	<a class="img-intro" href="<?php the_permalink(); ?>">
                				<?php the_post_thumbnail('full'); ?>              			
                			</a>

                			<div class="title-news2">

	                			<p class="text-news"><?php echo get_cat_name( $category_id = 4 );?></p>

	                			<a class="text-news3" href="<?php the_permalink() ?>">
		                    		<?php the_title() ?>
		                    	</a>

		                    	<div class="date-author">
						        	<div class="avatar-author">
						        		<!-- lấy avatar user -->

							        	<?php
										$user = wp_get_current_user();
										 
										if ( $user ) :
										    ?>
										    <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
										<?php endif; ?>

							        	<ul>
											<li class="text-news4"><?php the_author_posts_link(); ?></li>
							    			<li class="text-news5"><?php echo get_the_date(); ?></li>
							        	</ul>
							        </div>

		                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
		                    	</div>
		                    </div>

			           	<?php endwhile; wp_reset_postdata(); ?>
        			<?php endif; ?>
				</div>
			</div>

			<div class="col-lg-4 col-12">
				<div class="content-news">
					<?php
			            $args = array(
			                'post_status' => 'publish',
			                'post_type' => 'post',
			                'posts_per_page' => 1,
			                'cat' => 5,
			                'orderby' => 'post_date',
			                'order' => 'date',
			            ); 
			        ?>
			            <?php $getposts = new WP_query($args); ?>
			            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
			            <?php if (have_posts()) : ?>
			            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

			            	<a class="img-intro" href="<?php the_permalink(); ?>">
                				<?php the_post_thumbnail('full'); ?>              			
                			</a>

                			<div class="title-news2">

	                			<p class="text-news"><?php echo get_cat_name( $category_id = 5 );?></p>

	                			<a class="text-news3" href="<?php the_permalink() ?>">
		                    		<?php the_title() ?>
		                    	</a>

		                    	<div class="date-author">
						        	<div class="avatar-author">
						        		<!-- lấy avatar user -->

							        	<?php
										$user = wp_get_current_user();
										 
										if ( $user ) :
										    ?>
										    <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
										<?php endif; ?>

							        	<ul>
											<li class="text-news4"><?php the_author_posts_link(); ?></li>
							    			<li class="text-news5"><?php echo get_the_date(); ?></li>
							        	</ul>
							        </div>

		                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
		                    	</div>
		                    </div>

			           	<?php endwhile; wp_reset_postdata(); ?>
        			<?php endif; ?>
				</div>
			</div>

			<div class="col-lg-4 col-12">
				<div class="content-news">
					<?php
			            $args = array(
			                'post_status' => 'publish',
			                'post_type' => 'post',
			                'posts_per_page' => 1,
			                'cat' => 6,
			                'orderby' => 'post_date',
			                'order' => 'date',
			            ); 
			        ?>
			            <?php $getposts = new WP_query($args); ?>
			            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
			            <?php if (have_posts()) : ?>
			            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

			            	<a class="img-intro" href="<?php the_permalink(); ?>">
                				<?php the_post_thumbnail('full'); ?>              			
                			</a>

                			<div class="title-news2">

	                			<p class="text-news"><?php echo get_cat_name( $category_id = 6 );?></p>

	                			<a class="text-news3" href="<?php the_permalink() ?>">
		                    		<?php the_title() ?>
		                    	</a>

		                    	<div class="date-author">
						        	<div class="avatar-author">
						        		<!-- lấy avatar user -->

							        	<?php
										$user = wp_get_current_user();
										 
										if ( $user ) :
										    ?>
										    <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
										<?php endif; ?>

							        	<ul>
											<li class="text-news4"><?php the_author_posts_link(); ?></li>
							    			<li class="text-news5"><?php echo get_the_date(); ?></li>
							        	</ul>
							        </div>

		                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
		                    	</div>
		                    </div>

			           	<?php endwhile; wp_reset_postdata(); ?>
        			<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="container bg-new">
		<div class="row">
			<div class="col-lg-8 col-12">

				<!-- gần đây nhất -->

				<div class="geometry">
					<img src="<?php bloginfo('template_directory') ?>/images/img6.png">

					<h1 class="text-recently"><?php echo get_field('recently'); ?></h1>
				</div>

				<div class="row bg-new2">
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

			            	<div class="col-lg-8 col-12">
			            		<div class="content-recently">
				            		<a class="img-news" href="<?php the_permalink(); ?>">
	                					<?php the_post_thumbnail('full'); ?>             						
	                				</a>

			                		<?php if( get_field('video-agate') ): ?>
									    <div class="video">
											<?php the_field('video-agate') ?>
										</div>
									<?php endif; ?>

	                				<div class="img-save img-save2">
			                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
			                    	</div>
			                    </div>
			            	</div>

			            	<div class="col-lg-4 col-12">
			            		<h1 class="text-recently2">
				            		<a href="<?php the_permalink() ?>">
					                    <?php the_title() ?>
					                </a>
					            </h1>

					            <div class="text-recently3"><?php the_excerpt(); ?></div>

					        	<div class="avatar-author">
					        		<!-- lấy avatar user -->

						        	<?php
									$user = wp_get_current_user();
									 
									if ( $user ) :
									    ?>
									    <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
									<?php endif; ?>

						        	<ul>
										<li class="text-news4"><?php the_author_posts_link(); ?></li>
						    			<li class="text-news5"><?php echo get_the_date(); ?></li>	
						        	</ul>
						        </div>
			            	</div>

			            <?php endwhile; wp_reset_postdata(); ?>
	        		<?php endif; ?>
	        	</div>

	        	<div class="row line-post">
	        		<?php
			            $args = array(
			                'post_status' => 'publish',
			                'post_type' => 'post',
			                'posts_per_page' => 6,
			                'orderby' => 'post_date',
			                'order' => 'DESC',
			            ); 
			        ?>
			            <?php $getposts = new WP_query($args); ?>
			            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
			            <?php if (have_posts()) : ?>
			            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

			            	<div class="col-lg-6 col-12 bg-new2">
				            	<a class="img-intro" href="<?php the_permalink(); ?>">
	                				<?php the_post_thumbnail('full'); ?>              			
	                			</a>

		                		<?php if( get_field('video-agate') ): ?>
								    <div class="video-intro">
										<?php the_field('video-agate') ?>
									</div>
								<?php endif; ?>

	                			<div class="title-news2">

		                			<?php the_category(); ?>

		                			<a class="text-news3" href="<?php the_permalink() ?>">
			                    		<?php the_title() ?>
			                    	</a>

			                    	<div class="date-author">
							        	<div class="avatar-author">
							        		<!-- lấy avatar user -->

								        	<?php
											$user = wp_get_current_user();
											 
											if ( $user ) :
											    ?>
											    <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
											<?php endif; ?>

								        	<ul>
												<li class="text-news4"><?php the_author_posts_link(); ?></li>
								    			<li class="text-news5"><?php echo get_the_date(); ?></li>

								        	</ul>
								        </div>

			                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
			                    	</div>
			                    </div>
			            	</div>

			        	<?php endwhile; wp_reset_postdata(); ?>
	        		<?php endif; ?>
	        	</div>

	        	<!-- Lifestyle -->

	        	<div class="lifestyle line-post">
					<div class="geometry">
						<img src="<?php bloginfo('template_directory') ?>/images/img8.png">

						<h1 class="text-recently4"><?php echo get_cat_name( $category_id = 7 );?></h1>
					</div>

					<div class="row">
						<?php
				            $args = array(
				                'post_status' => 'publish',
				                'post_type' => 'post',
				                'posts_per_page' => 4,
				                'cat' => 7,
				                'orderby' => 'post_date',
				                'order' => 'date',
				            ); 
				        ?>
				            <?php $getposts = new WP_query($args); ?>
				            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
				            <?php if (have_posts()) : ?>
				            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

				            	<div class="col-lg-6 col-12 bg-new2">
					            	<a class="img-intro" href="<?php the_permalink(); ?>">
		                				<?php the_post_thumbnail('full'); ?>              			
		                			</a>

		                			<div class="title-news2">

			                			<a class="text-news3" href="<?php the_permalink() ?>">
				                    		<?php the_title() ?>
				                    	</a>

				                    	<div class="date-author">
								        	<div class="avatar-author">
								        		<!-- lấy avatar user -->

									        	<?php
												$user = wp_get_current_user();
												 
												if ( $user ) :
												    ?>
												    <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
												<?php endif; ?>

									        	<ul>
													<li class="text-news4"><?php the_author_posts_link(); ?></li>
									    			<li class="text-news5"><?php echo get_the_date(); ?></li>
									        	</ul>
									        </div>

				                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
				                    	</div>
				                    </div>
				            	</div>

				        	<?php endwhile; wp_reset_postdata(); ?>
		        		<?php endif; ?>
		        	</div>
		        </div>	        

			</div>

			<!-- sidebar -->

			<div class="col-lg-4 col-12 bg-new3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>


	<!-- Sức khoẻ tinh thần -->

	<div class="container health line-post">
		<div class="geometry">
			<img src="<?php bloginfo('template_directory') ?>/images/img8.png">

			<h1 class="text-recently4"><?php echo get_cat_name( $category_id = 3 );?></h1>
		</div>

		<div class="row bg-new2">
			<div class="col-lg-5 col-12">

				<?php
		            $args = array(
		                'post_status' => 'publish',
		                'post_type' => 'post',
		                'posts_per_page' => 1,
		                'cat' => 3,
		                'orderby' => 'post_date',
		                'order' => 'date',
		            ); 
		        ?>
		            <?php $getposts = new WP_query($args); ?>
		            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
		            <?php if (have_posts()) : ?>
		            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

		            	<a class="img-intro" href="<?php the_permalink(); ?>">
            				<?php the_post_thumbnail('full'); ?>              			
            			</a>

        				<h1 class="text-recently2">
		            		<a href="<?php the_permalink() ?>">
			                    <?php the_title() ?>
			                </a>
			            </h1>

			            <div class="text-recently3"><?php the_excerpt(); ?></div>

	            		<div class="date-author">
				        	<div class="avatar-author">
				        		<!-- lấy avatar user -->

					        	<?php
								$user = wp_get_current_user();
								 
								if ( $user ) :
								    ?>
								    <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
								<?php endif; ?>

					        	<ul>
									<li class="text-news4"><?php the_author_posts_link(); ?></li>
					    			<li class="text-news5"><?php echo get_the_date(); ?></li>
					        	</ul>
					        </div>

                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
                    	</div>

		           	<?php endwhile; wp_reset_postdata(); ?>
    			<?php endif; ?>		

			</div>

			<div class="col-lg-7 col-12 bg-new3">
				<div class="row">
					<?php
			            $args = array(
			                'post_status' => 'publish',
			                'post_type' => 'post',
			                'posts_per_page' => 4,
			                'cat' => 3,
			                'orderby' => 'post_date',
			                'order' => 'date',
			            ); 
			        ?>
			            <?php $getposts = new WP_query($args); ?>
			            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
			            <?php if (have_posts()) : ?>
			            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

			            	<div class="col-lg-6 col-12 bg-new4">
				            	<a class="img-intro" href="<?php the_permalink(); ?>">
		            				<?php the_post_thumbnail('full'); ?>              			
		            			</a>

	                			<a class="text-news3" href="<?php the_permalink() ?>">
		                    		<?php the_title() ?>
		                    	</a>

			            		<div class="date-author">
						        	<div class="avatar-author">
						        		<!-- lấy avatar user -->

							        	<?php
										$user = wp_get_current_user();
										 
										if ( $user ) :
										    ?>
										    <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
										<?php endif; ?>

							        	<ul>
											<li class="text-news4"><?php the_author_posts_link(); ?></li>
							    			<li class="text-news5"><?php echo get_the_date(); ?></li>
							        	</ul>
							        </div>

		                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
		                    	</div>
		                    </div>

			           	<?php endwhile; wp_reset_postdata(); ?>
	    			<?php endif; ?>		
    			</div>
			</div>
		</div>
	</div>

	<!-- Các mối quan hệ -->

	<div class="container health">
		<div class="geometry">
			<img src="<?php bloginfo('template_directory') ?>/images/img8.png">

			<h1 class="text-recently4"><?php echo get_cat_name( $category_id = 5 );?></h1>
		</div>

		<div class="row bg-new2">
			<?php
	            $args = array(
	                'post_status' => 'publish',
	                'post_type' => 'post',
	                'posts_per_page' => 1,
	                'cat' => 5,
	                'orderby' => 'post_date',
	                'order' => 'date',
	            ); 
	        ?>
	            <?php $getposts = new WP_query($args); ?>
	            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
	            <?php if (have_posts()) : ?>
	            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

	            	<div class="col-lg-5 col-12">
		            	<a class="img-intro" href="<?php the_permalink(); ?>">
	        				<?php the_post_thumbnail('full'); ?>              			
	        			</a>
	        		</div>

	        		<div class="col-lg-7 col-12">
	        			<h1 class="text-recently2">
		            		<a href="<?php the_permalink() ?>">
			                    <?php the_title() ?>
			                </a>
			            </h1>

			            <div class="text-recently3"><?php the_excerpt(); ?></div>

	            		<div class="date-author">
				        	<div class="avatar-author">
				        		<!-- lấy avatar user -->

					        	<?php
								$user = wp_get_current_user();
								 
								if ( $user ) :
								    ?>
								    <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
								<?php endif; ?>

					        	<ul>
									<li class="text-news4"><?php the_author_posts_link(); ?></li>
					    			<li class="text-news5"><?php echo get_the_date(); ?></li>
					        	</ul>
					        </div>

                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
                    	</div>
	        		</div>

	           	<?php endwhile; wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>

		<div class="row bg-new2">
			<?php
	            $args = array(
	                'post_status' => 'publish',
	                'post_type' => 'post',
	                'posts_per_page' => 4,
	                'cat' => 5,
	                'orderby' => 'post_date',
	                'order' => 'ASC',
	            ); 
	        ?>
	            <?php $getposts = new WP_query($args); ?>
	            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
	            <?php if (have_posts()) : ?>
	            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

	            	<div class="col-lg-3 col-12 bg-new4">
		            	<a class="img-intro" href="<?php the_permalink(); ?>">
            				<?php the_post_thumbnail('full'); ?>              			
            			</a>

            			<a class="text-news3" href="<?php the_permalink() ?>">
                    		<?php the_title() ?>
                    	</a>

	            		<div class="date-author">
				        	<div class="avatar-author">
				        		<!-- lấy avatar user -->

					        	<?php
								$user = wp_get_current_user();
								 
								if ( $user ) :
								    ?>
								    <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
								<?php endif; ?>

				        		<ul>
									<li class="text-news4"><?php the_author_posts_link(); ?></li>
				    				<li class="text-news5"><?php echo get_the_date(); ?></li>
				        		</ul>
					        </div>

                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
                    		
                    	</div>
	            	</div>

	        	<?php endwhile; wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>


	<!-- thông báo bài viết mới -->
	<div class="bg-notification">
		<div class="container">
			<h1 class="text-notification"><?php echo get_field('notification'); ?></h1>

			<div class="form-notification">
				<?php echo do_shortcode( '[contact-form-7 id="118" title="Contact form 1"]' ); ?>
			</div>
		</div>
	</div>


	<!-- khóa học -->
	<div class="container bg-course">
        <?php $image = get_field('course_banner');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
	</div>


	<!-- Podcast -->

	<div class="container bg-new">
		<div class="geometry">
			<img src="<?php bloginfo('template_directory') ?>/images/img11.png">

			<h1 class="text-recently4"><?php echo get_field('podcast'); ?></h1>
		</div>

		<div class="row bg-new2">
			<div class="col-lg-5 col-12">
				<?php
		            $args = array(
		                'post_status' => 'publish',
		                'post_type' => 'post',
		                'posts_per_page' => 1,
		                'cat' => 16,
		                'orderby' => 'post_date',
		                'order' => 'date',
		            ); 
		        ?>
		            <?php $getposts = new WP_query($args); ?>
		            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
		            <?php if (have_posts()) : ?>
		            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

		            	<a class="img-podcast2" href="<?php the_permalink(); ?>">
            				<?php the_post_thumbnail('full'); ?>              			
            			</a>

            			<div class="text-podcast3">
						    <?php the_category(); ?>

	            			<a class="text-podcast2" href="<?php the_permalink() ?>">          				
	                    		<h1><?php the_title() ?></h1>
	                    	</a>
	                    </div>

		        	<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>

			<div class="col-lg-7 col-12">
				<div class="row">
					<?php
			            $args = array(
			                'post_status' => 'publish',
			                'post_type' => 'post',
			                'posts_per_page' => 3,
			                'cat' => 16,
			                'orderby' => 'post_date',
			                'order' => 'ASC',
			            ); 
			        ?>
			            <?php $getposts = new WP_query($args); ?>
			            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
			            <?php if (have_posts()) : ?>
			            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			            	<div class="col-lg-4 col-12">
				            	<a class="img-podcast3" href="<?php the_permalink(); ?>">
		            				<?php the_post_thumbnail('full'); ?>              			
		            			</a>
		            		</div>

		            		<div class="col-lg-8 col-12">
		            			<div class="text-podcast3">
								    <p class="text-news"><?php the_category(); ?></p>

			            			<a class="text-podcast2" href="<?php the_permalink() ?>">          				
			                    		<h1><?php the_title() ?></h1>
			                    	</a>
			                    </div>
		                    </div>

			        	<?php endwhile; wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- video -->

	<div class="container bg-new line-post">
		<div class="geometry">
			<img src="<?php bloginfo('template_directory') ?>/images/img11.png">

			<h1 class="text-recently4"><?php echo get_cat_name( $category_id = 15 );?></h1>
		</div>

		<div class="row">
			<div class="col-lg-12 col-12">
				<?php
		            $args = array(
		                'post_status' => 'publish',
		                'post_type' => 'post',
		                'posts_per_page' => 1,
		                'cat' => 15,
		                'orderby' => 'post_date',
		                'order' => 'date',
		            ); 
		        ?>
		            <?php $getposts = new WP_query($args); ?>
		            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
		            <?php if (have_posts()) : ?>
		            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

		            <div class="row bg-new2">            	
		            	<div class="col-lg-6 col-12">
				         	<?php if( get_field('video-agate') ): ?>
							    <div class="video">
									<?php the_field('video-agate') ?>
								</div>
							<?php endif; ?>
						</div>

						<div class="col-lg-6 col-12">
				            <a href="<?php the_permalink() ?>">
	                    		<h1 class="text-video"><?php the_title() ?></h1>
	                    	</a>
	                    </div>
			        </div>

		            <?php endwhile; wp_reset_postdata(); ?>
		        <?php endif; ?>
		    </div>

		    <div class="col-lg-12 col-12">
		    	<div class="row bg-video">
					<?php
			            $args = array(
			                'post_status' => 'publish',
			                'post_type' => 'post',
			                'posts_per_page' => 2,
			                'cat' => 15,
			                'orderby' => 'post_date',
			                'order' => 'ASC',
			            ); 
			        ?>
			            <?php $getposts = new WP_query($args); ?>
			            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
			            <?php if (have_posts()) : ?>
			            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

			            	<div class="col-lg-3 col-md-6 col-12">           	

						        <?php if( get_field('video-agate') ): ?>
								    <div class="video2">
										<?php the_field('video-agate') ?>
									</div>
								<?php endif; ?>
						
								<div class="bg-video2">

							        <a href="<?php the_permalink() ?>">
			                    		<p class="text-podcast"><?php the_title() ?></p>
			                    	</a>
						        </div>
						    </div>

			            <?php endwhile; wp_reset_postdata(); ?>
			        <?php endif; ?>
			    </div>
		    </div>
		</div>
	</div>	

	<!-- advertisement -->

	<div class="container advertisement" style="display: none">
		<div class="owl-carousel owl-theme carousel_1">
			<?php if (have_rows('advertisement')) : ?>
	            <?php while (have_rows('advertisement')) : the_row();
	                $image = get_sub_field('img');
                	$picture = $image['sizes']['thumbnail']; 
	            ?>
					<img class="img-podcast" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

	    		<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</div>

	<!-- cộng đồng -->

	<div class="container health line-post">
		<div class="geometry">
			<img src="<?php bloginfo('template_directory') ?>/images/img8.png">

			<h1 class="text-recently4"><?php echo get_cat_name( $category_id = 17 );?></h1>
		</div>

		<div class="row bg-new2">
			<?php
	            $args = array(
	                'post_status' => 'publish',
	                'post_type' => 'post',
	                'posts_per_page' => 1,
	                'cat' => 17,
	                'orderby' => 'post_date',
	                'order' => 'date',
	            ); 
	        ?>
	            <?php $getposts = new WP_query($args); ?>
	            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
	            <?php if (have_posts()) : ?>
	            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

	            	<div class="col-lg-5 col-12">
		            	<a class="img-intro" href="<?php the_permalink(); ?>">
	        				<?php the_post_thumbnail('full'); ?>              			
	        			</a>
	        		</div>

	        		<div class="col-lg-7 col-12">
	        			<h1 class="text-recently2">
	        				<?php the_category(); ?>

		            		<a href="<?php the_permalink() ?>">
			                    <?php the_title() ?>
			                </a>
			            </h1>

			            <div class="text-recently3"><?php the_excerpt(); ?></div>

	            		<div class="date-author">
				        	<div class="avatar-author">
				        		<!-- lấy avatar user -->

					        	<?php
								$user = wp_get_current_user();
								 
								if ( $user ) :
								    ?>
								    <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
								<?php endif; ?>

					        	<ul>
									<li class="text-news4"><?php the_author_posts_link(); ?></li>
					    			<li class="text-news5"><?php echo get_the_date(); ?></li>
					        	</ul>
					        </div>

                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
                    	</div>
	        		</div>

	           	<?php endwhile; wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>

		<div class="row bg-new2">
			<?php
	            $args = array(
	                'post_status' => 'publish',
	                'post_type' => 'post',
	                'posts_per_page' => 4,
	                'cat' => 17,
	                'orderby' => 'post_date',
	                'order' => 'ASC',
	            ); 
	        ?>
	            <?php $getposts = new WP_query($args); ?>
	            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
	            <?php if (have_posts()) : ?>
	            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

	            	<div class="col-lg-3 col-12 bg-new4">
		            	<a class="img-intro" href="<?php the_permalink(); ?>">
            				<?php the_post_thumbnail('full'); ?>              			
            			</a>

            			<?php the_category(); ?>

            			<a class="text-news3" href="<?php the_permalink() ?>">
                    		<?php the_title() ?>
                    	</a>

	            		<div class="date-author">
				        	<div class="avatar-author">
				        		<!-- lấy avatar user -->

					        	<?php
								$user = wp_get_current_user();
								 
								if ( $user ) :
								    ?>
								    <img class="img-avatar" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
								<?php endif; ?>

				        		<ul>
									<li class="text-news4"><?php the_author_posts_link(); ?></li>
				    				<li class="text-news5"><?php echo get_the_date(); ?></li>
				        		</ul>
					        </div>

                    		<?php echo do_shortcode( '[ccc_my_favorite_select_button post_id="" style=""]' ); ?>
                    	</div>
	            	</div>

	        	<?php endwhile; wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>