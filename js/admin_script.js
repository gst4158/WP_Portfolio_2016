(function( $ ) {

jQuery(document).ready(function(){
    
    // fakes the look of an active submenu for ACF options page
    if ( $('body').hasClass('toplevel_page_acf-options-gallery-settings') ) {
    	$('#menu-posts-gallery').removeClass('wp-not-current-submenu').addClass('wp-has-current-submenu').children('a').addClass('wp-has-current-submenu');
    	$('#menu-posts-gallery').find('li:last').addClass('current');
    }
    
    $('#poststuff .postbox[id*="acf_"]').addClass('acf_postbox');

    
});



})( jQuery );