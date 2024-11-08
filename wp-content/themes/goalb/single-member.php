<?php get_header(null,[
  'description' => get_the_title().' '.get_field('member-department')
]); ?>

<main class="l-content">
    <div class="tapes-topleft" data-appear-on="load">
        <div class="tape-gray -left tape-01" data-appear-animation="grayTape"></div>
        <div class="tape-black -left tape-02" data-appear-animation="blackTape1"></div>
        <div class="tape-black -left tape-03" data-appear-animation="blackTape1"></div>
    </div>
    <?php get_template_part('tapes/bottom'); ?>
    <div class="m-memberDetail">
        <div class="m-memberDetail__heading">
            <h1 class="m-memberDetail__title"><span class="japanese"><?php the_title(); ?></span><span
                    class="english"><?php the_field('member-alpha') ?></span></h1>
            <div class="m-memberDetail__status"><?php the_field('member-department') ?><span
                    class="m-memberDetail__icon"><?php the_field('member-target') ?></span></div>
        </div>
        <?php
      if (have_rows('member-images')) :
    ?>
        <div class="m-memberDetail__image m-memberDetail__slide">
            <?php
          while (have_rows('member-images')) : the_row();
      ?>
            <div class="m-memberDetail__slideItem">
                <?php the_acf_sub_image('image','large'); ?>
            </div>
            <?php
      endwhile;
    ?>
        </div>
        <?php
      else : endif;
    ?>
        <div class="m-memberDetail__content">
            <?php
    if( have_rows('member-introduction') ):
      while ( have_rows('member-introduction') ) : the_row();
          if( get_row_layout() == 'heading' ):
          ?><h2 class="m-title04"><?php the_sub_field('text'); ?></h2><?php
          elseif( get_row_layout() == 'text' ):
          ?><div><?php the_sub_field('text'); ?></div><?php
          endif;
      endwhile;
    else :
    endif;
        
    ?>

            <ul class="m-memberDetail__social">
                <?php if(get_field('member-twitter')){ ?><li><a href="<?php the_field('member-twitter'); ?>"
                        target="_blank"><img loading="lazy"
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/icon-twitter.svg"
                            alt="" /></a></li><?php } ?>
                <?php if(get_field('member-youtube')){ ?><li><a href="<?php the_field('member-youtube'); ?>"
                        target="_blank"><img loading="lazy"
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/icon-youtube.svg"
                            alt="" /></a></li><?php } ?>
                <?php if(get_field('member-wantedly')){ ?><li><a href="<?php the_field('member-wantedly'); ?>"
                        target="_blank"><img loading="lazy"
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/icon-w.svg"
                            alt="" /></a></li><?php } ?>
                <?php if(get_field('member-tiktok')){ ?><li><a href="<?php the_field('member-tiktok'); ?>"
                        target="_blank"><img loading="lazy"
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/icon-tiktok.svg"
                            alt="" /></a></li><?php } ?>
            </ul>
        </div>
    </div>
    <?php $checkbox = get_field('spartan'); ?> <?php if ($checkbox && in_array('accept', $checkbox)) : ?>
    <div class="m-button -center mb200"><a
            href="https://liff-gateway.lineml.jp/landing?follow=%40goalb&lp=GCZ4TM&liff_id=1655676552-2oDwbxkW"><span
                class="m-button__in">体験コーチングを申し込む</span></a></div>
    <?php endif;?>
    <?php $checkbox = get_field('spartan'); ?> <?php if ($checkbox && in_array('stop', $checkbox)) : ?>
    <div class="m-button -center mb200"><a tabindex="-1" style="pointer-events: none;"><span
                class=" m-button__in">体験コーチング受付停止中</span></a>
    </div>
    <?php endif;?>


    <?php if (has_term( 'personal', 'member_cat' )) { ?>
    <div class="m-button -center mb200"><a
            href="https://liff-gateway.lineml.jp/landing?follow=%40goalb&lp=GCZ4TM&liff_id=1655676552-2oDwbxkW"><span
                class="m-button__in">パーソナルコーチングを申し込む</span></a></div>
    <?php } ?>


    <!-- キャリスピCTA -->
    <div class="careerspeed-area" style="background-color:#e6f6f0">
        <p class="has-text-align-center"><strong>自信と強みを引き出すキャリアコーチング</strong></p>
        <figure class="careerspeed-img"><img decoding="async" width="536" height="125"
                src="https://goal-b.co.jp/wordpress/wp-content/uploads/2023/10/logo_careerspeed.png"></figure>
        <p class="big-text"><strong>全ての人に可能性がある</strong></p>
        <p class="concept-box"><strong>強み、才能を明らかにし、人生を変える<br>キャリア特化型コーチングサービス「キャリスピ」</strong></p>
        <div class="careerspeed-link-button-wrap">
            <a class="careerspeed-link-button" href="https://goal-b.co.jp/careerspeed_member/"
                target="_blank">キャリスピについての詳細はこちら</a>
        </div>
    </div><!-- /キャリスピCTA -->
</main>

<?php get_template_part('parts/bread'); ?>
<?php get_footer(); ?>