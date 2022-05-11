<?php
//--------------------------//
// CUSTOM DASHBOARD: Removes and adds custom widgets to the opening dashboard for users
//-----------------------------------------------------//
// Remove items 
add_action('wp_dashboard_setup', 'g1200_remove_dashboard_widget' );
remove_action('welcome_panel', 'wp_welcome_panel');

function g1200_remove_dashboard_widget() {
	$removeArray = array(
		'dashboard_quick_press',
		'dashboard_primary',
		'dashboard_right_now',
		'dashboard_activity',
	);

	foreach ( $removeArray as $item ) {
		remove_meta_box( $item, 'dashboard', 'normal' );
		remove_meta_box( $item, 'dashboard', 'side' );
	};

} 

// add widget to dashboard
add_action( 'wp_dashboard_setup', 'g1200_add_dashboard_widgets' );
function g1200_add_dashboard_widgets() {
	// site settings
	wp_add_dashboard_widget(
		'sitesetting_dashboard_widget',         	// Widget slug.
		'Site Settings',   				    		// Title.
		'sitesetting_dashboard_widget_function' 	// Display function.
	);

	// portfolio post type
	wp_add_dashboard_widget(
		'portfolio_dashboard_widget',         	// Widget slug.
		'Portfolio Options',   				    // Title.
		'portfolio_dashboard_widget_function' 	// Display function.
	);
}

// Welcome Dashboard HTML
add_action( 'welcome_panel', 'welcome_dashboard_widget_function' );
function welcome_dashboard_widget_function() {
	echo	"<div class=\"welcome-panel fullwidth custom\" id=\"welcome-panel\" style=\"padding-bottom: 23px; border: none; margin-top: 0;\">";
	echo		"<div class=\"welcome-panel-content\">";
	echo			"<h3 style=\"padding-left: 0; padding-bottom: 0; margin-top: 0; font-size: 25px;\">Welcome to ".get_bloginfo('name')."</h3>";
	echo			"<p class=\"about-description\">".get_bloginfo('description')."</p>";
	echo			"<div class=\"welcome-panel-column-container\">";

	echo					"<h4 class=\"herotitle\">Page Options</h4>";
	echo					"<ul>";
	echo						"<li>";
	echo 							"<a class=\"button button-primary button-hero load-customize hide-if-no-customize\" href=\"".get_bloginfo('url')."/wp-admin/post-new.php?post_type=portfolio\">New Portfolio Item</a>";
	echo 						"</li>";
	echo					"</ul>";

	echo					"<h4 class=\"herotitle\">Site Options</h4>";
	echo					"<ul>";
	echo						"<li>";
	echo 							"<a class=\"button button-primary button-hero load-customize hide-if-no-customize\" href=\"".get_bloginfo('url')."/wp-admin/admin.php?page=site-settings\">Site Settings</a>";
	echo 							"<a class=\"button button-primary button-hero load-customize hide-if-no-customize\" href=\"".get_bloginfo('url')."/wp-admin/admin.php?page=acf-options-social-media\">Social Media</a>";
	echo 							"<a class=\"button button-primary button-hero load-customize hide-if-no-customize\" href=\"".get_bloginfo('url')."/wp-admin/admin.php?page=acf-options-pre-loader\">Pre-Loader Options</a>";
	echo 						"</li>";
	echo					"</ul>";

	echo			"</div>";
	echo		"</div>";
	echo	"</div>";
}

// Site Settings Dashboard HTML
function sitesetting_dashboard_widget_function() {
	echo	"<div class=\"welcome-panel custom\" id=\"settings-panel\" style=\"padding-bottom: 23px; border: none;\">";
	echo		"<div class=\"welcome-panel-content\">";
	echo			"<h3 style=\"padding-left: 0; padding-bottom: 0; font-size: 20px;\">Site Settings</h3>";
	echo			"<p class=\"about-description\">Edit your site settings, activate slides and flipcards, and other options</p>";
	echo			"<div class=\"welcome-panel-column-container\">";

	echo				"<div class=\"welcome-panel-column\">";
	echo					"<h4>Site Options</h4>";
	echo					"<ul>";
	echo						"<li><a class=\"welcome-icon dashicons-admin-settings\" href=\"".get_bloginfo('url')."/wp-admin/admin.php?page=site-settings\" >Edit Settings</a></li>";
	echo						"<li><a class=\"welcome-icon dashicons-admin-network\" href=\"".get_bloginfo('url')."/wp-admin/admin.php?page=acf-options-copyright\" >Site Copyright</a></li>";
	echo					"</ul>";
	echo				"</div>";

	echo				"<div class=\"welcome-panel-column\">";
	echo					"<h4>Social Media Options</h4>";
	echo					"<ul>";
	echo						"<li><a class=\"welcome-icon dashicons-share\" href=\"".get_bloginfo('url')."/wp-admin/admin.php?page=acf-options-social-media\" >Social Media</a></li>";
	echo					"</ul>";
	echo				"</div>";

	echo				"<div class=\"welcome-panel-column\">";
	echo					"<h4>Pre-Loader Options</h4>";
	echo					"<ul>";
	echo						"<li><a class=\"welcome-icon dashicons-image-rotate\" href=\"".get_bloginfo('url')."/wp-admin/admin.php?page=acf-options-pre-loader\" >Pre-Loader Options</a></li>";
	echo					"</ul>";
	echo				"</div>";

	echo			"</div>";
	echo		"</div>";
	echo	"</div>";
}

// portfolio Dashboard HTML
function portfolio_dashboard_widget_function() {
	echo	"<div class=\"welcome-panel custom\" id=\"portfolio-panel\" style=\"padding-bottom: 23px; border: none;\">";
	echo		"<div class=\"welcome-panel-content\">";
	echo			"<h3 style=\"padding-left: 0; padding-bottom: 0; font-size: 20px;\">Portfolio Options</h3>";
	echo			"<p class=\"about-description\">View, add or edit your portfolio post:</p>";
	echo			"<div class=\"welcome-panel-column-container\">";

	echo				"<div class=\"welcome-panel-column\">";
	echo					"<h4>General Options</h4>";
	echo					"<ul>";
	echo						"<li><a class=\"welcome-icon dashicons-tickets-alt\" href=\"".get_bloginfo('url')."/wp-admin/edit.php?post_type=portfolio\" >View All Portfolio Items</a></li>";
	echo						"<li><a class=\"welcome-icon welcome-add-page\" href=\"".get_bloginfo('url')."/wp-admin/post-new.php?post_type=portfolio\" >Add New Portfolio Item</a></li>";
	echo					"</ul>";
	echo				"</div>";

	echo			"</div>";
	echo		"</div>";
	echo	"</div>";
}

?>