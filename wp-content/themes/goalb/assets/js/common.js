//MEMBERスライダー
$(function(){
  
  $('.home-member__slide').slick({
    autoplay: true,
    autoplaySpeed: 0, 
    speed: 5000, 
    cssEase: "linear",
    slidesToShow: 6.5, 
    swipe: false, 
    arrows: false, 
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 3, 
        }
      }
    ]
  });
});

$(function(){
  $('.home-member__slideRtl').slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000, 
    cssEase: "linear",
    slidesToShow: 6.5, 
    swipe: false, 
    arrows: false, 
    pauseOnFocus: false,
    pauseOnHover: false,
	rtl:true,
    responsive: [
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 3, 
        }
      }
    ]
  });
});

//スライダー
$(document).ready(function(){
$('.home-cover__slide').slick({
		arrows: true,
		centerPadding: '0',
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 4000,
		responsive: [
			{
			breakpoint: 767,
			settings: {
				arrows: false,
				dots:false,
				fade: true,
				centerMode: true,
				centerPadding: '0',
				slidesToShow: 1
				}
			}
		]
	});
});

//お客さまの声
$(document).ready(function(){
$('.m-voice__slide').slick({
		arrows: true,
		centerMode: true,
		slidesToShow: 1,
		variableWidth: true,
		autoplay: true,
		autoplaySpeed: 4000,
		responsive: [
			{
			breakpoint: 767,
			settings: {
				variableWidth: false,
				centerPadding: '2.5rem',
				}
			}
		]
	});
});

//お客さまの声
$(document).ready(function(){
$('.m-voice02__slide').slick({
		arrows: true,
		centerMode: true,
		slidesToShow: 1,
		variableWidth: true,
		// autoplay: true,
		// autoplaySpeed: 4000,
		responsive: [
			{
			breakpoint: 767,
			settings: {
				variableWidth: false,
centerPadding: '2.5rem',
				}
			}
		]
	});
});
//お客さまの声


$(document).ready(function(){
  $('.m-voice02__slide02').slick({
      arrows: true,
      centerMode: true,
      infinite: true, 
      slidesToShow: 1,
      variableWidth: true,
      lazyLoad: 'ondemand',
      // autoplay: true,
      // autoplaySpeed: 4000,
      responsive: [
        {
        breakpoint: 767,
        settings: {
          centerMode: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          
          variableWidth: true,
          }
        }
      ]
    });
  });
//コーチ一覧
$(document).ready(function(){
$('.m-coach__slide').slick({
		arrows: true,
		// centerMode: true,
		slidesToShow: 1,
    slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000,
		variableWidth: true,
		responsive: [
			{
			breakpoint: 767,
			settings: {
        centerMode: true,
				slidesToShow: 1,
        slidesToScroll: 1,
				centerPadding: '5.5rem',
				variableWidth: false,
				}
			}
		]
	});
});

//メンバー詳細
$(document).ready(function(){
$('.m-memberDetail__slide').slick({
		dots: true, 
		arrow:false,
		slidesToShow: 1,
		autoplay: true,
		fade:true,
		speed:1500,
		autoplaySpeed: 4000,
		responsive: [
			{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				}
			}
		]
	});
});

//キャリスピSTEP
$(document).ready(function(){
$('.careerspeed-step__slide').slick({
		arrows: true,
		variableWidth: true,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 4000,
		responsive: [
			{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				centerPadding: '10rem',
				}
			}
		]
	});
});


$('.careerspeed-step__slide').on('beforeChange', function(event, slick, currentSlide, nextSlide){
  console.log(nextSlide);
  $('.careerspeed-step__list li').removeClass('current').eq(nextSlide).addClass('current')
});
     
$('.careerspeed-step__list li').on('click',function(){
  var index = $('.careerspeed-step__list li').index(this);
  $('.careerspeed-step__slide').slick('slickGoTo',index);
});

$('.js-slider-prev').on('click',function(){
  $(this).closest('.js-slider-container').find('.js-slider').slick('slickPrev');
})

$('.js-slider-next').on('click',function(){
  $(this).closest('.js-slider-container').find('.js-slider').slick('slickNext');
})

//PC グローバルナビプルダウン
$(document).ready(function(){
	$(".nav-global>ul>li").hover(function () {
		$(this).find('>div').stop().slideDown(300);
	}, function(){
		$(this).find('>div').stop().slideUp(300);
	});
});

