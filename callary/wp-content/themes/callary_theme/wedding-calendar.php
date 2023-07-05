<?php
/*

Template Name: wedding wedding-calendar

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

	<div class="container wedding-calendar">

		<p class="text-calendar"><?php echo get_field('title1'); ?></p>

		<h1 class="text-calendar2"><?php echo get_field('title2'); ?></h1>

		<div class="row">
			<?php if( have_rows('list-invitation') ): ?>
	            <?php while( have_rows('list-invitation') ): the_row(); 
	                $image = get_sub_field('img-groom');
	                $picture = $image['sizes']['thumbnail']; 

	                $image2 = get_sub_field('img-bride');
	                $picture2 = $image2['sizes']['thumbnail']; 

	                $link = get_sub_field('read-more');                
	                ?>
	            <h1 class="text-invitation"><?php echo get_field('title3'); ?></h1>

	            <div class="col-lg-4 col-12">
	                <img class="img-invitation" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

	                <p class="text-invitation5"><?php echo get_sub_field('name-groom'); ?></p>
	            </div>

	            <div class="col-lg-4 col-12">
	            	<p class="text-invitation2"><?php echo get_sub_field('note'); ?></p>

	            	<p class="text-invitation3"><?php echo get_sub_field('date'); ?></p>

	            	<p class="text-invitation4"><?php echo get_sub_field('d-m-y'); ?></p>
	            </div>

	            <div class="col-lg-4 col-12">
	            	
	            	<img class="img-invitation" src="<?php echo $picture2;?>" alt="<?php echo $image2['alt'];?>">

	                <p class="text-invitation5"><?php echo get_sub_field('name-bride'); ?></p>
	            </div>

	           	<a class="detail-invitation" href="<?php echo $link['url'];?>">Xem Thêm</a>

	            <?php endwhile; ?>
	        <?php endif; ?>
		</div>

	</div>

<?php get_footer(); ?>