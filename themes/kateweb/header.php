<?php
/**
 * The header for our theme.
 *
 * @package kateweb_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico" />

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
				<?php  the_custom_logo();?>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->

				<div class="menu-toggle">
					<button class="mobile-menu" type="button" aria-expanded="false" aria-controls="primary-menu">
						<?php esc_html('Primary Menu');?>
						<span>menu</span>
					</button>

					</div>

					<nav id="site-navigation" class="main-navigation" role="navigation">

						<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu'));?>
					</nav><!-- #site-navigation -->
					</div><!-- .site-header-menu -->
			</div><!-- .site-header-main -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
