<?php

/*** SETUP ***/
function km_setup() {


	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 316, 176, true );

	if(!get_option("medium_crop")) {
		add_option("medium_crop", "1");
	} else {
		update_option("medium_crop", "1");
	}
    
}
add_action('after_setup_theme', 'km_setup');

/*** ENQUEUE SCRIPTS ***/
function km_add_scripts() {
	wp_style_add_data( 'pz-browserhappy-ie', 'conditional', 'lt IE 9' );
	wp_enqueue_style( 'foundation', TEMPLATEPATHO . '/library/css/foundation.css', array(), '05.2015' );
	wp_enqueue_script( 'pz-modernizer', TEMPLATEPATHO . '/library/js/modernizr.js', array(), '1.5', false );
	wp_enqueue_script( 'cb-script', TEMPLATEPATHO . '/library/js/km-script.js', array('jquery'), '05.2015', true );
}
add_action( 'wp_enqueue_scripts', 'km_add_scripts' );

/*** MOVE WP SCRIPTS ON FOOTER ***/
function km_footer_enqueue_scripts() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
}
add_action('wp_enqueue_scripts', 'km_footer_enqueue_scripts');


/*** IMPORT PORT TYPES ***/
include_once('include/post-types.php');


/*** REMOVE UNWANTED WP STUFF ***/
function km_remove_header_stuff() {
	remove_action( 'wp_head', 'rsd_link' );								// link to the Really Simple Discovery service endpoint
	remove_action( 'wp_head', 'wlwmanifest_link' );				// link to the Windows Live Writer manifest file
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	remove_action( 'wp_head', 'wp_generator' );						// XHTML generator
	remove_action( 'wp_head', 'rel_canonical' );
	remove_action( 'wp_head', 'rel_alternate' );
	remove_action( 'wp_head', 'index_rel_link' );					// index link
}
add_action('after_setup_theme', 'km_remove_header_stuff');

/*** HIDE ADMIN BAR ***/
add_filter('show_admin_bar', '__return_false');



?>