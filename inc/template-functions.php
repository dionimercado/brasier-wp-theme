<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package brasier
 */

show_admin_bar( false );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function brasier_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'brasier_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function brasier_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'brasier_pingback_header' );

/**
 * Maintenance page redirec
 */
function maintenance_redirect() {
	if( (! is_page( 'maintenance' ) && ! current_user_can( 'administrator' )) && ! is_page('demo') ) {
		wp_redirect( get_the_permalink( 5 ) );
		exit;
	}
}
// add_action( 'template_redirect', 'maintenance_redirect' );
