<?php
/**
 * Custom hooks
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'medplus_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function medplus_site_info() {
		do_action( 'medplus_site_info' );
	}
}

add_action( 'medplus_site_info', 'medplus_add_site_info' );
if ( ! function_exists( 'medplus_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function medplus_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'https://wordpress.org/', 'medplus' ) ),
			sprintf(
				/* translators: WordPress */
				esc_html__( 'Proudly powered by %s', 'medplus' ),
				'WordPress'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: 1: Theme name, 2: Theme author */
				esc_html__( 'Theme: %1$s by %2$s.', 'medplus' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'https://medplus.com', 'medplus' ) ) . '">medplus.com</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: Theme version */
				esc_html__( 'Version: %1$s', 'medplus' ),
				$the_theme->get( 'Version' )
			)
		);

		// Check if customizer site info has value.
		if ( get_theme_mod( 'medplus_site_info_override' ) ) {
			$site_info = get_theme_mod( 'medplus_site_info_override' );
		}

		echo apply_filters( 'medplus_site_info_content', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
}
