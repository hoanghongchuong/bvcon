$(document).ready(function($){
	var bannerFullHeight = function(){
		var el = $('.vk-banner-item');
        var windowHeight = $(window).height();
        var headerHeight = 0;
        // var headerHeight = $('.vk-header').height();
        el.height(windowHeight - headerHeight);
    }();

	var owl = $(".owl-carousel-product");
	  	owl.owlCarousel({
	  		margin:0, 							
	  		loop:true, 							
	  		nav:true, 							
	  		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'], 
	  		autoplay:false, 						
	  		autoplayTimeout:1500,
			autoplayHoverPause:true,
			autoplaySpeed: 2000,
			responsiveClass:true, 				
		    responsive:{
		        0:{
		            items:2,									            									            
		        },
		        600:{
		            items:4,          
		        },
		        1000:{
		            items:4,
		        }
		    }
		});

	$('.show-box-search').on('click', function(){
		$('.box-search').toggle();
	});
	// menu scroll
	$(window).scroll(function(){
	    if ($(window).scrollTop() >= 300) {
	        $('.menu').addClass('fixed-menu');        
	    }
	    else {
	        $('.menu').removeClass('fixed-menu');        
	    }
	});
});

$(function () {
    "use strict";
    
    $(".popup img").click(function () {
        var $src = $(this).attr("src");
        $(".show-popup").fadeIn();
        $(".img-show img").attr("src", $src);
    });
    
    $("span, .overlay").click(function () {
        $(".show-popup").fadeOut();
    });
    
});