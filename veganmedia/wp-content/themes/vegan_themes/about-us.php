<?php

/*

Template Name: about us page

*/

get_header(); ?>
	<div class="container">
		<div class="about-us">
			<?php if (have_rows('list-content')) : ?>
	            <?php while (have_rows('list-content')) : the_row();
	                $image = get_sub_field('img');
                	$picture = $image['sizes']['thumbnail']; 
	            ?>       		            
		            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

		            <h1><?php echo get_sub_field('title'); ?></h1>

		            <p><?php echo the_sub_field('content'); ?></p>

	            <?php endwhile; ?>
	        <?php endif; ?>
		</div>
	</div>


<?php get_footer(); ?>