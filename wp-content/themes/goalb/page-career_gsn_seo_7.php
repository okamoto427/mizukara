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
        href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/css/styles10.css" />
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
    <?php wp_head(); ?>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-598705106"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'AW-598705106');
</script>

<body>
    <main>
        <header class="header js-header">
            <div class="header__inner">
                <div class="header__wrap">
                    <div class="header__left">
                        <ul class="header__lists">
                            <li><a href="#client">活躍中の受講生たち</a></li>
                            <li><a href="#about">キャリスピとは</a></li>
                            <li><a href="#reason">コーチングがキャリア形成を加速させる3つの理由</a></li>
                            <li><a href="#method">キャリスピのメソッド</a></li>
                            <li><a href="#coach">コーチ紹介</a></li>
                            <li><a href="#question">よくある質問</a></li>
                        </ul>
                    </div>
                    <div class="header__button">
                        <a href="https://liff.line.me/2003655505-A1wBRxrO?sl=0542c4b47b&gender=区分なし&media=c-seo&content=バナー&product=直面談&creative=seo7"
                            data-cats=lineFriendsFollowLink>無料体験コーチングを申し込んでみる</a>
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
                    <li><a href="#client">活躍中の受講生たち</a></li>
                    <li><a href="#about">キャリスピとは</a></li>
                    <li><a href="#reason">コーチングがキャリア形成を加速させる3つの理由</a></li>
                    <li><a href="#method">キャリスピのメソッド</a></li>
                    <li><a href="#coach">コーチ紹介</a></li>
                    <li><a href="#question">よくある質問</a></li>
                </ul>
                <div class="drawer-menu__button">
                    <a href="https://liff.line.me/2003655505-A1wBRxrO?sl=0542c4b47b&gender=区分なし&media=c-seo&content=バナー&product=直面談&creative=seo7"
                        data-cats=lineFriendsFollowLink target="_blank" class="button">無料体験コーチングを申し込んでみる</a>
                </div>
            </div>
        </header>
        <section class="mv js-mv">

            <div class="mv__wrap">
                <div class="mv__main wow animated fadeInUp" data-wow-delay=".3s">
                    <p class="mv__head">すべての人に可能性がある</p>
                    <div class="mv__img">

                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/careerspeed/logo.svg"
                            alt="体験コーチ受験者数7000人。適性判明率94.5%。平均顧客満足度98.8%。" width="580" height="116" />
                    </div>
                    <p class="mv__head02">強みを見つけ、理想のキャリアを叶えるキャリアコーチング</p>
                    <div class="mv__button"><a
                            href="https://liff.line.me/2003655505-A1wBRxrO?sl=0542c4b47b&gender=区分なし&media=c-seo&content=バナー&product=直面談&creative=seo7"
                            data-cats=lineFriendsFollowLink target="_blank" class="button">無料体験コーチングを申し込んでみる</a></div>
                </div>
            </div>
            <div class="mv__bg">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/mv-09.webp"
                    alt="サムネ画像４">

            </div>
        </section>
        <!-- 体験談 -->
        <section class="voice" id="client">
            <h2 class="voice__title section-title wow animated fadeInUp" data-wow-delay=".4s">
                <span class="section-title--en">CLIENTS</span>
                活躍中の受講生たち
            </h2>
            <p style="text-align: center;">1日密着動画はYouTubeで公開中！<br>※成果を保証するものではありません。</p>
            <!-- Slider main container -->
            <div class="swiper-container">
                <div class="swiper swiper09">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide swiper-slide09">
                            <div class="voice__img">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/voice__img04.jpg"
                                    alt="サムネ画像４">
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide09">
                            <div class="voice__img">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/voice__img05.jpg"
                                    alt="サムネ画像５">
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide09">
                            <div class="voice__img">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/voice__img06.jpg"
                                    alt="サムネ画像６">
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide09">
                            <div class="voice__img">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/voice__img01.webp"
                                    alt="サムネ画像６">
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide09">
                            <div class="voice__img">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/voice__img02.jpg"
                                    alt="サムネ画像６">
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide09">
                            <div class="voice__img">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/voice__img03.webp"
                                    alt="サムネ画像６">
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="voice__wrap">



            </div>

        </section>
        <section class="about" id="about">
            <div class="about__inner">
                <div class="about__item">
                    <div class="about__main">
                        <h2 class="about__title wow animated fadeInUp" data-wow-delay="1s">
                            キャリスピは<br>
                            株式会社MIZUKARAが運営する<br>仕事（キャリア）に特化したコーチングサービスです
                        </h2>
                        <div class="about__img wow animated fadeInUp u-mobile" data-wow-delay=".5s">
                            <picture>
                                <source
                                    srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/about__img02.webp"
                                    type="
                                image/webp" width="785.5" height="488.5" />
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/about__img02.jpg"
                                    alt="イメージ画像" width="785.5" height="488.5" />
                            </picture>
                        </div>
                        <div class="about__texts">
                            <p><span class="text-green">「仕事で成果が出ない」</span>
                                <br><span class="text-green">「自分に向いている仕事が分からない」</span>
                                <br>こういった悩みを抱えている方は自分の「強み」を活かせていない・気づけていない可能性が高いです。
                            </p>
                            <p>
                                キャリスピでは、キャリアのプロであるコーチと1対1の対話を行い、時間をかけて今まで気づいていなかったあなただけの強みを探していきます。<br />
                                その強みを活かしてあなただけの理想のキャリアを設計していきましょう！
                            </p>
                        </div>
                    </div>
                    <div class="about__img wow animated fadeInUp u-desktop" data-wow-delay=".5s">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/about__img02.webp"
                                type="
                                image/webp" width="785.5" height="488.5" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/about__img02.jpg"
                                alt="イメージ画像" width="785.5" height="488.5" />
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <!-- 理由 -->
        <section class="reason" id="reason">
            <div class="reason__wrap">
                <h2 class="reason__title wow animated fadeInUp" data-wow-delay=".5s">キャリスピが選ばれる<span
                        class="text-green">3つの理由</span></h2>
                <!-- 1個目 -->
                <div class="reason__item wow animated fadeInLeft" data-wow-delay=".7s">
                    <div class="reason__main">
                        <div class="reason__title-en"><img
                                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__title-en01.svg"
                                alt="REASON01" width="93" height="28" loading="lazy" /></div>
                        <h3 class="reason__title-ja">自分だけの「強み」を<br />最大限引き出せる</h3>
                        <p class="reason__text">
                            キャリスピのコーチングでは「あなたらしさ」や「あなた自身の強み」を尊重します。コーチとのセッションを通して、「自分だけでは気づけない」あなたの強みや得意を見つけましょう。</p>
                    </div>
                    <div class="reason__img">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__img01-03@2x.webp"
                                type="image/webp" width="420" height="249" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__img01-03@2x.jpg"
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
                        <h3 class="reason__title-ja">本当にやりたいことが分かり、<br />自分の目標が明確になる</h3>
                        <p class="reason__text">あなたが本当に手にしたい・なりたい姿を目標に設定するので、やるべきことが明確になり、一気に現実が変容します。</p>
                    </div>
                    <div class="reason__img">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__img02-02@2x.webp"
                                type="image/webp" width="420" height="249" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__img02-02@2x.jpg"
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
                        <h3 class="reason__title-ja">実績豊富なコーチたちが<br />あなたのキャリア構築をサポート</h3>
                        <p class="reason__text">
                            キャリスピのコーチ陣は総勢約70名。大手企業の人事、フリーランス、経営者などキャリアに対して多くの実績を出してきた人材が多数在籍しています。
                        </p>
                    </div>
                    <div class="reason__img">
                        <picture>
                            <source
                                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__img03-03@2x.webp"
                                type="image/webp" width="420" height="249" loading="lazy" />
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/reason__img03-03@2x.jpg"
                                alt="経験豊富なコーチ陣がキャリア構築をサポート" width="420" height="249" loading="lazy" />
                        </picture>
                    </div>
                </div>
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
                        <p class="flow__text02">公式LINEから無料体験コーチングを申し込んでいただきます（1分で終了）<br>土日に受講することもできます。</p>
                    </div>
                    <div class="flow__img flow__img01">

                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img-pc01.webp"
                            alt="キャリスピ公式LINEをお友だち追加" width="343" height="140" loading="lazy" />

                    </div>
                </div>
                <!-- 2つ目 -->
                <div class="flow__item wow animated fadeInUp" data-wow-delay=".6s">
                    <div class="flow__texts">
                        <div class="flow__head">
                            <span class="flow__head-en">STEP</span>
                            02
                        </div>
                        <div class="flow__text">簡単な事前アンケートに回答</div>
                        <p class="flow__text02">
                            「仕事の年収が上がらない」「仕事にモチベーションが湧かない」などあなたの現状をお聞かせください。
                        </p>

                    </div>
                    <div class="flow__img">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img06.jpg"
                            alt="公式LINEから無料カウンセリングを申し込む" loading="lazy" />
                    </div>
                </div>
                <!-- ３つ目 -->
                <div class="flow__item wow animated fadeInUp" data-wow-delay=".7s">
                    <div class="flow__texts">
                        <div class="flow__head">
                            <span class="flow__head-en">STEP</span>
                            03
                        </div>
                        <div class="flow__text">ZOOM(オンライン)で<br />体験コーチングに参加</div>
                        <p class="flow__text02">理想の「在りたい自分」（自分らしい、嘘偽りのない本音の生き方）をコーチと一緒にセッションの中で探していきます。
                        </p>
                    </div>
                    <div class="flow__img">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/flow__img05.jpeg"
                            alt="ZOOM(オンライン)でカウンセリングに参加" loading="lazy" />

                    </div>
                </div>
                <!-- ４つ目 -->
                <!-- <div class="flow__item wow animated fadeInUp" data-wow-delay=".8s">
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
                </div> -->
            </div>
            <p class="voice__attention">＊無理な勧誘や営業はありませんのでご安心ください。</p>
            <p class="voice__attention02">体験コーチング解説動画を公開中！</p>
            <div class="voice__movie">
                <iframe src="https://www.youtube.com/embed/ApDM3u6eLCk?si=ElTeWO1lTsRRYBnO" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
        <!-- CVエリア -->
        <div class="cv-area wow animated fadeInUp" data-wow-delay=".4s">
            <div class="cv-area__head">
                <div class="cv-area__title">
                    <span class="cv-area__head">今まで7,000名が受講！</span><br>
                    <span class="text-green">通常5,500円の体験コーチング</span><br>がLINE追加するだけで無料！
                </div>
            </div>
            <div class="cv-area__button"><a
                    href="https://liff.line.me/2003655505-A1wBRxrO?sl=0542c4b47b&gender=区分なし&media=c-seo&content=バナー&product=直面談&creative=seo7"
                    target="_blank" data-cats=lineFriendsFollowLink class=" button">今すぐ無料体験してみる</a>
            </div>
        </div>
        <!-- コーチ紹介 -->
        <section class="voice" id="coach">
            <h2 class="voice__title section-title wow animated fadeInUp" data-wow-delay=".4s">
                <span class="section-title--en">COACH</span>
                コーチ紹介
            </h2>

            <div class="coach__inner">
                <p class="voice__explain">
                    キャリスピ在籍のコーチ陣は、<span
                        class="text-green">現在約80名。</span><br>大手企業の人事やコンサル会社に在籍していたりと様々なキャリア出身の精鋭揃いです。社内でのテストを経て合格したコーチだけが在籍しています。
                </p>
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
                    <div class="method__item02-item wow animated fadeInLeft">
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
                        <p class="method__item02-text">・開発、人事、新規事業、DX人材育成へと社内複業から社内転職・5000人が参加するコミュニティの立ち上げ・運営</p>
                    </div>
                    <!-- 5つ目 -->
                    <div class="method__item02-item wow animated fadeInLeft" data-wow-delay=".2s">
                        <div class="method__item02-img">
                            <picture>
                                <source
                                    srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img05.webp"
                                    type="image/webp" />
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets-career_gsn_co/images/common/method__slider-img05.jpg"
                                    alt="佐々木隆太" width="740" height="499" loading="lazy" />
                            </picture>
                        </div>
                        <div class="method__item02-name">高橋拓哉</div>
                        <div class="method__item02-work">元公務員×未経験転職×プロコーチ</div>
                        <p class="method__item02-message">「自分の人生を生きている」そう思ってもらえるコーチングを提供します！</p>
                        <p class="method__item02-text">・市役所職員歴7年・NLPプロフェッショナルコーチ×認知科学式コーチング・ライフ×キャリアコーチング実績年間500時間以上</p>
                    </div>
                </div>
            </div>
        </section>
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

        <!-- CVエリア -->
        <div class="cv-area wow animated fadeInUp" data-wow-delay=".4s">
            <div class="cv-area__head">
                <div class="cv-area__title">
                    <span class="cv-area__head">今まで7,000名が受講！</span><br>
                    <span class="text-green">通常5,500円の体験コーチング</span><br>がLINE追加するだけで無料！
                </div>
            </div>
            <div class="cv-area__button">
                <a href="https://liff.line.me/2003655505-A1wBRxrO?sl=0542c4b47b&gender=区分なし&media=c-seo&content=バナー&product=直面談&creative=seo7"
                    target=“_blank” data-cats=lineFriendsFollowLink class="button">今すぐ無料体験してみる</a>
            </div>
        </div>
        <!-- 追従ボタン -->
        <div class="flooting-button">
            <a href="https://liff.line.me/2003655505-A1wBRxrO?sl=0542c4b47b&gender=区分なし&media=c-seo&content=バナー&product=直面談&creative=seo7"
                target=“_blank” data-cats=lineFriendsFollowLink class="button">無料体験コーチングを申し込んでみる</a>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__top">
            <a href="https://goal-b.co.jp/privacy/" target="_blank" class="footer__link">プライバシーポリシー</a>
            <a href="https://goal-b.co.jp/about/" target="_blank" class="footer__link">会社概要</a>
        </div>
        <p class="footer__copyright"><span>&copy;</span> 2024 MIZUKARA All rights Reserved</p>
    </footer>
    <script>
    new WOW().init();
    </script>
    <?php wp_footer(); ?>
</body>

</html>