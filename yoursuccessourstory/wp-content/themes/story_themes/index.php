<?php
/*

Template Name: Home page

*/

get_header(); ?>
	
	<div class="container">
		<div class="bg-story">
			<img src="<?php bloginfo('template_directory') ?>/images/img16.png">

			<h1 class="text-story"><?php echo get_field('titile-branch'); ?></h1>

			<img src="<?php bloginfo('template_directory') ?>/images/img15.png">
		</div>
	</div>

	<!-- business -->

	<div class="container">
		<div class="row bg-business">
			<div class="col-lg-6 col-md-6 col-12">

				<img src="<?php bloginfo('template_directory') ?>/images/img17.png">

				<h1 class="text-business">
					Business with 
					<br>
					<span class="color-text">No</span> Capital, 
					<br>
					<span class="color-text">No</span class="color-text"> Investment, 
					<br>
					<span class="color-text">No</span> Selling. <img src="<?php bloginfo('template_directory') ?>/images/img18.png">
				</h1>

			</div>

			<div class="col-lg-6 col-md-6 col-12">
			    <?php 
                $image = get_field('img-business');
                if( !empty( $image ) ): ?>
                    <img class="img-business" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
			</div>
		</div>
	</div>

	<!-- Reasons to join -->

	<div class="bg-reasons">

		<h1 class="text-reasons"><?php echo get_field('title-reasons'); ?></span></h1>

		<ul class="list-reasons">
			<?php if( have_rows('list-reasons') ): ?>
                <?php while( have_rows('list-reasons') ): the_row(); 
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; ?>

                    <li>
                    	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"> 

                    	<p><?php the_sub_field('text'); ?></p>
                    </li>

                <?php endwhile; ?>
            <?php endif; ?>
		</ul>

		<div class="training">
			<i class="fas fa-quote-left"></i>

			<h1><?php echo get_field('trainings'); ?></h1>

			<i class="fas fa-quote-right"></i>
		</div>

	</div>

	<!-- mission -->

	<div class="container bg-mission">
		<?php 
        $image = get_field('img-mission');
        if( !empty( $image ) ): ?>
            <img class="img-mission" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="mission">
        	<img src="<?php bloginfo('template_directory') ?>/images/img6.png">

        	<h1>our mission <i class="fas fa-arrow-right"></i> <span class="color-text">OUR STORY</span></h1>

        	<img src="<?php bloginfo('template_directory') ?>/images/img7.png">

        </div>
	</div>

	<!-- Register for a FREE  -->

	<div class="bg-register">
		<div class="container">
			<h1><?php echo get_field('register'); ?></h1>

			<p><?php echo get_field('description-register'); ?></p>

			<?php if( have_rows('btn-register') ): ?>
                <?php while( have_rows('btn-register') ): the_row(); 
                	$link = get_sub_field('link'); ?>

                	<a class="btn-register" href="<?php echo $link ;?>"><?php the_sub_field('text'); ?></a>

                <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</div> 

	<!-- description -->

 	<div class="bg-description">
		<img class="img-description2" src="<?php bloginfo('template_directory') ?>/images/img13.png">

		<div class="container bg-description2">
			<?php if( have_rows('description-page') ): ?>
            	<?php while( have_rows('description-page') ): the_row(); ?>
            		
            		<p class="text-description"><?php the_sub_field('text'); ?></p>

            	<?php endwhile; ?>
        	<?php endif; ?>
		</div>

		<img class="img-description3" src="<?php bloginfo('template_directory') ?>/images/img12.png">
	</div>


	<!-- To Enhance the Lives of those We Touch By Helping People Reach Their Goals -->

	<div class="bg-enhance">
		<img class="img-enhance2" src="<?php bloginfo('template_directory') ?>/images/img11.png">

		<div class="container bg-enhance2">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<?php 
			        $image = get_field('img-enhance');
			        if( !empty( $image ) ): ?>
			            <img class="img-enhance" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			        <?php endif; ?>
				</div>

				<div class="col-lg-6 col-md-6 col-12">
					<div class="title-enhance">
						<img src="<?php bloginfo('template_directory') ?>/images/img1.png">

						<h1>Our <span class="color-text">Mission</span>:</h1>

						<h1>
							<?php echo get_field('title-enhance'); ?>

							<img src="<?php bloginfo('template_directory') ?>/images/img5.png">
						</h1>
					</div>
						
				</div>
			</div>
		</div>

		<img class="img-enhance3" src="<?php bloginfo('template_directory') ?>/images/img8.png">
	</div>

	<!-- workshop -->

	<div class="bg-workshop">
		<img class="img-workshop" src="<?php bloginfo('template_directory') ?>/images/img10.png">

		<div class="container">
			<h1 class="text-workshop"><?php echo get_field('workshop'); ?></h1>

			<p class="text-workshop2"><?php echo get_field('description-workshop'); ?></p>

			<div class="form-workshop">
				<?php echo do_shortcode( '[contact-form-7 id="11" title="Contact form 1"]' ); ?>
			</div>
		</div>

		<img class="img-workshop2" src="<?php bloginfo('template_directory') ?>/images/img9.png">
	</div>

	<!-- copyright -->

	<div class="container copyright">
		<p class="line"></p>

		<p class="text-copyright"><?php echo get_field('copyright'); ?></p>
	</div>

<?php get_footer(); ?>