<?php 
	$category = get_the_category();
	$cat_id = $category[0]->cat_ID;
	$post_id = $post->ID;

	$args = array(
		'posts_per_page' => -1,
		'cat'            => $cat_id,
		'post_status'    => 'publish',
		'orderby'        => 'ID',
		'order'          => 'asc'
    );
    $my_query = new wp_query( $args );
 ?>
<ul>
	<?php 
	while( $my_query->have_posts() ) { $my_query->the_post();
		$active = ( $post_id === get_the_ID() ) ? 'class = "active"' : '';
	?>

    <li><a <?php echo $active; ?> href="<?php the_permalink(); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp;<?php the_title(); ?></a></li>

    <?php } ?>
</ul>
<?php
 	wp_reset_query(); 
?>