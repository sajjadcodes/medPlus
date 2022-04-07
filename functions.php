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


function medplus_ajax(){

    wp_register_script('medplus_ajax',get_template_directory_uri() . '/js/medplus-ajax.js', array('jquery'), '', true);
	wp_enqueue_script( 'medplus_ajax');
    wp_localize_script( 'medplus_ajax', 'GalleryGroup', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));  
}
add_action( 'wp_enqueue_scripts', 'medplus_ajax' );


// wp_localize_script( 'test_script', 'GalleryGroup', array( 'galleryurl' => admin_url( 'admin-ajax.php' ))); 



add_action( 'wp_ajax_nopriv_gallery_group', 'medplus_gallery_group' );
add_action( 'wp_ajax_gallery_group', 'medplus_gallery_group' );

function medplus_gallery_group() {
   $galleryGroup = $_POST['galleryGroup'];
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'gallery',
            'tax_query' => array(
                array(
                    'taxonomy' => 'group',
                    'field'    => 'slug',
                    'terms'    => $galleryGroup,
                ),
            ),
        );
        $query = new WP_Query($args);
        if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    ?>
                         <div class="col mb-4">
                            <a href="<?php the_post_thumbnail_url();?>" data-caption="Image caption">
                                <img src="<?php the_post_thumbnail_url();?>" alt="First image" class="img-fluid mb-4">
                            </a>         
                        </div>
                <?php
                }
        } 
        else {
            echo"<h3>No.Gallery Found</h3>";
        }

        die();
    

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




function medplus_testimonail_add_custom_box() {
    $screens = [ 'testimonial' ];
    foreach ( $screens as $screen ) {
        add_meta_box(
            'wporg_box_id',                 // Unique ID
            'Custom Meta Box Title',      // Box title
            'wporg_custom_box_html',  // Content callback, must be of type callable
            $screen                            // Post type
        );
    }
}
add_action( 'add_meta_boxes', 'medplus_testimonail_add_custom_box' );



function wporg_custom_box_html( $post ) {
	$value = get_post_meta( $post->ID, '_wporg_meta_key', true );
    ?>
    <label for="wporg_field">Rate out of 5</label>
	
    <select name="wporg_field" id="wporg_field" class="postbox">
        <option value="1 <?php selected( $value, '1' ); ?>">1</option>
        <option value="2 <?php selected( $value, '2' ); ?>">2</option>
        <option value="3 <?php selected( $value, '3' ); ?>">3</option>
        <option value="4 <?php selected( $value, '4' ); ?>">4</option>
        <option value="5 <?php selected( $value, '5' ); ?>">5</option>
    </select>
    <?php
}

function wporg_save_postdata( $post_id ) {
    if ( array_key_exists( 'wporg_field', $_POST ) ) {
        update_post_meta(
            $post_id,
            '_wporg_meta_key',
            $_POST['wporg_field']
        );
    }
}
add_action( 'save_post', 'wporg_save_postdata' );