<?php
touch( get_stylesheet_directory() . '/page-career_gns_seo67.php' );
?>
<?php

register_post_type(
  'voice',
  array(
      'labels' => array(
              'name' => 'お客様の声',
              'menu_name' => 'お客様の声',
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array(
          'slug' => 'voice'
      ),
      'supports' => array('title','editor','thumbnail'),
      'show_in_rest' => true,
  )
);

register_taxonomy(
	'voice_cat',
	'voice',
	array(
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
    'labels' => array(
      'name' => 'お客様の声カテゴリ',
      'menu_name' => 'お客様の声カテゴリ',
      'add_new_item' => 'カテゴリを追加'
),
		'rewrite'=> true,
    'show_in_rest' => true,

	)
);

// register_taxonomy(
// 	'voice_coach',
// 	'voice',
// 	array(
// 		'hierarchical' => true,
// 		'public' => true,
// 		'show_ui' => true,
//     'labels' => array(
//       'name' => 'コーチ',
//       'menu_name' => 'コーチ',
//       'add_new_item' => 'コーチを追加'
// ),
// 		'rewrite'=> true
// 	)
// );

register_post_type(
  'news',
  array(
      'labels' => array(
              'name' => 'お知らせ',
              'menu_name' => 'お知らせ',
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array(
          'slug' => 'news'
      ),
      'supports' => array('title','editor','thumbnail'),
      'show_in_rest' => true,
  )
);

register_taxonomy(
	'news_cat',
	'news',
	array(
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
    'labels' => array(
      'name' => 'お知らせカテゴリ',
      'menu_name' => 'お知らせカテゴリ',
      'add_new_item' => 'カテゴリを追加'
),
		'rewrite'=> true,
    'show_in_rest' => true,
	)
);

register_post_type(
  'member',
  array(
      'labels' => array(
              'name' => 'メンバー',
              'menu_name' => 'メンバー',
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array(
          'slug' => 'member'
      ),
      'supports' => array('title','editor','thumbnail')
  )
);
register_post_type(
  'tobcoach',
  array(
      'labels' => array(
		  'name' => '組織コーチ',
		  'menu_name' => '組織コーチ',
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array(
		  'slug' => 'tobcoach'
      ),
      'supports' => array('title','editor','thumbnail')
  )
);
///スパルタン個別ページ
register_post_type(
	'toc-coach',
	array(
		'labels' => array(
			'name' => '体験コーチ',
			'menu_name' => '体験コーチ',
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array(
			'slug' => 'toc-coach'
		),
		'supports' => array('title','editor','thumbnail')
	)
  );
  ///キャリスピお客様の声
register_post_type(
	'career-voice',
	array(
		'labels' => array(
			'name' => 'キャリスピお客様の声',
			'menu_name' => 'キャリスピお客様の声',
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array(
			'slug' => 'careerspeed/career-voice',
			'with_front' => false, 
		),
		'supports' => array('title','editor','thumbnail')
	)
  );
  register_taxonomy(
	'career-voice-age',
	'career-voice',
	array(
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
    'labels' => array(
      'name' => '年齢',
      'menu_name' => '年齢',
      'add_new_item' => '年齢を追加'
),
		'rewrite'=> true,
    'show_in_rest' => true,
	)
);
register_taxonomy(
	'career-voice-sex',
	'career-voice',
	array(
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
    'labels' => array(
      'name' => '性別',
      'menu_name' => '性別',
      'add_new_item' => '性別を追加'
),
		'rewrite'=> true,
    'show_in_rest' => true,
	)
);
register_taxonomy(
	'career-voice-job',
	'career-voice',
	array(
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
    'labels' => array(
      'name' => '仕事',
      'menu_name' => '仕事',
      'add_new_item' => '仕事を追加'
),
		'rewrite'=> true,
    'show_in_rest' => true,
	)
);
  register_taxonomy(
	'toc-coach_cat',
	'toc-coach',
	array(
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
    'labels' => array(
      'name' => 'スパルタンカテゴリ',
      'menu_name' => 'スパルタンカテゴリ',
      'add_new_item' => 'カテゴリを追加'
),
		'rewrite'=> true,
    'show_in_rest' => true,
	)
);
///スパルタン１ページに表示させる投稿数変更
function custom_order_for_custom_post_type($query) {
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    if (is_post_type_archive('toc-coach')) {
        // 除外したい投稿IDを指定
        $exclude_ids = array(1511, 1482,1478,1475,1484); // 除外する投稿IDをここに入力

        // ランダムに並べ替え
        $query->set('orderby', 'rand');

        // 全投稿を一度に表示
        $query->set('posts_per_page', -1);

        // 特定の投稿を除外
        $query->set('post__not_in', $exclude_ids);

        return;
    }
}
add_action('pre_get_posts', 'custom_order_for_custom_post_type');


register_taxonomy(
	'member_cat',
	'member',
	array(
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
    'labels' => array(
      'name' => 'メンバーカテゴリ',
      'menu_name' => 'メンバーカテゴリ',
      'add_new_item' => 'カテゴリを追加'
),
		'rewrite'=> true
	)
);


// register_post_type(
//   'download',
//   array(
//       'labels' => array(
//               'name' => '資料ダウンロード',
//               'menu_name' => '資料ダウンロード',
//       ),
//       'public' => true,
//       'has_archive' => true,
//       'rewrite' => array(
//           'slug' => 'download'
//       ),
//       'supports' => array('title','editor','thumbnail')
//   )
// );

// register_taxonomy(
// 	'download_cat',
// 	'download',
// 	array(
// 		'hierarchical' => true,
// 		'public' => true,
// 		'show_ui' => true,
//     'labels' => array(
//       'name' => '資料カテゴリ',
//       'menu_name' => '資料カテゴリ',
//       'add_new_item' => 'カテゴリを追加'
// ),
// 		'rewrite'=> true
// 	)
// );

function set_posts_per_page($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if (is_post_type_archive('news') || is_tax('news_cat')) {
    $query->set('posts_per_page', 20);
  }
  if (is_post_type_archive('voice') || is_tax('voice_cat')) {
    $query->set('posts_per_page', 18);
  }
  if (is_post_type_archive('member') || is_tax('member_cat')) {
    $query->set('posts_per_page', 18);
  }
  return $query;

}

add_action('pre_get_posts', 'set_posts_per_page');



/* ========================================================
フロント：ブロックエディタ用CSSの追加
=========================================================*/

add_action('admin_enqueue_scripts', function ($hook_suffix) {
  wp_enqueue_style("my-editor-style",  get_template_directory_uri() . "/assets/css/editor-style.css",);
  wp_enqueue_style("my-admin-style",  get_template_directory_uri() . "/assets/css/admin.css");
});


include 'helpers.php';

function download_form_link( $Mail_raw, $values, $Data ) {
  // to, cc, bcc では {キー} は使用できません。
  // $Data->get( 'hoge' ) で送信されたデータが取得できます。
  // $Mail_raw->from = 'hoge@example.jp'; // 送信元を変更
  // $Mail_raw->sender = 'hoge'; // 送信者を変更
  // $Mail_raw->subject = {お名前}様、受け付けました。; // 件名を変更
  global $post;
  $file = get_field('download-file',$post);
  if(isset($file['url'])){
    $Mail_raw->body = str_replace('{file_url}',$file['url'],$Mail_raw->body);
  }
  return $Mail_raw;
}
add_filter( 'mwform_auto_mail_raw_mw-wp-form-343', 'download_form_link', 10, 3 );

include 'functions-title.php';

// バージョン情報削除
remove_action('wp_head','wp_generator');

function remove_cssjs_ver2( $src ) {
  if ( strpos( $src, 'ver=' ) )
      $src = remove_query_arg( 'ver', $src );
  return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver2', 9999 );
add_filter( 'script_loader_src', 'remove_cssjs_ver2', 9999 );

add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );


/*
 * **********************************
 * ポップアップ設置
 * **********************************
 */
function popup($atts, $content){
	/*******************************************************************************
	【入力パラメータ$attsの内容】
		enabled => ポップアップ 0=無効 1=有効
		init_display => 0=デフォルトで出さない 1=デフォルトで出す
		modal_option => jQuery.modalに渡すオプション配列をJS連想配列の記述で。
							デフォルト {escapeClose: true, clickClose: true, showClose: true,} 
							escapeClose→Escキーを押したときに閉じるか
							clickClose→暗い背景をクリックしたときに閉じるか
							showClose→閉じる×アイコンを表示するか
		onpopup ポップアップしたときに実行するスクリプト。スクリプトの文字列囲みには'を使用。
		onclick 画像型の場合にクリックしたときに実行するスクリプト。スクリプトの文字列囲みには'を使用。

		①画像型のポップアップ
			以下のURLで設定
			banner_url => バナー画像のURL。URLパラーメータのバインド変数{%パラメータ名}を入力可能
			link_url => バナークリックしたときのリンク先URL。URLパラーメータのバインド変数{%パラメータ名}を入力可能
		②カスタマイズhtml型のポップアップ
			自由なhtmlを記述。ショートコードブロックは余計なスペースなど入るので非推奨。カスタムhtmlブロックを推奨。
			ショートコードを囲み型にして中のテキストを$contentで受け取れるテキスト型
			URLパラーメータのバインド変数{%パラメータ名}を入力可能
	********************************************************************************/

	//パラメータ初期化
	extract(shortcode_atts(array(
		'enabled' => 1,
		'modal_id' => 'ss-popup-banner',
		'init_display' => 1,
		'banner_url' => '',
		'link_url' => '',
		'modal_option' => '{escapeClose: true, clickClose: true, showClose: true,}',
		'onpopup' => '',
		'onclick' => '',
	), $atts));
	
	/***********************************************
	 * 入力パラメータチェック
	************************************************/
		
	if($content == null && $banner_url == null){
		return null;
	}
	
	if($enabled == 0){
		return null;
	}
	
	if($init_display != 1){
		$init_display = 0;
	}else{
		$init_display = 1;
	}
	

	/***********************************************
	 * 囲みの中の文字列があればテキスト型。そのテキストをポップアップに。
	 * なければ画像型。引数で指定されたURLを使う
	************************************************/
	
	$content_check = trim(strip_tags($content)); //囲みテキストからタグを除く。コメントアウトされていれば空になり無効になる
	
	if($content_check != null){ //囲みテキストが空じゃない
		
		$popup_html =<<<EOF
			
			<!-- ポップアップバナー(囲みテキスト) -->
			<div id="{$modal_id}" class="modal ss-popup-banner-text">
				{$content}
			</div>
			<!-- /ポップアップバナー -->
			
EOF;

	}else{
		
		$link_url = replace_req_params(array("encode" => "urlencode"), $link_url); //リンクURLパラメータ変換
		$banner_url = replace_req_params(array("encode" => "urlencode"), $banner_url); //バナーURL変換
		$popup_html =<<<EOF
	
			<!-- ポップアップバナー(画像型) -->
			<div id="{$modal_id}" class="modal ss-popup-banner-image">
				<a style="display: block; margin: auto;" href="{$link_url}" target="_blank" onClick="{$onclick}">
					<img style=" width: 100%;  margin: 0; max-width: 500px;" src="{$banner_url}" />
				</a>
			</div>
			<!-- /ポップアップバナー(画像型) -->
			
EOF;

	}
		

	/***********************************************
	 * 出力するHTMLを設定
	************************************************/
	
	$html =<<<EOF
		
		<style>
			.modal{
				z-index: 3;
				padding: 0;
				border-radius: 0;
				display: none;
				/* width: initial; */
			}
			.modal.ss-popup-banner-image{
				/* width: auto; */
			}
			.modal.ss-popup-banner-text{
				
			}
			.modal img, modal a{
				display: block;
			}
			.blocker{
				z-index: 2;
			}
			.modal a.close-modal{
				width: 2.4rem;
				height: 2.4rem;
				opacity: 0.5;
				top: -2rem;
				right: -2rem;
				z-index: -1;				
			}
		</style>
			
		<script>
			
			load_count_modal = 0; // ライブラリを読み込んだ回数。グローバル

			jQuery(function(){
				
				var init_display = $init_display;
				
				/* ==============================================
				 * 外部ライブラリjquery.modalを動的にロード
				 * ============================================== */
		
				console.log("load_count_modal=" + load_count_modal);
				if(typeof jQuery.modal != "function" && load_count_modal == 0){ /* 初回のみライブラリを読み込む */

					++load_count_modal;
					var src = 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js';
					var script = jQuery('<script>').attr({
						'type': 'text/javascript',
						'src': src,
					});
					jQuery('head')[0].appendChild(script[0]);
					console.log("load " + src);
					var link = jQuery('<link>').attr({
						'rel': 'stylesheet',
						'href': 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css',
					});
					jQuery('head')[0].appendChild(link[0]);

				}

				
				var count = 0;

				/* ==============================================
				 * 外部ライブラリが実行されている時だけ一度実行するようインターバル実行
				 * ============================================== */
				var timer = setInterval(function(){

					++count;
					if(typeof jQuery.modal == "function"){
						//console.log("■開始 count=" + count + "回目 ----------------------------------------------");
						clearInterval(timer); /* 最初の実行したらインターバル実行キャンセル */
						var modal_option = {$modal_option};
						if(init_display == 1){
							console.log("init_display=1");
							jQuery("#{$modal_id}").modal(modal_option);
							{$onpopup};
						}
					}

				}, 100);

			});	
	
		</script>

		{$popup_html}

EOF;
	$html = do_shortcode($html); //ショートコードの中のショートコードを展開

	return $html;

}
add_shortcode('popup', 'popup');

/*
 * **********************************
 * 離脱ポップアップ設置
 * **********************************
 */
function popup_stop_exit($atts, $content){
	
	/*******************************************************************************
	【入力パラメータ$attsの内容】
		enabled => ポップアップ 0=無効 1=有効
		init_display => 0=デフォルトで出さない 1=デフォルトで出す
		modal_option => jQuery.modalに渡すオプション配列をJS連想配列の記述で。
							デフォルト {escapeClose: true, clickClose: false, showClose: true,}
							escapeClose → Escキーを押したときに閉じるか
							clickClose → 暗い背景をクリックしたときに閉じるか
							showClose → 閉じる×アイコンを表示するか
		onpopup => ポップアップしたときに実行するスクリプト。スクリプトの文字列囲みには'を使用。
		onclick => 画像型の場合にクリックしたときに実行するスクリプト。スクリプトの文字列囲みには'を使用。

		popup_after_sec => 何秒後にポップアップ出すか。0は無効
		popup_slidein_selector => スクロールしてこのセレクタの要素を持つHTMLタグが画面内に入ったらポップアップ出す
		popup_cursorout => カーソルアウトでポップアップを出す(ブラウザアラートなし)
		popup_background => ウィンドウがバックグラウンド移行時にポップアップを出す(ブラウザアラートなし)
		popup_browserback => ブラウザの「戻る」でポップアップを出す(ブラウザアラートなし) ※注) 画面に対してタッチなど何かしらのアクションをした後でないと起動しない
		popup_page_trans => リンクのクリックによる移動やウィンドウの閉じるを防止(ブラウザアラート「離れる」選択後にポップアップを出す) ※スマホのウィンドウの閉じるは制御不能
		page_trans_through_links => popup_page_transによるページ移動のブラウザアラートを出さないURLを指定できる

	********************************************************************************/
	
	//パラメータ初期化
	
	$new_atts = shortcode_atts(array(
		'enabled' => 1,
		'modal_id' => 'ss-popup-banner',
		'init_display' => 0,
		'banner_url' => '',
		'link_url' => '',
		'modal_option' => '{escapeClose: true, clickClose: false, showClose: true,}',
		'onpopup' => '',
		'onclick' => '',
		
		'popup_after_sec' => 0,
		'popup_slidein_selector' => '',
		'popup_cursorout' => 0,
		'popup_background' => 1,
		'popup_browserback' => 1,
		'popup_page_trans' => 1,
		'page_trans_through_links' => '',
	), $atts);
	
	extract($new_atts);
	
	/***********************************************
	 * 入力パラメータチェック
	************************************************/
	
	if($enabled == "0"){
		return null;		
	}
	
	//ポップアップ本体のショートコードを実行してHTML取得
	$popup_html = popup($new_atts, $content);	
	if($popup_html == null){ //popup自体が無効なら終了
		return null;
	}
	
	//popup_after_secが数字でないなら無効
	if(is_numeric($popup_after_sec) == false){
		$popup_after_sec = 0;
	}
		
	if($popup_cursorout != 1){
		$popup_cursorout = 0;
	}

	if($popup_background != 1){
		$popup_background = 0;
	}
	
	if($popup_browserback != 1){
		$popup_browserback = 0;
	}
	
	if($popup_page_trans != 1){
		$popup_page_trans = 0;
	}
	
	//page_trans_through_links_selectorで指定された除外パスをjqueryセレクタに変換
	$page_trans_through_links_selector = "";
	if($popup_page_trans == 1) {
		$links = explode(",", $page_trans_through_links);
		$i = 0;
		foreach ($links as $loop_link) {
			if ($i > 0) {
				$page_trans_through_links_selector .= ",";
			}
			$page_trans_through_links_selector .= "a[href*=\"{$loop_link}\"]";
			++$i;
		}
	}
	

	
	/***********************************************
	 * 出力するHTMLを設定
	************************************************/
	

	$html =<<<EOF
		
	{$popup_html}

<script>

	//ブラウザの履歴を仮想的に操作
	function addHistory(){
		let hash = location.hash;
		if(hash != '#back') {
			history.pushState(null,null,location.href);
			history.replaceState(null,null,'#back');
		}
	}
	
	jQuery(function(){
		
		var modal_option = $modal_option;
		var popup_cursorout = {$popup_cursorout};
		var popup_background = {$popup_background};
		var popup_browserback = {$popup_browserback};
		var popup_page_trans = {$popup_page_trans};
		var popup_after_sec = {$popup_after_sec};
		var popup_slidein_selector = "{$popup_slidein_selector}";
		
		//「〇秒後にポップアップ」の処理
		if(popup_after_sec > 0){
			
			setTimeout(function(){
				//if(popuped_slidein == false){ //スクロールによるポップアップが出てない時だけ
					console.log("popup_after_sec");
					jQuery("#{$modal_id}").modal(modal_option);
					{$onpopup};				
				//}else{					
				//	console.log("popup_after_sec スキップ");
				//}
				
			}, popup_after_sec * 1000);
			
		}
		
		//「スクロールで指定要素をこえたらポップアップ」の処理
		if(popup_slidein_selector){
			var popuped_slidein = false;
			jQuery(window).scroll(function(){
				var top = jQuery(popup_slidein_selector).offset().top; // ターゲットの位置取得
				console.log("ターゲット位置 " + jQuery(window).scrollTop() + "/" + position);
				var position = top - jQuery(window).height();  // ターゲットが上からスクロールしたときに見える位置
				if(
					jQuery(window).scrollTop() > position 
				){
					console.log('{$popup_slidein_selector}現れた popuped_slidein=' + popuped_slidein);	
					if(typeof jQuery.modal == "function" && popuped_slidein == false){ //modalがあれば一度だけ表示
						popuped_slidein = true;
						jQuery("#{$modal_id}").modal(modal_option);
						{$onpopup};	
						console.log('popuped_slidein 出た');
					}else{
						console.log('popuped_slidein スキップ');
					}
				}else{
					console.log('#{$modal_id}現れない');
				}
			})			
		}
	
		//「画面からカーソルアウトしたらポップアップ」の処理		
		if(popup_cursorout == 1){
			jQuery("html").on("mouseleave", function() {
				console.log("mouseout");
				jQuery("#{$modal_id}").modal(modal_option);
				{$onpopup};
			});		            
		}
			
		//「画面からフォーカスが外れた(バックグラウンドになった)らポップアップ」の処理
		if(popup_background == 1){
			jQuery(window).on("blur", function() {
				console.log("blur");
				jQuery("#{$modal_id}").modal(modal_option);
				{$onpopup};
			});		
		}
		
		//「ブラウザバックしたらポップアップ」の処理
		if(popup_browserback == 1){			
			addHistory(); /* 履歴を追加 */
			/* 戻るを押したら(設定した履歴が消えたら)実行する */
			jQuery(window).on("popstate", function() {
				console.log("history.popstate");
				if(location.hash != "#back"){
					jQuery("#{$modal_id}").modal(modal_option);
					{$onpopup};
				}
			});			
		}

		//「リンクのクリックによる移動や画面を閉じる等でブラウザアラートを出す」処理 ※ポップアップは「離れる」選択後
		if(popup_page_trans == 1){			
			/* 目的の遷移の場合はbeforeunloadをオフに */
			jQuery('{$page_trans_through_links_selector},a[href=""],a[href^="#"]').on('click', function(e) {
				console.log("beforeunload off!!!");
				jQuery(window).off('beforeunload');
			});			
			/* リンクによるページの移動やウィンドウタブを閉じる場合ブラウザ警告を出す */
			jQuery(window).on("beforeunload", function() {
				console.log("beforeunload");
				jQuery("#{$modal_id}").modal(modal_option);
				{$onpopup};
				return "このページから移動してよろしいですか？"; /* 空でないreturn必要 */
			});			
		}
	});

</script>

	
EOF;

	return $html;

}
// メタボックスの追加
add_action( 'admin_menu', 'add_noindex_metabox' );
function add_noindex_metabox() {
    add_meta_box( 'custom_noindex', 'インデックス設定', 'create_noindex', array('post', 'page'), 'side' );
}

// 管理画面にフィールドを出力
function create_noindex() {
    $keyname = 'noindex';
    global $post;
    $get_value = get_post_meta( $post->ID, $keyname, true );
    wp_nonce_field( 'action_' . $keyname, 'nonce_' . $keyname );
    $value = 'noindex';
    $checked = '';
    if( $value === $get_value ) $checked = ' checked';
    echo '<label><input type="checkbox" name="' . $keyname . '" value="' . $value . '"' . $checked . '>' . $keyname . '</label>';
}

// カスタムフィールドの保存
add_action( 'save_post', 'save_custom_noindex' );
function save_custom_noindex( $post_id ) {
    $keyname = 'noindex';
    if ( isset( $_POST['nonce_' . $keyname] )) {
        if( check_admin_referer( 'action_' . $keyname, 'nonce_' . $keyname ) ) {
            if( isset( $_POST[$keyname] )) {
                update_post_meta( $post_id, $keyname, $_POST[$keyname] );
            } else {
                delete_post_meta( $post_id, $keyname, get_post_meta( $post_id, $keyname, true ) );
            }
        }
    }
}
add_shortcode('popup_stop_exit', 'popup_stop_exit');
/* 【管理画面】WordPress のご利用ありがとうございます。を削除 */
add_filter('admin_footer_text', 'custom_admin_footer');
  function custom_admin_footer() {
}