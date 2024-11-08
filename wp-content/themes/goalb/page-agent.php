<?php

$description = isset($args['description']) ? $args['description'] : '';
if(get_field('meta-description')){
  $description = get_field('meta-description');
}

$autoTitle = new AutoTitle();
$title = $autoTitle->getTitle();
$siteName = get_bloginfo('name');
$pageType = 'website';
if ( is_single() ) {
  $pageType = 'article';
}
// 現在の URL
$url = (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width" name="viewport">
    <meta content="telephone=no" name="format-detection">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="<?php echo $description; ?>" name="description">

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-55JL373');
    </script>
    <!-- End Google Tag Manager -->

    <!--  OGPの設定  -->
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:type" content="<?php echo $pageType; ?>">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:site_name" content="<?php echo $siteName; ?>">
    <meta content="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/sns.png"
        property="og:image">

    <meta name="twitter:card" content="summary_large_image" />

    <title><?php echo $title; ?></title>
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
    <!--  CSS  -->
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/reset.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/style.css?v=37" rel="stylesheet">
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/animation.css?v=5" rel="stylesheet">
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/editor-style.css" rel="stylesheet">
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" />
    <!-- wow.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&family=Prompt:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SHWMZXR15Q"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-SHWMZXR15Q');
    </script>

    <!--  JavaScript  -->
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/jquery-3.7.0.min.js" defer></script>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/slick/slick.min.js" defer></script>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/common.js?v=12" defer></script>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/animation.js" defer></script>
    <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
    <?php if(is_page('careerspeed')){ ?>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/careerspeed.js" defer></script>
    <?php } ?>
    <?php wp_head(); ?>
    <style>
    html {

        margin-top: 0 !important;
    }
    </style>
    <script>
    (function(d) {
        var config = {
                kitId: 'aiy4wsw',
                scriptTimeout: 3000,
                async: true
            },
            h = d.documentElement,
            t = setTimeout(function() {
                h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
            a = this.readyState;
            if (f || a && a != "complete" && a != "loaded") return;
            f = true;
            clearTimeout(t);
            try {
                Typekit.load(config)
            } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s)
    })(document);
    </script>
</head>



<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55JL373" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="agent-header">
    <div class="agent-header__inner">
        <a href="#" class="agent-header__logo">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/agent/logo.svg"
                alt="自己維新エージェント">
        </a>
        <div class="agent-header__button"><a href="https://cbgw.kuzen.io/line_auth/liff_fwd_to_login?sl=705c95e064"
                target="_blank">
                <span class="agent-header__button--free">無料</span>
                <span class="agent-header__button--career">キャリア相談</span><br>お申込はこちら</a>
        </div>
    </div>

</header>
<div class="agent-mv splide">

    <div class="splide__track">
        <div class="agent-mv__slider splide__list">
            <div class="splide__slide --01" width="2560" height="1376">

                <!-- <picture>
                    <source srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/agent/mv01.jpg"
                        media="(min-width: 768px)" width="2560" height="1376" />
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/agent/mv01-sp.jpg"
                        alt="">
                    <picture> -->
            </div>
            <div class="splide__slide --02" width="2560" height="1376">

                <!-- <picture>
                    <source srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/agent/mv01.jpg"
                        media="(min-width: 768px)" width="2560" height="1376" />
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/agent/mv01-sp.jpg"
                        alt="">
                    <picture> -->
            </div>

        </div>
    </div>
    <div class="agent-mv__items">
        <h1 class="agent-mv__head">
            <span class="mvtext01 js-text">GOALから逆算した</span><br class="sp">
            <span class="mvtext02 js-text02">転職を。</span>
            <div class="agent-mv__button">
                <a href="https://cbgw.kuzen.io/line_auth/liff_fwd_to_login?sl=705c95e064"
                    target="_blank">無料でキャリア相談する</a>
                <p class="agent-mv__button-text">すぐに転職をしたいと考えてる方はもちろん、<br>
                    転職するかどうか決めてないという方も<br>気軽に話せるよう、無料キャリア相談を用意しています。</p>
            </div>
        </h1>
    </div>

</div>
<section class="agent-message">
    <!-- <h2 class="agent-title agent-message__title">
        <span>Message</span><br>
        メッセージ
    </h2> -->
    <div class="agent-message__inner">
        <div class="agent-message__texts">
            <p>
                "本質的な対人支援がしたい。"<br>そんな想いから生まれたのが<br class="sp">自己維新エージェントです。
            </p>
            <p>転職市場が拡大するなか、<br class="pc">理想の転職ができている方は一握りになります。</p>
            <p>それはなぜか。</p>
            <p>多くの人が、<br>「どう生きていきたいか？」や<br>「どのように在りたいか？」を決めず、</p>
            <p>年収や職種などの条件だけを見て<br class="sp">転職を決めるからです。</p>
            <p>自己維新エージェントでは、<br>理想の転職実現に向けて、<br>コーチングスキルを活かします。</p>
            <p>まずは、<br>「どう生きていきたいか？」や<br>「どのように在りたいか？」を<br class="sp">決めます。</p>
            <p>その後、自己理解から転職活動まで<br class="pc">コーチングスキルを持つアドバイザーが対応し、<br class="pc">理想の転職の実現に向けて徹底的に伴走します。</p>
            <p>あくまで転職は「理想のGOALを手にいれる」一つの手段です。<br>
                GOALを手にする最適な手段が転職とは別の方法であれば、<br class="pc">その方法を提案することをお約束します。</p>
            <p>私達はコーチング×転職エージェントの第一人者として、<br>「自らの可能性を信じる」皆さんを全力でサポートしてまいります。</p>
        </div>
    </div>
</section>
<!-- サービスの流れ -->
<section class="agent-services">
    <h2 class="agent-title agent-services__title">
        <span>Service</span><br>
        サービスの流れ
    </h2>
    <div class="agent-services__inner">
        <div class="agent-services__items">
            <!-- 01 -->
            <div class="agent-services__item">
                <div class="agent-services__texts">
                    <div class="agent-services__top">
                        <p class="agent-services__number -01">01</p>
                        <h3 class="agent-services__head">転職理由の棚卸し</h3>
                    </div>
                    <p class="agent-services__text">
                        「なぜ、転職するに至ったのか？」を徹底的にヒアリングし、深掘りします。深掘りを通じて、自分だけでは気づけなかった”本当に転職したい理由”に気づいていただけます。
                    </p>
                </div>
                <div class="agent-services__img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/agent/services01.jpg"
                        alt="パソコンで仕事をしている男性" loading="lazy" class="service__image">
                </div>
            </div>
            <!-- 02 -->
            <div class="agent-services__item agent-services__item--reverse">
                <div class="agent-services__texts">
                    <div class="agent-services__top">
                        <p class="agent-services__number">02</p>
                        <h3 class="agent-services__head --02">方向性を決めるための<br class="pc">自己理解</h3>
                    </div>
                    <p class="agent-services__text">
                        転職の方向性を決めるために徹底的に自己理解をします。コーチングカンパニーだからこそできる「本質的な自己理解」を通じて、あなたに最適なキャリアの軸を見出していきます。
                    </p>
                </div>
                <div class="agent-services__img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/agent/services02.jpg"
                        alt="パソコンで仕事をしている男性" loading="lazy" class="service__image">
                </div>
            </div>
            <!-- 03 -->
            <div class="agent-services__item --03">
                <div class="agent-services__texts">
                    <div class="agent-services__top">
                        <p class="agent-services__number">03</p>
                        <h3 class="agent-services__head --03">GOAL設定</h3>
                    </div>
                    <p class="agent-services__text">
                        科学的なコーチング理論に基づいたGOALを設定します。転職を成功させることはもちろんのこと、転職の先でどのような人生を過ごしていきたいかまで包括して設定していきます。
                    </p>
                </div>
                <div class="agent-services__img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/agent/services03.jpg"
                        alt="パソコンで仕事をしている男性" loading="lazy" class="service__image">
                </div>
            </div>
            <!-- 04 -->
            <div class="agent-services__item agent-services__item--reverse">
                <div class="agent-services__texts">
                    <div class="agent-services__top">
                        <p class="agent-services__number">04</p>
                        <h3 class="agent-services__head agent-services__head--fourth --04">転職活動<br>
                            <span>（求人提案,面接対策,書類添削）</span>
                        </h3>
                    </div>
                    <p class="agent-services__text agent-services__text--fourth">
                        転職を進めるにあたっての求人提案や面接対策、書類対策まで徹底的にサポートします。認知科学に基づいたコーチングスキルを持ったCAが真摯なサポートを通じて、転職成功に導きます。
                    </p>
                </div>
                <div class="agent-services__img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/agent/services04.jpg"
                        alt="パソコンで仕事をしている男性" loading="lazy" class="service__image">
                </div>
            </div>
            <!-- 05 -->
            <div class="agent-services__item">
                <div class="agent-services__texts">
                    <div class="agent-services__top">
                        <p class="agent-services__number">05</p>
                        <h3 class="agent-services__head --05">内定</h3>
                    </div>
                    <p class="agent-services__text">
                        ここまでの過程を通じて、あなたの理想の転職を実現できるよう、内定までしっかりサポートさせていただきます。入社して終わりになる転職ではなく、あなたの人生のGOALまで考えぬいた転職実現まで、徹底的に伴走します。
                    </p>
                </div>
                <div class="agent-services__img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/agent/services05.jpg"
                        alt="パソコンで仕事をしている男性" loading="lazy" class="service__image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTAエリア -->
<div class="agent-cta-area">
    <p class="agent-cta-area__title">まずはお気軽に<br class="sp">無料キャリア相談に<br class="sp">お越しください</p>
    <p class="agent-cta-area__sub-title">すぐに転職をしたいと考えてる方はもちろん、<br class="sp">転職するかどうか決めてないという方も<br>気軽に話せるよう、<br
            class="sp">無料キャリア相談を用意しています。</p>
    <div class="agent-cta-area__button">
        <a href="https://cbgw.kuzen.io/line_auth/liff_fwd_to_login?sl=705c95e064" target="_blank">無料でキャリア相談する</a>
    </div>
</div>
<!-- 会社代表メッセージ（村岡） -->
<section class="agent-messages agent-messages--ceo">
    <h2 class="agent-title agent-services__title">
        <span>Message</span><br>
        メッセージ
    </h2>
    <div class="agent-messages__inner">
        <div class="agent-messages__contents">
            <div class="agent-messages__img">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/agent/muraoka.jpg"
                    alt="会社代表の画像">
                <p>株式会社ミズカラ<br>代表取締役 村岡大樹</p>
            </div>
            <div class="agent-messages__text">
                <h3>転職はあくまで手段。<br class="sp">ゴールではありません。<br>これからの人生を最高の人生に。</h3>
                <p>「自分の人生を今よりもっと良くしたい。」</p>
                <p>このページを見てくれているあなたは、そんな想いを持っているのではないかと思います。その想いを実際に実現させていく、その一つの形として転職という手段があります。</p>
                <p>
                    転職は人生においての転機となる大きなイベントで、エネルギーを使います。なぜエネルギーを使うかというと環境や人間関係、収入が変わってしまうからです。それはつまり昨日までの自分から生まれ変わるということです。
                </p>
                <p>今までの自分を根っこから変える覚悟はありますか？<br>それとも今までの自分の延長線のキャリアを望みますか？</p>
                <p>後者の場合は他社のエージェントを頼るといいかもしれません。<br>もしあなたが前者の場合、我々はそのチャレンジの最大の味方であることを約束します。自分を維新する。人生を自ら変える。それが自己維新エージェントです。
                </p>

            </div>
        </div>
    </div>
</section>
<!-- 会社代表メッセージ（井上） -->
<section class="agent-messages agent-messages--manager">

    <div class="agent-messages__inner">
        <div class="agent-messages__contents agent-messages__contents--inoue">
            <div class="agent-messages__img">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/agent/inoue.jpg"
                    alt="事業責任者の画像">
                <p>自己維新エージェント<br>事業責任者 井上慈温</p>
            </div>
            <div class="agent-messages__text">
                <h3>自らの可能性を信じるあなたの、<br>最大の応援者として居続けます。</h3>

                <p>「あなたのGOALは何ですか？」<br>そう聞かれても答えられない方が多いと思います。</p>
                <p>
                    皆さんもご存知の通り人生に正解はありません。<br
                        class="pc">ただ、今までの人生を振り返ってみてください。<br>あなたが覚えていることは何ですか？<br>一生懸命に行ったことや熱中したことが脳に浮かんでいると思います。
                </p>
                <p>もう一度、人生で熱中できるモノを。<br>自己理解からGOAL設定、職務経験の棚卸し、書類作成、面接対策、企業研究など徹底的な伴走で転職サポートをさせていただきます。</p>
                <p>私達はあなたの人生に正面から向き合います。</p>

            </div>
        </div>
    </div>
</section>
<!-- CTAエリア -->
<div class="agent-cta-area">
    <p class="agent-cta-area__title">まずはお気軽に<br class="sp">無料キャリア相談に<br class="sp">お越しください</p>
    <p class="agent-cta-area__sub-title">すぐに転職をしたいと考えてる方はもちろん、<br class="sp">転職するかどうか決めてないという方も<br>気軽に話せるよう、<br
            class="sp">無料キャリア相談を用意しています。</p>
    <div class="agent-cta-area__button">
        <a href="https://cbgw.kuzen.io/line_auth/liff_fwd_to_login?sl=705c95e064" target="_blank">無料でキャリア相談する</a>
    </div>
</div>
<div class="agent-movie-area">
    <div class="agent-movie-area__wrap">
        <div class="agent-movie-area__movie">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/MKXkI38ztMU?si=o57zBgQNHKVtR2Q5"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="agent-movie-area__movie">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/egghJXrkGhQ?si=KgFniS99zSYchYHf"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.agent-header');
    const targetSection = document.querySelector('.agent-mv');

    window.addEventListener('scroll', function() {
        const targetPosition = targetSection.getBoundingClientRect().bottom;
        if (targetPosition <= 0) {
            header.classList.add('white');
        } else {
            header.classList.remove('white');
        }
    });
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script>
// 対象の要素を取得
const paragraph = document.querySelector(".js-text");

// テキストコンテンツを取得
const textContent = paragraph.textContent;

// テキストコンテンツを一文字ずつ分割して<span>タグで囲み、最初の4文字に特別なクラスを付与
const newTextContent = [...textContent]
    .map((char, index) =>
        index < 4 ?
        `<span class="en">${char}</span>` // 最初の4文字にクラスを付与
        :
        `<span>${char}</span>` // それ以降は通常のクラス
    )
    .join("");

// 新しい文字列をHTMLに挿入
paragraph.innerHTML = newTextContent;

// GSAPアニメーション
gsap.fromTo(
    ".js-text span", // アニメーションさせる要素
    {
        autoAlpha: 0, // アニメーション開始前は透明
        y: 20, // 20px下に移動
    }, {
        autoAlpha: 1, // アニメーション後は出現(透過率0)
        y: 0, // 20px上に移動

        stagger: 0.08, // 0.2秒遅れて順番に再生
        delay: 1.2,
    }
);
</script>
<script>
// 対象の要素を取得
const paragraph02 = document.querySelector(".js-text02");

// テキストコンテンツを取得
const textContent02 = paragraph02.textContent;

// テキストコンテンツを一文字ずつ分割して<span>タグで囲む
const newTextContent02 = [...textContent02]
    .map((char) =>
        `<span>${char}</span>` // すべての文字を通常のクラスで囲む
    )
    .join("");

// 新しい文字列をHTMLに挿入
paragraph02.innerHTML = newTextContent02;

// GSAPアニメーション
gsap.fromTo(
    ".js-text02 span", // アニメーションさせる要素
    {
        autoAlpha: 0, // アニメーション開始前は透明
        y: 100, // 50px下に移動
    }, {
        autoAlpha: 1, // アニメーション後は出現(透過率0)
        y: 0, // 元の位置に移動
        duration: 2, // アニメーションの持続時間
        delay: 2.5,
        ease: 'power2.out'
    }
);
</script>

<?php get_footer(); ?>