<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package gstarter
 */

get_header(); ?>

	<section id="primary" class="content-area">
		
		<header class="page-header">
			<h1 class="page-title">
			    <?php printf( esc_html__( 'Search Results for: %s', 'gstarter' ), '<span>' . get_search_query() . '</span>' ); ?>  	
			</h1>
		</header><!-- .page-header -->

        <main id="main" class="site-main">

			<div class="container">

			    <?php if(have_posts()):?>
				<div class="search-result">
				    <?php while(have_posts()): the_post(); ?>
				        <?php get_template_part( 'template-parts/search', 'results' ); ?>
				    <?php endwhile; ?>
				</div>
				<?php get_template_part( 'template-parts/pagination', 'default' ); ?>
				<?php  endif; ?>

			</div>
			
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
