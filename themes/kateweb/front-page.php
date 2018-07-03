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
									<?php echo CFS()->get('first_section')?>
									</div>
								</div>
								<div class="front-page-item">
								<?php echo CFS()->get('second_section')?>
								</div>
								<div class="front-page-item">
									<!-- <img class="position-letter" src="assets/p.svg"> -->
									<?php echo CFS()->get('third_section')?>
								</div>
							</div><!--.front-page-container-->
                    </div><!-- .entry-content -->
                </article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>