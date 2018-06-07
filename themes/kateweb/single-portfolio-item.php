<?php
/**
 * The template for displaying all single posts.
 *
 * @package kateweb_Theme
 */

get_header(); ?>

<?php
	/* Start the Loop */
	 while ( have_posts() ) : the_post(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php the_content(); ?>
					<img src="<?php echo CFS()->get( 'portfolio_item_image' ); ?>" alt="the portfolio item img" class="portfolio-item-cfs-img">
					<?php echo CFS()->get( 'portfolio_item_description' ); ?>
					<?php echo CFS()->get( 'portfolio_item_start' ); ?>
					<?php echo CFS()->get( 'portfolio_item_end' ); ?>
					<?php echo CFS()->get( 'portfolio_item_link' ); ?>

					<!--add the custom taxonomies-->
					<ul><?php echo get_the_term_list( $post->ID, 'portfolio_item_type', '<li class="portfolio_item_type">', ' | ', '</li>' ) ?></ul>

					
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!--.wrap-->


<nav class="navigation post-navigation load-previous" role="navigation">
		<span class="nav-subtitle">More our works</span>
		<div class="nav-links">
			<div class="nav-previous">
				<?php $previous_post = get_previous_post(); ?>
				<a href="<?php echo get_permalink($previous_post->ID); ?>" data-id="<?php echo $previous_post->ID; ?>">
					<?php echo $previous_post->post_title; ?>
				</a>
			</div>
		</div>
</nav>

<?php endwhile; // End of the loop. ?>
<?php wp_footer(); ?>