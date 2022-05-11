<?php
/*
	Template Name: Portfolio Template Page
*/
global $pageSlug;
?>

<?php get_header(); ?>

<section id="page-content" class="fullwidth posttype-<?php echo get_post_type(); ?> page-<?php echo pageSlug(get_the_title()); ?>">	

	<!-- Page Items -->
	<?php
		echo checkForFile('portfolioArray', 'modules/portfolio'); global $featuredPost; global $standardPost;
		$portItems = array_merge($featuredPost, $standardPost);
		$counter = 1;
		$numPost = count($portItems);

		$html = '';
		foreach($portItems as $item) {
			// var creation
			$title		= ucwords($item['title']);
			$permalink	= $item['permalink'];
			//$largeItem	= ( $counter == 1 || $counter == 4 ? 'large' : null );
			//$largeLast	= ( $counter == 4 ? 'last-large' : null );

			// generate HTML
			$html .= "<a class=\"port-wrapper module ani-bounce\" href=\"{$permalink}\">";
			$html .= 	'<div class="port-image" style="background-image: url('.$item['imageSrc'].');"></div>';
			$html .=	'<div class="port-underlay"><div class="port-shadow"></div></div>';
			$html .=	'<svg class="port-border" xmlns="http://www.w3.org/2000/svg"><rect height="100%" width="100%" ></rect></svg>';
			
			$html .= 	'<div class="port-textwrapper ">';
			$html .=		'<h1>'.ucwords($item['title']).'</h1>';
			$html .=		'<h4><span>Project Role:</span> '.ucwords($item['projectrole']).'</h4>';
			$html .= 	'</div>';
			$html .= '</a>';
			
			$counter++;
		};
		echo $html;
	?>

</section>
<?php get_footer(); ?>
