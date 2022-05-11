<?php

//--------------------------//
// FUNCTION:	Page Header Functions
//-----------------------------------------------------//
function pageHeader($pageTitle, $postType = 'page') {
	
	// page variables
	$html			= '';
	$pageObject 	= get_page_by_title($pageTitle, null, $postType);
	$postID 		= $pageObject->ID;
	$pageTitle 		= ( get_field('field_page_title', $postID) ? ucwords(get_field('field_page_title', $postID)) : ucwords($pageObject->post_title) );
	$pageContent	= get_field('field_page_wysiwyg', $postID);

	// page image
	$pageBG	 		= ( get_field('field_page_bgimage', $postID) ? get_field('field_page_bgimage', $postID) :  get_post_thumbnail_id($postID) );
	$pageBG 		= wp_get_attachment_url($pageBG);	
	
	// HTML for page title
	$html .= "<section class=\"textwrapper\" style=\"background-image: url('{$pageBG}')\">";
		// title + content
		$html .= 	"<h1 class=\"module ani-top\">{$pageTitle}</h1>";
		$html .= 	"<div class=\"decoration module ani-top\"></div>";
		$html .= 	"<div class=\"contentwrap module ani-bottom\">{$pageContent}</div>";
	$html .= "</section>";
	
	
	return $html; // echo our html now that it's ready
	// echo '<pre>', print_r($pageObject, true), '</pre>';
};


?>