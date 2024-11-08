<?php get_header(null,[
  'description' => get_the_title()
]); ?>


<main class="l-content l-content-tob-coach">
    <h1 class="tobcoach-title">
        <span class="tobcoach-title__ja">「体験コーチング」<br class="sp">コーチ紹介</span>
        <span class="tobcoach-title__en">COACH MEMBER</span>
    </h1>
    <div class="tapes-topleft" data-appear-on="load">
        <div class="tape-gray -left tape-01" data-appear-animation="grayTape"></div>
        <div class="tape-black -left tape-02" data-appear-animation="blackTape1"></div>
        <div class="tape-black -left tape-03" data-appear-animation="blackTape1"></div>
    </div>
    <?php get_template_part('tapes/bottom'); ?>
    <div class="m-memberDetail m-memberDetail-tobcoach">
        <div class="tobcoach__left"><img src="<?php the_field('to-c-image'); ?>" /></div>
        <div class="tobcoach__right">
            <div class="m-memberDetail__heading">
                <h2 class="m-memberDetail__title"><span class="japanese"><?php the_title(); ?>
                        <?php if(is_single(1388)): //IDが「6」の個別投稿ページの場合 ?>
                        <span class="m-memberDetail__title-stop">新規受付停止</span>
                        <?php endif; ?></span>
                    <span class="english"><?php the_field('tocmember-alpha') ?></span>
                </h2>
            </div>
            <div class="tobcoach__img"><img src="<?php the_field('to-c-image'); ?>" /></div>
            <?php if ( have_posts() ) : ?>
            <div class="m-memberDetail__content m-memberDetail__content-tobcoach">
                <?php while(have_posts()): the_post(); ?>

                <?php if(get_field('toc-coach-history')): ?>
                <h3 class="toc-coach__sub-title">経歴・実績</h3>
                <p class="toc-coach-text"><?php the_field('toc-coach-history'); ?></p>
                <?php endif; ?>

                <?php if(get_field('toc-coach-clients')): ?>
                <h3 class="toc-coach__sub-title">体験コーチングを提供した<br class="sp">クライアント 職種・業種</h3>
                <p class="toc-coach-text"><?php the_field('toc-coach-clients'); ?></p>
                <?php endif; ?>

                <?php if(get_field('toc-coach-message')): ?>
                <h3 class="toc-coach__sub-title">コーチングへの想い</h3>
                <p class="toc-coach-text"><?php the_field('toc-coach-message'); ?></p>
                <?php endif; ?>


                <?php if(is_single(1388)): //IDが「6」の個別投稿ページの場合 ?>
                <div class="tobcoach-movie-wrap">
                    <div class="tobcoach-movie">
                        <div class="tobcoach-movie__title">【最新版】コーチングとは何か？を全て解説します</div>
                        <div class="tobcoach-movie__content">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/6FohLjxoMNU?si=_AbXw24JTk7VNniF"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tobcoach-movie">
                        <div class="tobcoach-movie__title">年商200億円企業に実施した組織コーチングを公開します。</div>
                        <div class="tobcoach-movie__content">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/UttWFu-wUKo?si=CuSTIots-sWZ6saN"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tobcoach-movie">
                        <div class="tobcoach-movie__title">組織コーチングを使った「社内研修会」を公開します</div>
                        <div class="tobcoach-movie__content">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/vwkCgFeZEJY?si=NJ-_gQ4u4E3ex_w7"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <?php elseif(is_single(1412)): //IDが「6」の個別投稿ページの場合 ?>
                <div class="tobcoach-movie-wrap">
                    <div class="tobcoach-movie">
                        <div class="tobcoach-movie__title">"丸3年間"徹底的に僕を丸パクリしてきた漢に密着しました。</div>
                        <div class="tobcoach-movie__content">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/ivT4l6SHmgY?si=s437rQbWv8yBACZz"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tobcoach-movie">
                        <div class="tobcoach-movie__title">新卒1年目で年収1000万のGOAL-Bエースに1日密着したら衝撃の生活だった</div>
                        <div class="tobcoach-movie__content">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/g_K12Y668uo?si=KTaQkp7lCPvyPxGG"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <?php elseif(is_single(1414)): //IDが「6」の個別投稿ページの場合 ?>
                <div class="tobcoach-movie-wrap">
                    <div class="tobcoach-movie">
                        <div class="tobcoach-movie__title">組織コーチングに『初挑戦』するメンバーの経営会議に密着しました。</div>
                        <div class="tobcoach-movie__content">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/hdtvRqInexI?si=AAKGWo_9VWJ3RvZo"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tobcoach-movie">
                        <div class="tobcoach-movie__title">関西電力を退職しました。34歳ベンチャー役員の今後のキャリアについて</div>
                        <div class="tobcoach-movie__content">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/7hPQ1Do_IvE?si=-UCmE0CRgbMx41U7"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tobcoach-movie">
                        <div class="tobcoach-movie__title">【報告】近況と新たな挑戦について本音で語ります。</div>
                        <div class="tobcoach-movie__content">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/rU-OnEBfzGo?si=jRFjrBogixwuR6QQ"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tobcoach-movie">
                        <div class="tobcoach-movie__title">【完全密着】ベンチャー企業2社役員兼キャリアコーチの超リアルな1日</div>
                        <div class="tobcoach-movie__content">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/npBFg-Z-fCQ?si=oHVK7nErNDMJlNVe"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <?php elseif(is_single(1416)): //IDが「6」の個別投稿ページの場合 ?>
                <div class="tobcoach-movie-wrap">
                    <div class="tobcoach-movie">
                        <div class="tobcoach-movie__title">「コーチに重要な力とは何か？」を師匠と議論しました。</div>
                        <div class="tobcoach-movie__content">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/y7pm7wicSVg?si=W40odFWNYXx_wOcJ"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tobcoach-movie">
                        <div class="tobcoach-movie__title">組織の自走を妨げるリーダーは〇〇をやっている。</div>
                        <div class="tobcoach-movie__content">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/IiFFKHIs_tM?si=mq36JiI3mlPmbTLu"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tobcoach-movie">
                        <div class="tobcoach-movie__title">【衝撃の1日】師匠の日常に潜入しました。</div>
                        <div class="tobcoach-movie__content">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/t_M0SUtSeGE?si=cUdJ-vvEyyR8vCn2"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>


    </div>




</main>


<?php get_footer(); ?>