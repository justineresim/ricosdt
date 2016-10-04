jQuery(document).ready(function($) {

	// DOM ready, take it away

	'use strict';

	//MENU
	$('.secondary-menu a').click(function(e){
		$(this).addClass('active');
		$(this).siblings().removeClass('active');
		var el = $(this).data('el')
		$(el).addClass('active');
		$(el).siblings().removeClass('active');
	});

	//HOMEPAGE
	$('.slider-nav a').click(function(){
		console.log('asd');
		var slide = '.' + $(this).data('slide');
		$(this).addClass('active');
		$(this).siblings().removeClass('active');
		$(slide).addClass('active');
		$(slide).siblings().removeClass('active');
		startLoop();
	});

	function nextSlide(){
		var slide = $('.slider.active').next('.slider');
		var nav = $('.slider-nav a.active').next('a');
		if(slide.length === 0){
			slide = $('.slider.slide-0');
			nav = $('.slider-nav a:first-child');
		}
		$(nav).addClass('active');
		$(nav).siblings().removeClass('active');
		$(slide).addClass('active');
		$(slide).siblings().removeClass('active');
		startLoop();
	}

	function prevSlide(){
		var slide = $('.slider.active').prev('.slider');
		var nav = $('.slider-nav a.active').prev('a');
		if(slide.length === 0){
			slide = $('.slider:last-child');
			nav = $('.slider-nav a:last-child');
		}
		$(nav).addClass('active');
		$(nav).siblings().removeClass('active');
		$(slide).addClass('active');
		$(slide).siblings().removeClass('active');
		startLoop();
	}

	$('a.right').click(function(event){
		nextSlide();
	})

	$('a.left').click(function(event){
		prevSlide();
	})

	$( ".slider " ).on( "swipeleft", nextSlide );
	$( ".slider " ).on( "swiperight", prevSlide );

	var iFrequency = 7000; // expressed in miliseconds
	var myInterval = 0;

	// STARTS and Resets the loop if any
	function startLoop() {
	    if(myInterval > 0) clearInterval(myInterval);  // stop
	    myInterval = setInterval( nextSlide, iFrequency );  // run
	}

	startLoop();
	
});



