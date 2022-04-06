<?php
/**
 * Medplus enqueue scripts
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'medplus_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function medplus_scripts() {
		// Get the theme data.
		$the_theme         = wp_get_theme();
		$theme_version     = $the_theme->get( 'Version' );
		$bootstrap_version = get_theme_mod( 'medplus_bootstrap_version', 'bootstrap4' );
		$suffix            = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		// Grab asset urls.
		$theme_styles  = "/css/theme{$suffix}.css";
		$theme_scripts = "/js/theme{$suffix}.js";
		if ( 'bootstrap4' === $bootstrap_version ) {
			$theme_styles  = "/css/theme-bootstrap4{$suffix}.css";
			$theme_scripts = "/js/theme-bootstrap4{$suffix}.js";
		}

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_styles );
		wp_enqueue_style( 'medplus-styles', get_template_directory_uri() . $theme_styles, array(), $css_version );
		wp_enqueue_style( 'baguetteBox_style',  get_template_directory_uri().'/assets/css/baguetteBox.min.css', array() );
		wp_enqueue_style( 'slick_main',  get_template_directory_uri().'/assets/css/slick.css', array() );
		wp_enqueue_style( 'slick_theme',  get_template_directory_uri().'/assets/css/slick-theme.css', array() );
		wp_enqueue_style( 'aos_style',  get_template_directory_uri().'/assets/css/aos.css', array() );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'aos_scripts', get_template_directory_uri() . '/js/aos.js', array(), '', true );
		wp_enqueue_script( 'slick_script', get_template_directory_uri() . '/js/slick.min.js', array(), '', true );
		wp_enqueue_script( 'baguetteBox_script', get_template_directory_uri() . '/js/baguetteBox.min.js', array(), '', true );
		$js_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_scripts );
		wp_enqueue_script( 'medplus-scripts', get_template_directory_uri() . $theme_scripts, array(), $js_version, true );
	
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}


		// if(is_archive('gallery')){
	// wp_enqueue_script( 'baguetteBox_script', get_template_directory_uri() . '/js/baguetteBox.min.js', array(), '', true );
	// wp_enqueue_script( 'test', get_template_directory_uri() . '/js/test.js', array(), '', true );
		// }
	}
} // End of if function_exists( 'medplus_scripts' ).

add_action( 'wp_enqueue_scripts', 'medplus_scripts' );
