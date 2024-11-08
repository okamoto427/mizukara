<?php
/*
 Template Name: Reboost LP
*/
?>
<?php get_header('reboost'); ?>

<?php
    $cf_fv_band_01 = SCF::get('cf_fv_band_01');
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
    $cf_cta_04_2 = SCF::get('cf_cta_04_2');
    $cf_cta_04_3 = SCF::get('cf_cta_04_3');
    $cf_cta_04_4 = SCF::get('cf_cta_04_4');
		$cf_cta_05 = SCF::get('cf_cta_05');
		$cf_cta_06 = SCF::get('cf_cta_06');

    
    ?>
<header id="header" class="siteHeader">
    <p class="siteHeader__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/logo.svg" alt="MIZUKARA" width="118"
            height="25">
    </p>
    <div class="keyVisual">
        <div class="keyVisual__inner">
            <div class="keyVisual__subHead">
                <p class="keyVisual__participation"><?php echo $cf_fv_band_01; ?></p>
                <p class="keyVisual__badge">
                    <?php if($cf_fv_04_img): ?>
                    <?php echo $cf_fv_04_img; ?>
                    <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/kv_badge.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/kv_badge.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/kv_badge@2x.png 2x"
                        alt="顧客満足度" width="121" height="121" decoding="async">
                    <?php endif; ?>
                </p>
                <p class="keyVisual__note">5段階評価中<br>自社アンケート調べ<span class="u-br_pc">。</span><br
                        class="u-br_sp">対象者<?php echo $cf_fv_03; ?>名</p>
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
                <iframe class="lazyload" type="text/html"
                    data-src="https://player.vimeo.com/video/846826441?title&#x3D;0&amp;autoplay&#x3D;1&amp;muted&#x3D;1"
                    allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390" webkitAllowFullScreen
                    mozallowfullscreen allowFullScreen>
                </iframe>
            </div>
        </div>
    </div>
</section>
<section class="section is-cardslide">
    <div class="wrap">
        <h2 class="headingSection">この講座を受けた<br>MIZUKARAメンバーの声</h2>
        <div class="swiper-container js-cardSlide2">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <iframe class="lazyload" type="text/html"
                            data-src="https://www.youtube.com/embed/018Dl7IYbfU?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1"
                            allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】健太朗さん"
                            frameborder="0">
                        </iframe>
                    </div>
                    <div class="cardReviews__ttl">
                        <p>ありのままの自分を受け入れることができます</p>
                    </div>
                </div>
                <!-- Slide Item -->
                <!-- Slide Item -->
                <!-- <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <iframe class="lazyload" type="text/html"
                            data-src="https://www.youtube.com/embed/gPacxRTb2Fk?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1"
                            allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】島田さん" frameborder="0">
                        </iframe>
                    </div>
                    <div class="cardReviews__ttl">
                        <p>自分の心の声に気づいて自分に正直に生きれます</p>
                    </div>
                </div> -->
                <!-- Slide Item -->
                <!-- Slide Item -->
                <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <iframe class="lazyload" type="text/html"
                            data-src="https://www.youtube.com/embed/9PsIZKV2Ia4?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1"
                            allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】グッさん"
                            frameborder="0">
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
                        <iframe class="lazyload" type="text/html"
                            data-src="https://www.youtube.com/embed/e3ygazActg4?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1"
                            allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】けいすけさん"
                            frameborder="0">
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
                        <iframe class="lazyload" type="text/html"
                            data-src="https://www.youtube.com/embed/VyHdoEU19dE?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1"
                            allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】こうへいさん"
                            frameborder="0">
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
                        <iframe class="lazyload" type="text/html"
                            data-src="https://www.youtube.com/embed/UPQsnGQqnzY?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1"
                            allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】たかやさん"
                            frameborder="0">
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
                        <iframe class="lazyload" type="text/html"
                            data-src="https://www.youtube.com/embed/tPru2b_mNk0?showinfo&#x3D;0&amp;wmode&#x3D;transparent&amp;rel&#x3D;0&amp;autoplay&#x3D;0&amp;mute&#x3D;0&amp;controls&#x3D;1"
                            allow="autoplay" allowfullscreen data-at="video-youtube" title="【スクール】大野さん" frameborder="0">
                        </iframe>
                    </div>
                    <div class="cardReviews__ttl">
                        <p>自分を好きになれて自信を持てるようになります</p>
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
<section class="section is-cardslide">
    <div class="wrap">
        <h2 class="headingSection">自分の心と向き合った<br>受講者様の声</h2>
        <div class="swiper-container js-cardSlide">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <!-- <iframe class="lazyload" type="text/html"
                            data-src="https://player.vimeo.com/video/828198751?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0"
                            allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                        </iframe> -->
                        <iframe
                            src="https://player.vimeo.com/video/960801893?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                            title="vrew高田さん"></iframe>
                    </div>
                    <div class="cardReviews__ttl">
                        <p>ありのままの自分を出す許可を自分に出せるようになった</p>
                    </div>
                </div>
                <!-- Slide Item -->
                <!-- Slide Item -->
                <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <!-- <iframe class="lazyload" type="text/html"
                            data-src="https://player.vimeo.com/video/828198566?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0"
                            allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                        </iframe> -->
                        <iframe
                            src="https://player.vimeo.com/video/828198566?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                            title="IMG_2386"></iframe>
                    </div>
                    <div class="cardReviews__ttl">
                        <p>新しい自分に気づくことができた</p>
                    </div>
                </div>
                <!-- Slide Item -->
                <!-- Slide Item -->
                <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <!-- <iframe class="lazyload" type="text/html"
                            data-src="https://player.vimeo.com/video/828198566?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0"
                            allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                        </iframe> -->
                        <iframe
                            src="https://player.vimeo.com/video/828198751?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                            title="IMG_2390"></iframe>

                    </div>
                    <div class="cardReviews__ttl">
                        <p>自分の心の根っこに触れることができた</p>
                    </div>
                </div>
                <!-- Slide Item -->

                <!-- Slide Item -->
                <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <!-- <iframe class="lazyload" type="text/html"
                            data-src="https://player.vimeo.com/video/828198566?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0"
                            allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                        </iframe> -->
                        <iframe
                            src="https://player.vimeo.com/video/828198391?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                            title="IMG_2377"></iframe>

                    </div>
                    <div class="cardReviews__ttl">
                        <p>素の自分を好きになることができた</p>
                    </div>
                </div>
                <!-- Slide Item -->


                <!-- Slide Item -->
                <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <!-- <iframe class="lazyload" type="text/html"
                            data-src="https://player.vimeo.com/video/828198481?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0"
                            allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                        </iframe> -->
                        <iframe
                            src="https://player.vimeo.com/video/960801625?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                            title="早田光里_キャリア支援 (720p)_exported"></iframe>

                    </div>
                    <div class="cardReviews__ttl">
                        <p>本当の「自信」とは何なのかが分かった</p>
                    </div>
                </div>
                <!-- Slide Item -->

                <!-- Slide Item -->
                <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <!-- <iframe class="lazyload" type="text/html"
                            data-src="https://player.vimeo.com/video/828198526?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0"
                            allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                        </iframe> -->
                        <iframe
                            src="https://player.vimeo.com/video/960801829?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                            title="Vrew：鈴木大智さん"></iframe>

                    </div>
                    <div class="cardReviews__ttl">
                        <p>人を愛することができるようになった</p>
                    </div>
                </div>
                <!-- Slide Item -->

                <!-- Slide Item -->
                <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <!-- <iframe class="lazyload" type="text/html"
                            data-src="https://player.vimeo.com/video/828198595?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0"
                            allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                        </iframe> -->
                        <iframe
                            src="https://player.vimeo.com/video/960801680?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                            title="潮寿々子_26歳_営業職 (1080p)_exported"></iframe>
                    </div>
                    <div class="cardReviews__ttl">
                        <p>自分軸で生きていこうと思えた</p>
                    </div>
                </div>
                <!-- Slide Item -->

                <!-- Slide Item -->
                <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <!-- <iframe class="lazyload" type="text/html"
                            data-src="https://player.vimeo.com/video/828198456?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0"
                            allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                        </iframe> -->
                        <iframe
                            src="https://player.vimeo.com/video/960801556?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                            title="栗山真央_マーケティング (720p)_exported"></iframe>
                    </div>
                    <div class="cardReviews__ttl">
                        <p>ありのままで自分らしく生きていけます</p>
                    </div>
                </div>
                <!-- Slide Item -->

                <!-- Slide Item -->
                <!-- <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <iframe class="lazyload" type="text/html"
                            data-src="https://player.vimeo.com/video/828198434?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0"
                            allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                        </iframe>
                    </div>
                    <div class="cardReviews__ttl">
                        <p>自分の知らないに自分に気づけて驚きました</p>
                    </div>
                </div> -->
                <!-- Slide Item -->

                <!-- Slide Item -->
                <!-- <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <iframe class="lazyload" type="text/html"
                            data-src="https://player.vimeo.com/video/828198347?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0"
                            allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                        </iframe>
                    </div>
                    <div class="cardReviews__ttl">
                        <p>「つもり」が剥がれて本当に愛を持って生きられるように</p>
                    </div>
                </div> -->
                <!-- Slide Item -->

                <!-- Slide Item -->
                <!-- <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <iframe class="lazyload" type="text/html"
                            data-src="https://player.vimeo.com/video/828198647?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0"
                            allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                        </iframe>
                    </div>
                    <div class="cardReviews__ttl">
                        <p>自分の中で隠していた感情に向き合い切ることができました</p>
                    </div>
                </div> -->
                <!-- Slide Item -->

                <!-- Slide Item -->
                <!-- <div class="cardReviews swiper-slide">
                    <div class="boxYoutube">
                        <iframe class="lazyload" type="text/html"
                            data-src="https://player.vimeo.com/video/828198391?title&#x3D;0&amp;autoplay&#x3D;0&amp;muted&#x3D;0"
                            allow="autoplay" frameborder="0" data-at="video-vimeo" title="IMG_2390"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                        </iframe>
                    </div>
                    <div class="cardReviews__ttl">
                        <p>心のつっかえが取れて素の自分を好きになれました</p>
                    </div>
                </div> -->
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_arrowdown_gray.svg" width="78"
            height="36">
    </span>
