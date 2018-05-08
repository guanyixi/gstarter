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


<div id="filter" data-cat="" data-year="" data-keywords="">
	<div class="container">
	    <div class="row">
			<div class="col-sm-4">
				<div id="cat-filter">
				<button data-type="cat" data-value="" >All</button>
				<?php 
					$categories = get_categories( array(
						'orderby' => 'name',
						'order'   => 'ASC'
					) );
					foreach( $categories as $category ) {
						$cat_name = $category->name;
						$cat_id = $category->term_id;
						$cat_slug = $category->slug;
						?>
                    <button data-type="cat" data-value="<?php echo $cat_slug; ?>" data-id="<?php echo $cat_id; ?>"><?php echo $cat_name ?></button>
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div id="year-filter">
					<button data-type="year" data-value="">All</button>
					<?php 
						//List $n years
						$year = (int)date("Y"); 
						$n = 2;
					    for ($x = 1; $x <= $n; $x++) { ?>
					    <button data-type="year" data-value="<?php echo $year; ?>"><?php echo $year; ?></button>
						
						<?php $year--; } ?>
				</div>
			</div>
			<div class="col-sm-4">
                <div id="search-filter">
					<input type="text">
					<button>Search</button>
				</div>
				

			</div>
		</div>
	</div>
</div>


	<main id="main-content" class="site-main">
		<div class="container" id="post-container">
			<?php if(have_posts()):?>
			<div class="flex-container align-container all-posts" >
			    <?php while(have_posts()): the_post(); ?>
			        <?php get_template_part( 'template-parts/content', 'posts' ); ?>
			    <?php endwhile; ?>
			</div>
			<center><button data-page="1" class="load-more">Load More...</button></center>
			<?php //get_template_part( 'template-parts/pagination', 'default' ); ?>
			<?php  endif; ?>
		</div>	
	</main><!-- #main -->

</div><!-- #primary -->

<?php
get_footer();
