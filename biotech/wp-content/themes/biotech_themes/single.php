<?php get_header(); ?>
	<div class="container">
		<div class="bg-single">
			<h1 class="text-single"><?php the_title(); ?></h1>

			<p class="text-news3"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> </p>

			<div class="news-single">  
	            <?php the_content(); ?>
	        </div>
	    </div>
	</div>
<?php get_footer(); ?>