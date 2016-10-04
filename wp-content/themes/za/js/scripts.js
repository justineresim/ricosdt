jQuery(document).ready(function($) {

	// DOM ready, take it away

	'use strict';

	$('.secondary-menu a').click(function(e){
		$(this).addClass('active');
		$(this).siblings().removeClass('active');
		var el = $(this).data('el')
		$(el).addClass('active');
		$(el).siblings().removeClass('active');
	});

	$('.slider-nav a').click(function(){
		console.log('asd');
		var slide = '.' + $(this).data('slide');
		$(this).addClass('active');
		$(this).siblings().removeClass('active');
		$(slide).addClass('active');
		$(slide).siblings().removeClass('active');
	});

	$('a.right').click(function(event){
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
	})

	$('a.left').click(function(event){
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
	})
	
});



