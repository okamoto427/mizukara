<?php
/*
 Template Name: Reboost LP_LINE配信用_コーチングLINE
*/
?>
<?php get_header('reboost'); ?>
<meta name="robots" content="noindex" />
<?php
    $cf_fv_01 = SCF::get('cf_fv_01');
    $cf_fv_02 = SCF::get('cf_fv_02');
    $cf_fv_03 = SCF::get('cf_fv_03');
    $cf_fv_04 = SCF::get('cf_fv_04');
		$cf_fv_04_img = wp_get_attachment_image($cf_fv_04 , 'full');

		$cf_dates = SCF::get('cf_dates');
		$cf_locations = SCF::get('cf_locations');
		$cf_locations_note = SCF::get('cf_locations_note');

		$cf_cta_01 = SCF::get('cf_cta_01');
		$cf_cta_02 = SCF::get('cf_cta_02');
		$cf_cta_03 = SCF::get('cf_cta_03');
		$cf_cta_04 = SCF::get('cf_cta_04');
		$cf_cta_05 = SCF::get('cf_cta_05');
		$cf_cta_06 = SCF::get('cf_cta_06');

    
    ?>
<header id="header" class="siteHeader">
  <p class="siteHeader__logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/logo.svg" alt="ミズカラ" width="118" height="25">
  </p>
  <div class="keyVisual">
    <div class="keyVisual__inner">
      <div class="keyVisual__subHead">
        <p class="keyVisual__participation"><span><?php echo $cf_fv_01; ?></span>ヶ月で<span><?php echo $cf_fv_02; ?></span>名以上が参加</p>
        <p class="keyVisual__badge">
          <?php if($cf_fv_04_img): ?>
          <?php echo $cf_fv_04_img; ?>
          <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/kv_badge.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/kv_badge.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/kv_badge@2x.png 2x" alt="顧客満足度" width="121" height="121" decoding="async">
          <?php endif; ?>
        </p>
        <p class="keyVisual__note">5段階評価中<br>自社アンケート調べ<span class="u-br_pc">。</span><br class="u-br_sp">対象者<?php echo $cf_fv_03; ?>名</p>
      </div>
      <h1 class="keyVisual__headLine">セルフコーチングプログラム<br>本来の自分を取り戻す2日間<br>Reboost<span>（リブースト）</span></h1>
      <a href="#registration" data-btnIcon="&#xf105;" class="keyVisual__btn">席が埋まる前に申し込む</a>
    </div>
    <div class="keyVisual__mobile"></div>
  </div>
</header>

<section class="section01">
  <div class="wrap">
    <div class="box1stVideo">
      <div class="boxYoutube">
        <iframe class="lazyload" type="text/html" data-src="https://player.vimeo.com/video/846826441?title&#x3D;0&amp;autoplay&#x3D;1&amp;muted&#x3D;1" allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
        </iframe>
      </div>
    </div>
  </div>
</section>

<section class="section is-cardslide">
  <div class="wrap">
    <h2 class="headingSection">自分の心と向き合った<br>受講者様の声</h2>
    <div class="swiper-container js-cardSlide">
      <div class="swiper-wrapper">
        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://player.vimeo.com/video/828198566?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0" allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>心がすごい<br>軽くなりました</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://player.vimeo.com/video/828198751?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0" allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>自分の心の根っこに<br>触れることができました</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://player.vimeo.com/video/828198481?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0" allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>自分の進む道が分かった感じがしてこれから楽しみ</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://player.vimeo.com/video/828198526?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0" allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>自分の蓋をしていたものを始めて受け入れて安心感が得られた</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://player.vimeo.com/video/828198595?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0" allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>今まで気づかなった自分に気づけました</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://player.vimeo.com/video/828198456?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0" allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>ありのままで自分らしく生きていけます</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://player.vimeo.com/video/828198434?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0" allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>自分の知らないに自分に気づけて驚きました</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://player.vimeo.com/video/828198347?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0" allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>「つもり」が剥がれて本当に愛を持って生きられるように</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://player.vimeo.com/video/828198647?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0" allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>自分の中で隠していた感情に向き合い切ることができました</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://player.vimeo.com/video/828198391?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0" allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>心のつっかえが取れて素の自分を好きになれました</p>
          </div>
        </div>
        <!-- Slide Item -->
      </div>
    </div>
    <div class="swiper-button-unit">
      <div class="swiper-button-prev"><i class="las la-chevron-circle-left"></i></div>
      <div class="swiper-button-next"><i class="las la-chevron-circle-right"></i></div>
    </div>
    <div class="u-relative">
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>



