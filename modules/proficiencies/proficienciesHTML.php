<?php
	// Proficiency Loop
	//-------------------------------//
	// proficiency loop
	$proficiencies = get_field('field_prof_repeater', 'option');
	$numRow = count($proficiencies); $counter = 1;
	foreach($proficiencies as $item) : if($item) :
		// variables
		$lastchild 		= ( $numRow == $counter ? 'last-child' : null  );
		$catTitle		= $item['prof_tax']->name;
		$repeater		= $item['prof_repeat_repeat'];
		
		
		// html
		echo "<article class=\"proficiencywrapper module {$lastchild}\">";
		echo	"<h2>{$catTitle}</h2>";
		echo 	"<ul>".proficiency($repeater)."</ul>";
		echo "</article>";
	
		$counter++;
	endif; endforeach;

	// Proficiency Function for each category
	//-------------------------------//
	function proficiency($array) {
		$html = '';
		foreach( $array as $item ) {
			$html .= "<li>";
			$html .= ucwords($item['prof_repeat_repeat_prof']);
			$html .= "</li>";
			
		};
		return $html; // ready to return our html
	}
	//echo '<pre style="color: white;">', print_r($proficiencies, true), '</pre>';
?>