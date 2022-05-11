<?php

//------------------------------------------------------------------//
// Header Cover Text Wrapper
//------------------------------------------------------------------//
	// declare any global vars
	global $customCover; // hooks in for branding & rendering special pages. Created in single-project-custom.php

	//variable creation
	$pageID 			= get_the_ID();
	$siteURL			= get_bloginfo('url');
	
	// images
	$pageFeaturedImg 	= wp_get_attachment_url( get_post_thumbnail_id($pageID) );
	$coverBG			= (get_field('field_project_optional_coverimg') ? get_field('field_project_optional_coverimg') : $pageFeaturedImg);
	$coverBG			= (is_home() ? get_field('field_cover_bg_img', 'option') : $coverBG);
	$coverBG			= ($customCover ? $customCover : $coverBG);
	
	
	if ( is_404() ) 	$coverBG = get_field('field_cover_bg_img', 'option');
	
	
	// text settings
	$textColor			= (get_field('field_cover_colorpicker', 'option') ? get_field('field_cover_colorpicker', 'option') : '');
	$coverTitle			= (get_field("field_cover_logo", "option") ? get_field("field_cover_logo", "option") : get_field('field_cover_headline', 'option') );
	$coverSubhead		= get_field("field_cover_subhead", "option");
	
	// page settings
	$pagetitle 			= get_the_title();
	$pageHeadSetting	= ( is_page() || is_404() ? 'pagetitle' : '');
	
	//font 
	$headlineSize		= get_field('field_cover_headline_size', 'option');
	$headlineSizeREM	= get_field('field_cover_headline_size', 'option')/10;
	$subheadlineSize	= get_field('field_cover_subhead_size', 'option');
	$subheadlineSizeREM	= get_field('field_cover_subhead_size', 'option')/10;

?>

	<section id="cover" style="background-image: url(<?php echo $coverBG; ?>);">
		<section class="textwrapper <?php echo $pageHeadSetting; ?>">
			<?php 
				if (is_home()) {
					echo "<h1 style=\"color: {$textColor}; font-size: {$headlineSize}px; font-size: {$headlineSizeREM}rem;\">{$coverTitle}</h1>";
					echo "<h2 style=\"color: {$textColor}; font-size: {$subheadlineSize}px; font-size: {$subheadlineSizeREM}rem;\">{$coverSubhead}</h2>"; 					
					echo "<a class=\"bnt notransition\" href=\"{$siteURL}/projects\" title=\"See the work\">See the work</a>";
				} elseif ( is_page() ) {
					// echo page title
					echo "<h1 class=\"gothamH\" style=\"color: {$textColor};\">{$pagetitle}</h1>";
				} elseif ( is_404() ) {
					// echo error page
					echo "<h1 class=\"gothamH\" style=\"color: {$textColor};\">Error Page</h1>";				
				}; 
			?>
		</section>
	</section>


















