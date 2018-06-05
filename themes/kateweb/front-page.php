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
									<p>We code nice websites to help you tell a story.</p>
									</div>
								</div>
								<div class="front-page-item">
									<h1>Our portfolio.</h1>
									<p><a href="http://localhost/katewp/portfolioitem/test-portfolio-item/">link to portfolio_item</a></p>
									<p> We build web so you can make money. And we build web for fun too.</p>
								</div>
								<div class="front-page-item">
									<!-- <img class="position-letter" src="assets/p.svg"> -->
									<h1>Team of two.</h1>
									<p> Kate and Kuba. Husband and wife. Fine Arts, programming and analytics skills combined. You tell us and we code it. </p>
								</div>
							</div>
                    </div><!-- .entry-content -->
                </article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>