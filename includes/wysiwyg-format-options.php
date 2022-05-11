<?php
//--------------------------//
// FUNCTION:	Add format functions to wysiwyg editors
//-----------------------------------------------------//
function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Button Wrap',  
			'block' => 'a',  
			'classes' => 'bnt',
			'wrapper' => true,
		),
		array(  
			'title' => 'Section Wrap',  
			'block' => 'section',  
			'classes' => 'wysiwyg-section',
			'wrapper' => true,
		),
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 


function my_theme_add_editor_styles() {
    add_editor_style( '/css/admincss.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );

?>