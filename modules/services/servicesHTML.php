<?php
	
	$services = get_field('field_service_repeater', 'option');
	$numRow = count($services); $counter = 1;
	foreach($services as $item) : if($item) :
		// variables
		$iconSprite 	= get_field('field_service_sprite', 'option');
		$iconSprite 	= $iconSprite['url'];
		$iconClass 		= $item['service_repeater_class'];

		$serviceTitle 	= $item['service_repeater_title'];
		$serviceText 	= $item['service_repeater_text'];
		$lastchild 		= ( $numRow == $counter ? 'last-child' : null  );
			
		// html
		echo "<article class=\"servicewrapper module {$lastchild}\">";
		
		echo 	"<section class=\"iconwrap\">";
		echo 		"<div class=\"dotted\"></div>";
		echo 		"<div class=\"icon {$iconClass}\"  style=\"background-image: url({$iconSprite})\"></div>";
		echo 	"</section>";

		echo 	"<h2>{$serviceTitle}</h2>";
		echo 	"<p>{$serviceText}</p>";

		echo "</article>";
	
		$counter++;
	endif; endforeach;
?>