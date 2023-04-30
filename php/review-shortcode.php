<?php
/**
 * Plugin Name: WPMB Reviews shortcode
 *
 * @package wpmb_reviews
 */

namespace WPMB_Reviews\Review_Shortcode;

use WPMB_Reviews\classes\Review_Functions;

defined( 'ABSPATH' ) || exit;

/**
 * Shortcode to display review data
 *
 * Bridge function connecting the shortcode to the Review_Functions class.
 *
 * @param array $atts Shortcode attributes. Not used.
 * @return string
 */
function wpmb_review_shortcode( $atts ) {
	return Review_Functions::wpmb_review_html( get_the_ID() );
}
add_shortcode( 'wpmb-review-data', __NAMESPACE__ . '\wpmb_review_shortcode' );
