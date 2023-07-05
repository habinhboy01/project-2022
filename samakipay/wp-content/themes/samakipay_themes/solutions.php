<?php
/*

	Template Name: Solutions

*/
get_header(); ?>
	
	<div class="container">
    	<div class="intro-about">
    		<?php 
                $image = get_field('img-title');
                if( !empty( $image ) ): ?>
                    <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
    
            <div class="bg-intro2 bg-about">
    
            	<!-- <h1 class="text-about"><?php echo get_field('name-project'); ?></h1> -->
    
            </div>
    	</div>
    </div>

    <!--OUR PROCESS-->
    
    <div class="container bg-benefits">
        
        <h1 class="text-benefits"><?php echo get_field('our_process'); ?></h1>
        
        <div class="row">
            <?php if( have_rows('list_our_process') ): ?>
                <?php while( have_rows('list_our_process') ): the_row(); 
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; 
                    ?>
                    
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="row our_process">
                                <div class="col-lg-4 col-12">
                                    <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                </div>
                                
                                <div class="col-lg-8 col-12">
                                    <h1 class="text-benefits2"><?php echo get_sub_field('title'); ?></h1>
                                </div>
                            </div>
                        </div>
                    
                <?php endwhile; ?>
            <?php endif; ?>
        
        </div>
    </div>
	
	<div class="container bg-benefits">
	    <h1 class="text-benefits"><?php echo get_field('solutions'); ?></h1>
	    
	    <p class="text-benefits3"><?php echo get_field('description-solutions'); ?></p>
	    
	    <div class="row list-construction3">
	        <?php if (have_rows('list-img')) : ?>
	            <?php while (have_rows('list-img')) : the_row();
	                $image = get_sub_field('img');
                	$picture = $image['sizes']['thumbnail']; 
	            ?>
	                <div class="col-lg-4 col-md-6 col-12">
					    <img class="img-construction" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                </div>

	    		<?php endwhile; ?>
			<?php endif; ?>
	    </div>

	</div>

<?php get_footer(); ?>