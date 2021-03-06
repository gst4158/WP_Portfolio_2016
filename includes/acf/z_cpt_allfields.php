<?php


//=================================================================================//
//========================== EVERY ACF FIELD AVAILABLE ============================//
//=================================================================================//
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_563f34b47e49d',
	'title' => 'Every Field',
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'POSTTYPE',
			),
		),
	),
	// fields
	'fields' => array (

		// -------------------------------//
		// Basic Fields
		// -------------------------------//
		array (
			'key' => 'field_563f38b19f576',
			'label' => 'Basic',
			'name' => 'tab',
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
			'key' => 'field_563f3e09534bc',
			'label' => 'Section Title',
			'name' => '',
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
				<h1>Basic Fields</h1>
				<p>Basic tabs for the ACF plugin</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		// text
		array (
			'key' => 'field_563f34c85770e',
			'label' => 'text',
			'name' => 'text',
			'type' => 'text',
			'instructions' => 'instructions',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 100,
				'class' => 'textclass',
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
		// textarea
		array (
			'key' => 'field_563f34f75770f',
			'label' => 'textarea',
			'name' => 'textarea',
			'type' => 'textarea',
			'instructions' => 'instructions',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'textarea',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		// number
		array (
			'key' => 'field_563f351d57710',
			'label' => 'number',
			'name' => 'number',
			'type' => 'number',
			'instructions' => 'number',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'number',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		// email
		array (
			'key' => 'field_563f35317cc31',
			'label' => 'email',
			'name' => 'email',
			'type' => 'email',
			'instructions' => 'email',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'email',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		// url
		array (
			'key' => 'field_563f35407cc32',
			'label' => 'url',
			'name' => 'url',
			'type' => 'url',
			'instructions' => 'url',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'url',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		// password
		array (
			'key' => 'field_563f354d7cc33',
			'label' => 'password',
			'name' => 'password',
			'type' => 'password',
			'instructions' => 'password',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'password',
				'id' => '',
			),
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		// wysiwyg
		array (
			'key' => 'field_563f355eda32d',
			'label' => 'wysiwyg',
			'name' => 'wysiwyg',
			'type' => 'wysiwyg',
			'instructions' => 'wysiwyg',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'wysiwyg',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		// -------------------------------//
		// Content Fields
		// -------------------------------//
		array (
			'key' => 'field_563f3d3f91bba',
			'label' => 'Content',
			'name' => '',
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
			'key' => 'field_563f3fec2e119',
			'label' => 'Content',
			'name' => '_copy',
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
				<h1>Content Fields</h1>
				<p>Content tab for the ACF plugin</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		// o-embed
		array (
			'key' => 'field_563f356ada32e',
			'label' => 'oembed',
			'name' => 'oembed',
			'type' => 'oembed',
			'instructions' => 'oembed',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'oembed',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		// image
		array (
			'key' => 'field_563f357bda32f',
			'label' => 'image',
			'name' => 'image',
			'type' => 'image',
			'instructions' => 'image',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'img',
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
		// file
		array (
			'key' => 'field_563f359ada330',
			'label' => 'file',
			'name' => 'file',
			'type' => 'file',
			'instructions' => 'file',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'file',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		// gallery
		array (
			'key' => 'field_563f35c422f5d',
			'label' => 'gallery',
			'name' => 'gallery',
			'type' => 'gallery',
			'instructions' => 'gallery',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'gallery',
				'id' => '',
			),
			'min' => '',
			'max' => '',
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
		// -------------------------------//
		// Choice Fields
		// -------------------------------//
		array (
			'key' => 'field_563f45bd1f7ca',
			'label' => 'Choice Tab',
			'name' => '_copy',
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
			'key' => 'field_563f45881f7c9',
			'label' => 'Choice',
			'name' => '',
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
				<h1>Choice Fields</h1>
				<p>Choice tab for the ACF plugin</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		// select
		array (
			'key' => 'field_563f35d622f5e',
			'label' => 'select',
			'name' => 'select',
			'type' => 'select',
			'instructions' => 'select',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'select',
				'id' => '',
			),
			'choices' => array (
				'no' => 'no',
				'yes' => 'yes',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		// checkbox
		array (
			'key' => 'field_563f35fd837a9',
			'label' => 'checkbox',
			'name' => 'checkbox',
			'type' => 'checkbox',
			'instructions' => 'checkbox',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'checkbox',
				'id' => '',
			),
			'choices' => array (
				'no' => 'no',
				'yes' => 'yes',
			),
			'default_value' => array (
			),
			'layout' => 'horizontal',
			'toggle' => 0,
		),
		// radio
		array (
			'key' => 'field_563f361b837aa',
			'label' => 'radio',
			'name' => 'radio',
			'type' => 'radio',
			'instructions' => 'radio',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'radio',
				'id' => '',
			),
			'choices' => array (
				'No' => 'No',
				'Yes' => 'Yes',
				'dafsdfas' => 'dafsdfas',
			),
			'other_choice' => 1,
			'save_other_choice' => 1,
			'default_value' => '',
			'layout' => 'vertical',
		),
		// true/false
		array (
			'key' => 'field_563f3642fcc91',
			'label' => 'truefalse',
			'name' => 'truefalse',
			'type' => 'true_false',
			'instructions' => 'truefalse',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'truefalse',
				'id' => '',
			),
			'message' => 'true false message',
			'default_value' => 0,
		),
		// -------------------------------//
		// Relationship Fields
		// -------------------------------//
		array (
			'key' => 'field_563f45cd1f7cb',
			'label' => 'Relationship Tab',
			'name' => '_copy',
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
			'key' => 'field_563f45e71f7cc',
			'label' => 'Relationship Message',
			'name' => '_copy',
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
				<h1>Relationship Message Fields</h1>
				<p>Relationship Message for the ACF plugin</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		// post objects
		array (
			'key' => 'field_563f3658fcc92',
			'label' => 'postobject',
			'name' => 'postobject',
			'type' => 'post_object',
			'instructions' => 'postobject',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'postobject',
				'id' => '',
			),
			'post_type' => array (
				0 => 'portfolio',
			),
			'taxonomy' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'object',
			'ui' => 1,
		),
		// page links
		array (
			'key' => 'field_563f37d70f497',
			'label' => 'pagelink',
			'name' => 'pagelink',
			'type' => 'page_link',
			'instructions' => 'pagelink',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'pagelink',
				'id' => '',
			),
			'post_type' => array (
				0 => 'attachment',
			),
			'taxonomy' => array (
			),
			'allow_null' => 1,
			'multiple' => 0,
		),
		// relationship
		array (
			'key' => 'field_563f37ef0f498',
			'label' => 'relationship',
			'name' => 'relationship',
			'type' => 'relationship',
			'instructions' => 'relationship',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'relationship',
				'id' => '',
			),
			'post_type' => array (
			),
			'taxonomy' => array (
			),
			'filters' => array (
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => '',
			'min' => '',
			'max' => '',
			'return_format' => 'object',
		),
		// taxonomy
		array (
			'key' => 'field_563f38190f499',
			'label' => 'taxonomy',
			'name' => 'taxonomy',
			'type' => 'taxonomy',
			'instructions' => 'taxonomy',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'taxonomy',
				'id' => '',
			),
			'taxonomy' => 'category',
			'field_type' => 'multi_select',
			'allow_null' => 1,
			'add_term' => 1,
			'save_terms' => 0,
			'load_terms' => 0,
			'return_format' => 'object',
			'multiple' => 0,
		),
		// user select
		array (
			'key' => 'field_563f38400f49a',
			'label' => 'user',
			'name' => 'user',
			'type' => 'user',
			'instructions' => 'user',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'user',
				'id' => '',
			),
			'role' => '',
			'allow_null' => 0,
			'multiple' => 1,
		),
		// -------------------------------//
		// jQuery Fields
		// -------------------------------//
		array (
			'key' => 'field_563f4617b1b5e',
			'label' => 'jQuery Tab',
			'name' => 'jquery_tab',
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
			'key' => 'field_563f4635b1b5f',
			'label' => 'jQuery Message',
			'name' => '_copy',
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
				<h1>jQuery Message Fields</h1>
				<p>jQuery Message for the ACF plugin</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		// google maps
		array (
			'key' => 'field_563f38580f49b',
			'label' => 'googlemap',
			'name' => 'googlemap',
			'type' => 'google_map',
			'instructions' => 'googlemap',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'googlemap',
				'id' => '',
			),
			'center_lat' => '',
			'center_lng' => '',
			'zoom' => '',
			'height' => '',
		),
		// date picker
		array (
			'key' => 'field_563f38720f49c',
			'label' => 'datepicker',
			'name' => 'datepickerdatepicker',
			'type' => 'date_picker',
			'instructions' => 'datepicker',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'datepicker',
				'id' => '',
			),
			'display_format' => 'd/m/Y',
			'return_format' => 'd/m/Y',
			'first_day' => 0,
		),
		// color picker
		array (
			'key' => 'field_563f38880f49d',
			'label' => 'colorpicker',
			'name' => 'colorpicker',
			'type' => 'color_picker',
			'instructions' => 'colorpicker',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'colorpicker',
				'id' => '',
			),
			'default_value' => '',
		),
		// -------------------------------//
		// Layout Fields
		// -------------------------------//
		array (
			'key' => 'field_563f4655b1b60',
			'label' => 'Layout Tab',
			'name' => '_copy',
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
			'key' => 'field_563f4662b1b61',
			'label' => 'Layout Message',
			'name' => '_copy',
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
				<h1>Layout Message Fields</h1>
				<p>Layout Message for the ACF plugin</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		// flex content
		array (
			'key' => 'field_563f39459f57d',
			'label' => 'flexcontent',
			'name' => 'flexcontent',
			'type' => 'flexible_content',
			'instructions' => 'flexcontent',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'flexcontent',
				'id' => '',
			),
			'button_label' => 'Add Row',
			'min' => '',
			'max' => 3,
			'layouts' => array (
				array (
					'key' => '563f590090139',
					'name' => 'user_controlled_contentUser Controlled Content',
					'label' => 'User Controlled Content',
					'display' => 'block',
					'sub_fields' => array (
						// user select
						array (
							'key' => 'field_563f59149013a',
							'label' => 'User Name',
							'name' => 'user_name',
							'type' => 'user',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'role' => '',
							'allow_null' => 0,
							'multiple' => 1,
						),
						// post objects
						array (
							'key' => 'field_563f5986d2450',
							'label' => 'Portfolio Page',
							'name' => 'portfolio_page',
							'type' => 'post_object',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'post_type' => array (
								0 => 'portfolio',
							),
							'taxonomy' => array (
							),
							'allow_null' => 0,
							'multiple' => 1,
							'return_format' => 'object',
							'ui' => 1,
						),
						// taxonomy
						array (
							'key' => 'field_563f5b1bf8d1a',
							'label' => 'Category Selection',
							'name' => 'category_selection',
							'type' => 'taxonomy',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'taxonomy' => 'category',
							'field_type' => 'multi_select',
							'allow_null' => 0,
							'add_term' => 1,
							'save_terms' => 0,
							'load_terms' => 0,
							'return_format' => 'id',
							'multiple' => 0,
						),
						// repeater
						array (
							'key' => 'field_563f5b40f8d1b',
							'label' => 'File Downloads',
							'name' => 'file_downloads',
							'type' => 'repeater',
							'instructions' => 'Upload files for users to download',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => '',
							'max' => '',
							'layout' => 'table',
							'button_label' => 'Add Row',
							'sub_fields' => array (
								// file
								array (
									'key' => 'field_563f5b5cf8d1c',
									'label' => 'File',
									'name' => 'file',
									'type' => 'file',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'library' => 'all',
									'min_size' => '',
									'max_size' => '',
									'mime_types' => '',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
			),
		),
		// repeater - block
		array (
			'key' => 'field_563f38ca9f577',
			'label' => 'repeater block',
			'name' => 'repeater',
			'type' => 'repeater',
			'instructions' => 'repeater',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'repeater',
				'id' => '',
			),
			'collapsed' => 'field_563f38d49f578',
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				// text
				array (
					'key' => 'field_563f38d49f578',
					'label' => 'repeater text',
					'name' => 'repeater_text',
					'type' => 'text',
					'instructions' => 'repeater text',
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
				// image
				array (
					'key' => 'field_563f548d94c16',
					'label' => 'repeater block image',
					'name' => 'repeater_block_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
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
			),
		),
		// repeater - row
		array (
			'key' => 'field_563f39059f579',
			'label' => 'repeater row',
			'name' => 'repeater_2',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'repeater2',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'row',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				// text
				array (
					'key' => 'field_563f390f9f57a',
					'label' => 'repeater text 2',
					'name' => 'repeater_text_2',
					'type' => 'text',
					'instructions' => '',
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
				// image
				array (
					'key' => 'field_563f546894c15',
					'label' => 'repeater row image',
					'name' => 'repeater_row_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
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
			),
		),
		// repeater table
		array (
			'key' => 'field_563f39249f57b',
			'label' => 'repeatertable',
			'name' => 'repeatertable',
			'type' => 'repeater',
			'instructions' => 'repeatertable',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'repeatertable',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				// text
				array (
					'key' => 'field_563f39399f57c',
					'label' => 'repeatertable text',
					'name' => 'repeatertable_text',
					'type' => 'text',
					'instructions' => '',
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
				// text
				array (
					'key' => 'field_563f544c94c14',
					'label' => 'repeatertable image',
					'name' => 'repeatertable_image',
					'type' => 'text',
					'instructions' => 'repeatertable image',
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
			),
		),
	),

	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'discussion',
		3 => 'comments',
		4 => 'revisions',
		5 => 'slug',
		6 => 'author',
		7 => 'format',
		8 => 'page_attributes',
		9 => 'tags',
		10 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;