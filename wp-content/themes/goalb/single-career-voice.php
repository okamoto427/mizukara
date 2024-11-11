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
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/slick/slick-theme.css" rel="stylesheet"
        type="text/css">
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/slick/slick.css" rel="stylesheet"
        type="text/css">

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
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/slick/slick.min.js" defer></script>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/common.js?v=12" defer></script>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/animation.js" defer></script>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/careerspeed.js" defer></script>

    <?php wp_head(); ?>
</head>

<body id="top" <?php echo body_class_ex(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55JL373" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php
$divOrH1 = is_front_page() ? 'h1' : 'div';
?>
    <?php
if(is_singular() && get_post_meta($post->ID , 'noindex' , true)){
    echo '<meta name="robots" content="noindex,follow" />';
}
?>
    <script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-cynwsltfrvzxjgqm.js"></script>
    <header class="l-header02 -white l-header-career-voice">
        <div class="l-header02__inner">
            <div class="l-header02__logo">
                <a href="<?php echo esc_url( home_url() ); ?>/careerspeed/"><img
                        src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/careerspeed/logo-new.svg"
                        alt="GOAL-B" /></a>
                <div class="l-header02__text">自分1人では想像し得ない未来へ</div>
            </div>
            <div class="m-hamburger02 sp">
                <div class="m-hamburger__lines">
                    <div>
                        <div></div>
                    </div>
                    <div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="l-header02__menus">
                <nav class="nav-global02">
                    <ul>
                        <li>
                            <a href="<?php echo esc_url( home_url() ); ?>/careerspeed/career-voice/">
                                <span class="english">VOICE</span>
                                <span class="japanese">お客様の声</span>
                            </a>
                        </li>
                        <li>
                            <a href="/careerspeed/#about">
                                <span class="english">ABOUT</span>
                                <span class="japanese">キャリスピについて</span>
                            </a>
                        </li>
                        <li>
                            <a href="/careerspeed/#flow">
                                <span class="english">STEP</span>
                                <span class="japanese">コーチングの流れ</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="nav-header02">
                    <div class="nav-header02__button">
                        <a href="https://liff.line.me/2003655505-A1wBRxrO?sl=0542c4b47b&gender=区分なし&media=c-hp&content=バナー&product=Paid_Direct"
                            target="_blank">
                            <span class="nav-header02__buttonIn">
                                <span class="nav-header02__text01 pc">体験コーチング<br>お申込はこちら</span>
                                <span class="sp">5,500円でコーチングを体験する
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="career-voice-content">
            <div class="career-voice-mv">
                <?php the_post_thumbnail(); ?>
            </div>
            <!-- 
            <div class="career-voice-first-w">
                <p>今回は、「キャリスピを受けて自分の得意なことがわかり、仕事が楽しくなった」というはるなさんにお話を伺いました。</p>
            </div>

            <div class="career-voice-cta">
                <span class="career-voice-cta-sub">自分の得意を知り、好きなことを仕事にするなら</span>
                <a href="">
                    <span>無料で体験コーチングに申込む</span>
                </a>
            </div>
            <section class="career-voice-movie">
                <div class="career-voice__inner">
                    <div class="career-voice-movie-area">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/qX28dgiEBko?si=-NgMJQg2ogczN7-6"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </section>
            <div class="career-voice-text01-w">
                <div class="career-voice__inner">
                    <p>得意なことがわからずにいましたが、<br><span class="bold">好きなことを仕事にできて、仕事が楽しいです！</span>
                    </p>
                </div>
            </div>
            <section class="career-voice-change-w">
                <h3 class="career-voice-change-w__title">キャリスピを受ける前</h3>
                <div class="career-voice__inner">
                    <ul class="career-voice-change-w__texts">
                        <li>・自分の得意なことが分からない</li>
                        <li>・得意／好きを仕事にするのは難しいんだろうなと思っていた</li>
                    </ul>
                </div>
                <h3 class="career-voice-change-w__title --black">キャリスピを受ける前</h3>
                <div class="career-voice-change-w__texts02">
                    <p>自分の得意なことがわかった</p>
                </div>
                <div class="career-voice-change-w__texts02">
                    <p>好きなことを仕事にできた</p>
                </div>
            </section> -->


            <?php if (get_field('voice01')): ?>
            <div class="career-voice-first">
                <p><span>受講のきっかけ</span></p>
                <p>
                    <?php the_field('voice01'); ?>
                </p>
            </div>
            <?php endif; ?>

            <section class="career-voice-change">
                <div class="career-voice__inner career-voice-change__inner">
                    <div class="career-voice-change__wrap">
                        <div class="career-voice-change__before">
                            <p class="career-voice-change__before-ttl">BEFORE</p>
                            <p class="career-voice-change__before-txt">
                                <?php the_field('voice02'); ?>
                            </p>
                        </div>
                        <div class="career-voice-change__after">
                            <p class="career-voice-change__after-ttl">AFTER</p>
                            <p class="career-voice-change__after-txt">
                                <?php the_field('voice03'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="career-voice-cta">
                <span class="career-voice-cta-sub">想像を超えた現実を作るなら</span>
                <a href="">
                    <span>無料で体験コーチングに申込む</span>
                </a>
            </div>

            <section class="career-voice-movie">
                <div class="career-voice__inner">
                    <div class="career-voice-movie-area">
                        <?php the_field('voice-movie'); ?>
                    </div>
                </div>
            </section>
            <section class="career-voice-pressure">
                <h2 class="career-voice-pressure__title">
                    <?php the_field('voice04'); ?>
                </h2>
                <div class="career-voice__inner">
                    <div class="career-voice__contents">
                        <p>
                            <?php the_field('voice05'); ?>
                        </p>
                        <p>
                            <?php the_field('voice06'); ?>
                        </p>
                        <p>
                            <?php the_field('voice07'); ?>
                        </p>
                    </div>
                </div>
            </section>
            <section class="career-voice-recover">
                <div class="career-voice__inner">
                    <h2 class="career-voice-recover__title">
                        <?php the_field('voice08'); ?>
                    </h2>
                    <p class="career-voice-text">
                        <?php the_field('voice09'); ?>
                    </p>
                    <p class="career-voice-text">
                        <?php the_field('voice10'); ?>
                    </p>
                    <p class="career-voice-text">
                        <?php the_field('voice11'); ?>
                    </p>
                    <p class="career-voice-text">
                        <?php the_field('voice12'); ?>
                    </p>

                    <div class="career-voice-recover__img">
                        <img src="<?php the_field('voice13'); ?>" alt="">

                    </div>
                </div>
            </section>
            <section class="career-voice-mind">
                <h2 class="career-voice-mind__title"><?php the_field('voice14'); ?></h2>
                <div class="career-voice__inner">
                    <p class="career-voice-text02">
                        <?php the_field('voice15'); ?>
                    </p>
                    <p class="career-voice-text02">
                        <?php the_field('voice16'); ?>
                    </p>
                    <p class="career-voice-text02"><?php the_field('voice17'); ?></p>
                </div>
            </section>
            <section class="career-voice-passion">
                <h2 class="career-voice-passion__title">
                    <?php the_field('voice18'); ?>
                </h2>
                <div class="career-voice-passion__img">
                    <img src="<?php the_field('voice19'); ?>" alt="">
                </div>
                <div class="career-voice__inner">
                    <div class="career-voice-passion__texts">
                        <p><?php the_field('voice20'); ?></p>
                        <p><?php the_field('voice21'); ?></span>
                        </p>
                    </div>
                    <div class="career-voice-cta">
                        <span class="career-voice-cta-sub">想像を超えた現実を作るなら</span>
                        <a href="">
                            <span>無料で体験コーチングに申込む</span>
                        </a>
                    </div>
                </div>
            </section>

        </div>

    </main>
    <?php get_template_part('parts/bread'); ?>

    <?php get_footer(); ?>