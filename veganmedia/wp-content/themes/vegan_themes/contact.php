<?php

/*

Template Name: contact page

*/

get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12">
				<div class="bg-contact">
					<h1><?php echo get_field('title'); ?></h1>

					<p>
						<a href="">
							<i class="fas fa-home color-icon"></i> <?php echo get_field('info'); ?>
						</a>
					</p>

					<p>
						<a href="tel:+1900882911">
							<i class="fas fa-phone-alt color-icon2"></i> <?php echo get_field('info2'); ?>
						</a>
					</p>

					<p>
						<a href="mailto:info@missvegan.com">
							<i class="fas fa-envelope color-icon3"></i> <?php echo get_field('info3'); ?>
						</a>
					</p>
				</div>
			</div>

			<div class="col-lg-6 col-12">
				<div class="bg-contact">
					<h1><?php echo get_field('title2'); ?></h1>

					<div class="bg-input">
	    				<?php echo do_shortcode( '[contact-form-7 id="368" title="Contact form 1"]' ); ?>
	    			</div>
	    		</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>