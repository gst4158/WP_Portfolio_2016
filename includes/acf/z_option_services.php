<?php

$site_template = get_template_directory_uri();

//======================================//
//============ Site Services ==========//
if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array (
	'key' => 'group_services',
	'title' => 'Services',
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'services',
			),
		),
	),
	// fields
	'fields' => array (
		// message
		array (
			'key' => 'field_566c60c7b2053',
			'label' => 'Service Message',
			'name' => 'service_message',
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
				<h1>Services</h1>
				<p>Service settings and content editing</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		
		// title
		array (
			'key' => 'field_service_title',
			'label' => 'Service Title',
			'name' => 'service_title',
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
			'key' => 'field_service_text',
			'label' => 'Service Paragraph Text',
			'name' => 'service_text',
			'type' => 'wysiwyg',
			'instructions' => '',
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
		// image
		array (
			'key' => 'field_service_sprite',
			'label' => 'Service Icon Sprite',
			'name' => 'service_icon_sprite',
			'type' => 'image',
			'instructions' => 'Upload a sprite for each service icon',
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
		// repeater
		array (
			'key' => 'field_service_repeater',
			'label' => 'Service Repeater',
			'name' => 'service_repeater',
			'type' => 'repeater',
			'instructions' => 'Add a new service',
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
			'button_label' => 'Add Service',
			'sub_fields' => array (
				// text - class
				array (
					'key' => 'field_service_repeat_class',
					'label' => 'service repeater class',
					'name' => 'service_repeater_class',
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
				// text - title
				array (
					'key' => 'field_service_repeat_title',
					'label' => 'service repeater title',
					'name' => 'service_repeater_title',
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
				// textarea 
				array (
					'key' => 'field_service_repeat_text',
					'label' => 'service repeater text',
					'name' => 'service_repeater_text',
					'type' => 'textarea',
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
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'none',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
	),
	//======================================//
	//=============== OPTIONS ==============//
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'custom_fields',
		4 => 'discussion',
		5 => 'comments',
		6 => 'revisions',
		7 => 'slug',
		8 => 'author',
		9 => 'format',
		10 => 'page_attributes',
		11 => 'featured_image',
		12 => 'categories',
		13 => 'tags',
		14 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;



//======================================//
//============= Proficiencies ==========//
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_proficiencies',
	'title' => 'Proficiencies',
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-proficiencies',
			),
		),
	),
	// fields
	'fields' => array (

		//======================================//
		//=============== Proficiencies ==============//
		array (
			'key' => 'field_prof_tab',
			'label' => 'Proficiencies',
			'name' => 'prof_option_tab',
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
			'key' => 'field_prof_message',
			'label' => 'Proficiencies',
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
				<h1>Proficiencies</h1>
				<p>A list of all proficiencies</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		// text
		array (
			'key' => 'field_prof_title',
			'label' => 'Section Title',
			'name' => 'prof_title',
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
			'key' => 'field_prof_img',
			'label' => 'Section Background Image',
			'name' => 'prof_img',
			'type' => 'image',
			'instructions' => 'Upload an image for this section\'s background image',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array', // don't change this or it might break image links
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
		
		// repeater
		array (
			'key' => 'field_prof_repeater',
			'label' => 'Proficiencies Repeater',
			'name' => 'prof_repeater',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_prof_tax',
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Row',
			'sub_fields' => array (

				// taxonomy
				array (
					'key' => 'field_prof_tax',
					'label' => 'Parent Category',
					'name' => 'prof_tax',
					'type' => 'taxonomy',
					'instructions' => 'taxonomy',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => 'taxonomy',
						'id' => '',
					),
					'taxonomy' => 'proftax',
					'field_type' => 'select',
					'allow_null' => 1,
					'add_term' => 1,
					'save_terms' => 0,
					'load_terms' => 0,
					'return_format' => 'object',
					'multiple' => 0,
				),
				// repeater
				array (
					'key' => 'field_prof_repeat_repeat',
					'label' => 'Proficiency Repeater',
					'name' => 'prof_repeat_repeat',
					'type' => 'repeater',
					'instructions' => '',
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
					'button_label' => 'Add Proficiency',
					'sub_fields' => array (
						// text
						array (
							'key' => 'field_prof_repeat_repeat_prof',
							'label' => 'Proficiency',
							'name' => 'prof_repeat_repeat_prof',
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
					),
				),
			),
		),

		//======================================//
		//=============== Options ==============//
		array (
			'key' => 'field_prof_option_tab',
			'label' => 'Section Options',
			'name' => 'prof_option_tab',
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
			'key' => 'field_prof_option_message',
			'label' => 'Section Options',
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
				<h1>Proficieny Options</h1>
				<p>Settings for the proficiency section of the website</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),

		// select
		array (
			'key' => 'field_prof_option_wysiwyg_option',
			'label' => 'Proficiency Text Option',
			'name' => 'select',
			'type' => 'select',
			'instructions' => 'Do you want to add text under proficiencies?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'select',
				'id' => '',
			),
			'choices' => array (
				'no' => 'No',
				'yes' => 'Yes',
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

		// wysiwyg
		array (
			'key' => 'field_prof_option_wysiwyg',
			'label' => 'wysiwyg',
			'name' => 'prof_option_wysiwyg',
			'type' => 'wysiwyg',
			'instructions' => 'wysiwyg',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_prof_option_wysiwyg_option',
						'operator' => '==',
						'value' => 'yes',
					),
				),
			),
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

	),
	//======================================//
	//=============== OPTIONS ==============//
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		//3 => 'custom_fields',
		4 => 'discussion',
		5 => 'comments',
		6 => 'revisions',
		7 => 'slug',
		8 => 'author',
		9 => 'format',
		10 => 'page_attributes',
		11 => 'featured_image',
		12 => 'categories',
		13 => 'tags',
		14 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;
?>