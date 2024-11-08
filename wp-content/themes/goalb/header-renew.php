<?php get_template_part('head',null,$args); ?>

<body id="top">
  <?php for($i = 0; $i <= 1; $i++): ?>
  <div class="l-header-drawer l-header-drawer<?php echo $i; ?>">
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets_renew/images/common/logo-txt.svg" alt="" class="l-header-drawer__logo">
      <nav class="l-header-drawer__nav">
        <div class="l-header-drawer__el">
          <a href="<?php echo home_url('/about/'); ?>" class="c-hover-opacity">MIZUKARAについて</a>
        </div>
        <div class="l-header-drawer__el">
          <a href="" style="pointer-events: none;">サービス・事業</a>
          <div class="l-header-drawer__childEl">
            <a href="<?php echo home_url('/coaching/'); ?>" class="c-hover-opacity">エグゼクティブコーチング</a><br>
            <a href="https://goal-b.co.jp/careerspeed/" target="_blank" class="c-hover-opacity">キャリアコーチング</a><br>
            <a href="<?php echo home_url('/human-resource-training/'); ?>" class="c-hover-opacity">人材研修プログラム</a><br>
            <a href="<?php echo home_url('/agent/'); ?>" class="c-hover-opacity">組織コーチング</a>
          </div>
        </div>
        <div class="l-header-drawer__el">
          <a href="<?php echo home_url('/member/'); ?>" class="c-hover-opacity">メンバー</a>
        </div>
        <div class="l-header-drawer__el">
          <a href="<?php echo home_url('/recruit/'); ?>" target="_blank" class="c-hover-opacity">採用</a>
        </div>
        <div class="l-header-drawer__el">
          <a href="<?php echo home_url('/news/'); ?>" class="c-hover-opacity">お知らせ</a>
        </div>
      </nav>
    </div>
  </div>
  <?php endfor; ?>

  <div class="l-header__megamenuWrap">
    <div class="l-header__megamenu js-megaTrigger">
      <a href="<?php echo home_url('/coaching/'); ?>" class="c-hover-opacity">エグゼクティブコーチング</a><br>
      <a href="https://goal-b.co.jp/careerspeed/" target="_blank" class="c-hover-opacity">キャリアコーチング</a><br>
      <a href="<?php echo home_url('/human-resource-training/'); ?>" class="c-hover-opacity">人材研修プログラム</a><br>
      <a href="<?php echo home_url('/agent/'); ?>" class="c-hover-opacity">組織コーチング</a>
      <div class="l-header__megamenuOverlay js-drawer"></div>
    </div>
  </div>

  <header class="l-header js-header">
    <div class="l-header__drawer">
      <span class="f-futura l-header__drawer-txt js-drawer">
        ME<br>NU
      </span>
    </div>
    <nav class="l-header__nav pc">
      <a href="<?php echo home_url('/about/'); ?>" class="l-header__link c-hover-opacity">MIZUKARAについて</a>
      <a class="l-header__link js-megaTrigger">サービス・事業</a>
      <a href="<?php echo home_url('/member/'); ?>" class="l-header__link c-hover-opacity">メンバー</a>
      <a href="<?php echo home_url('/recruit/'); ?>" class="l-header__link c-hover-opacity">採用</a>
      <a href="<?php echo home_url('/news/'); ?>" class="l-header__link c-hover-opacity">お知らせ</a>
    </nav>
    <p class="l-header__cr">MIZUKARA All rights Reserved</p>
  </header>


  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55JL373" height="0" width="0"
          style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->