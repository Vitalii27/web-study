jQuery(function ($) {



    var arrowLeft = '<i class="fa fa-angle-left" aria-hidden="true"></i>';
    var arrowRight = '<i class="fa fa-angle-right" aria-hidden="true"></i>';


    var portfolioLeftSlider = jQuery('.js-portfolio-slider');
    var portfolioLeftOption = {

        autoplaySpeed: 3000,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        infinite: true,
        nextArrow: '<button type="button" class="slider_btn--next slider_btn"> ' + arrowRight + ' </button>',
        prevArrow: '<button type="button" class="slider_btn--prev slider_btn">' + arrowLeft + '</button>',
        cssEase: 'linear',
        swipeToSlide: true,
        accessibility: false,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 2,


                }
            },

            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,

                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    };


    portfolioLeftSlider.slick(portfolioLeftOption);


}); // ready
// windowSize()