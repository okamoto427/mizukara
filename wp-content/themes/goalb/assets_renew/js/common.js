(function() {
  deSVG('.svg', true);

  $('.js-drawer').click(function() {
    $this = $(this);
    $this.toggleClass('is-active');
    $this.css({'pointer-events': 'none'});
    if(!$('html').hasClass('is-drawer')) {
      gsap.to($('.l-header-drawer'), 0.8, {
        clipPath: "inset(0% 0% 0% 0%)",
        stagger: 0.3,
        ease:"cubic.inOut",
        onComplete: function() {
          $this.css({'pointer-events': 'auto'});
        }
      });
      $('html').toggleClass('is-drawer');
    } else {
      gsap.to('.l-header-drawer1', 0.8, {
        clipPath: "inset(0% 0% 0% 100%)",
        ease:"cubic.inOut"
      });
      gsap.to('.l-header-drawer0', 0.8, {
        clipPath: "inset(0% 0% 0% 100%)",
        ease:"cubic.inOut",
        delay: 0.3,
        onComplete: function() {
          $this.css({'pointer-events': 'auto'});
        }
      });
      setTimeout(() => {
        $('html').toggleClass('is-drawer');
      }, 1100);
    }
  })

  $('.js-megaTrigger').hover(
    function() {
      $('html').addClass('is-megamenu')
    },
    function() {
      $('html').removeClass('is-megamenu')
    }
  )
}());