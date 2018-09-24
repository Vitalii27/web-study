jQuery(function ($) {



    var arrowLeft = '<i class="fa fa-angle-left" aria-hidden="true"></i>';
    var arrowRight = '<i class="fa fa-angle-right" aria-hidden="true"></i>';


    var portfolioLeftSlider = jQuery('.js-portfolio-slider');
    var qestionsSlider = jQuery('.js-question-slider');
    var partnersSlider = jQuery('.b-slider-clients');
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
    var partnersOption = {

        autoplaySpeed: 3000,
        slidesToShow: 6,
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
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                }
            },

            {
                breakpoint: 980,
                settings: {
                    slidesToShow: 4,

                }
            },{
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,

                }
            },{
                breakpoint: 540,
                settings: {
                    slidesToShow: 2,

                }
            },{
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,

                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    }; var qestionsOption = {

        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,

        dots: false,
        infinite: true,
        nextArrow: '<button type="button" class="slider_btn--next slider_btn"> ' + arrowRight + ' </button>',
        prevArrow: '<button type="button" class="slider_btn--prev slider_btn">' + arrowLeft + '</button>',
        cssEase: 'linear',
        swipeToSlide: true,
        accessibility: false,

    };


    portfolioLeftSlider.slick(portfolioLeftOption);
    qestionsSlider.slick(qestionsOption);
    partnersSlider.slick(partnersOption);


}); // ready
// windowSize()