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
    <script src="https://sdk.form.run/js/v2/formrun.js"></script>
    <script>
    window.kuzenTagAsyncInit = function() {
        window.kuzen_tag.add_query_parameter_url([]);
    };
    (function() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://tag-v2.kuzen.io?tracking_code=KT_dAZl96Cr8UKjEA%3D%3D656&line=1';
        script.async = true;
        document.head.appendChild(script);
    })();
    </script>

</head>

<body>
    <!-- class, action, methodを変更しないでください -->
    <form class="formrun" action="https://form.run/api/v1/r/s1kcj9b05jz130zol0pui8tx" method="post">
        <!-- ↓自由に要素を追加・編集することができます -->
        <div>
            <label>お名前</label>
            <input name="name" type="text">
        </div>
        <div>
            <label>メールアドレス [必須]</label>
            <input name="email" type="text" data-formrun-type="email" data-formrun-required>
            <div data-formrun-show-if-error="メールアドレス">メールアドレスを正しく入力してください</div>
        </div>
        <div>
            <label>お問い合わせ [必須]</label>
            <textarea name="contact" data-formrun-required></textarea>
            <div data-formrun-show-if-error="お問い合わせ">お問い合わせ内容を入力してください</div>
        </div>
        <div>
            <label>個人情報利用同意 [必須]</label>
            <input type="checkbox" name="ok" data-formrun-required>
            <div data-formrun-show-if-error="個人情報利用同意">同意してください</div>
        </div>
        <!-- "ボット投稿をブロックするためのタグ" -->
        <div class="_formrun_gotcha">
            <style media="screen">
            ._formrun_gotcha {
                position: absolute !important;
                height: 1px;
                width: 1px;
                overflow: hidden;
            }
            </style>
            <label for="_formrun_gotcha">If you are a human, ignore this field</label>
            <input type="text" name="_formrun_gotcha" id="_formrun_gotcha" tabindex="-1">
        </div>
        <button type="submit" data-formrun-error-text="未入力の項目があります" data-formrun-submitting-text="送信中...">送信</button>
    </form>

</body>