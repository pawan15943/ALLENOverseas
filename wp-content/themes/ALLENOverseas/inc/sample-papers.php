<?php
flush_rewrite_rules( false );
// Register Custom Post Type gallery-and-events
function create_sample_papers_cpt() {

	$labels = array(
		'name' => _x( 'Sample Papers', 'Post Type General Name', 'asap' ),
		'singular_name' => _x( 'Sample Papers', 'Post Type Singular Name', 'asap' ),
		'menu_name' => _x( 'Sample Papers', 'Admin Menu text', 'asap' ),
		'name_admin_bar' => _x( 'Sample Papers', 'Add New on Toolbar', 'asap' ),
		'archives' => __( 'Sample Papers Archives', 'asap' ),
		'attributes' => __( 'Sample Papers Attributes', 'asap' ),
		'parent_item_colon' => __( 'Parent Sample Papers:', 'asap' ),
		'all_items' => __( 'All Sample Papers', 'asap' ),
		'add_new_item' => __( 'Add New Sample Papers', 'asap' ),
		'add_new' => __( 'Add New', 'asap' ),
		'new_item' => __( 'New Sample Papers', 'asap' ),
		'edit_item' => __( 'Edit Sample Papers', 'asap' ),
		'update_item' => __( 'Update Sample Papers', 'asap' ),
		'view_item' => __( 'View Sample Papers', 'asap' ),
		'view_items' => __( 'View Sample Papers', 'asap' ),
		'search_items' => __( 'Search Sample Papers', 'asap' ),
		'not_found' => __( 'Not found', 'asap' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'asap' ),
		'featured_image' => __( 'Featured Image', 'asap' ),
		'set_featured_image' => __( 'Set featured image', 'asap' ),
		'remove_featured_image' => __( 'Remove featured image', 'asap' ),
		'use_featured_image' => __( 'Use as featured image', 'asap' ),
		'insert_into_item' => __( 'Insert into Sample Papers', 'asap' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Sample Papers', 'asap' ),
		'items_list' => __( 'Sample Papers list', 'asap' ),
		'items_list_navigation' => __( 'Sample Papers list navigation', 'asap' ),
		'filter_items_list' => __( 'Filter Sample Papers list', 'asap' ),
	);
	$rewrite = array(
		'slug' => 'sample-papers',
		'with_front' => false,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'sample-papers', 'asap' ),
		'description' => __( '', 'asap' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-book-alt',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 101,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'query_var' => 'gallery-and-events',
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'rewrite' => $rewrite,
	);
	register_post_type( 'sample-papers', $args );

}
add_action( 'init', 'create_sample_papers_cpt', 0 );
?>