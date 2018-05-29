<?php
/**
 * The template for displaying the footer.
 *
 * @package kateweb_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<ul class="footer-text">
					<li class="footer-text-p">
							<p>design inspired by <a href="<?php echo esc_url( 'http://theawwwesomes.org/' ); ?>">the Awwwesomes</a></p>
						</li>
						<li class="footer-text-p">
							<p>made by <a href="<?php echo esc_url( 'https://github.com/pinaska' ); ?>">kate </a></p>
						</li>
						<li class="footer-text-p">
							<p> Spring 2018</p
							></li>
						<li class="footer-text-p">
							<p> Vancouver Canada</p>
						</li>
					</ul>
					<ul class="social">
						<li class="social-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facebook.svg" alt="facebook icon"/></a></li>
						<li class="social-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/instagram.svg" alt="instagram icon"/></a></li>
						<li class="social-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/github.svg" alt="github icon"/></a></li>
					</ul>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
