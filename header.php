<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_field('field_settings_general_favicon', 'option'); ?>" rel="shortcut icon">
    <link href="<?php echo get_field('field_settings_general_favicon_png', 'option'); ?>" rel="apple-touch-icon-precomposed">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="<?php echo get_field('field_settings_general_keywords', 'option'); ?>, <?php echo $pageTitle = ( !is_home() ? get_the_title() : get_bloginfo('name') ); ?>" />
	
	<meta name="author" content="<?php bloginfo('name'); ?>" />
	<meta name="copyright" content="<?php echo strip_tags( get_field('field_site_copyright', 'option') ) ?>" />

	<!-- Social Sharing -->
	<?php echo checkForFile('socialShare', 'includes'); ?>
	
	<?php wp_head(); ?>

	<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/styleIE.css" />
	<![endif]-->

	<!-- bottom admin bar -->
	<style>html{margin-top:0px!important;}#wpadminbar{top:auto!important;bottom:0; border-top: 1px solid white; position: relative;}}</style>

	<!-- google analytics if available -->
	<?php echo get_field('field_settings_general_google_analytics', 'option'); ?>
</head>

<?php
echo checkForFile('preLoader');
global $pageSlug;
$pageSlug = pageSlug(get_the_title());

?>
<body <?php body_class(); ?>>
<section id="mamawrapper" class="<?php global $deviceType; echo $deviceType; ?>" data-device="<?php echo $deviceType;?>">

<!-- header -->
<header>

	<!-- main navigation -->
	<nav role="core-navigation" class="reveal reveal-page">
		
		<div class="hamburger"><div></div><div></div><div></div></div>
		
		<div class="logo">
			<a class="<?php if (is_home()) echo 'current-menu-item'; ?>" href="<?php echo get_bloginfo('url') ?>/">Gregory <span>Thomason</span></a>
		</div>
		
		<div class="navwrap">		
			<?php echo html5blank_nav('page-menu'); ?>

			<!-- site pdf portfolio & resumes -->
			<?php
				if ( get_field("field_socialmedia_pdf_portfolio", 'option') || get_field("field_socialmedia_pdf_resume", 'option') ) :
					echo "<ul class=\"sociallinks\">";
					echo 	"<li class=\"nohover\">";
					echo 		"<p>Download</p>";
					echo 	"</li>";
							if (get_field("field_socialmedia_pdf_portfolio", 'option')) :
					echo 	"<li>";
					echo 		"<a class=\"push\" href=\"".get_field("field_socialmedia_pdf_portfolio", 'option')." \" title=\"PDF Portfolio\" target=\"_blank\"><i class=\"pdfresume\"></i><span>Portfolio</span></a>";
					echo 	"</li>";
							endif;
							if (get_field("field_socialmedia_pdf_resume", 'option')) :
					echo 	"<li>";
					echo 		"<a class=\"push\" href=\"".get_field("field_socialmedia_pdf_resume", 'option')." \" title=\"PDF Resume\" target=\"_blank\"><i class=\"pdfport\"></i><span>Resume</span></a>";
					echo 	"</li>";
							endif;
					echo "</ul>";
				endif;
			?>
			
			<!-- site social or misc -->
			<?php
				if ( get_field("field_socialmedia_linkedin", 'option') || get_field("field_socialmedia_github", 'option') ) :
					echo "<ul class=\"sociallinks\">";
					echo 	"<li class=\"nohover\">";
					echo 		"<p>Connect</p>";
					echo 	"</li>";
							if (get_field("field_socialmedia_linkedin", 'option')) :
					echo 	"<li>";
					echo 		"<a href=\"".get_field("field_socialmedia_linkedin", 'option')." \" title=\"LinkedIn\" target=\"_blank\"><i class=\"linkedin\"></i><span>LinkedIn</span></a>";
					echo 	"</li>";
							endif;
							if (get_field("field_socialmedia_github", 'option')) :
					echo 	"<li>";
					echo 		"<a href=\"".get_field("field_socialmedia_github", 'option')." \" title=\"GitHub\" target=\"_blank\"><i class=\"github\"></i><span>GitHub</span></a>";
					echo 	"</li>";
							endif;
					echo "</ul>";
				endif;
			?>
		</div>
	</nav>

	<!-- page cover -->
	<section id="cover" class="<?php echo $halfpage = ( is_404() ? 'halfpage' : null ); ?> page-<?php echo $pagetype = ( is_home() ? 'home' : strtolower($pageSlug) ); ?>">		
		<!-- textwrapper -->
		<article class="textwrapper">		
			<?php if ( is_home() ) {
				echo "<h1>Gregory Thomason <span>Studios</span></h1>";
				echo "<h2>Front-End Development & Design</h2>";
		
				echo "<nav role=\"navigation\">";			
				echo 	html5blank_nav('home-menu');
				echo "</nav>";
			} elseif ( is_page() ) {
				// variables
				$pageTitle 		= ( get_field('field_page_title') ? get_field('field_page_title') : get_the_title() );
				$pageSubTitle 	= ( get_field('field_page_subtitle') ? get_field('field_page_subtitle') : null );
			
				// html
				echo "<h1>{$pageTitle}</h1>";
				echo "<div class=\"decoration\"></div>";
				echo "<div class=\"contentwrap\">";
				echo	"<p>{$pageSubTitle}</p>";
				echo "</div>";
			} else {
			
			}; ?>
			
		</article>
		<?php if ( is_home() ) echo "<div class=\"controls down\"><p>See More</p><div></div><div></div></div>"; ?>
	</section>

</header>
