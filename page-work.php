<?php
/**
 * Template Name: Work
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gstarter
 */

get_header(); ?>

<div id="primary" class="content-area">

    <?php get_template_part( 'template-parts/content', 'header' ); ?> 

    <main id="main" class="site-main">

        <div class="container-fit">
        	<?php if(have_posts()): the_post(); the_content(); endif;?>
        </div>
        
        <div class="container">

        	<?php
			  $group_data = get_post_meta($post->ID, 'unit_x', true);
			  $group_data = maybe_unserialize($group_data); // nice WP helper function to unserialize if needed
			  print_r($group_data); // output the results
			?>

        	<?php 
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$loop = new WP_Query( array( 
			    'post_type' => array( 'work' ),
			    'posts_per_page' => '3',
			    'post_status' => 'publish',
			    'paged' => $paged,
			    ) ); 
			?>

			<?php if ( $loop->have_posts() ) : ?>
				<div class="flex-container align-container">
			    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			        <?php get_template_part( 'template-parts/content', 'work' ); ?>
			    <?php endwhile; ?>
			    </div>
			   
			    <div class="pagination">
				<?php
					$big = 999999999; 
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'prev_text' => __( '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', 'textdomain' ),
			            'next_text' => __( '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>', 'textdomain' ),
						'current' => max( 1, get_query_var('paged') ),
						'total' => $loop->max_num_pages
					) );
				?>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?> 

        </div>
	</main><!-- #main -->

</div><!-- #primary -->

<?php
get_footer();
