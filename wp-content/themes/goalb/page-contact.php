<?php get_header(); ?>

<div class="l-container">
    <div class="m-pageTitle">
        <h1><span class="japanese">法人向けお問い合わせ<br class="sp">フォーム</span><span class="english">CONTACT</span></h1>
    </div>
    <div class="l-container__inner">

        <aside class="l-aside">
            <ul class="m-step">
                <li class="current">
                    <span class="m-step__step">STEP 1</span>
                    <span class="m-step__text">ご入力</span>
                </li>
                <li>
                    <span class="m-step__step">STEP 2</span>
                    <span class="m-step__text">ご確認</span>
                </li>
                <li>
                    <span class="m-step__step">STEP 3</span>
                    <span class="m-step__text">完了</span>
                </li>
            </ul>
        </aside>
        <main class="l-main">
            <?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
    the_content();
  }
}
?>
        </main>

    </div>
</div>

<?php get_template_part('parts/bread'); ?>

<?php

function add_this_script_footer(){ ?>

<script>
(function($) {

    if ($('.mw_wp_form_input').length) {
        $('.m-step li').first().addClass('current')
        $('body').addClass('mwform-contact-input')
    }
    if ($('.mw_wp_form_confirm').length) {
        $('.m-step li').eq(1).addClass('current')
        $('body').addClass('mwform-contact-confirm')
    }
    if ($('.mw_wp_form_complete').length) {
        $('.m-step li').eq(2).addClass('current')
        $('body').addClass('has-header_footer')
        $('body').addClass('mwform-contact-complete')
    }

})(jQuery);
</script>

<?php } 

add_action('wp_footer', 'add_this_script_footer'); ?>

<?php get_footer(); ?>