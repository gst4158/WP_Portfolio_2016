<?php

//------------------------------------------------------------------//
// Get address from option page and set a link ready for google maps
//------------------------------------------------------------------//
	
	// get our address and other variables
	$address_one 	= get_field('field_location_address_one', 'option');
	$address_two 	= get_field('field_location_address_two', 'option'); 
	$address 		= ( $address_two ? $address_one+$address_two : $address_one); 
	$city 			= get_field('field_location_city', 'option');
	$state 			= get_field('field_location_state', 'option');
	$zipcode 		= get_field('field_location_zipcode', 'option');
	
	// generate map link and strip space and commas
	$mapsLink 		= "{$address}+{$city}+{$state}+{$zipcode}";
	$mapsLink 		= str_replace(' ', '+', $mapsLink);
	$mapsLink 		= str_replace( ',', '', $mapsLink );
	$mapsLink 		= strtolower($mapsLink); // example: http://maps.google.com/maps?q={$mapsLink}
	
	// generates standard address string
	$addressString 	= "{$address}, {$city} {$state}, {$zipcode}";
	$addressString 	= ucwords(strtolower($addressString)); 

	$addressFormat 	= "{$address},<br> {$city} {$state}, {$zipcode}";
	$addressFormat 	= ucwords(strtolower($addressFormat)); 

//------------------------------------------------------------------//
// Site Phone Number
//------------------------------------------------------------------//
	// get our phone number and other variables
	$site_phone = get_field('field_phone_site_number', 'option');
		
//------------------------------------------------------------------//
// Site Email Address
//------------------------------------------------------------------//
	$site_email = get_field('field_site_email', 'option');

//------------------------------------------------------------------//
// Social Media Links
//------------------------------------------------------------------//
	$socialMediaArray = array();
	$socialMediaArray = array('github', 'facebook','twitter','dribble','behance','pinterest','googleplus', 'linkedin', 'instagram');
	
	function socialMediaLinks($array) {
		$html = '';
		foreach ($array as $item) {
			// create vars
			$socialLink = get_field("field_socialmedia_{$item}", 'option');
			$socialName = ucwords($item);
			
			// if the social link has a value
			if ($socialLink) {
				$html .= "<a class=\"{$item} socialicon\" href=\"{$socialLink}\" title=\"{$socialName}\" target=\"_blank\">{$item}</a>";
			};
		};
		return $html; // not ready to echo yet
	};

?>