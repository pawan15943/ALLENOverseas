<?php
flush_rewrite_rules( false );
// Register Custom Post Type gallery
function create_gallery_cpt() {

	$labels = array(
		'name' => _x( 'Gallery', 'Post Type General Name', 'allen_overseas' ),
		'singular_name' => _x( 'Gallery', 'Post Type Singular Name', 'allen_overseas' ),
		'menu_name' => _x( 'Gallery', 'Admin Menu text', 'allen_overseas' ),
		'name_admin_bar' => _x( 'Gallery', 'Add New on Toolbar', 'allen_overseas' ),
		'archives' => __( 'Gallery Archives', 'allen_overseas' ),
		'attributes' => __( 'Gallery Attributes', 'allen_overseas' ),
		'parent_item_colon' => __( 'Parent Gallery:', 'allen_overseas' ),
		'all_items' => __( 'All Gallery', 'allen_overseas' ),
		'add_new_item' => __( 'Add New Gallery', 'allen_overseas' ),
		'add_new' => __( 'Add New', 'allen_overseas' ),
		'new_item' => __( 'New Gallery', 'allen_overseas' ),
		'edit_item' => __( 'Edit Gallery', 'allen_overseas' ),
		'update_item' => __( 'Update Gallery', 'allen_overseas' ),
		'view_item' => __( 'View Gallery', 'allen_overseas' ),
		'view_items' => __( 'View Gallery', 'allen_overseas' ),
		'search_items' => __( 'Search Gallery', 'allen_overseas' ),
		'not_found' => __( 'Not found', 'allen_overseas' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'allen_overseas' ),
		'featured_image' => __( 'Featured Image', 'allen_overseas' ),
		'set_featured_image' => __( 'Set featured image', 'allen_overseas' ),
		'remove_featured_image' => __( 'Remove featured image', 'allen_overseas' ),
		'use_featured_image' => __( 'Use as featured image', 'allen_overseas' ),
		'insert_into_item' => __( 'Insert into Gallery', 'allen_overseas' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Gallery', 'allen_overseas' ),
		'items_list' => __( 'Gallery list', 'allen_overseas' ),
		'items_list_navigation' => __( 'Gallery list navigation', 'allen_overseas' ),
		'filter_items_list' => __( 'Filter Gallery list', 'allen_overseas' ),
	);
	$rewrite = array(
		'slug' => 'galleries',
		'with_front' => false,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'gallery', 'allen_overseas' ),
		'description' => __( '', 'allen_overseas' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-images-alt',
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
		'query_var' => 'gallery',
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'rewrite' => $rewrite,
	);
	register_post_type( 'gallery', $args );

}
add_action( 'init', 'create_gallery_cpt', 0 );
?>