<?php
/**

Template Name: Home Page

 */

get_header(); ?>

<div id="primary" class="content-area">

	<div class="slider" style="width: 100%; height: 200px; background-color: #C8DEE6; display: flex; align-items: center;">
		<center><h1>Slide One</h1></center>
		<center><h1>Slide Two</h1></center>
	</div>

	<main id="main" class="site-main">

		<div class="container">
		    
		    <br><h1>Markups</h1>
		    <hr>

			<h1>heading1</h1>
			<h2>heading2</h2>
			<h3>heading3</h3>
			<h4>heading4</h4>

			<a href="#">link</a>
			<button>button</button>
			<p>paragraph</p>
			<q>quote</q>

			<form>
		        <label>label</label>
				<input type="text" name="" placeholder="text input">
				<input type="submit" name="" value="submit">
				<textarea placeholder="Textarea"></textarea>
			</form>


			<br><h1>Custom Loop (Posts)</h1>
		    <hr>


		    <?php 
		    $loop = new WP_Query( array( 
		        'post_type' => array( 'post' ),
		        'posts_per_page' => '2',
		        'post_status' => 'publish',
		        ) ); 
		    ?>

		    <?php if ( $loop->have_posts() ) : ?>
				<div class="flex-container align-container">
			    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			        <?php get_template_part( 'template-parts/content', 'posts' ); ?>
			    <?php endwhile; ?>
			    </div>
		   	<?php wp_reset_postdata(); ?>
		    <?php endif; ?> 


		</div>
		
	</main>

</div><!-- #primary -->



<?php
get_footer();