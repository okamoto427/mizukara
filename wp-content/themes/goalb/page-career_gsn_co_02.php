<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta content="<?php echo $description; ?>" name="description">
    <?php if(is_404()){ ?>
    <meta name=”robots” content=”noindex” /><?php } ?>

    <!--  OGPの設定  -->
    <meta property="og:title" content="キャリスピ">
    <meta property="og:description"
        content="キャリスピは認知科学をもとにしたコーチングを提供しています。あなたの持つ「自分だけの強み」や「才能や情熱」を発揮できる分野を特定することで、キャリア構築を支援します。">
    <meta property="og:type" content="<?php echo $pageType; ?>">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:site_name" content="<?php echo $siteName; ?>">
    <meta content="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/sns.png"
        property="og:image">

    <meta name="twitter:card" content="summary_large_image" />

    <title>キャリスピ</title>
    <!--  アイコン関連  -->
    <link rel="apple-touch-icon" sizes="57x57"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/manifest.json"
        crossorigin="use-credentials">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
        content="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/favicon.ico"
        type="image/x-icon">
    <link rel="shortcut icon"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/favicon.ico"
        type="image/x-icon">
    <link rel="apple-touch-icon"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/appletouch.png">
    <link rel="apple-touch-icon-precomposed"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/webclip.png">
    <!-- css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" />
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- wow.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script defer src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/js/script.js">
    </script>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-55JL373');</script>
<!-- End Google Tag Manager -->
	<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "l2k0zbkdhu");
