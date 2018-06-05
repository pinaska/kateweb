
<?php
/**
 * The main template file.
 *
 * @package kateweb_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

				<header>
					<h1 class="portfolio-item-archive">All our projects are here</h1>
				</header>

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
                </div><!--end of portfolio grid-->	

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
    </div><!-- #primary -->


    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<button class="search-submit">
			<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
	</fieldset>
</form>
<?php get_footer(); ?>