</section>

<section class="section has-arrow">
    <div class="wrap">
        <h2 class="headingSection">ありのままの<br>自分を愛するには？</h2>
        <div class="boxWideSplit">
            <div class="boxWideSplit__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_01.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_01.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_01@2x.jpg 2x"
                    alt="ありのままの自分を愛するには？" width="681" height="398" loading="lazy" decoding="async">
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_arrowdown_white.svg" width="78"
            height="36">
    </span>
</section>

<section class="section is-gray has-arrow">
    <div class="wrap">
        <h2 class="headingSection">私たちが何を信じているか？は<br>幼少期の頃に作られてしまう</h2>
        <div class="boxWideSplit--rev">
            <div class="boxWideSplit__img--rev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_02.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_02.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_02@2x.jpg 2x"
                    alt="ありのままの自分を愛するには？" width="681" height="512" loading="lazy" decoding="async">
            </div>
            <div class="boxWideSplit__body--rev">
                <p class="p">その理由は<span class="u-bold">潜在意識にあります。</span></p>
                <p class="p">
                    潜在意識のほとんどは幼少期、0歳~16歳までの時期に作られます。<br>そこで私たちが信じているもの（信念）と呼ばれるものが作られます。<br>信念とは私たちが「何を信じているのか？」ということです。
                </p>
                <p class="p">例えばもし</p>
                <p class="p"><span class="u-bold">「私は愛されない」「私は価値がない人間だ」「私にはやっぱりできない」</span></p>
                <p class="p">そんな信念があったとしたらどうでしょう？</p>
                <p class="p"><span class="u-bold">きっと生きづらいはずです。苦しくなってしまうことがあるはず。</span></p>
                <p>でも、どうしたら良いか分からないですし、この潜在意識をどうやって書き換えたら良いのか、私たちは学校でも、社会になってからも教わる機会はほとんどありません。</p>
            </div>
        </div>
    </div>
    <span class="iconArrow">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_arrowdown_gray.svg" width="78"
            height="36">
    </span>
</section>

