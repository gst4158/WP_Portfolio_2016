<?php

//-----------------------------------------------------------------------------------------------------//
//------------------------------------ MULTI USE FUNCTIONS --------------------------------------------//
//-----------------------------------------------------------------------------------------------------//

// Parts Functions
//-------------------------------//
function pageParts($array) { if ( empty($array) ) return false;
	// setup
	$html = '';
	$prevItemColorCheck = null;
	
	// section loop
	foreach( $array as $item ) : if ($item) :
	
		if ( empty($item['part_selection']) ) continue; // don't go past here if no variable to use
		
		// checks if previous section's BG color is the same so we can change some styles up
		$bgColor = get_field('field_port_'."{$item['part_selection']}".'_color');
		$prevItemColorCheck	= ( $prevItemColorCheck == $bgColor ? 'wrapperpush' : null );
		
		$html .= "<section id=\"{$item['part_selection']}\" class=\"portwrapper {$prevItemColorCheck}\" style=\"background-color: {$bgColor}; \">";

		//create function keys
		switch ( $item['part_selection'] ) {
			case 'meta':
				$key = 'metainfo';
				break;
			case 'gallery':
				$key = 'pageGallery';
				break;
			case 'beauty':
				$key = 'beautySpreads';
				break;
			case 'fullscreen':
				$key = 'fullScreenImage';
				break;
			default:
       			break;
		};
		
		// section title
		$html .=	singlePageTitle($item['part_selection']);

		// optional wedge
		if ( get_field('field_port_'."{$item['part_selection']}".'_wedge') == 'yes' ) { $html .=	"<div class=\"wedge\" style=\"border-top: 35px solid ".get_field('field_port_'."{$item['part_selection']}".'_color')."; \"></div>"; };

		// keep value for next iteration
		$prevItemColorCheck	= $bgColor;

		// section content
		$html .= 	"<section class=\"".$item['part_selection']."info\">";
		$html .= 		$key();
		$html .= 	"</section>";
		
		$html .= "</section>"; // end section wrapper
	endif; endforeach;

	// return html
	return $html; // return our html nonw that it's ready	

}

// Page Titles
//-------------------------------//
function singlePageTitle($keyname, $override = null, $location = null) {
	// setup
	$html 	= '';
	$title		= ( $override == null ? get_field('field_port_'.$keyname.'_title') : $override ); // if we need to get something else, such as page title
	$text		= get_field('field_port_'.$keyname.'_text');
	$postTitle	= ( $location == 'cover' ? '<h2>'.get_the_title().'</h2>' : null );

	// html
	if ( $title ) :
		$html .= "<section class=\"pageheader light {$location}\">";
		$html .= 	"<section class=\"textwrapper limitpadding\">";
		$html .=		$postTitle;
		$html .= 		"<h1 class=\"module ani-top\">{$title}</h1>";
		$html .= 		"<div class=\"decoration module ani-top\"></div>";
		$html .= 		"<div class=\"contentwrap module ani-bottom\">{$text}</div>";
		$html .= 	"</section>";
		$html .= "</section>";
	endif;	

	// return html
	return $html; // return our html nonw that it's ready	

}

//-----------------------------------------------------------------------------------------------------//
//------------------------------------ SINGLE USE FUNCTIONS -------------------------------------------//
//-----------------------------------------------------------------------------------------------------//


