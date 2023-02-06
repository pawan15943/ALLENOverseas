<?php
flush_rewrite_rules( false );
// Register Custom Post Type gallery-and-events
function create_exam_cpt() {

	$labels = array(
		'name' => _x( 'Exam Pages', 'Post Type General Name', 'asap' ),
		'singular_name' => _x( 'Exam Pages', 'Post Type Singular Name', 'asap' ),
		'menu_name' => _x( 'Exam Pages', 'Admin Menu text', 'asap' ),
		'name_admin_bar' => _x( 'Exam Pages', 'Add New on Toolbar', 'asap' ),
		'archives' => __( 'Exam Pages Archives', 'asap' ),
		'attributes' => __( 'Exam Pages Attributes', 'asap' ),
		'parent_item_colon' => __( 'Parent Exam Pages:', 'asap' ),
		'all_items' => __( 'All Exam Pages', 'asap' ),
		'add_new_item' => __( 'Add New Exam Pages', 'asap' ),
		'add_new' => __( 'Add New', 'asap' ),
		'new_item' => __( 'New Exam Pages', 'asap' ),
		'edit_item' => __( 'Edit Exam Pages', 'asap' ),
		'update_item' => __( 'Update Exam Pages', 'asap' ),
		'view_item' => __( 'View Exam Pages', 'asap' ),
		'view_items' => __( 'View Exam Pages', 'asap' ),
		'search_items' => __( 'Search Exam Pages', 'asap' ),
		'not_found' => __( 'Not found', 'asap' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'asap' ),
		'featured_image' => __( 'Featured Image', 'asap' ),
		'set_featured_image' => __( 'Set featured image', 'asap' ),
		'remove_featured_image' => __( 'Remove featured image', 'asap' ),
		'use_featured_image' => __( 'Use as featured image', 'asap' ),
		'insert_into_item' => __( 'Insert into Exam Pages', 'asap' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Exam Pages', 'asap' ),
		'items_list' => __( 'Exam Pages list', 'asap' ),
		'items_list_navigation' => __( 'Exam Pages list navigation', 'asap' ),
		'filter_items_list' => __( 'Filter Exam Pages list', 'asap' ),
	);
	$rewrite = array(
		'slug' => 'exam',
		'with_front' => false,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'exam', 'asap' ),
		'description' => __( '', 'asap' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-id-alt',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 100,
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
	register_post_type( 'exam', $args );

}
add_action( 'init', 'create_exam_cpt', 0 );
?>