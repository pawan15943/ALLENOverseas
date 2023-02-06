<?php
flush_rewrite_rules( false );
// Register Custom Post Type countries
function create_countries_cpt() {

	$labels = array(
		'name' => _x( 'Countries', 'Post Type General Name', 'asap' ),
		'singular_name' => _x( 'Countries', 'Post Type Singular Name', 'asap' ),
		'menu_name' => _x( 'Countries', 'Admin Menu text', 'asap' ),
		'name_admin_bar' => _x( 'Countries', 'Add New on Toolbar', 'asap' ),
		'archives' => __( 'Countries Archives', 'asap' ),
		'attributes' => __( 'Countries Attributes', 'asap' ),
		'parent_item_colon' => __( 'Parent Countries:', 'asap' ),
		'all_items' => __( 'All Countries', 'asap' ),
		'add_new_item' => __( 'Add New Countries', 'asap' ),
		'add_new' => __( 'Add New', 'asap' ),
		'new_item' => __( 'New Countries', 'asap' ),
		'edit_item' => __( 'Edit Countries', 'asap' ),
		'update_item' => __( 'Update Countries', 'asap' ),
		'view_item' => __( 'View Countries', 'asap' ),
		'view_items' => __( 'View Countries', 'asap' ),
		'search_items' => __( 'Search Countries', 'asap' ),
		'not_found' => __( 'Not found', 'asap' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'asap' ),
		'featured_image' => __( 'Featured Image', 'asap' ),
		'set_featured_image' => __( 'Set featured image', 'asap' ),
		'remove_featured_image' => __( 'Remove featured image', 'asap' ),
		'use_featured_image' => __( 'Use as featured image', 'asap' ),
		'insert_into_item' => __( 'Insert into Countries', 'asap' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Countries', 'asap' ),
		'items_list' => __( 'Countries list', 'asap' ),
		'items_list_navigation' => __( 'Countries list navigation', 'asap' ),
		'filter_items_list' => __( 'Filter Countries list', 'asap' ),
	);
	$rewrite = array(
		'slug' => 'countries',
		'with_front' => false,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'countries', 'asap' ),
		'description' => __( '', 'asap' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-site',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'query_var' => 'countries',
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'rewrite' => $rewrite,
	);
	register_post_type( 'countries', $args );

}
add_action( 'init', 'create_countries_cpt', 0 );
?>