// Page Cover
//-------------------------------//
function pageCover($key = null) {
	// setup
	$html	= '';
	$key 	= ( $key == null ? 'cover' : $key  );
	
	
	// variables
	$sectionTitle	= ( get_field('field_port_'.$key.'_title') ? get_field('field_port_'.$key.'_title') : null );
	$sectionContent	= ( get_field('field_port_'.$key.'_text') ? get_field('field_port_'.$key.'_text') : null );
	$fontClass		= ( get_field('field_port_'.$key.'_txtcolor') == 'black' ? null : 'light customselection' );
	$fontColor		= ( get_field('field_port_'.$key.'_txtcolor') == 'black' ? null : 'style="color: #ffffff"' );
	$sectionBG		= ( get_field('field_port_'.$key.'_img') ? get_field('field_port_'.$key.'_img') : null );
	
	if ( empty($sectionBG) ) return false; // don't create cover if no image to use
	
	// html
	$html .= "<section id=\"projectcover-{$key}\" class=\"coverwrapper {$fontClass} {$key}holder \" style=\"background-image: url('{$sectionBG['url']}')\">";
		
		$html .= "<div class=\"overlay\"></div>";
		
		if ( $sectionTitle && $sectionContent ) :
			$html .= 	"<section class=\"textwrapper {$fontColor}\">";
			$html .=		"<h2 {$fontColor}>".get_the_title()."</h2>";
			$html .= 		"<h1 {$fontColor}>{$sectionTitle}</h1>";
			$html .= 		"<div class=\"decoration\"></div>";
			$html .=	 	"<div class=\"contentwrap {$fontClass}\">{$sectionContent}</div>";
			$html .= 	"</section>";
						if ($key == 'cover') $html .=	"<div class=\"controls down\"><div></div><div></div></div>";
		endif;
	
	$html .= "</section>";
		
	// end html wrapper
	$html .= "</article>";
	
	// return html
	return $html; // return our html nonw that it's ready	

}


// Beauty Spreads
//-------------------------------//
function beautySpreads() {
	// setup
	$html 		= '';
	$counter	= 0;
	$prevWedgeColor = null;

	// content checker - if we have content proceed; otherwise kill function
	$repeater = ( get_field('field_port_beauty_repeater') ? get_field('field_port_beauty_repeater') : null );
	if (empty($repeater)) return false; // don't go past here if no variable to use

	// html
	foreach ( $repeater as $item ) : if ( $item ) :
		// variables
		$fontColor		= ( $item['beauty_repeat_text_color'] 	? $item['beauty_repeat_text_color'] : null );
		$bgColor		= ( $item['beauty_repeat_bg_color'] 	? $item['beauty_repeat_bg_color'] : null );
		$title			= ( $item['beauty_repeat_title'] 		? $item['beauty_repeat_title'] : null );
		$subtitle		= ( $item['beauty_repeat_subtitle'] 	? $item['beauty_repeat_subtitle'] : null );
		$text			= ( $item['beauty_repeat_text'] 		? $item['beauty_repeat_text'] : null );
		$image			= ( $item['beauty_repeat_img'] 			? wp_get_attachment_url($item['beauty_repeat_img']) : null );
		$fullpageImg	= ( $title && $text ? null : 'fullimg' );
		
		$wedgePush		= ( $item['beauty_repeat_wedge'] == 'yes' ? 'wedgepush' : null );
		$wedgeColor		= ( $prevWedgeColor ? $prevWedgeColor : $bgColor );
		$wedgeOption	= ( $item['beauty_repeat_wedge'] == 'yes' ? "<div class=\"wedge\" style=\"border-top: 35px solid {$wedgeColor}; \"></div>" : null );

		// html
		$html .= "<section class=\"beautywrapper {$wedgePush} {$fullpageImg}\" style=\"background-color: {$bgColor}\">";
			
			$html .= $wedgeOption;
			$html .= "<section class=\"textwrapper\">";
				
				// image
				$html .=	"<section class=\"half module ani-right\">";
				$html .= 		"<img class=\"\" src=\"{$image}\" alt=\"{$title}'s image\" />";
				$html .= 	"</section>";
				
				// text
				if ( $title && $text ) :
					$html .=	"<section class=\"half last-child module ani-left\">";
					$html .=		"<h1>{$title}</h1>";
					$html .=		"<h2>{$subtitle}</h2>";
					$html .= 		"<div class=\"decoration\"></div>";
					$html .=		"<p>{$text}</p>";
					$html .= 	"</section>";
				endif;
				
			$html .= 	"</section>"; // end textwrapper

		$html .= "</section>"; // end html
		
		// keep value for next iteration
		$prevWedgeColor	= $bgColor;
		
	endif; endforeach;
	
	// return html
	return $html; // return our html nonw that it's ready	

}


