<?php

add_theme_support('soil-clean-up');
//add_theme_support('soil-disable-asset-versioning');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-google-analytics', 'UA-4248822-10');
//add_theme_support('soil-jquery-cdn');
//add_theme_support('soil-js-to-footer');
add_theme_support('soil-nav-walker');
add_theme_support('soil-relative-urls');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

if ( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

function cf_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'cf' ),
    ) );

    add_image_size( 'home-small', 362, 240, true);
}
add_action( 'after_setup_theme', 'cf_setup' );

function cf_scripts() {
    wp_dequeue_style( 'style', get_stylesheet_uri() );

    if ( is_admin() ) {
        wp_enqueue_style( 'cf-admin', get_template_directory_uri() . '/css/admin.css' );
    } else {
          wp_enqueue_style( 'cf-style', get_template_directory_uri() . '/css/app.css', array(), '123457' );
          wp_enqueue_script( 'cf-script', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), '', true );
    }
}
add_action( 'wp_enqueue_scripts', 'cf_scripts' );


require get_template_directory() . '/inc/actions.php';
require get_template_directory() . '/inc/filters.php';
require get_template_directory() . '/inc/post_types.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/api.php';
require get_template_directory() . '/inc/gw-gravity-forms-better-pre-submission-confirmation.php';
