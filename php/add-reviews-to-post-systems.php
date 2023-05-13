<?php
/**
 * Add review post type to main loop and RSS
 *
 * @package wpmb_reviews
 */

namespace WPMB_Reviews\PHP;

use WPMB_UTILITIES\Classes\WPMB_Utilities;

defined( 'ABSPATH' ) || exit;

/**
 * Add review post type to main loop
 *
 * @param object $query The main query object.
 * @return void
 */
function add_review_post_type_to_main_loop( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	// If no query_vars, set values. Else, add to array.
	// ?? Should this be a utility function?
	$query_vars = $query->query_vars;
	if ( empty( $query_vars ) ) {
		$query->set( 'post_type', array( 'post', WPMB_REVIEWS_DETAILS['review_post_type'] ) );
	} elseif ( \is_array( $query_vars ) ) {
		$query_vars['post_type'][] = WPMB_REVIEWS_DETAILS['review_post_type'];
		$query->set( 'post_type', $query_vars['post_type'] );
	}

	WPMB_Utilities::write_log( $query->query_vars );
}
// Add review post type to main loop.
add_action( 'pre_get_posts', __NAMESPACE__ . '\add_review_post_type_to_main_loop' );
