jQuery(function ($) {
	// arrow icons
	var arrowLeft = '<img src="assets/images/content/slidearrow.svg" alt="arrow">';
	var arrowRight = '<img src="assets/images/content/slidearrow.svg" alt="arrow">';

	// preset options

	var welcomeSlider = jQuery('.js-welcome');
	var welcomeOption = {
		autoplay: true,
		autoplaySpeed: 3000,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		infinite: true,
		fade: true,
		cssEase: 'linear',
		swipeToSlide: true,
		accessibility: false // prevent page scroll up on autoplay
	};
	var portfolioLeftSlider = jQuery('.js-portfolio-slider');
	var portfolioLeftOption = {
		// variableWidth: true,
		// autoplay: true,
		autoplaySpeed: 3000,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		infinite: true,
		fade: true,
		cssEase: 'linear',
		swipeToSlide: true,
		accessibility: false // prevent page scroll up on autoplay
	};


	welcomeSlider.slick(welcomeOption);
	portfolioLeftSlider.slick(portfolioLeftOption);


}); // ready
// windowSize()