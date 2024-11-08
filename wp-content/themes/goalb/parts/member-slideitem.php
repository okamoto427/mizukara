<div class="m-coach__item">
<a href="<?php the_permalink(); ?>">
  <div class="m-coach__image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets_renew/images/top/member-img01.jpg" alt="">
  </div>
  <!-- <div class="test">aaa</div> -->
  <div class="m-coach__name">
    <span class="japanese"><?php the_title(); ?></span><span class="english"><?php the_field('member-alpha'); ?></span>
  </div>
  <div class="m-coach__text"><?php the_field('member-department'); ?><?php if(get_field('member-target')){ ?><br>主なコーチング対象：<?php the_field('member-target'); ?><?php } ?></div>
</a>
</div>