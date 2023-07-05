	<div class="bg-footer">
		<div class="container">
			<img class="img_logo" src="<?php bloginfo('template_directory') ?>/images/logo.svg">

			<div class="social-footer">
				<?php if( have_rows('social-footer', 'option') ): ?>
		            <?php while( have_rows('social-footer', 'option') ): the_row(); 
		                $icon = get_sub_field('icon');
		                $link = get_sub_field('link'); ?>

		                <a href="<?php echo $link; ?>">
		                	<?php echo $icon ?>
		                </a>
		                
		            <?php endwhile; ?>
		        <?php endif; ?>
			</div>

			<div class="menu-footer">
				<?php if( have_rows('menu-footer', 'option') ): ?>
		            <?php while( have_rows('menu-footer', 'option') ): the_row(); 
		                $icon = get_sub_field('title');
		                $link = get_sub_field('link'); ?>

		                <a href="<?php echo $link; ?>">
		                	<?php echo $icon ?>
		                </a>
		                
		            <?php endwhile; ?>
		        <?php endif; ?>
			</div>
		</div>
	</div>

	<a class="back-top" href="#"><i class="fas fa-chevron-up"></i></a>

<?php wp_footer() ?>    
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- My Js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>

</body>
</html>