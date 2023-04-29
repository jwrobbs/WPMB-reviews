<?php
/**
 * Create the review post type
 *
 * @package wpmb_reviews
 */

namespace WPMB_Reviews\Review_Post_Type;

defined( 'ABSPATH' ) || exit;

/**
 * Register the review post type
 *
 * @return void
 */
function register_post_type_review() {
	$single_name = __( 'Review', 'wpmb-reviews' );
	$plural_name = __( 'Reviews', 'wpmb-reviews' );

	// Set $labels w/o sprintf.
	$labels = array(
		'name'                  => $plural_name,
		'singular_name'         => $single_name,
		'menu_name'             => $plural_name,
		'name_admin_bar'        => $single_name,
		'archives'              => $plural_name . ' Archives',
		'attributes'            => $single_name . ' Attributes',
		'parent_item_colon'     => 'Parent ' . $single_name . ':',
		'all_items'             => 'All ' . $plural_name,
		'add_new_item'          => 'Add New ' . $single_name,
		'add_new'               => 'Add New',
		'new_item'              => 'New ' . $single_name,
		'edit_item'             => 'Edit ' . $single_name,
		'update_item'           => 'Update ' . $single_name,
		'view_item'             => 'View ' . $single_name,
		'view_items'            => 'View ' . $plural_name,
		'search_items'          => 'Search ' . $plural_name,
		'not_found'             => 'No ' . $plural_name . ' found',
		'not_found_in_trash'    => 'No ' . $plural_name . ' found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into ' . $single_name,
		'uploaded_to_this_item' => 'Uploaded to this ' . $single_name,
		'items_list'            => $plural_name . ' list',
		'items_list_navigation' => $plural_name . ' list navigation',
		'filter_items_list'     => 'Filter ' . $plural_name . ' list',
	);

	// Register the post type.
	register_post_type(
		'review',
		array(
			'labels'                => $labels,
			'public'                => true,
			'has_archive'           => true,
			'show_in_rest'          => true,
			'rest_base'             => 'reviews',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
			'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'menu_icon'             => 'dashicons-star-filled',
			'hierarchical'          => false,
			'taxonomies'            => array( 'post_tag' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\register_post_type_review' );
