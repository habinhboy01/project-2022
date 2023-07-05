<?php get_header(); ?>
	<div class="container background-news">
	 	<?php

		if ( function_exists('yoast_breadcrumb') ) {

		 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

		}

		?>
		<h1 class="text2"><?php the_title(); ?></h1>
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="content-sidebar">
					<p class="text3 font-content"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> </p>
					<div class="text4 font-content"><?php the_content(); ?></div>
				</div>
			</div>

			<div class="col-lg-4 col-12 content-sidebar2">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>