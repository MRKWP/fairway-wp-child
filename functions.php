<?php
/**
 * Child Theme Functions.
 *
 * @package Fairway WP child theme.
 */

if ( ! defined( 'WP_DEBUG' ) ) {
	die( 'Direct access forbidden.' );
}

/**
 * Setup Child Theme Styles
 */
function fairwaywp_kadence_ct_enqueue_styles() {

	// Set styles.
	wp_enqueue_style( 'fairwaywp-style', get_stylesheet_directory_uri() . '/style.css', false, '1.1' );

	// Add custom styles.
	wp_enqueue_style( 'fairwaywp-bundle', get_stylesheet_directory_uri() . '/assets/css/bundle.css', false, '1.1.1' );

	// Add custom block styles.
	wp_enqueue_style( 'fairwaywp-blocks', get_stylesheet_directory_uri() . '/assets/css/blocks.css', false, '1.1.1' );
}
add_action( 'wp_enqueue_scripts', 'fairwaywp_kadence_ct_enqueue_styles', 80 );
