	<div class="bg_footer">
		<div class="container">
			<a href="<?php echo home_url(); ?>">
				<img class="logo_footer" src="<?php echo get_theme_mod( 'Logo' ); ?>">
			</a>

			<ul class="menu_footer">
				<li>
					<a href="#"><?php echo get_field('title1', 'option'); ?></a>
				</li>

				<li id="intro2">
					<button><?php echo get_field('title2', 'option'); ?></button>
				</li>

				<li id="effective2">
					<button><?php echo get_field('title3', 'option'); ?></button>
				</li>

				<li id="license2">
					<button><?php echo get_field('title4', 'option'); ?></button>
				</li>

				<li id="contact2">
					<button><?php echo get_field('title5', 'option'); ?></button>
				</li>
			</ul>

			<ul class="menu_footer2">
				<?php if( have_rows('icon_footer','option') ): ?>
			        <?php while( have_rows('icon_footer','option') ): the_row(); 
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
	</div>
 
	<div class="bg_footer2">
		<p><?php echo get_field('name_desgin','option'); ?></p>
	</div>

	<a href="#" class="back_top"><i class="fas fa-chevron-up"></i></a>

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