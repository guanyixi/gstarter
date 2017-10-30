

<div class="flex-m-6 post-card">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a class="post-thumbnail bg-cover" href="<?php the_permalink(); ?>" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>);"></a>
		<div class="post-info">
			<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="excerpt"><?php the_excerpt(); ?></p>
			<div><a class="read-more button-blue" href="<?php the_permalink(); ?>">Read More</a>
		</div>
	</article>
</div>