<section class="section is-cardslide">
  <div class="wrap">
    <h2 class="headingSection">この講座を受けた<br>ミズカラメンバーの声</h2>
    <div class="swiper-container js-cardSlide2">
      <div class="swiper-wrapper">
        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://www.youtube.com/embed/9PsIZKV2Ia4?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1" allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】グッさん" frameborder="0">
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>ありのままの自分でもっと軽やかに生きれるようになります</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://www.youtube.com/embed/e3ygazActg4?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1" allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】けいすけさん" frameborder="0">
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>"生き辛さ"から<br class="u-br_pc">解放されます</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://www.youtube.com/embed/VyHdoEU19dE?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1" allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】こうへいさん" frameborder="0">
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>弱い自分を受け入れて前に進めます</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://www.youtube.com/embed/UPQsnGQqnzY?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1" allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】たかやさん" frameborder="0">
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>コーチングの質がめちゃくちゃあがります</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://www.youtube.com/embed/gPacxRTb2Fk?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1" allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】島田さん" frameborder="0">
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>自分の心の声に気づいて自分に正直に生きれます</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://www.youtube.com/embed/tPru2b_mNk0?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1" allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】大野さん" frameborder="0">
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>自分を好きになれて自信を持てるようになります</p>
          </div>
        </div>
        <!-- Slide Item -->

        <!-- Slide Item -->
        <div class="cardReviews swiper-slide">
          <div class="boxYoutube">
            <iframe class="lazyload" type="text/html" data-src="https://www.youtube.com/embed/018Dl7IYbfU?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1" allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】健太朗さん" frameborder="0">
            </iframe>
          </div>
          <div class="cardReviews__ttl">
            <p>ありのままの自分を受け入れることができます</p>
          </div>
        </div>
        <!-- Slide Item -->
      </div>
    </div>
    <div class="swiper-button-unit">
      <div class="swiper-button-prev2"><i class="las la-chevron-circle-left"></i></div>
      <div class="swiper-button-next2"><i class="las la-chevron-circle-right"></i></div>
    </div>
    <div class="u-relative">
      <div class="swiper-pagination2"></div>
    </div>
  </div>
</section>

<section class="section is-gray has-arrow">
  <div class="wrap">
    <h2 class="headingSection">これはあなたを変える<br>プログラムではありません</h2>
  </div>
  <div class="wrap--narrowSm textMd">
    <p class="p">思い込みや、親の期待、周りの常識、他人の目、<br class="u-br_sp">自信のなさ…</p>
    <p class="p">このプログラムは、これらの制限からあなたを解放して、<br>あなたに<span class="u-bold">「本来の自分で生きる力」</span>を取り戻します。</p>
    <p>もしあなたが<span class="u-bold">2日間で本来の自分を取り戻す</span>ことに興味があれば、<br class="u-br_pc">このまま続きをお読みください。</p>
  </div>
  <span class="iconArrow">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_arrowdown_gray.svg" width="78" height="36">
  </span>
</section>

<section class="section has-arrow">
  <div class="wrap">
    <h2 class="headingSection">ありのままの<br>自分を愛するには？</h2>
    <div class="boxWideSplit">
      <div class="boxWideSplit__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_01.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_01@2x.jpg 2x" alt="ありのままの自分を愛するには？" width="681" height="398" loading="lazy" decoding="async">
      </div>
      <div class="boxWideSplit__body">
        <p class="p"><span class="u-bold">「ありのまま」「自然体」「自分を愛する」「軽やかに生きる」</span>とても惹かれる言葉ですよね。</p>
        <p class="p">「もっと自分を認めてあげたい。そうすれば今よりもっと軽やかに、ありのままの笑顔で生きることができるのに…!」</p>
        <p class="p"><span class="u-bold">「でも、どうすればそんな日々を手にできるのだろう？」</span></p>
        <p>そう感じることもあるのではないでしょうか。1人で自分と向き合っていても、なかなかそんな風にはなれないですよね…。</p>
      </div>
    </div>
  </div>
  <span class="iconArrow">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_arrowdown_white.svg" width="78" height="36">
  </span>
</section>

<section class="section is-gray has-arrow">
  <div class="wrap">
    <h2 class="headingSection">私たちが何を信じているか？は<br>幼少期の頃に作られてしまう</h2>
    <div class="boxWideSplit--rev">
      <div class="boxWideSplit__img--rev">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_02.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_02@2x.jpg 2x" alt="ありのままの自分を愛するには？" width="681" height="512" loading="lazy" decoding="async">
      </div>
      <div class="boxWideSplit__body--rev">
        <p class="p">その理由は<span class="u-bold">潜在意識にあります。</span></p>
        <p class="p">潜在意識のほとんどは幼少期、0歳~16歳までの時期に作られます。<br>そこで私たちが信じているもの（信念）と呼ばれるものが作られます。<br>信念とは私たちが「何を信じているのか？」ということです。</p>
        <p class="p">例えばもし</p>
        <p class="p"><span class="u-bold">「私は愛されない」「私は価値がない人間だ」「私にはやっぱりできない」</span></p>
        <p class="p">そんな信念があったとしたらどうでしょう？</p>
        <p class="p"><span class="u-bold">きっと生きづらいはずです。苦しくなってしまうことがあるはず。</span></p>
        <p>でも、どうしたら良いか分からないですし、この潜在意識をどうやって書き換えたら良いのか、私たちは学校でも、社会になってからも教わる機会はほとんどありません。</p>
      </div>
    </div>
  </div>
  <span class="iconArrow">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_arrowdown_gray.svg" width="78" height="36">
  </span>
</section>

