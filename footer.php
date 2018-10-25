			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="http://www.linkedin.com/in/jose-estrada-madera" title="Desarrollador web">José Estrada</a> 
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
		<!-- analytics -->
		<script>var cb = function() {
		var l = document.createElement('link'); l.rel = 'stylesheet';
		l.href = 'PATH_TO_COMBINED_CSS_FILE';
		var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
		};
		var raf = requestAnimationFrame || mozRequestAnimationFrame ||
		webkitRequestAnimationFrame || msRequestAnimationFrame;
		if (raf) raf(cb);
		else window.addEventListener('load', cb);</script>
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
		<script>
		WebFont.load({
			google: {
			families: ['Source Sans Pro:400,600,700,400italic,700italic', 'Nunito:400,700']
			}
		});
		</script>

	</body>
</html>
