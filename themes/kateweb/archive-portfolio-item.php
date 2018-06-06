
<?php
/**
 * The main template file.
 *
 * @package kateweb_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="portfolio-text">
			<p>scroll down to find all our works</p>
			</div>
		<header>
			<h1 class="portfolio-item-archive">portfolio</h1>
		</header>

		<?php if ( have_posts() ) : ?>

				<div class="portfolio-items-grid container">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
                <div class="portfolio-grid-item">
						<div class="portfolio-item-thumbnail">
							<a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'large' ); ?></a>
				</div>

              <div class="portfolio-item-info">
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                <a class="portfolio-item-button" href=<?php echo get_permalink() ?>>see more</a>
              </div>
					</div>
				<?php endwhile; ?>
				<?php the_posts_navigation(); ?>
				</div><!--end of portfolio grid-->
				
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main>
    </div>
<?php get_footer(); ?>
