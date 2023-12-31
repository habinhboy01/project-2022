<?php
/*

	Template Name: Dynamic UPS

*/
get_header(); ?>
    
    <div class="container">
    	<div class="intro-about">
    		<?php 
                $image = get_field('img-intro-dynamic');
                if( !empty( $image ) ): ?>
                    <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
    
            <div class="bg-intro2 bg-about">
    
            	<!--<h1 class="text-about"><?php echo get_field('title-dynamic'); ?></h1>-->
    
            </div>
    	</div>
    </div>

	<!-- HỆ THỐNG UPS ĐỘNG -->

	<div class="bg-benefits">
		<div class="container">
			<h1 class="text-benefits"><?php echo get_field('dynamic_ups'); ?></h1>

		    <ul class="list-benefits">
	    		<?php if( have_rows('content_dynamic_ups') ): ?>
	            	<?php while( have_rows('content_dynamic_ups') ): the_row(); ?>

	            		<li><?php the_sub_field('content'); ?></li>

	           	    <?php endwhile; ?>
	        	<?php endif; ?>
	    	</ul>

		    <?php 
	            $image = get_field('detail-dynamic');
	            if( !empty( $image ) ): ?>
	                <img class="image-diesel" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	        <?php endif; ?>

	        <!-- NGUYÊN LÝ HOẠT ĐỘNG CỦA HỆ THỐNG UPS ĐỘNG -->

	        <div class="dynamic-upc">
		       	<h1 class="text-benefits"><?php echo get_field('dynamic_ups_work'); ?></h1>

			    <ul class="list-benefits">
		    		<?php if( have_rows('content_dynamic_ups_work') ): ?>
		            	<?php while( have_rows('content_dynamic_ups_work') ): the_row(); ?>

		            		<li><?php the_sub_field('content'); ?></li>

		           	    <?php endwhile; ?>
		        	<?php endif; ?>
		    	</ul>

			   	<?php 
		            $image = get_field('img_dynamic_ups_work');
		            if( !empty( $image ) ): ?>
		                <img class="image-diesel" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		        <?php endif; ?>
	        </div>

	        <!-- cơ chế hoạt động -->
	        <div class="row dynamic-upc">

		        <?php if( have_rows('mechanism-work') ): ?>
		            <?php while( have_rows('mechanism-work') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; ?>

		                <div class="col-lg-6 col-12 content-benefits2">
		                	<img class="detail-dynamic detail-dynamic2" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"> 			                	
		                	<h2 class="text-benefits2"><?php echo get_sub_field('title'); ?></h2>

		                	<p class="text-benefits3"><?php the_sub_field('text'); ?></p>
		               
		                </div>

	           	    <?php endwhile; ?>
		        <?php endif; ?>

		     </div>


		     <div class="dynamic-upc2">
		     	<?php if( have_rows('mechanism-work2') ): ?>
	            	<?php while( have_rows('mechanism-work2') ): the_row(); ?>

	            		<div class="dynamic-upc3">
		            		<h2 class="text-benefits2"><?php echo get_sub_field('title'); ?></h2>

		            		<p class="text-benefits3"><?php the_sub_field('content'); ?></p>
		            	</div>

	           	    <?php endwhile; ?>
	        	<?php endif; ?>
		     </div>
		</div>
	</div>
	
	<div class="container">
        <div class="about-yotube">
    	    <?php the_field('youtube') ?>
    	</div>
    </div>

    <!--Download Brochures-->
    
    <div class="container bg-benefits">
        
        <h1 class="text-benefits"><?php echo get_field('download_brochures'); ?></h1>
        
        <div class="row">
            <?php if( have_rows('list_download_brochures') ): ?>
                <?php while( have_rows('list_download_brochures') ): the_row(); 
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; 
                    ?>
                    
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="row download-brochures">
                                <div class="col-lg-4 col-12">
                                    <img class="img-Brochures" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                </div>
                                
                                <div class="col-lg-8 col-12">
                                    <h1 class="text-benefits2"><?php echo get_sub_field('title'); ?></h1>
                                    
                                    <?php
                                    $file = get_sub_field('link');
                                    if( $file ): ?>
                                        <a class="link-download" href="<?php echo $file['url']; ?>" target="_blank"><i class="fas fa-download"></i> Download</a>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                        </div>
                    
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>
