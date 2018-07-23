function init() {
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
        '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
    );
    var markerOptions = {
        iconLayout: 'default#imageWithContent',
        iconImageHref: mapConfig.maps[0].icon,
        iconImageSize: [30, 30],
        hideIconOnBalloonOpen: false,
        iconContentLayout: MyIconContentLayout,
        balloonOffset: [15, 0],
        openBalloon: true,
        iconShape: {
            type: 'Rectangle',
            coordinates: [
                [-25, -25],
                [25, 25]
            ]
        }
    };
    // var ballonContentHtml = $('.ballon');
    var myMap = new ymaps.Map(mapConfig.maps[0].id, {
            center: mapConfig.maps[0].mapCenter,
            zoom: mapConfig.maps[0].zoom
        }, {
            searchControlProvider: 'yandex#search'
        }),
        myPlacemarkWithContent = new ymaps.Placemark(mapConfig.maps[0].mapCenter, {
            balloonContent: mapConfig.maps[0].balloonContentBody
        }, markerOptions);

    myMap.geoObjects.add(myPlacemarkWithContent);


};
jQuery(window).on("load", function () {

        ymaps.ready(init);



});