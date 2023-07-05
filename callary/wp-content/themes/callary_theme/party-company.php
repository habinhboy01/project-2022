<?php
/*

Template Name: party company page

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
			<div class="col-lg-8 col-12 content-event">

				<p><?php the_field('content'); ?></p>

				<div class="row">
					<?php if( have_rows('list-img') ): ?>
				        <?php while( have_rows('list-img') ): the_row(); 
				            $image = get_sub_field('img');
				            $picture = $image['sizes']['thumbnail']; 
				            ?>
				            <div class="col-lg-4 col-12">
					            <img class="meeting-img" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					        </div>
				        <?php endwhile; ?>
	        		<?php endif; ?>
	        	</div>


				<!-- share -->
				<div class="meta-post">
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
			</div>


			<div class="col-lg-4 col-12">
				<div class="bg-sidebar">
					<div class="categories">
						<h1><?php echo get_field('header-sidebar'); ?></h1>

						<?php wp_nav_menu (
				    		array('theme_location' => 'menu-5', 'menu_class' => 'categories8'));?>
				   	</div>

				   	<div class="categories">
				   		<h1><?php echo get_field('discount'); ?></h1>

				   	<?php 
						$image = get_field('img-discount');
						if( !empty( $image ) ): ?>
						    <img class="discount-sidebar" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				   	</div>

				   	<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>