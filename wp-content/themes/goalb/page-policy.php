<?php get_header(); ?>

	
<main class="l-content">
<?php get_template_part('tapes/title'); ?>
<?php get_template_part('tapes/bottom'); ?>
	
<section class="m-section">
	<div class="m-policy">	
		<div class="m-pageTitle">
			<h2><span class="japanese">利用規約</span><span class="english">TERMS OF SERVICE</span></h2>
		</div>
		<ul class="m-policy__link">
    <?php
      if (have_rows('policy-pdfs')) :
        while (have_rows('policy-pdfs')) : the_row();
        $file = get_sub_field('file');
        if($file){
      ?>
			<li><a href="<?php echo $file['url']; ?>" target="_blank"><?php the_sub_field('title') ?></a></li>
      <?php
        }
        endwhile;else : endif;
      ?>
		</ul>
	</div>
</section>	
</main>

<?php get_template_part('parts/bread'); ?>
	
<?php get_footer(); ?>