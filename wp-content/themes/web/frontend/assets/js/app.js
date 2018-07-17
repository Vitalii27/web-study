// var jq = jQuery;

var app = (function() {

    var _onLoad = function() {

        var vanillaModal = new VanillaModal.default();

        document.getElementById('menu-control').addEventListener('click', function(e) {
            _menuToggle(this);
        });

        if (document.querySelector('input[type="tel"]')) {
            var telInput = document.querySelectorAll('input[type="tel"]');
            for (var i = 0; i < telInput.length; i++) {
                Inputmask({ "mask": "+7(999) 999-99-99" }).mask(telInput[i]);
            }
        }


        // табы faq
        if (document.querySelector('#js-tabs-faq')) {
            _tabs(document.querySelector('#js-tabs-faq'), 0);
        }
    }


    // if ( document.querySelector('#js-portf-tabs') ) {
    //     _tabs( document.querySelector('#js-portf-tabs'), 0 );
    // }


    // слайдер отзывов
    if (document.querySelector('#js-tns-testimonial')) {
        var tnsTestimonialsContainer = document.querySelector('#js-tns-testimonial');
        var tnsTestimonials = tns({
            container: tnsTestimonialsContainer.querySelector('.slider-container'),
            items: 1,
            controlsContainer: tnsTestimonialsContainer.querySelector('.slider-controls'),
            navContainer: tnsTestimonialsContainer.querySelector('.slider-nav')
        });
    }


    // слайдер клиентов
    if (document.querySelector('#js-tns-clients')) {
        var tnsClientsContainer = document.querySelector('.b-clients');
        var tnsClients = tns({
            container: '#js-tns-clients',
            items: 6,
            controlsContainer: tnsClientsContainer.querySelector('.slider-controls'),
            responsive: {
                0: {
                    items: 2
                },
                544: {
                    items: 4
                },
                768: {
                    items: 6
                }
            }
        });
    }


    // галерея портфолио
    if (document.querySelector('.portf-gallery')) {

        baguetteBox.run('.portf-gallery__body');

        var tnsPGalleryContainer = document.querySelector('.portf-gallery');
        var tnsPGalleryBody = tnsPGalleryContainer.querySelector('.portf-gallery__body');

        var tnsPGallery = tns({
            container: tnsPGalleryContainer.querySelector('.portf-gallery-slider .inner'),
            controlsContainer: tnsPGalleryContainer.querySelector('.portf-gallery-slider .controls'),
            items: 3,
            nav: 0,
            gutter: 10,
            controlsText: ['', ''],
            loop: 0,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 3
                }
            },
            onInit: function(e) {

                var container = e.container;
                var slideIdx = e.index;
                var slides = e.slideItems;
                var slide = e.slideItems[slideIdx];

                _portfSlider(container, slide, tnsPGalleryBody);

                [].forEach.call(slides, function(elem) {

                    elem.addEventListener('click', function(e) {
                        _portfSlider(container, elem, tnsPGalleryBody);
                    });

                });

            }
        });

    }

    // для валидации добавить атрибут data-validate
    validate.init({
        messageValueMissing: 'Это обязательное поле',
        messageTooShort: 'Не менее {minLength} символов',
        disableSubmit: true,

        onSubmit: function(form, fields) {
            _sendForm(form);
        }
    });

    if (document.getElementById('map')) {
        _createMap(document.getElementById('map'));
    };


    var _menuToggle = function(elem) {
        elem.classList.toggle('active');
        document.getElementById('main-menu').classList.toggle('active');
    };


    var _portfSlider = function(container, elem, galleryBody) {

        var tabs = document.querySelectorAll('.portf-tabs-desc');

        if (container.querySelector('.active')) {
            container.querySelector('.active').classList.remove('active');
        }

        elem.classList.add('active');

        var index = container.querySelector('.active .image').getAttribute('data-index');

        if (galleryBody.querySelector('.active')) {
            galleryBody.querySelector('.active').classList.remove('active');
            document.querySelector('.portf-tabs-desc.active').classList.remove('active');
        }

        galleryBody.querySelectorAll('.image')[index].classList.add('active');
        tabs[index].classList.add('active');

        _tabs(tabs[index], 0);
    };


    var _sendForm = function(form) {
        var fd = new FormData(form),
            url = myajax.url;

        fd.append('action', 'mail_handler');
        fd.append('nonce_code', myajax.nonce);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Typical action to be performed when the document is ready:
                var res = JSON.parse(xhttp.responseText);
                if (res.success) {
                    form.reset();
                    form.classList.add('success');
                    setTimeout(function() {
                        form.classList.remove('success');
                    }, 3000);
                }
            }
        };
        xhttp.open("POST", url, true);
        xhttp.send(fd);
    };


    // Табы
    var _tabs = function(container, activeItem) {
        // список - атрибут [data-tab-control='']
        // сами табы - атрибут [data-tab='']

        var tabContainer = container;
        var tabControls = container.querySelectorAll('[data-tab-control]');
        var tabs = container.querySelectorAll('[data-tab]');

        tabControls[activeItem].classList.add('active');
        var activeTab = tabControls[activeItem].getAttribute('data-tab-control');

        tabContainer.querySelector('[data-tab="' + activeTab + '"]').classList.add('active');

        [].forEach.call(tabControls, function(tabControl) {

            tabControl.addEventListener('click', function() {
                var tabName = this.getAttribute('data-tab-control');

                container.querySelector('[data-tab-control].active').classList.remove('active');
                this.classList.add('active');

                if (tabName != '') {
                    [].forEach.call(tabs, function(tab) {
                        tab.classList.remove('active');
                    });
                    container.querySelector('[data-tab="' + tabName + '"]').classList.add('active');

                }
            });

        });
    };


    var _createMap = function(elem) {
        // Яндекс Карта
        // http://dimik.github.io/ymaps/examples/location-tool/
        // <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
        // #elem(data-center="" data-mark="" data-address="" data-zoom="")

        var mapCenter = elem.getAttribute('data-center'),
            mapMark = elem.getAttribute('data-mark'),
            mapAddress = elem.getAttribute('data-address'),
            mapZoom = elem.getAttribute('data-zoom'),

            mapCenterCoords = mapCenter.split(','),
            mapMarkCoords = mapMark.split(','),

            myMap,
            myPlacemark;

        ymaps.ready(init);

        function init() {
            myMap = new ymaps.Map(elem, {
                center: mapCenterCoords,
                zoom: mapZoom,
                // controls: ['geolocationControl', 'routeButtonControl', 'typeSelector', 'fullscreenControl', 'zoomControl']
                controls: ['zoomControl', 'fullscreenControl']
            });

            myMap.behaviors.disable('scrollZoom');

            myPlacemark = new ymaps.Placemark(mapMarkCoords, { hintContent: mapAddress });

            myMap.geoObjects.add(myPlacemark);
        }
    };


    var init = function() {
        svg4everybody();

        document.addEventListener('DOMContentLoaded', _onLoad);
    };

    return {
        init: init
    };
})();
app.init();
//# sourceMappingURL=../css/app.js.map
