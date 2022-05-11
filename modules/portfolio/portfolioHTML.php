<?php
	$counter = 1;
	$numPost = count($featuredPost);
	$html = '';

	foreach($featuredPost as $item) { if ($counter == 6) break;
		// var creation
		$title		= ucwords($item['title']);
		$permalink	= $item['permalink'];

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

	// view all port items
	$html .= "<section class=\"port-wrapper module ani-bounce last-child\">";	
	$html .= 	'<div class="textwrapper">';
	$html .= 		"<h1>View All Projects</h1>";
	$html .= 		"<div class=\"decoration\"></div>";
	$html .= 		"<div class=\"contentwrap\"><a class=\"bnt\" href=".get_bloginfo('url')."/portfolio>Go to Portfolio &#187;</a></div>";
	$html .= 	'</div>';
	$html .= '</section>';
	
	echo $html; // return our html in one var
	$html = '';
?>