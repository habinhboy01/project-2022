<?php
/*

Template Name: party congratulation page

*/
get_header(); ?>
	<div class="bg-tulip">
		<?php 
			$image = get_field('bg-img');
			if( !empty( $image ) ): ?>
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>

		<span class="bg-tulip2"></span>

		<h1><?php echo get_field('name-hall'); ?></h1>
	</div>

	<div class="container bg-wedding3">
		<h1 class="text-congratulation"><?php echo get_field('header-content'); ?></h1>

		<p class="text-congratulation2"><?php the_field('content'); ?></p>

		<div class="row">
			<?php if( have_rows('list-img') ): ?>
			    <?php while( have_rows('list-img') ): the_row(); 
			        $image = get_sub_field('img');
			        $picture = $image['sizes']['thumbnail']; 
			    ?>
			        <div class="col-lg-4 col-12">
			        	<img class="img-hall img-tulip" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			        </div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<!-- share -->
		
			<div class="share">
				<span>
					<?php echo get_field('icon-share','option'); ?>
					<?php echo get_field('share','option'); ?>
				</span>

				<div class="social-media">
					<?php if (have_rows('share-social', 'option')) : ?>
			            <?php while (have_rows('share-social', 'option')) : the_row();
			                $social_icon = get_sub_field('icon');
			                $social_link = get_sub_field('link');

			            ?>

					        <a href="<?php echo $social_link; ?>">
					            <?php echo $social_icon ?>
					        </a>

			            <?php endwhile; ?>
			        <?php endif; ?>
				</div>
			</div>
		
	</div>

<?php get_footer(); ?>