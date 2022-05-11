<?php
//--------------------------//
// BULK/QUICK EDIT:	Adds location ID post meta to the the quick/bulk edit options
//-----------------------------------------------------//

// Add a dummy column for the `posts` post type 
add_filter('manage_location_posts_columns' , 'book_cpt_columns', 10, 2);
function book_cpt_columns($columns) {

	$new_columns = array(
		'wpsl_locatorID' => __('wpsl_locatorID'),
	);
    return array_merge($columns, $new_columns);
}

// But remove it again on the edit screen (other screens to?)
function my_columns_filter( $columns ) {
	unset($columns['wpsl_locatorID']);
	return $columns;
}
add_filter( 'manage_edit-location_columns', 'my_columns_filter',10, 1 );

// Add our text to the quick edit box
add_action('quick_edit_custom_box', 'on_quick_edit_custom_box', 10, 2);
add_action('bulk_edit_custom_box', 'on_quick_edit_custom_box', 10, 2);
function on_quick_edit_custom_box($columns, $post_type) {
	
	// ** README **	Looks like WP strips the wpsl_ from the meta ID.
	// 				May have to echo out $columns first to get the true value you're looking for.

	// Generate the new metabox
    if ('locatorID' == $columns && get_post_type() == 'location' ) {
    	echo  "<fieldset class=\"inline-edit-col-right\" style=\"margin-top: 0;\">";
    	echo  	"<div class=\"inline-edit-col\">";
    	echo 		"<div class=\"inline-edit-group\">";
    	echo 			"<label class=\"alignleft\">";
		echo 				"<span class=\"title\" for=\"wpsl_locatorID\">Movie ID</span>";
		echo 				"<input type=\"text\" name=\"wpsl_locatorID\" id=\"wpsl_locatorID\" value=\"\" />";
    	echo 			"</label>";
    	echo 		"</div>";
    	echo 	"</div>";
		echo "</fieldset>";
    };
}

// Update the post meta
add_action( 'save_post', 'locationMetaUpdate', 10, 3 );
function locationMetaUpdate( $post_id, $post, $update ) {
	
	//print_r($_REQUEST['wpsl_locatorID']); die();
	
	// if our current user can't edit this post, bail
	if ( ! current_user_can( 'edit_posts' ) ) return;

	// Make sure that it is set.
	if ( isset($_REQUEST['wpsl_locatorID']) && $_REQUEST['wpsl_locatorID'] != null ) {
		return update_post_meta( $post_id, 'wpsl_locatorID', sanitize_text_field( $_REQUEST['wpsl_locatorID'] ) );
	}
}


?>