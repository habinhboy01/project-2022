<?php get_header(); ?>
	<div class="container">
		<h1 class="text-news"><?php single_cat_title(); ?></h1>

		<div class="row">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<div class="col-lg-4 col-12 bg-news">
					<div class="img-news">
						<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?></a>
					</div>

					<div class="content-news">
						<h2 class="text-news2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<p><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> </p>

						<p><?php the_excerpt(); ?></p>	
					</div>
				</div>
				
			<?php endwhile;?>
			<?php endif; ?>

			<?php if(paginate_links()!='') {?>
				<div class="pagination">
					<?php
					global $wp_query;
					$big = 999999999;
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'prev_text'    => __('« Mới hơn'),
						'next_text'    => __('Tiếp theo »'),
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages
						) );
				    ?>
				</div>
			<?php } ?>

		</div>
	</div>

<?php get_footer(); ?>