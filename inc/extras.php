<?php 

function cf_presentations( $posts ) {
	$custom_query = new WP_Query(array('post__in' => $posts, 'post_type' => 'any', 'orderby'=>'post__in'));

	ob_start();
	include(locate_template('partials/_presentation-schedule.php'));
	echo ob_get_clean();

	wp_reset_postdata();
}
