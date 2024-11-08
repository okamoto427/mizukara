<?php get_header(null,[
  'description' => get_the_excerpt()
]); ?>
	
<main class="l-content bgpadding">
<?php get_template_part('tapes/bottom'); ?>
	
<div class="m-article">
	<h1 class="m-article__title01"><?php the_title(); ?></h1>
	<div class="m-article__timecategory">

		<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time><?php
    $term = get_first_term('news_cat');
    if($term){
    ?><span class="m-article__category"><?php echo $term->name; ?></span><?php
    }
    ?>

	</div>

  <div class="editor-styles-wrapper">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          //
          the_content();
          //
        } // end while
      } // end if
      ?>
  </div>
	
</div>


<?php
  $relatedPosts = get_field('news-related');
  if( $relatedPosts ){
?>
<section class="m-related">
	<div class="tape-gray m-related__bg01"></div>
	<div class="tapes-topright">
		<div class="tape-black m-related__bg02"></div>
		<div class="tape-black m-related__bg03"></div>
	</div>
	<div class="tapes-bottomleft">
		<div class="tape-black m-related__bg04"></div>
		<div class="tape-black m-related__bg05"></div>
	</div>

	<h2 class="m-title02"><span class="english">RELATED</span><span class="japanese">関連するお知らせ</span></h2>
	<ul class="m-newsList">

  <?php
    foreach( $relatedPosts as $post ){
    setup_postdata($post);
    $term = get_first_term('news_cat');
  ?>
    <li class="m-newsList__item">
      <a href="<?php the_permalink(); ?>">
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        <?php if($term){ ?><div class="m-newsList__category"><?php echo $term->name; ?></div><?php } ?>
        <div class="m-newsList__text"><?php the_title(); ?></div>
      </a>
    </li>
  <?php } ?>
	</ul>
</section>

<?php
    wp_reset_postdata(); 
  }
?>
	
<div class="m-buttonGotop"><a href="<?php echo get_post_type_archive_link('news'); ?>">お知らせ一覧へ戻る</a></div>
	
</main>
	
<?php get_template_part('parts/bread'); ?>
	
<?php get_footer(); ?>