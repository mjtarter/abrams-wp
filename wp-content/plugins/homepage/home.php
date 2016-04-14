<?php
/*
Plugin Name: Homepage
Description: Allows user to add new content blocks to the homepage
*/

function New_Content_post_type() {
// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'New Content', 'Post Type General Name', 'abrams' ),
		'singular_name'       => _x( 'Homepage', 'Post Type Singular Name', 'abrams' ),
		'menu_name'           => __( 'New Content', 'abrams' ),
		'parent_item_colon'   => __( 'Parent Homepage', 'abrams' ),
		'all_items'           => __( 'All New Content', 'abrams' ),
		'view_item'           => __( 'View Homepage', 'abrams' ),
		'add_new_item'        => __( 'Add New Homepage', 'abrams' ),
		'add_new'             => __( 'Add New', 'abrams' ),
		'edit_item'           => __( 'Edit Homepage', 'abrams' ),
		'update_item'         => __( 'Update Homepage', 'abrams' ),
		'search_items'        => __( 'Search Homepage', 'abrams' ),
		'not_found'           => __( 'Not Found', 'abrams' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'abrams' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'New Content', 'abrams' ),
		'description'         => __( 'Homepage news and reviews', 'abrams' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'menu_icon'           => '/wp-abrams/wp-content/plugins/homepage/icon.png',
	);

	// Registering your Custom Post Type
	register_post_type( 'New_Content', $args );
}
/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/
add_action( 'init', 'New_Content_post_type', 0 );
?>