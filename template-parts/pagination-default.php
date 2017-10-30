<div class="pagination">
    <?php 
    $big = 999999999; // need an unlikely integer
    echo paginate_links(array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'prev_text' => __( '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', 'textdomain' ),
    'next_text' => __( '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>', 'textdomain' ),
	'mid_size' => 1,
    )); 
    ?>
</div>