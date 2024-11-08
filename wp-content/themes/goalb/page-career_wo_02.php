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
    <?php if(is_404()){ ?>
    <meta name=”robots” content=”noindex” /><?php } ?>

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
    <meta property="og:title" content="もう同じことで悩みたくない！一人で抱え込むのは今日で終わり！">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:type" content="<?php echo $pageType; ?>">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:site_name" content="<?php echo $siteName; ?>">
    <meta content="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/sns.png"
        property="og:image">

    <meta name="twitter:card" content="summary_large_image" />

    <title>結局同じことで悩んでいる、、、もっと充実した日々を送りたいだけなのに</title>
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
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/css/styles.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&family=Prompt:wght@300;400;500;600;700;800&display=swap"
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
    <?php wp_head(); ?>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55JL373"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <main>
        <div class="wrapper">
            <!-- メインビジュアル -->
            <div class="mv">
                <h1 class="mv__text ">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/mv-text02.png"
                        alt="結局同じことで悩んでいる、、、もっと充実した日々を送りたいだけなのに" width="647" height="283" />
                </h1>
                <div class="mv__img">
                    <picture>
                        <source
                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/mv.webp"
                            type="image/webp" />
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/mv.png"
                            alt="メインビジュアル画像" width="750" height="957" />
                    </picture>
                </div>
            </div>
            <!-- CVボタン -->
            <div class="cv-area">
                <div class="cv-area__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/cv-area__text.svg"
                        alt="キャリアコーチング相談受付中" width="542" height="50" />
                </div>
                <a href="https://liff.line.me/1657004383-AmL9D9Yw/landing?follow=%40712eemnx&lp=rkJKbw&liff_id=1657004383-AmL9D9Yw"
                    class="cv-area__button" target="_blank"><img
                        src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/cv-area__button.svg"
                        alt="今なら5500円が無料に！体験コーチングのご予約はこちら" width="680" height="163" /></a>
            </div>
            <!-- 本当はこんな理想の自分に -->
            <section class="future">
                <h2 class="future__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/future__text.svg"
                        alt="今の自分を卒業して本当はこんな理想の自分になりたくないですか？" width="578" height="180" loading="lazy" />
                </h2>
                <div class="future__img">
                    <picture>
                        <source
                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/future__img.webp"
                            type="image/webp" loading="lazy" />
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/future__img.png"
                            alt="人目や常識にとらわれないで自分軸で生きられている。朝起きるのが辛くなく毎日ワクワクできている。友人やパートナーとの時間、1人の時間ともに十分確保できている。自分にとって「理想の人生」が明確になりなりたい自分に"
                            width="750" height="1426" loading="lazy" />
                    </picture>
                </div>
            </section>
            <!-- キャリスピなら叶えられるんです！ -->
            <section class="slider-area">
                <h2 class="slider-area__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/slider-area__text.svg"
                        alt="キャリスピ なら
              叶えられるんです！" width="573" height="198" loading="lazy" />
                </h2>
                <div class="swiper slider-area__slide">
                    <div class="swiper-wrapper">
                        <!-- スライダー1枚目 -->
                        <div class="swiper-slide">
                            <picture>
                                <source
                                    srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/slider-area__slide01.webp"
                                    type="image/webp" loading="lazy" />
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/slider-area__slide01.png"
                                    alt="Aさん
                    やりたいことがわからなかった やりたいことがわからなかったけど、キャリアコーチングで本当の自分のやりたいことと強みがわかって、毎日がワクワクする日々になりました。" width="622"
                                    height="570" />
                            </picture>
                        </div>
                        <!-- スライダー2枚目 -->
                        <div class="swiper-slide">
                            <picture>
                                <source
                                    srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/slider-area__slide02.webp"
                                    type="image/webp" />
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/slider-area__slide02.png"
                                    alt="Bさん
                    一歩踏みだす勇気が出なかった 小さいときから周りにも恥ずかしくて言えない憧れの仕事があったのですが、自信がなくて周りに言えませんでした。しかし担当いただいたコーチには心の奥底の思いを伝えられ、相談していく中で一歩踏み出す勇気が芽生えました。"
                                    width="622" height="570" loading="lazy" />
                            </picture>
                        </div>
                        <!-- スライダー3枚目 -->
                        <div class="swiper-slide">
                            <picture>
                                <source
                                    srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/slider-area__slide03.webp"
                                    type="image/webp" loading="lazy" />
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/slider-area__slide03.png"
                                    alt="Cさん
                    “人生の進む方向がわからなくなった”仕事も慣れてきて、社会人になった当初よりも充実感を感じるようになったものの、仕事に対して急に無気力に。そんな時にコーチングで、コーチと一緒に自分の「どう生きたいのか」に向き合う時間になり、進むべき方向が自分の中で明確になりました。"
                                    width="622" height="570" loading="lazy" />
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </section>
            <!-- 現在コーチング受講お申し込み1000人突破！ -->
            <section class="achivement">
                <div class="achivement__img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/achivement__img.png"
                        alt="現在コーチング受講お申し込み1000人突破！コーチング受講者顧客満足度脅威の5点満点中4.72 ※1  ※1 2023年1月〜12月のセッション終了受講者(179名) 最終アンケートの数値結果"
                        width="750" height="535" loading="lazy" />
                </div>
            </section>
            <!-- 弊社COO山宮健太朗コーチング徹底解説動画・視聴回数
            15万回突破！ -->
            <section class="movie-area">
                <h2 class="movie-area__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/movie-area__text.svg"
                        alt="弊社COO山宮健太朗
            （YouTube登録者数2.5万人突破）
            コーチング徹底解説動画・視聴回数
            15万回突破！" width="639" height="304" loading="lazy" />
                </h2>
                <div class="movie-area__img">
                    <picture>
                        <source
                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/movie-area__img.webp"
                            type="image/webp" loading="lazy" />
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/movie-area__img.jpg"
                            alt="コーチング徹底解説動画サムネイル" width="650" height="360" loading="lazy" />
                    </picture>
                </div>
            </section>
            <!-- あなたの未来をお手伝いします！ -->
            <section class="help">
                <h2 class="help__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/help__text.svg"
                        alt="あなたの未来をお手伝いします！" width="653" height="192" loading="lazy" />
                </h2>
                <div class="help__img">
                    <picture>
                        <source
                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/help__img.webp"
                            type="image/webp" loading="lazy" />
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/help__img.png"
                            alt="旅しながら自由に働きたい。仕事もプライベートも。未経験転職。
                充実した自分に" width="750" height="1583" loading="lazy" />
                    </picture>
                </div>
            </section>
            <!-- CVボタン -->
            <div class="cv-area">
                <div class="cv-area__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/cv-area__text.svg"
                        alt="キャリアコーチング相談受付中" width="542" height="50" loading="lazy" />
                </div>
                <a href="https://liff.line.me/1657004383-AmL9D9Yw/landing?follow=%40712eemnx&lp=rkJKbw&liff_id=1657004383-AmL9D9Yw"
                    class="cv-area__button" target="_blank"><img
                        src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/cv-area__button.svg"
                        alt="今なら5500円が無料に！体験コーチングのご予約はこちら" width="680" height="163" loading="lazy" /></a>
            </div>
            <!-- 今のあなたこういう状況に陥ってませんか？-->
            <section class="question01">
                <div class="question__img01">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/question__img01.png"
                        alt="今のあなた
                こういう状況に陥ってませんか？" width="750" height="836" loading="lazy" />
                </div>
            </section>
            <!-- 会社で居場所がないように-->
            <section class="question02">
                <div class="question__img02">
                    <picture>
                        <source
                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/question__img02.webp"
                            type="image/webp" loading="lazy" width="552" height="701" />
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/question__img.png"
                            alt="今のあなた
                こういう状況に陥ってませんか？" width="750" height="953" loading="lazy" />
                    </picture>
                </div>
            </section>
            <!-- 本当に苦しいですよね…-->
            <section class="pain">
                <h2 class="pain__title">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/pain__title.svg"
                        alt="会社で居場所がないように感じる！今の自分には
              価値がないからもっと
              がんばらなきゃ！わけもなく涙が
              出てきてしまう,,,周囲から
              「仕事ができない」と
              思われていそうで怖い" width="609" height="352" loading="lazy" />
                </h2>
                <div class="pain__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/pain__text.svg"
                        alt="ではなぜこのような
            状況に陥っているのか、それは…自分のやりたいこと
            強みを生かせる職種・環境ではないから。あなた自身の理想の
            生活や働き方が実現でき、今よりもっと
            充実した日々になるでしょう！" width="608" height="520" loading="lazy" />
                </div>
            </section>
            <!-- では…どうやって、やりたいことと強みを見つけるのか？-->
            <section class="recommend">
                <h2 class="recommend__title">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/recommend__title.svg"
                        alt="では…
            どうやって、
            やりたいことと強みを見つけるのか？" width="532" height="125" loading="lazy" />
                </h2>
                <div class="recommend__img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/recommend__img.svg"
                        alt="才能やwant toを特定することがおすすめ！" width="692" height="350" loading="lazy" />
                </div>
            </section>
            <!-- キャリアコーチング「キャリスピ」が選ばれる-->
            <section class="reason">
                <h2 class="reason__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/reason__text.svg"
                        alt="キャリアコーチング
            「キャリスピ」が選ばれるキャリスピ
            メソッド3つの理由" width="621" height="207" loading="lazy" />
                </h2>
                <div class="reason__images">
                    <div class="reason__image">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/reason__img01.png"
                            alt="あなたの強みやあなたらしさを引き出すことに特化" width="654" height="591" loading="lazy" />
                    </div>
                    <div class="reason__image">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/reason__img02.png"
                            alt="実績多数の精鋭たちによるクオリティの高いコーチングが可能" width="654" height="591" loading="lazy" />
                    </div>
                    <div class="reason__image">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/reason__img03.png"
                            alt="体験コーチングは無料なので、初めての転職でも安心！" width="654" height="591" loading="lazy" />
                    </div>
                </div>
            </section>
            <!-- 一人で抱え込むのはもうやめよう！-->
            <section class="stop">
                <h2 class="stop__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/stop__text.svg"
                        alt="一人で抱え込むのはもうやめよう！なぜなら、自分一人では思考の限界があるから。" width="640" height="212" loading="lazy" />
                </h2>
                <div class="stop__img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/stop__img.png"
                        alt="悩みの中で同じところをずっとループして解決策がなかなか出てこなくて落ち込みモードからなかなか抜け出せないってことよくありますよね？" width="702" height="394"
                        loading="lazy" />
                </div>
            </section>
            <!-- CVエリア02-->
            <section class="cv-area02">
                <h2 class="cv-area02__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/cv-area02__text.svg"
                        alt="そうならないために！
            ぜひ私たち、キャリアコーチを
            頼ってみませんか？" width="559" height="168" loading="lazy" />
                </h2>
                <div class="cv-area">
                    <div class="cv-area__text">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/cv-area__text.svg"
                            alt="キャリアコーチング相談受付中" width="542" height="50" loading="lazy" />
                    </div>
                    <a href="https://liff.line.me/1657004383-AmL9D9Yw/landing?follow=%40712eemnx&lp=rkJKbw&liff_id=1657004383-AmL9D9Yw"
                        class="cv-area__button" target="_blank"><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/cv-area__button.svg"
                            alt="今なら5500円が無料に！体験コーチングのご予約はこちら" width="680" height="163" loading="lazy" /></a>
                </div>
            </section>
            <!-- コーチ紹介-->
            <section class="coach">
                <h2 class="coach__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/coach__text.svg"
                        alt="コーチ紹介" width="240" height="46" loading="lazy" />
                </h2>
                <div class="coach__images">
                    <div class="coach__image">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/coach__img01.webp"
                                type="image/webp" width="680" height="817" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/coach__img01.png"
                                alt="コーチ森育子" width="680" height="817" loading="lazy" />
                        </picture>
                    </div>
                    <div class="coach__image">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/coach__img02.webp"
                                type="image/webp" width="680" height="817" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/coach__img02.png"
                                alt="コーチ島田隆則" width="680" height="817" loading="lazy" />
                        </picture>
                    </div>
                    <div class="coach__image">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/coach__img03.webp"
                                type="image/webp" width="680" height="817" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/coach__img03.png"
                                alt="コーチ平岩小絵" width="680" height="817" loading="lazy" />
                        </picture>
                    </div>
                </div>
            </section>
            <!-- 流れ -->
            <section class="flow">
                <h2 class="flow__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/flow__text.svg"
                        alt="たった30秒で日程予約まで完了！無料コーチングまでの流れ" width="573" height="159" loading="lazy" />
                </h2>
                <div class="flow__img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/flow__img.png"
                        alt="STEP1 キャリスピ公式LINE追加 STEP2 日程を選択する STEP3 体験申し込み確定" width="680" height="378"
                        loading="lazy" />
                </div>
            </section>
            <!-- 踏み出せない -->
            <section class="push">
                <div class="push__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/push__text.svg"
                        alt="ここまできたけど
              まだ「コーチング」が何か
              わからなくて
              体験セッションに踏み出せない方！" width="575" height="219" loading="lazy" />
                </div>
            </section>
            <!-- コーチングとカウンセリングって何が違う？ -->
            <div class="difference">
                <h2 class="difference__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/difference__text.svg"
                        alt="コーチングとカウンセリングって
            何が違う？" width="594" height="101" loading="lazy" />
                </h2>
                <div class="difference__img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/difference__img.png"
                        alt="コーチング 強みと才能を引き出し、自分望む人生やキャリアにおける未来の目標を達成するためのサポート カウンセリング 話を聞いてもらいながら過去の問題に焦点を当てて、気持ちの整理を行うことを重視したアプローチ"
                        width="727" height="506" loading="lazy" />
                </div>
            </div>
            <!-- ポイント -->
            <section class="point">
                <h2 class="point__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/point__text.svg"
                        alt="つまり
              「コーチング」とは、
              自分の人生の未来について考えていく場！" width="670" height="163" loading="lazy" />
                </h2>
                <p class="point__sub">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/point__sub.svg"
                        alt="※人生を大きく進めるために、過去と向き合うことが大事だと判断した際は、過去を取り扱うセッションを行う場合もあります。
              現状の状態をお聞きした上で、
              あなたの理想の人生設計に応じたコーチングを行います。" width="589" height="90" loading="lazy" />
                </p>
            </section>
            <!-- よくある質問 -->
            <section class="accordion">
                <h2 class="accordion__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/question__text.png"
                        alt="よくある質問" width="288" height="46" loading="lazy" />
                </h2>
                <div class="accordion__accordions">
                    <!-- アコーディオン1つ目 -->
                    <div class="accordion__accordion">
                        <h3 class="accordion__accordion-title">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/question__accordion-title01.png"
                                alt="MIZUKARAの別サービス、コーチングとの違いは？" width="650" height="122" loading="lazy" />
                        </h3>
                        <div class="accordion__accordion-body">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/question__accordion-body01.png"
                                alt="コーチングでは、基本的に問いをベースに行うので「アドバイス」をすることはしません。今回のサービス「キャリスピ」では、コーチングのような関わり方もしつつ、
                  ・強み、やりたいことの特定
                  ・現在の人生に対しての満足度
                  ・今後のライフ/キャリアプランについて
                  など、順を追って深掘りさせていただき、本当に得たい仕事/人生を得るために、具体的な行動も含め、一緒に伴走します。
                  " width="650" height="339" loading="lazy" />
                        </div>
                    </div>
                    <!-- アコーディオン２つ目 -->
                    <div class="accordion__accordion">
                        <h3 class="accordion__accordion-title">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/question__accordion-title02.png"
                                alt="転職を考えていなくても良いですか？" width="650" height="77" loading="lazy" />
                        </h3>
                        <div class="accordion__accordion-body">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/question__accordion-body02.png"
                                alt="転職は手段でしかないと考えています。今の仕事にモヤモヤしていて、それを解消したいのであればきっと役に立つと思いますので、まずはぜひ無料体験を受けてみてください！
                  " width="650" height="188" loading="lazy" />
                        </div>
                    </div>
                    <!-- アコーディオン3つ目 -->
                    <div class="accordion__accordion">
                        <h3 class="accordion__accordion-title">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/question__accordion-title03.png"
                                alt="対面、オンライン選べますか？コーチングを受講できない人はいますか？" width="650" height="122" loading="lazy" />
                        </h3>
                        <div class="accordion__accordion-body">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/question__accordion-body03.png"
                                alt="基本的に全てオンラインで行います。
                  以下項目に当てはまる方は対象外となります。ご了承ください。
                  ・学生の方
                  ・経営者の方（ご自身で会社経営している方）
                  " width="650" height="218" loading="lazy" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- 解決 -->
            <section class="solution">
                <h2 class="solution__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/solution__text.svg"
                        alt="不安や悩みってひとに話すと
              案外スッキリして前に進んだような
              感覚を覚えますよね。でも実際は解決していなくて
              また同じことで悩む。
                " width="573" height="309" />
                </h2>
                <div class="solution__img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/solution__img.svg"
                        alt="弊社が提供する
              「コーチング」は
              認知科学をもとに人間の仕組みを
              理解した上でセッションを行います。
              " width="584" height="275" />
                </div>
                <div class="solution__main">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/solution__main.svg"
                        alt="そのため、あなたの根本のお悩みを
              “解決”に導き
              圧倒的に人生が進んでいく。ぜひ一回で変わっていく感覚を
              味わって欲しい。
              " width="672" height="374" />
                </div>
            </section>
            <!-- 最後 -->
            <div class="end">
                <h2 class="end__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/end__text.svg"
                        alt="無料体験コーチングセッションで
              あなたとお会いできることを楽しみにしています
                  " width="698" height="81" />
                </h2>
            </div>
            <!-- CVボタン -->
            <div class="cv-area">
                <div class="cv-area__text">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/cv-area__text.svg"
                        alt="キャリアコーチング相談受付中" width="542" height="50" />
                </div>
                <a href="https://liff.line.me/1657004383-AmL9D9Yw/landing?follow=%40712eemnx&lp=rkJKbw&liff_id=1657004383-AmL9D9Yw"
                    class="cv-area__button" target="_blank"><img
                        src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/images/cv-area__button.svg"
                        alt="今なら5500円が無料に！体験コーチングのご予約はこちら" width="670" height="161" /></a>
            </div>
            <!-- footer -->
            <footer class="footer">
                <div class="footer__main">
                    <p><a href="https://MIZUKARA.co.jp/" target="_blank">会社概要</a></p>
                    <p class="footer__tokusho"><a href="https://MIZUKARA.co.jp/law/" target="_blank">特定商取引法上の表記</a></p>
                    <p class="footer__privacy"><a href="https://MIZUKARA.co.jp/privacy/" target="_blank">プライバシーポリシー</a>
                    </p>
                    <p><a href="https://MIZUKARA.co.jp/contact/" target="_blank">お問い合わせ</a></p>
                </div>
                <p class="footer__ng">掲載の情報・画像など、すべてのコンテンツの無断複写・転載を禁じます。</p>
                <p class="footer__adress">東京都港区虎ノ門4-1-1 神谷町トラストタワー 23F</p>
                <p class="footer__copyright"><big>&copy;</big> 2024 株式会社MIZUKARA. All Rights Reserved.</p>
            </footer>
        </div>
    </main>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script defer src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_wo/js/script.js"></script>
    <script>
    new WOW().init();
    </script>
    <?php wp_footer(); ?>
</body>

</html>