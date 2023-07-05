<?php
/*

Template Name: hall Violet page

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

	<div class="container bg-discount">
		<div class="row">
			<div class="col-lg-8 col-12">
				<p class="text-tulip"><?php echo the_field('content'); ?></p>

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
			</div>

			<div class="col-lg-4 col-12">
				<h1 class="text-tulip2"><?php echo get_field('contact'); ?></h1>

				<div class="bg-input">
    				<?php echo do_shortcode( '[contact-form-7 id="313" title="Contact form 1"]' ); ?>
    			</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>