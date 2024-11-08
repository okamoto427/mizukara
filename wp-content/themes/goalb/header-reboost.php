<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>本来の自分を取り戻すリブースト（REBOOST）</title>
    <meta name="description"
        content="株式会社ミズカラが提供する本来の自分を取り戻すリブースト（REBOOST）。思い込みや、親の期待、周りの常識、他人の目、自信のなさ…。このプログラムは、これらの制限からあなたを解放して、あなたに「本来の自分で生きる力」を取り戻します。">
    <link rel="icon" type="image/png"
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/favicons/favicon-32x32.png">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style>
    @font-face {
        font-family: 'Noto Sans CJK JP Subset';
        font-style: normal;
        font-weight: 400;
        src: local('Noto Sans CJK JP'),
            local('NotoSansCJKjp-Regular'),
            local('NotoSansJP-Regular'),
            url('<?php echo get_template_directory_uri(); ?>/assets/fonts/NotoSansCJKjp-Regular.woff2') format('woff2'),
            url('<?php echo get_template_directory_uri(); ?>/assets/fonts/NotoSansCJKjp-Regular.woff') format('woff');
    }

    @font-face {
        font-family: 'Noto Sans CJK JP Subset';
        font-style: normal;
        font-weight: 900;
        src: local('NotoSansCJKjp-Black'),
            local('NotoSansJP-Black'),
            url('<?php echo get_template_directory_uri(); ?>/assets/fonts/NotoSansCJKjp-Black.woff2') format('woff2'),
            url('<?php echo get_template_directory_uri(); ?>/assets/fonts/NotoSansCJKjp-Black.woff') format('woff');
    }

    @font-face {
        font-family: 'Prompt';
        font-style: normal;
        font-weight: 600;
        src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/Prompt-SemiBold.woff2') format('woff2'),
            url('<?php echo get_template_directory_uri(); ?>/assets/fonts/Prompt-SemiBold.woff') format('woff');
    }

    .siteHeader {
        background-image: url(<?php echo get_template_directory_uri();
        ?>/assets/images/reboost/kv_bg@2x.jpg);
    }

    .siteHeader.reboost-sm-fv {
        background-image: url(<?php echo get_template_directory_uri();
        ?>/assets/images/reboost/reboost-sm-fv.png);
    }

    @media screen and (max-width: 768px) {
        .siteHeader {
            background-image: url(<?php echo get_template_directory_uri();
            ?>/assets/images/reboost/kv_bg_tb@2x.jpg);
        }

        .keyVisual__mobile {
            background-image: url(<?php echo get_template_directory_uri();
            ?>/assets/images/reboost/kv_mobile_tb@2x.jpg);
        }

        .reboost-sm-fv .keyVisual__mobile {
            background-image: url(<?php echo get_template_directory_uri();
            ?>/assets/images/reboost/reboost-sm-fv-sp.png);
        }

        .siteHeader.reboost-sm-fv {
            background-image: url(<?php echo get_template_directory_uri();
            ?>/assets/images/reboost/kv_bg_tb-ts.png);
        }
    }

    <?php require_once locate_template('assets/css/critical.css');
    ?>
    </style>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reboost.css?0978654323222">
    <script defer src='<?php echo get_template_directory_uri(); ?>/assets/js/reboost/bundle.js?0978653244'></script>

</head>
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

<body>
    <div id="page" class="container">