<?php
  
  $posts = get_posts([
    'post_type'  => 'voice',
    // 'orderby' => 'rand',
    'voice_cat' => $args['voice_cat'] ?? '',
    'numberposts' => -1,
  ]);
  if ($posts) {
    foreach ($posts as $post) :
      setup_postdata($post);
?>  
  <div class="m-voice__item">	
	<a href="<?php the_permalink(); ?>">
    <div class="m-voice__text01"><?php the_title(); ?></div>
    <?php if(get_field('voice-job') || get_field('voice-sex')){ ?>
    <div class="m-voice__text02"><?php the_field('voice-job'); ?><?php if(get_field('voice-job') && get_field('voice-sex')){ echo ' / '; } ?><?php the_field('voice-sex'); ?></div>
    <?php } ?>
    <div class="m-voice__textimage">
      <div class="m-voice__image"><?php the_post_thumbnail(); ?></div>
      <div class="m-voice__text03"><?php the_field('voice-listtext'); ?></div>
    </div>
    <?php if(get_field('voice-before') || get_field('voice-after')){ ?>
    <div class="m-voice__beforeafter">
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
	</a>
  </div>
<?php
    endforeach;
    wp_reset_postdata();
  }
?>