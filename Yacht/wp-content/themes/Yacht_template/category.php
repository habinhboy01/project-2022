<?php get_header(); ?>
	<div class="container background-category">

		<h1 class="font-content"><?php single_cat_title(); ?></h1>

		<div class="row">
			<div class="col-lg-9 col-12">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<div class="row font-content">
						<div class="col-lg-7 col-12">
							<div class="content-category">
							 	<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?></a>
							</div>
						</div>

						<div class="col-lg-5 col-12 content-category2">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<p class="text3 font-content"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> </p>

							<p class="text-category2"><?php the_excerpt(); ?></p>	
						</div>
					</div>
					
				<?php endwhile;?>
				<?php endif; ?>
			</div>

			<div class="col-lg-3 col-12">
				<?php if( have_rows('banner_category', 'option') ): ?>
		            <?php while( have_rows('banner_category', 'option') ): the_row(); 
		                $image = get_sub_field('img');
		                $link = get_sub_field('link-img');
		                ?>
		                <a href="<?php echo $link['url'];?>"><img class="banner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>"></a>
		            <?php endwhile; ?>
		        <?php endif; ?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>