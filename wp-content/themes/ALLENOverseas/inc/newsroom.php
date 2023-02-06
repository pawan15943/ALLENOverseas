<?php
flush_rewrite_rules( false );
// Register Custom Post Type Newsroom
function create_newsroom_cpt() {

	$labels = array(
		'name' => _x( 'Newsroom', 'Post Type General Name', 'allen_overseas' ),
		'singular_name' => _x( 'Newsroom', 'Post Type Singular Name', 'allen_overseas' ),
		'menu_name' => _x( 'Newsroom', 'Admin Menu text', 'allen_overseas' ),
		'name_admin_bar' => _x( 'Newsroom', 'Add New on Toolbar', 'allen_overseas' ),
		'archives' => __( 'Newsroom Archives', 'allen_overseas' ),
		'attributes' => __( 'Newsroom Attributes', 'allen_overseas' ),
		'parent_item_colon' => __( 'Parent Newsroom:', 'allen_overseas' ),
		'all_items' => __( 'All Newsroom', 'allen_overseas' ),
		'add_new_item' => __( 'Add New Newsroom', 'allen_overseas' ),
		'add_new' => __( 'Add New', 'allen_overseas' ),
		'new_item' => __( 'New Newsroom', 'allen_overseas' ),
		'edit_item' => __( 'Edit Newsroom', 'allen_overseas' ),
		'update_item' => __( 'Update Newsroom', 'allen_overseas' ),
		'view_item' => __( 'View Newsroom', 'allen_overseas' ),
		'view_items' => __( 'View Newsroom', 'allen_overseas' ),
		'search_items' => __( 'Search Newsroom', 'allen_overseas' ),
		'not_found' => __( 'Not found', 'allen_overseas' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'allen_overseas' ),
		'featured_image' => __( 'Featured Image', 'allen_overseas' ),
		'set_featured_image' => __( 'Set featured image', 'allen_overseas' ),
		'remove_featured_image' => __( 'Remove featured image', 'allen_overseas' ),
		'use_featured_image' => __( 'Use as featured image', 'allen_overseas' ),
		'insert_into_item' => __( 'Insert into Newsroom', 'allen_overseas' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Newsroom', 'allen_overseas' ),
		'items_list' => __( 'Newsroom list', 'allen_overseas' ),
		'items_list_navigation' => __( 'Newsroom list navigation', 'allen_overseas' ),
		'filter_items_list' => __( 'Filter Newsroom list', 'allen_overseas' ),
	);
	$rewrite = array(
		'slug' => 'news',
		'with_front' => false,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'Newsroom', 'allen_overseas' ),
		'description' => __( '', 'allen_overseas' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-megaphone',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 102,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'query_var' => 'Newsroom',
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'rewrite' => $rewrite,
	);
	register_post_type( 'Newsroom', $args );

}
add_action( 'init', 'create_newsroom_cpt', 0 );
?>