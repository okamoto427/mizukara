<?php get_header(null,[
  'description' => 'ミズカラのお知らせをご覧になれます。'
]); ?>
	
<div class="l-container">
<?php get_template_part('tapes/title'); ?>
<?php get_template_part('tapes/bottom'); ?>
<div class="m-pageTitle">
	<h1><span class="japanese">お知らせ</span><span class="english">NEWS</span></h1>
</div>
<h2 class="m-title03">
  <?php if(is_tax()){
    single_cat_title();
  }else{
    echo '全てのお知らせ';
  } ?>
</h2>
<div class="l-container__inner">

<aside class="l-aside">
	<ul class="m-sidenav">
    <?php the_term_nav_items('news'); ?>
	</ul>
</aside>
<main class="l-main">
	<ul class="m-newsList">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<li class="m-newsList__item">
			<a href="<?php the_permalink(); ?>">
				<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        <?php
          $term = get_first_term();
          if (!empty($term)) {
        ?>
				<div class="m-newsList__category"><?php echo $term->name; ?></div>
        <?php } ?>
				<div class="m-newsList__text"><?php the_title(); ?></div>
			</a>
		</li>
    <?php endwhile;else : endif; ?>
  </ul>
  <?php get_template_part('parts/pagenavi'); ?>
</main>
	
</div>
</div>
	
<?php get_template_part('parts/bread'); ?>

<?php get_footer(); ?>