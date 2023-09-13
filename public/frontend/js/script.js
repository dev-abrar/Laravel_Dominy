$(function () {

	// wow js
	wow = new WOW({
		boxClass: 'wow', // default
		animateClass: 'animated', // default
		offset: 0, // default
		mobile: true, // default
		live: true // default
	})
	wow.init();

	// Venobox
	new VenoBox({
		selector: '.my-image-links',
		numeration: true,
		infinigall: true,
		share: true,
		spinner: 'rotating-plane'
	});


	// Counterup
	$('.counter').counterUp({
		delay: 10,
		time: 1500
	});


	//----- Back to Top -----//

	$('.bt_top').click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 1500)
	});

	$(window).scroll(function () {
		var scrolling = $(this).scrollTop();

		if (scrolling > 300) {
			$('.bt_top').fadeIn(300);
		} else {
			$('.bt_top').fadeOut(300)
		}

		if (scrolling > 100) {
			$('.navbar').addClass('menu_fix');
		} else {
			$('.navbar').removeClass('menu_fix');
		}
	});

	// team Slider
	$('.team_row').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		speed: 1000,
		arrows: false,
		responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					dots: false,
				}
			},
			{
				breakpoint: 476,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					dots: false,
				}
			}
		]
	});

	// team Slider
	$('.test_row').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 2000,
		speed: 1000,
		arrows: false,
		responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					dots: false,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					dots: false,
				}
			}
		]
	});

	//Preloader-js
	$(window).on('load', function () {
		$('.preloader').delay(300).fadeOut(300);
	});


});

var containerEl = document.querySelector('.port_mix');

var mixer = mixitup(containerEl);