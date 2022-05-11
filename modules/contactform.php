<section id="contact" class="contactwrapper">
	
	<div class="dotted" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: .15;"></div>
	<?php 
		$contactForm = get_field('field_contact_form_7_shortcode', 'option');
		echo "<section id=\"contactform\">";
		echo	"<div>";
		echo		"<div>";
		echo			"<h1>Contact Me</h1>";
		echo			"<p>For when you're looking for a quote, or just wanting to shoot the bull.</p>";
		echo 			do_shortcode( "{$contactForm}" );
		echo		"</div>";
		echo	"</div>";
		echo "</section>";	
	?>
</section>