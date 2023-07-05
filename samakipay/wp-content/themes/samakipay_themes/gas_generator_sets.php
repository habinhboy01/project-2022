<?php
/*

	Template Name: Gas Generator sets

*/
get_header(); ?>
    
    <div class="container">
    	<div class="intro-about">
    		<?php 
                $image = get_field('img-intro-gas');
                if( !empty( $image ) ): ?>
                    <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
    
            <div class="bg-intro2 bg-about">
    
            	<!--<h1 class="text-about"><?php echo get_field('title-gas'); ?></h1>-->
    
            </div>
    	</div>
    </div>

	<div class="container">
		<?php 
	        $image = get_field('img-gas');
	        if( !empty( $image ) ): ?>
	            <img class="image-diesel" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	    <?php endif; ?>
	</div>


	<div class="bg-benefits">
		<div class="container">
			
			<!-- ưu diểm -->

			<h1 class="text-benefits"><?php echo get_field('gas_generator'); ?></h1>

		    <ul class="list-benefits">
	    		<?php if( have_rows('content_gas_generator') ): ?>
	            	<?php while( have_rows('content_gas_generator') ): the_row(); ?>

	            		<li><?php the_sub_field('content'); ?></li>

	           	    <?php endwhile; ?>
	        	<?php endif; ?>
	    	</ul>

		    <?php 
		        $image = get_field('img_gas_generator');
		        if( !empty( $image ) ): ?>
		            <img class="image-diesel" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		    <?php endif; ?>


		    <!-- GIẢI PHÁP TÍCH HỢP DẠNG CONTAINER -->

	    	<div class="row content-benefits">
	    		<h2 class="text-gas"><?php echo get_field('intergration_solutions'); ?></h2>

	    		<?php if( have_rows('container_intergration_solutions') ): ?>
		            <?php while( have_rows('container_intergration_solutions') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; ?>

		                <div class="col-lg-6 col-12 content-benefits2">
		                	<img class="img-benefits" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"> 			                	
		                	<h2 class="text-benefits2"><?php echo get_sub_field('title'); ?></h2>

		                	<p class="text-benefits3"><?php the_sub_field('content'); ?></p>
		               
		                </div>

	           	    <?php endwhile; ?>
	        	<?php endif; ?>

	        	<p class="text-gas"><?php echo get_field('time'); ?></p>
	    	</div>
		</div>
	</div>

	<!-- list sản phẩm -->

	<div class="container bg-benefits">
		<div class="row">

			<?php if( have_rows('product-gas') ): ?>
	            <?php while( have_rows('product-gas') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; ?>

	                <div class="col-lg-4 col-md-6 col-12">
	                	<img class="product-diesel" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"> 
	                </div>

	         	<?php endwhile; ?>
        	<?php endif; ?>

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