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


    $('.owl-review').owlCarousel({
        items: 1.5,
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        center: true,
        autoplay: true,
        autoplayTimeout: 3500,
        responsive: {
            0: {
                items: 1.1
            },
            600: {
                items: 1.25
            },
            900: {
                items: 1.5
            },
            1200: {
                items: 1.75
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

    // ----------------------------------------------------------------------------

    $('.owl-features').owlCarousel({
        items: 3,
        loop: true,
        margin: 15,
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
            900: {
                items: 3
            },
            1200: {
                items: 4
            },
            1400: {
                items: 5
            }
        }
    });

    // ----------------------------------------------------------------------------

    $('.owl-others').owlCarousel({
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
                margin: 15,
                items: 2
            },
            1200: {
                items: 3
            },
            1400: {
                margin: 20,
                items: 4
            }
        }
    });

    // ----------------------------------------------------------------------------

    var product = $(".owl-products").owlCarousel({
        loop: true,
        items: 1,
        margin: 5,
        nav: false,
        dots: true,
        dotsData: true
    });

    var slidecount = 0;
    $('.owl-products .owl-item').not('.cloned').each(function () {
        var src = $(this).find('img').attr('src');
        slidecount = slidecount + 1;
        $('.owl-cust-dots').append('<li class="p-0"><img src="' + src + '" alt="slider image button ' + slidecount + '"/></li>');
    });

    $('.owl-cust-dots').on('click', 'li', function (e) {
        product.trigger('to.owl.carousel', [$(this).index(), 300]);
    });

    $('.owl-cust-dots').height($(".owl-products").height());

});
