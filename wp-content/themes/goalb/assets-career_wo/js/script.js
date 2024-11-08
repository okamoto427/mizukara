jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  const swiper = new Swiper(".swiper", {
    loop: true,
    autoplay: {
      delay: 3000,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    slidesPerView: 1.2,
    centeredSlides: true,
    spaceBetween: 20,
    allowTouchMove:true
  });

  $(function () {
    // タイトルをクリックすると
    $(".accordion__accordion-title").on("click", function () {
      // クリックした次の要素(コンテンツ)を開閉
      $(this).next().slideToggle(300);
      // タイトルにopenクラスを付け外しして矢印の向きを変更
      $(this).toggleClass("open", 300);
    });
  });
});
