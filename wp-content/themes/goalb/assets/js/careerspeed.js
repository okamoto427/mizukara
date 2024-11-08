var didScroll;
var lastScrollTop = 0;
$(window).on('scroll', function () {
  didScroll = true
})

setInterval(function() {
  if (didScroll) {
      onScroll();
      didScroll = false;
  }
}, 250);

function onScroll() {
  const scrollTop = window.scrollY
  const mainTop = $('.careerspeed-main__image').outerHeight()
  if (scrollTop >= mainTop) {
    $('.l-header02').removeClass('-white')
  } else {
    $('.l-header02').addClass('-white')
  }
  lastScrollTop = scrollTop;
}
