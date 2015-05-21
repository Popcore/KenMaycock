jQuery(window).load( function() {
	(function($) {
	console.log('rock n roll');

	// Mobile open/close menu
	$('#menu-icon').on('click', function() {
		var slideMenu = $('div#slide-menu');

		if(slideMenu.hasClass('open-slide-menu')) {
			slideMenu.removeClass('open-slide-menu');
		} else {
			slideMenu.addClass('open-slide-menu');
		}
		
	});

	}(jQuery));

});
	