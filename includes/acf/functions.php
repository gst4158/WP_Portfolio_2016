<?php

#---------------------------------------------------------------------------#
# Advabced Custom Fields config												#
#---------------------------------------------------------------------------# 


function my_acf_admin_enqueue_scripts() {
	
	// register style
    wp_register_style( 'my-acf-input-css', get_stylesheet_directory_uri() . '/includes/acf/css/style.css', false, '1.0.0' );
    wp_enqueue_style( 'my-acf-input-css' );
    
}

add_action( 'acf/input/admin_enqueue_scripts', 'my_acf_admin_enqueue_scripts' );





//--------------------------//
// FUNCTION:	Include ACF as part of theme
//-----------------------------------------------------//
// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/includes/acf/advanced-custom-fields-pro/';
    
    // return
    return $path;
    
}
 
// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
    // update path
    $dir = get_stylesheet_directory_uri() . '/includes/acf/advanced-custom-fields-pro/';
    // return
    return $dir;
}

// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
include_once( get_stylesheet_directory() . '/includes/acf/advanced-custom-fields-pro/acf.php' );

// 5. Include addons from 3rd party ACF devs
include_once( get_stylesheet_directory() . '/includes/acf/addons/acf-role-selector-field/acf-role_selector.php' );


//-----------------------------------------------------//




if( function_exists('acf_add_options_page') ) {
	
	// site settings
	acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'site-settings',
		'capability'	=> 'edit_posts',
		'icon_url' 		=> 'dashicons-admin-generic',
		'redirect'		=> false
	));
	
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Social Media',
			'menu_title'	=> 'Social Media',
			'parent_slug'	=> 'site-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Pre Loader',
			'menu_title'	=> 'Pre Loader',
			'parent_slug'	=> 'site-settings',
		));
	
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Copyright',
			'menu_title'	=> 'Copyright',
			'parent_slug'	=> 'site-settings',
		));

	// Services
	acf_add_options_page(array(
		'page_title' 	=> 'Services',
		'menu_title'	=> 'Services',
		'menu_slug' 	=> 'services',
		'capability'	=> 'edit_posts',
		'icon_url' 		=> 'dashicons-heart',
		'redirect'		=> false
	));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Proficiencies',
			'menu_title'	=> 'Proficiencies',
			'parent_slug'	=> 'services',
		));

}

// include acf filegroups
if(!get_field('dev', 'options')) {
	require get_template_directory() . '/includes/acf/export.php';
};



?>