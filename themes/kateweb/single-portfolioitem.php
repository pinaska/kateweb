<?php
/**
 * The template for displaying all single posts.
 *
 * @package kateweb_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php kateweb_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

<div class="entry-content">
		<?php the_content(); ?>

		<img src="<?php echo CFS()->get( 'portfolio_item_image' ); ?>" alt="the portfolio item img">
		<?php echo CFS()->get( 'portfolio_item_description' ); ?>
		<?php echo CFS()->get( 'portfolio_item_dates' ); ?>
		<?php echo CFS()->get( 'portfolio_item_link' ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php kateweb_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->