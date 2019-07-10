(function($) {
	var date = new Date();
	date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
	jQuery(document).on('click', '.top-bar .flag-list li a', function() {
		var lang = jQuery(this).data('lang');
		var host = window.location.host;
		var locationHost = window.location.protocol + '//' + host;
		$.cookie(
			"language", 
			lang, 
			{
				path: "/", 
				domain: host,
				expires: date//,
				//secure: true
			}
		);
		location.reload();
		return false;
	});
	function youtubeResize() {
		var movieHeight = (jQuery('iframe').width() / 16) * 9;
		movieHeight = Number(movieHeight);
		jQuery('iframe').css({
			height : movieHeight
		});
	}

	function showQuickTop() {
		var scTop = jQuery(window).scrollTop();
		if(scTop != 0) {
			jQuery('.quick-top').addClass('on');
		} else {
			jQuery('.quick-top').removeClass('on');
		}
	}

	jQuery(document).ready(function() {
		youtubeResize();
		jQuery(window).resize(function() {
			youtubeResize();
		});
		showQuickTop();
	});
	// Quick top

	jQuery(document).scroll(function() {
		showQuickTop()
	});
	jQuery(document).on('click', '.quick-top', function() {
		jQuery( 'html, body' ).animate( { scrollTop : 0 }, 500 );
	});
	
	// vimeo
	jQuery(document).on('click', '.vimeo', function() {
		jQuery(this).find('i').addClass('d-none');
	});
})(jQuery);