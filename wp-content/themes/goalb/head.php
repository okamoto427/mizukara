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
    <?php if(!is_front_page() && !is_home()): ?>
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/reset.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/style.css?v=37" rel="stylesheet">
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/animation.css?v=5" rel="stylesheet">
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/editor-style.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/slick/slick-theme.css" rel="stylesheet"
        type="text/css">
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/slick/slick.css" rel="stylesheet"
        type="text/css">
    <?php else: ?>
    <link rel="stylesheet" href="https://use.typekit.net/tth1izp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets_renew/css/styles.css" rel="stylesheet">
    <?php endif; ?>
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
    <?php if(!is_front_page() && !is_home()): ?>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/slick/slick.min.js" defer></script>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/common.js?v=12" defer></script>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/animation.js" defer></script>
    <?php if(is_page('careerspeed')){ ?>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/careerspeed.js" defer></script>
    <?php } ?>
    <?php else: ?>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets_renew/js/desvg.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/CustomEase.min.js" integrity="sha512-4a56NRIrhn/ePBdSSNfwsmL+eZt/uCXEb7s+3B8tg/tDiywDMKb5u2QCdhsYQtEkUMPGE5GUVbZYqgKeRzJ7yQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/gsap@3.11.0/dist/CSSRulePlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets_renew/js/common.js" defer></script>
    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets_renew/js/top.js" defer></script>
    <script src="https://webfont.fontplus.jp/accessor/script/fontplus.js?E8xi6krW6F0%3D&box=A0qWkq1kLeU%3D&aa=1&ab=2"></script>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>