<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gstarter
 */

get_header(); ?>

<div id="primary" class="content-area">
    
    <header class="page-header">
		<h1 class="page-title">Blog</h1>
	</header>


	<main id="main" class="site-main">

		<div class="container">
			<?php if(have_posts()):?>
			<div class="flex-container align-container">
			    <?php while(have_posts()): the_post(); ?>
			        <?php get_template_part( 'template-parts/content', 'posts' ); ?>
			    <?php endwhile; ?>
			</div>

			<?php get_template_part( 'template-parts/pagination', 'default' ); ?>
			<?php  endif; ?>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
