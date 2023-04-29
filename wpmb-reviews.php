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

defined( 'ABSPATH' ) || exit;

/*
	[x] Create post type
	[x] Create taxonomy
	[] Create fields (ACF Pro)
	[] Create shortcode
	[] Create shortcode fn
*/

// Includes.
require 'php/review-post-type.php';
require 'php/review-category-taxonomy.php';
