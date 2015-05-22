jQuery(window).load( function() {
	(function($) {
	console.log('rock n roll');

	// Mobile open/close menu
	$('#menu-icon').on('click', function() {
		var slideMenu = $('aside#slide-menu');		

		if(slideMenu.hasClass('open-slide-menu')) {
			slideMenu.removeClass('open-slide-menu');
			$('body').removeClass('inactive');
		} else {
			slideMenu.css('visibility', 'visible').addClass('open-slide-menu');
			$('body').addClass('inactive');
		}
		
	});

	}(jQuery));

});
	