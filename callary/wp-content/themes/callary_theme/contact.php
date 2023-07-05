<?php 
/*

	Template Name: contact page

*/
get_header(); ?>

	<div class="bg-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.31975053471!2d106.68271701411653!3d10.786804061953294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2c53a767f5%3A0xe600839adcaa2e52!2zMTIzIEzDvSBDaMOtbmggVGjhuq9uZywgVsO1IFRo4buLIFPDoXUsIFF14bqtbiAzLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1639910812892!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>

	<div class="container bg-discount">
		<div class="row">
			<div class="col-lg-8 col-12">
				<h1 class="text-icon">
		    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">

		    		<?php echo get_field('header-contact'); ?>

		    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">
		    			
		    	</h1>
		    	<p class="text-discount2"><?php echo get_field('content-contact'); ?></p>

		    	<div class="bg-contact">
		    		<p><?php the_field('content-contact2'); ?></p>

		    		<div class="bg-input">
    					<?php echo do_shortcode( '[contact-form-7 id="313" title="Contact form 1"]' ); ?>
    				</div>
		    	</div>
			</div>

			<div class="col-lg-4 col-12">
				<h1 class="text-icon">
		    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">

		    		<?php echo get_field('header-info'); ?>

		    		<img src="<?php bloginfo('template_directory') ?>/images/callary-icon.png">
		    			
		    	</h1>
		    	<p class="text-discount2"><?php echo get_field('contact-info'); ?></p>

		    	<div class="bg-contact">
			    	<ul class="list-map">
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

					<ul class="list-map2">
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
		</div>
	</div>

<?php get_footer(); ?>