<?php get_header(); ?>

<main class="l-content">
    <?php get_template_part('tapes/title'); ?>
    <?php get_template_part('tapes/bottom'); ?>
    <div class="m-pageTitle">
        <h1><span class="japanese">ミズカラについて</span><span class="english">ABOUT</span></h1>
    </div>
    <div class="about-main">
        <picture>
            <source media="print,only screen and (min-width:768px)"
                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about/main.jpg">
            <source media="only screen and (max-width:767px)"
                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about/main-sp.jpg">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about/main.jpg" alt="">
        </picture>
    </div>
    <div class="m-pagenav__wrapper">
        <ul class="m-pagenav -about">
            <li><a href="#philosophy"><span class="m-pagenav__in"><span class="english">PHILOSOPHY</span><span
                            class="japanese">企業理念</span></span></a></li>
            <li><a href="#spirits"><span class="m-pagenav__in"><span class="english">SPIRITS</span><span
                            class="japanese">行動指針</span></span></a></li>
            <li><a href="#message"><span class="m-pagenav__in"><span class="english">MESSAGE</span><span
                            class="japanese">代表挨拶</span></span></a></li>
            <li><a href="#member"><span class="m-pagenav__in"><span class="english">MEMBER</span><span
                            class="japanese">メンバー</span></span></a></li>
            <li><a href="#history"><span class="m-pagenav__in"><span class="english">HISTORY</span><span
                            class="japanese">沿革</span></span></a></li>
            <li><a href="#outline"><span class="m-pagenav__in"><span class="english">OUTLINE</span><span
                            class="japanese">会社概要</span></span></a></li>
        </ul>
    </div>

    <section class="m-section about-philosophy" id="philosophy" data-appear-on="scroll">
        <div class="tape-gray about-philosophy__bg01" data-appear-animation="grayTape"></div>
        <div class="tape-black about-philosophy__bg02" data-appear-animation="blackTape1"></div>
        <div class="tape-black about-philosophy__bg03" data-appear-animation="blackTape1"></div>
        <div class="tape-black about-philosophy__bg04" data-appear-animation="blackTape1"></div>
        <div class="tape-black about-philosophy__bg05" data-appear-animation="blackTape1"></div>
        <h2 class="m-title02"><span class="english" data-appear-animation="blackTapeText">PHILOSOPHY</span><span
                class="japanese" data-appear-animation="blackTapeText">企業理念</span></h2>
        <div class="about-philosophy__text" data-appear-animation="blackTapeText">すべての人に可能性がある</div>
    </section>

    <section class="m-imagetext about-spirits">
        <div class="m-imagetext__inner">

            <div class="m-imagetext__items">
                <div class="m-imagetext__image">
                    <picture>
                        <source media="print,only screen and (min-width:768px)"
                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about/spirits-picture-renew.jpg">
                        <source media="only screen and (max-width:767px)"
                            srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about/spirits-picture-renew.jpg">
                        <img loading="lazy"
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about/spirits-picture-renew.jpg"
                            alt="">
                    </picture>
                </div>
                <div class="m-imagetext__texts">
                    <!-- <h2 class="m-title02 -spcenter m-title02-spirits goalb-mind" id="spirits"><span
                            class="english">ミズカラ
                            MIND</span></h2>
                    <ul class="about-spirits__list">
                        <li><span class="about-spirits__text">自らの可能性を信じる</span></li>
                    </ul>
                    <h2 class="m-title02 -spcenter m-title02-spirits five-mission" id="spirits"><span
                            class="english">5MISSION</span></h2>
                    <ul class="about-spirits__list">
                        <li><span class="about-spirits__number">01</span><span
                                class="about-spirits__text">自分を使い果たす</span></li>
                        <li><span class="about-spirits__number">02</span><span
                                class="about-spirits__text">自ら機会をつくる</span></li>
                        <li><span class="about-spirits__number">03</span><span class="about-spirits__text">自分史上最高</span>
                        </li>
                        <li><span class="about-spirits__number">04</span><span class="about-spirits__text">期待を超える</span>
                        </li>
                        <li><span class="about-spirits__number">05</span><span
                                class="about-spirits__text">チームで成果を出す</span>
                        </li>
                    </ul> -->
                    <div>
                        <h3>VISION</h3>
                        <p>夢中になれる人生をすべての人に</p>
                    </div>
                    <div>
                        <h3>MISSION</h3>
                        <p>あらゆる人の可能性を解放する</p>
                    </div>
                    <div>
                        <h3>VALUE</h3>
                        <p>自らの可能性を信じる</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="m-section" id="message" data-appear-on="scroll">
        <div class="m-textimage">
            <div class="tape-gray m-textimage__bg01" data-appear-animation="grayTape"></div>
            <div class="tapes-topright tapes-spbottomright">
                <div class="tape-black m-textimage__bg04" data-appear-animation="blackTape1"></div>
                <div class="tape-black m-textimage__bg05" data-appear-animation="blackTape1"></div>
            </div>
            <h2 class="m-title02"><span class="english" data-appear-animation="blackTapeText">MESSAGE</span><span
                    class="japanese" data-appear-animation="blackTapeText">代表挨拶</span></h2>
            <div class="m-textimage__items" data-appear-animation="fadeIn">
                <div class="m-textimage__image"><img loading="lazy"
                        src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about/message-picture2-renew.jpg"
                        alt="" /></div>
                <div class="m-textimage__texts">
                    <div class="m-textimage__text">CEO - 村岡 大樹</div>
                    <ul class="m-textimage__social">
                        <li><a href="https://www.youtube.com/@AmaterasMuraoka" target="_blank"><img loading="lazy"
                                    src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/icon-youtube-black.svg"
                                    alt="" /></a></li>
                        <li><a href="https://twitter.com/fitness_daiki" target="_blank"><img loading="lazy"
                                    src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/icon-twitter-black.svg"
                                    alt="" /></a></li>
                    </ul>
                    <p class="m-textimage__text02">正解のない世界で自分はどう生きるのか。
                        <br>どんな人生を生きていれば幸せな人生なのか。<br>自らの人生にどんな「GOAL」を立てるのか。<br><br>そのGOALを達成するためには<br>
                        どんな「 B ～Body(身体)、Being(在り方)、Business(仕事)～」でありたいのか。<br><br>
                        私たちは、全ての人に最高の一日を生きる可能性があると信じています。<br><br>
                        あなたの最高の一日を生きるための「ミズカラ」はなんでしょうか。<br>
                        ミズカラは、あなたのGOALを実現するためのきっかけで在り続けます。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="m-section">
        <div class="m-coach sppb0 js-slider-container">
            <h2 class="m-title02 -center mb30" id="member"><span class="english">MEMBER</span><span
                    class="japanese">メンバー</span></h2>

            <div class="m-coach__items m-coach__slide js-slider">


                <?php
        $posts = get_posts([
          'post_type'  => 'member',
          'orderby' => 'rand',
          'numberposts' => -1,
        ]);
        if ($posts) {
          foreach ($posts as $post) :
            setup_postdata($post);
            get_template_part('parts/member-slideitem');
          endforeach;
          wp_reset_postdata();
        }
      ?>

            </div>
            <div class="m-slidearrow spmt60">
                <div class="m-slidearrow__prev js-slider-prev">
                    <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.3428 0.412666L13.6573 1.92076L3.89064 10.5L13.6573 19.0793L12.3428 20.5874L0.859395 10.5L12.3428 0.412666Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M23.6249 11.5L3.703 11.5L3.703 9.5L23.6249 9.5L23.6249 11.5Z" fill="white" />
                    </svg>
                </div>
                <div class="m-buttonMore -center">
                    <a href="<?php echo esc_url( home_url() ); ?>/member/">
                        <span class="english">SEE MORE</span>
                        <span class="japanese">メンバーについて</span>
                    </a>
                </div>
                <div class="m-slidearrow__next js-slider-next">
                    <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.6572 20.5873L10.3427 19.0792L20.1094 10.5L10.3427 1.92067L11.6572 0.412575L23.1406 10.5L11.6572 20.5873Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.375057 9.5L20.297 9.5L20.297 11.5L0.375057 11.5L0.375057 9.5Z" fill="white" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <style>
    .m-coach__name,
    .m-coach__text {
        /* opacity:0;
    transform:rotate(90deg); */
        /* transform-style: preserve-3d; */
        /* display:none; */
    }
    </style>
    <section class="m-section m-about mb250 sppt0 spmt160" id="history" data-appear-on="scroll">
        <div class="m-about__inner">
            <div class="tape-gray m-about__bg01 m-about__bg01-2" data-appear-animation="grayTape"></div>
            <div class="tape-black m-about__bg11" data-appear-animation="blackTape1"></div>
            <div class="tape-black m-about__bg12" data-appear-animation="blackTape1"></div>
            <div class="tape-black m-about__bg13" data-appear-animation="blackTape1"></div>
            <div class="tape-black m-about__bg14" data-appear-animation="blackTape1"></div>
            <div class="m-about__items">
                <div class="m-about__title">
                    <h2 class="m-title01"><span class="english"
                            data-appear-animation="blackTapeTextRotated">HISTORY</span><span class="japanese"
                            data-appear-animation="blackTapeTextRotated">沿革</span></h2>
                </div>
                <div class="m-about__texts">
                    <table class="about-table">
                        <?php
      if (have_rows('about-history')) :
        while (have_rows('about-history')) : the_row();
      ?>
                        <tr>
                            <th><?php the_sub_field('ym'); ?></th>
                            <td><?php the_sub_field('text'); ?></td>
                        </tr>
                        <?php
        endwhile;else : endif;
      ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="m-section" id="outline">
        <div class="m-about__inner">
            <h2 class="m-title02 -center"><span class="english">OUTLINE</span><span class="japanese">会社概要</span></h2>
            <table class="m-table02">
                <?php
      if (have_rows('about-outline')) :
        while (have_rows('about-outline')) : the_row();
      ?>
                <tr>
                    <th><?php the_sub_field('heading'); ?></th>
                    <td><?php the_sub_field('text'); ?></td>
                </tr>
                <?php
        endwhile;else : endif;
      ?>
            </table>
        </div>
    </section>

</main>
<?php get_template_part('parts/bread'); ?>


<?php get_footer(); ?>