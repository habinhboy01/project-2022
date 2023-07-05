<?php
/*

Template Name: Home page

*/
get_header(); ?>

	<div class="owl-carousel owl-theme carousel_1 bg-intro">

        <?php if( have_rows('list-slider') ): ?>
            <?php while( have_rows('list-slider') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                $link = get_sub_field('link');
                $social_icon = get_sub_field('icon');
                ?>
            <div class="item">
                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                <div class="list-intro">
                	<h1><?php echo get_field('name-restaurant'); ?></h1>

                	<p class="text-intro"><?php echo get_field('experience'); ?></p>

	                <a href="<?php echo $link['url'];?>">
					    <p class="text-intro2"><?php echo $social_icon ?> <?php echo get_sub_field('content-event'); ?></p>
					</a>
				</div>	
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <!-- ỨU ĐÃI -->
    <div class="container bg-discount">
    	<h1 class="text-icon">
    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">

    		<?php echo get_field('header-discount'); ?>

    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">
    			
    	</h1>
    	<p class="text-discount2"><?php echo get_field('content-discount'); ?></p>

    	<div class="row">
	    	<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 2,
					'cat' => 8,
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
				<div class="col-lg-6 col-12">
					<div class="content-discount" data-aos="zoom-in" data-aos-duration="1000">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?></a>

						<div class="ribbon">
							<p class="text-rotate">TIỆC CƯỚI</p>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>

			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 2,
					'cat' => 10,
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
				<div class="col-lg-6 col-12">
					<div class="content-discount" data-aos="zoom-in" data-aos-duration="1000">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?></a>

						<div class="ribbon">
							<p class="text-rotate">TIỆC CƯỚI</p>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
 
		</div>
    </div>

    <!-- Trang trí nổi bật -->
    <div class="container bg-discount">
    	<h1 class="text-icon">
    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">

    		<?php echo get_field('header-decor'); ?>

    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">
    			
    	</h1>
    	<p class="text-discount2"><?php echo get_field('content-decor'); ?></p>

    	<div class="row bg-discount">
    		<div class="col-lg-7 col-12" data-aos="fade-down" data-aos-duration="2000">
    			<div class="content-decor display-decor">
	    			<?php if( have_rows('list-decor') ): ?>
					  	<?php while( have_rows('list-decor') ): the_row(); 
					  	    $image = get_sub_field('img');
					  	    $picture = $image['sizes']['thumbnail']; 
					  	    $link = get_sub_field('link');
					  	    ?>
					        <a href="<?php echo $link['url'];?>">
					           	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					        </a>
					  	<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<div class="content-decor">
	    			<?php if( have_rows('list-decor2') ): ?>
					  	<?php while( have_rows('list-decor2') ): the_row(); 
					  	    $image = get_sub_field('img');
					  	    $picture = $image['sizes']['thumbnail']; 
					  	    $link = get_sub_field('link');
					  	    ?>
					        <a href="<?php echo $link['url'];?>">
					           	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					        </a>
					  	<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<div class="content-decor">
	    			<?php if( have_rows('list-decor3') ): ?>
					  	<?php while( have_rows('list-decor3') ): the_row(); 
					  	    $image = get_sub_field('img');
					  	    $picture = $image['sizes']['thumbnail']; 
					  	    $link = get_sub_field('link');
					  	    ?>
					        <a href="<?php echo $link['url'];?>">
					           	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					        </a>
					  	<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<div class="content-decor">
	    			<?php if( have_rows('list-decor4') ): ?>
					  	<?php while( have_rows('list-decor4') ): the_row(); 
					  	    $image = get_sub_field('img');
					  	    $picture = $image['sizes']['thumbnail']; 
					  	    $link = get_sub_field('link');
					  	    ?>
					        <a href="<?php echo $link['url'];?>">
					           	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					        </a>
					  	<?php endwhile; ?>
					<?php endif; ?>
				</div>
    		</div>

    		<div class="col-lg-5 col-12" data-aos="fade-up" data-aos-duration="2000">
    			<div class="content-decor2 display-decor">
    				<h1 class="text-decor"><?php echo get_field('header-decor1'); ?></h1>

    				<p class="text-decor"><?php echo get_field('content-decor1'); ?></p>
    			</div>

    			<div class="content-decor2">
    				<h1 class="text-decor"><?php echo get_field('header-decor2'); ?></h1>

    				<p class="text-decor"><?php echo get_field('content-decor2'); ?></p>
    			</div>

    			<div class="content-decor2">
    				<h1 class="text-decor"><?php echo get_field('header-decor3'); ?></h1>

    				<p class="text-decor"><?php echo get_field('content-decor3'); ?></p>
    			</div>

    			<div class="content-decor2">
    				<h1 class="text-decor"><?php echo get_field('header-decor4'); ?></h1>

    				<p class="text-decor"><?php echo get_field('content-decor4'); ?></p>
    			</div>

    		</div>	
    	</div>
    </div>

    <!-- Sảnh tiệc -->
    <div class="container bg-discount">
    	<h1 class="text-icon">
    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">

    		<?php echo get_field('party-hall'); ?>

    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">
    			
    	</h1>
    	<p class="text-discount2"><?php echo get_field('content-party-hall'); ?></p>

    	<div class="row bg-discount">
    		<?php if( have_rows('list-party-hall') ): ?>
	            <?php while( have_rows('list-party-hall') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                $link = get_sub_field('link');
	                ?>
	            <div class="col-lg-6 col-12" data-aos="fade-down" data-aos-duration="2000">
	            	<div class="party-hall">
		            	<a href="<?php echo $link['url'];?>">
		                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                </a>

						<p class="text-hall"><?php echo get_sub_field('name-party-hall'); ?></p>
					</div>
	            </div>
	            <?php endwhile; ?>
	        <?php endif; ?>
    	</div>
    </div>

    <!-- link youtube -->
    <div class="bg-youtube">
    	<?php 
			$image = get_field('bg-youtube');
			if( !empty( $image ) ): ?>
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>

		<div class="video-youtube">
			<span id="myImg"><i class="fa fa-play"></i></span>
        </div>
    </div>

    <div id="myModal" class="modal">
    	<span class="close">&times;</span>
    	
    	<div class="modal-content" id="img01">
	    	<iframe width="560" height="315" src="https://www.youtube.com/embed/lGI5u9Pl30c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    </div>
	</div>

    <!-- comment khach hàng -->
    <div class="container bg-discount">
    	<h1 class="text-icon">
    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">

    		<?php echo get_field('comment-customer'); ?>

    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">
    			
    	</h1>
    	<p class="text-discount2"><?php echo get_field('content-comment-customer'); ?></p>

    	<div class="row bg-discount">
    		<div class="owl-carousel owl-theme carousel_2">
    			<?php if( have_rows('list-customer') ): ?>
		            <?php while( have_rows('list-customer') ): the_row(); 
		                $image = get_sub_field('img-customer');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>
		            <div class="item ">
		            	<div class="comment-customer">
			                <img id="img-customer" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			               	<i class="fas fa-quote-left icon-comment1"></i>
			                <div class="author">
				                <h1 class="text-name"><?php echo get_sub_field('name-customer'); ?></h1>

				                <p class="text-position"><?php echo get_sub_field('position'); ?></p>

				                <div class="rating">
				                	<i class="fas fa-star"></i>
				                	<i class="fas fa-star"></i>
				                	<i class="fas fa-star"></i>
				                	<i class="fas fa-star"></i>
				                	<i class="fas fa-star"></i>
				                </div>

								<p class="text-comment"><?php the_sub_field('comment'); ?></p>
							</div>
							<i class="fas fa-quote-right icon-comment2"></i>
						</div>
		            </div>
		            <?php endwhile; ?>
		        <?php endif; ?>
    		</div>
    	</div>
    </div>

    <!-- tin tức mới -->
    <div class="container bg-discount">
    	<h1 class="text-icon">
    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">

    		<?php echo get_field('news-new'); ?>

    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">
    			
    	</h1>
    	<p class="text-discount2"><?php echo get_field('content-news'); ?></p>

    	<div class="row bg-discount">
    		<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 6,
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
				<div class="col-lg-6 col-12">
					<div class="row bg-news">
						<div class="col-lg-5 col-12">
							<div class="content-news">
								<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?></a>
							</div>
						</div>

						<div class="col-lg-7 col-12">
							<div class="content-news2">
								<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>

								<p class="text-date"><i class="far fa-clock"></i> <?php echo get_the_date(); ?></p>

								<div class="text-news"><?php the_excerpt(); ?></div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
    	</div>	
    </div>

    <!-- liên hệ ngay -->
    <div class="container bg-discount">
    	<h1 class="text-icon">
    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">

    		<?php echo get_field('contact'); ?>

    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">
    			
    	</h1>
    	<p class="text-discount2"><?php echo get_field('content-contact'); ?></p>

    	<div class="row bg-discount">
    		<div class="col-lg-6 col-12 img-map">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3295.7404675108373!2d106.68279724294113!3d10.786937370248271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2c53a767f5%3A0xe600839adcaa2e52!2zMTIzIEzDvSBDaMOtbmggVGjhuq9uZywgVsO1IFRo4buLIFPDoXUsIFF14bqtbiAzLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1639756789460!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    		</div>

    		<div class="col-lg-6 col-12">
    			<ul class="list-contact">
    				<li>
    					<a href="tel:(+84 28) 38 43 5556">
							<i class="fas fa-phone-alt"></i> 
							<?php echo get_field('phone','option'); ?>
						</a>
    				</li>

    				<li>
    					<a href="mailto:event@Callary.vn">
							<i class="far fa-envelope"></i> 
							<?php echo get_field('email','option'); ?>
						</a>
    				</li>
    			</ul>

    			<div class="bg-input">
    				<?php echo do_shortcode( '[contact-form-7 id="313" title="Contact form 1"]' ); ?>
    			</div>
    		</div>

    	</div>	
    </div>

<?php get_footer(); ?>