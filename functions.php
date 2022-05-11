<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

//-----------------------------------------------------------//
// 			     	Custom admin menu order                  //
//-----------------------------------------------------------//
// ADMIN MENU ORDER 
//-------------------------------//
function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;
    	return array(
			'index.php', // this represents the dashboard link
			'site-settings',
			'edit.php?post_type=portfolio',
			'services',
			'edit.php?post_type=page',
			'wpcf7',
 		);
	}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');


// ADD/REMOVE ADMIN MENU ITEMS
//-------------------------------//
function edit_admin_menus() {
	global $menu;
	global $submenu;
    
	// remove 'comments' from dashboard
	remove_menu_page( 'edit-comments.php' );
	
	// remove 'post' from dashboard
	remove_menu_page( 'edit.php' );

	// move site navigation to main dashboard    
	//remove_submenu_page('themes.php','nav-menus.php'); 	
	//add_menu_page('Site Navigation','Site Navigation','edit_themes','nav-menus.php');
		
}
add_action( 'admin_menu', 'edit_admin_menus' );


//-----------------------------------------------------------//
// 				Add jQuery script to admin area              //
//-----------------------------------------------------------//
function my_enqueue( $hook ) {
    wp_enqueue_script( 'admin_script', get_template_directory_uri() . '/js/admin_script.js' );
}

add_action('admin_enqueue_scripts', 'my_enqueue');

//-----------------------------------------------------------//
// 				Add text to 'featured post' images           //
//-----------------------------------------------------------//
add_action( 'admin_head', 'wpse_products_list_terms_exclusions' );
function wpse_products_list_terms_exclusions()  {
    global $current_screen;

    // post type selection
    if( 'products' != $current_screen->post_type )
        return;

	add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
	function add_featured_image_instruction( $content ) {
		return $content .= '<p>The Featured Image should be square, preferably 460x460px.<br><br><span style="font-size: 12px; font-weight: bold;">If you need a photoshop template, click here: <a href='.get_template_directory_uri()."/templates/product-template.psd".' title="Template Download">Download Template</a></span>';
	};
}


/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('featuredprod', 300, '', true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

		// Add Thumbnail Device Sizes
		add_image_size('mobile', 640, '', true); 	// mobile device
		add_image_size('tablet', 980, '', true); 	// tablet portrait device


    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav($name) {
	
	wp_nav_menu(		
		array(
			'theme_location'  => $name,
			'menu'            => 'home-menu',
			'container'       => 'inactive',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => '',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => '__return_false',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul>%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		),
		array(
			'theme_location'  => $name,
			'menu'            => 'page-menu',
			'container'       => 'inactive',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => '',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => '__return_false',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul>%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		)

	);
}

// Show home page link option on menu creation page on WP dashboard
// NEW OPTION IS UNDER: 'View All' tab under 'Pages' of the WP menu system
function home_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('script'); // Enqueue it!
        
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts() {
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles() {
    wp_register_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0', 'all');
    wp_enqueue_style('reset'); // Enqueue it!

    wp_register_style('cssfonts', get_template_directory_uri() . '/css/fonts.css', array(), '1.0', 'all');
    wp_enqueue_style('cssfonts'); // Enqueue it!

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('stylesheet'); // Enqueue it!

	wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0', 'all');
    wp_enqueue_style('responsive'); // Enqueue it!

}

// Load ADMIN CSS styles
add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
add_action('login_head', 'load_admin_styles');
function load_admin_styles() {
	wp_enqueue_style( 'admincss', get_template_directory_uri() . '/css/admincss.css', false, '1.0.0' );
} 

// Register HTML5 Blank Navigation
function register_html5_menu() {
    register_nav_menus(array( // Using array to specify more menus if needed
        'home-menu' => __('Home Page Menu', 'home-menu'), // Main Navigation
        'page-menu' => __('Page Menu', 'page-menu'), // Main Navigation
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}



// Create the Custom Excerpts callback
function custom_excerpt($length) {
	global $post;
	$output = get_the_content();
	$output = apply_filters('wptexturize', $output);
	$output = apply_filters('convert_chars', $output);
	$output = apply_filters('the_content', $output);

	if(strlen($output) > $length) {
		$output = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $output);
	};
   
   return($output);

}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag) {
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}


// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults) {
    $myavatar = get_template_directory_uri() . '/images/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}


/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/
// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether


//--------------------------//
// FUNCTION:	Check for mobile status
//-----------------------------------------------------//
require_once(dirname(__FILE__) . '/includes/mobiledetect/Mobile_Detect.php');
$detect = new Mobile_Detect;

$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();
/* <p>This is a <b><?php echo $deviceType; ?></b>. Your UA is <b class="<?php echo $deviceType; ?>"><?php echo htmlentities($_SERVER['HTTP_USER_AGENT']); ?></b></p> */

//--------------------------//
// FUNCTION:	Returns Page Slug
//-----------------------------------------------------//
function pageSlug($pageSlug) {
	$pageSlug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $pageSlug);
	$pageSlug = strtolower(trim($pageSlug, '-'));
	$pageSlug = preg_replace("/[\/_|+ -]+/", '-', $pageSlug);
	return $pageSlug;
}

//--------------------------//
// FUNCTION: Returns a hexcode into RGB format
//-----------------------------------------------------//
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}

