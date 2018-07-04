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
					<section class="hero-divs">
						<!-- <div class="entry-content"> -->
								<div class="front-page-container">
									<div class="front-page-item">
										<?php echo CFS()->get('first_section')?>
									</div>
									<div class="front-page-item">
									<?php echo CFS()->get('second_section')?>
									</div>
									<div class="front-page-item">
										<!-- <img class="position-letter" src="assets/p.svg"> -->
										<?php echo CFS()->get('third_section')?>
									</div>
								</div><!--.front-page-container-->
						<!-- </div>.entry-content -->

				</section>
				<section class="portfolio-display">
						<?php
						$args = array(
							'post_type' => 'portfolio-item',
							'posts_per_page' => 4,
							'orderby' => 'date',
							'order' => 'DESC'
							);

						$portfolio_items = get_posts( $args );?>

						<?php foreach ( $portfolio_items as $post ) : setup_postdata( $post );?>
						<div class="portfolio-grid-item">
						<div class="portfolio-item-thumbnail">
							<a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'thumbnail' ); ?></a>
				</div>
						<div class="portfolio-item-info">
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                <a class="portfolio-item-button" href=<?php echo get_permalink() ?>>see more</a>
              </div>

						<?php endforeach; wp_reset_postdata(); ?>
				</section>
				</article><!-- #post-## -->
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>