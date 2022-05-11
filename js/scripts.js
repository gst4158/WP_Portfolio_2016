(function( $ ) {


// Window Load
$(window).load(function() {
	//hide the website until it's loaded
	$('#hideAll').addClass('fadeout');
	setTimeout(function() {
		$('#hideAll').css('display', 'none');
	}, 600);

 	 // flexslider loader
	$('.flexslider').flexslider({
		animation: "slide",
		pauseOnHover: true,
		animationLoop: false,
		slideshow: false,
	});

});

// Document Ready
$(document).ready(function() {
	$().SmoothAnchors();

    // Get user's device type
    //-------------------------------//	
	var device = $('#mamawrapper').attr('data-device');

    // Animates red box behind each portfolio wrapper item
    //-------------------------------//		
	$(' .port-wrapper ').each( function() { $(this).hoverdir(); } );


    // Does stuff on load and scrolls
    //-------------------------------//	
	$(window).on("load scroll",function(e){

		// Sticky Nav
		var navHeight = $('nav.reveal').height();
		var stickyNav = $( window ).height() - navHeight;
		
		if ($(window).scrollTop() > stickyNav) {
			$('nav.reveal').removeClass('reveal-page');
		} else {
			$('nav.reveal').addClass('reveal-page');
		}

	});

	// mobile nav drop down menu button
	//-------------------------------//
	$('.hamburger').bind("click touch",function(event){
		event.preventDefault();

		$(this).toggleClass('animate');
		$('nav[role="core-navigation"], header').toggleClass('active');
	});

    //Manual Move on click:
    //-------------------------------//	
    $('.controls.down').bind("click touch",function(event){
		event.preventDefault();
		var target = $('.target').first();
		
		//var navHeight = ( $('body').hasClass('single-portfolio') ? 0 : $('nav[role="core-navigation"]').outerHeight() );
		var navHeight = 0;


		$('html, body').stop().animate({ 
			scrollTop: target.offset().top - navHeight
		}, 1200);
		return false;
	});

	// Toggle contact section
	//-------------------------------//		
	$('.contactactivate, .contactclose').bind("click touch",function(event){
		$('.contactwrapper').toggleClass('activate');
	});


	// Service hovers
    //-------------------------------//	
	$('.servicewrapper h2, .servicewrapper p').hover(function(){
		$(this).closest('.servicewrapper').addClass('active');
	},function(){
		$(this).closest('.servicewrapper').removeClass('active');
	});	

	// Is element in view function
	//-------------------------------//
		// checks if element is in view
		(function($) {
			$.fn.visible = function(partial) {
				var $t            = $(this),
					$w            = $(window),
					viewTop       = $w.scrollTop(),
					viewBottom    = viewTop + $w.height(),
					_top          = ($t.offset().top),
					_bottom       = _top + $t.height(),
					compareTop    = partial === true ? _bottom : _top,
					compareBottom = partial === true ? _top : _bottom;
					
				return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
			};
		
		})(jQuery);
		
		
		var win = $(window);		
		var allMods = $(".module");
		
		// already visible
		allMods.each(function(i, el) {
			var el = $(el);
			if (el.visible(true)) {
				el.addClass("already-visible"); 
			} 
		});
		
		// checks if element is visible and adds classes to animate with
		win.scroll(function(event) {
			allMods.each(function(i, el) {
				var el = $(el);
				
				// is individual element is visible
				if (el.visible(true)) {
					el.addClass("animate").siblings('.module').addClass("animate");
				}; 
			});					  
		});

});

	//-------------------------------//	
    //		Smooth Scroll   		 //
    //-------------------------------//
	$.fn.SmoothAnchors = function() {

		function scrollBodyTo(destination, hash) {

			// Get height of header to offset navigation
			var navheight = $('header').outerHeight();
			
			// Change the hash first, then do the scrolling. This retains the standard functionality of the back/forward buttons.
			var scrollmem = $(document).scrollTop();
			//window.location.hash = hash;
			$(document).scrollTop(scrollmem);
			$("html,body").animate({scrollTop:destination}, 500);
			
		}

		if (typeof $().on == "function") {
			$(document).on('click', 'a[href^="#"]', function() {
				
				var href = $(this).attr("href");
				
				if ($(href).length == 0) {
					
					var nameSelector = "[name=" + href.replace("#", "") + "]";

					if (href == "#") {
						scrollBodyTo(0, href);
					}
					else if ($(nameSelector).length != 0)  {
						scrollBodyTo($(nameSelector).offset().top, href);
					}
					else {
						// fine, we'll just follow the original link. gosh.
						window.location = href;
					}
				}
				else {
					scrollBodyTo($(href).offset().top, href);
				}
				return false;
			});
		}
		else {
			$('a[href^="#"]').click(function() {
				var href = $(this).attr("href");
				
				if ($(href).length == 0) {
					
					var nameSelector = "[name=" + href.replace("#", "") + "]";

					if (href == "#") {
						scrollBodyTo(0, href);
					}
					else if ($(nameSelector).length != 0)  {
						scrollBodyTo($(nameSelector).offset().top, href);
					}
					else {
						// fine, we'll just follow the original link. gosh.
						window.location = href;
					}
				}
				else {
					scrollBodyTo($(href).offset().top, href);
				}
				return false;
			});
		}
	};




})( jQuery );