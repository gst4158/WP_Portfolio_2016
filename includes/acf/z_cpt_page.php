<?php


//=================================================================================//
//================================ PAGE SETTINGS ==================================//
//=================================================================================//
$fields = array();
$pageHeader = array();
register_field_group(array (
		'id' => 'acf_page',
		'title' => 'Page Headers',
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),		
		//-----------------------------//
		// Main Content
		//-----------------------------//
	$pageHeader = array (
		// tab
		array (
			'key' => 'field_page_tab',
			'label' => 'Page Header',
			'name' => 'pagetab',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		// message
		array (
			'key' => 'field_page_message',
			'label' => 'Page Header',
			'name' => 'page_message',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '
				<h1>Page Header</h1>
				<p>Add content & edit options for this page section</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		// text title
		array (
			'key' => 'field_page_title',
			'label' => 'Title',
			'name' => 'page_title',
			'type' => 'text',
			'instructions' => 'What is the title for this page? <span style="display: block; font-size: 10px; font-weight: bold;">If blank, will default to page title</span>',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),

		// text sub-title
		array (
			'key' => 'field_page_subtitle',
			'label' => 'Sub-Title',
			'name' => 'page_subtitle',
			'type' => 'text',
			'instructions' => 'What is the sub-title for this page? <span style="display: block; font-size: 10px; font-weight: bold;">If blank, nothing will display</span>',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		
		// wysiwyg
		array (
			'key' => 'field_page_wysiwyg',
			'label' => 'Content',
			'name' => 'page_content',
			'type' => 'wysiwyg',
			'instructions' => 'What is the content for this section?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		// img - background image
		array (
			'key' => 'field_page_bgimage',
			'label' => 'Background Image',
			'name' => 'page_background_image',
			'type' => 'image',
			'instructions' => 'Add a background image to this section. <span style="font-size: 10px; display: block; font-weight: bold;">Download a template by clicking <a href="'.$site_template.'/images/templates/wide-img-template.psd" title="Click here for template">Here</a></span>',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		/*
		// select - link option
		array (
			'key' => 'field_page_linkoption',
			'label' => 'Link Option',
			'name' => 'link_option',
			'type' => 'select',
			'instructions' => 'Does this page section have a link below the content?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'no' => 'No',
				'yes' => 'Yes',
			),
			'default_value' => array (
				'No' => 'No',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		// link url
		array (
			'key' => 'field_page_url',
			'label' => 'Link URL',
			'name' => 'link_url',
			'type' => 'page_link',
			'instructions' => 'Enter a page to link this section to',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_page_linkoption',
						'operator' => '==',
						'value' => 'yes',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'page',
				1 => 'portfolio',
			),
			'taxonomy' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
		),
		// text - link text
		array (
			'key' => 'field_page_linktext',
			'label' => 'Link Text',
			'name' => 'link_text',
			'type' => 'text',
			'instructions' => 'What is the text for this link?',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_page_linkoption',
						'operator' => '==',
						'value' => 'yes',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Your link text here È',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		// text
		array (
			'key' => 'field_textover',
			'label' => 'Text Above Link',
			'name' => 'text_above_link',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_page_linkoption',
						'operator' => '==',
						'value' => 'yes',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		*/

	), // end fields
	
	// Merge fields + our shared flipcard meta fields
	$fields = array_merge($pageHeader), // $flipcard_parts comes from included file: z_part_flipcard.php
	'fields' => $fields,	
	
	
	'options' => array (
		'position' => 'normal',
		'layout' => 'default',
		'hide_on_screen' => array (
			0 => 'the_content',
			1 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			//9 => 'featured_image',
			//10 => 'categories',
			11 => 'tags',
			12 => 'send-trackbacks',
			13 => 'attributes',
		),
	),
	'menu_order' => 0,
	)
);