<section class="section">
    <div class="wrap">
        <h2 class="headingSection">心の専門家だからこそ<br>本来の自分を<br class="u-br_sp">取り戻すサポートができます</h2>
        <div class="boxWideSplit">
            <div class="boxWideSplit__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_03.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_03.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_goalb_03@2x.jpg 2x"
                    alt="心の専門家だからこそ本来の自分を取り戻すサポートができます" width="681" height="444" loading="lazy" decoding="async">
            </div>
            <div class="boxWideSplit__body">
                <p class="p"><span class="u-bold">私たち（MIZUKARAメンバー）はコーチ</span>という仕事をしています。</p>
                <p class="p">言い換えたら<span class="u-bold">心を扱うプロです。</span></p>
                <p class="p">これまで<span class="u-bold">何万人もの方と対話して、心の部分に変化を起こすことで、人生に本質的変化を起こすお手伝いをしてきました。</span></p>
                <p class="p">そして<span
                        class="u-bold">心（在り方）を整えて本来の自分を取り戻すことが、日本人を強くする（自分の理想の未来を実現する力）に繋がる</span>ことを確信しています。</p>
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
                <p class="cardPoint__txt">
                    心の底から自分を愛することができます。また自分やクライアント、周りの人たちを愛することができるようになるので、より高いレベルで価値を提供することができます。温かい、人間味のある、人に寄り添えるコーチになることができます。
                </p>
            </div>
            <div class="cardPoint__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_01.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_01.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_01@2x.jpg 2x"
                    width="408" height="288" loading="lazy" decoding="async">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_02.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_02.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_02@2x.jpg 2x"
                    width="408" height="288" loading="lazy" decoding="async">
            </div>
        </div>

        <div class="cardPoint">
            <div class="cardPoint__conte">
                <p class="cardPoint__num">
                    <span class="txt">POINT</span><span class="num">03</span>
                </p>
                <h3 class="cardPoint__ttl">自己理解が深まることで、<br>コーチングのスキルが上達します。</h3>
                <p class="cardPoint__txt">相手が話している時、自分が次に話すことばかり考えていませんか？相手の話を心から聴けるようになるので、課題の「本質」を見つけ、<span
                        class="u-underLine">相手をゴールへと導ける</span>優れたコーチに近づけるでしょう。</p>
            </div>
            <div class="cardPoint__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_03.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_03.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_03@2x.jpg 2x"
                    width="408" height="288" loading="lazy" decoding="async">
            </div>
        </div>

        <div class="cardPoint">
            <div class="cardPoint__conte">
                <p class="cardPoint__num">
                    <span class="txt">POINT</span><span class="num">04</span>
                </p>
                <h3 class="cardPoint__ttl">揺るぎない自信を<br class="u-br_sp">手に入れることができます。</h3>
                <p class="cardPoint__txt">
                    成果を出せないと、他者と比較して自信を失ってしまっている方がいます。本物のコーチは、起きた出来事に対してネガティブに考える癖を修正し、常に自信が高い状態を、<span
                        class="u-underLine">意図的</span>に作り出すことができます。</p>
            </div>
            <div class="cardPoint__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_04.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_04.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_04@2x.jpg 2x"
                    width="408" height="288" loading="lazy" decoding="async">
            </div>
        </div>

        <div class="cardPoint">
            <div class="cardPoint__conte">
                <p class="cardPoint__num">
                    <span class="txt">POINT</span><span class="num">05</span>
                </p>
                <h3 class="cardPoint__ttl">大切にしたい人と強固な信頼関係を築けるようになります。</h3>
                <p class="cardPoint__txt">
                    立場や環境、相手との関係に囚われないコミュニケーションができるようになり、他人を批判せずに、受け入れることができるようになります。相手にとってあなたが「なんでも相談できる人生のパートナー」となることで、強固な信頼関係を築けるようになるでしょう。
                </p>
            </div>
            <div class="cardPoint__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_05.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_05.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_05@2x.jpg 2x"
                    width="408" height="288" loading="lazy" decoding="async">
            </div>
        </div>

        <div class="cardPoint">
            <div class="cardPoint__conte">
                <p class="cardPoint__num">
                    <span class="txt">POINT</span><span class="num">06</span>
                </p>
                <h3 class="cardPoint__ttl">明確な人生のゴールに向かって前進できるようになります。</h3>
                <p class="cardPoint__txt">あなたは自分の人生に誇りを持って生きていますか？明確な夢、ビジョンを持って毎日を過ごせていますか？自分の情熱を取り戻し、今よりも<span
                        class="u-underLine">迷いなく</span><span class="u-bold">GOALに向かって前進</span>できるようになります。</p>
            </div>
            <div class="cardPoint__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_06.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_06.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_06@2x.jpg 2x"
                    width="408" height="288" loading="lazy" decoding="async">
            </div>
        </div>

        <div class="cardPoint">
            <div class="cardPoint__conte">
                <p class="cardPoint__num">
                    <span class="txt">POINT</span><span class="num">07</span>
                </p>
                <h3 class="cardPoint__ttl">自分の制限を外して、より人に影響を<br class="u-br_pc">与えられるようになります。</h3>
                <p class="cardPoint__txt">人の目や意見を気にして、自分に制限をかけていませんか？<br
                        class="u-br_pc">他人の意見に左右されず、人生の主導権を取り戻し、あなたと、大切な人の人生をより良い方に導けるようになるでしょう。</p>
            </div>
            <div class="cardPoint__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_07.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_07.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_point_07@2x.jpg 2x"
                    width="408" height="288" loading="lazy" decoding="async">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_01.svg"
                        width="100" height="100" loading="lazy" decoding="async">
                </div>
                <p class="boxFlow__ttl">2DAYSセルフコーチングプログラム<br>DAY1</p>
                <p class="boxFlow__txt">内容は当日来てからのお楽しみです。<br>開催時間は10時~20時です。<br>※9:30開場です。</p>
            </div>
            <span class="boxFlow__arrow"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_poly.svg"
                    width="19" height="31" loading="lazy" decoding="async"></span>
            <div class="boxFlow">
                <div class="boxFlow__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_02.svg"
                        width="100" height="100" loading="lazy" decoding="async">
                </div>
                <p class="boxFlow__ttl">2DAYSセルフコーチングプログラム<br>DAY2</p>
                <p class="boxFlow__txt">1日目を終えて2日目です。どんなフィナーレがあなたを待っているのでしょうか。<br class="u-br_sp">開催時間は9時~20時です。</p>
            </div>
            <span class="boxFlow__arrow"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_poly.svg"
                    width="19" height="31" loading="lazy" decoding="async"></span>
            <div class="boxFlow">
                <div class="boxFlow__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_03.svg"
                        width="100" height="100" loading="lazy" decoding="async">
                </div>
                <p class="boxFlow__ttl">懇親会*任意</p>
                <p class="boxFlow__txt">
                    2日目終了後、会場近くで懇親会を開催致します。20時30分ごろスタート予定です。素晴らしいメンバーとの出会いが2日間であります。プログラムの一部だと思って是非ご参加ください。</p>
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
        <p>※1日目のプログラム終了後は、ご自身で内省を伴うワーク等がございますので、できるだけ1人になれる部屋、時間などをご用意ください。内省をするため、お酒も1日目だけ控えていただきます。</p>
    </div>
</section>

<section class="sectionCoach">
    <h2 class="heasingBelt">2DAYSセルフコーチング<br>プログラムの講師は...</h2>
    <div class="sectionCoach__sp"></div>
    <div class="sectionCoach__inner">
        <div class="sectionCoach__dmy"></div>
        <div class="sectionCoach__conte">
            <p class="sectionCoach__pos">株式会社MIZUKARA <br class="u-br_sp">CEO代表取締役 兼 エグゼクティブコーチ</p>
            <div class="sectionCoach__prf">
                <p class="sectionCoach__name">村岡&nbsp;大樹</p>
                <p class="sectionCoach__eng">Daiki&nbsp;Muraoka</p>
            </div>
            <div class="sectionCoach__txt">
                <p class="p">1987年、東京都生まれ。</p>
                <p class="p">2016年、外資系製薬企業で働きながら、コーチングを始める。</p>
                <p class="p">2018年にベンチャーのパーソナルジムにジョイン、2店舗から40店舗の組織拡大にナンバー2として貢献。</p>
                <p class="p">2021年に合同会社LIMITを設立。パーソナルジム10店舗、サウナ、民泊を経営（2024年2月に全て事業譲渡完了）。</p>
                <p class="p">
                    2022年に株式会社MIZUKARAに参画。赤字事業撤退の意思決定や、人事制度、行動指針の設定、新規事業となるキャリアコーチングの発案、営業チーム組成、スクリプト作成などを行なったのち、CSO（最高戦略責任者）に就任。組織の全体戦略を担う。
                </p>
                <p class="p">2023年に新規事業となる人材研修事業を発足し、自身が講師を務める。立ち上げから半年で受講者1000名を突破。</p>
                <p class="p">2023年12月、株式会社MIZUKARA代表取締役CEOに就任。</p>
                <p class="p">自身の能力を抑えていた信念を取り払うことで、理想的な人生を実現している。</p>
                <div>
                </div>
            </div>
