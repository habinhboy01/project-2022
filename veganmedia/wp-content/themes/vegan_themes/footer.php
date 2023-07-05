	<footer class="site-footer">
        <div class="tilted-container">
            <div class="container">
                <div class="social-media">

	                <?php if (have_rows('list-icon', 'option')) : ?>
			            <?php while (have_rows('list-icon', 'option')) : the_row();
			                $social_icon = get_sub_field('icon');
			                $social_link = get_sub_field('link');

			            ?>

				            <a href="<?php echo $social_link; ?>" target="_blank" class="social-media__icon">
				                <?php echo $social_icon ?>
				            </a>
			            <?php endwhile; ?>
			        <?php endif; ?>

                </div>

                <div class="footer-nav">
                    <div class="footer-nav-inner">
                        <div class="footer-menu">

                            <?php wp_nav_menu (
		                			array('theme_location' => 'menu-footer', 'menu_class' => 'footer-menu-inner')); ?>

                        </div>

                        <ul class="footer-menu-inner2">

                    	    <?php if (have_rows('list-menu2', 'option')) : ?>
					            <?php while (have_rows('list-menu2', 'option')) : the_row();
					                $social_icon = get_sub_field('title');
					                $social_link = get_sub_field('link');

					            ?>
					            	<li>
							            <a href="<?php echo $social_link; ?>">
							                S<?php echo $social_icon ?>
							            </a>
							        </li>
					            <?php endwhile; ?>
					        <?php endif; ?>

                        </ul>

                        <p class="small-info"><?php echo get_field('author', 'option'); ?></p>

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="back-top">
    	<a href="#"><i class="fas fa-chevron-up"></i></a>
    </div>

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
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/custom-page.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>

</body>
</html>