<?php

function create_post_type_html5() {
	register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
	register_taxonomy_for_object_type('post_tag', 'html5-blank');

	//-----------------------------------------------------------//
	// 	           		  Portfolio Piece Post Type   	             //
	//-----------------------------------------------------------//
	register_post_type('portfolio', // Register Custom Post Type
		array(
		'labels' => array(
			'name' => __('Portfolio', 'html5blank'), // Rename these to suit
			'singular_name' => __('Portfolio Piece', 'html5blank'),
			'add_new' => __('Add Portfolio Piece', 'html5blank'),
			'add_new_item' => __('Add Portfolio Piece', 'html5blank'),
			'edit' => __('Edit', 'html5blank'),
			'edit_item' => __('Edit Portfolio Piece', 'html5blank'),
			'new_item' => __('New Portfolio Piece', 'html5blank'),
			'view' => __('View Portfolio Pieces', 'html5blank'),
			'view_item' => __('View Portfolio Piece', 'html5blank'),
			'search_items' => __('Search Portfolio Pieces', 'html5blank'),
			'not_found' => __('No Portfolio Piece found', 'html5blank'),
			'not_found_in_trash' => __('No Portfolio Pieces found in Trash', 'html5blank')
		),
		'public' => true,
		'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
		'has_archive' => false,
		'menu_icon' => 'dashicons-portfolio',
		'show_in_rest' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'custom-fields',
		), // Go to Dashboard Custom HTML5 Blank post for supports
		'can_export' => true, // Allows export in Tools > Export
		'taxonomies' => array(
			'category'
		) // Add Category and Post Tags support
	));
};
add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type

?>