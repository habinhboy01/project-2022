<div class="bg-search">
 	<?php get_search_form(); ?>
</div>

<div class="bg-sidebar">
	<h1 class="text-search">Bài viết mới nhất</h1>

	<div class="row">
		<?php
			$args = array(
				'post_status' => 'publish',
				'post_type' => 'post',
				'posts_per_page' => 6,
				'order' => 'DSC',
			);
		?>
		<?php $getposts = new WP_query($args); ?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

			<div class="col-lg-5 col-12 bg-sidebar">
				<div class="content-new">
				    <a href="<?php the_permalink(); ?>">
					    <?php the_post_thumbnail('full'); ?></a>
				</div>
			</div>

			<div class="col-lg-7 col-12 bg-sidebar">
			    <p class="text-search2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
			</div>

		<?php endwhile; wp_reset_postdata(); ?>  
	</div>
</div>
