<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gstarter
 */

get_header(); ?>

<div id="primary" class="content-area">
	

	<header class="page-header">
		<h1 class="page-title"><?php echo single_cat_title(); ?></h1>
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
