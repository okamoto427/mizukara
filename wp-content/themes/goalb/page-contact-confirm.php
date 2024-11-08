<?php get_header(); ?>

<div class="l-container">
    <div class="m-pageTitle">
        <h1><span class="japanese">法人向けお問い合わせ<br class="sp">フォーム</span><span class="english">CONTACT</span></h1>
    </div>
    <div class="l-container__inner">

        <aside class="l-aside">
            <ul class="m-step">
                <li>
                    <span class="m-step__step">STEP 1</span>
                    <span class="m-step__text">ご入力</span>
                </li>
                <li class="current">
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
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 一定時間後に値を設定
    setTimeout(function() {
        // 今回の入力要素を取得
        var current_category = document.querySelector('select[name="menu02"]');

        // current_category が存在しない場合は処理を終了
        if (!current_category) {
            console.warn("指定されたセレクトボックスが見つかりませんでした。");
            return;
        }

        // 前回入力値を表示部から取得
        var last_category_element = document.querySelector('#menu p');

        // 表示部からの入力が存在する場合のみ、その値を取得し、余分な空白を除去
        var last_category = last_category_element ? last_category_element.innerText.trim() : null;

        // last_category が null ではなく、current_category にそのオプションが存在する場合のみ値を設定
        if (last_category && Array.from(current_category.options).some(option => option.value ===
                last_category)) {
            current_category.value = last_category;
        } else if (last_category) {
            console.warn("前回の値が見つからないか、無効です。");
        }
    }, 100); // 0.5秒後に実行
});
document.addEventListener('DOMContentLoaded', function() {
    // 一定時間後に値を設定
    setTimeout(function() {
        // 今回の入力要素を取得
        var current_category = document.querySelector('select[name="menu03"]');

        // current_category が存在しない場合は処理を終了
        if (!current_category) {
            console.warn("指定されたセレクトボックスが見つかりませんでした。");
            return;
        }

        // 前回入力値を表示部から取得
        var last_category_element = document.querySelector('#menu p');

        // 表示部からの入力が存在する場合のみ、その値を取得し、余分な空白を除去
        var last_category = last_category_element ? last_category_element.innerText.trim() : null;

        // last_category が null ではなく、current_category にそのオプションが存在する場合のみ値を設定
        if (last_category && Array.from(current_category.options).some(option => option.value ===
                last_category)) {
            current_category.value = last_category;
        } else if (last_category) {
            console.warn("前回の値が見つからないか、無効です。");
        }
    }, 100); // 0.5秒後に実行
});
document.addEventListener('DOMContentLoaded', function() {
    // 一定時間後に値を設定
    setTimeout(function() {
        // 今回の入力要素を取得
        var current_category = document.querySelector('select[name="menu04"]');

        // current_category が存在しない場合は処理を終了
        if (!current_category) {
            console.warn("指定されたセレクトボックスが見つかりませんでした。");
            return;
        }

        // 前回入力値を表示部から取得
        var last_category_element = document.querySelector('#chance p');

        // 表示部からの入力が存在する場合のみ、その値を取得し、余分な空白を除去
        var last_category = last_category_element ? last_category_element.innerText.trim() : null;

        // last_category が null ではなく、current_category にそのオプションが存在する場合のみ値を設定
        if (last_category && Array.from(current_category.options).some(option => option.value ===
                last_category)) {
            current_category.value = last_category;
        } else if (last_category) {
            console.warn("前回の値が見つからないか、無効です。");
        }
    }, 100); // 0.5秒後に実行
});
document.addEventListener('DOMContentLoaded', function() {
    // 一定時間後に値を設定
    setTimeout(function() {
        // 今回の入力要素を取得
        var current_category = document.querySelector('select[name="menu05"]');

        // current_category が存在しない場合は処理を終了
        if (!current_category) {
            console.warn("指定されたセレクトボックスが見つかりませんでした。");
            return;
        }

        // 前回入力値を表示部から取得
        var last_category_element = document.querySelector('#chance p');

        // 表示部からの入力が存在する場合のみ、その値を取得し、余分な空白を除去
        var last_category = last_category_element ? last_category_element.innerText.trim() : null;

        // last_category が null ではなく、current_category にそのオプションが存在する場合のみ値を設定
        if (last_category && Array.from(current_category.options).some(option => option.value ===
                last_category)) {
            current_category.value = last_category;
        } else if (last_category) {
            console.warn("前回の値が見つからないか、無効です。");
        }
    }, 100); // 0.5秒後に実行
});
</script>


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