<?php get_header(null,[
  'description' => 'ミズカラのメンバーをご紹介しています。'
]); ?>
	
<div class="l-container">
  <?php get_template_part('tapes/title'); ?>
  <?php get_template_part('tapes/bottom'); ?>
  <div class="m-pageTitle">
    <h1><span class="japanese">メンバー</span><span class="english">MEMBER</span></h1>
  </div>
<div class="l-container__inner">

<aside class="l-aside">
	<ul class="m-sidenav">
  <?php the_term_nav_items('member'); ?>
	</ul>
</aside>
<main class="l-main">
  <h2 class="m-title03">
    <?php if(is_tax()){
      single_cat_title();
    }else{
      echo '全てのメンバー';
    } ?>
  </h2>
	<div class="m-member">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="m-member__item">
			<a href="<?php the_permalink(); ?>">
        <div class="m-member__image"><?php the_post_thumbnail('large'); ?></div>
				<div class="m-member__name">
					<span class="japanese"><?php the_title(); ?></span><span class="english"><?php the_field('member-alpha'); ?></span>
				</div>
				<?php if(get_field('member-target')){ ?><div class="m-member__text">主なコーチング対象：<?php the_field('member-target'); ?></div><?php } ?>
				<?php if(get_field('member-department')){ ?><div class="m-member__icon"><?php the_field('member-department'); ?></div><?php } ?>
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