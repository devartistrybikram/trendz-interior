AOS.init({
	offset: 200,
	delay: 100,
	duration: 650,
	easing: 'ease-out-back',
	once: false,
	mirror: false,
	anchorPlacement: 'top-bottom'
});

$(document).ready(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 350) {
			$(".scrollToTop").addClass("d-flex").fadeIn();
		} else {
			$(".scrollToTop").removeClass("d-flex").fadeOut();
		}
	});

	$(".scrollToTop").click(function () {
		$("html, body").animate({ scrollTop: 0 }, 1200);
		return false;
	});

	$(window).scroll(function () {
		if ($(this).scrollTop() > 250) {
			$('header').removeClass('position-relative').addClass('position-sticky active').css('top', '0px');
		} else {
			$('header').removeClass('position-sticky active').addClass('position-relative').css('top', '-200px');
		}
	});
});
