

<div class="flex-m-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a class="work-thumbnail bg-cover" href="<?php the_permalink(); ?>" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>);"></a>
		<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</article>
</div>


