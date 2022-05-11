<?php
if(function_exists("register_field_group")) {
	
	// Options page
	include_once('z_option_site_settings.php');
	include_once('z_option_services.php');

	// CPT's
	include_once('z_cpt_portfolio.php');
	include_once('z_cpt_page.php');
}
?>