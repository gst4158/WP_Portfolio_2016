<?php

	// Check to see if custom social vars are allowed on page
	if ( is_single() ) {

		// Social Vars
		$socialTitle		= get_the_title().' | '.get_bloginfo('name');
		$socialImg			= ( wp_get_attachment_url(get_post_thumbnail_id(get_the_id())) ? wp_get_attachment_url(get_post_thumbnail_id(get_the_id())) :  get_field('field_settings_general_share_image', 'option') );
		$socialURL			= get_permalink();
		$socialDesc			= ( get_field('field_port_default_sharetext') ? strip_tags(get_field('field_port_default_sharetext')) : strip_tags(get_bloginfo('description')) );
	
		// Create backups for potential empty vars
		$socialImg			= ( isset($socialDesc) ? $socialImg : get_field('field_settings_general_share_image', 'option') );
		$socialDesc			= ( isset($socialDesc) ? $socialDesc : strip_tags(get_bloginfo('description')) );
	
	} else {

		// Social Vars
		$socialTitle		= ( is_home() ? get_bloginfo('name') : get_the_title().' | '.get_bloginfo('name') );
		$socialURL			= ( is_home() ? get_bloginfo('url') : get_permalink() );
		$socialImg			= get_field('field_settings_general_share_image', 'option');
		$socialDesc			= strip_tags(get_bloginfo('description'));
	};

	if ( is_404() ) {
		$socialTitle	= 'Error Page 404 | '.get_bloginfo('name');
		$socialURL		= get_bloginfo('url');
		$socialImg		= get_field('field_settings_general_share_image', 'option');
	};

?>


<!-- for Facebook -->          
<meta property="og:title" content="<?php echo ucwords(strtolower($socialTitle)); ?>" />
<meta property="og:image" content="<?php echo $socialImg; ?>" />
<meta property="og:url" content="<?php echo $socialURL; ?>" />
<meta property="og:description" content="<?php echo $socialDesc; ?>" />
<meta property="og:type" content="website" />

<!-- for Twitter -->          
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php echo ucwords(strtolower($socialTitle)); ?>" />
<meta name="twitter:description" content="<?php echo $socialDesc; ?>" />
<meta name="twitter:image" content="<?php echo $socialImg; ?>" />

