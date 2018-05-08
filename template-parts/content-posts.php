

<div class="flex-m-6 post-card">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a class="post-thumbnail bg-cover" href="<?php the_permalink(); ?>" style="display:none; background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>);"></a>
		<div class="post-info">
			<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<div><?php the_time('Y'); ?></div>
			<div><?php $categories = get_the_category();
 
 if ( ! empty( $categories ) ) {
	 echo esc_html( $categories[0]->name );   
 }?></div>
		</div>
	</article>
</div>


