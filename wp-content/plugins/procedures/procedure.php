<?php
/*
Plugin Name: Procedures
Description: Allows user to manage all of the eye procedures
*/

function procedures_post_type() {
// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Procedures', 'Post Type General Name', 'abrams' ),
		'singular_name'       => _x( 'Procedure', 'Post Type Singular Name', 'abrams' ),
		'menu_name'           => __( 'Procedures', 'abrams' ),
		'parent_item_colon'   => __( 'Parent Procedure', 'abrams' ),
		'all_items'           => __( 'All Procedures', 'abrams' ),
		'view_item'           => __( 'View Procedure', 'abrams' ),
		'add_new_item'        => __( 'Add New Procedure', 'abrams' ),
		'add_new'             => __( 'Add New', 'abrams' ),
		'edit_item'           => __( 'Edit Procedure', 'abrams' ),
		'update_item'         => __( 'Update Procedure', 'abrams' ),
		'search_items'        => __( 'Search Procedure', 'abrams' ),
		'not_found'           => __( 'Not Found', 'abrams' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'abrams' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'procedures', 'abrams' ),
		'description'         => __( 'Procedure news and reviews', 'abrams' ),
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
		'menu_icon'           => '/wp-abrams/wp-content/plugins/procedures/icon.png',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'procedures', $args );
}
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
add_action( 'init', 'procedures_post_type', 0 );
?>