</script>
    <?php wp_head(); ?>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55JL373"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <main>
        <header class="header js-header">
            <div class="header__inner">
                <div class="header__wrap">
                    <div class="header__left">
                        <ul class="header__lists">
                            <li><a href="#about">キャリスピとは</a></li>
                            <li><a href="#reason">コーチングがキャリア形成を加速させる3つの理由</a></li>
                            <li><a href="#voice">受験生の体験談</a></li>
                            <li><a href="#method">キャリスピのメソッド</a></li>
                            <li><a href="#question">よくある質問</a></li>
                        </ul>
                    </div>
                    <div class="header__button">
                        <a href="https://liff.line.me/1657004383-AmL9D9Yw/landing?follow=%40712eemnx&lp=ZWs5Zu&liff_id=1657004383-AmL9D9Yw"
                            target="_blank" data-cats="lineFriendsFollowLink">無料体験コーチングを申し込む</a>
                    </div>
                </div>
            </div>
            <div class="header__menu hamburger js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header__drawer drawer-menu js-drawer-menu">
                <ul class="drawer-menu__lists">
                    <li><a href="#about">キャリスピとは</a></li>
                    <li><a href="#reason">コーチングがキャリア形成を加速させる3つの理由</a></li>
                    <li><a href="#voice">受験生の体験談</a></li>
                    <li><a href="#method">キャリスピのメソッド</a></li>
                    <li><a href="#question">よくある質問</a></li>
                </ul>
                <div class="drawer-menu__button"><a
                        href="https://liff.line.me/1657004383-AmL9D9Yw/landing?follow=%40712eemnx&lp=ZWs5Zu&liff_id=1657004383-AmL9D9Yw"
                        target="_blank" data-cats="lineFriendsFollowLink" class="button">無料体験コーチングを申し込む</a></div>
            </div>
        </header>
        <section class="mv js-mv">
            <div class="mv__wrap">
                <h1 class="mv__logo wow animated fadeInUp">
                    <picture>
                        <source
                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/mv__logo-md.svg"
                            media="(min-width: 961px)" />
                        <source
                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/mv__logo-sm.svg"
                            media="(min-width: 601px)" />
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/mv__logo-sp.webp"
                            alt="キャリスピ あなたの隠れた強みを引き出すキャリアコーチング" width="607" height="376" />
                    </picture>
                </h1>
                <div class="mv__main wow animated fadeInUp" data-wow-delay=".3s">
                    <div class="mv__head">
                        キャリスピは認知科学をもとにしたコーチングを提供しています。あなたの持つ「自分だけの強み」や「才能や情熱」を発揮できる分野を特定することで、キャリア構築を支援します。</div>
                    <div class="mv__img"><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/mv__img.png"
                            alt="体験コーチ受験者数7000人。適性判明率94.5%。平均顧客満足度98.8%。" width="580" height="116" /></div>
                    <p class="mv__sub">※1 集計期間：2022年12月～2023年12月 ※2 セッションを通して「自分の職業機能が分かった」と回答された方の割合 ※3
                        集計期間：2023年6月～12月 コーチングセッション最終回のアンケートにおいて、5段階評価で3以上を回答された方の割合</p>
                    <div class="mv__button"><a
                            href="https://liff.line.me/1657004383-AmL9D9Yw/landing?follow=%40712eemnx&lp=ZWs5Zu&liff_id=1657004383-AmL9D9Yw"
                            class="button" target="_blank" data-cats="lineFriendsFollowLink">無料体験コーチングを申し込む</a></div>
                </div>
            </div>
        </section>
        <section class="about" id="about">
            <div class="about__inner">
                <div class="about__item">
                    <div class="about__main">
                        <h2 class="about__title wow animated fadeInUp" data-wow-delay="1s">キャリスピはあなたの<span
                                class="text-green">強み</span>を引き出す<br class="u-desktop" /><span
                                class="text-green">キャリア形成のプロ</span>によるコーチングです</h2>
                        <div class="about__texts">
                            <p>「仕事が上手くいかない」「自分のやりたいことが何か分からない」 こういった悩みを抱えている方は<span
                                    class="text-green">自分の「強み」を活かせていない・気づけていない</span>可能性が高いです。</p>
                            <p>「自分では強みだと認識していないことが、<br class="u-desktop" />実は周りから見ると凄いこと・真似するのが難しいことだった」</p>
                            <p>このような状況に<span class="text-green">自分の思考だけで気づくのは至難の業</span>です。
                                <br />第三者であるコーチとの会話や、時間をかけて自分の過去の経験を振り返ることで今まで気づいていなかった自分の強みに気づくことができます。
                            </p>
                        </div>
                    </div>
                    <div class="about__img wow animated fadeInUp" data-wow-delay=".5s">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/about__img.webp"
                                type="image/webp" width="785.5" height="488.5" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/about__img.jpg"
                                alt="イメージ画像" width="785.5" height="488.5" />
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <!-- 理由 -->
        <section class="reason" id="reason">
            <div class="reason__wrap">
                <h2 class="reason__title wow animated fadeInUp" data-wow-delay=".5s">コーチングがキャリア形成を加速させる<span
                        class="text-green">3つの理由</span></h2>
                <!-- 1個目 -->
                <div class="reason__item wow animated fadeInLeft" data-wow-delay=".7s">
                    <div class="reason__main">
                        <div class="reason__title-en"><img
                                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__title-en01.svg"
                                alt="REASON01" width="93" height="28" loading="lazy" /></div>
                        <h3 class="reason__title-ja">自分の「強み」を<br />最大限引き出せる</h3>
                        <p class="reason__text">
                            キャリスピのコーチングでは「あなたらしさ」や「あなた自身の強み」を尊重します。コーチとのセッションを通して、「自分だけでは気づけない」あなたの強みや得意を見つけましょう。</p>
                    </div>
                    <div class="reason__img">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__img01@2x.webp"
                                type="image/webp" width="420" height="249" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__img01@2x.jpg"
                                alt="自分の「強み」を最大限引き出せる" width="420" height="249" loading="lazy" />
                        </picture>
                    </div>
                </div>
                <!-- 2個目 -->
                <div class="reason__item reason__item--reverse wow animated fadeInRight" data-wow-delay=".8s">
                    <div class="reason__main">
                        <div class="reason__title-en"><img
                                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__title-en02.svg"
                                alt="REASON02" width="96" height="27" loading="lazy" /></div>
                        <h3 class="reason__title-ja">GOAL設定が<br />行動力を加速させる</h3>
                        <p class="reason__text">あなたが本当に手にしたい・なりたい姿をGOALに設定するので、やるべきことが明確になり、行動やキャリアの選択に迷いがなくなります。</p>
                    </div>
                    <div class="reason__img">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__img02@2x.webp"
                                type="image/webp" width="420" height="249" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__img02@2x.jpg"
                                alt="GOAL設定が行動力を加速させる" width="420" height="249" loading="lazy" />
                        </picture>
                    </div>
                </div>
                <!-- 3個目 -->
                <div class="reason__item wow animated fadeInLeft" data-wow-delay=".9s">
                    <div class="reason__main">
                        <div class="reason__title-en"><img
                                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__title-en03.svg"
                                alt="REASON03" width="96" height="28" loading="lazy" /></div>
                        <h3 class="reason__title-ja">経験豊富なコーチ陣が<br />キャリア構築をサポート</h3>
                        <p class="reason__text">
                            キャリスピのコーチ陣は国内大手企業の人事、コンサル企業勤務などキャリアに対してハイレベルな人材が多数在籍しており、あなたに合ったキャリア構築をサポートいたします。</p>
                    </div>
                    <div class="reason__img">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__img03@2x.webp"
                                type="image/webp" width="420" height="249" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__img03@2x.jpg"
                                alt="経験豊富なコーチ陣がキャリア構築をサポート" width="420" height="249" loading="lazy" />
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <!-- 体験談 -->
        <section class="voice" id="voice">
            <h2 class="voice__title section-title wow animated fadeInUp" data-wow-delay=".4s">
                <span class="section-title--en">USER VOICE</span>
                受講生の体験談
            </h2>
            <div class="swiper voice__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/voice__slider01.png"
                            alt="他人軸で生きてきた人生から自分らしく生きる毎日へ" loading="lazy" width="380" height="580" /></div>
                    <div class="swiper-slide"><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/voice__slider02.png"
                            alt="現状を打破し、未経験から大手企業へ転職成功" loading="lazy" width="380" height="580" /></div>
                    <div class="swiper-slide"><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/voice__slider03.png"
                            alt="仕事のモヤモヤを払拭しやりがいと情熱を持てる働き方に" loading="lazy" width="380" height="580" /></div>
                    <div class="swiper-slide"><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/voice__slider04.png"
                            alt="憂鬱な日々を抜け出し理想のライフスタイルの実現！" loading="lazy" width="380" height="580" /></div>
                    <div class="swiper-slide"><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/voice__slider05.png"
                            alt="やりたいこと探しに終止符を" loading="lazy" width="380" height="580" /></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- メソッド -->
        <section class="method" id="method">
            <div class="method___inner">
                <div class="method__items">
                    <h2 class="method__title wow animated fadeInUp" data-wow-delay=".4s">キャリスピの<br
                            class="u-mobile" /><span class="text-green">3つのメソッド</span></h2>
                    <!-- 1つ目 -->
                    <div class="method__item01">
                        <div class="method__item-left">
                            <div class="method__title-en wow animated fadeInUp" data-wow-delay=".6s"><img
                                    src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__title-en01.svg"
                                    alt="METHOD01" width="96" height="27" loading="lazy" /></div>
                            <h3 class="method__sub-title wow animated fadeInUp" data-wow-delay=".6s">あなたの<span
                                    class="text-green">強み</span>や<span class="text-green">あなたらしさ</span>を引き出すことに特化</h3>
                            <p class="method__text">キャリスピのコーチングではあなたが既に持っている強みは勿論のこと、<span
                                    class="text-green">あなたがまだ自覚・言語化できていない潜在的な強みを引き出します。</span>あなたの本来のポテンシャルやあなたらしさを最大限活かすことができるように最大限ご支援させていただきます。
                            </p>
                        </div>
                        <div class="method__img01">
                            <picture>
                                <source
                                    srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__img01.webp"
                                    type="image/webp" />
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__img01.jpg"
                                    alt="" width="740" height="499" loading="lazy" />
                            </picture>
                        </div>
                    </div>
                    <!-- 2つ目 -->
                    <div class="method__item02">
                        <div class="method__item-left">
                            <div class="method__title-en wow animated fadeInUp" data-wow-delay=".6s"><img
                                    src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__title-en02.svg"
                                    alt="METHOD02" width="96" height="27" loading="lazy" /></div>
                            <h3 class="method__sub-title wow animated fadeInUp" data-wow-delay=".6s"><span
                                    class="text-green">実績多数の精鋭</span>たちによる<br />クオリティの高いコーチング</h3>
                            <p class="method__text">キャリスピ在籍のコーチ陣は、<span
                                    class="text-green">大手企業の人事やコンサル会社に在籍していたりと様々なキャリア出身の精鋭揃い</span>です。社内でのテストを経て合格したコーチだけでキャリスピのメンバーは形成されているので、最後の1秒まであなたに寄り添う事をお約束いたします。
                            </p>
                        </div>
                        <div class="swiper method__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="method__slider-img">
                                        <picture>
                                            <source
                                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img01.webp"
                                                type="image/webp" />
                                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img01.jpg"
                                                alt="" width="740" height="499" loading="lazy" />
                                        </picture>
                                    </div>
                                    <div class="method__slider-name">竹尾奈津子</div>
                                    <div class="method__slider-work">コーチ×法人経営×ワールドトラベラー</div>
                                    <p class="method__slider-message">あなたには無限の可能性がある！一緒に挑戦しましょう！</p>
                                    <p class="method__slider-text">
                                        ・月収45円→398万円・営業歴18年以上、成約率79％・月間コーチング数50人以上・他企業で経営者コーチング・著書「自愛が10割」３部門1位</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="method__slider-img">
                                        <picture>
                                            <source
                                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img03.webp"
                                                type="image/webp" />
                                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img03.jpg"
                                                alt="" width="740" height="499" loading="lazy" />
                                        </picture>
                                    </div>
                                    <div class="method__slider-name">辻優樹</div>
                                    <div class="method__slider-work">大手企業×転職×複業</div>
                                    <p class="method__slider-message">人生を変えるキッカケをつくるコーチングを提供します</p>
                                    <p class="method__slider-text">・新卒入社でコンビニ店長
                                        SVとして複数店舗マネジメント・キャリアコンサルタント・大手人材会社転職で採用人事・キャリア面談実績500名以上</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="method__slider-img">
                                        <picture>
                                            <source
                                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img04.webp"
                                                type="image/webp" />
                                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img04.jpg"
                                                alt="" width="740" height="499" loading="lazy" />
                                        </picture>
                                    </div>
                                    <div class="method__slider-name">秋田悠貴</div>
                                    <div class="method__slider-work">大手出身×未経験×プロコーチ</div>
                                    <p class="method__slider-message">自分の人生に期待しているからこそ不安もある。最高の人生を一緒に作りましょう！</p>
                                    <p class="method__slider-text">・新卒入社で400社以上のCM出稿をサポート・自分の可能性を信じて未経験転職2回</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="method__slider-img">
                                        <picture>
                                            <source
                                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img02.webp"
                                                type="image/webp" />
                                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img02.jpg"
                                                alt="" width="740" height="499" loading="lazy" />
                                        </picture>
                                    </div>
                                    <div class="method__slider-name">佐々木隆太</div>
                                    <div class="method__slider-work">Tech×複業×大手企業</div>
                                    <p class="method__slider-message">自分だけでは、分からない『本当の強み』を一緒に見つけてきましょう。</p>
                                    <p class="method__slider-text">
                                        ・開発、人事、新規事業、DX人材育成へと社内複業から社内転職・5000人が参加するコミュニティの立ち上げ・運営</p>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="method__item02-right">
                            <!-- 1つ目 -->
                            <div class="method__item02-item wow animated fadeInLeft">
                                <div class="method__item02-img">
                                    <picture>
                                        <source
                                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img01.webp"
                                            type="image/webp" />
                                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img01.jpg"
                                            alt="竹尾奈津子" width="740" height="499" loading="lazy" />
                                    </picture>
                                </div>
                                <div class="method__item02-name">竹尾奈津子</div>
                                <div class="method__item02-work">コーチ×法人経営×ワールドトラベラー</div>
                                <p class="method__item02-message">あなたには無限の可能性がある！一緒に挑戦しましょう！</p>
                                <p class="method__item02-text">
                                    ・月収45円→398万円・営業歴18年以上、成約率79％・月間コーチング数50人以上・他企業で経営者コーチング・著書「自愛が10割」３部門1位</p>
                            </div>
                            <!-- 2つ目 -->
                            <div class="method__item02-item wow animated fadeInLeft" data-wow-delay=".2s">
                                <div class="method__item02-img">
                                    <picture>
                                        <source
                                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img03.webp"
                                            type="image/webp" />
                                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img03.jpg"
                                            alt="辻優樹" width="740" height="499" loading="lazy" />
                                    </picture>
                                </div>
                                <div class="method__item02-name">辻優樹</div>
                                <div class="method__item02-work">大手企業×転職×複業</div>
                                <p class="method__item02-message">人生を変えるキッカケをつくるコーチングを提供します</p>
                                <p class="method__item02-text">・新卒入社でコンビニ店長
                                    SVとして複数店舗マネジメント・キャリアコンサルタント・大手人材会社転職で採用人事・キャリア面談実績500名以上</p>
                            </div>
                            <!-- 3つ目 -->
                            <div class="method__item02-item wow animated fadeInLeft" data-wow-delay=".3s">
                                <div class="method__item02-img">
                                    <picture>
                                        <source
                                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img04.webp"
                                            type="image/webp" />
                                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img04.jpg"
                                            alt="秋田悠貴" width="740" height="499" loading="lazy" />
                                    </picture>
                                </div>
                                <div class="method__item02-name">秋田悠貴</div>
                                <div class="method__item02-work">大手出身×未経験×プロコーチ</div>
                                <p class="method__item02-message">自分の人生に期待しているからこそ不安もある。最高の人生を一緒に作りましょう！</p>
                                <p class="method__item02-text">・新卒入社で400社以上のCM出稿をサポート・自分の可能性を信じて未経験転職2回</p>
                            </div>
                            <!-- 4つ目 -->
                            <div class="method__item02-item wow animated fadeInLeft" data-wow-delay=".4s">
                                <div class="method__item02-img">
                                    <picture>
                                        <source
                                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img02.webp"
                                            type="image/webp" />
                                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img02.jpg"
                                            alt="佐々木隆太" width="740" height="499" loading="lazy" />
                                    </picture>
                                </div>
                                <div class="method__item02-name">佐々木隆太</div>
                                <div class="method__item02-work">Tech×複業×大手企業</div>
                                <p class="method__item02-message">自分だけでは、分からない『本当の強み』を一緒に見つけてきましょう。</p>
                                <p class="method__item02-text">・開発、人事、新規事業、DX人材育成へと社内複業から社内転職・5000人が参加するコミュニティの立ち上げ・運営
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 3つ目 -->
                    <div class="method__item03">
                        <div class="method__item-left">
                            <div class="method__title-en wow animated fadeInUp" data-wow-delay=".6s"><img
                                    src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__title-en03.svg"
                                    alt="METHOD01" width="99" height="27" loading="lazy" /></div>
                            <h3 class="method__sub-title wow animated fadeInUp" data-wow-delay=".6s">体験コーチングは<span
                                    class="text-green">無料</span>なので初めての転職でも安心</h3>
                            <p class="method__text">そもそもコーチングがわからない、初めての転職活動や社内での異動・キャリア形成で何をしていいかよく分からないといった悩みがあると思います。
                                そういった方々のお悩みに応える為にキャリスピのコーチングは全て<span class="text-green">全国どこでもオンラインで対応可能・体験無料</span>。
                            </p>
                        </div>
                        <div class="method__img01">
                            <picture>
                                <source
                                    srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__img03.webp"
                                    type="image/webp" />
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__img03.jpg"
                                    alt="体験コーチングは無料なので初めての転職でも安心" width="370" height="241" loading="lazy" />
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CVエリア -->
        <div class="cv-area wow animated fadeInUp" data-wow-delay=".4s">
            <div class="cv-area__head">
                <div class="cv-area__title">
                    通常5,500円の体験コーチングを<br /><span class="cv-area-bold">LINE追加で<span
                            class="cv-area-orange">無料</span>で受講する</span>
                </div>
            </div>
            <div class="cv-area__button"><a
                    href="https://liff.line.me/1657004383-AmL9D9Yw/landing?follow=%40712eemnx&lp=ZWs5Zu&liff_id=1657004383-AmL9D9Yw"
                    class="button" data-cats="lineFriendsFollowLink" target="_blank">無料体験コーチングを申し込む</a></div>
        </div>
        <!-- よくある質問 -->
        <section class="question" id="question">
            <h2 class="question__title section-title wow animated fadeInUp" data-wow-delay=".4s">
                <span class="section-title--en">Q&A</span>
                よくあるご質問
            </h2>
            <div class="question__items wow animated fadeInUp" data-wow-delay=".4s">
                <dl class="question__accordion">
                    <dt class="question__accordion-title">
                        <p class="question__accordion-number">Q1</p>
                        <p class="question__accordion-text">キャリスピのコーチングは何を目的としたものですか？</p>
                    </dt>
                    <dd class="question__accordion-body">キャリスピでは1on1の面談を行い「あなたの強み・得意なこと」を引き出し、
                        その特性を活かせるキャリアの歩み方や転職先にたどり着くまでの道筋を、 具体的なGOALとアクションプランを設定することで伴走させていただきます。</dd>
                </dl>
                <dl class="question__accordion">
                    <dt class="question__accordion-title">
                        <p class="question__accordion-number">Q2</p>
                        <p class="question__accordion-text">転職を考えていないのですが受講しても大丈夫ですか？</p>
                    </dt>
                    <dd class="question__accordion-body">
                        転職は人生を豊かにするための手段でしかないと考えています。今の仕事にモヤモヤしていて、それを解消したいのであればきっと役に立つと思いますので、まずはぜひ無料体験を受けてみてください！</dd>
                </dl>
                <dl class="question__accordion">
                    <dt class="question__accordion-title">
                        <p class="question__accordion-number">Q3</p>
                        <p class="question__accordion-text">コーチは自分で選ぶことが可能ですか？</p>
                    </dt>
                    <dd class="question__accordion-body">
                        カウンセリング後、サービスを受講することが決定次第、あなたにの特性や今までの経験にマッチしたコーチをキャリスピ側からご提案させていただきます。</dd>
                </dl>
                <dl class="question__accordion">
                    <dt class="question__accordion-title">
                        <p class="question__accordion-number">Q4</p>
                        <p class="question__accordion-text">年齢や性別に制限はありますか</p>
                    </dt>
                    <dd class="question__accordion-body">年齢や性別に制限はなく、今自分自身の中でキャリアに関して悩みがある、
                        前向きに自分を変化させていきたいと思っている方全てが対象になります。（キャリアに対してのコーチングを提供しているので大学生以下の方はご遠慮しております）</dd>
                </dl>
                <dl class="question__accordion">
                    <dt class="question__accordion-title">
                        <p class="question__accordion-number">Q5</p>
                        <p class="question__accordion-text">他社のコーチングとは何が違うのですか？</p>
                    </dt>
                    <dd class="question__accordion-body">
                        認知科学に基づいた人間の原理原則を活用したコーチングであるため「◯◯をやるべき」「◯◯しなければならない」といった提案をするのではなくあなたの「◯◯をやりたい」「◯◯が得意だ」を引き出すためのコーチングになっております。
                    </dd>
                </dl>
                <dl class="question__accordion">
                    <dt class="question__accordion-title">
                        <p class="question__accordion-number">Q6</p>
                        <p class="question__accordion-text">自分には強みや才能がないと思うのですがそれでもコーチングを受けられますか</p>
                    </dt>
                    <dd class="question__accordion-body">
                        自分の強みや得意なことは、自分だけでは見つけられていないだけの可能性が高いです。コーチとの会話を通してあなたの強みや本能レベルで楽しいと思える物事を引き出し、共に言語化していくことで今後のキャリア形成の糧にすることができます。
                    </dd>
                </dl>
            </div>
        </section>
        <!-- 流れ -->
        <section class="flow">
            <h2 class="flow__title section-title">
                <span class="section-title--en">FLOW</span>
                無料体験コーチング<br class="u-mobile" />の流れ
            </h2>
            <div class="flow__items">
                <div class="flow__item wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="flow__texts">
                        <div class="flow__head">
                            <span class="flow__head-en">STEP</span>
                            01
                        </div>
                        <div class="flow__text">キャリスピ公式LINEを<br />お友だち追加</div>
                    </div>
                    <div class="flow__img">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-pc01.webp"
                                media="(min-width: 601px)" type="image/webp" />
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-sp01.jpg"
                                media="(min-width: 601px)" />
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-sp01.webp"
                                type="image/webp" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-sp01.jpg"
                                alt="キャリスピ公式LINEをお友だち追加" width="343" height="140" loading="lazy" />
                        </picture>
                    </div>
                </div>
                <!-- 2つ目 -->
                <div class="flow__item wow animated fadeInUp" data-wow-delay=".6s">
                    <div class="flow__texts">
                        <div class="flow__head">
                            <span class="flow__head-en">STEP</span>
                            02
                        </div>
                        <div class="flow__text">公式LINEから無料<br />カウンセリングを申し込む</div>
                    </div>
                    <div class="flow__img">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-pc02.webp"
                                media="(min-width: 601px)" type="image/webp" />
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-pc02.jpg"
                                media="(min-width: 601px)" />
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-sp02.webp"
                                type="image/webp" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-sp02.jpg"
                                alt="公式LINEから無料カウンセリングを申し込む" width="343" height="140" loading="lazy" />
                        </picture>
                    </div>
                </div>
                <!-- ３つ目 -->
                <div class="flow__item wow animated fadeInUp" data-wow-delay=".7s">
                    <div class="flow__texts">
                        <div class="flow__head">
                            <span class="flow__head-en">STEP</span>
                            03
                        </div>
                        <div class="flow__text">ZOOM(オンライン)で<br />カウンセリングに参加</div>
                    </div>
                    <div class="flow__img">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-pc03.webp"
                                media="(min-width: 601px)" type="image/webp" />
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-pc03.jpg"
                                media="(min-width: 601px)" />
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-sp03.webp"
                                type="image/webp" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-sp03.jpg"
                                alt="ZOOM(オンライン)でカウンセリングに参加" width="343" height="140" loading="lazy" />
                        </picture>
                    </div>
                </div>
                <!-- ４つ目 -->
                <div class="flow__item wow animated fadeInUp" data-wow-delay=".8s">
                    <div class="flow__texts">
                        <div class="flow__head">
                            <span class="flow__head-en">STEP</span>
                            04
                        </div>
                        <div class="flow__text">あなたにあった<br />キャリアプランをご提案</div>
                    </div>
                    <div class="flow__img">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-pc04.webp"
                                media="(min-width: 601px)" type="image/webp" />
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-pc04.jpg"
                                media="(min-width: 601px)" />
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-sp04.webp"
                                type="image/webp" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-sp04.jpg"
                                alt="あなたにあったキャリアプランをご提案" width="343" height="140" loading="lazy" />
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <!-- CVエリア -->
        <div class="cv-area wow animated fadeInUp" data-wow-delay=".4s">
            <div class="cv-area__head">
                <div class="cv-area__title">
                    通常5,500円の体験コーチングを<br /><span class="cv-area-bold">LINE追加で<span
                            class="cv-area-orange">無料</span>で受講する</span>
                </div>
            </div>
            <div class="cv-area__button"><a
                    href="https://liff.line.me/1657004383-AmL9D9Yw/landing?follow=%40712eemnx&lp=ZWs5Zu&liff_id=1657004383-AmL9D9Yw"
                    class="button" data-cats="lineFriendsFollowLink" target="_blank">無料体験コーチングを申し込む</a></div>
        </div>
        <!-- 追従ボタン -->
        <div class="flooting-button">
            <a href="https://liff.line.me/1657004383-AmL9D9Yw/landing?follow=%40712eemnx&lp=ZWs5Zu&liff_id=1657004383-AmL9D9Yw"
                class="button" data-cats="lineFriendsFollowLink" target="_blank">無料体験コーチングを申し込む</a>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__top">
            <a href="https://goal-b.co.jp/privacy/" target="_blank" class="footer__link">プライバシーポリシー</a>
            <a href="https://goal-b.co.jp/about/" target="_blank" class="footer__link">会社概要</a>
        </div>
        <p class="footer__copyright"><span>&copy;</span> 2024 ミズカラ All rights Reserved</p>
    </footer>
    <script>
    new WOW().init();
    </script>

   <script>
(function(){
    setTimeout(function() {
        var cats_gid=1;
        var organic_cid="";
        var can_organic_search="off";
        var can_chatbot="off";
        var cats_options={
            api_parameter_inheritance: "on",
            lineFriendsFollow: {
                useId: 5,
                loginCallbackUrlDomain: "ac003.l-ad.net",
                liffId: "2003655505-QkGAZ9R7",
                line_crm: {}
            }
        };
        var a=document.createElement("script");
        a.src="//ac003.l-ad.net/ck/W3kb52ek756d9ffa/cookie.js";
        a.id="ck_W3kb52ek756d9ffa"; 
        a.addEventListener("load",function(){CATS_GroupCreate(cats_gid,"W3kb52ek756d9ffa", organic_cid, can_organic_search, can_chatbot, cats_options);});
        document.body.appendChild(a);
    }, 1000); // 1秒後に実行
})();
</script> <?php wp_footer(); ?>
</body>

</html>