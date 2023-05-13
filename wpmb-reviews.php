<?php
/**
 * Plugin Name: WPMB Reviews
 * Plugin URI: https://wpmasterbuilder.com
 * Description: WPMB Reviews training plugin
 * Version: 0.5.0
 * Author: Josh Robbs
 * Author URI: https://wpmasterbuilder.com
 *
 * Text Domain: wpmb-reviews
 *
 * @package wpmb_reviews
 */

namespace WPMB_Reviews;

defined( 'ABSPATH' ) || exit;

// Define constants.
define(
	'WPMB_REVIEWS_DETAILS',
	array(
		'review_post_type'         => 'review',
		'single_name'              => 'Review',
		'plural_name'              => 'Reviews',
		'review_category_taxonomy' => 'review_category', // Or leave empty for no category taxonomy.

	)
);

// Includes.
require 'php/review-post-type.php';
require 'php/review-category-taxonomy.php';
require 'php/review-fields.php';
require 'php/review-shortcode.php';
require 'php/save-review.php';
require 'php/add-reviews-to-post-systems.php';
