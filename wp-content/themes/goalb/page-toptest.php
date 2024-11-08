<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta content="width=device-width" name="viewport">
<meta content="telephone=no" name="format-detection">
<meta content="IE=edge" http-equiv="X-UA-Compatible">

<meta content="" name="description">
<meta content="" name="keywords">
<!--  OGPの設定  -->
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:type" content="website">
<meta property="og:site_name" content="">
<meta content="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/sns.png" property="og:image">
<!--  アイコン関連  -->
<link rel="icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/appletouch.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/webclip.png">
<!--  CSS  -->
<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/reset.css" rel="stylesheet">
<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/style.css?v=3" rel="stylesheet">
<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/animation-test.css?v=2" rel="stylesheet">
<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/editor-style.css" rel="stylesheet">
<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/slick/slick-theme.css" rel="stylesheet" type="text/css">
<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/slick/slick.css" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&family=Prompt:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body id="top" <?php echo body_class_ex(); ?>>
	
<header class="l-header">
<div class="l-header__inner">
	<div class="l-header__logo"><a href="<?php echo esc_url( home_url() ); ?>/"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/logo.svg" alt="GOAL-B" /></a></div>
	<nav class="nav-global pc">
	<ul>
		<li><a href="<?php echo esc_url( home_url() ); ?>/about/"><span class="english">ABOUT</span><span class="japanese">GOAL-Bについて</span></a></li>
		<li><span class="nav-business"><span class="english">BUSINESS</span><span class="japanese">事業内容</span></span>
			<div class="nav-global__in">
			<ul>
				<li class="nav-global__intitle"><span class="english">BUSINESS</span><span class="japanese">事業内容</span></li>
				<li><a href="<?php echo esc_url( home_url() ); ?>/coaching/">パーソナルコーチング</a></li>
				<li><a href="<?php echo esc_url( home_url() ); ?>/careerspeed/" target="_blank">キャリアコーチング</a></li>
				<li><a href="<?php echo esc_url( home_url() ); ?>/impact/">組織コーチング</a></li>
				<li><a href="#">コーチングスクール</a></li>
			</ul>
			</div>
		</li>
		<li><a href="<?php echo esc_url( home_url() ); ?>/member/"><span class="english">MEMBER</span><span class="japanese">メンバー</span></a></li>
		<li><a href="<?php echo esc_url( home_url() ); ?>/recruit/"><span class="english">RECRUIT</span><span class="japanese">採用</span></a></li>
		<li><a href="<?php echo esc_url( home_url() ); ?>/news/"><span class="english">NEWS</span><span class="japanese">お知らせ</span></a></li>
	</ul>
	</nav>			
	<div class="nav-header">
		<ul>
			<li><a href="<?php echo esc_url( home_url() ); ?>/contact/"><span>CONTACT</span></a></li>
		</ul>
	</div>
	<div class="m-hamburger sp">
		<div class="m-hamburger__lines">
		<div><div></div></div><div><div></div></div>
		</div>
	</div>
	<div class="l-header__menus">
		<div class="l-header__logoIn"><a href="<?php echo esc_url( home_url() ); ?>/"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/logo-white.svg" alt="GOAL-B" /></a></div>
		<nav class="nav-global">
			<div class="nav-heading">サービス・事業</div>
			<div class="nav-row">
				<ul class="nav-link">
					<li><a href="<?php echo esc_url( home_url() ); ?>/careerspeed/" target="_blank">キャリアコーチング</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/coaching/">パーソナルコーチング</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/coachingschool/">コーチングスクール</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/impact/">組織コーチング</a></li>
				</ul>
				<ul class="nav-link">
					<li><a href="<?php echo esc_url( home_url() ); ?>/voice/">お客様の声</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/download/">資料ダウンロード</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/policy/">利用規約</a></li>
				</ul>
			</div>
			<div class="nav-heading">企業情報</div>
			<div class="nav-row">
				<ul class="nav-link">
					<li><a href="<?php echo esc_url( home_url() ); ?>/about/">GOAL-Bについて</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/member/">メンバー</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/recruit/">採用情報</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/news/">お知らせ</a></li>
				</ul>
				<ul class="nav-link">
					<li><a href="<?php echo esc_url( home_url() ); ?>/privacy/">プライバシーポリシー</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/law/">特定商法取引法<br class="sp">に基づく表記</a></li>
				</ul>
				<ul class="nav-link">
					<li><a href="#" target="_blank">GOAL-Bマガジン</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/contact/">お問い合わせフォーム</a></li>
				</ul>
			</div>
		</nav>	
	</div>
</div>
</header>

