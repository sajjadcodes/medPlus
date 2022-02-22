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




// Custom Post Type for Service Template






// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'medplus' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'medplus' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'medplus' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'medplus' ),
		'archives' => __( 'Service Archives', 'medplus' ),
		'attributes' => __( 'Service Attributes', 'medplus' ),
		'parent_item_colon' => __( 'Parent Service:', 'medplus' ),
		'all_items' => __( 'All Services', 'medplus' ),
		'add_new_item' => __( 'Add New Service', 'medplus' ),
		'add_new' => __( 'Add New', 'medplus' ),
		'new_item' => __( 'New Service', 'medplus' ),
		'edit_item' => __( 'Edit Service', 'medplus' ),
		'update_item' => __( 'Update Service', 'medplus' ),
		'view_item' => __( 'View Service', 'medplus' ),
		'view_items' => __( 'View Services', 'medplus' ),
		'search_items' => __( 'Search Service', 'medplus' ),
		'not_found' => __( 'Not found', 'medplus' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'medplus' ),
		'featured_image' => __( 'Featured Image', 'medplus' ),
		'set_featured_image' => __( 'Set featured image', 'medplus' ),
		'remove_featured_image' => __( 'Remove featured image', 'medplus' ),
		'use_featured_image' => __( 'Use as featured image', 'medplus' ),
		'insert_into_item' => __( 'Insert into Service', 'medplus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'medplus' ),
		'items_list' => __( 'Services list', 'medplus' ),
		'items_list_navigation' => __( 'Services list navigation', 'medplus' ),
		'filter_items_list' => __( 'Filter Services list', 'medplus' ),
	);
	$args = array(
		'label' => __( 'Service', 'medplus' ),
		'description' => __( '', 'medplus' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );







// Register Custom Post Type Speciality
function create_speciality_cpt() {

	$labels = array(
		'name' => _x( 'Specialities', 'Post Type General Name', 'medplus' ),
		'singular_name' => _x( 'Speciality', 'Post Type Singular Name', 'medplus' ),
		'menu_name' => _x( 'Specialities', 'Admin Menu text', 'medplus' ),
		'name_admin_bar' => _x( 'Speciality', 'Add New on Toolbar', 'medplus' ),
		'archives' => __( 'Speciality Archives', 'medplus' ),
		'attributes' => __( 'Speciality Attributes', 'medplus' ),
		'parent_item_colon' => __( 'Parent Speciality:', 'medplus' ),
		'all_items' => __( 'All Specialities', 'medplus' ),
		'add_new_item' => __( 'Add New Speciality', 'medplus' ),
		'add_new' => __( 'Add New', 'medplus' ),
		'new_item' => __( 'New Speciality', 'medplus' ),
		'edit_item' => __( 'Edit Speciality', 'medplus' ),
		'update_item' => __( 'Update Speciality', 'medplus' ),
		'view_item' => __( 'View Speciality', 'medplus' ),
		'view_items' => __( 'View Specialities', 'medplus' ),
		'search_items' => __( 'Search Speciality', 'medplus' ),
		'not_found' => __( 'Not found', 'medplus' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'medplus' ),
		'featured_image' => __( 'Featured Image', 'medplus' ),
		'set_featured_image' => __( 'Set featured image', 'medplus' ),
		'remove_featured_image' => __( 'Remove featured image', 'medplus' ),
		'use_featured_image' => __( 'Use as featured image', 'medplus' ),
		'insert_into_item' => __( 'Insert into Speciality', 'medplus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Speciality', 'medplus' ),
		'items_list' => __( 'Specialities list', 'medplus' ),
		'items_list_navigation' => __( 'Specialities list navigation', 'medplus' ),
		'filter_items_list' => __( 'Filter Specialities list', 'medplus' ),
	);
	$args = array(
		'label' => __( 'Speciality', 'medplus' ),
		'description' => __( '', 'medplus' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-universal-access-alt',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'speciality', $args );

}
add_action( 'init', 'create_speciality_cpt', 0 );






// Register Custom Post Type Doctor
function create_doctor_cpt() {

	$labels = array(
		'name' => _x( 'Doctors', 'Post Type General Name', 'medplus' ),
		'singular_name' => _x( 'Doctor', 'Post Type Singular Name', 'medplus' ),
		'menu_name' => _x( 'Doctors', 'Admin Menu text', 'medplus' ),
		'name_admin_bar' => _x( 'Doctor', 'Add New on Toolbar', 'medplus' ),
		'archives' => __( 'Doctor Archives', 'medplus' ),
		'attributes' => __( 'Doctor Attributes', 'medplus' ),
		'parent_item_colon' => __( 'Parent Doctor:', 'medplus' ),
		'all_items' => __( 'All Doctors', 'medplus' ),
		'add_new_item' => __( 'Add New Doctor', 'medplus' ),
		'add_new' => __( 'Add New', 'medplus' ),
		'new_item' => __( 'New Doctor', 'medplus' ),
		'edit_item' => __( 'Edit Doctor', 'medplus' ),
		'update_item' => __( 'Update Doctor', 'medplus' ),
		'view_item' => __( 'View Doctor', 'medplus' ),
		'view_items' => __( 'View Doctors', 'medplus' ),
		'search_items' => __( 'Search Doctor', 'medplus' ),
		'not_found' => __( 'Not found', 'medplus' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'medplus' ),
		'featured_image' => __( 'Featured Image', 'medplus' ),
		'set_featured_image' => __( 'Set featured image', 'medplus' ),
		'remove_featured_image' => __( 'Remove featured image', 'medplus' ),
		'use_featured_image' => __( 'Use as featured image', 'medplus' ),
		'insert_into_item' => __( 'Insert into Doctor', 'medplus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Doctor', 'medplus' ),
		'items_list' => __( 'Doctors list', 'medplus' ),
		'items_list_navigation' => __( 'Doctors list navigation', 'medplus' ),
		'filter_items_list' => __( 'Filter Doctors list', 'medplus' ),
	);
	$args = array(
		'label' => __( 'Doctor', 'medplus' ),
		'description' => __( '', 'medplus' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-welcome-learn-more',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
		'taxonomies' => array('area'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'doctor', $args );

}
add_action( 'init', 'create_doctor_cpt', 0 );





// Register Taxonomy Area
function create_area_tax() {

	$labels = array(
		'name'              => _x( 'Areas', 'taxonomy general name', 'medplus' ),
		'singular_name'     => _x( 'Area', 'taxonomy singular name', 'medplus' ),
		'search_items'      => __( 'Search Areas', 'medplus' ),
		'all_items'         => __( 'All Areas', 'medplus' ),
		'parent_item'       => __( 'Parent Area', 'medplus' ),
		'parent_item_colon' => __( 'Parent Area:', 'medplus' ),
		'edit_item'         => __( 'Edit Area', 'medplus' ),
		'update_item'       => __( 'Update Area', 'medplus' ),
		'add_new_item'      => __( 'Add New Area', 'medplus' ),
		'new_item_name'     => __( 'New Area Name', 'medplus' ),
		'menu_name'         => __( 'Area', 'medplus' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'medplus' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'area', array('doctor'), $args );

}
add_action( 'init', 'create_area_tax' );











// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'medplus' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'medplus' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'medplus' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'medplus' ),
		'archives' => __( 'Testimonial Archives', 'medplus' ),
		'attributes' => __( 'Testimonial Attributes', 'medplus' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'medplus' ),
		'all_items' => __( 'All Testimonials', 'medplus' ),
		'add_new_item' => __( 'Add New Testimonial', 'medplus' ),
		'add_new' => __( 'Add New', 'medplus' ),
		'new_item' => __( 'New Testimonial', 'medplus' ),
		'edit_item' => __( 'Edit Testimonial', 'medplus' ),
		'update_item' => __( 'Update Testimonial', 'medplus' ),
		'view_item' => __( 'View Testimonial', 'medplus' ),
		'view_items' => __( 'View Testimonials', 'medplus' ),
		'search_items' => __( 'Search Testimonial', 'medplus' ),
		'not_found' => __( 'Not found', 'medplus' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'medplus' ),
		'featured_image' => __( 'Featured Image', 'medplus' ),
		'set_featured_image' => __( 'Set featured image', 'medplus' ),
		'remove_featured_image' => __( 'Remove featured image', 'medplus' ),
		'use_featured_image' => __( 'Use as featured image', 'medplus' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'medplus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'medplus' ),
		'items_list' => __( 'Testimonials list', 'medplus' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'medplus' ),
		'filter_items_list' => __( 'Filter Testimonials list', 'medplus' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'medplus' ),
		'description' => __( '', 'medplus' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );










// Register Custom Post Type Gallery
function create_gallery_cpt() {

	$labels = array(
		'name' => _x( 'Gallery', 'Post Type General Name', 'medplus' ),
		'singular_name' => _x( 'Gallery', 'Post Type Singular Name', 'medplus' ),
		'menu_name' => _x( 'Gallery', 'Admin Menu text', 'medplus' ),
		'name_admin_bar' => _x( 'Gallery', 'Add New on Toolbar', 'medplus' ),
		'archives' => __( 'Gallery Archives', 'medplus' ),
		'attributes' => __( 'Gallery Attributes', 'medplus' ),
		'parent_item_colon' => __( 'Parent Gallery:', 'medplus' ),
		'all_items' => __( 'All Gallery', 'medplus' ),
		'add_new_item' => __( 'Add New Gallery', 'medplus' ),
		'add_new' => __( 'Add New', 'medplus' ),
		'new_item' => __( 'New Gallery', 'medplus' ),
		'edit_item' => __( 'Edit Gallery', 'medplus' ),
		'update_item' => __( 'Update Gallery', 'medplus' ),
		'view_item' => __( 'View Gallery', 'medplus' ),
		'view_items' => __( 'View Gallery', 'medplus' ),
		'search_items' => __( 'Search Gallery', 'medplus' ),
		'not_found' => __( 'Not found', 'medplus' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'medplus' ),
		'featured_image' => __( 'Featured Image', 'medplus' ),
		'set_featured_image' => __( 'Set featured image', 'medplus' ),
		'remove_featured_image' => __( 'Remove featured image', 'medplus' ),
		'use_featured_image' => __( 'Use as featured image', 'medplus' ),
		'insert_into_item' => __( 'Insert into Gallery', 'medplus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Gallery', 'medplus' ),
		'items_list' => __( 'Gallery list', 'medplus' ),
		'items_list_navigation' => __( 'Gallery list navigation', 'medplus' ),
		'filter_items_list' => __( 'Filter Gallery list', 'medplus' ),
	);
	$args = array(
		'label' => __( 'Gallery', 'medplus' ),
		'description' => __( '', 'medplus' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-camera',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
		'taxonomies' => array('group'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'gallery', $args );

}
add_action( 'init', 'create_gallery_cpt', 0 );







// Register Taxonomy Group
function create_group_tax() {

	$labels = array(
		'name'              => _x( 'Groups', 'taxonomy general name', 'medplus' ),
		'singular_name'     => _x( 'Group', 'taxonomy singular name', 'medplus' ),
		'search_items'      => __( 'Search Groups', 'medplus' ),
		'all_items'         => __( 'All Groups', 'medplus' ),
		'parent_item'       => __( 'Parent Group', 'medplus' ),
		'parent_item_colon' => __( 'Parent Group:', 'medplus' ),
		'edit_item'         => __( 'Edit Group', 'medplus' ),
		'update_item'       => __( 'Update Group', 'medplus' ),
		'add_new_item'      => __( 'Add New Group', 'medplus' ),
		'new_item_name'     => __( 'New Group Name', 'medplus' ),
		'menu_name'         => __( 'Group', 'medplus' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'medplus' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'group', array('gallery'), $args );

}
add_action( 'init', 'create_group_tax' );