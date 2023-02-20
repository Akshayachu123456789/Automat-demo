jQuery(document).ready(function ($) {

    'use-strict';

		$(".count-number").appear(function(){
	      var datacount = $(this).attr('data-count');
	      $(this).find('.count-focus').delay(6000).countTo({
	        from: 10,
	        to: datacount,
	        speed: 3000,
	        refreshInterval: 50,
	      });
	    });


	    $( "#slider-range" ).slider({
	     range: true,
	     step:10,
	     min: 10,
	     max: 1000,
	     values: [ 100, 500 ],
	     slide: function( event, ui ) {
	       $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	     }
		});


		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );



		$(document).on('scroll', function () {
		    // if the scroll distance is greater than 100px
		    if ($(window).scrollTop() > 42) {
		      // do something
		    	$('.site-header').addClass('scrolled-header');
		    }
		    else {
		    	$('.site-header').removeClass('scrolled-header');
		    }
		});

		$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide",
			smoothHeight: true,
		    controlNav: "thumbnails"
		  });
		});
		


		// Accordion script
		function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('active');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
	    }
	 
	    $('.accordion-section-title').click(function(e) {
	        // Grab current anchor value
	        var currentAttrValue = $(this).attr('href');
	 
	        if($(e.target).is('.active')) {
	            close_accordion_section();
	        }else {
	            close_accordion_section();
	 
	            // Add active class to section title
	            $(this).addClass('active');
	            // Open up the hidden content panel
	            $('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
	        }
	 
	        e.preventDefault();
	    });


	    // Tabs script
	    jQuery('.tabs .tab-links a').on('click', function(e)  {
	        var currentAttrValue = jQuery(this).attr('href');
	 
	        // Show/Hide Tabs
	        jQuery('.tabs ' + currentAttrValue).fadeIn(500).siblings().hide();;
	 
	        // Change/remove current tab to active
	        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
	 
	        e.preventDefault();
	    });

		// Animation on scroll 
		new WOW().init();



		// Portfolio Isotope Filter

		// init Isotope
		var portfolioGrid = $('#portfolio-grid');

		portfolioGrid.imagesLoaded(function(){
		    portfolioGrid.isotope({
			    itemSelector: '.item',
			    layoutMode: 'fitRows',
			    "masonry": { "columnWidth": ".portfolio-grid-sizer" }
			});
		});

      	// filter functions
		var filterFns = {
		    // show if number is greater than 50
		    numberGreaterThan50: function() {
		      var number = $(this).find('.number').text();
		      return parseInt( number, 10 ) > 50;
		    },
		    // show if name ends with -ium
		    ium: function() {
		      var name = $(this).find('.name').text();
		      return name.match( /ium$/ );
		    }
		};

      	// bind filter button click
      	$('#projects-filter').on( 'click', 'a', function() {
		    var filterValue = $( this ).attr('data-filter');
		    // use filterFn if matches value
		    filterValue = filterFns[ filterValue ] || filterValue;
		    portfolioGrid.isotope({ filter: filterValue });
		    return false;
		});

      	// change is-checked class on buttons
		$('#projects-filter').each( function( i, buttonGroup ) {
	    	var $buttonGroup = $( buttonGroup );
	    	$buttonGroup.on( 'click', 'a', function() {
	      		$buttonGroup.find('.active').removeClass('active');
	      		$( this ).addClass('active');
	    	});
	  	});


		// Owl Carouse Testimonials

		var owl = $("#owl-demo");
 
		  owl.owlCarousel({
      		
      	pagination : false,
    		paginationNumbers: false,
      	autoPlay: 3000, //Set AutoPlay to 3 seconds
		    items : 6, //10 items above 1000px browser width
		    itemsDesktop : [1000,5], //5 items between 1000px and 901px
		    itemsDesktopSmall : [900,3], // betweem 900px and 601px
		    itemsTablet: [600,1], //2 items between 600 and 0
		    itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
		  });
		 

		var owl = $("#owl-testimonials");
 
		  owl.owlCarousel({
      	navigation : false,
    		navigationText : ["prev","next"],
      	pagination : false,
    		paginationNumbers: false,
      	autoPlay: 5000, //Set AutoPlay to 3 seconds
		    items : 1, //10 items above 1000px browser width
		    itemsDesktop : [1000,1], //5 items between 1000px and 901px
		    itemsDesktopSmall : [900,1], // betweem 900px and 601px
		    itemsTablet: [600,1], //2 items between 600 and 0
		    itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
		  });
		 
		  // Custom Navigation Events
		  $(".next").on('click' ,function(){
		    owl.trigger('owl.next');
		  })
		  $(".prev").on('click' ,function(){
		    owl.trigger('owl.prev');
		  })
		  $(".play").on('click', function(){
		    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
		  })
		  $(".stop").on('click', function(){
		    owl.trigger('owl.stop');
		  })

var mainsliderb = $(".main-sliderb");
 
		  mainsliderb.owlCarousel({
      		
      	pagination : false,
    		paginationNumbers: false,
      	autoPlay: 3000, //Set AutoPlay to 3 seconds
		    items : 1, //10 items above 1000px browser width
		    itemsDesktop : [1000,1], //5 items between 1000px and 901px
		    itemsDesktopSmall : [900,1], // betweem 900px and 601px
		    itemsTablet: [600,1], //2 items between 600 and 0
		    itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
		  });

		jQuery(document).ready(function(){
			jQuery('.skillbar').each(function(){
				jQuery(this).find('.skillbar-bar').animate({
					width:jQuery(this).attr('data-percent')
				},3000);
			});
		});



		// Submenu Show/Hide
        // $('nav.main-navigation ul > li, nav.main-navigation ul > li > ul > li').hover(function () {
        //     $(this).children('ul').stop(true, true).slideDown(200);
        // }, function () {
        //     $(this).children('ul').stop(true, true).slideUp(200);
        // });

		
		$('nav.main-navigation > ul > li').each(function(){
			$(this).find('.has-submenu').append('<i class="fa fa-angle-down"></i>');
		});


        // Blog Masonry
        var blogIsotope=function(){
            var imgLoad = imagesLoaded($('.blog-isotope'));
		   
            imgLoad.on('done',function(){

                $('.blog-isotope').isotope({
                    "itemSelector": ".blog-post",
                });
               
            })
           
           imgLoad.on('fail',function(){

                $('.blog-isotope').isotope({
                    "itemSelector": ".blog-post",
                });

           })  
           
        }
                   
        blogIsotope();



        // Flickr Images
        $('.flickr-images').jflickrfeed({
			limit: 6 ,
			qstrings: {id: '56174287@N02'},
			itemTemplate: '<li class="small-thumb"><a href="{{link}}" title="{{title}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
		});



		// Off Canvas Navigation
		var offcanvas_open = false;
		var offcanvas_from_left = false;

		function offcanvas_right() {
			
			$(".sidebar-menu-container").addClass("slide-from-left");
			$(".sidebar-menu-container").addClass("sidebar-menu-open");		
			
			offcanvas_open = true;
			offcanvas_from_left = true;
			
			$(".sidebar-menu").addClass("open");
			$("body").addClass("offcanvas_open offcanvas_from_left");

			$(".nano").nanoScroller();
			
		}

		function offcanvas_close() {
			if (offcanvas_open === true) {
					
				$(".sidebar-menu-container").removeClass("slide-from-left");
				$(".sidebar-menu-container").removeClass("sidebar-menu-open");
				
				offcanvas_open = false;
				offcanvas_from_left = false;
				
				//$('#sidebar-menu-container').css('max-height', 'inherit');
				$(".sidebar-menu").removeClass("open");
				$("body").removeClass("offcanvas_open offcanvas_from_left");

			}
		}

		$(".side-menu-button").on('click', function() {
			offcanvas_right();
		});

		$("#sidebar-menu-container").on("click", ".sidebar-menu-overlay", function(e) {
			offcanvas_close();
		});

		$(".sidebar-menu-overlay").swipe({
			swipeLeft:function(event, direction, distance, duration, fingerCount) {
				offcanvas_close();
			},
			swipeRight:function(event, direction, distance, duration, fingerCount) {
				offcanvas_close();
			},
			tap:function(event, direction, distance, duration, fingerCount) {
				offcanvas_close();
			},
			threshold:0
		});


		// Mobile navigation
		$(".responsive-menu .menu-item-has-children").append('<div class="show-submenu"><i class="fa fa-chevron-circle-down"></i></div>');

	    $(".responsive-menu").on("click", ".show-submenu", function(e) {
			e.stopPropagation();
			
			$(this).parent().toggleClass("current")
							.children(".sub-menu").toggleClass("open");
							
			$(this).html($(this).html() == '<i class="fa fa-chevron-circle-down"></i>' ? '<i class="fa fa-chevron-circle-up"></i>' : '<i class="fa fa-chevron-circle-down"></i>');
			$(".nano").nanoScroller();
		});

		$(".responsive-menu").on("click", "a", function(e) {
			//if( ($(this).attr('href') === "#") || ($(this).attr('href') === "") ) {
			if( $(this).hasClass('has-submenu') ) {
				$(this).parent().children(".show-submenu").trigger("click");
				return false;
			} else {
				offcanvas_close();
			}
		});


		// revolution slider
		if($('.fullwidthbanner').length){
		var ms_speed = $('.main-slidera').data('speed'); 
		var ms_height = $('.main-slidera').data('height');

		if(isNaN(ms_speed)||ms_speed==''){
		ms_speed = 6000;
		}
		if(isNaN(ms_height)||ms_height==''){
		ms_height = 680;
		}
		
		$('.fullwidthbanner').revolution({
        	delay:ms_speed,
			startwidth:1170,
        	startheight:ms_height,
        	onHoverStop: "off",
        	hideTimerBar: "on",
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 3,
            hideThumbs: 200,
            navigationType: "bullet",
            navigationArrows: "verticalcentered",
            navigationStyle: "preview4",
            touchenabled: "on",
            navOffsetHorizontal: 0,
            navOffsetVertical: 20,
            stopAtSlide: -1,
            stopAfterLoops: -1,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            hideSliderAtLimit: 0,
            hideThumbsOnMobile:"on",
         	hideNavDelayOnMobile:1500,
         	hideBulletsOnMobile:"on",
         	hideArrowsOnMobile:"on",
         	hideThumbsUnderResoluition:0,
            fullWidth: "on",
            shadow: 0
      	});
		}


		//  go to top
      	var offset = 1000,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 500,
		//grab the "back to top" link
		$back_to_top = $('.go-top');

		//hide or show the "back to top" link
		$(window).on('scroll', function(){
			( $(this).scrollTop() > offset ) ? $back_to_top.addClass('go-top-visible') : $back_to_top.removeClass('go-top-visible go-top-fade-out');
			if( $(this).scrollTop() > offset_opacity ) { 
				$back_to_top.addClass('go-top-fade-out');
			}
		});

		//smooth scroll to top
		$back_to_top.on('click', function(event){
			event.preventDefault();
			$('body,html').animate({
				scrollTop: 0 ,
			 	}, scroll_top_duration
			);
		});

		
		$('.showLink, .hideLink').on('click',function(){
			
			var shID= '.example';
			
			if ($(shID).length) {
				if ($(shID+'-show').css('display') != 'none') {
					$(shID+'-show').hide();
					$(shID).show();
					$('.shopicon').hide();
				}
				else {
					$(shID+'-show').css('display','inline');
					$(shID).hide();
					$('.shopicon').show();
				}
			}
			return false;
		})
	
	
	
		$('.widget .searchform,.sidebar-widget .searchform, .responsive-menu .searchform').each(function(){
			var place = $(this).find('.screen-reader-text').html();
			$(this).find('[type="text"]').attr({'placeholder':place});
		});
		
		
		if($('#side-bar .tweet, .blog-sidebar .tweet').length){
	  'use strict';
			$('#side-bar .tweet, .sleft-sidebar .tweet').each(function(){

				var ele = $(this);
				var user_t = $(this).data('username');
				var count_t = $(this).data('count');
				$(ele).twittie({
				dateFormat: "%B %d, %Y",
				template: '<i class="fa fa-twitter"></i><p><span class="twuser">{{user_name}}</span>{{tweet}}</p><span class="twdate">{{date}}</span>',
				hideReplies: true,
				username:user_t,
				count:count_t
			});
			});
		}
		
		
		
		
		/* ajax - shares */
		var windowOpen;
		$('.author-writen .border-button a').click(function(e) {
			
			
			
		   if ( 'undefined' !== typeof windowOpen ){ 
				windowOpen.close();
			}
			windowOpen = window.open( $(this).attr( 'href' ), 'wpcomfacebook', 'menubar=1,resizable=1,width=800,height=400' ); 
			return false;
		})	
		
		$(".wpcf7-form [name='enquiry']").each(function(){
			var theenquiry = $(this);
			theenquiry.attr('type','hidden')
			var contenthidden = $('.superdetallito').html();
			theenquiry.val(contenthidden);
		})
		
		$(".enquiry-w form").each(function(){
			var theenquiry = $(this);
			
			var contenthidden = $('.hide_fields').html();
			theenquiry.append(contenthidden);
		})
		
		
		$('.bd_enquiry [itemprop="offers"],.woocommerce.bd_enquiry div.product .product_title').wrapAll('<div class="up-content up-contentown fadeIn animated"></div>');
		
		$( 'p:empty' ).remove();
		$( '.pagination-com:empty' ).remove();
		$( '.leave-comment:empty' ).remove();
		
		
		
		/* The contact map	*/
		if($('#map').length){

			var lat = auction_map_latitude;
			var lng = auction_map_longitude;
			var zo = auction_map_zoom;
				if(isNaN(auction_map_zoom)||typeof auction_map_zoom=='object'){
					zo = 8;
				}
			function initialize() {
				var mapCanvas = document.getElementById('map');
				var mapOptions = {
				  center: new google.maps.LatLng(lat, lng),
				  zoom: parseInt(zo),
				  scrollwheel: false,
				  mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				var map = new google.maps.Map(mapCanvas, mapOptions)
			}
			google.maps.event.addDomListener(window, 'load', initialize);

		
		}
		
		
		/* --------------------------------------------
	 Pretty Photo
	-------------------------------------------- */	
	if($(".playblue").length){
		$(".playblue").magnificPopup({
			// delegate: '.magnific-popup', // child items selector, by clicking on it popup will open
			type: 'iframe',
			gallery: {
			  enabled: true
			},
		});
	}
		
		
	$('.load-more-button').on('click',function(){
		
		load_blog_mode('list');
		return false;
	});
	
	function load_blog_mode(){
	   
		var container = $('.add-here');
		
		var _this_btn = $('.load-more-button');
		_this_btn.addClass('active');
		
		var auction_offset = $('.blog-item').length;
		var grid = 2;
		if(container.data('grid')=='3'){
		var grid = 3;
		}
		$.ajax({
		   type: "POST",
		   url: auction_ajaxurl,
		   data: "action=blog_more&auction_grid="+grid+"&auction_offset="+auction_offset ,  
		   success: function(msg){
				if(msg.indexOf("##nopost##") >= 0){
					$(_this_btn).find('a').html(auction_nomore);					
					$(_this_btn).slideUp();					
				}else{
					//alert(data);
					var element = $(msg);	
					element.hide().appendTo(container).fadeIn(1000);
					
					$('.load-more-button').removeClass('active');
				}
				
		   }
	   });
	}
	
	
	$('#to-classic').on('click',function(){
		
		load_shop_mode('classic',this);
		return false;
	});
	
	$('#to-grid').on('click',function(){
		
		load_shop_mode('grid',this);
		return false;
	});

	if($('#shop-main').hasClass('listing-page')){
	$('ul.products').data('blogmode','classic');
	}else{
	$('ul.products').data('blogmode','grid');
	}
	var shopf = true;
	function load_shop_mode(mode,button){
	
		if($('.change-shop.active').length){
		return false;
		}
	    var param = 'auction_shop_mode='+mode;
		var _url = location.href;
		var container = $('ul.products');
		
		
		
		/* if(mode=='grid'){
		$('#b-view-list').removeClass("active")
		$('#b-view-grid').addClass("active")
		}else if(mode=='list'){
		$('#b-view-grid').removeClass("active")
		$('#b-view-list').addClass("active")
		} */
		
		
		
		if(container.data('blogmode')==mode){
		
			$(button).addClass('active');
			setTimeout(
			function() {
			 $(button).removeClass('active');
			}, 800);
		
			
		return;
		}else{
		$(button).addClass('active');
		}
		
		
		container.data('blogmode',mode);
		
		
		$.ajax({
		   type: "POST",
		   url: _url,
		   data: "auction_shop_mode="+mode ,  
		   success: function(msg){
				container.fadeOut('normal',function(){
				if(mode=='grid'){
				$('#shop-main').removeClass('listing-page');
				$('#shop-main').addClass('listing-grid');
				}else{
				$('#shop-main').addClass('listing-page');
				$('#shop-main').removeClass('listing-grid');
				}
				
				
				container.html(msg);
				container.fadeIn('normal')
				$('#to-classic').removeClass('active');
				$('#to-grid').removeClass('active');
				});
				
				var expires = new Date();
				expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
				document.cookie = 'dex_type_shop' + '=' + mode + ';expires=' + expires.toUTCString();
		   }
	   });
	}
	
	
	

	/* Rebuild of type list widgets */
	if($('.widget_archive li,.widget_categories li').length){
			$(".widget_archive li,.widget_categories li").each(function(){
			
				var li_trouble = $(this);
				if(li_trouble[0].childNodes.length > 1){
					var alone = li_trouble[0].childNodes[1].nodeValue;
					
					var d = document.createElement("span");
					d.className = "count";
					d.innerHTML = alone;
					li_trouble[0].childNodes[0].appendChild(d);
					li_trouble[0].childNodes[1].nodeValue = '';	
				}
			});
		}
		
		$('footer .widget').each(function(){
			if($(this).find('ul.children,ul.sub-menu').length){
			$(this).addClass('one-col');
			}
		});
	
		$('.comment-reply-link').on('click',function(){
			var parent = $(this).parent().data('commentid');
			$('#comment_parent').attr('value',parent);
			$('html, body').animate({
				scrollTop: $("#contactform").offset().top - 200
			}, 800);
			return false;
		})
		
		 
		$('.bd_enquiry .car-details .up-content+p.price').each(function() {
			$(this).attr('itemprop','offers');
			$(this).insertAfter('.bd_enquiry.woocommerce div.product .product_title');

		});
	
});