</section>

<section class="section">
    <div class="wrap">
        <h2 class="headingSection">あなたの進化をサポートする<br>MIZUKARAサポートコーチ</h2>
        <div class="boxMedia">
            <div class="boxMedia__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_member.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_member.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_member@2x.jpg 2x"
                    width="544" height="303" loading="lazy" decoding="async">
            </div>
            <div class="boxMedia__conte">
                <p class="p">当日は、講師の村岡だけでなく、<br class="u-br_pc">MIZUKARAコーチ複数人で<span
                        class="u-bold">あなたの人生を前進させます。</span><br>※メンバー全員での参加ではありません。</p>
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
        <p class="p">きっとここまで読んでくれたあなたは、「当日は具体的に何をやるの？」と疑問に思っていると思います。<br><span
                class="u-bold">ですが、本セミナーは事前に内容の詳細をお伝えしていません。</span></p>
        <p class="p">なぜなら、内容をお伝えしてしまうと、当日までに事前に調べたり、準備してしまう方が出てきて、間違った情報を受け取ってしまうリスクがあるからです。</p>
        <p class="p"><span class="u-bold">本サービスは当日フラットな状態で来てもらうことで、正しい在り方(Being)
                を直接、確実に、あなたにインストールしていただきたいと思っています。</span></p>
        <p>最高の2日間を体験して欲しいので、当日の内容の詳細は参加者のみ体験することができます（サービスの内容には絶対的な自信を持っております）。</p>
    </div>
    <div class="is-seminarThumb"></div>
</section>

<section class="section">
    <div class="wrap">
        <div class="boxFee">
            <div class="boxFee__conte">
                <h2 class="boxFee__ttl">参加費は？</h2>
                <p class="p"><span
                        class="u-bold">本来の自分を取り戻すことには、お金には替えられないプライスレスな価値があるでしょう。自分とは一生向き合うことになるのですから...</span></p>
                <p class="p">こちらの2DAYSセルフコーチングプログラム、1人でも多くの人に参加してほしい、その想いから</p>
                <p class="p"><span class="u-bold">価格は <span
                            class="u-underLine">2日間で<?php echo $cf_cta_02; ?>円（税込）</span>でご案内します。</span>（今後、値上げの可能性はございます。）
                </p>
                <p><span
                        class="u-bold">※分割決済も可能です</span><br>（弊社では対応しておりませんので、決済後にカード会社に連絡して、分割手続きを行ってください。手数料はカード会社に準じます。）
                </p>
            </div>
            <div class="boxFee__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_fee_01.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_fee_01.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_fee_01@2x.jpg 2x"
                    width="352" height="341" loading="lazy" decoding="async" class="img01">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_fee_02.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_fee_02.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_fee_02@2x.jpg 2x"
                    width="352" height="341" loading="lazy" decoding="async" class="img02">
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
                <p class="p">本セミナーは当日の内容を事前に公開することができません。<br>ですので、<span
                        class="u-bold">「自分に合っていなかったらどうしよう...」</span>と不安になることもあるかもしれません。</p>
                <p class="p">でも、安心してください。<br>あなたのリスクをなくすために、本セミナーでは、<br class="u-br_pc"><span
                        class="u-bold">全額返金保証をおつけしました。</span></p>
                <p class="p"><span
                        class="u-bold">もし内容にご満足できない場合は、2日間のセミナーを受講後、遠慮なくスタッフ、もしくは公式ラインに連絡をください。全額返金させていただきます。</span></p>
                <p class="p">（決済手数料3.6%はお客様にご負担お願いしております）</p>
                <p>※2日間のプログラムご受講後から1週間以内のお申し出に限ります。<br>※交通費や宿泊費の返金などは承っておりません。</p>
            </div>
            <div class="boxMedia__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_mbg_card.png"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_mbg_card.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_mbg_card@2x.png 2x"
                    width="540" height="476" loading="lazy" decoding="async" class="u-imgSdw">
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
        <p class="p">日本・米国・中国・韓国の4カ国の高校生へのアンケートで、<span
                class="u-bold">「私は価値のある人間だと思うか」</span>という質問に「そうだ」「まあそうだ」と回答した日本の高校生の割合は44.9％で、4カ国で最も低い数値でした（韓国83.7％、米国83.8％、中国80.2％）。<br>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_01.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_01.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_01@2x.png 2x"
                        alt="参加者から頂いた声" width="368" height="170" loading="lazy" decoding="async">
                </div>
                <div class="boxReviews__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_02.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_02.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_02@2x.png 2x"
                        alt="参加者から頂いた声" width="367" height="192" loading="lazy" decoding="async">
                </div>
                <div class="boxReviews__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_03.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_03.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_03@2x.png 2x"
                        alt="参加者から頂いた声" width="364" height="192" loading="lazy" decoding="async">
                </div>
                <div class="boxReviews__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_04.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_04.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_04@2x.png 2x"
                        alt="参加者から頂いた声" width="287" height="297" loading="lazy" decoding="async">
                </div>
            </div>
            <div class="boxReviews__row">
                <div class="boxReviews__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_05.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_05.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_05@2x.png 2x"
                        alt="参加者から頂いた声" width="365" height="189" loading="lazy" decoding="async">
                </div>
                <div class="boxReviews__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_06.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_06.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_06@2x.png 2x"
                        alt="参加者から頂いた声" width="360" height="245" loading="lazy" decoding="async">
                </div>
                <div class="boxReviews__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_07.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_07.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_07@2x.png 2x"
                        alt="参加者から頂いた声" width="358" height="365" loading="lazy" decoding="async">
                </div>
            </div>
            <div class="boxReviews__row is-spBtm">
                <div class="boxReviews__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_08.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_08.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_08@2x.png 2x"
                        alt="参加者から頂いた声" width="418" height="696" loading="lazy" decoding="async">
                </div>
                <div class="boxReviews__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_09.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_09.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_reviews_09@2x.png 2x"
                        alt="参加者から頂いた声" width="412" height="181" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</section>


