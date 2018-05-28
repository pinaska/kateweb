<?php
/**
 * Template for displaying  front page
 *
 * @package kateweb_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="entry-content">
						<?php the_content(); ?>
							<div class="front-page-container">
								<div class="front-page-item">
									<div class="hello-text">
									<h1>Hello !</h1>
									<p>We build nice websites to help you tell a story.</p>
									</div>
								</div>
								<div class="front-page-item">
									<h1>Our mission.</h1>
									<p> We deliver a product that will be yours. I mean, YOURS only.</p>
								</div>
								<div class="front-page-item">
									<!-- <img class="position-letter" src="assets/p.svg"> -->
									<h1>Team of two.</h1>
									<p> Kate and Kuba. Hunsband and wife. Fine Arts, programming and analytics skills combined. We can help you. </p>
								</div>
							</div>
                    </div><!-- .entry-content -->
                </article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>