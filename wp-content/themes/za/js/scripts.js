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
	
});



