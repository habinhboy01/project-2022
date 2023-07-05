<?php
/*

 *Template Name: template invitation 3
 * Template Post Type: post

*/
get_header(); ?>
	<div class="owl-carousel owl-theme carousel_1 bg-intro">

        <?php if( have_rows('list-imgWedding') ): ?>
            <?php while( have_rows('list-imgWedding') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>
            <div class="item">
                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">	
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
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

	                $image3 = get_sub_field('img-detail');
	                $picture3 = $image3['sizes']['thumbnail']           
	                ?>
	            <h1 class="text-invitation"><?php echo get_field('title3'); ?></h1>

	            <div class="col-lg-4 col-12">

	                <img class="img-invitation" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

	                <img src="<?php echo $picture3;?>" alt="<?php echo $image3['alt'];?>">

	                <p class="text-invitation5"><?php echo get_sub_field('name-groom'); ?></p>
	            </div>

	            <div class="col-lg-4 col-12">
	            	<p class="text-invitation2"><?php echo get_sub_field('note'); ?></p>

	            	<p class="text-invitation3"><?php echo get_sub_field('date'); ?></p>

	            	<p class="text-invitation4"><?php echo get_sub_field('d-m-y'); ?></p>
	            </div>

	            <div class="col-lg-4 col-12">

	            	<img class="img-invitation" src="<?php echo $picture2;?>" alt="<?php echo $image2['alt'];?>">

	            	<img src="<?php echo $picture3;?>" alt="<?php echo $image3['alt'];?>">

	                <p class="text-invitation5"><?php echo get_sub_field('name-bride'); ?></p>
	            </div>

	            <?php endwhile; ?>
	        <?php endif; ?>
		</div>

	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="row">
					<?php if( have_rows('list-img') ): ?>
				        <?php while( have_rows('list-img') ): the_row(); 
				            $image = get_sub_field('img');
				            $picture = $image['sizes']['thumbnail'];               
				            ?>

				            <div class="col-lg-4 col-12">
				            	<img class="img-template" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
				            </div>

						<?php endwhile; ?>
				    <?php endif; ?>
				</div>
			</div>

			<div class="col-lg-4 col-12">
				<!-- phần breadcrumb -->
				<div class="bg-breadcrumb">
					<h1 class="text-breadcrumb">Chọn mẫu</h1>

					<?php wp_nav_menu (
					    array('theme_location' => 'menu-6', 'menu_class' => 'breadcrumb-invitation3'));?>
				</div>

			</div>
		</div>
	</div>

<?php get_footer(); ?>