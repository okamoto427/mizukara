// fadein
$(function () {
    $(window).scroll(function () {
        const wHeight = $(window).height();
        const scrollAmount = $(window).scrollTop();
        $('.FadeAnimate').each(function () {
            const targetPosition = $(this).offset().top;
            if (scrollAmount > targetPosition - wHeight + 0) {
                $(this).addClass("done");
            }
        });
    });
});

// slider
$('.slider').slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: 'linear',
    speed: 2800,
    slidesToShow: 3.2,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 767,
            settings: {
            speed: 3500,
            slidesToShow: 2,
            }
        },
    ],
});

// swiper
window.addEventListener('DOMContentLoaded', function() {
	var swiper = new Swiper('.swiper-container1', {
		pagination: {
			el: '.swiper-pagination1',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		loop: true,
        speed: 800,
		spaceBetween: 70,
        slidesPerView: 1,
		centeredSlides : true,
		effect: 'slide',
        breakpoints: {
            767: {
                slidesPerView: 1,
                centeredSlides : true,
                spaceBetween: 50,
            }
        }
	});
    var swiper = new Swiper('.swiper-container2', {
		pagination: {
			el: '.swiper-pagination2',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		loop: true,
        speed: 800,
		spaceBetween: 220,
        slidesPerView: 1,
		centeredSlides : true,
		effect: 'slide',
        breakpoints: {
            767: {
                slidesPerView: 1,
                centeredSlides : true,
                spaceBetween: 50,
            }
        }
	});
}, false);
	

// scroll hint
new ScrollHint('.js-scrollable', {
    i18n: {
    scrollable: 'スクロールできます'
    }
});
