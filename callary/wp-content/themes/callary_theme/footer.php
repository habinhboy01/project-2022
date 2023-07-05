		<div class="container bg-footer1">
			<div class="row">
				<div class="col-lg-6 col-12 content-footer">
					<?php 
	                $image = get_field('logo-footer','option');
	                if( !empty( $image ) ): ?>
	                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	                <?php endif; ?>

	                <p class="text-footer"><?php echo get_field('restaurant','option'); ?></p>
				</div>

				<div class="col-lg-6 col-12 content-footer2">
					<h1 class="text-footer"><?php echo get_field('contact','option'); ?></h1>

					<ul class="list-footer">
						<li>
							<a href="https://www.google.com/maps/place/123+L%C3%BD+Ch%C3%ADnh+Th%E1%BA%AFng,+V%C3%B5+Th%E1%BB%8B+S%C3%A1u,+Qu%E1%BA%ADn+3,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7868041,106.682717,17z/data=!3m1!4b1!4m5!3m4!1s0x31752f2c53a767f5:0xe600839adcaa2e52!8m2!3d10.7867988!4d106.6849057">
								<i class="fas fa-map-marker-alt"></i>
								<?php echo get_field('address','option'); ?>
							</a>
						</li>

						<li>
							<a href="tel:(+84 28) 38 43 5556">
								<i class="fas fa-phone-alt"></i> 
								<?php echo get_field('phone-footer','option'); ?>
							</a>
						</li>

						<li>
							<a href="mailto:event@Callary.vn">
								<i class="far fa-envelope"></i> 
								<?php echo get_field('email-footer','option'); ?>
							</a>
						</li>	
					</ul>
				</div>
			</div>
		</div>


		<div class="container bg-footer2">
			<p class="text-footer"><?php echo get_field('people-design','option'); ?></p>

			<ul class="list-footer2">
				<?php if (have_rows('list-social', 'option')) : ?>
		            <?php while (have_rows('list-social', 'option')) : the_row();
		                $social_icon = get_sub_field('icon');
		                $social_link = get_sub_field('link-icon');

		            ?>
			            <li>
				            <a href="<?php echo $social_link; ?>">
				                    <?php echo $social_icon ?>
				            </a>
				        </li>
		            <?php endwhile; ?>
		        <?php endif; ?>
		    </ul>
		</div>
	</div>

		<!-- contact fixed -->
			<div class="contact-fixed1">
				<div class="contact-fixed2">
					<a class="item-footer" href="tel:(+84 28) 38 43 5556">
						<i class="fas fa-phone-alt"></i> 
						 <span class="text-footer2"><?php echo get_field('contact-phone','option'); ?></span>
					</a>

					<a class="item-footer" href="mailto:event@Callary.vn">
						<i class="far fa-envelope"></i> 
						 <span class="text-footer2"><?php echo get_field('contact-email','option'); ?></span>
					</a>

					<?php if (have_rows('contact-fixed', 'option')) : ?>
			            <?php while (have_rows('contact-fixed', 'option')) : the_row();
			                $social_icon = get_sub_field('icon-contact');
			                $social_link = get_sub_field('link-contact');

			            ?>

					    <a class="item-footer" href="<?php echo $social_link; ?>">
					        <?php echo $social_icon ?>
					        <span class="text-footer2"><?php echo get_sub_field('title-contact','option'); ?></span>
					    </a>
			            <?php endwhile; ?>
			        <?php endif; ?>
				</div>

			<!-- Button Back To Top -->
		    	<div class="btn-back-to-top" onclick="backToTop()" data-aos="fade-up" data-aos-duration="7000"><i class="fas fa-angle-up"></i></div>
			</div>

<?php wp_footer() ?>    
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- library animation js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/library-animation.js"></script>

<!-- My Js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="6eVZnThJ"></script>

<script>
  AOS.init();
</script>

</body>
</html>