<section class="section">
  <div class="wrap">
    <h2 class="headingSection">心の専門家だからこそ<br>本来の自分を<br class="u-br_sp">取り戻すサポートができます</h2>
    <div class="boxWideSplit">
      <div class="boxWideSplit__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_03.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_03@2x.jpg 2x" alt="心の専門家だからこそ本来の自分を取り戻すサポートができます" width="681" height="444" loading="lazy" decoding="async">
      </div>
      <div class="boxWideSplit__body">
        <p class="p"><span class="u-bold">私たち（ミズカラメンバー）はコーチ</span>という仕事をしています。</p>
        <p class="p">言い換えたら<span class="u-bold">心を扱うプロです。</span></p>
        <p class="p">これまで<span class="u-bold">何万人もの方と対話して、心の部分に変化を起こすことで、人生に本質的変化を起こすお手伝いをしてきました。</span></p>
        <p class="p">そして<span class="u-bold">心（在り方）を整えて本来の自分を取り戻すことが、日本人を強くする（自分の理想の未来を実現する力）に繋がる</span>ことを確信しています。</p>
        <p class="p">そして今回、本来の自分を取り戻してありのままの自分を愛する、機会をお届けしたいと思いました。</p>
        <p class="p">あなたは<span class="u-bold">「本来の自分を取り戻してありのままの自分を愛するプログラム」</span>にご興味はありますか？</p>
        <p>もしあなたの答えが<span class="u-bold">「Yes」なら、こちらはあなたのためにあるプログラム</span>です。</p>
      </div>
    </div>
  </div>
</section>

<section class="section is-ptsm">
  <div class="wrap">
    <p class="headingPlate"><span>自分に向き合い<br class="u-br_sp">本来の自分を取り戻す２日間</span></p>
    <h2 class="headingSection--lg">2DAYSセルフコーチング<br>プログラム</h2>

    <div class="u-center--pc u-spacer6">
      <p class="p">本セミナーに参加することで、あなたは<span class="u-bold">自己肯定感を高めることができたり、本来の自分を取り戻すことができる</span>でしょう。</p>
      <p class="p">その効果の一例をご紹介すると、、</p>
      <p>例えば、、</p>
    </div>

    <div class="cardPoint">
      <div class="cardPoint__conte">
        <p class="cardPoint__num">
          <span class="txt">POINT</span><span class="num">01</span>
        </p>
        <h3 class="cardPoint__ttl">ありのままの自分を愛することができるようになります。</h3>
        <p class="cardPoint__txt">心の底から自分を愛することができます。また自分やクライアント、周りの人たちを愛することができるようになるので、より高いレベルで価値を提供することができます。温かい、人間味のある、人に寄り添えるコーチになることができます。</p>
      </div>
      <div class="cardPoint__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_01.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_01@2x.jpg 2x" width="408" height="288" loading="lazy" decoding="async">
      </div>
    </div>

    <div class="cardPoint">
      <div class="cardPoint__conte">
        <p class="cardPoint__num">
          <span class="txt">POINT</span><span class="num">02</span>
        </p>
        <h3 class="cardPoint__ttl">セルフコーチングが<br class="u-br_sp">できるようになります。</h3>
        <p class="cardPoint__txt">自分の信念を理解して、その信念を書き換えていく過程で、セルフコーチングの仕方が身についていきます。</p>
      </div>
      <div class="cardPoint__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_02.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_02@2x.jpg 2x" width="408" height="288" loading="lazy" decoding="async">
      </div>
    </div>

    <div class="cardPoint">
      <div class="cardPoint__conte">
        <p class="cardPoint__num">
          <span class="txt">POINT</span><span class="num">03</span>
        </p>
        <h3 class="cardPoint__ttl">自己理解が深まることで、<br>コーチングのスキルが上達します。</h3>
        <p class="cardPoint__txt">相手が話している時、自分が次に話すことばかり考えていませんか？相手の話を心から聴けるようになるので、課題の「本質」を見つけ、<span class="u-underLine">相手をゴールへと導ける</span>優れたコーチに近づけるでしょう。</p>
      </div>
      <div class="cardPoint__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_03.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_03@2x.jpg 2x" width="408" height="288" loading="lazy" decoding="async">
      </div>
    </div>

    <div class="cardPoint">
      <div class="cardPoint__conte">
        <p class="cardPoint__num">
          <span class="txt">POINT</span><span class="num">04</span>
        </p>
        <h3 class="cardPoint__ttl">揺るぎない自信を<br class="u-br_sp">手に入れることができます。</h3>
        <p class="cardPoint__txt">成果を出せないと、他者と比較して自信を失ってしまっている方がいます。本物のコーチは、起きた出来事に対してネガティブに考える癖を修正し、常に自信が高い状態を、<span class="u-underLine">意図的</span>に作り出すことができます。</p>
      </div>
      <div class="cardPoint__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_04.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_04.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_04@2x.jpg 2x" width="408" height="288" loading="lazy" decoding="async">
      </div>
    </div>

    <div class="cardPoint">
      <div class="cardPoint__conte">
        <p class="cardPoint__num">
          <span class="txt">POINT</span><span class="num">05</span>
        </p>
        <h3 class="cardPoint__ttl">クライアントと強固な信頼関係を築けるようになります。</h3>
        <p class="cardPoint__txt">立場や環境、相手との関係に囚われないコミュニケーションができるようになり、他人を批判せずに、受け入れることができるようになります。相手にとってあなたが「なんでも相談できる人生のパートナー」となることで、強固な信頼関係を築けるようになるでしょう。</p>
      </div>
      <div class="cardPoint__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_05.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_05.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_05@2x.jpg 2x" width="408" height="288" loading="lazy" decoding="async">
      </div>
    </div>

    <div class="cardPoint">
      <div class="cardPoint__conte">
        <p class="cardPoint__num">
          <span class="txt">POINT</span><span class="num">06</span>
        </p>
        <h3 class="cardPoint__ttl">明確な人生のゴールに向かって前進できるようになります。</h3>
        <p class="cardPoint__txt">あなたは自分の人生に誇りを持って生きていますか？明確な夢、ビジョンを持って毎日を過ごせていますか？自分の情熱を取り戻し、今よりも<span class="u-underLine">迷いなく</span><span class="u-bold">GOALに向かって前進</span>できるようになります。</p>
      </div>
      <div class="cardPoint__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_06.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_06.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_06@2x.jpg 2x" width="408" height="288" loading="lazy" decoding="async">
      </div>
    </div>

    <div class="cardPoint">
      <div class="cardPoint__conte">
        <p class="cardPoint__num">
          <span class="txt">POINT</span><span class="num">07</span>
        </p>
        <h3 class="cardPoint__ttl">自分の制限を外して、より人に影響を<br class="u-br_pc">与えられるようになります。</h3>
        <p class="cardPoint__txt">人の目や意見を気にして、自分に制限をかけていませんか？<br class="u-br_pc">他人の意見に左右されず、人生の主導権を取り戻し、あなたと、クライアントの人生をより良い方に導けるようになるでしょう。</p>
      </div>
      <div class="cardPoint__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_07.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_07.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_07@2x.jpg 2x" width="408" height="288" loading="lazy" decoding="async">
      </div>
    </div>

    <p class="p--mtlg textSm">※受け取る価値には、1人1人のバックグラウンドなどが関係してくるので、個人差があります。</p>
  </div>
