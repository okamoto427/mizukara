<?php get_header(null,[
  'description' => 'GOAL-Bの資料ダウンロードページです。サービス詳細のほか、お役立ち資料をご用意しております。'
]); ?>
	
<main class="l-content">	
<?php get_template_part('tapes/title'); ?>
<?php get_template_part('tapes/bottom'); ?>
<div class="m-pageTitle">
	<h1><span class="japanese">資料ダウンロード</span><span class="english">DOWNLOAD</span></h1>
</div>
<p class="mb100">各サービスの内容や料金のほか、GOAL-Bが培ってきたコーチングサービスをわかりやすくまとめた各種資料をご用意しました。<br>成功事例やお客様の声、コーチングの詳細なプログラムなどをご覧いただけます。<br>ダウンロードの上、ぜひご活用ください。</p>
	
<?php 
$terms = get_terms(array(
  'taxonomy'   => 'download_cat',
  // 'hide_empty' => false,
));

foreach($terms as $term){
?>
<h2 class="m-title03"><?php echo $term->name; ?></h2>

<div class="m-threecol">

<?php
  $posts = get_posts( array(
    'posts_per_page' => -1,
    'post_type' => 'download',
    'download_cat' => $term->name
  ) );
	foreach ( $posts as $post ) {

?>
	<div class="m-threecol__item">
		<?php the_acf_link_or_permalink('download-listlink',function(){
    ?>
    <div class="m-threecol__image"><?php the_post_thumbnail(); ?></div>
		<div class="m-threecol__text01"><?php the_title(); ?></div>
		<div class="m-threecol__text02"><?php the_field('download-listtext'); ?></div>
    <?php
    });
    ?>
	</div>
<?php
  }
?>

</div>

<?php
}
wp_reset_postdata();
?>

</main>
	
<?php get_template_part('parts/bread'); ?>
	
<?php get_footer(); ?>