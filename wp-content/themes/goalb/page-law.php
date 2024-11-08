<?php get_header(); ?>

<main class="l-content">
    <?php get_template_part('tapes/title'); ?>
    <?php get_template_part('tapes/bottom'); ?>
    <section class="m-section">
        <div class="m-law">
            <div class="m-pageTitle">
                <h1><span class="japanese">特定商取引法に<br class="sp">基づく表記</span><span class="english">SPECIFIED COMMERCIAL
                        TRANSACTION LAW</span></h1>
            </div>
            <div class="m-pagenav__wrapper">
                <ul class="m-pagenav m-pagenav02">
                    <li><a href="#coaching"><span class="m-pagenav__in"><span
                                    class="japanese">エグゼクティブコーチング</span></span></a></li>
                    <li><a href="#carrer"><span class="m-pagenav__in"><span class="japanese">キャリアコーチング</span></span></a>
                    </li>
                    <li><a href="#training"><span class="m-pagenav__in"><span
                                    class="japanese">人材研修プログラム</span></span></a></li>
                    <li><a href="#asso"><span class="m-pagenav__in"><span
                                    class="japanese">一般社団法人キャリアコーチング協会</span></span></a></li>
                    <!-- <li><a href="#impact"><span class="m-pagenav__in"><span class="japanese">組織コーチング</span></span></a></li> -->
                    <!--				<li><a href="#school"><span class="m-pagenav__in"><span class="japanese">コーチングスクール</span></span></a></li>-->
                </ul>
            </div>
            <div class="m-law__content js-accordion" id="coaching">
                <h2 class="m-law__heading">エグゼクティブコーチング</h2>
                <div class="m-law__detail">
                    <table class="m-table">
                        <?php
            if (have_rows('law-table-personal')) :
              while (have_rows('law-table-personal')) : the_row();
          ?>
                        <tr>
                            <th><?php the_sub_field('heading'); ?></th>
                            <td class="wp-content"><?php the_sub_field('text'); ?></td>
                        </tr>
                        <?php endwhile;else : endif; ?>
                    </table>
                </div>
            </div>
            <div class="m-law__accordion js-accordion" id="carrer">
                <h2 class="m-law__heading">キャリアコーチング</h2>
                <div class="m-law__detail">
                    <table class="m-table">
                        <?php
            if (have_rows('law-table-career')) :
              while (have_rows('law-table-career')) : the_row();
          ?>
                        <tr>
                            <th><?php the_sub_field('heading'); ?></th>
                            <td class="wp-content"><?php the_sub_field('text'); ?></td>
                        </tr>
                        <?php endwhile;else : endif; ?>
                    </table>
                </div>
            </div>
            <div class="m-law__accordion js-accordion" id="training">
                <h2 class="m-law__heading">人材研修プログラム</h2>
                <div class="m-law__detail">
                    <table class="m-table">
                        <?php
            if (have_rows('law-table-training')) :
              while (have_rows('law-table-training')) : the_row();
          ?>
                        <tr>
                            <th><?php the_sub_field('heading'); ?></th>
                            <td class="wp-content"><?php the_sub_field('text'); ?></td>
                        </tr>
                        <?php endwhile;else : endif; ?>
                    </table>
                </div>
            </div>
            <div class="m-law__accordion js-accordion" id="asso">
                <h2 class="m-law__heading">一般社団法人キャリアコーチング協会</h2>
                <div class="m-law__detail">
                    <table class="m-table">
                        <?php
            if (have_rows('law-table-coaching')) :
              while (have_rows('law-table-coaching')) : the_row();
          ?>
                        <tr>
                            <th><?php the_sub_field('header'); ?></th>
                            <td class="wp-content"><?php the_sub_field('text'); ?></td>
                        </tr>
                        <?php endwhile;else : endif; ?>
                    </table>
                </div>
            </div>
            <!--
		<div class="m-law__accordion js-accordion" id="school">
			<h2 class="m-law__heading">コーチングスクール</h2>
			<div class="m-law__detail">
				<table class="m-table">
        <?php
            if (have_rows('law-table-school')) :
              while (have_rows('law-table-school')) : the_row();
          ?>
					<tr>
						<th><?php the_sub_field('heading'); ?></th>
						<td class="wp-content"><?php the_sub_field('text'); ?></td>
					</tr>
          <?php endwhile;else : endif; ?>
				</table>
			</div>
		</div>
-->

        </div>
    </section>

</main>

<?php get_template_part('parts/bread'); ?>

<?php get_footer(); ?>