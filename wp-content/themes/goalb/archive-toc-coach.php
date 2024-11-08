<?php get_header(null,[
  'description' => 'MIZUKARAのメンバーをご紹介しています。'
]); ?>

<div class="l-container">
    <?php get_template_part('tapes/title'); ?>
    <?php get_template_part('tapes/bottom'); ?>
    <div class="m-pageTitle m-pageTitle-toc-coach">
        <h1><span class="japanese">「体験コーチング」<br class="sp">コーチ一覧</span><span class="english">COACH MEMBER</span></h1>
    </div>
    <div class="l-container__inner l-container__inner--toc-coach">
        <main class="l-main">
            <div class="m-member m-member--toc-coach">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="m-member__item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="m-member__image"><img src="<?php the_field('to-c-image'); ?>" /></div>
                        <div class="m-member__name">
                            <span class="japanese"><?php the_title(); ?></span><span
                                class="english"><?php the_field('tocmember-alpha'); ?></span>
                        </div>
                        <?php if(get_field('member-target')){ ?><div class="m-member__text">
                            主なコーチング対象：<?php the_field('member-target'); ?></div><?php } ?>
                        <?php if(get_field('member-department')){ ?><div class="m-member__icon">
                            <?php the_field('member-department'); ?></div><?php } ?>
                    </a>
                </div>
                <?php endwhile;else : endif; ?>
            </div>
            <?php if ($wp_query->max_num_pages > 1) : ?>
            <?php get_template_part('parts/pagenavi'); ?>
            <?php endif; ?>

        </main>

    </div>
</div>

<?php get_footer(); ?>