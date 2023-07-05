<?php
/*

Template Name: ladipage page

*/

get_header(); ?>

	<div class="popup">
		<div class="popup2">
			<span class="close-popup"><i class="fas fa-times"></i></span>

			<?php 
	            $image = get_field('popup');
	            if( !empty( $image ) ): ?>
	                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	        <?php endif; ?>

	        <div class="popup3">
	        	<h1 class="text-brand">ĐĂNG KÝ</h1>

	        	<p class="text-contact4">Tham dự sự kiện sức khoẻ & âm nhạc dành cho giới thượng lưu</p>

	        	<?php echo do_shortcode( '[contact-form-7 id="8" title="Contact form 1"]' ); ?>
	        </div>
		</div>
	</div>
	
	<div class="bg-intro">
		<?php 
            $image = get_field('img-intro');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        
	</div>

	<!-- DRIP HYDRATION -->

	<div id="1" class="container bg-brand">
		<h1 class="text-brand"><?php echo get_field('brand-drip'); ?></h1>

		<p class="text-brand2"><?php echo get_field('description-drip'); ?></p>

		<?php 
            $image = get_field('img-brand');
            if( !empty( $image ) ): ?>
                <img class="img-brand" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="row">
        	<div class="col-lg-5 col-12">
        		<?php 
		            $image = get_field('img-brand2');
		            if( !empty( $image ) ): ?>
		                <img class="img-brand2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		        <?php endif; ?>
        	</div>

        	<div class="col-lg-7 col-12">
        		<?php if( have_rows('content-brand') ): ?>
	                <?php while( have_rows('content-brand') ): the_row(); ?>

	                	<p class="content-brand">
	                		<?php echo get_sub_field('content'); ?>
	                	</p>
		                
	                <?php endwhile; ?>
	            <?php endif; ?>
        	</div>
        </div>
	</div>

	<!-- MANG ÂM NHẠC - HOA TƯƠI VÀO CÂU CHUYỆN CHĂM SÓC SỨC KHOẺ -->
	<div id="2">
		<div class="bg-story">
			<?php 
	            $image = get_field('img-health');
	            if( !empty( $image ) ): ?>
	                <img class="img-story" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	        <?php endif; ?>

			<div class="container bg-story2">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="content-story">
							<h1 class="text-story"><?php echo get_field('story-health'); ?></h1>

							<?php if( have_rows('content-health') ): ?>
				                <?php while( have_rows('content-health') ): the_row(); ?>

				                	<p class="content-brand">
				                		<?php echo get_sub_field('content'); ?>
				                	</p>
					                
				                <?php endwhile; ?>
				            <?php endif; ?>
						</div>
					</div>

					<div class="col-lg-6 col-12">
						<div class="row content-story2">

							<?php if( have_rows('img-story') ): ?>
				                <?php while( have_rows('img-story') ): the_row(); 
				                    $image = get_sub_field('img');
				                    $picture = $image['sizes']['thumbnail']; 
				                    ?>

					                <div class="col-lg-6 col-md-6 col-6">
					                    <img class="img-story2" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					                </div>
					                
				                <?php endwhile; ?>
				            <?php endif; ?>

				        </div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg-story3">
			<?php if( have_rows('img-story2') ): ?>
	            <?php while( have_rows('img-story2') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                               
	            <?php endwhile; ?>
	        <?php endif; ?>
		</div>
	</div>

	<!-- TẬN HƯỞNG ĐẶC QUYỀN VÔ CÙNG HẤP DẪN   -->
	<div id="3" class="container bg-privilege">
		<h1 class="text-privilege"><?php echo get_field('privilege'); ?></h1>

		<div class="row">
			<?php if( have_rows('img-privilege') ): ?>
	            <?php while( have_rows('img-privilege') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="col-lg-6 col-12">
	                	<div class="content-privilege">
	                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                	</div>

	                	<p class="text-privilege2"><?php echo the_sub_field('text'); ?></p>
	                	
	                </div>
	                               
	            <?php endwhile; ?>
	        <?php endif; ?>
		</div>

		<div class="content-privilege2">
			<p><i class="fas fa-circle circle"></i> <?php echo get_field('option-privilege'); ?></p>

			<p><i class="fas fa-circle circle"></i> <?php echo get_field('option-privilege2'); ?></p>
		</div>
	</div>

	<!-- GẶP GỠ HƠN 20 NGÔI SAO HÀNG ĐẦU SHOWBIZ -->
	<div id="4" class="bg-meet">
		<div class="bg-meet2">
			<div class="container">
				<h1 class="text-contact"><?php echo get_field('meet-star'); ?></h1>

				<div class="owl-carousel owl-theme carousel_1">
					<?php if( have_rows('list-star') ): ?>
			            <?php while( have_rows('list-star') ): the_row(); 
			                $image = get_sub_field('img');
			                $picture = $image['sizes']['thumbnail']; 
			                ?>

			                <div class="item">
			                	<img id="img-star" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			                	<div class="text-star">
				                	<p><?php echo get_sub_field('text'); ?></p>

									<p><?php echo get_sub_field('name'); ?></p>
								</div>
			                </div>
			                               
			            <?php endwhile; ?>
			        <?php endif; ?>
				</div>

				<div class="content-meet">
					<p><i class="fas fa-circle circle"></i> <?php echo get_field('description-meet'); ?></p>

					<p><i class="fas fa-circle circle"></i> <?php echo get_field('description-meet2'); ?></p>

					<p><i class="fas fa-circle circle"></i> <span class="text-star2"><?php echo get_field('description-meet3'); ?></span></p>
				</div>
			</div>
		</div>
	</div>

	<!-- GIAO LƯU TRỰC TIẾP CÙNG CHUYÊN GIA SỨC KHOẺ LỪNG DANH THẾ GIỚI -->
	<div id="5" class="bg-exchange">
		<div class="container">
			<h1 class="text-privilege"><?php echo get_field('exchange'); ?></h1>

			<div class="row">
				<?php if( have_rows('list-exchange') ): ?>
		            <?php while( have_rows('list-exchange') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="col-lg-6 col-12">
		                	<div class="content-privilege content-exchange">
		                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                	</div>

		                	<p class="text-exchange"><?php echo the_sub_field('name'); ?></p>

		                	<p class="text-exchange2"><?php echo the_sub_field('description'); ?></p>
		                	
		                </div>
		                               
		            <?php endwhile; ?>
		        <?php endif; ?>
			</div>
		</div>
	</div>

	<!-- LIÊN HỆ VỚI CHÚNG TÔI -->

	<div id="6" class="bg-contact">
		<div class="container">
			<h1 class="text-contact"><?php echo get_field('contact'); ?></h1>

			<div class="row">
				<div class="col-lg-2 col-12 border-contact">
					<p class="text-contact2"><?php echo get_field('hotline'); ?></p>

					<a href="tel:+0982 50 6666" class="text-contact3"><?php echo get_field('phone'); ?></a>
				</div>

				<div class="col-lg-4 col-12 border-contact">
					<p class="text-contact2"><?php echo get_field('address'); ?></p>

					<p class="text-contact3"><?php echo get_field('info-address'); ?></p>
				</div>

				<div class="col-lg-4 col-12 border-contact">
					<p class="text-contact2"><?php echo get_field('clinic'); ?></p>

					<p class="text-contact3"><?php echo get_field('info-clinic'); ?></p>
				</div>

				<div class="col-lg-2 col-12">
					<p class="text-contact2"><?php echo get_field('website'); ?></p>

					<a href="https://driphydration.vn/" class="text-contact3"><?php echo get_field('address-clinic'); ?></a>
				</div>
			</div>

			<div class="box-signUp">
				<h1 class="text-privilege color-text"><?php echo get_field('sign-up'); ?></h1>

				<p class="text-contact4"><?php echo get_field('description-contact'); ?></p>

				<?php echo do_shortcode( '[contact-form-7 id="8" title="Contact form 1"]' ); ?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer" data-aos="fade-up" data-aos-duration="3000">
		<div class="container">
			<?php 
	            $image = get_field('logo-footer');
	            if( !empty( $image ) ): ?>
	                <img class="logo-footer" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	        <?php endif; ?>

	        <ul class="list-social">
	        	<li class="video-footer"><i class="fas fa-play"></i> Xem Video</li>

		        <?php if( have_rows('social-footer') ): ?>
		            <?php while( have_rows('social-footer') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <li>
		                	<a href="<?php echo get_sub_field('link'); ?>">
		                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                	</a>
		                </li>
		                               
		            <?php endwhile; ?>
		        <?php endif; ?>

	        </ul>
		</div>

		<a class="back-top" href="#"><img src="<?php bloginfo('template_directory') ?>/images/icon1.png"></a>
		
		<div class="btnContact">
    		<a class="bt-call" href="tel:+0982 50 6666">
    			<i><img src="<?php bloginfo('template_directory') ?>/images/icon_phone.png"></i>
    			
    			<span class="item_none">GỌI NGAY BÁC SĨ</span>
    		</a>
    	</div>
	</div>

	<div class="video-footer2">
		<video controls autoplay loop muted>
			<?php
				$file = get_field('video-footer');
				if( $file ): ?>
				    <source src="<?php echo $file['url']; ?>">
			<?php endif; ?>		
		</video>
	</div>

	<div class="footer2">
		<div class="container">
			<?php 
	            $image = get_field('logo-footer');
	            if( !empty( $image ) ): ?>
	                <img class="logo-footer" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	        <?php endif; ?>

	        <ul class="list-social">

		        <?php if( have_rows('social-footer') ): ?>
		            <?php while( have_rows('social-footer') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <li>
		                	<a href="<?php echo get_sub_field('link'); ?>">
		                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                	</a>
		                </li>
		                               
		            <?php endwhile; ?>
		        <?php endif; ?>

	        </ul>
		</div>

		<div class="btnContact">
    		<a class="bt-call" href="tel:+0982 50 6666">
    			<i><img src="<?php bloginfo('template_directory') ?>/images/icon_phone.png"></i>
    			
    			<span class="item_none">GỌI NGAY BÁC SĨ</span>
    		</a>
    	</div>
	</div>


<?php get_footer(); ?>