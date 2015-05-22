<?php

/**
 * Work post type.
 **/
function km_work_post_type() {
	$labels = array(
		'name'               => _x( 'Work', 'post type general name' ),
		'singular_name'      => _x( 'Work', 'post type singular name' ),
		'menu_name'          => _x( 'Work', 'admin menu' ),
		'name_admin_bar'     => _x( 'Work', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Painting' ),
		'add_new_item'       => __( 'Add New Painting' ),
		'new_item'           => __( 'New Painting' ),
		'edit_item'          => __( 'Edit Painting' ),
		'view_item'          => __( 'View Painting' ),
		'all_items'          => __( 'All Paintings' ),
		'search_items'       => __( 'Search Paintings' ),
		'parent_item_colon'  => __( 'Parent Painting:' ),
		'not_found'          => __( 'No Painting found.' ),
		'not_found_in_trash' => __( 'No Painting found in Trash.' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'works' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'km_work', $args );
}
add_action( 'init', 'km_work_post_type' );

// Work Taxonomy
function create_work_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Artwork Type', 'taxonomy general name' ),
		'singular_name'     => _x( 'Artwork Type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Artwork Types' ),
		'all_items'         => __( 'All Artwork Types' ),
		'parent_item'       => __( 'Parent Artwork Type' ),
		'parent_item_colon' => __( 'Parent Artwork Type:' ),
		'edit_item'         => __( 'Edit Artwork Type' ),
		'update_item'       => __( 'Update Artwork Type' ),
		'add_new_item'      => __( 'Add New Artwork Type' ),
		'new_item_name'     => __( 'New Artwork Type' ),
		'menu_name'         => __( 'Artwork Type' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'artwork' ),
	);

	register_taxonomy( 'artwork', 'km_work', $args );
}

add_action('init', 'create_work_taxonomies');

/**
 * Biography post type.
 **/
function km_bio_post_type() {
	$labels = array(
		'name'               => _x( 'Biography', 'post type general name' ),
		'singular_name'      => _x( 'Biography', 'post type singular name' ),
		'menu_name'          => _x( 'Biography', 'admin menu' ),
		'name_admin_bar'     => _x( 'Biography', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Biography' ),
		'add_new_item'       => __( 'Add New Biography' ),
		'new_item'           => __( 'New Biography' ),
		'edit_item'          => __( 'Edit Biography' ),
		'view_item'          => __( 'View Biography' ),
		'all_items'          => __( 'All Biography' ),
		'search_items'       => __( 'Search Biography' ),
		'parent_item_colon'  => __( 'Parent Biography:' ),
		'not_found'          => __( 'No Biography found.' ),
		'not_found_in_trash' => __( 'No Biography found in Trash.' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'biography' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'km_bio', $args );
}
add_action( 'init', 'km_bio_post_type' );

/**
 * Artist Statement post type.
 **/
function km_statement_post_type() {
	$labels = array(
		'name'               => _x( 'Artist Statement', 'post type general name' ),
		'singular_name'      => _x( 'Artist Statement', 'post type singular name' ),
		'menu_name'          => _x( 'Artist Statement', 'admin menu' ),
		'name_admin_bar'     => _x( 'Artist Statement', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Artist Statement' ),
		'add_new_item'       => __( 'Add New Artist Statement' ),
		'new_item'           => __( 'New Artist Statement' ),
		'edit_item'          => __( 'Edit Artist Statement' ),
		'view_item'          => __( 'View Artist Statement' ),
		'all_items'          => __( 'All Artist Statement' ),
		'search_items'       => __( 'Search Artist Statement' ),
		'parent_item_colon'  => __( 'Parent Artist Statement:' ),
		'not_found'          => __( 'No Artist Statement found.' ),
		'not_found_in_trash' => __( 'No Artist Statement found in Trash.' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'artist-statement' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'km_statement', $args );
}
add_action( 'init', 'km_statement_post_type' );

/**
 * Exhibition post type.
 **/
function km_exhibition_post_type() {
	$labels = array(
		'name'               => _x( 'Exhibitions', 'post type general name' ),
		'singular_name'      => _x( 'Exhibition', 'post type singular name' ),
		'menu_name'          => _x( 'Exhibitions', 'admin menu' ),
		'name_admin_bar'     => _x( 'Exhibitions', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Exhibition' ),
		'add_new_item'       => __( 'Add New Exhibition' ),
		'new_item'           => __( 'New Exhibition' ),
		'edit_item'          => __( 'Edit Exhibition' ),
		'view_item'          => __( 'View Exhibition' ),
		'all_items'          => __( 'All Exhibition' ),
		'search_items'       => __( 'Search Exhibition' ),
		'parent_item_colon'  => __( 'Parent Exhibition' ),
		'not_found'          => __( 'No Exhibition found.' ),
		'not_found_in_trash' => __( 'No Exhibition found in Trash.' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'exhibitions' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'km_exhibition', $args );
}
add_action( 'init', 'km_exhibition_post_type' );

/**
 * Contact post type.
 **/
function km_contact_post_type() {
	$labels = array(
		'name'               => _x( 'Contact', 'post type general name' ),
		'singular_name'      => _x( 'Contact', 'post type singular name' ),
		'menu_name'          => _x( 'Contact', 'admin menu' ),
		'name_admin_bar'     => _x( 'Contact', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Contact' ),
		'add_new_item'       => __( 'Add New Contact' ),
		'new_item'           => __( 'New Contact' ),
		'edit_item'          => __( 'Edit Contact' ),
		'view_item'          => __( 'View Contact' ),
		'all_items'          => __( 'All Contact' ),
		'search_items'       => __( 'Search Contact' ),
		'parent_item_colon'  => __( 'Parent Contact' ),
		'not_found'          => __( 'No Contact found.' ),
		'not_found_in_trash' => __( 'No Contact found in Trash.' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'contact' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'km_contact', $args );
}
add_action( 'init', 'km_contact_post_type' );

?>