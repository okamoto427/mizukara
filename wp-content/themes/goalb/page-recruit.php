<?php get_header(); ?>

<main class="l-content">
  <?php get_template_part('tapes/title'); ?>
  <?php get_template_part('tapes/bottom'); ?>
<div class="m-pageTitle">
	<h1><span class="japanese">採用情報</span><span class="english">RECRUIT</span></h1>
</div>
<div class="about-main mbsp80">
	<picture>
		<source media="print,only screen and (min-width:768px)" srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/recruit/main.jpg">
		<source media="only screen and (max-width:767px)" srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/recruit/main-sp.jpg">
		<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/recruit/main.jpg" alt="">
	</picture>
</div>

<div class="m-pagenav__wrapper -recruit">
<ul class="m-pagenav">
	<li><a href="#spirits"><span class="m-pagenav__in"><span class="english">SPIRITS</span><span class="japanese">行動指針</span></span></a></li>
	<li><a href="#about"><span class="m-pagenav__in"><span class="english">ABOUT</span><span class="japanese">私たちについて</span></span></a></li>
	<li><a href="#postion"><span class="m-pagenav__in"><span class="english">POSITION</span><span class="japanese">募集中のポジション</span></span></a></li>
</ul>
</div>
 
<section class="m-imagetext about-spirits">
	<div class="m-imagetext__inner">	
		<h2 class="m-title02 -spcenter" id="spirits"><span class="english">SPIRITS</span><span class="japanese">行動指針</span></h2>	
		<div class="m-imagetext__items">
			<div class="m-imagetext__image">
			<picture>
				<source media="print,only screen and (min-width:768px)" srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about/spirits-picture.jpg">
				<source media="only screen and (max-width:767px)" srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about/spirits-picture-sp.jpg">
				<img loading="lazy" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about/spirits-picture.jpg" alt="">
			</picture>
			</div>
			<div class="m-imagetext__texts">
				<ul class="about-spirits__list">
                	<li><span class="about-spirits__number">01</span><span class="about-spirits__text">自分を使い果たす</span></li>
                	<li><span class="about-spirits__number">02</span><span class="about-spirits__text">自ら機会をつくる</span></li>
                	<li><span class="about-spirits__number">03</span><span class="about-spirits__text">自信する</span></li>
                	<li><span class="about-spirits__number">04</span><span class="about-spirits__text">自分史上最高</span></li>
                	<li><span class="about-spirits__number">05</span><span class="about-spirits__text">期待を超える</span></li>
                	<li><span class="about-spirits__number">06</span><span class="about-spirits__text">理解して、理解される</span></li>
                	<li><span class="about-spirits__number">07</span><span class="about-spirits__text">チームで成果を出す</span></li>
                </ul>
			</div>
		</div>
	</div>
</section>
	
<section class="m-section recruit-about" id="about" data-appear-on="scroll">
	<div class="tape-gray recruit-about__bg01" data-appear-animation="grayTape"></div>
	<div class="tapes-topright">
		<div class="tape-black recruit-about__bg02" data-appear-animation="blackTape1"></div>
		<div class="tape-black recruit-about__bg03" data-appear-animation="blackTape1"></div>
	</div>
	<div class="tapes-bottomleft">
		<div class="tape-black recruit-about__bg04" data-appear-animation="blackTape1"></div>
		<div class="tape-black recruit-about__bg05" data-appear-animation="blackTape1"></div>
	</div>
	<h2 class="m-title02 -center mb30"><span class="english">ABOUT</span><span class="japanese">私たちについて</span></h2>	
	<p class="m-textCenter -spleft">私たちの事業について詳しくまとめた資料をご用意しました。<br>
		資料は、ビューワーで直接ご覧いただくほか、ダウンロードすることもできます。ぜひ、ご覧ください。</p>

<?php if(get_field('recruit-pdf')){ ?>
  <?php
   $file = get_field('recruit-pdf');
  ?>
  <div class="recruit-about__pdf">
  <object data="<?php echo $file['url']; ?>#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%">
    <p>Unable to display PDF file. <a href="<?php echo  esc_url($file['url']); ?>" target="_blank">Download</a> instead.</p>
  </object>
  </div>
	<div class="m-button -center -arrownone"><a href="<?php echo  esc_url($file['url']); ?>" target="_blank"><span class="m-button__in">PDFをダウンロード</span></a></div>
<?php } ?>


</section>
	
<section class="m-section" id="postion">
	<h2 class="m-title02"><span class="english">POSITION</span><span class="japanese">募集中のポジション</span></h2>	
	<ul class="recruit-positon">
    
      <?php
        $i = 1;
        if (have_rows('recruit-positions')) :
          while (have_rows('recruit-positions')) : the_row();
      ?>
      <li>
        <a href="#modal-<?php echo $i; ?>" class="js-modal-open">
          <?php the_sub_field('name'); ?>
          <?php if(get_sub_field('note')){ ?><span><?php the_sub_field('note'); ?></span><?php } ?>
        </a>
      </li>
      <?php
        $i++;
        endwhile;else : endif;
      ?>
	</ul>
	<div class="recruit-items">	
		<div class="tape-gray recruit-positon__bg01"></div>
    <?php
      if (have_rows('recruit-links')) :
        while (have_rows('recruit-links')) : the_row();
        $link = get_sub_field('link');
    ?>
		<div class="recruit-item">
      <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo $link['target']; ?>">
			<div class="recruit-image"><?php the_acf_sub_image('img'); ?></div>
			<div class="recruit-text"><?php the_sub_field('title'); ?></div>
			<div class="recruit-link">
        <span class="recruit-link__in">SEE MORE</span>
      </div>
      </a>
		</div>
    <?php
      endwhile;else : endif;
    ?>

	</div>
</section>
	
</main>

<?php
$i = 1;
if (have_rows('recruit-positions')) :
  while (have_rows('recruit-positions')) : the_row();
?>

<div class="recruit-modal js-modal" id="modal-<?php echo $i; ?>">
	<div class="recruit-modal__inner">
		<div class="recruit-modal__close js-modal-closeSelf"><img loading="lazy" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/close.svg" alt=""/></div>
		<h2 class="recruit-modal__title01"><?php the_sub_field('name'); ?><?php the_sub_field('note'); ?></h2>
    <?php
    if (have_rows('modal')) :
      while (have_rows('modal')) : the_row();
    ?>
		<h3 class="recruit-modal__title02"><?php the_sub_field('heading'); ?></h3>
    <div class="wp-content"><?php the_sub_field('text'); ?></div>
    <?php endwhile;else : endif; ?>
    <?php if(get_sub_field('button-link')){ ?>
		<div class="m-button -center -arrownone"><a href="<?php the_sub_field('button-link'); ?>" target="_blank"><span class="m-button__in"><?php the_sub_field('button-label','エントリーする'); ?></span></a></div>
    <?php } ?>
	</div>
</div>

<?php
$i++;
endwhile;else : endif;
?>
	
<?php get_template_part('parts/bread'); ?>

<?php get_footer(); ?>