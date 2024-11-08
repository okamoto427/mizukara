<?php get_template_part('head',null,$args); ?>

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
    <header class="l-header">
        <div class="l-header__inner">
            <<?php echo $divOrH1; ?> class="l-header__logo" itemscope itemtype="http://schema.org/Organization"><a
                    href="<?php echo esc_url( home_url() ); ?>/" itemprop="url"><img itemprop="logo"
                        src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/logo-renew.svg"
                        alt="MIZUKARA" /></a></<?php echo $divOrH1; ?>>
            <nav class="nav-global pc">
                <ul>
                    <li><a href="<?php echo esc_url( home_url() ); ?>/about/"><span class="english">ABOUT</span><span
                                class="japanese">MIZUKARAについて</span></a></li>
                    <li><span class="nav-business"><span class="english">BUSINESS</span><span
                                class="japanese">事業内容</span></span>
                        <div class="nav-global__in">
                            <ul>
                                <li class="nav-global__intitle"><span class="english">BUSINESS</span><span
                                        class="japanese">事業内容</span></li>
                                <li><a href="<?php echo esc_url( home_url() ); ?>/coaching/">エグゼクティブコーチング</a></li>
                                <li><a href="<?php echo esc_url( home_url() ); ?>/careerspeed/"
                                        target="_blank">キャリアコーチング</a></li>
                                <li><a
                                        href="<?php echo esc_url( home_url() ); ?>/human-resource-training/">人材研修プログラム</a>
                                </li>
                                <li><a href="<?php echo esc_url( home_url() ); ?>/agent/" target="_blank">転職支援事業</a>
                                </li>
                                <li><a href="<?php echo esc_url( home_url() ); ?>/impact/">組織コーチング</a></li>
                                <!--				<li><a href="<?php echo esc_url( home_url() ); ?>/coachingschool/">コーチングスクール</a></li>-->
                            </ul>
                        </div>
                    </li>
                    <li><a href="<?php echo esc_url( home_url() ); ?>/member/"><span class="english">MEMBER</span><span
                                class="japanese">メンバー</span></a></li>
                    <li><a href="<?php echo esc_url( home_url() ); ?>/recruit/"><span
                                class="english">RECRUIT</span><span class="japanese">採用</span></a></li>
                    <li><a href="<?php echo esc_url( home_url() ); ?>/news/"><span class="english">NEWS</span><span
                                class="japanese">お知らせ</span></a></li>
                </ul>
            </nav>
            <div class="nav-header">
                <ul>
                    <li><a href="<?php echo esc_url( home_url() ); ?>/contact-front/"><span>CONTACT</span></a></li>
                </ul>
            </div>
            <div class="m-hamburger sp">
                <div class="m-hamburger__lines">
                    <div>
                        <div></div>
                    </div>
                    <div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="l-header__menus">
                <div class="l-header__logoIn"><a href="<?php echo esc_url( home_url() ); ?>/"><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/logo-white.svg"
                            alt="MIZUKARA" /></a></div>
                <nav class="nav-global">
                    <div class="nav-heading">サービス・事業</div>
                    <div class="nav-row">
                        <ul class="nav-link">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/careerspeed/"
                                    target="_blank">キャリアコーチング</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/coaching/">エグゼクティブコーチング</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/human-resource-training/">人材研修プログラム</a>
                            </li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/agent/" target="_blank">転職支援事業</a>
                            </li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/impact/">組織コーチング</a></li>
                        </ul>
                        <ul class="nav-link">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/voice/">お客様の声</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/policy/">利用規約</a></li>
                        </ul>
                    </div>
                    <div class="nav-heading">企業情報</div>
                    <div class="nav-row">
                        <ul class="nav-link">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/about/">MIZUKARAについて</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/member/">メンバー</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/recruit/">採用情報</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/news/">お知らせ</a></li>
                        </ul>
                        <ul class="nav-link">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/privacy/">プライバシーポリシー</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/law/">特定商法取引法<br class="sp">に基づく表記</a>
                            </li>
                        </ul>
                        <ul class="nav-link">
                            <li><a href="https://MIZUKARA.co.jp/magazine/" target="_blank">MIZUKARAマガジン</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/contact/">お問い合わせフォーム</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>