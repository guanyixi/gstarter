<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gstarter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gstarter' ); ?></a>

	<div class="top-bar">
	    <div class="container">
	    	<?php get_template_part( 'template-parts/search', 'form' ); ?>
	    </div>
	</div>
	    	

	<header id="masthead" class="site-header">

	    <button class="menu-toggle">
			<span></span>
			<span></span>
			<span></span>
		</button>

	    <div class="container">
	    	<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg"></a>

	    	<nav id="site-navigation" class="main-navigation">
				<?php wp_nav_menu( array( 'theme_location'=>'menu-1', 'menu_id'=>'primary-menu',) ); ?>
			</nav><!-- #site-navigation -->
			
	    </div>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
