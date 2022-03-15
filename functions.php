<?php
/**
 * MedPlus functions and definitions
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// MedPlus's includes directory.
$medplus_inc_dir = 'inc';

// Array of files to include.
$medplus_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/medplus/medplus/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/cpt/medplus-cpt.php',                      // Load deprecated functions.
	'/metabox/medplus-metabox.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$medplus_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$medplus_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $medplus_includes as $file ) {
	require_once get_theme_file_path( $medplus_inc_dir . $file );
}





// post views count at front end


function gt_get_post_view() {


    $count = get_post_meta( get_the_ID(), 'post_views_count', true );


    return "$count views";


}


function gt_set_post_view() {


    $key = 'post_views_count';


    $post_id = get_the_ID();


    $count = (int) get_post_meta( $post_id, $key, true );


    $count++;


    update_post_meta( $post_id, $key, $count );


}


function gt_posts_column_views( $columns ) {


    $columns['post_views'] = 'Views';


    return $columns;


}


function gt_posts_custom_column_views( $column ) {


    if ( $column === 'post_views') {


        echo gt_get_post_view();


    }


}


add_filter( 'manage_posts_columns', 'gt_posts_column_views' );


add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );



// Get all custom post types


