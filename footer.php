			<!-- footer -->
			<footer class="footer-container">


				<div class="footer-address-bar-wrapper">

					<?php footer_nav(); ?>

					<div class="footer-address-bar" role="contentinfo">
						<img src='<?php echo get_template_directory_uri(); ?>/img/fd-logo-white.svg' alt='Logo' class='logo-img'>
						<p>
							JFK Plads 1R 4 sal</br>
							9000 Aalborg</br>
							Tlf. 22 62 49 90</br>
							Email: <a href="mailto:cb@fysdk.dk">cb@fysdk.dk</a>
						</p>
					</div>

				</div>



			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<script type="text/javascript">
	  WebFontConfig = {
	    google: { families: [ 'Droid+Sans:400,700:latin' ] }
	  };
	  (function() {
	    var wf = document.createElement('script');
	    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	    wf.type = 'text/javascript';
	    wf.async = 'true';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(wf, s);
	  })(); </script>
		<div class="md-overlay"></div>
	</body>
</html>
