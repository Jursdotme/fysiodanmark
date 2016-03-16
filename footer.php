			<!-- footer -->
			<footer class="footer-container">


				<div class="footer-address-bar-wrapper">

					<?php footer_nav(); ?>

					<div class="footer-address-bar" role="contentinfo">
						<img src='<?php echo get_template_directory_uri(); ?>/img/fd-logo-white.svg' alt='Logo' class='logo-img'>
						<p>
							<?php the_field('firmanavn','option') ?></br>
							<?php the_field('adresse','option') ?></br>
							<?php the_field('postnummer','option') ?> <?php the_field('by','option') ?></br>
							Tlf. <?php the_field('telefonnummer','option') ?></br>
							Email: <a href="mailto:<?php the_field('e-mail','option') ?>"><?php the_field('e-mail','option') ?></a>
						</p>
					</div>

				</div>



			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php if ( is_user_logged_in() ) {
		    get_template_part('partials/dialogues');
		} ?>


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
