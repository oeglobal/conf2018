<?php
require get_template_directory() . "/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

function get_tweets() {
    if ( get_transient('tweets') !== false ) {
        return get_transient('tweets');
    } else {
        $connection = new TwitterOAuth(TWITTER_API_KEY, TWITTER_API_SECRET, TWITTER_ACCESS_TOKEN_KEY, TWITTER_ACCESS_TOKEN_SECRET);
        $content = $connection->get("search/tweets",
                        ["q" => "#oeglobal OR #oeglobal18 OR #oeglobal2018",
                         "since_id" => 845465018640433152,
                         "count" => 100
                        ]);
        $tweets = array();
        foreach ($content->statuses as $tweet) {
            // var_dump($tweet);
            if ( ! isset($tweet->retweeted_status) )
            $tweets[] = $tweet->id_str;
        }

        $tweets = array_slice($tweets, 0, 16);
        set_transient('tweets', $tweets, 60*60*1);
        return $tweets;
    }
}

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


