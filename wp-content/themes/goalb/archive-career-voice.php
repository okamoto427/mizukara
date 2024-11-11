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
    <?php if(is_page('careerspeed')){ ?>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/careerspeed.js" defer></script>
    <?php } ?>
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
    <header class="l-header02 -white l-header-career-voice is-show">
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
                                <span class="sp">5,500円でコーチングを体験する</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="l-container l-container-career-voice">


        <div class="m-pageTitle">
            <h1 class="m-pageTitle-career-voice">
                <span class="english" style="color:#EA5504;">SPOTLIGHT VOICE</span>
                <span class="japanese">お客様の<span class="green" style="color: #EA5504;">声</span></span>
            </h1>
        </div>
        <div class="l-container__inner l-container__inner-career-voice">
            <main class="l-main">
                <div class="m-threecol m-threecol02">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php
    $term = get_first_term('voice_cat');
    ?>
                    <div class="m-threecol__item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="m-threecol__image"><?php the_post_thumbnail(); ?></div>
                            <div class="career-voice-category">
                                <?php 
                                $age_term = get_the_terms($post->ID,'career-voice-age');
                                ;?>
                                <span class="cat">
                                    <?php echo $age_term[0] -> name;?>
                                </span>

                                <?php 
                                $sex_term = get_the_terms($post->ID,'career-voice-sex');
                                ;?>
                                <span class="cat">
                                    <?php echo $sex_term[0] -> name;?>
                                </span>
                                <?php 
                                $job_term = get_the_terms($post->ID,'career-voice-job');
                                ;?>
                                <span class="cat">
                                    <?php echo $job_term[0] -> name;?>
                                </span>

                            </div>
                            <p class="career-voice-excerpt">
                                <?php $text = get_field('career-voice-title'); if( $text ): ?>
                                <?php echo $text; ?>
                                <?php endif; ?>
                            </p>
                        </a>
                    </div>
                    <?php endwhile;else : endif; ?>
                </div>
                <?php get_template_part('parts/pagenavi'); ?>
            </main>

        </div>
    </div>

    <?php get_template_part('parts/bread'); ?>

    <?php get_footer(); ?>