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
					<div class="footer-text">
					<p><a href="<?php echo esc_url( 'https://github.com/pinaska' ); ?>">made by kate</a></p><br>
					<p><a href="<?php echo esc_url( 'http://theawwwesomes.org/' ); ?>">design inspired by the Awwwesomes</a></p><br>
					<p>Spring 2018 | Vancouver Canada</p>
					</div>
					<ul class="social">
						<li class="social-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facebook.svg" alt="facebook icon"/></a></li>
						<li class="social-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/instagram.svg" alt="instagram icon"/></a></li>
					</ul>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
