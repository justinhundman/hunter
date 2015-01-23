	<div class="Footer">
		<div class="u-gridContainer footer-wrapper u-gridRow">
			<div class="u-gridCol4">
				 <a href="/home"> <img class="logo-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logofooter.png"/></a>
			</div>
			<div class="u-gridCol4">
				<ul>			
					<li>Administratiekantoor R. Hunter B.V.</li>
					<li>Algolweg 11-A</li>
					<li>3821 BG  Amersfoort</li>
					<li><a href="tel:0297800560">Tel: 0297 800560</a></li>
					<li><a title="mailto:robhunter@tak-administratie.nl" href="mailto:robhunter@tak-administratie.nl">Mail: robhunter@tak-administratie.nl</a></li>
					<li>Kvk 52024083</li>
				</ul>
			</div>
			<div class="u-gridCol4 footer-right">
				<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
					<div class="Footer-inner u-gridRow">
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
						<a href="#">Algemene voorwaarden</a>
					</div>
					<?php endif; ?>
			</div>
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer footer-wrapper2">
			<!-- Copyright info -->
			<p class="copytext">&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
