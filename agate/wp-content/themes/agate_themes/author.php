<?php get_header(); ?>

	<div class="container">
		<div class="bg-author">
	        <?php 
            $image = get_field('banner','option');
            if( !empty( $image ) ): ?>
                <img class="img-author" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

            <div class="banner-author">
				<?php
				$user = wp_get_current_user();
				 
				if ( $user ) :
				    ?>
				    <img class="img-author2" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
				<?php endif; ?>

				<div class="name-author">
					<h1><?php the_author(); ?></h1>

					<p><?php echo count_user_posts(get_the_author_meta('ID')); ?> tin đăng</p>
				</div>         		
            </div>
		</div>
	</div>

	<!-- thông tin user -->

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-12">
				<div class="info-author">
					<h1>Thông tin cá nhân</h1>

					<p>
						Vai trò: 
						<?php
							$theAuthorDataRoles = get_userdata(get_the_author_meta('ID'));	
							$theRolesAuthor = $theAuthorDataRoles -> roles;	
							echo implode(',',$theRolesAuthor);
						?>				
					</p>

					<p>Email: <?php echo get_the_author_meta('email'); ?></p>

					<p>Giới thiệu: <?php echo get_the_author_meta('description'); ?></p>
				</div>
			</div>

			<div class="col-lg-8 col-12">
				<div class="title-author">
					<h1>Bài viết của <?php the_author(); ?></h1>
				</div>

				<div class="row bg-new2">

					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

			            	<div class="col-lg-4 col-12 bg-category2">
			            		<div class="content-recently">
				            		<a class="img-author3" href="<?php the_permalink(); ?>">
		            					<?php the_post_thumbnail('full'); ?>	
		            				</a>

			            			<?php if( get_field('video-agate') ): ?>
									    <div class="video-author">
											<?php the_field('video-agate') ?>
										</div>
									<?php endif; ?>

			                    </div>
			            	</div>

			            	<div class="col-lg-8 col-12 bg-category2">
			            		<h1 class="text-recently2">
				            		<a href="<?php the_permalink() ?>">
					                    <?php the_title() ?>
					                </a>
					            </h1>

					            <div class="text-author"><?php the_excerpt(); ?></div>

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
											<li class="text-news4">
												<?php the_author_posts_link(); ?>
											</li>

							    			<li class="text-news5"><?php echo get_the_date(); ?></li>
							        	</ul>
							        </div>

		                    		<img src="<?php bloginfo('template_directory') ?>/images/save.png">
		                    	</div>
			            	</div>

			            <?php endwhile; wp_reset_postdata(); ?>
		    		<?php endif; ?>
		    	</div>
			</div>
		</div>

		<!-- phân trang -->

		<?php if(paginate_links()!='') {?>
			<div class="pagination">
				<?php
				global $wp_query;
				$big = 999999999;
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'prev_text'    => __('<'),
					'next_text'    => __('>'),
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
					) );
			    ?>
			</div>
		<?php } ?>
	</div>

<?php get_footer(); ?>