<?php

/*

Template Name: Home page

*/

get_header(); ?>
	<div class="bg_intro">
		<div class="container">
			<div class="intro">
				<h1 class="text_intro"><?php echo get_field('intro_product'); ?></h1>

				<?php 
                    $image = get_field('name_product');
                    if( !empty( $image ) ): ?>
                        <img class="name_product" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

				<p class="text_intro2"><?php the_field('content_intro'); ?></p>

				<?php if( have_rows('btn_detail') ): ?>
		            <?php while( have_rows('btn_detail') ): the_row(); 
		                $link = get_sub_field('link');
		                ?>

		                <a class="btn_detail" href="<?php echo $link; ?>"><?php echo get_sub_field('detail'); ?></a>

		        	<?php endwhile; ?>
		        <?php endif; ?>
			</div>
		</div>

		<?php 
            $image = get_field('img_product');
             if( !empty( $image ) ): ?>
                <img class="intro_product" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
        <?php endif; ?>

        <?php 
            $image = get_field('img');
             if( !empty( $image ) ): ?>
                <img class="intro_product2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
        <?php endif; ?>
	</div>

	<!-- giới thiệu -->
	<div id="1">
		<div class="container bg_intro2">
			<h1><?php echo get_field('header_intro'); ?></h1>

			<p><?php the_field('info_product'); ?></p>
		</div>

		<div class="container">
			<div class="row bg_intro3">
				<?php
					$items = array(
					    'post_type' => 'product', 
					    );
					$loop = new WP_Query( $items );
					 while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?> 
					 
					<!--LOOP-->
					<div class="col-lg-7 col-12 img_product" data-aos="flip-left" data-aos-duration="2000"> 
					    <?php the_post_thumbnail();?>
					</div>

					<div class="col-lg-5 col-12" data-aos="flip-right" data-aos-duration="2000">

					    <?php
						/**
						 * Hook: woocommerce_single_product_summary.
						 *
						 * @hooked woocommerce_template_single_title - 5
						 * @hooked woocommerce_template_single_rating - 10
						 * @hooked woocommerce_template_single_price - 10
						 * @hooked woocommerce_template_single_excerpt - 20
						 * @hooked woocommerce_template_single_add_to_cart - 30
						 * @hooked woocommerce_template_single_meta - 40
						 * @hooked woocommerce_template_single_sharing - 50
						 * @hooked WC_Structured_Data::generate_product_data() - 60
						 */
						do_action( 'woocommerce_single_product_summary' );
						?>

					 <!--LOOP-->

		 		<?php endwhile;  wp_reset_query();  ?>
		 	</div>
		</div>
	</div>

	<!-- công dụng -->
	<div id="2" class="bg_effective">
		<div class="container">
			<h1 class="text_effective"><?php echo get_field('header_effective'); ?></h1>

			<?php 
		        $image = get_field('img_effective');
		        if( !empty( $image ) ): ?>
		            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		    <?php endif; ?>

			<div class="content_effective1 content_effective3" data-aos="zoom-in" data-aos-duration="2000">
				<h2><?php echo get_field('effective1'); ?></h2>

				<p class="text_effective2"><?php echo get_field('intro_effective1'); ?></p>

				<p><?php echo the_field('content_effective1'); ?></p>
			</div>

		    <div class="row bg_effective2">
		    	<div class="col-lg-4 col-12" data-aos="fade-down" data-aos-duration="400">
					<div class="content_effective1 content_effectiv2">
						<h2><?php echo get_field('effective2'); ?></h2>

						<p class="text_effective2"><?php echo get_field('intro_effective2'); ?></p>

						<p><?php echo the_field('content_effective2'); ?></p>
				    </div>

					<div class="content_effective1 content_effectiv2">
						<h2><?php echo get_field('effective3'); ?></h2>

						<p class="text_effective2"><?php echo get_field('intro_effective3'); ?></p>

						<p><?php echo the_field('content_effective3'); ?></p>
				    </div>
		    	</div>

		    	<div class="col-lg-4 col-12" data-aos="flip-right">
		    		<?php 
				        $image = get_field('img_product2');
				        if( !empty( $image ) ): ?>
				            <img class="img_product2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				    <?php endif; ?>
		    	</div>

		    	<div class="col-lg-4 col-12" data-aos="fade-up" data-aos-duration="400">
		    		<div class="content_effective1 content_effectiv2">
						<h2><?php echo get_field('effective4'); ?></h2>

						<p class="text_effective2"><?php echo get_field('intro_effective4'); ?></p>

						<p><?php echo the_field('content_effective4'); ?></p>
				    </div>

					<div class="content_effective1 content_effectiv2">
						<h2><?php echo get_field('effective5'); ?></h2>

						<p class="text_effective2"><?php echo get_field('intro_effective5'); ?></p>

						<p><?php echo the_field('content_effective5'); ?></p>
				    </div>
		    	</div>
		    </div>
		</div>
	</div>

	<!-- giấy phép -->
	<div id="3" class="container bg_license">
		<div class="row">
		 	<div class="col-lg-6 col-12" data-aos="zoom-in-down" data-aos-duration="3000">
		 		<h1 class="text_license"><?php echo get_field('license'); ?></h1>

		 		<p class="text_license2"><?php echo the_field('content_license'); ?></p>

		 		<?php if( have_rows('dowload') ): ?>
		            <?php while( have_rows('dowload') ): the_row(); 
		                $link = get_sub_field('link');
		                ?>

		                <a class="text_license3" href="<?php echo $link; ?>"><i class="fas fa-download"></i> <?php echo get_sub_field('text'); ?></a>

		        	<?php endwhile; ?>
		        <?php endif; ?>
		 	</div>

		 	<div class="col-lg-6 col-12" data-aos="zoom-in-up" data-aos-duration="3000">
		 		<div class="bg_license2">
			 		<?php 
				        $image = get_field('img_license');
				        if( !empty( $image ) ): ?>
				            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				    <?php endif; ?>
				</div>
		 	</div>
		 </div> 
	</div>

	<!-- map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.9778447770918!2d106.67839315872192!3d10.737898600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ff854d9fe29%3A0x4c607b0696ea0e73!2sTopaz%20City%20Block%20B2!5e0!3m2!1svi!2s!4v1642661100507!5m2!1svi!2s" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>

	<!-- liên hệ -->
	<div id="4" class="container bg_contact">
		<h1><?php echo get_field('contact'); ?></h1>

		<p class="text_contact1"><?php echo the_field('content_cantact'); ?></p>

		<div class="row">

			<div class="col-lg-6 col-12" data-aos="flip-right" data-aos-duration="3000">
				<h2 class="text_contact2"><?php echo get_field('name_company'); ?></h2>

				<ul>
					<?php if( have_rows('list_contact') ): ?>
			            <?php while( have_rows('list_contact') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail']; 
			                ?>

			                <li>
			                	<a href="https://goo.gl/maps/xRzdtpyUi8Cq7U6Y7">
			                		<ul class="list_contact1">
			                			<li><img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"></li>
			                			<li>
			                				<h3><?php echo get_sub_field('header'); ?></h3>
			                				<p><?php echo get_sub_field('address'); ?></p>
			                			</li>
			                		</ul>
			                	</a>
			                </li>

			        	<?php endwhile; ?>
			        <?php endif; ?>

			        <?php if( have_rows('list_contact2') ): ?>
			            <?php while( have_rows('list_contact2') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail']; 
			                ?>

			                <li>
			                	<a href="tel:+0916.51.59.57 - 0916.81.59.57">
			                		<ul class="list_contact1">
			                			<li><img class="img-contact" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"></li>
			                			<li>
			                				<h3><?php echo get_sub_field('header'); ?></h3>
			                				<p><?php echo get_sub_field('address'); ?></p>
			                			</li>
			                		</ul>
			                	</a>
			                </li>

			        	<?php endwhile; ?>
			        <?php endif; ?>

			        <?php if( have_rows('list_contact3') ): ?>
			            <?php while( have_rows('list_contact3') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail']; 
			                ?>

			                <li>
			                	<a href="mailto:tnhhcnshese@gmail.com">
			                		<ul class="list_contact1">
			                			<li><img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"></li>
			                			<li>
			                				<h3><?php echo get_sub_field('header'); ?></h3>
			                				<p><?php echo get_sub_field('address'); ?></p>
			                			</li>
			                		</ul>
			                	</a>
			                </li>

			        	<?php endwhile; ?>
			        <?php endif; ?>
			    </ul>

				<ul class="list_contact2">
					<?php if( have_rows('menu_2','option') ): ?>
			            <?php while( have_rows('menu_2','option') ): the_row(); 
			                $image = get_sub_field('icon');
			                $picture = $image['sizes']['thumbnail']; 
			                $link = get_sub_field('link_icon');
			                ?>

			                <li>
			                	<a href="<?php echo $link; ?>">
			                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
			                	</a>
			                </li>

			        	<?php endwhile; ?>
			        <?php endif; ?>
				</ul>
			</div>

			<div class="col-lg-6 col-12" data-aos="flip-left" data-aos-duration="2000">
				<div class="contact_form">
					<h4 class="text_contact2">Gửi tin nhắn</h4>
					<?php echo do_shortcode( '[contact-form-7 id="30" title="Contact form 1"]' ); ?>
				</div>
			</div>

		</div>
	</div>

<?php get_footer(); ?>