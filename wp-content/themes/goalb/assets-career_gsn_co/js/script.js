
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

  $('.js-hamburger').on('click', function () {
		if ($('.js-hamburger').hasClass('open')) {
			$('.js-drawer-menu').fadeOut();
			$('.js-overlay').fadeOut();
			$(this).removeClass('open');
      $('.js-header').removeClass('open');
      
		} else {
			$('.js-drawer-menu').fadeIn();
			$('.js-overlay').fadeIn();
			$(this).addClass('open');
      $('.js-header').addClass('open');
     
		}
	});

	$('.js-overlay').on('click', function () {
		$('.js-drawer-menu').fadeOut();
		$('.js-overlay').fadeOut();
		$('.js-hamburger').removeClass('open');
	});
  
  $(function () {
    // スクロールを開始したら
    $(window).on("scroll", function () {
      // ファーストビューの高さを取得
      mvHeight = $(".js-mv").height();
      if ($(window).scrollTop() > mvHeight) {
        // スクロールの位置がファーストビューより下の場合にclassを付与
        $(".js-header,.flooting-button").addClass("fixed");
      } else {
        // スクロールの位置がファーストビューより上の場合にclassを外す
        $(".js-header,.flooting-button").removeClass("fixed");
      }
    });
  });
  
  $(function () {
    $(".question__accordion-title").on("click", function() {
      $(this).next().slideToggle(400);
      $(this).toggleClass("open",200);
    });
  });

  const mySwiper = new Swiper('.voice__slider', {
    // オプション設定
    loop: true, // ループするかどうか
    pagination: {
      el: '.swiper-pagination',
      type: "bullets",
      clickable: true, // ページネーションをクリック可能にするかどうか
    },
    autoplay: {     //追記
      delay:3000,   //追記
  }, 
    spaceBetween:-20,
    slidesPerView: 1.3,
    centeredSlides: true,
    breakpoints: {
      601: {
        slidesPerView:2.3,
      },
      961: {
        slidesPerView:2.9,
      }
    }

  });

  const mySwiper02 = new Swiper('.method__slider', {
    // オプション設定
    loop: true, // ループするかどうか
    pagination: {
      el: '.swiper-pagination',
      type: "bullets",
      clickable: true, // ページネーションをクリック可能にするかどうか
    },
    autoplay: {     //追記
      delay:1000,   //追記
  }, 
    spaceBetween:16,
    slidesPerView: 1.3,
    centeredSlides: true,
    breakpoints: {
      601: {
        slidesPerView:3,
      }
    }

  });
  const mySwiper03 = new Swiper('.swiper09', {
    // オプション設定
    loop: true, // ループするかどうか
    pagination: {
      el: '.swiper-pagination',
      type: "bullets",
      clickable: true, // ページネーションをクリック可能にするかどうか
    },
    autoplay: {     //追記
      delay:1000,   //追記
  }, 
    spaceBetween:16,
    speed: 2000,
    slidesPerView: 1.15,
    centeredSlides: true,
    breakpoints: {
      601: {
        slidesPerView:3,
      }
    },
  });
});
