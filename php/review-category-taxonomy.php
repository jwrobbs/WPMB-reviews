<?php
/**
 * Create the review category taxonomy
 *
 * @package wpmb_reviews
 */

namespace WPMB_Reviews\Review_Category_Taxonomy;

defined( 'ABSPATH' ) || exit;

/**
 * Create "Review Category" taxonomy and assign it to the "Review" post type
 *
 * @return void
 */
function register_taxonomy_review_category() {
	$single_name = __( 'Review Category', 'wpmb-reviews' );
	$plural_name = __( 'Review Categories', 'wpmb-reviews' );

	// Set $labels w/o sprintf.
	$labels = array(
		'name'                       => $plural_name,
		'singular_name'              => $single_name,
		'menu_name'                  => $plural_name,
		'all_items'                  => 'All ' . $plural_name,
		'parent_item'                => 'Parent ' . $single_name,
		'parent_item_colon'          => 'Parent ' . $single_name . ':',
		'new_item_name'              => 'New ' . $single_name . ' Name',
		'add_new_item'               => 'Add New ' . $single_name,
		'edit_item'                  => 'Edit ' . $single_name,
		'update_item'                => 'Update ' . $single_name,
		'view_item'                  => 'View ' . $single_name,
		'separate_items_with_commas' => 'Separate ' . $plural_name . ' with commas',
		'add_or_remove_items'        => 'Add or remove ' . $plural_name,
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular ' . $plural_name,
		'search_items'               => 'Search ' . $plural_name,
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No ' . $plural_name,
		'items_list'                 => $plural_name . ' list',
		'items_list_navigation'      => $plural_name . ' list navigation',
	);

	// Register the taxonomy.
	register_taxonomy(
		'review_category',
		'review',
		array(
			'labels'            => $labels,
			'public'            => true,
			'show_in_rest'      => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'rewrite'           => array(
				'slug' => 'review-category',
			),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\register_taxonomy_review_category' );
