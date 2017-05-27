<?php

add_theme_support('soil-clean-up');
add_theme_support('soil-disable-asset-versioning');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-google-analytics', 'UA-4248822-10');
add_theme_support('soil-jquery-cdn');
add_theme_support('soil-js-to-footer');
add_theme_support('soil-nav-walker');
add_theme_support('soil-relative-urls');

if ( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}


function cf_setup() {
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'op' ),
    ) );
}
add_action( 'after_setup_theme', 'cf_setup' );

require get_template_directory() . '/inc/actions.php';
require get_template_directory() . '/inc/filters.php';
require get_template_directory() . '/inc/post_types.php';
require get_template_directory() . '/inc/extras.php';