<div class="home-cover" data-appear-on="load">
	<div class="home-cover__texts">
		<div class="home-cover__text01" data-appear-animation="blackTapeText">全ての人に可能性がある</div>
		<div class="home-cover__text02" data-appear-animation="blackTapeText">NOTHING IS IMPOSSIBLE</div>
		<div class="home-cover__text03" data-appear-animation="blackTapeText">GOAL-Bは<br class="sp">「全ての人に可能性がある」を体現し続けます。</div>
	</div>
	<div class="tapes-topleft">
		<div class="tape-gray home-cover__tape01" data-appear-animation="grayTapeLoop"></div>
		<div class="tape-black home-cover__tape02" data-appear-animation="blackTapeLoop1"></div>
		<div class="tape-black home-cover__tape03" data-appear-animation="blackTapeLoop2"></div>
	</div>
	<div class="tapes-bottomright">
		<div class="tape-gray home-cover__tape04" data-appear-animation="grayTapeLoop"></div>
		<div class="tape-black home-cover__tape05" data-appear-animation="blackTapeLoop1"></div>
		<div class="tape-black home-cover__tape06" data-appear-animation="blackTapeLoop2"></div>
		<div class="tape-black home-cover__tape07" data-appear-animation="blackTapeLoop3"></div>
	</div>
</div>
<div class="l-scroll">SCROLL DOWN</div>

<main class="l-content">
   
<section class="m-about spmt-60" data-appear-on="scroll">
	<div class="m-about__inner">
		<div class="tape-gray m-about__bg01" data-appear-animation="grayTape"></div>
		<div class="tape-black m-about__bg02" data-appear-animation="blackTape1"></div>
		<div class="tape-black m-about__bg03" data-appear-animation="blackTape1"></div>
		<div class="tape-black m-about__bg04" data-appear-animation="blackTape1"></div>
		<div class="tape-black m-about__bg05" data-appear-animation="blackTape1"></div>
		<div class="m-about__items">
			<div class="m-about__title">
				<h2 class="m-title01"><span class="english" data-appear-animation="blackTapeTextRotated">ABOUT</span><span class="japanese" data-appear-animation="blackTapeTextRotated">GOAL-Bについて</span></h2>
			</div>
			<div class="m-about__texts" data-appear-animation="fadeIn">
				<div class="m-about__text01 mb60">今日も最高の1日に</div>				
				<div class="m-buttonMore">
					<a href="<?php echo esc_url( home_url() ); ?>/about/">
						<span class="english">SEE MORE</span>
						<span class="japanese">GOAL-Bについて</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
	
<section class="home-business">
	<div class="home-business__inner">			
		<h2 class="m-title02 -center mb30"><span class="english">OUR BUSINESS</span><span class="japanese">GOAL-Bが提供するサービス・事業</span></h2>
		<p class="m-textCenter">「全ての人に可能性がある」を実現することが私たちの仕事です。<br>私たちはコーチングという技術を用いて、理想の現実をつくることを支援します。</p>
		<div class="home-business__items">
			<div class="home-business__item">
				<div class="home-business__image"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/picture01.jpg" alt=""/></div>
				<h3 class="home-business__heading"><span class="japanese">個人向けコーチング事業</span><span class="english">FOR PERSONAL</span></h3>
			  <ul class="home-business__link">
					<li><a href="<?php echo esc_url( home_url() ); ?>/careerspeed/" target="_blank"><span>キャリアコーチング</span></a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/coaching/"><span>パーソナルコーチング</span></a></li>
					<li><a href="#"><span>コーチングスクール</span></a></li>
			  </ul>
			</div>
			<div class="home-business__item">
				<div class="home-business__image"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/picture02.jpg" alt=""/></div>
				<h3 class="home-business__heading"><span class="japanese">企業向けコーチング事業</span><span class="english">FOR COMPANY</span></h3>
			  <ul class="home-business__link">
					<li><a href="<?php echo esc_url( home_url() ); ?>/impact/"><span>組織コーチング</span></a></li>
			  </ul>
			</div>
		</div>
	</div>
</section>
	
<section class="home-member">
	<div class="home-member__inner">
		<div class="tapes-topleft tapes-sptopright" data-appear-on="scroll">
			<div class="tape-gray home-member__bg01" data-appear-animation="grayTape"></div>
			<div class="tape-black home-member__bg02" data-appear-animation="blackTape1"></div>
			<div class="tape-black home-member__bg03" data-appear-animation="blackTape1"></div>	
		</div>
		<h2 class="m-title02 -center"><span class="english">MEMBER</span><span class="japanese">GOAL-Bのメンバー</span></h2>
		<div class="home-member__slideWrapper">
			<div class="home-member__slide">
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member01.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member02.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member03.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member04.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member05.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member07.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member08.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member09.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member10.jpg" alt=""/></div>	
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member11.jpg" alt=""/></div>
			</div>	
			<div class="home-member__slideRtl" dir="rtl">
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member01.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member02.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member03.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member04.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member05.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member07.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member08.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member09.jpg" alt=""/></div>
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member10.jpg" alt=""/></div>	
				<div class="home-member__slideItem"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/member11.jpg" alt=""/></div>
			</div>	
		</div>
		<div class="m-buttonMore -center">
			<a href="<?php echo esc_url( home_url() ); ?>/member/">
				<span class="english">SEE MORE</span>
				<span class="japanese">メンバーについて</span>
			</a>
		</div>
	</div>
</section>

