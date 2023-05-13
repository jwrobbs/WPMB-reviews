<?php
/**
 * Calculate average rating on save
 *
 * @package wpmb_reviews
 */

namespace WPMB_Reviews\PHP;

defined( 'ABSPATH' ) || exit;

/**
 * Calculate average rating on save
 *
 * @param int $post_id Post ID.
 *
 * @return void
 */
function wpmb_calculate_average_rating( $post_id ) {

	// bail out if this is an autosave.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	$fields = get_fields( $post_id );
	// Loop through array $fields. Count and sum ratings where key ends in '_score'.
	$count = 0;
	$sum   = 0;
	foreach ( $fields as $key => $value ) {
		if ( '_score' === substr( $key, -6 ) ) {
			$count++;
			$sum += $value;
		}
	}

	// Calculate average.
	$average = $sum / $count;
	$average = round( $average, 1 );

	// Update post meta: average_rating.
	$results = update_post_meta( $post_id, '_average_rating', $average );
}

$save_post_tag = 'save_post_' . WPMB_REVIEWS_DETAILS['review_post_type'];
add_action( $save_post_tag, __NAMESPACE__ . '\wpmb_calculate_average_rating' );
