<?php
//--------------------------//
// META BOX:	Adds a custom dropdown box to page templates
//-----------------------------------------------------//
add_action( 'add_meta_boxes', 'funiPageMeta_add_meta_box' );
/**
 * Adds the meta box to the page screen
 */
function funiPageMeta_add_meta_box() {
    add_meta_box(
        'funi_cpt_select',		 		// id, used as the html id att
        __( 'Post Type Selection' ), 	// meta box title, like "Page Attributes"
        'funiPageMeta_meta_box_cb', 	// callback function, spits out the content
        'page', 						// post type or page. We'll add this to pages only
        'side', 						// context (where on the screen
        'low' 							// priority, where should this go in the context?
    );
}

/**
 * Callback function for our meta box.  Echos out the content
 */
function funiPageMeta_meta_box_cb( $post ) {
     
    // We'll use this nonce field later on when saving.
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
    $value = get_post_meta( $post->ID, 'funi_cpt_select', true );
    $savedVal = ( $value == '' ? '<option value=""> </option>' : "<option value=\"{$value}\">{$value}</option><option value=\"\"> </option>" );

    // create dropdown
    $post_types = get_post_types();
	echo '<select name="funi_cpt_select" style="width: 100%;">';
			//echo "<option value=\"{$value}\">{$value}</option>";
			echo $savedVal;
			foreach ($post_types  as $post_type ) {
				echo $post_type = ( $post_type != $value ? '<option value="'. $post_type.'">'. $post_type . '</option>' : '' );
			};
	echo '</select>';
	echo '<p>Select a post type to pull post information for this page template.<br><span style="font-size: 10px; font-weight: bold;">This only applies to templates that require use of this option. If no option is selected, it will default to the page title.</span></p>';
}

add_action( 'save_post', 'funiPageMeta_cd_meta_box_save' );
function funiPageMeta_cd_meta_box_save( $post_id ) {
	// Bail if we're doing an auto save
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	
	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
	
	// if our current user can't edit this post, bail
	if ( ! current_user_can( 'edit_posts' ) ) return;

	// Make sure that it is set.
	if ( ! isset( $_POST['funi_cpt_select'] ) ) {
		return;
	}
	
	// Sanitize user input.
	$my_data = sanitize_text_field( $_POST['funi_cpt_select'] );
	
	// Update the meta field in the database.
	update_post_meta( $post_id, 'funi_cpt_select', $my_data );	
};

?>