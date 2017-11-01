<?php
/**
 * Jetpack Compatibility File
 * @link http://jetpack.me/
 *
 */

/**
 * Add theme support for Infinite Scroll.
 * @link http://jetpack.me/support/infinite-scroll/
 *
 */
function gateway_plus_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'gateway_plus_jetpack_setup' );