//--------------------------//
// FUNCTION:	Gets next/prev post link
//-----------------------------------------------------//
function getNextPrevPost($posttypes) {

	//get_next_posts_link
	$counter = 1; $prevLink = null; $prevTitle = null; global $postLinks; $postLinks = array();
	$args = array( 'post_type' => array($posttypes), 'posts_per_page' => -1, 'order' => 'DESC');
	$loop = new WP_Query( $args );
	$numPost = $loop->found_posts;;
	while ( $loop->have_posts() ) : $loop->the_post();		
				
		$prevLink 	= ($counter == 1 ? get_permalink() : $prevLink );
		$prevTitle 	= ($counter == 1 ? get_the_title() : $prevTitle );
		
		$nextLink 	= get_permalink();
		$nextTitle 	= get_the_title();

		$counter++;
	endwhile; wp_reset_query();

	$prevPost = get_previous_post();
	$nextPost = get_next_post();
			
	$prevURL	= ( $prevPost ? get_permalink($prevPost->ID) : $prevLink );
	$prevTitle	= ( $prevPost ? get_the_title($prevPost->ID) : $prevTitle );
	
	$nextURL	= ( $nextPost ? get_permalink($nextPost->ID) : $nextLink );
	$nextTitle	= ( $nextPost ? get_the_title($nextPost->ID) : $nextTitle );

	$postLinks = array(
		'prevURL' 	=> $prevURL,
		'prevTitle' => $prevTitle,
		'nextURL' 	=> $nextURL,
		'nextTitle' => $nextTitle,
	);
	
};

//--------------------------//
// FUNCTION:	File Include Function
//-----------------------------------------------------//
function checkForFile($file, $otherfolder = null) {
	// any global variables we need through our includes
	global $featuredPost;
	global $standardPost;
	
	$folder	= ( $otherfolder == null ? 'modules' : $otherfolder);
	
	// include the file
	$file = dirname(__FILE__) . "/{$folder}/{$file}.php";
	if ( file_exists($file) ) require_once($file);
};

//--------------------------//
// FUNCTION:	Change URL of login logo
//-----------------------------------------------------//
function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return 'Gregory Thomason Studios';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/*------------------------------------*\
	PHP Includes
\*------------------------------------*/
require_once(dirname(__FILE__) . '/includes/functions.php');
require_once(dirname(__FILE__) . '/includes/wysiwyg-format-options.php');
require_once(dirname(__FILE__) . '/includes/acf/functions.php');
require_once(dirname(__FILE__) . '/includes/post-types.php');
require_once(dirname(__FILE__) . '/includes/post-types-admin-columns.php');
require_once(dirname(__FILE__) . '/includes/taxonomy.php');
require_once(dirname(__FILE__) . '/includes/customDashboard.php');
//require_once(dirname(__FILE__) . '/includes/customMetaQuickEdit.php');
//require_once(dirname(__FILE__) . '/includes/customMetaFields.php');


?>