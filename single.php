<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gstarter
 */

get_header(); ?>

<div id="primary" class="content-area">
    <?php get_template_part( 'template-parts/content', 'header' ); ?>

	<main id="main" class="site-main"> 
	    <div class="container">
	        <div class="flex-container align-container">
	        	<div class="flex-m-9">
	        		<?php if(have_posts()): the_post(); the_content(); endif;?>
	        	</div>
	        	<div class="flex-m-3">
	        		<?php get_sidebar(); ?> 
	        	</div>
	        </div>
            
        </div>
	</main><!-- #main -->
	
</div><!-- #primary -->

<?php
get_footer();