</section>

<section class="section is-gray">
  <div class="wrap">
    <h2 class="headingSection">当日の流れ</h2>
    <div class="rowFlow">
      <div class="boxFlow">
        <div class="boxFlow__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_01.svg" width="100" height="100" loading="lazy" decoding="async">
        </div>
        <p class="boxFlow__ttl">2DAYSセルフコーチングプログラム<br>DAY1</p>
        <p class="boxFlow__txt">内容は当日来てからのお楽しみです。<br>開催時間は10時~20時です。<br>※9:30開場です。</p>
      </div>
      <span class="boxFlow__arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_poly.svg" width="19" height="31" loading="lazy" decoding="async"></span>
      <div class="boxFlow">
        <div class="boxFlow__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_02.svg" width="100" height="100" loading="lazy" decoding="async">
        </div>
        <p class="boxFlow__ttl">2DAYSセルフコーチングプログラム<br>DAY2</p>
        <p class="boxFlow__txt">1日目を終えて2日目です。どんなフィナーレがあなたを待っているのでしょうか。<br class="u-br_sp">開催時間は9時~20時です。</p>
      </div>
      <span class="boxFlow__arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_poly.svg" width="19" height="31" loading="lazy" decoding="async"></span>
      <div class="boxFlow">
        <div class="boxFlow__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_03.svg" width="100" height="100" loading="lazy" decoding="async">
        </div>
        <p class="boxFlow__ttl">懇親会</p>
        <p class="boxFlow__txt">2日目終了後、会場近くで懇親会を開催致します。20時30分ごろスタート予定です。素晴らしいメンバーとの出会いが2日間であります。プログラムの一部だと思って是非ご参加ください。</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap--narrow">
    <h2 class="headingSection">開催日時と会場は...</h2>
    <table class="tableBasic p">
      <tr>
        <th>日時</th>
        <td>
          <p class="u-bold"><?php echo nl2br($cf_dates); ?></p>
        </td>
      </tr>
      <tr>
        <th>会場</th>
        <td>
          <p class="u-bold"><?php echo nl2br($cf_locations); ?></p>
          <?php if($cf_locations_note): ?>
          <p class="p--mtsm"><?php echo nl2br($cf_locations_note); ?></p>
          <?php endif; ?>
        </td>
      </tr>
    </table>
    <p class="p">※合宿ではございませんので、宿泊施設が必要な方はご予約ください。<br>
      ※会場については、お申し込みされた方にメールにてご連絡させていただきます。</p>
    <p>※1日目のプログラム終了後は、ご自身で内省を伴うワーク等がございますので、できるだけ1人になれる部屋、時間などをご用意ください。お酒を飲みに行くのもNGです。</p>
  </div>
</section>

