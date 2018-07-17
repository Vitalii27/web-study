/* smooth scrolling */
jQuery(function ($) {
	jQuery('a[href*="#"]:not([href="#"])').click(function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			// prevent conflict with tabs and other script used hash
			if ( jQuery(this).data("ignore-scroll") ) return;

			var target = jQuery(this.hash);
			target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				jQuery('html, body').animate({
					scrollTop: target.offset().top
				}, 800);
				return false;
			}
		}
	});
});
/* smooth scrolling end*/