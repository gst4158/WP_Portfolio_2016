<!-- footer -->
<footer class="fullwidth" role="footer">
	<section>
		<nav role="footer-nav">				
			<?php echo html5blank_nav('home-menu'); ?>
		</nav>
		<p class="copyright"><?php echo get_field('field_site_copyright', 'option'); ?></p>
	</section>
</footer>

<!-- contact form -->
<?php echo checkForFile('contactform'); ?>

</section> <!-- /mamawrapper -->

	<!-- direction aware -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/directionaware.js"></script>

	<!-- flexslider library -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/flexslider.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css">

	<?php wp_footer(); ?>
</body>
</html>
