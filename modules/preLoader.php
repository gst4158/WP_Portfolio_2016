<div id="hideAll" style="background-color: <?php echo get_field('field_preloader_option_BGcolor', 'option'); ?>;">
	<?php
		// generate the loader's color styles
		$loaderTextcolor	= hex2rgb(get_field('field_preloader_option_text_color', 'option'));
		//$loaderTextcolor	= $loaderTextcolor[0].','.$loaderTextcolor[1].','.$loaderTextcolor[2];
		
		$loaderSpinner 		= hex2rgb(get_field('field_preloader_option_spinner', 'option'));
		$loaderSpinner		= $loaderSpinner[0].','.$loaderSpinner[1].','.$loaderSpinner[2];
	?>
	
	<div class="<?php if (get_field('field_preloader_option', 'option') == 'no') echo 'hidden'; ?>">
		<span class="loading" style="border-color: rgba(<?php echo $loaderSpinner; ?>, .3); border-top-color: rgba(<?php echo $loaderSpinner; ?>, 1)"></span>
		<p style="color: <?php echo get_field('field_preloader_option_text_color', 'option'); ?>;">Loading</p>
	</div>
</div>
<script type="text/javascript">
	document.getElementById("hideAll").style.display = "block";
</script>