// Meta Information
//-------------------------------//
function metainfo() {
	// setup
	$html 	= '';
	$array	= get_field('field_port_meta_repeater');
	
	$numRow = count($array); $counter = 1;
	if ($array) : foreach($array as $item) : if($item) :
		// variables
		$metaIcon		= $item['meta_repeater_icon'];
		$metaTitle 		= $item['meta_repeater_title'];
		$metaText 		= $item['meta_repeater_text'];
		$lastchild 		= ( $numRow == $counter ? 'last-child' : null  );
			
		// html
		$html .= "<article class=\"servicewrapper module ani-bottom {$lastchild}\">";
		
		$html .=	"<section class=\"iconwrap\">";
		$html .=		"<div class=\"dotted\"></div>";
		$html .=		"<div class=\"icon {$metaIcon}\"></div>";
		$html .=	"</section>";

		$html .=	"<h2 class=\"\">{$metaTitle}</h2>";
		$html .=	"<p class=\"\">{$metaText}</p>";

		$html .= "</article>";
	
		$counter++;
		
		//echo '<pre>', print_r($item, true), '</pre>';
	endif; endforeach; endif;
	
	// return html
	return $html; // return our html nonw that it's ready	

}

// Gallery Section
//-------------------------------//
function pageGallery() {
	// setup
	$html			= '';
	$counter		= 0;

	// variables
	$repeater		= ( get_field('field_port_gallery_gallery') ? get_field('field_port_gallery_gallery') : null );

	if (empty($repeater)) return false; // don't go past here if no variable to use
	
	// gallery images
	$html .= "<section class=\"module ani-bottom flexslider gallerywrapper\">";
	$html .= 	"<ul class=\"slides\">";
				foreach ($repeater as $item) {
					$html .= "<li>";
					$html .= 	"<img class=\"\" src=\"{$item['url']}\" alt=\"".get_the_title()."'s gallery image number {$counter}\" />";
					$html .= "</li>";
					$counter++;
				};
	$html .= 	"</ul>";
	$html .= "</section>";
			
	// return html
	return $html; // return our html nonw that it's ready	
};


// Full Screen Section
//-------------------------------//
function fullScreenImage($custom = null) {
	// setup
	$html			= '';
	$counter		= 0;

	$key = ( $custom == null ? 'fullscreen' : $custom );

	// variables
	$sectionBG			= ( get_field('field_port_'.$key.'_color') ? get_field('field_port_'.$key.'_color') : null );
	$fullscreenImg		= ( get_field('field_port_'.$key.'_image') ? get_field('field_port_'.$key.'_image') : null );

	if (empty($fullscreenImg)) return false; // don't go past here if no variable to use

	// useful for creating responsive image and their sizes
	$fullscreenImgURL	= wp_get_attachment_url($fullscreenImg);
	$fullscreenImgSizes = array (
		'mobile' 	=> wp_get_attachment_image_src($fullscreenImg, 'mobile')[0],
		'tablet' 	=> wp_get_attachment_image_src($fullscreenImg, 'tablet')[0],
		'computer' 	=> wp_get_attachment_url($fullscreenImg),
	);
	
	// html
	$html .= "<section id=\"{$key}image\" class=\"{$key}wrapper\" style=\"background-color: {$sectionBG}\">";
	
	// image
	$html .=	"<img class=\"module ani-bottom fullsizeimage\" srcset=\"
					{$fullscreenImgSizes['computer']}  1650w, 
					{$fullscreenImgSizes['tablet']} 980w, 
					{$fullscreenImgSizes['mobile']} 640w\" 
					src=\"{$fullscreenImgURL}\" 
					alt=\"".get_the_title()."'s fullscreen image\"
				>";
	
	
	$html .= "</section>";
			
	// return html
	return $html; // return our html nonw that it's ready	
};

?>