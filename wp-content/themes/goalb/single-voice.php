<?php get_header(null,[
  'description' => get_the_excerpt()
]); ?>

<main class="l-content bgpadding">
<?php get_template_part('tapes/bottom'); ?>
	
<div class="m-article">
	<h1 class="m-article__title01"><?php the_title(); ?></h1>
	<div class="m-article__timecategory">

    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time><?php
    if(get_field('voice-job') || get_field('voice-sex')){
    ?><span class="m-article__timecategoryText"><?php the_field('voice-job'); ?><?php if(get_field('voice-job') && get_field('voice-sex')){ echo ' / '; } ?><?php the_field('voice-sex'); ?></span><?php
    }
    if(get_field('voice-coach')){ ?><span class="m-article__timecategoryText">担当コーチ：<?php echo the_field('voice-coach'); ?></span><?php
    }
    $term = get_first_term('voice_cat');
    if (!empty($term)) {
    ?><div class="m-article__category"><?php echo $term->name; ?></div><?php
    }
    if(get_field('voice-has_movie')){ ?><span class="m-article__category02">動画あり</span><?php
    }
    ?></div>
	<div class="mb20 m-article__mv"><?php the_post_thumbnail('large'); ?></div>
  <?php if(get_field('voice-before') || get_field('voice-after')){ ?>
	<div class="m-voice__beforeafter m-voice__beforeafter02 mb80">
		<div class="m-voice__before">
			<div class="m-voice__text04">BEFORE</div>
			<div class="m-voice__text07"><?php the_field('voice-before'); ?></div>
		</div>
		<div class="m-voice__after">
			<div class="m-voice__text04">AFTER</div>
			<div class="m-voice__text07"><?php the_field('voice-after'); ?></div>
		</div>
	</div>
  <?php } ?>


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
	
<div class="m-buttonGotop"><a href="<?php echo get_post_type_archive_link('voice'); ?>">お客様の声一覧へ戻る</a></div>
	
</main>
	
<?php get_template_part('parts/bread'); ?>
	
<?php get_footer(); ?>