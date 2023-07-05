<?php
/*

Template Name: Tin Tức page

*/
get_header(); ?>

	<div class="bg-wedding">

		<?php 
			$image = get_field('bg-img');
			if( !empty( $image ) ): ?>
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>

		<span class="bg-wedding2"></span>

		<div class="container">
			<div class="inner">
				<h1><?php echo get_field('header'); ?></h1>

				<ul class="list-breadcrumb">
					<li>
						<?php if( have_rows('breadcrumb') ): ?>
				            <?php while( have_rows('breadcrumb') ): the_row(); 
				                $link = get_sub_field('link');
				            ?>
					            <a href="<?php echo $link['url'];?>">
							    	<?php echo get_sub_field('title'); ?>
								</a>
							<?php endwhile; ?>
	        			<?php endif; ?>
					</li>

					<li>/</li>

					<li>
						<?php if( have_rows('breadcrumb2') ): ?>
				            <?php while( have_rows('breadcrumb2') ): the_row(); 
				                $link = get_sub_field('link');
				            ?>
					            <a href="<?php echo $link['url'];?>">
							    	<?php echo get_sub_field('title'); ?>
								</a>
							<?php endwhile; ?>
	        			<?php endif; ?>
					</li>	
				</ul>
			</div>
		</div>
	</div>

	<div class="container bg-wedding3">
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="row">
					<?php
	                    $args = array(
	                        'post_status' => 'publish',
	                        'post_type' => 'post',
	                        'orderby' => 'post_date',
	                        'order' => 'DSC',
	                    ); 
	                ?>
	                    <?php $getposts = new WP_query($args); ?>
	                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
	                    <?php if (have_posts()) : ?>
	                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
	                    <div class="col-lg-6 col-12">
	                    	<div class="content-news">
		                        <a href="<?php the_permalink(); ?>">
		                        <?php the_post_thumbnail('full'); ?></a>

		                        <p class="text-news1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

		                        <div class="text-news2"><?php the_excerpt(); ?></div>

		                        <p class="text-wedding"><i class="far fa-clock"></i> <?php echo get_the_date(); ?></p>
		                    </div>
	                    </div>
	                    <?php endwhile; wp_reset_postdata(); ?>
	                <?php endif; ?>
	            </div>
			</div>

			<div class="col-lg-4 col-12">

				<div class="bg-sidebar">
					<div class="search">
						<?php echo do_shortcode('[wp_search_form]'); ?>
					</div>

				   	<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>