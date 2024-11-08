(function() {
  gsap.registerPlugin(CSSRulePlugin);

  function pcsp() {
    return window.innerWidth >= 768 ? true : false;
  }

  let js_loading_svg_width = window.innerWidth >= 768 ? '16rem' : '11rem';

  var tl = gsap.timeline();
  tl.to(".js-loading-svg", 2, {
    width: js_loading_svg_width,
    scale: '1',
    delay: 0.5,
    ease: "power3.out",
  });
  tl.to(".js-loading-svg .frame", 1.5, {
    opacity: 0,
    ease: "power3.out",
  }, '-=1.5');
  tl.to(".js-loading-svg .text", 0.5, {
    opacity: 1,
    ease: "power3.out",
  }, '-=0.5');
  tl.to(".js-header", 1, {
    opacity: 1,
    ease: "power3.out",
  });
  
  gsap.to(".js-mv", 
  {
    opacity: 0,
    scale: 1.2,
    ease: "power1.out",
    scrollTrigger: {
      trigger: ".js-mv",
      start: () => `0px`,
      end: () => `600px`,
      scrub: 1,
    }
  })

  // 固定表示（横スクロール）
  if(!pcsp()) {
    const notFreeWrap = '.js-message-trigger';
    const notFreeContent = '.js-message';
  
    const contentWidth = document.querySelector(notFreeContent).scrollWidth; // 横スクロールに必要な全体の幅を取得
  
    const delayScroll = 200; // 固定後300px分スクロールしたら横スクロールを開始
  
    gsap.to(notFreeContent, {
      scrollTrigger: {
        trigger: notFreeWrap,
        start: "top top", // 固定を開始するタイミング
        end: () => `+=${contentWidth + delayScroll}`, // スクロールの終了位置を設定
        scrub: true,
        pin: notFreeWrap, // 固定
        onUpdate: (self) => {
          const progress = self.progress;
  
          // 横スクロールの制御
          if (progress >= delayScroll / self.end) {
            gsap.to(notFreeContent, {
              x: (contentWidth - window.innerWidth) * (progress - delayScroll / self.end) / (1 - delayScroll / self.end),
              overwrite: 'auto'
            });
          }
        },
      }
    })
  }

  let scrollTriggerInstance;

  let args = {
    ease: "power1.out",
    scrollTrigger: {
      trigger: ".js-bg-white",
      start: 'top top',
      end: 'bottom top',
      onEnter: () => {
        $('html').css({'background': '#ffffff'})
      },
      onLeaveBack: () => {
        $('html').css({'background': '#111111'})
      },
      onUpdate: (self) => {
        $('html').css({'background': '#ffffff'})
      },
    }
  };

  scrollTriggerInstance = gsap.to("html", args)

  gsap.to("html", 
  {
    background: '#111111',
    ease: "power1.out",
    scrollTrigger: {
      trigger: ".js-bg-black",
      start: 'center center',
      end: 'center center',
      scrub: 1,
      onEnter: () => {
        if(scrollTriggerInstance.scrollTrigger) {
          scrollTriggerInstance.scrollTrigger.kill();
        }
        gsap.to("html", args)
        $('.js-messageOverlay').css({'opacity': '0'});
      },
      onLeaveBack: () => {
        setTimeout(() => {
          $('.js-messageOverlay').animate({'opacity': '1'}, 300);
        }, 1000);
      },
    }
  })
  

  var tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".js-message-trigger",       // トリガー要素
      start: "top center",       // 開始位置
      toggleActions: "play none none none", // スクロール位置に応じて再生のみを行う
    }
  })

  // tl.to(".js-message div", 1, {
  //   color: "#000",
  // }, "+=0.3")

  async function jsView() {
    // .js-view-border 要素に対して処理を実行
    await $('.js-view-border').each(function() {
      // 4つの hr 要素を生成して追加
      for (let i = 0; i < 4; i++) {
        $(this).append('<hr>');
      }
    });

    await $(".js-view-opacity, .js-view-opacity-top").each(function() {
      const $element = $(this);
  
      // 元の内容を取得
      const originalContent = $element.html();
  
      // 新しい内容を <span> で囲んで生成
      const spanContent = `<div class="duplicate" style="width: 100%;">${originalContent}</div><div class="duplicate" style="width: 100%;">${originalContent}</div>`;
  
      // .js-view-opacity の要素に新しい内容を設定
      $element.html(spanContent);
    });

    $('.js-messageModal').click(function() {
      if($(this).hasClass('is-active')) {
        $(this).removeClass('is-active');
      } else {
        $('.js-messageModal').removeClass('is-active');
        $(this).toggleClass('is-active');
      }
    })

    $('.js-view').each(function(index, el) {
      gsap.to(el, 
      {
        scrollTrigger: {
          trigger: el,
          start: 'top+=150px bottom',
          onEnter: (self) => {
            self.trigger.classList.add('is-active');
            if(self.trigger.classList.contains('js-view-opacity')) {
              gsap.to(self.trigger.querySelectorAll('.duplicate'), 1.5, {
                clipPath: "inset(0% 0% 0% 0%)",
                duration: 1.6,
                stagger: 0.3,
                ease:"cubic.inOut",
                onComplete: function(self) {
                  $(this.targets()).css({'clipPath': 'none'});
                }
              });
            } else if(self.trigger.classList.contains('js-view-opacity-top')) {
              gsap.to(self.trigger.querySelectorAll('.duplicate'), 1.5, {
                clipPath: "inset(0% 0% 0% 0%)",
                duration: 1.6,
                stagger: 0.3,
                ease:"cubic.inOut",
                onComplete: function(self) {
                  $(this.targets()).css({'clipPath': 'none'});
                }
              });
            }
          },
        }
      })
    })
  }

  jsView();
}())