<section id="i-vs" class="section is-ptsm is-visible">
    <div class="wrap">
        <h2 class="headingSection">代表取締役から頂いた声</h2>
        <div class="boxStickArticle">
            <div class="boxStickArticle__card">
                <p class="boxStickArticle__name">徳武輝彦&nbsp;<span>様</span></p>
                <p class="boxStickArticle__company">株式会社バレエライフデザイン</p>
                <p class="boxStickArticle__tag">仕事内容</p>
                <p class="boxStickArticle__txt">会社は11年目。主にスクール事業と、個人・経営者向けの経営コンサルを行う</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_proprietor_01.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_proprietor_01.jpg 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_proprietor_01@2x.jpg 2x"
                    alt="徳武輝彦さん" width="316" height="307" loading="lazy" decoding="async">
            </div>
            <div class="boxStickArticle__article">
                <div class="u-stackLg">
                    <p class="boxStickArticle__ttl">自分の本当にやりたいことにフルアクセルできるようになった</p>
                    <h3 class="boxStickArticle__heading">ビフォーアフター</h3>
                    <p class="p">率直に言うと売上がすごい上がりました。</p>
                    <p class="p">コンサル事業をReboost受ける前からも始めていましたが、売上はReboostを受けてから<br class="u-br_pc"><span
                            class="u-bold">今月（2023年11月）単月で8桁（売上1000万円以上）いきました。</span></p>
                    <p>コンサル事業としては初の売上なのでこの成果はReboostの影響が大きかったです。</p>
                </div>
                <div class="tableAccordion js-accordion u-stackLg">
                    <p class="tableAccordion__toggle js-listToggle"><span
                            class="tableAccordion__icon"><span></span><span></span></span></p>
                    <div class="tableAccordion__openContent js-openContent">
                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">受講した理由</h3>
                            <p class="p">自分がコンサルを行う上でお客様に寄り添うとか<br class="u-br_pc">気持ちの部分にフォーカスできたらいいなと思っていました。</p>
                            <p class="p">そのヒントが得られるかなという想いが1つ。</p>
                            <p>もう1つは<span class="u-bold">MIZUKARAさんのYouTubeを見て<br
                                        class="u-br_pc">良いチーム、良い会社さんだなと思って参加しようと思いました。</span></p>
                        </div>
                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">受講後の変化</h3>
                            <p class="p u-bold">感情にアクセスする、自分が本当に欲しいものを明確に出せるようになりました。</p>
                            <p class="p u-bold">奥の方にあったけど、事業ですごい経費がかかると思うと<br class="u-br_pc">現実的じゃないなみたいなブレーキを踏んでいました。
                            </p>
                            <p class="p">Reboostで感情にアクセスすることを学ばさせていただいて<br
                                    class="u-br_pc">奥にある1番の自分の大事な思いを出した方がいい。そういう価値基準が1個増えました。</p>
                            <p></p>
                        </div>
                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">受講した一番の価値</h3>
                            <p class="p">自分の奥に眠ってる感情にアクセスできたところ。<br><span
                                    class="u-bold">自分の本当にやりたいことにフルアクセルを踏めるようになりました。</span><br>決断の壁を1つ乗り越えられたのが大きかったです。
                            </p>
                            <p class="p u-bold">今回も単月で1000万上がりました。</p>
                            <p class="p u-bold">結構な投資をしなければいけなかったので、<br
                                    class="u-br_pc">深く感情にタッチできるようになって、やっぱこの想いを出した方がいいなと思い<br
                                    class="u-br_pc">怖さもありつつ大きな決断ができました。</p>
                            <p class="p">そのおかげで大きなリターンが入ってきました。<br>そこが1番大きかったです。</p>
                            <p class="u-bold">この事業に関しては今までの売上と比べたら55倍ぐらいです。</p>
                        </div>
                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">オススメしたい会社・組織は？</h3>
                            <p class="p">私は社員数も数名なので大きな会社ではないです。<br><span
                                    class="u-bold">数名の会社さんとか1人会社、1人社長さんとか結構いらっしゃると思います。</span><br>そうなると<span
                                    class="u-bold">自分の意思決定がすごく会社の売上の方向性を左右します。<br>自分の影響力が数名の会社ほどすごく大きいと思います。</span></p>
                            <p class="p">そんな人でやっぱり<span class="u-bold">本当はこれしたいみたいに<br
                                        class="u-br_pc">奥そこで思っているけどいろんな不安とか恐怖とか<br
                                        class="u-br_pc">資金面とかでちょっと蓋をしている状態が続いてるような方。</span></p>
                            <p class="p">そんな方がReboostの研修を受けることで蓋をやっぱり外した方がうまくいきやすい。</p>
                            <p class="p">長い目で見るとやっぱり良い人生になると思います。</p>
                            <p class="">本当はやりたいことがあるのを抑えつつ生きているような会社の社長さんとか受けると、大きな意思決定が勇気を出してできるようになると思います。</p>
                        </div>
                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">受けようか迷ってる方へ</h3>
                            <p class="p">私の場合は会社をやっています。</p>
                            <p class="p">会社の影響に関わるようなことでモヤモヤしてるような方がいたら<br class="u-br_pc">受けるとその決断をどうしたらいいかが明確になります。
                            </p>
                            <p>迷ったり、モヤモヤしているものがある経営者さんだったら<br
                                    class="u-br_pc">1回受けてモヤモヤが何なのか、本当にしたいことは何かをクリアにして欲しいなと思います。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="u-divider"></div>

        <div class="boxStickArticle">
            <div class="boxStickArticle__card">
                <p class="boxStickArticle__name">池田園子&nbsp;<span>様</span></p>
                <p class="boxStickArticle__company">株式会社プレスラボ 代表取締役</p>
                <p class="boxStickArticle__tag">仕事内容</p>
                <p class="boxStickArticle__txt">編集プロダクション、企業様のウェブコンテンツ制作や、取材記事の制作</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_proprietor_03.jpg?22"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_proprietor_03.jpg?22 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_proprietor_03@2x.jpg?22 2x"
                    alt="池田園子さん" width="316" height="307" loading="lazy" decoding="async">
            </div>
            <div class="boxStickArticle__article">
                <p class="boxStickArticle__ttl">自分の感情を大事に行動できるようになった</p>
                <h3 class="boxStickArticle__heading">ビフォーアフター</h3>
                <p class="p"><span class="u-bold">Must発想だったからこそ、モチベーションが湧きづらくて<br
                            class="u-br_pc">目の前の仕事をやるともうそれをやる力が出ないみたいな状態だったんですけど</span></p>
                <p class="p u-bold">新規事業を作りたいという自分の本来奥底にある感情っていうところにアプローチして<br
                        class="u-br_pc">Want（~~したい）発想がちょっと湧き上がってきてる変化があります。</p>
                <p class="u-stackLg">それが1番大きいかなと思います。</p>
                <div class="tableAccordion js-accordion u-stackLg">
                    <p class="tableAccordion__toggle js-listToggle"><span
                            class="tableAccordion__icon"><span></span><span></span></span></p>
                    <div class="tableAccordion__openContent js-openContent">

                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">受講した理由</h3>
                            <p class="p">私の周りの数名がMIZUKARAさんのことがすごい好きで<br class="u-br_pc">私のXのタイムラインにもよく出てきてたんです。</p>
                            <p class="p">それでMIZUKARAさんのことを知っていくようになって<br
                                    class="u-br_pc">LINEに登録したらReboostのオンライン体験会の案内が届きました。</p>
                            <p class="p">Reboost講師の村岡さんがお話しされる内容で興味を持って<br
                                    class="u-br_pc">村岡さんが面白いのなんのって、この人やばいって思ったんです。</p>
                            <p class="p">MIZUKARAさんに興味があったし行ってみたいな、と。</p>
                            <p class="p">むしろ内容があまり明かされてなかったからこそ、<br class="u-br_pc">これは行かないと分からんでしょうと思い切って申し込みました。</p>
                            <p class="p">あとは<span class="u-bold">2020年度はコロナの影響で会社の売上が何千万か下がってしまったんですけど<br
                                        class="u-br_pc">その後は持ち直していって最高収益を達成していて<br
                                        class="u-br_pc">既存のお客様だったりこれまで慣れてきた仕事に支えられていて<br
                                        class="u-br_pc">安定・現状維持があって甘えてるなというのがありました。</span></p>
                            <p class="p u-bold">自分の中で変わりたい、でも何すればいいんだろうっていう<br class="u-br_pc">代表として不甲斐ない状態でもあったので<br
                                    class="u-br_pc">そこは変わりたいと感じて申し込みました。</p>
                            <p class="u-bold">セルフコーチングについてもできるようになったらすごくいいし<br
                                    class="u-br_pc">自分の仕事やメンバーと向き合うときにも活きてくるだろうなという理由で申し込みました。</p>
                        </div>

                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">受講した一番の価値</h3>
                            <p class="p u-bold">自分の奥底にある感情とか内面と会話する習慣が恥ずかしながらありませんでした。</p>
                            <p class="p">仕事の予定を入れつつ、Googleカレンダーに入れつつ必要なことをやっていく。</p>
                            <p class="p">お客さん、自分が関わる人たちに満足してもらえるように<br class="u-br_pc">これをやっていくような目線でしか物事をやっていませんでした。
                            </p>
                            <p class="p">自分と対話してゆっくり考えるみたいなことがほぼなかったので<br
                                    class="u-br_pc">それを毎日ノートに書きながら時間を意識的に取るようになっています。</p>
                            <p class="p">それに付随した変化なのですが、<br
                                    class="u-br_pc"><span>心の奥にある何々したいっていう純粋な感情というものに素直になれ始めました。</span></p>
                            <p class="u-bold">何々したいって思った行動をすぐするようになったり<br
                                    class="u-br_pc">感情へのアクセス、自分の感情を大事にした行動を取るみたいなことが大きな価値です。</p>
                        </div>

                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">オススメしたい会社・組織は？</h3>
                            <p class="p u-bold">企業の規模を問わず、みんなに受けて欲しいです。</p>
                            <p class="p">なぜならReboostが提案している<br class="u-br_pc">本来の自分を取り戻して<br
                                    class="u-br_pc">ありのままの自分を愛して生きるっていう思想は<br class="u-br_pc">誰が持ってもいいものだし<br
                                    class="u-br_pc">それを持っていたらみんなが幸せになる。</p>
                            <p>争いごと、良くないことも起きないんじゃないかって思うぐらい<br class="u-br_pc"><span
                                    class="u-bold">素晴らしい考え方、あり方なので受けて欲しいし<br
                                        class="u-br_pc">もう日本人全員受けた方がいいよってぐらいの内容です。</span></p>
                        </div>

                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">受けようか迷ってる方へ</h3>
                            <p class="p">迷っているのは何かしら自分の心に刺さるところがあり、<br class="u-br_pc">つっかえたモノが取れない状態だと想像しています。</p>
                            <p class="p">リブーストを知っている時点で運命的なものもあるでしょうし、<br class="u-br_pc">人生の2日間ですから思い切って受けて欲しいなと感じています。
                            </p>
                            <p class="p">私個人としては普段経験しない<br class="u-br_pc">日常で出会わない人たち、普段友達にはいない人<br
                                    class="u-br_pc">いろんな方と向き合って本音で全力で取り組めました。</p>
                            <p class="p">日常にいたら手に入らない経験、<br class="u-br_pc">見えてこない感情、考え方が確実に2日間の中で溢れているので<br
                                    class="u-br_pc">価格をはるかに超える価値があったと感じています。</p>
                            <p class="p u-bold">現状にモヤモヤしている、そういう揺らぎがある方には受けて欲しいなと感じました。</p>
                            <p>ありがとうございます。</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="u-divider"></div>

        <div class="boxStickArticle">
            <div class="boxStickArticle__card">
                <p class="boxStickArticle__name">坂本裕美&nbsp;<span>様</span></p>
                <p class="boxStickArticle__company">MAISON de SPIRIT26株式会社</p>
                <p class="boxStickArticle__tag">仕事内容</p>
                <p class="boxStickArticle__txt">
                    サロンを4店舗経営。<br>女性向けの1対複数向けのライフコーチングをオンラインメインで提供。<br>ヘッドスパの講師。サロン特化型のコンサルを行う。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_proprietor_02.jpg?22"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_proprietor_02.jpg?22 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_proprietor_02@2x.jpg?22 2x"
                    alt="坂本裕美さん" width="316" height="307" loading="lazy" decoding="async">
            </div>
            <div class="boxStickArticle__article">
                <p class="boxStickArticle__ttl">感じることを感じさせてくれる場所ってあんまりないと思っています。</p>
                <h3 class="boxStickArticle__heading">ビフォーアフター</h3>
                <p class="p">3つあります。</p>
                <p class="p"><span class="u-bold">1つ目、1番は自分を信じる力がすごく強くなった感覚があります。</span></p>
                <p class="p">私も含めていろんな方が変わりたいのに変われない現状ってすごくあると思います。</p>
                <p class="p">今のゾーンのままでいようという人間の力が働いてしまうので<br class="u-br_pc">そこをやり切るってことを仲間に宣言したり、そういう場面があったり。</p>
                <p class="p">そこで宣言することで、<span class="u-bold">自分を信じてやりきろうみたいな力がすごく強くなって<br
                            class="u-br_pc">自分に大丈夫だよって日々の中で言ってあげられるようになりました。</span></p>
                <div class="tableAccordion js-accordion u-stackLg">
                    <p class="tableAccordion__toggle js-listToggle"><span
                            class="tableAccordion__icon"><span></span><span></span></span></p>
                    <div class="tableAccordion__openContent js-openContent">
                        <p class="p">それが1番の大きな変化です。</p>
                        <p class="p u-bold">2つ目、自分の1番やりたかった女性向けの1対複数人でのコーチングで大きな売上を立てられたこと。</p>
                        <p class="p">サロン経営メインでやっていたんですけど<br class="u-br_pc">構想があっても<span
                                class="u-bold">0から立ち上げる新規事業だったので<br class="u-br_pc">失敗したらどうしようとか不安が自分の奥底にありました。</span>
                        </p>
                        <p class="p">それがReboostを受けた直後ぐらいに<br class="u-br_pc">リリースをできるようになり、売上が立ったのが大きな変化です。</p>
                        <p class="p u-bold">実際に1期募集したら300万円ぐらい売上があがったり。</p>
                        <p class="p u-bold">今度来月から2期の募集ってのが始まるんですけど<br class="u-br_pc">そこも1000万円ぐらいを売上見込みを立てています。</p>
                        <p class="p u-bold">大きな新規事業としての変化です。</p>
                        <p class="p">何よりも自分の中から湧いてきた<br class="u-br_pc">1番やりたいと思っていた新しい事業だったので<br
                                class="u-br_pc">そこのゴール設計ができたり、そこに向かって進めているのがすごく大きな変化です。</p>
                        <p class="p u-bold">3つ目、家族や人間関係との関わりがより深くなったこと。</p>
                        <p class="u-stackLg">日々の中で当たり前のことにすごく感謝をしたり<br class="u-br_pc"><span
                                class="u-bold">表面的なものではなくて内側から湧いてきて<br
                                    class="u-br_pc">本当に1つ1つの幸せを噛みしめるような生き方になりました。</span></p>

                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">受講した理由</h3>
                            <p class="p">Reboost講師の村岡さんの個別コーチングを受けていました。</p>
                            <p class="p">村岡さんと元々知り合いで「1つやりたかった俺の夢が叶うんだよね」っていう話を聞いていて<br
                                    class="u-br_pc">それがReboostの事業だったので是非それを私もキャッチしたいと思いました。</p>
                            <p class="p">あと個別コーチングをしていただいて結果が出たり変化がすごくあったので<br class="u-br_pc">コーチングが終わる時期だったこともあり、<br
                                    class="u-br_pc">ここに来れば確信度が高まるっていうのが互いに分かっていた。</p>
                            <p>それで村岡さんの言葉通り参加させていただきました。</p>
                        </div>

                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">受講後の変化</h3>
                            <p class="p">感じる力を日々の中でより意識するようになりました。</p>
                            <p class="p">思考優位で経営者なので頭で考えてロジカルに繋げることが得意だったり<br
                                    class="u-br_pc">俯瞰して世の中を見たりできるところが私は得意分野です。</p>
                            <p class="p">けど、そうすると脳がいつも働いていて<br class="u-br_pc">内側から湧き出てくる感情は後回しにしてしまうことが多かったです。</p>
                            <p>でもすごく大切な部分というのに気づいて<br class="u-br_pc"><span class="u-bold">「感じる」にフォーカスする時間をあえて取ったり<br
                                        class="u-br_pc">今、自分はどう感じているんだろうという目線をすごく持てるようになりました。</span></p>
                        </div>

                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">受講した一番の価値</h3>
                            <p class="p u-bold">感じることを感じさせてくれる場所って<br class="u-br_pc">あんまりないと思っています。</p>
                            <p class="p">学ぶ、やり方を教わることが多いと思うんですけど、初めに村岡さんに言われたのが<br
                                    class="u-br_pc">「紙とペンは持ってきてもらうけどほぼ使わないよ。そういうのじゃないから。」<br
                                    class="u-br_pc">みたいな説明を受けて、どういうこと？という感覚でした。</p>
                            <p class="p">でも本当にその通りでした。</p>
                            <p class="p">内容は知らない方がいいので多くは語れないんですけど<br class="u-br_pc">自分が今までやってきたことと向き合いの質が全然違う、方向性が違う。
                            </p>
                            <p class="p">学ぶとか、外側からの知識ってほぼいらないんだなって、すごい衝撃があって。</p>
                            <p class="p">自分自身もコーチングに近いライフコーチングを、<br class="u-br_pc">MIZUKARAが提供しているものとはちょっと違うと思うのですが、<br
                                    class="u-br_pc">その組み立てをしていく中でのヒントもすごくありました。</p>
                            <p class="p">私が逆にライフコーチングをリリースしきれなかったのは<br class="u-br_pc">頭でっかちなものを提供しても意味がないというのがありました。
                            </p>
                            <p class="p">今後の人に還元していくために必要だよねと感じました。</p>
                            <p class="p u-bold">Reboostにしか提供できない価値があって<br class="u-br_pc">大切な人にみんなに参加して欲しいってすごく思います。</p>
                            <p class="u-bold">ご紹介させて頂いたりもしているのですけど<br class="u-br_pc">本当に主人にも受けて欲しいし<br
                                    class="u-br_pc">子供も対象の年齢になったら受けてほしいです、そう思うぐらいの価値です。</p>
                        </div>

                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">オススメしたい会社・組織は？</h3>
                            <p class="p">私自身が経営をしていて思考優位になりやすいところがあります。</p>
                            <p class="p">経営者ほど、そうかなって思います。</p>
                            <p class="p">自分と繋がる時間を経営者の皆さん大事にして頂いて、<br
                                    class="u-br_pc">組織を持っている方、組織の幹部にいる方、役員の方は自分がまず体感して欲しいです。</p>
                            <p class="p">そこから派生していって従業員に受けさせたいとなっていくと思います。</p>
                            <p class="u-bold">会社全体が受けていただいたりすると<br class="u-br_pc">すごく組織力が変わっていくんじゃないかなって、目に見えて分かります。
                            </p>
                        </div>

                        <div class="u-stackLg">
                            <h3 class="boxStickArticle__heading">受けようか迷ってる方へ</h3>
                            <p class="p">Reboostを迷っている時点で自分が大きく変化してしまうかもしれない<br class="u-br_pc">恐れだったりがあるんじゃないかなと思います。
                            </p>
                            <p class="p">迷うということは奥に変わりたいとか<br class="u-br_pc">変化したいっていうものがあるから迷っていると思うので<br
                                    class="u-br_pc">奥にある本当は変わりたいけど変化が怖い、そこに気づいてあげる。<br>その奥にあるものに気づいてあげることが<br
                                    class="u-br_pc">まずは第1段階なんじゃないかなと思います。</p>
                            <p class="p">そこから自分で行くという決断をしなきゃいけないし<br class="u-br_pc">すごく勇気があることだと思います。</p>
                            <p class="p">けど、<span class="u-bold">この低単価でこのプログラム内容って<br
                                        class="u-br_pc">私この業界結構関わってきて、いろんなこと学んでいますけど<br
                                        class="u-br_pc">他に絶対ないんですね。</span></p>
                            <p class="p u-bold">なのでこの内容でこの素晴らしいプログラムを受けない理由は<br class="u-br_pc">私の中ではないんだけど<br
                                    class="u-br_pc">決断をするとか変化をしたい自分に気づいてあげるのはご本人しかできないこと。</p>
                            <p class="p u-bold">やらない言い訳を人間は考えてしまうんですけど<br class="u-br_pc">その奥底にある自分の気持ちの鮮度を大切にしてあげる。</p>
                            <p class="p">まずはReboostに行くことから始まるんじゃないかなって思います。</p>
                            <p>そこがスタートラインだよと、伝えられたらいいなと思いました。</p>
                        </div>
                    </div>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_01.jpg?222"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_01.jpg?222 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_01@2x.jpg?222 2x"
                    alt="2日間終了後の様子" width="367" height="232" loading="lazy" decoding="async">
            </div>
            <div class="boxGallery__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_02.jpg?222"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_02.jpg?222 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_02@2x.jpg?222 2x"
                    alt="2日間終了後の様子" width="368" height="232" loading="lazy" decoding="async">
            </div>
            <div class="boxGallery__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_03.jpg?222"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_03.jpg?222 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/img_after_03@2x.jpg?222 2x"
                    alt="2日間終了後の様子" width="368" height="232" loading="lazy" decoding="async">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_01.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_01.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_01@2x.png 2x"
                        width="100" height="100" loading="lazy" decoding="async">
                </div>
                <p class="boxFlow__txt">ボタンからコーチングスクール公式LINEに移動してください。</p>
            </div>
            <span class="boxFlow__arrow"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_poly.svg"
                    width="19" height="31" loading="lazy" decoding="async"></span>
            <div class="boxFlow--gray">
                <p class="boxFlow__step"><span class="step">STEP</span><span class="num">02</span></p>
                <div class="boxFlow__icon p">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_02.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_02.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_02@2x.png 2x"
                        width="100" height="100" loading="lazy" decoding="async">
                </div>
                <p class="boxFlow__txt">自動でアンケートが送られてくるので、アンケートの記入をお願いします。</p>
            </div>
            <span class="boxFlow__arrow"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_flow_poly.svg"
                    width="19" height="31" loading="lazy" decoding="async"></span>
            <div class="boxFlow--gray">
                <p class="boxFlow__step"><span class="step">STEP</span><span class="num">03</span></p>
                <div class="boxFlow__icon p">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_03.png"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_03.png 1x,<?php echo get_template_directory_uri(); ?>/assets/images/reboost/icon_step_03@2x.png 2x"
                        width="100" height="100" loading="lazy" decoding="async">
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
            <p class="boxCta__price"><?php echo $cf_cta_02; ?><span class="boxCta__yen">円<span
                        class="boxCta__tax">（税込）</span></span></p>
            <table class="tableCta">
                <tr>
                    <th>日程①</th>
                    <td><?php echo $cf_cta_03; ?></td>
                </tr>
                <tr>
                    <th>日程②</th>
                    <td><?php echo $cf_cta_04; ?></td>
                </tr>
                <?php if($cf_cta_04_2): ?>
                <tr>
                    <th>日程③</th>
                    <td><?php echo $cf_cta_04_2; ?></td>
                </tr>
                <?php endif; ?>
                <?php if($cf_cta_04_3): ?>
                <tr>
                    <th>日程④</th>
                    <td><?php echo $cf_cta_04_3; ?></td>
                </tr>
                <?php endif; ?>
                <?php if($cf_cta_04_4): ?>
                <tr>
                    <th>日程⑤</th>
                    <td><?php echo $cf_cta_04_4; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <th>会場</th>
                    <td><?php echo nl2br($cf_cta_05); ?></td>
                </tr>
            </table>
            <?php if($cf_cta_06): ?>
            <p class="textMd u-bold u-center p p--mtsm"><?php echo nl2br($cf_cta_06); ?></p>
            <?php endif; ?>
            <a href="https://liff.line.me/2003655505-A1wBRxrO?sl=483bd37395&product=Reboost申込" target="_blank"
                rel="noopener" data-btnIcon="&#xf105;" class="boxCta__btn">席が埋まる前に申し込む</a>
            <p class="boxCta__note">ボタンを押すと公式LINEに移動します<br>まずはアンケート記入をお願いします</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="wrap">
        <h2 class="headingSection">株式会社MIZUKARAについて</h2>
        <div class="boxAbout">
        </div>
        <p class="p textMd">どんな風にも生きることができるこの世界。</p>
        <p class="p textMd">言い訳を並べて自分の可能性に蓋をしない。弊社MIZUKARAは、メンバーとクライアント様の生き様を通して、「全ての人に可能性がある」を体現し続けます。</p>
        <p class="p textMd">
            「身体と心が変われば人生が変わる」この核心をもとに「フィットネス」と「コーチング」の事業を展開する株式会社MIZUKARAを2019年に創業。<br>「Body（身体）とBe（心）を改革しGOALを達成する」これがMIZUKARAの由来です。
        </p>
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
                    <p>MIZUKARAも一切撮影を行いません。ご自身の辛い過去、人に話せなかった内容をお話になる場面もある方がいます。ご自身に最大限向き合うために、収録等は行うことができません。</p>
                </div>
            </dd>
        </dl>
        <dl class="listFaq">
            <dt class="listFaq__q">申し込み後参加できなくなった場合、キャンセル・返金は可能でしょうか？</dt>
            <dd class="listFaq__a">
                <div class="listFaq__aInner">
                    <p>キャンセルは可能です。ご返金はご決済されてから8日間以内に問い合わせフォームからのご依頼により可能となります。</p>
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
        <p class="textMd u-left_sp">決断した瞬間から人生が変わっていきます。<br>ぜひ、<span
                class="u-bold">自分の直感を信じて、申し込んでください。</span>（申し込みは先着順です。）</p>
    </div>
