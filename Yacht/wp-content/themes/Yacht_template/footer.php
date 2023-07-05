<div class="background-footer font-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-12 content-footer">
				<ul>
					<li><p><?php echo get_theme_mod('footer_setting'); ?></p></li>
					<li><p><?php echo get_theme_mod('footer_setting_2'); ?></p></li>
					<li><p><?php echo get_theme_mod('footer_setting_3'); ?></p></li>
					<li><p><?php echo get_theme_mod('footer_setting_4'); ?></p></li>
					<li><p><?php echo get_theme_mod('footer_setting_5'); ?></p></li>
					<li><p><?php echo get_theme_mod('footer_setting_6'); ?></p></li>
					<li>
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
					</li>
					<li><p><?php echo get_theme_mod('footer_setting_7'); ?></p></li>
				</ul>

				<ul>
					<li><p><?php echo get_theme_mod('footer_setting_8'); ?></p></li>
					<li><p><?php echo get_theme_mod('footer_setting_9'); ?></p></li>
					<li><p><?php echo get_theme_mod('footer_setting_10'); ?></p></li>
					<li><p><?php echo get_theme_mod('footer_setting_11'); ?></p></li>
					<li><p><?php echo get_theme_mod('footer_setting_12'); ?></p></li>
				</ul>
			</div>

			<div class="col-lg-7 col-12 content-footer2">
				<h1><?php echo get_theme_mod('footer_setting_13'); ?></h1>
				<p><?php echo get_theme_mod('footer_setting_14'); ?></p>

				<?php echo do_shortcode( '[contact-form-7 id="90" title="Contact form 1"]' ); ?>		
			</div>
			<hr class="hr">
		</div>

		<div class="content-footer3">
			<p>Copyright © 2021 LUXUO Viet Nam. All Rights Reserved. Website Developed by Tony Toàn</p>
			<ul class="list-footer">
				<li>Contact Us</li>
				<li>|</li> 
				<li>Terms & Conditions</li>
				<li>|</li>
				<li>Privacy Policy</li>
			</ul>
		</div>
	</div>

	<a class="button-fixed" href="#"><i class="fas fa-chevron-up"></i></a>
</div>

<?php wp_footer() ?>    
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- My Js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="6eVZnThJ"></script>

</body>
</html>