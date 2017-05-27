<?php 

function cf_presentations( $posts ) {
	$custom_query = new WP_Query(array('post__in' => $posts, 'post_type' => 'any', 'orderby'=>'post__in'));

	ob_start();
	include(locate_template('partials/_presentation-schedule.php'));
	echo ob_get_clean();

	wp_reset_postdata();
}

class F6_TOPBAR_MENU_WALKER extends Walker_Nav_Menu
{   
    /*
     * Add vertical menu class and submenu data attribute to sub menus
     */
     
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
    }
}
