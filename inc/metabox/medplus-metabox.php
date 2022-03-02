<?php



function wporg_add_custom_box() {
    $screens = ['branch' ];
    foreach ( $screens as $screen ) {
        add_meta_box(
            'wporg_box_id',                 // Unique ID
            'Branch Opening & Closing Times',      // Box title
            'branch_monday_html',  // Content callback, must be of type callable
            $screen                            // Post type
        );
    }
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box' );

function branch_monday_html( $post ) {
	$mon_fri_time = get_post_meta( $post->ID, 'monday_to_friday', true );
	$sat_time = get_post_meta( $post->ID, 'saturday_time', true );
	$sun_time = get_post_meta( $post->ID, 'sunday_time', true );

    ?>
    <label for="wporg_field">Monday - Friday</label><br>
    <input type="text" value="<?php echo ($mon_fri_time =='') ? "" : $mon_fri_time ; ?>" name="monday_to_friday" id="monday_to_friday" required="required"><br>
	<label for="wporg_field">Saturday</label><br>
    <input type="text" value="<?php echo ($sat_time =='') ? "" : $sat_time ; ?>" name="saturday_time" id="saturday_time" required="required"><br>
	<label for="wporg_field">Sunday</label><br>
    <input type="text" value="<?php echo ($sun_time =='') ? "" : $sun_time ; ?>" name="sunday_time" id="sunday_time" required="required">
    <?php
}

// saving values
function branch_save_postdata( $post_id ) {
    if ( array_key_exists( 'monday_to_friday', $_POST ) ) {
        update_post_meta(
            $post_id,
            'monday_to_friday',
            $_POST['monday_to_friday']
        );
    }
	if ( array_key_exists( 'saturday_time', $_POST ) ) {
        update_post_meta(
            $post_id,
            'saturday_time',
            $_POST['saturday_time']
        );
    }
	if ( array_key_exists( 'sunday_time', $_POST ) ) {
        update_post_meta(
            $post_id,
            'sunday_time',
            $_POST['sunday_time']
        );
    }
}
add_action( 'save_post', 'branch_save_postdata' );