<?php
/*

Template Name: customer page

*/
get_header(); ?>

	<div class="bg-wedding">

		<?php 
			$image = get_field('bg-img');
			if( !empty( $image ) ): ?>
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>

		<span class="bg-wedding2"></span>

		<div class="container">
			<div class="inner">
				<h1><?php echo get_field('header'); ?></h1>

				<ul class="list-breadcrumb">
					<li>
						<?php if( have_rows('breadcrumb') ): ?>
				            <?php while( have_rows('breadcrumb') ): the_row(); 
				                $link = get_sub_field('link');
				            ?>
					            <a href="<?php echo $link['url'];?>">
							    	<?php echo get_sub_field('title'); ?>
								</a>
							<?php endwhile; ?>
	        			<?php endif; ?>
					</li>

					<li>/</li>

					<li>
						<?php if( have_rows('breadcrumb2') ): ?>
				            <?php while( have_rows('breadcrumb2') ): the_row(); 
				                $link = get_sub_field('link');
				            ?>
					            <a href="<?php echo $link['url'];?>">
							    	<?php echo get_sub_field('title'); ?>
								</a>
							<?php endwhile; ?>
	        			<?php endif; ?>
					</li>	
				</ul>
			</div>
		</div>
	</div>


	<div class="container bg-wedding3">
		<div class="row">
			<div class="col-lg-8 col-12">
				<!-- L'AMOUR PARFAIT -->

				<div class="content-customer">
					<h1><?php echo get_field('header1'); ?></h1>

					<p><?php the_field('content1'); ?></p>

					<div class="owl-carousel owl-theme carousel_1">

				        <?php if( have_rows('list-img1') ): ?>
				            <?php while( have_rows('list-img1') ): the_row(); 
				                $image = get_sub_field('img');
				                $picture = $image['sizes']['thumbnail']; 
				                ?>
					            <div class="item">
					                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					            </div>
				            <?php endwhile; ?>
				        <?php endif; ?>
				    </div>
				</div>

				<!-- CRYSTAL PARADISE -->
				<div class="content-customer">
					<h1><?php echo get_field('header2'); ?></h1>

					<p><?php the_field('content2'); ?></p>

					<div class="owl-carousel owl-theme carousel_1">

				        <?php if( have_rows('list-img2') ): ?>
				            <?php while( have_rows('list-img2') ): the_row(); 
				                $image = get_sub_field('img');
				                $picture = $image['sizes']['thumbnail']; 
				                ?>
					            <div class="item">
					                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					            </div>
				            <?php endwhile; ?>
				        <?php endif; ?>
				    </div>
				</div>

				<!-- SWEETY -->
				<div class="content-customer">
					<h1><?php echo get_field('header3'); ?></h1>

					<p><?php the_field('content3'); ?></p>

					<div class="owl-carousel owl-theme carousel_1">

				        <?php if( have_rows('list-img3') ): ?>
				            <?php while( have_rows('list-img3') ): the_row(); 
				                $image = get_sub_field('img');
				                $picture = $image['sizes']['thumbnail']; 
				                ?>
					            <div class="item">
					                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					            </div>
				            <?php endwhile; ?>
				        <?php endif; ?>
				    </div>
				</div>

				<!-- GLAMOUR PREMIUM -->
				<div class="content-customer">
					<h1><?php echo get_field('header4'); ?></h1>

					<p><?php the_field('content4'); ?></p>

					<div class="owl-carousel owl-theme carousel_1">

				        <?php if( have_rows('list-img4') ): ?>
				            <?php while( have_rows('list-img4') ): the_row(); 
				                $image = get_sub_field('img');
				                $picture = $image['sizes']['thumbnail']; 
				                ?>
					            <div class="item">
					                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
					            </div>
				            <?php endwhile; ?>
				        <?php endif; ?>
				    </div>
				</div>

				<!-- share -->
				<div class="meta-post">
					<div class="share">
						<span>
							<?php echo get_field('icon-share','option'); ?>
							<?php echo get_field('share','option'); ?>
						</span>

						<div class="social-media">
							<?php if (have_rows('share-social', 'option')) : ?>
					            <?php while (have_rows('share-social', 'option')) : the_row();
					                $social_icon = get_sub_field('icon');
					                $social_link = get_sub_field('link');

					            ?>

							        <a href="<?php echo $social_link; ?>">
							            <?php echo $social_icon ?>
							        </a>

					            <?php endwhile; ?>
					        <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			

			<div class="col-lg-4 col-12">
				<div class="bg-sidebar">
					<div class="categories">
						<h1><?php echo get_field('header-sidebar'); ?></h1>

						<?php wp_nav_menu (
				    		array('theme_location' => 'menu-3', 'menu_class' => 'categories3'));?>
				   	</div>

				   	<div class="categories">
				   		<h1><?php echo get_field('discount'); ?></h1>

					   	<?php 
							$image = get_field('img-discount');
							if( !empty( $image ) ): ?>
							    <img class="discount-sidebar" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</div>

				   	<?php get_sidebar(); ?>
				</div>
			</div>

		</div>
	</div>


<?php get_footer(); ?>
