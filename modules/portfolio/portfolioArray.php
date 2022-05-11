<?php

//------------------------------------------------------------------//
// Portfolio MODULE
// queries portfolio post type
// sorts each post into 'featured' and 'standard' arrays
//------------------------------------------------------------------//

	// Query 'portfolio' custom post type
	//--------------------------------------------------------------------
	$featuredPost		= array(); // create empty array
	$standardPost		= array(); // create empty array
	$featuredImgSizes	= array(); // create empty array
	
	$args = array( 'post_type' => 'portfolio', 'posts_per_page' => -1, 'order' => 'DESC');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();

		// Create / Reset vars
		//--------------------------------------------------------------------
		$postID			= '';
		$categories		= '';
		$catSlugList	= '';
		$imgSrc			= '';
		$optionalImg	= '';

		$featuredOption	= '';
		
		$variables 		= array();
	
		// Variable creations
		//--------------------------------------------------------------------
		$postID			= get_the_id();
		$categories		= get_the_category($postID);
		$content 		= apply_filters('the_content', get_field('field_portfolio_single_wysiwyg'));
		
		//is post featured option
		$featuredOption	= (get_field('field_port_default_featured') == 'yes' ? 'yes' : 'no');
		$featuredImg	= get_post_thumbnail_id($postID);	
		
				 
		// create string from categories
		foreach ($categories as $item) {
			$catSlugList .= $item->slug.' ';
		};

		// useful for creating responsive image and their sizes
		$featuredImgSizes = array (
			'mobile' 	=> wp_get_attachment_image_src($featuredImg, 'mobile')[0],
			'tablet' 	=> wp_get_attachment_image_src($featuredImg, 'tablet')[0],
			'computer' 	=> wp_get_attachment_url($featuredImg),
		);
				
		// Create post variables array to hook into sorting
		$variables = array(
			
			//global vars
			'postID'			=> $postID,
			'featuredOption'	=> $featuredOption,
			'title' 			=> ucwords(get_the_title()),
			'slug'				=> basename(get_permalink()),
			'content' 			=> $content,
			'excerpt' 			=> get_field('field_portfolio_preview_title'),
			'projectrole'		=> get_field('field_port_default_role'),
			'permalink' 		=> get_the_permalink(),
			'imageSrc' 			=> wp_get_attachment_url($featuredImg),
			'imageArray'		=> $featuredImgSizes,			
			'catSlugList'		=> $catSlugList,
			
		);
		
		// Sort Post
		//--------------------------------------------------------------------
		switch ( $featuredOption ) {
			case 'yes':
				$featuredPost[] = $variables;
				break;
			case 'no':
				$standardPost[] = $variables;
				break;
			default:
       			break;
		};

		//echo '<pre>', print_r($subpageCat, true), '</pre>';
		
	// Endwhile & reset query
	//--------------------------------------------------------------------
	endwhile; wp_reset_query();
	
?>




