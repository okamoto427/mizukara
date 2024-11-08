<?php get_header(null,[
  'description' => 'GOAL-Bのサービスをご利用になられたお客様の声をご紹介しています。'
]); ?>
	
<div class="l-container">
<?php get_template_part('tapes/title'); ?>
<?php get_template_part('tapes/bottom'); ?>
<div class="m-pageTitle">
	<h1><span class="japanese">お客様の声</span><span class="english">VOICE</span></h1>
</div>
<h2 class="m-title03">
<?php if(is_tax()){
    single_cat_title();
  }else{
    echo '全てのお客様の声';
  } ?>
</h2>
<div class="l-container__inner">

<aside class="l-aside">
	<ul class="m-sidenav">
  <?php the_term_nav_items('voice'); ?>
	</ul>
</aside>
<main class="l-main">
	<div class="m-threecol m-threecol02">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php
    $term = get_first_term('voice_cat');
    ?>
	<div class="m-threecol__item">
		<a href="<?php the_permalink(); ?>">
		<div class="m-threecol__image"><?php the_post_thumbnail(); ?></div>
		<div class="m-threecol__text01"><?php the_title(); ?></div>
		<div class="m-threecol__text03"><?php the_field('voice-job'); ?> / <?php the_field('voice-sex'); ?><?php if(get_field('voice-coach')){ ?><br>担当コーチ：<?php echo the_field('voice-coach'); ?><?php } ?></div>
		<div class="m-threecol__icons">
        <?php
        if (!empty($term)) {
        ?> 
				<div class="m-threecol__icon01"><?php echo $term->name; ?></div>
        <?php } ?>
      <?php if(get_field('voice-has_movie')){ ?><span class="m-threecol__icon02">動画あり</span><?php } ?>
      </div>
		  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
		</a>
	</div>
  <?php endwhile;else : endif; ?>
</div>
<?php get_template_part('parts/pagenavi'); ?>
</main>
	
</div>
</div>
	
<?php get_template_part('parts/bread'); ?>

<?php get_footer(); ?>