<section class="sectionCoach">
  <h2 class="heasingBelt">2DAYSセルフコーチング<br>プログラムの講師は...</h2>
  <div class="sectionCoach__sp"></div>
  <div class="sectionCoach__inner">
    <div class="sectionCoach__dmy"></div>
    <div class="sectionCoach__conte">
      <p class="sectionCoach__pos">株式会社ミズカラ <br class="u-br_sp">CSO（最高戦略責任者）兼 プロコーチ</p>
      <div class="sectionCoach__prf">
        <p class="sectionCoach__name">村岡&nbsp;大樹</p>
        <p class="sectionCoach__eng">Daiki&nbsp;Muraoka</p>
      </div>
      <div class="sectionCoach__txt">
        <p class="p">株式会社ミズカラでCSOとして働きながら、代表を務める合同会社LIMITにて、パーソナルジムを10店舗/民泊1棟を経営。</p>
        <p class="p">20代にコーチングと出会い、その後心理学、脳科学、認知科学を学ぶ。プロコーチ歴8年。その間に行っていた自己を解放するセミナーは延べ500名以上が受講。</p>
        <p class="p">『決断を引き出すコーチング』を300名以上に行ってきた実績を有する。現在約60万円の個人向けコーチングは新規受付を停止中。</p>
        <p>現在は自身の会社を経営しながら、ミズカラのCSOを務める。自身の能力を抑えていた信念を取り払うことで、理想的な人生を実現している。</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2 class="headingSection">あなたの進化をサポートする<br>ミズカラメンバー陣</h2>
    <div class="boxMedia">
      <div class="boxMedia__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_member.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_member.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_member@2x.jpg 2x" width="544" height="303" loading="lazy" decoding="async">
      </div>
      <div class="boxMedia__conte">
        <p class="p">当日は、講師の村岡だけでなく、<br class="u-br_pc">ミズカラメンバー複数人で<span class="u-bold">あなたの人生を前進させます。</span><br>※メンバー全員での参加ではありません。</p>
        <p>コーチとして第一線で活躍している人たちの出会い、新しい仲間との出会い、多くの刺激を受ける機会にもなりますので、ぜひ楽しみにしていてください。</p>
      </div>
    </div>
  </div>
</section>

<section class="section is-seminar">
  <div class="wrap">
    <h2 class="headingSection">セミナーの効果を最大化するため<br class="u-br_pc">詳細は当日お伝えしています</h2>
  </div>
  <div class="wrap--narrow">
    <p class="p">きっとここまで読んでくれたあなたは、「当日は具体的に何をやるの？」と疑問に思っていると思います。<br><span class="u-bold">ですが、本セミナーは事前に内容の詳細をお伝えしていません。</span></p>
    <p class="p">なぜなら、内容をお伝えしてしまうと、当日までに事前に調べたり、準備してしまう方が出てきて、間違った情報を受け取ってしまうリスクがあるからです。</p>
    <p class="p"><span class="u-bold">本サービスは当日フラットな状態で来てもらうことで、正しい在り方(Being) を直接、確実に、あなたにインストールしていただきたいと思っています。</span></p>
    <p>最高の2日間を体験して欲しいので、当日の内容の詳細は参加者のみ体験することができます（サービスの内容には絶対的な自信を持っております）。</p>
  </div>
  <div class="is-seminarThumb"></div>
</section>

<section class="section">
  <div class="wrap">
    <div class="boxFee">
      <div class="boxFee__conte">
        <h2 class="boxFee__ttl">参加費は？</h2>
        <p class="p"><span class="u-bold">本来の自分を取り戻すことには、お金には替えられないプライスレスな価値があるでしょう。自分とは一生向き合うことになるのですから...</span></p>
        <p class="p">こちらの2DAYSセルフコーチングプログラム、1人でも多くの人に参加してほしい、その想いから</p>
        <p class="p"><span class="u-bold">価格は <span class="u-underLine">2日間で<?php echo $cf_cta_02; ?>円（税込）</span>でご案内します。</span>（今後、値上げの可能性はございます。）</p>
        <p><span class="u-bold">※分割決済も可能です</span><br>（弊社では対応しておりませんので、決済後にカード会社に連絡して、分割手続きを行ってください。手数料はカード会社に準じます。）</p>
      </div>
      <div class="boxFee__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_fee_01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_fee_01.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_fee_01@2x.jpg 2x" width="352" height="341" loading="lazy" decoding="async" class="img01">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_fee_02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_fee_02.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_fee_02@2x.jpg 2x" width="352" height="341" loading="lazy" decoding="async" class="img02">
      </div>
    </div>
  </div>
</section>

<section class="sectionBlack">
  <div class="wrap">
    <p class="textBalloon">各日程</p>
    <h2 class="sectionBlack__ttl">先着<span>100</span>名限定です</h2>
    <p class="p textMd u-left_sp">会場の都合により、今回の定員は先着100名限定とさせていただきます。<br>即日席が埋まってしまう可能性があるので、ぜひ今すぐ席を確保してください。</p>
    <p class="textMd u-bold u-left_sp">※申し込みは先着順です。</p>
  </div>
</section>

