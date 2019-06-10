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

var isMulti = ($('.owl-slider .item').length > 1) ? true : false
	// Init Slider
  $('.owl-slider').owlCarousel({
    items: 1,
    loop: isMulti,
    autoplay: true,
    nav: false,
    dots: false,

  });
  // Pref add class active to 1st thumbnail via js
  $('.thumbnail').eq(0).addClass('active');
  // When slider autoplay or drag is true 
  $('.owl-slider').on('changed.owl.carousel', function(event) {
    $('.thumbnail').removeClass('active');
    var sliders = 4;
    var currentItem = event.item.index - 2;
    if(currentItem >= sliders) {
      currentItem = 0;
    }
    $('.thumbnail').eq(currentItem).addClass('active');
  });
  // When thumbnail is clicked
  $('.thumbnail a').click(function(event) {
    event.preventDefault();
    $('.thumbnail').removeClass('active');
    var index = $('.thumbnail a').index(this);
    $('.thumbnail').eq(index).addClass('active');
    $('.owl-slider').trigger('to.owl.carousel', [index, 300, true]);
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