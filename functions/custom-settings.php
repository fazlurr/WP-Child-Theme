<?php
/**
 * General settings functions.
 *
 * @package XScoop Theme
 */

function fr_custom_logo() {

	$output = NULL;

    // Get logo image url if image has been assigned.
	$check_logoset = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );

	if ( ! empty( $check_logoset[0] ) ) {
	   if ( function_exists( 'the_custom_logo' ) ) {
			$output = get_custom_logo();
		}
	} else {
		if( display_header_text() ) {
			$output .= '<a rel="home" href="' . esc_url( home_url( '/' ) ) . '">';
			$output .= '<h1 rel="home" class="site-title" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</h1>';
			$output .= '<h2 class="site-description" title="' . esc_attr( get_bloginfo( 'description', 'display' ) ) . '">' . esc_html( get_bloginfo( 'description' ) ) . '</h2>';
			$output .= '</a>';
		}
	}

	// Output logo is set
	if ( ! empty( $output ) ) {
		echo $output;
	}
}

?>