</section>

<section class="section is-gray">
    <div class="wrap">
        <h2 class="headingSection--xlg">お申し込みはこちら</h2>
    </div>
    <div class="wrap--narrow">
        <div class="boxCta">
            <p class="boxCta__ttl"><?php echo nl2br($cf_cta_01); ?></p>
            <p class="boxCta__price"><?php echo $cf_cta_02; ?><span class="boxCta__yen">円<span
                        class="boxCta__tax">（税込）</span></span></p>
            <table class="tableCta">
                <tr>
                    <th>日程①</th>
                    <td><?php echo $cf_cta_03; ?></td>
                </tr>
                <tr>
                    <th>日程②</th>
                    <td><?php echo $cf_cta_04; ?></td>
                </tr>
                <?php if($cf_cta_04_2): ?>
                <tr>
                    <th>日程③</th>
                    <td><?php echo $cf_cta_04_2; ?></td>
                </tr>
                <?php endif; ?>
                <?php if($cf_cta_04_3): ?>
                <tr>
                    <th>日程④</th>
                    <td><?php echo $cf_cta_04_3; ?></td>
                </tr>
                <?php endif; ?>
                <?php if($cf_cta_04_4): ?>
                <tr>
                    <th>日程⑤</th>
                    <td><?php echo $cf_cta_04_4; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <th>会場</th>
                    <td><?php echo nl2br($cf_cta_05); ?></td>
                </tr>
            </table>
            <?php if($cf_cta_06): ?>
            <p class="textMd u-bold u-center p p--mtsm"><?php echo nl2br($cf_cta_06); ?></p>
            <?php endif; ?>
            <a href="https://liff.line.me/2003655505-A1wBRxrO?sl=483bd37395&product=Reboost申込" target="_blank"
                rel="noopener" data-btnIcon="&#xf105;" class="boxCta__btn">席が埋まる前に申し込む</a>
            <p class="boxCta__note">ボタンを押すと公式LINEに移動します<br>まずはアンケート記入をお願いします</p>
        </div>
    </div>
</section>


<?php get_footer('reboost'); ?>