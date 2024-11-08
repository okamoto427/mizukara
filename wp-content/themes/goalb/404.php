<?php get_header(); ?>

<main class="l-content">
<?php get_template_part('tapes/title'); ?>
<?php get_template_part('tapes/bottom'); ?>
<section class="m-section">
	<div class="m-notfound">	
		<div class="m-notfound__text01">404 <br class="sp">PAGE NOT FOUND</div>
		<div class="m-notfound__text02">ページが見つかりませんでした。</div>
		<div class="m-notfound__text03">申し訳ございません。<br>
			お探しのページは一時的にアクセスができない状態にあるか、移動もしくは削除された可能性があります。<br>
			お困りの方は、以下よりお問い合わせください。</div>
		<div class="m-button -mb200"><a href="<?php echo esc_url( home_url() ); ?>/contact"><span class="m-button__in">お問い合わせ</span></a></div>
	</div>
</section>
	
</main>
	
<?php get_template_part('parts/bread'); ?>
	
<?php get_footer(); ?>