<?php

$site_template = get_template_directory_uri();


//=================================================================================//
//================================ SITE SETTINGS ==================================//
//=================================================================================//
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_sitesettings',
	'title' => 'Site Settings',
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'site-settings',
			),
		),
	),
	// fields
	'fields' => array (
		//======================================//
		//============= Studio Settings ============//
		array (
			'key' => 'field_settings_tab',
			'label' => 'Studio Settings',
			'name' => 'settings_tab',
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
			'key' => 'field_settings_message',
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
				<h1>Basic Studio Settings</h1>
				<p>Set or edit the basic settings for your Studio</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),

		// email
		array (
			'key' => 'field_site_email',
			'label' => 'Email Address',
			'name' => 'site_email',
			'type' => 'email',
			'instructions' => 'What is your Studio\'s email address',
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'html',
			'maxlength' => '',
		),
		// default phone number
		array (
			'key' => 'field_phone_site_number',
			'label' => 'Phone Number',
			'name' => 'site_number',
			'type' => 'number',
			'instructions' => 'What is your Studio\'s phone number',
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'html',
			'maxlength' => 16,
		),
		// Contact form 7 text
		array (
			'key' => 'field_contact_form_7_shortcode',
			'label' => 'Contact Form 7 Shortcode',
			'name' => 'contact_form_7_shortcode',
			'type' => 'text',
			'instructions' => '
				Enter the shortcode for the Contact Form 7 form you want to use<br>
				<strong>Example: [contact-form-7 id="4" title="Contact form 1"] </strong>
			',
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'html',
			'maxlength' => '',
		),
		/*
		//======================================//
		//============= Studio Location ============//
		array (
			'key' => 'field_location_tab',
			'label' => 'Studio Location',
			'name' => 'location_tab',
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
			'key' => 'field_location_message',
			'label' => 'Studio Location',
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
				<h1>Studio Location</h1>
				<p>Location information for your site</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),

		// address line one
		array (
			'key' => 'field_location_address_one',
			'label' => 'Address Line One',
			'name' => 'address_line_one',
			'type' => 'text',
			'instructions' => 'Enter your Street Name',
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
		//address line two
		array (
			'key' => 'field_location_address_two',
			'label' => 'Address Line Two',
			'name' => 'address_line_two',
			'type' => 'text',
			'instructions' => 'Enter your secondary address line',
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
		// Studio city
		array (
			'key' => 'field_location_city',
			'label' => 'City',
			'name' => 'address_line_city',
			'type' => 'text',
			'instructions' => 'Enter the city your business is located in.',
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
		// Studio state
		array (
			'key' => 'field_location_state',
			'label' => 'State',
			'name' => 'state',
			'type' => 'select',
			'instructions' => 'What state or US territory are you located in?',
			'choices' => array (
				' ' => ' ',
				'AL'=>'ALABAMA',
				'AK'=>'ALASKA',
				'AS'=>'AMERICAN SAMOA',
				'AZ'=>'ARIZONA',
				'AR'=>'ARKANSAS',
				'CA'=>'CALIFORNIA',
				'CO'=>'COLORADO',
				'CT'=>'CONNECTICUT',
				'DE'=>'DELAWARE',
				'DC'=>'DISTRICT OF COLUMBIA',
				'FM'=>'FEDERATED STATES OF MICRONESIA',
				'FL'=>'FLORIDA',
				'GA'=>'GEORGIA',
				'GU'=>'GUAM GU',
				'HI'=>'HAWAII',
				'ID'=>'IDAHO',
				'IL'=>'ILLINOIS',
				'IN'=>'INDIANA',
				'IA'=>'IOWA',
				'KS'=>'KANSAS',
				'KY'=>'KENTUCKY',
				'LA'=>'LOUISIANA',
				'ME'=>'MAINE',
				'MH'=>'MARSHALL ISLANDS',
				'MD'=>'MARYLAND',
				'MA'=>'MASSACHUSETTS',
				'MI'=>'MICHIGAN',
				'MN'=>'MINNESOTA',
				'MS'=>'MISSISSIPPI',
				'MO'=>'MISSOURI',
				'MT'=>'MONTANA',
				'NE'=>'NEBRASKA',
				'NV'=>'NEVADA',
				'NH'=>'NEW HAMPSHIRE',
				'NJ'=>'NEW JERSEY',
				'NM'=>'NEW MEXICO',
				'NY'=>'NEW YORK',
				'NC'=>'NORTH CAROLINA',
				'ND'=>'NORTH DAKOTA',
				'MP'=>'NORTHERN MARIANA ISLANDS',
				'OH'=>'OHIO',
				'OK'=>'OKLAHOMA',
				'OR'=>'OREGON',
				'PW'=>'PALAU',
				'PA'=>'PENNSYLVANIA',
				'PR'=>'PUERTO RICO',
				'RI'=>'RHODE ISLAND',
				'SC'=>'SOUTH CAROLINA',
				'SD'=>'SOUTH DAKOTA',
				'TN'=>'TENNESSEE',
				'TX'=>'TEXAS',
				'UT'=>'UTAH',
				'VT'=>'VERMONT',
				'VI'=>'VIRGIN ISLANDS',
				'VA'=>'VIRGINIA',
				'WA'=>'WASHINGTON',
				'WV'=>'WEST VIRGINIA',
				'WI'=>'WISCONSIN',
				'WY'=>'WYOMING',
				'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
				'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)',
				'AP'=>'ARMED FORCES PACIFIC'
			),
			'default_value' => '',
			'allow_null' => 0,
			'multiple' => 0,
		),


		array (
			'key' => 'field_location_zipcode',
			'label' => 'Zip Code',
			'name' => 'zip_code',
			'type' => 'number',
			'instructions' => 'What is the zip code at your location?',
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
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		*/
		//======================================//
		//======== Optional Settings =======//
		array (
			'key' => 'field_optionsetting_tab',
			'label' => 'Optional Settings',
			'name' => 'optionsetting_tab',
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
			'key' => 'field_optionsetting_message',
			'label' => 'Optional Settings',
			'name' => '',
			'type' => 'message',
			'instructions' => 'Text and file uploads that will be on multiple pages on the site',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '
				<h1>Optional Settings</h1>
				<p>Location information for your site</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),

		// favicon
		array (
			'key' => 'field_settings_general_favicon',
			'label' => 'Favicon.ico',
			'name' => 'favicon',
			'type' => 'file',
			'instructions' => 
				"Upload your <strong>favicon.ico</strong> here. The image size is 16x16px.<br>
				You will need to convert to an ico, do so by clicking: <a href=\"http://www.favicon-generator.org/\" target=\"_blank\">Here</a><br>
				",
			'save_format' => 'url',
			'library' => 'all',
		),
		// favicon png
		array (
			'key' => 'field_settings_general_favicon_png',
			'label' => 'Favicon.png',
			'name' => 'favicon_png',
			'type' => 'image',
			'instructions' => 
				"Upload your <strong>favicon.png</strong> here. The image size is 16x16px.<br>
				<strong>If you need an image template, click <a href=\"{$site_template}/images/templates/favicon-template.psd\">here</a></strong>
				",
			'save_format' => 'url',
			'library' => 'all',
		),
		
		//share image
		array (
			'key' => 'field_settings_general_share_image',
			'label' => 'Share Image',
			'name' => 'share_image',
			'type' => 'image',
			'instructions' => "
					The image that gets posted if you share your site on facebook and google+. If you don't define a separate share image on the page / work this will get used as a default.<br>
					<br>
					<strong style=\"font-size: 10px;\">You will need to reset the Facebook Open Graph tag to make this change live immediately. <a href=\"https://developers.facebook.com/tools/debug/og/object/\" target=\"_blank\">Click here</a> to go to the update page, enter your URL into the 'input URL' field and select 'Fetch new scrape information' </strong><br>
					<br>
					<strong>If you need an image template, click <a href=\"{$site_template}/images/templates/social-share-template.psd\">here</a></strong>
					
				",				

			'save_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
		),
		// keywords
		array (
			'key' => 'field_settings_general_keywords',
			'label' => 'Key Words',
			'name' => 'general_keywords',
			'type' => 'textarea',
			'instructions' => '
					Add additional SEO management by adding keywords to your site. 
					<span style="font-size: 10px; font-weight: bold; display: block;">Separate each word with a comma</span>
				',
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'formatting' => 'html',
		),

		// google analytics
		array (
			'key' => 'field_settings_general_google_analytics',
			'label' => 'Google Analytics',
			'name' => 'google_analytics',
			'type' => 'textarea',
			'instructions' => 'Paste your Google Analytics code here',
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'formatting' => 'html',
		),
		/*
		//======================================//
		//============= Studio Settings ============//
		array (
			'key' => 'field_downloads_tab',
			'label' => 'Downloads',
			'name' => 'downloads_tab',
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
			'key' => 'field_downloads_message',
			'label' => 'Downloads',
			'name' => 'downloads_message',
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
				<h1>Site Downloads</h1>
				<p>Files that the user can download and take with them</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		// file
		array (
			'key' => 'field_downloads_resume',
			'label' => 'Resume Download',
			'name' => 'downloads_resume',
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
		// file
		array (
			'key' => 'field_downloads_portfolio',
			'label' => 'PDF Portfolio Download',
			'name' => 'downloads_portfolio',
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
		*/
		
		
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
//============= SOCIAL MEDIA ===========//
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_site_socialmedia',
	'title' => 'Social Media',
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-social-media',
			),
		),
	),
	// fields
	'fields' => array (
		// message
		array (
			'key' => 'field_socialmedia_message',
			'label' => 'Optional Settings',
			'name' => 'socialmedia_message',
			'type' => 'message',
			'instructions' => 'Text and file uploads that will be on multiple pages on the site',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '
				<h1>Social Media Outlets</h1>
				<p>
					Here you can link to the social media sites you use most.
					<br>
					<span style="font-size: 10px; font-weight: bold;">
						If not used a particular social media outlet, simply leave it blank and 
						it will not be displayed on your site.
					</span>
				</p>
			',
			'new_lines' => '',
			'esc_html' => 0,
		),
		// pdf portfolio
		array (
			'key' => 'field_socialmedia_pdf_portfolio',
			'label' => 'PDF Portfolio (should be around 7mb)',
			'name' => 'pdf_portfolio',
			'type' => 'file',
			'instructions' => 
				"Upload your <strong>PDF Portfolio</strong> here.
				",
			'save_format' => 'url',
			'library' => 'all',
		),
		// pdf portfolio
		array (
			'key' => 'field_socialmedia_pdf_resume',
			'label' => 'PDF Resume',
			'name' => 'pdf_resume',
			'type' => 'file',
			'instructions' => 
				"Upload your <strong>PDF Resume</strong> here.
				",
			'save_format' => 'url',
			'library' => 'all',
		),		
		// git hub
		array (
			'key' => 'field_socialmedia_github',
			'label' => 'Github',
			'name' => 'socialmedia_github',
			'type' => 'url',
			'instructions' => 'Enter your Github profile link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),

		// git hub
		array (
			'key' => 'field_socialmedia_linkedin',
			'label' => 'LinkedIn',
			'name' => 'socialmedia_linkedin',
			'type' => 'url',
			'instructions' => 'Enter your LinkedIn profile link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),

		// facebook
		array (
			'key' => 'field_socialmedia_facebook',
			'label' => 'Facebook',
			'name' => 'socialmedia_facebook',
			'type' => 'url',
			'instructions' => 'Enter your Facebook profile link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),

		// twitter
		array (
			'key' => 'field_socialmedia_twitter',
			'label' => 'Twitter',
			'name' => 'socialmedia_twitter',
			'type' => 'url',
			'instructions' => 'Enter your Twitter profile link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),

		// git hub
		array (
			'key' => 'field_socialmedia_dribble',
			'label' => 'Dribble',
			'name' => 'socialmedia_dribble',
			'type' => 'url',
			'instructions' => 'Enter your Dribble profile link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),

		// behance
		array (
			'key' => 'field_socialmedia_behance',
			'label' => 'Behance',
			'name' => 'socialmedia_behance',
			'type' => 'url',
			'instructions' => 'Enter your Behance profile link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		
		// pinterest
		array (
			'key' => 'field_socialmedia_pinterest',
			'label' => 'Pinterest',
			'name' => 'socialmedia_pinterest',
			'type' => 'url',
			'instructions' => 'Enter your Pinterest profile link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),

		// googleplus
		array (
			'key' => 'field_socialmedia_googleplus',
			'label' => 'Google+',
			'name' => 'socialmedia_googleplus',
			'type' => 'url',
			'instructions' => 'Enter your Google+ profile link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		// instagram
		array (
			'key' => 'field_socialmedia_instagram',
			'label' => 'Instagram',
			'name' => 'socialmedia_instagram',
			'type' => 'url',
			'instructions' => 'Enter your Instagram profile link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
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
//============== PRE-LOADER ============//
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_site_preloader',
	'title' => 'Pre-loader',
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-pre-loader',
			),
		),
	),
	// fields
	'fields' => array (
		// message
		array (
			'key' => 'field_preloader_message',
			'label' => 'Optional Settings',
			'name' => 'preloader_message',
			'type' => 'message',
			'instructions' => 'Text and file uploads that will be on multiple pages on the site',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '
				<h1>Pre-Loader Settings</h1>
				<p>Options for your site pre-loader</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),

		// site pre-loader option
		array (
			'key' => 'field_preloader_option',
			'label' => 'Display Pre-Loader Spinning Wheel',
			'name' => 'preloader_option',
			'type' => 'select',
			'instructions' => 'Do you want to display a spinning wheel on your pre-loader?',
			'choices' => array (
				'yes' => 'Yes',
				'no' => 'No',
			),
			'default_value' => 'no',
			'allow_null' => 0,
			'multiple' => 0,
		),
		// spinning wheel foreground color picker
		array (
			'key' => 'field_preloader_option_spinner',
			'label' => 'Pre-loader Spinning Wheel Rotating Color',
			'name' => 'preloader_option_spinner',
			'type' => 'color_picker',
			'instructions' => 'Color for the animated part of the spinning wheel.<br><strong>Default color is #b7b7b7</strong>',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'field_preloader_option',
						'operator' => '==',
						'value' => 'yes',
					),
				),
				'allorany' => 'all',
			),
			'default_value' => '#b7b7b7',
		),
		// text color picker
		array (
			'key' => 'field_preloader_option_text_color',
			'label' => 'Pre-loader Text Color',
			'name' => 'preloader_option_text_color',
			'type' => 'color_picker',
			'instructions' => 'Select a color for your pre-loader text.<br><strong>Default color is #ffffff</strong>',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'field_preloader_option',
						'operator' => '==',
						'value' => 'yes',
					),
				),
				'allorany' => 'all',
			),
			'default_value' => '#ffffff',
		),
	
		// fade in color picker
		array (
			'key' => 'field_preloader_option_BGcolor',
			'label' => 'Site Fade In Color',
			'name' => 'preloader_option_BGcolor',
			'type' => 'color_picker',
			'instructions' => 'Select a color for your site to fade in from. <br><strong>Default color is #353335</strong>',
			'default_value' => '#353335',
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
//=============== COPYRIGHT ============//
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_site_copyright',
	'title' => 'Copyright',
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-copyright',
			),
		),
	),
	// fields
	'fields' => array (
		// message
		array (
			'key' => 'field_copyright_message',
			'label' => 'Copyright Settings',
			'name' => 'copyright_message',
			'type' => 'message',
			'instructions' => 'Text and file uploads that will be on multiple pages on the site',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '
				<h1>Copyright Information</h1>
				<p>Custom copyright line, and theme information</p>
			',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		// site's copyright
		array (
			'key' => 'field_site_copyright',
			'label' => 'Site Copyright Line',
			'name' => 'site_copyright',
			'type' => 'text',
			'instructions' => 'Enter a custom copyright line for your site',
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'html',
			'maxlength' => '',
		),
		// message
		array (
			'key' => 'field_copyright_message_madeby',
			'label' => 'Copyright Settings',
			'name' => 'copyright_message',
			'type' => 'message',
			'instructions' => 'Text and file uploads that will be on multiple pages on the site',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '
				<div class="specialmessage">
					<h1>Personalized Wordpress Themes</h1>
					<p>
						Made at 
						<a href="http://www.gregory-thomason.com" target="_blank">Gregory Thomason.com</a>
					</p>
				</div>
			',
			'new_lines' => '',
			'esc_html' => 0,
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




?>