jQuery(window).load( function() {
	(function($) {

	// Mobile open/close menu
	$('.menu-icon-wrapper').on('click', function() {
		var slideMenu = $('aside#slide-menu'),
				$this = $(this);

		// change icon	
		if($this.hasClass('close-menu-icon')) {
			$this.removeClass('close-menu-icon');
		} else {
			$this.addClass('close-menu-icon');
		}

		// animate menu and overlay
		if(slideMenu.hasClass('open-slide-menu')) {
			slideMenu.removeClass('open-slide-menu');
			$('body').removeClass('inactive');
			$('#full-overlay').remove();
		} else {
			slideMenu.css('visibility', 'visible').addClass('open-slide-menu');
			$('body').addClass('inactive').append('<div id="full-overlay"></div>');
		}
	});

	// hide revela thumbnail overlay
	$('div.artwork').hover(
		function() {
			$(this).find('div.info-container').fadeIn();
		},
		function() {
			$(this).find('div.info-container').fadeOut();
		}
	);

	}(jQuery));

});
	