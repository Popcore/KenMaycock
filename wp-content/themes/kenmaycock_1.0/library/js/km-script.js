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
			slideMenu.addClass('open-slide-menu').css('visibility', 'visible');
			$('body').addClass('inactive').append('<div id="full-overlay"></div>');
		}
	});

	// hide/reveal thumbnail overlay
	$('div.artwork').hover(
		function() {
			if(window.innerWidth > 480) {
				$(this).find('div.info-container').fadeIn();
			}
		},
		function() {
			if(window.innerWidth > 480) {
				$(this).find('div.info-container').fadeOut();
			}
		}
	);

	// hide/reveal work subnav on work subpages
	if(window.innerWidth < 640) {
		$('a.work-link').on('click', function(ev) {
			ev.preventDefault();
			$('ul#work-subnav').slideToggle();
		});
	} else {
		// display work sub nav if on work pages
		if($('div#wrapper').hasClass('work')) {
			var subnav = $('ul#work-subnav');
			subnav.show();
		}
	}

	$(window).on('resize', function() {
		// remove overlay if is present
		if($('div#full-overlay').length > 0) {
			$('div#full-overlay').remove();
		}

		if(window.innerWidth > 640) {
			
			if($('.menu-icon-wrapper').hasClass('close-menu-icon')) {
				$('.menu-icon-wrapper').removeClass('close-menu-icon');
			} 

			if($('aside#slide-menu').hasClass('open-slide-menu')) {
				$('aside#slide-menu').removeClass('open-slide-menu');
				$('body').removeClass('inactive');
				$('#full-overlay').remove();
			}
		}
	});


	}(jQuery));

});
	