// SPメニュー 
$(document).ready(function () {
  $('.m-hamburger').on('click', function () {
    if ($('body').hasClass('menu-open')) {
      $('body').removeClass('menu-open');
      $('.l-header__menus').slideUp();
    } else {
      $('body').addClass('menu-open');
      $('.l-header__menus').slideDown();
    }
  });
});

$(document).ready(function () {
  $('.m-hamburger02').on('click', function () {
    if ($('body').hasClass('menu-open')) {
      $('body').removeClass('menu-open');
      $('.l-header02__menus').slideUp();
    } else {
      $('body').addClass('menu-open');
      $('.l-header02__menus').slideDown();
    }
  });
});

// スムーズスクロール
 $(function() {
   $('a[href*="#"]:not([href="#"]):not(".js-modal-open")').click(function() {
     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
       var target = $(this.hash);
       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
       if (target.length) {
        if($('.l-header02').length){
          var top = target.offset().top - $('.l-header02').outerHeight();
        }else{
          var top = target.offset().top - $('.l-header').outerHeight();
        }

        console.log(top)
         $('html, body').animate({
           scrollTop: top
         }, 300);
         return false;
       }
     }
   });
 });


$('.js-modal-open').on('click',function(ev){
  ev.preventDefault()
  ev.stopPropagation()
  const selector = $(this).attr('href')
  $(selector).fadeIn()
})

$('.js-modal-closeSelf').on('click',function(ev){
  ev.preventDefault()
  ev.stopPropagation()
  $(this).closest('.js-modal').fadeOut()
})

  /*

  アコーディオン

  */

  $('.js-accordion').each(function () {
    initAccordion(this)
  });

  $('.js-accordions').each(function () {
    $(this).find('>*').each(function () {
      initAccordion(this)
    });
  });


  function initAccordion(target){
    var $wpr = $(target);
    if ($wpr.is('[pc-default-open]') && isPC()) {
        $wpr.find('>*').last().show();
        $wpr.addClass('-open');
    } else {
      $wpr.find('>*').last().hide();

    }

    $wpr.find('>*').first().on('click', function () {
        if ($wpr.hasClass('-open')) {
            $(this).next().slideUp();
            $wpr.removeClass('-open');
        } else {
            $(this).next().slideDown();
            $wpr.addClass('-open');
        }
    });
  }

    /*

  タブ切り替え

  */

  (function () {
    function toggleTab($tab, index) {
        $tab.find('.js-tab__nav li').removeClass('current').eq(index).addClass('current');
        $tab.find('.js-tab__pages > *').removeClass('current').eq(index).addClass('current');
    }
    $(function () {
        $('.js-tab').each(function () {
          console.log('tab')
            var $tab = $(this);
            $(this).find('.js-tab__nav li').on('click', function () {
              console.log('tab click')
                var index = $tab.find('.js-tab__nav li').index(this);
                toggleTab($tab, index);
            });
            // $(this).find('.js-tab__nav select').on('change', function () {
            //     var index = $(this)[0].selectedIndex;
            //     toggleTab($tab, index);
            // });
            $(this).find('.js-tab__nav li').first().click();
        });
    });
  })();

  jQuery(document).ready(function($) {
    $(window).scroll(function () {
      var pos = $('.career-voice-mv').offset();  /* mvを過ぎたmainタグの高さを取得して変数[pos]に格納 */
      var offsetTop = pos.top + 48;              /* 取得した位置に48pxを追加 */
      
      if ($(this).scrollTop() > offsetTop) {     /* 変数[offsetTop]よりスクロールされていたら */
        $('.l-header-career-voice').fadeIn();    /* ヘッダーをふわっと表示 */
      } else {
        $('.l-header-career-voice').fadeOut();   /* ヘッダーをふわっと非表示 */
      }
    });
  });
  


  // function loadIframe() {
  //   var vidDefer = document.getElementsByTagName('iframe');
  //   for (var i=0; i<vidDefer.length; i++) {
  //   if(vidDefer[i].getAttribute('data-src')) {
  //   vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
  //   } } }
  //   window.onload = loadIframe;

  //お客さまの声
// $(document).ready(function(){
//   $('.agent-mv__slider').slick({
//     arrows: false,
//       autoplay: true,
//       autoplaySpeed: 4000,
//       initialSlide: 0,
//       lazyLoad: 'progressive'
      
//     });
//   });
new Splide( '.splide',{
  type       : 'loop',
  autoplay: true,
  interval: 5000,
  speed: 1000,
  pauseOnHover: false,
  pauseOnFocus: false,
  drag: false,
  loop: true,
  perPage: 1,
  perMove: 1,
  
} ).mount();