<section class="home-media">
	<div class="home-media__inner" data-appear-on="scroll">	
		<div class="tape-gray home-media__bg01" data-appear-animation="grayTape"></div>
			<div class="tape-black home-media__bg02" data-appear-animation="blackTape1"></div>
			<div class="tape-black home-media__bg03" data-appear-animation="blackTape1"></div>	
			<h2 class="m-title02"><span class="english">MEDIA</span><span class="japanese">GOAL-Bメディア</span></h2>
			<div class="home-media__items">
				<div class="home-media__item">
					<div class="home-media__movie">
						<iframe src="https://www.youtube.com/embed/rXCKKdjclgE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
					<div class="home-media__caption">
						<a href="https://www.youtube.com/watch?v=rXCKKdjclgE" target="_blank">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/media-icon01.png" alt=""/>公式YouTubeチャンネル
						</a>
					</div>
				</div>
				<div class="home-media__item">
					<div class="home-media__movie">
						<iframe src="https://www.youtube.com/embed/BldUMy6hRbI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
					<div class="home-media__caption">
						<a href="https://youtu.be/BldUMy6hRbI" target="_blank">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/media-icon02.png" alt=""/>年収1000万円の男たち
						</a>
					</div>
				</div>
		</div>
	</div>
</section>

<section class="home-news">
	<div class="home-news__inner">	
		<div class="home-news__title">
			<h2 class="m-title01"><span class="english">NEWS</span><span class="japanese">お知らせ</span></h2>
		</div>	
		<div class="home-news__texts">


    <?php
        $posts = get_posts([
          'post_type'  => 'news',
          'numberposts' => 3,
        ]);
        if ($posts) {
    ?>
    <ul class="home-news__list">
    <?php
          foreach ($posts as $post) :
            setup_postdata($post);
    ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        <span class="text"><?php the_title(); ?></span>
      </a>
    </li>
    <?php
          endforeach;
    ?>
    </ul>
    <?php
          wp_reset_postdata();
        }
    ?>
			<div class="m-buttonMore -right">
				<a href="<?php echo get_post_type_archive_link('news'); ?>">
					<span class="english">SEE MORE</span>
					<span class="japanese">お知らせ一覧</span>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="home-social">
	<div class="home-social__inner" data-appear-on="scroll">
		<div class="tape-gray home-social__bg01" data-appear-animation="grayTape"></div>
		<div class="tape-black home-social__bg02" data-appear-animation="blackTape1"></div>
		<div class="tape-black home-social__bg03" data-appear-animation="blackTape1"></div>
		<div class="home-social__items">
			<div class="home-social__item">
				<a href="https://youtube.com/@GOALB" target="_blank">
					<div class="home-social__icon"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/icon-youtube.svg" alt=""/></div>
					<div class="home-social__texts">
						<div class="home-social__text01">YouTube</div>
						<div class="home-social__text02">GOAL-Bの最新情報や、<br>お客様のインタビューを配信中</div>
					</div>
				</a>
			</div>		
			<div class="home-social__item">
				<a href="https://twitter.com/GOALB_JP" target="_blank">
					<div class="home-social__icon"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shared/icon-twitter.svg" alt=""/></div>
					<div class="home-social__texts">
						<div class="home-social__text01">Twitter</div>
						<div class="home-social__text02">GOAL-Bの最新情報や、<br>お客様のインタビューを配信中</div>
					</div>
				</a>
			</div>	
		</div>
	</div>
</section>
	
<section class="m-imagetext">
	<div class="m-imagetext__inner">
		<div class="tapes-topright" data-appear-on="scroll">
			<div class="tape-gray m-imagetext__bg01" data-appear-animation="grayTape"></div>
			<div class="tape-black m-imagetext__bg02" data-appear-animation="blackTape1"></div>
			<div class="tape-black m-imagetext__bg03" data-appear-animation="blackTape1"></div>
		</div>
		<h2 class="m-title02 -center"><span class="english">RECRUIT</span><span class="japanese">採用情報</span></h2>	
		<div class="m-imagetext__items">
			<div class="m-imagetext__image"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home/picture03.jpg" alt=""/></div>
			<div class="m-imagetext__texts">
				<div class="m-imagetext__text01">GOAL-Bで共に<br>可能性を体現しよう</div>
				<div class="m-imagetext__text02">あなたもGOAL-Bの仲間として働き、<br>お客さまの自分史上最高を<br class="sp">引き出していきませんか。</div>
				<div class="m-buttonMore">
					<a href="<?php echo esc_url( home_url() ); ?>/recruit/">
						<span class="english">SEE MORE</span>
						<span class="japanese">採用情報</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="m-tapes__bottomleft" data-appear-on="scroll">
	<div class="tape-gray m-bottomLeft__tape01" data-appear-animation="grayTape"></div>
	<div class="tape-black m-bottomLeft__tape02" data-appear-animation="blackTape1"></div>
	<div class="tape-black m-bottomLeft__tape03" data-appear-animation="blackTape1"></div>
</div>
	
</main>
	
<?php get_footer(); ?>