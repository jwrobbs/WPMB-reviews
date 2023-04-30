<?php
/**
 * Review Functions class
 *
 * 1. Create HTML output for a review
 * 2. Calculate the average rating for a review during save_post
 * 3. Create review schema markup
 *
 * @package wpmb_reviews
 */

namespace WPMB_Reviews\classes;

defined( 'ABSPATH' ) || exit;

/**
 * Review Functions class
 */
class Review_Functions {

	/**
	 * Generate review HTML
	 *
	 * @param int $post_id Post ID.
	 *
	 * @return string
	 */
	public static function wpmb_review_html( $post_id ) {

		return '';
	}
}
