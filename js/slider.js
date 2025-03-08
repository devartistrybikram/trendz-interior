$(document).ready(function () {

    $(".scroller").scroller();

    $('.owl-banner').owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2000,
        // center: true
    });

    $('.owl-choose').owlCarousel({
        items: 2,
        loop: true,
        margin: 25,
        nav: false,
        dots: false,
        // center: true,
        // autoplay: true,
        // autoplayTimeout: 2000,
        // autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1200: {
                items: 2
            }
        }
    });

    $('.owl-gallery, .owl-others').owlCarousel({
        items: 3,
        loop: true,
        margin: 20,
        stage: 0,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2500,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });

    $('.owl-review').owlCarousel({
        items: 3,
        loop: true,
        margin: 25,
        stage: 0,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3500,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });

    $('.owl-design').owlCarousel({
        items: 3,
        loop: true,
        margin: 25,
        stage: 0,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3500,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });

    $('.owl-blog').owlCarousel({
        items: 3,
        loop: true,
        margin: 25,
        stage: 0,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });
});