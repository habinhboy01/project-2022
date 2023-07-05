<?php
/*

Template Name: Tag page

*/

get_header(); ?>

	<!-- bài viết -->
	<div class="container bg-related">
		<div class="row">
			<div class="col-lg-7 col-12">

				<div class="geometry">
					<img src="<?php bloginfo('template_directory') ?>/images/img8.png">

					<h1 class="text-recently4">BÀI VIẾT</h1>
				</div>

				<div class="row">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

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

		            				<h1 class="text-tag"><?php single_tag_title(); ?></h1>

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

			                    		<img src="<?php bloginfo('template_directory') ?>/images/save.png">
			                    	</div>
			                    </div>
			            	</div>

			        	<?php endwhile; wp_reset_postdata(); ?>
		    		<?php endif; ?>
		    	</div>

			</div>

			<div class="col-lg-5 col-12 bg-new3">

				<!-- thẻ phổ biến -->

				<div class="geometry">
					<img src="<?php bloginfo('template_directory') ?>/images/img9.png">

					<h1 class="text-recently4">THẺ PHỔ BIẾN</h1>
				</div>

				<div class="list-tag">

				    <?php
				    	$tags = get_tags(array(
				    	   'number'   => 10, // displays at most 45 tags
						   'orderby'  => 'name', // order tags alphabetically
						   'order'    => 'ASC', // order tags by ascending order
						   'taxonomy' => 'post_tag',
				    ));
				    if ( $tags ) :
				        foreach ( $tags as $tag ) : ?>
				            <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a>
				        <?php endforeach; ?>
				    <?php endif; ?>
				
				</div>

			    <img class="img-tag" src="<?php bloginfo('template_directory') ?>/images/img16.png">
			</div>
		</div>
	</div>


	<!-- thông báo bài viết mới -->
	<div class="bg-notification">
		<div class="container">
			<h1 class="text-notification">Nhận thông báo bài viết mới mỗi tuần từ Agate</h1>

			<div class="form-notification">
				<?php echo do_shortcode( '[contact-form-7 id="118" title="Contact form 1"]' ); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>