<section class="section is-guarantee">
  <div class="wrap">
    <h2 class="headingGrdLine">安心して受けて欲しいので<br>全額返金保証をおつけしました</h2>
    <div class="boxMedia is-rev">
      <div class="boxMedia__conte">
        <p class="p">本セミナーは当日の内容を事前に公開することができません。<br>ですので、<span class="u-bold">「自分に合っていなかったらどうしよう...」</span>と不安になることもあるかもしれません。</p>
        <p class="p">でも、安心してください。<br>あなたのリスクをなくすために、本セミナーでは、<br class="u-br_pc"><span class="u-bold">全額返金保証をおつけしました。</span></p>
        <p class="p"><span class="u-bold">もし内容にご満足できない場合は、2日間のセミナーを受講後、遠慮なくスタッフ、もしくは公式ラインに連絡をください。全額返金させていただきます。</span></p>
        <p class="p">（決済手数料3.6%はお客様にご負担お願いしております）</p>
        <p>※返金は1週間前までのご連絡で承っております。<br>※交通費や宿泊費の返金などは承っておりません。</p>
      </div>
      <div class="boxMedia__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_mbg_card.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_mbg_card.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_mbg_card@2x.png 2x" width="540" height="476" loading="lazy" decoding="async" class="u-imgSdw">
      </div>
    </div>
    <p class="txtGuarantee">あなたのリスクは最大限取り除きました。<br class="u-br_sp">ぜひ直感を信じてご参加ください。</p>
  </div>
</section>

<section class="sectionSeparate">
  <div class="sectionSeparate__inner">
    <div class="sectionSeparate__conte">
      <h2 class="sectionSeparate__ttl">
        <span class="tsm">本やオンライン教材ではない</span>
        <span class="tsm2">リアルだからこそ気づける</span>
        <span class="tlg">本当の自分</span>
      </h2>
      <div class="sectionSeparate__txt">
        <p class="p">本やオンライン教材で勉強しているだけでは、本当の自分の潜在意識に気づくことはできません。</p>
        <p>実際にリアルで会うからこそ、あなたの人生をより良い方向に進めるサポートができます。</p>
      </div>
    </div>
    <div class="sectionSeparate__img"></div>
  </div>
</section>

<section class="section is-gray">
  <div class="wrap--narrow">
    <h2 class="headingSection">心の鎧を脱いで<br>本来の自分に戻ろう</h2>
    <p class="p">日本・米国・中国・韓国の4カ国の高校生へのアンケートで、<span class="u-bold">「私は価値のある人間だと思うか」</span>という質問に「そうだ」「まあそうだ」と回答した日本の高校生の割合は44.9％で、4カ国で最も低い数値でした（韓国83.7％、米国83.8％、中国80.2％）。<br>
      <span class="textNote">※2018年「高校生の心と体の健康に関する意識調査報告書」より（国立青少年教育振興機構）</span>
    </p>
    <p class="p">半分以上の高校生が「自分は価値のない人間だ」と<br class="u-br_pc">思っているということです。</p>
    <p class="p">国際的な学力調査などを見る限り、日本の高校生は毎年ランキングの上位に入っていますから、世界的に見ても成績は優秀なはずです。</p>
    <p class="p u-bold">今の日本に必要なのはまずは自分自身を信じ、受け入れ、心（Be）から整えることかもしれません。</p>
    <p class="u-bold">一緒に本来の自分を取り戻して、人生にブレイクスルーを起こしましょう。</p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2 class="headingSection">参加者から頂いた声</h2>
    <div class="boxReviews">
      <div class="boxReviews__row">
        <div class="boxReviews__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_01.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_01.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_01@2x.png 2x" alt="参加者から頂いた声" width="368" height="170" loading="lazy" decoding="async">
        </div>
        <div class="boxReviews__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_02.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_02.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_02@2x.png 2x" alt="参加者から頂いた声" width="367" height="192" loading="lazy" decoding="async">
        </div>
        <div class="boxReviews__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_03.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_03.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_03@2x.png 2x" alt="参加者から頂いた声" width="364" height="192" loading="lazy" decoding="async">
        </div>
        <div class="boxReviews__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_04.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_04.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_04@2x.png 2x" alt="参加者から頂いた声" width="287" height="297" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="boxReviews__row">
        <div class="boxReviews__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_05.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_05.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_05@2x.png 2x" alt="参加者から頂いた声" width="365" height="189" loading="lazy" decoding="async">
        </div>
        <div class="boxReviews__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_06.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_06.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_06@2x.png 2x" alt="参加者から頂いた声" width="360" height="245" loading="lazy" decoding="async">
        </div>
        <div class="boxReviews__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_07.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_07.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_07@2x.png 2x" alt="参加者から頂いた声" width="358" height="365" loading="lazy" decoding="async">
        </div>
      </div>
      <div class="boxReviews__row is-spBtm">
        <div class="boxReviews__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_08.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_08.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_08@2x.png 2x" alt="参加者から頂いた声" width="418" height="696" loading="lazy" decoding="async">
        </div>
        <div class="boxReviews__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_09.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_09.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_09@2x.png 2x" alt="参加者から頂いた声" width="412" height="181" loading="lazy" decoding="async">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section is-gray">
  <div class="wrap">
    <h2 class="headingSection">2日間終了後の様子</h2>
    <div class="boxGallery">
      <div class="boxGallery__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_01.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_01@2x.jpg 2x" alt="2日間終了後の様子" width="367" height="232" loading="lazy" decoding="async">
      </div>
      <div class="boxGallery__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_02.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_02@2x.jpg 2x" alt="2日間終了後の様子" width="368" height="232" loading="lazy" decoding="async">
      </div>
      <div class="boxGallery__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_03.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_03@2x.jpg 2x" alt="2日間終了後の様子" width="368" height="232" loading="lazy" decoding="async">
      </div>
      <div class="boxGallery__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_04.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_04.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_04@2x.jpg 2x" alt="2日間終了後の様子" width="367" height="231" loading="lazy" decoding="async">
      </div>
      <div class="boxGallery__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_05.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_05.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_05@2x.jpg 2x" alt="2日間終了後の様子" width="367" height="231" loading="lazy" decoding="async">
      </div>
      <div class="boxGallery__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_06.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_06.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_06@2x.jpg 2x" alt="2日間終了後の様子" width="367" height="231" loading="lazy" decoding="async">
      </div>
    </div>

    <div class="boxCheck">
      <p class="boxCheck__ttl">ビビッときたらぜひご参加ください。</p>
      <ul class="boxCheck__list">
        <li><span>苦しさの解放</span></li>
        <li><span>生きづらさの解放</span></li>
        <li><span>少年の心を取り戻す</span></li>
        <li><span>自己否定から解放</span></li>
        <li><span>無邪気な心を取り戻す</span></li>
        <li><span>心から自分を愛す</span></li>
        <li><span>本物の自信をつける</span></li>
        <li><span>真の強さを得る</span></li>
      </ul>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2 class="headingSection">今後の流れ</h2>
    <div class="rowFlow">
      <div class="boxFlow--gray">
        <p class="boxFlow__step"><span class="step">STEP</span><span class="num">01</span></p>
        <div class="boxFlow__icon p">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_01.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_01.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_01@2x.png 2x" width="100" height="100" loading="lazy" decoding="async">
        </div>
        <p class="boxFlow__txt">ボタンからコーチングスクール公式LINEに移動してください。</p>
      </div>
      <span class="boxFlow__arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_poly.svg" width="19" height="31" loading="lazy" decoding="async"></span>
      <div class="boxFlow--gray">
        <p class="boxFlow__step"><span class="step">STEP</span><span class="num">02</span></p>
        <div class="boxFlow__icon p">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_02.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_02.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_02@2x.png 2x" width="100" height="100" loading="lazy" decoding="async">
        </div>
        <p class="boxFlow__txt">自動でアンケートが送られてくるので、アンケートの記入をお願いします。</p>
      </div>
      <span class="boxFlow__arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_poly.svg" width="19" height="31" loading="lazy" decoding="async"></span>
      <div class="boxFlow--gray">
        <p class="boxFlow__step"><span class="step">STEP</span><span class="num">03</span></p>
        <div class="boxFlow__icon p">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_03.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_03.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_03@2x.png 2x" width="100" height="100" loading="lazy" decoding="async">
        </div>
        <p class="boxFlow__txt">決済して、申し込みが完了となります。（後日、詳細をお送りします）</p>
      </div>
    </div>
  </div>
