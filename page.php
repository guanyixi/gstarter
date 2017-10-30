<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gstarter
 */

get_header(); ?>

<div id="primary" class="content-area">

    <?php get_template_part( 'template-parts/content', 'header' ); ?> 



  <?php
  $header_image_id = get_post_meta( get_the_ID(), 'header_image', true );
  $header_image = get_post($header_image_id); 
  $title = $header_image->post_title;
  $description = $header_image->post_content;
  $caption = $header_image->post_excerpt;
  ?>
  
  <img src="<?php echo wp_get_attachment_url($header_image_id); ?>">
  

    <main id="main" class="site-main">
        <div class="container">
        	<?php if(have_posts()): the_post(); the_content(); endif;?>
        </div>
	</main><!-- #main -->

</div><!-- #primary -->

<?php
get_footer();
