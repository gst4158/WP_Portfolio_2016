<?php

$site_template = get_template_directory_uri();

//======================================//
//============ Site Services ==========//
if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array (
	'key' => 'group_port',
	'title' => 'Portfolio',
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'portfolio',
			),
		),
	),
	// fields
	'fields' => array (
		
		// Project Information
		//==========================//
		// tab
		array (
			'key' => 'field_port_default_tab',
			'label' => 'Project Information',
			'name' => 'port_default_tab',
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
			'key' => 'field_port_default_message',
			'label' => 'Project Information',
			'name' => 'port_default_message',
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
				<h1>Project Information</h1>
				<p>Basic content and settings for this portfolio item</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		
		// checkboxes
		array (
			'key' => 'field_port_default_option',
			'label' => 'Project Options',
			'name' => 'port_default_option',
			'type' => 'checkbox',
			'instructions' => 'Paragraph text for the project',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'beauty' 		=> 'Beauty Spreads',
				'meta' 			=> 'Website Features',
				'gallery' 		=> 'Gallery Images',
				'fullscreen' 	=> 'Full Screen Image',
			),
			'default_value' => array (
			),
			'layout' => 'vertical',
			'toggle' => 1,
		),

		// repeater
		array (
			'key' => 'field_port_default_parts',
			'label' => 'Page Parts',
			'name' => 'port_default_parts',
			'type' => 'repeater',
			'instructions' => 'Choose which order your page parts will appear on the screen',
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
			'layout' => 'block',
			'button_label' => 'Add Section',
			'sub_fields' => array (
				array (
					'key' => 'field_port_part_section',
					'label' => 'Part Selection',
					'name' => 'part_selection',
					'type' => 'select',
					'instructions' => 'Choose your page item',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'beauty' => 'Beauty Spreads',
						'meta' => 'Website Features',
						'gallery' => 'Image Gallery',
						'fullscreen' => 'Fullscreen Images',
					),
					'default_value' => array (
						'null' => 'null',
					),
					'allow_null' => 1,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
			),
		),

		// select
		array (
			'key' => 'field_port_default_featured',
			'label' => 'Featured Project',
			'name' => 'port_default_featured',
			'type' => 'select',
			'instructions' => 'Is this project featured to show up on the front page',
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
		// text
		array (
			'key' => 'field_port_default_role',
			'label' => 'Project Role',
			'name' => 'port_default_role',
			'type' => 'text',
			'instructions' => 'What part of the project did you participate in?',
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

		// color picker
		array (
			'key' => 'field_port_default_color',
			'label' => 'Background color',
			'name' => 'port_default_color',
			'type' => 'color_picker',
			'instructions' => 'What color is this sections background?<br /><small>Default color: #<span style="text-transform: uppercase;">FFFFFF</span></small>',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'colorpicker',
				'id' => '',
			),
			'default_value' => '#ffffff',
		),

		// image
		array (
			'key' => 'field_port_default_image',
			'label' => 'Full Screen Image',
			'name' => 'port_default_image',
			'type' => 'image',
			'instructions' => 
				"Photo of a device mockup under the about paragraph<br>
				<strong>If you need an image template, click <a href=\"{$site_template}/images/templates/port-template-mockup.psd\">here</a></strong>
				",
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

		// textarea
		array (
			'key' => 'field_port_default_sharetext',
			'label' => 'Share Text',
			'name' => 'port_default_sharetext',
			'type' => 'textarea',
			'instructions' => 'Paragraph text for the about paragraph section.',
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
			'key' => 'field_port_default_text',
			'label' => 'Project WYSIWYG',
			'name' => 'port_default_text',
			'type' => 'wysiwyg',
			'instructions' => 'Paragraph text for the project',
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

		// Cover Section
		//==========================//
		// tab
		array (
			'key' => 'field_port_cover_tab',
			'label' => 'Cover Layout',
			'name' => 'port_cover_tab',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
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
			'key' => 'field_port_cover_message',
			'label' => 'Cover Layout',
			'name' => 'port_cover_message',
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
				<h1>Page Cover</h1>
				<p>Add image + text to act as this projects intro</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		
		// image
		array (
			'key' => 'field_port_cover_img',
			'label' => 'Cover Image',
			'name' => 'port_cover_img',
			'type' => 'image',
			'instructions' => 
				"Upload your cover shot image<br>
				<strong>If you need an image template, click <a href=\"{$site_template}/images/templates/port-template-cover.psd\">here</a></strong>
				",
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

		// select
		array (
			'key' => 'field_port_cover_txtcolor',
			'label' => 'Text Color',
			'name' => 'port_cover_txtcolor',
			'type' => 'select',
			'instructions' => 'Select which color this text will be',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'select',
				'id' => '',
			),
			'choices' => array (
				'black' => 'Black',
				'white' => 'White',
			),
			'default_value' => array (
				'black' => 'Black',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		
		// text
		array (
			'key' => 'field_port_cover_title',
			'label' => 'Cover Title',
			'name' => 'port_cover_title',
			'type' => 'text',
			'instructions' => 'Title for the page cover',
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
			'key' => 'field_port_cover_text',
			'label' => 'Cover Text',
			'name' => 'port_cover_text',
			'type' => 'wysiwyg',
			'instructions' => 'Paragraph text for the page cover',
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

		// Footer Section
		//==========================//
		// tab
		/*
		array (
			'key' => 'field_port_footer_tab',
			'label' => 'Footer Layout',
			'name' => 'port_footer_tab',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
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
			'key' => 'field_port_footer_message',
			'label' => 'Footer Layout',
			'name' => 'port_footer_message',
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
				<h1>Page Cover</h1>
				<p>Add image + text to act as this projects intro</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		
		// image
		array (
			'key' => 'field_port_footer_img',
			'label' => 'Footer Image',
			'name' => 'port_footer_img',
			'type' => 'image',
			'instructions' => 
				"Upload your footer image<br>
				<strong>If you need an image template, click <a href=\"{$site_template}/images/templates/port-template-footer.psd\">here</a></strong>
				",
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

		// select
		array (
			'key' => 'field_port_footer_txtcolor',
			'label' => 'Text Color',
			'name' => 'port_footer_txtcolor',
			'type' => 'select',
			'instructions' => 'Select which color this text will be',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'select',
				'id' => '',
			),
			'choices' => array (
				'black' => 'Black',
				'white' => 'White',
			),
			'default_value' => array (
				'black' => 'Black',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		
		// text
		array (
			'key' => 'field_port_footer_title',
			'label' => 'Footer Title',
			'name' => 'port_footer_title',
			'type' => 'text',
			'instructions' => 'Title for the footer section',
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
			'key' => 'field_port_footer_text',
			'label' => 'Footer Text',
			'name' => 'port_footer_text',
			'type' => 'wysiwyg',
			'instructions' => 'Paragraph text for the page footer',
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
		*/


		// Beauty Spreads
		//==========================//
		// tab
		array (
			'key' => 'field_port_beauty_tab',
			'label' => 'Beauty Layout',
			'name' => 'port_beauty_tab',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_port_default_option',
						'operator' => '==',
						'value' => 'beauty',
					),
				),
			),
			'placement' => 'top',
			'endpoint' => 0,
		),

		// message
		array (
			'key' => 'field_port_beauty_message',
			'label' => 'Beauty Layout',
			'name' => 'port_beauty_message',
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
				<h1>Beauty Images</h1>
				<p>Add beauty images + text spreads</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),

		// color picker
		array (
			'key' => 'field_port_beauty_color',
			'label' => 'Background color',
			'name' => 'port_beauty_color',
			'type' => 'color_picker',
			'instructions' => 'What color is this sections background?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'colorpicker',
				'id' => '',
			),
			'default_value' => '#ebebeb',
		),

		// text
		array (
			'key' => 'field_port_beauty_title',
			'label' => 'Beauty Title',
			'name' => 'port_beauty_title',
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
		
		// wysiwyg
		array (
			'key' => 'field_port_beauty_text',
			'label' => 'Beauty Text',
			'name' => 'port_beauty_text',
			'type' => 'wysiwyg',
			'instructions' => 'Paragraph text for the page cover',
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


		// repeater
		array (
			'key' => 'field_port_beauty_repeater',
			'label' => 'Beauty Spreads',
			'name' => 'port_beauty_repeater',
			'type' => 'repeater',
			'instructions' => 
				"Beauty Spreads for this project<br>
				<strong>If you need an image template, click <a href=\"{$site_template}/images/templates/port-template-beauty.psd\">here</a></strong>
				",
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_beauty_repeat_img',
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Spread',
			'sub_fields' => array (

				// color picker - font color
				array (
					'key' => 'field_'.'beauty_repeat_text_color',
					'label' => 'Font color',
					'name' => 'beauty_repeat_text_color',
					'type' => 'color_picker',
					'instructions' => 'What font color for this section?',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => 'colorpicker',
						'id' => '',
					),
					'default_value' => '#343838',
				),

				// color picker - BG color
				array (
					'key' => 'field_'.'beauty_repeat_bg_color',
					'label' => 'Background color',
					'name' => 'beauty_repeat_bg_color',
					'type' => 'color_picker',
					'instructions' => '
						What color is this sections background?<br>
						<span style="font-weight: bold; font-size: 10px;">Typical Colors are: #ebebeb & #e1e1dc </span>
					',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => 'colorpicker',
						'id' => '',
					),
					'default_value' => '#ebebeb',
				),

				// select
				array (
					'key' => 'field_'.'beauty_repeat_wedge',
					'label' => 'Wedge Display Option',
					'name' => 'beauty_repeat_wedge',
					'type' => 'select',
					'instructions' => 'Include extra wedge graphic at the top of this container?',
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
						'no' => 'no',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),

				// image
				array (
					'key' => 'field_'.'beauty_repeat_img',
					'label' => 'Beauty Image',
					'name' => 'beauty_repeat_img',
					'type' => 'image',
					'instructions' => 
						"Upload your cover shot image<br>
						",
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

				// text
				array (
					'key' => 'field_'.'beauty_repeat_title',
					'label' => 'Spread Title',
					'name' => 'beauty_repeat_title',
					'type' => 'text',
					'instructions' => 'Title for this spread',
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
					'key' => 'field_'.'beauty_repeat_subtitle',
					'label' => 'Spread Title',
					'name' => 'beauty_repeat_subtitle',
					'type' => 'text',
					'instructions' => 'Sub title for this spread',
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
					'key' => 'field_'.'beauty_repeat_text',
					'label' => 'Spread Text',
					'name' => 'beauty_repeat_text',
					'type' => 'textarea',
					'instructions' => 'Paragraph text for the project',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'beauty_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
				
			),
		),

		// Project Meta
		//==========================//
		// tab
		array (
			'key' => 'field_port_meta_tab',
			'label' => 'Website Features',
			'name' => 'port_meta_tab',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_port_default_option',
						'operator' => '==',
						'value' => 'meta',
					),
				),
			),
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
			'key' => 'field_port_meta_message',
			'label' => 'Website Features',
			'name' => 'port_meta_message',
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
				<h1>Website Features</h1>
				<p>Items that made this website special and different from others</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),

		// text
		array (
			'key' => 'field_port_meta_title',
			'label' => 'Meta Title',
			'name' => 'port_meta_title',
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

		// color picker
		array (
			'key' => 'field_port_meta_color',
			'label' => 'Background color',
			'name' => 'port_meta_color',
			'type' => 'color_picker',
			'instructions' => 'What color is this sections background?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'colorpicker',
				'id' => '',
			),
			'default_value' => '#ebebeb',
		),
		
		// wysiwyg
		array (
			'key' => 'field_port_meta_text',
			'label' => 'Beauty Text',
			'name' => 'port_meta_text',
			'type' => 'wysiwyg',
			'instructions' => 'Paragraph text for the meta section',
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

		// repeater
		array (
			'key' => 'field_port_meta_repeater',
			'label' => 'Project Meta Information',
			'name' => 'port_meta_repeater',
			'type' => 'repeater',
			'instructions' => 
				"Meta Information for this project<br>
				<strong><a href=\"{$site_template}/images/templates/project-icons.psd\">Download Icon Image Template/Sprite</a></strong>
				",			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_meta_repeat_title',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Service',
			'sub_fields' => array (
				// select
				array (
					'key' => 'field_port_meta_icon',
					'label' => 'Meta Icion',
					'name' => 'meta_repeater_icon',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => 'select',
						'id' => '',
					),
					'choices' => array (
						'Code Icons' => array(
							'codeone' => 'Development 01',
							'codetwo' => 'Development 02',
							'codethree' => 'Design & Development',
							'design' => 'Design',
						),
						'Project Types' => array(
							'responsive' => 'Responsive',
							'onepage' => 'One Page',
							'awardone' => 'Award Winning 01',
							'awardtwo' => 'Award Winning 02',
						),
						'Website Purposes' => array(
							'promotional' => 'Promotional (Word Balloon)',
							'promotionaltwo' => 'Promotional (Megaphone)',
							'theatrical' => 'Theatrical',
							'fooddrink' => 'Food & Drink',
							'designstudio' => 'Design Studio',
							'calendar' => 'Calendar & Scheduling',
						),
						'Brand Specific' => array(
							'dbz' => 'Dragon Ball Z',
							'atot' => 'Attack on Titan',
							'wolfchildren' => 'Wolf Children',
						),
						'Misc Icons' => array(
							'wordballoon' => 'Word Balloon',
							'gaming' => 'Gaming',
							'layout' => 'Layout',
							'cropping' => 'Picture/Cropping',
							'puzzle' => 'Puzzle',
							'dial' => 'Speed Gauge',
							'rocket' => 'Rocketship',
							'map' => 'Map',
							'typography' => 'Typography',
							'news' => 'Newspaper',
							'house' => 'Home / School',
						),
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),	
				// text - title
				array (
					'key' => 'field_meta_repeat_title',
					'label' => 'Meta title',
					'name' => 'meta_repeater_title',
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
					'key' => 'field_meta_repeat_text',
					'label' => 'Meta text',
					'name' => 'meta_repeater_text',
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

		// Gallery
		//==========================//
		// tab
		array (
			'key' => 'field_port_gallery_tab',
			'label' => 'Gallery',
			'name' => 'port_gallery_tab',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_port_default_option',
						'operator' => '==',
						'value' => 'gallery',
					),
				),
			),
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
			'key' => 'field_port_gallery_message',
			'label' => 'Gallery',
			'name' => 'port_gallery_message',
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
				<h1>Gallery</h1>
				<p>Upload images to go into the websites\' gallery that will open up in a lightbox</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		// color picker
		array (
			'key' => 'field_port_gallery_color',
			'label' => 'Background color',
			'name' => 'port_gallery_color',
			'type' => 'color_picker',
			'instructions' => 'What color is this sections background?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'colorpicker',
				'id' => '',
			),
			'default_value' => '#ebebeb',
		),
		
		// text
		array (
			'key' => 'field_port_gallery_title',
			'label' => 'Gallery Title',
			'name' => 'port_gallery_title',
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
		
		// wysiwyg
		array (
			'key' => 'field_port_gallery_text',
			'label' => 'Gallery Text',
			'name' => 'port_gallery_text',
			'type' => 'wysiwyg',
			'instructions' => 'Paragraph text for the gallery section',
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

		// gallery
		array (
			'key' => 'field_port_gallery_gallery',
			'label' => 'Gallery Images',
			'name' => 'port_gallery_gallery',
			'type' => 'gallery',
			'instructions' => 
				"Upload your gallery images<br>
				<strong>If you need an image template, click <a href=\"{$site_template}/images/templates/port-template-gallery.psd\">here</a></strong>
				",
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
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

		// Full Screen Items
		//==========================//
		// tab
		array (
			'key' => 'field_port_fullscreen_tab',
			'label' => 'Full Screen Images',
			'name' => 'port_fullscreen_tab',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_port_default_option',
						'operator' => '==',
						'value' => 'fullscreen',
					),
				),
			),
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
			'key' => 'field_port_fullscreen_message',
			'label' => 'Full Screen Images',
			'name' => 'port_fullscreen_message',
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
				<h1>Full Screen Images</h1>
				<p>Images that take up 100% width and its options</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		
		// color picker
		array (
			'key' => 'field_port_fullscreen_color',
			'label' => 'Background color',
			'name' => 'port_fullscreen_color',
			'type' => 'color_picker',
			'instructions' => 'What color is this sections background?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => 'colorpicker',
				'id' => '',
			),
			'default_value' => '#ebebeb',
		),
				
		// text
		array (
			'key' => 'field_port_fullscreen_title',
			'label' => 'Full Screen Title',
			'name' => 'port_fullscreen_title',
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
		
		//wysiwyg
		array (
			'key' => 'field_port_fullscreen_text',
			'label' => 'Full Screen Text',
			'name' => 'port_fullscreen_text',
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
			'key' => 'field_port_fullscreen_image',
			'label' => 'Full Screen Image',
			'name' => 'port_fullscreen_image',
			'type' => 'image',
			'instructions' => 
				"Full Screen images with no padding/margin<br>
				<strong>If you need an image template, click <a href=\"{$site_template}/images/templates/port-template-fullscreen.psd\">here</a></strong>
				",
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

	),
	//======================================//
	//=============== OPTIONS ==============//
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
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
		//11 => 'featured_image',
		12 => 'categories',
		13 => 'tags',
		14 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;
?>