</section>

<section id="registration" class="section is-gray">
  <div class="wrap">
    <h2 class="headingSection--xlg">お申し込みはこちら</h2>
  </div>
  <div class="wrap--narrow">
    <div class="boxCta">
      <p class="boxCta__ttl"><?php echo nl2br($cf_cta_01); ?></p>
      <p class="boxCta__price"><?php echo $cf_cta_02; ?><span class="boxCta__yen">円<span class="boxCta__tax">（税込）</span></span></p>
      <table class="tableCta">
        <tr>
          <th>日程①</th>
          <td><?php echo $cf_cta_03; ?></td>
        </tr>
        <tr>
          <th>日程②</th>
          <td><?php echo $cf_cta_04; ?></td>
        </tr>
        <tr>
          <th>会場</th>
          <td><?php echo nl2br($cf_cta_05); ?></td>
        </tr>
      </table>
      <?php if($cf_cta_06): ?>
      <p class="textMd u-bold u-center p p--mtsm"><?php echo nl2br($cf_cta_06); ?></p>
      <?php endif; ?>
      <a href="https://liff.line.me/1657688022-nXNE1oDa/landing?follow=%40860gpcyg&lp=B0c9vN&liff_id=1657688022-nXNE1oDa" target="_blank" rel="noopener" data-btnIcon="&#xf105;" class="boxCta__btn">席が埋まる前に申し込む</a>
      <p class="boxCta__note">ボタンを押すと公式LINEに移動します<br>まずはアンケート記入をお願いします</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2 class="headingSection">株式会社ミズカラについて</h2>
    <div class="boxAbout">
      <div class="boxAbout__item is-01">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_about_01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_about_01.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_about_01@2x.jpg 2x" alt="株式会社ミズカラについて" width="435" height="232" loading="lazy" decoding="async">
      </div>
      <div class="boxAbout__item is-02">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_about_02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_about_02.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_about_02@2x.jpg 2x" alt="株式会社ミズカラについて" width="146" height="232" loading="lazy" decoding="async">
      </div>
      <div class="boxAbout__item is-03">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_about_03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_about_03.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_about_03@2x.jpg 2x" alt="株式会社ミズカラについて" width="157" height="233" loading="lazy" decoding="async">
        <p class="boxAbout__note">著書１万部突破<br><span>※2022年5月時点</span></p>
      </div>
      <div class="boxAbout__item is-04">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_about_04.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_about_04.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_about_04@2x.jpg 2x" alt="株式会社ミズカラについて" width="355" height="232" loading="lazy" decoding="async">
        <p class="boxAbout__note">Youtube登録者12万人以上<br><span>※2022年5月時点</span></p>
      </div>
    </div>
    <p class="p textMd">どんな風にも生きることができるこの世界。</p>
    <p class="p textMd">言い訳を並べて自分の可能性に蓋をしない。弊社ミズカラは、メンバーとクライアント様の生き様を通して、「全ての人に可能性がある」を体現し続けます。</p>
    <p class="p textMd">代表はYoutube登録者12万人以上。AKIOBLOGとしても活動する中川晃雄。自身の「世界44か国での旅」「63kgから83kgへの肉体改造」「月収10倍」などの挑戦を通して「全ての人に可能性がある」という事実を知りました。</p>
    <p class="p textMd">これらの体験から、「身体と心が変われば人生が変わる」この核心をもとに「フィットネス」と「コーチング」の事業を展開する株式会社ミズカラを2019年に創業。<br>「Body（身体）とBe（心）を改革しGOALを達成する」これがミズカラの由来です。</p>
    <p class="textMd">強くエネルギーに満ち溢れた身体をつくり、高いGOALを設定することで効果的に現実を作り続けることで「全ての人に可能性がある」を体現し、最高の人生を生きる人を増やします。</p>
  </div>
