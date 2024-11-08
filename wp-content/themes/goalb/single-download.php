<?php get_header(); ?>
	
<div class="l-container">
<div class="m-pageTitle">
	<h1><span class="japanese">資料ダウンロード</span><span class="english">DOWNLOAD</span></h1>
</div>
<div class="download-textimage">	
	<div class="download-image"><?php the_post_thumbnail('large'); ?></div>
	<div class="download-texts">
		<h2 class="download-title"><?php the_title(); ?></h2>
		<p><?php the_field('download-listtext'); ?></p>
	</div>
</div>
<div class="l-container__inner">

<aside class="l-aside">
	<ul class="m-step">
		<li>
			<span class="m-step__step">STEP 1</span>
			<span class="m-step__text">ご入力</span>
		</li>
		<li>
			<span class="m-step__step">STEP 2</span>
			<span class="m-step__text">ご確認</span>
		</li>
		<li>
			<span class="m-step__step">STEP 3</span>
			<span class="m-step__text">完了・資料ダウンロード</span>
		</li>
	</ul>
</aside>
<main class="l-main">
<?php
echo do_shortcode('[mwform_formkey key="343"]');
?>
</main>
	
</div>
</div>

<?php get_template_part('parts/bread'); ?>

<?php

function add_this_script_footer(){ ?>

<script>

(function ($) {

  if($('.mw_wp_form_input').length){
    $('.m-step li').first().addClass('current')
    $('body').addClass('mwform-download-input')
  }
  if($('.mw_wp_form_confirm').length){
    $('.m-step li').eq(1).addClass('current')
    $('body').addClass('mwform-download-confirm')
  }
  if($('.mw_wp_form_complete').length){
    $('.m-step li').eq(2).addClass('current')
    $('body').addClass('has-header_footer')
    $('body').addClass('mwform-download-complete')
  }

})(jQuery);

</script>

<?php } 

add_action('wp_footer', 'add_this_script_footer'); ?>
	
<?php get_footer(); ?>