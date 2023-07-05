<?php get_header(); ?>
	<div class="bg-category">
		<?php 
            $image = get_field('img-title','option');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="container">
			<h1 class="font-content"><?php single_cat_title(); ?></h1>
		</div>
	</div>

	<div class="container bg-category2">

		<div class="row">

			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<div class="col-lg-4 col-12">

					<div class="content-category">
					 	<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?></a>
					</div>


					<div class="sub-content2">
						<h1 class="text-sub"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

						<?php the_excerpt(); ?>	

						<p class="text-category"><a href="<?php the_permalink() ?>">( Xem Thêm )</a></p>
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
						'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
						'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages,
						) );
				    ?>
				</div>
			<?php } ?>
		</div>
	</div>

<?php get_footer(); ?>