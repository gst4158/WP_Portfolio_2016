<?php

// Gallery Columns
//---------------------------------------------------------------------

add_filter( 'manage_edit-gallery_columns', 'my_edit_gallery_columns' ) ;
function my_edit_gallery_columns( $columns ) {

	$columns = array(
		'cb' => '<input type="checkbox" />',
		'title' => __( 'Gallery' ),
		'sliderOption' => __( 'Slider Option' ),
		'imageThumb' => __( 'Image Thumbnail' ),
		'outboundLink' => __( 'Image Link <span style="font-size: 10px;">(optional)</span>' ),
		'displayText' => __( 'Image Text <span style="font-size: 10px;">(optional)</span>' )
	);

	return $columns;
}

add_action( 'manage_gallery_posts_custom_column', 'my_manage_gallery_columns', 10, 2 );

function my_manage_gallery_columns( $column, $post_id ) {
	global $post;

	switch( $column ) {

		// If displaying the 'imageThumb' column.
		//----------------------------------------
		case 'imageThumb' :

			/* Get the post meta. */
			$galleryImg = get_field('field_gallery_image');

			/* If no duration is found, output a default message. */
			if ( empty( $galleryImg ) )
				echo '';
			else
				echo "<img src=\"{$galleryImg}\" width=\"55\" height=\"55\" />";

			break;
		// end

		// If displaying the 'sliderOption' column.
		//----------------------------------------
		case 'sliderOption' :

			/* Get the post meta. */
			$sliderOption = get_field('field_link_slider_option');

			/* If no duration is found, output a default message. */
			if ( $sliderOption == 'no' ) {
				echo 'Not used on slider';
			} else {
				$sliderImg = get_field('field_slider_image');
				echo "<img src=\"{$sliderImg}\" width=\"200\" height=\"56\" />";
			};
			break;
		// end

		// If displaying the 'outboundLink' column.
		//----------------------------------------
		case 'outboundLink' :

			/* Get the post meta. */
			if ( get_field('field_link_slider_option') == 'yes' ) {
				$linkURL 	= get_field('field_link_url');
			};
			
			/* If no duration is found, output a default message. */
			if ( empty( $linkURL ) )
				echo 'No link attached to image';
			else
				echo "<a href=\"{$linkURL}\" target=\"_blank\">{$linkURL}</a>";

			break;
		// end

		// If displaying the 'displayText' column.
		//----------------------------------------
		case 'displayText' :

			/* Get the post meta. */
			if ( get_field('field_link_slider_option') == 'yes' ) {
				$imageText = ( get_field('field_optional_text') ? get_field('field_optional_text') : "" );
			};

			/* If no duration is found, output a default message. */
			if ( empty( $imageText ) )
				echo 'No text attached to image';
			else
				echo $imageText;

			break;
		// end

		/* Just break out of the switch statement for everything else. */
		default :
			break;
	}
}
// END Gallery Columns
//---------------------------------------------------------------------

?>