</section>

<section class="section is-gray">
  <div class="wrap">
    <h2 class="headingSection">よくある質問</h2>
    <dl class="listFaq">
      <dt class="listFaq__q">収録は可能でしょうか？</dt>
      <dd class="listFaq__a">
        <div class="listFaq__aInner">
          <p class="p u-bold">不可です。</p>
          <p>ミズカラも一切撮影を行いません。ご自身の辛い過去、人に話せなかった内容をお話になる場面もある方がいます。ご自身に最大限向き合うために、収録等は行うことができません。</p>
        </div>
      </dd>
    </dl>
    <dl class="listFaq">
      <dt class="listFaq__q">不参加の場合のキャンセル、返金は可能でしょうか？</dt>
      <dd class="listFaq__a">
        <div class="listFaq__aInner">
          <p>1週間前まで申し出で可能でございます。全額返金いたします。</p>
        </div>
      </dd>
    </dl>
    <dl class="listFaq">
      <dt class="listFaq__q">他の日程はありますか？</dt>
      <dd class="listFaq__a">
        <div class="listFaq__aInner">
          <p><span class="u-bold">現在未定です。</span>今後値上げする可能性もありますので、ぜひこの機会にご参加ください。</p>
        </div>
      </dd>
    </dl>
    <dl class="listFaq">
      <dt class="listFaq__q">セミナーの対象者でない方はいますか？</dt>
      <dd class="listFaq__a">
        <div class="listFaq__aInner">
          <p>現在治療中の精神疾患のある方の受講はご遠慮いただいております。</p>
        </div>
      </dd>
    </dl>
  </div>
</section>

<section class="sectionBlack">
  <div class="wrap">
    <h2 class="sectionBlack__ttl--sm">申し込みは先着順です<br>ぜひ直感を信じてください</h2>
    <p class="p textMd u-left_sp">サービスの性質上、内容は当日まで明かせませんが、<br>講師一同、内容には絶対の自信を持っています。</p>
    <p class="p textMd u-bold u-left_sp">安心の全額返金保証もおつけしています。</p>
    <p class="textMd u-left_sp">決断した瞬間から人生が変わっていきます。<br>ぜひ、<span class="u-bold">自分の直感を信じて、申し込んでください。</span>（申し込みは先着順です。）</p>
  </div>
</section>

<section class="section is-gray">
  <div class="wrap">
    <h2 class="headingSection--xlg">お申し込みはこちら</h2>
  </div>
  <div class="wrap--narrow">
    <div class="boxCta">
      <p class="boxCta__ttl"><?php echo nl2br($cf_cta_01); ?></p>
      <p class="boxCta__price"><?php echo $cf_cta_02; ?><span class="boxCta__yen">円<span class="boxCta__tax">（税込）</span></span></p>
      <table class="tableCta">
        <tr>
          <th>日程①</th>
          <td><?php echo $cf_cta_03; ?></td>
        </tr>
        <tr>
          <th>日程②</th>
          <td><?php echo $cf_cta_04; ?></td>
        </tr>
        <tr>
          <th>会場</th>
          <td><?php echo nl2br($cf_cta_05); ?></td>
        </tr>
      </table>
      <?php if($cf_cta_06): ?>
      <p class="textMd u-bold u-center p p--mtsm"><?php echo nl2br($cf_cta_06); ?></p>
      <?php endif; ?>
      <a href="https://liff.line.me/1657688022-nXNE1oDa/landing?follow=%40860gpcyg&lp=B0c9vN&liff_id=1657688022-nXNE1oDa" target="_blank" rel="noopener" data-btnIcon="&#xf105;" class="boxCta__btn">席が埋まる前に申し込む</a>
      <p class="boxCta__note">ボタンを押すと公式LINEに移動します<br>まずはアンケート記入をお願いします</p>
    </div>
  </div>
</section>


<?php get_footer('reboost'); ?>
