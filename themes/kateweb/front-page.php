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
					<section class="hero">
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
					</section><!--hero-->
					<section class="portfolio-display">
						<div class="portfolio-text">
							<p>scroll down to find all our works</p>
						</div>
						<header>
							<h1 class="portfolio-item-archive">works</h1>
						</header>
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
								<div class="thumbnail-header">
									<p>x</p>
								</div>
								<div class="thumbnail-body">
									<?php the_post_thumbnail( 'large' ); ?>
								</div>
							</div>
							<div class="portfolio-item-info">
								<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
								<?php the_excerpt();?>
								<a class="portfolio-item-button" href=<?php echo get_permalink() ?>>see more</a>
							</div>
						</div>
						<?php endforeach; wp_reset_postdata(); ?>
					</section><!--portfolio-display-->
					<section class="contact">
						<div class="contact-front-pg">
							<?php 
							$query = new WP_Query( 'pagename=contact' );
								if($query->have_posts()){
									while($query->have_posts()){
										$query->the_post();
										echo ('<h1>'.get_the_title().'</h1>');
										echo '<div class="entry-content">';
										the_content();
										echo '</div>';
									}
								}
							wp_reset_postdata();
							?>
						</div>
					</section>
				</article><!-- #post-## -->
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>