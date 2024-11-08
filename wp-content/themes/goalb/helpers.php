<?php

/*

絶対つける設定

*/
add_theme_support('post-thumbnails');

/*

配列を属性に

*/
function array_to_attr($array = array())
{
  if (!$array) {
    return '';
  }
  $str = ' ';
  foreach ($array as $key => $value) {
    $str .= $key . '="' . $value . '" ';
  }
  return $str;
}


// Update CSS within in Admin
// function util_admin_style()
// {
//   wp_enqueue_style('util-admin-style', plugin_dir_url(__FILE__) . 'admin.css');
// }
// add_action('admin_enqueue_scripts', 'util_admin_style');

// function util_front_js()
// {
//   wp_enqueue_script('util-front-js', plugin_dir_url(__FILE__) . 'front.js', array(), false, true);
// }
// add_action('wp_enqueue_scripts', 'util_front_js');

// function util_front_css()
// {
//   wp_enqueue_style('util-front-css', plugin_dir_url(__FILE__) . 'front.css');
// }
// add_action('wp_enqueue_scripts', 'util_front_css');

//カスタムフィールドに設定されたリンクかパーマリンクを含むaタグを出力
function the_acf_link_or_permalink($name,$inner = null, $post = null, $attrs = array())
{
  if (!$post) {
    global $post;
  }
  $postId = $post->ID;

  $link = null;

  if (function_exists('get_field')) {
    $link = get_field($name, $postId);
  }

  if ($link) {
    $url = $link['url'];
    $target = $link['target'];
  } else {
    $url = get_the_permalink();
    $target = '';
  }

  $class = '';

  if (isset($attrs['class'])) {
    $class = $attrs['class'];
  }

  echo '<a href="' . $url . '" target="' . $target . '" class="' . $class . '">';

  if (!empty($inner)) {
    $inner();
  }

  echo '</a>';
}

function get_acf_image_src($name, $size = "full", $post = null)
{
  if (!function_exists('get_field')) {
    return;
  }
  if ($post == 'sub') {
    $image = get_sub_field($name);
  } else {
    $image = get_field($name, $post);
  }

  if ($image) {
    if (is_int($image)) {
      $image = wp_get_attachment_image_src($image, $size);
      $src = $image[0];
    } elseif (is_array($image)) {
      $src = $image['url'];
    } else {
      $src = $image;
    }
    return $src;
  }
}

//acf背景画像出力
function the_acf_background_image_style($name, $size = "full", $post = null)
{
  $src = get_acf_image_src($name, $size, $post);
  if ($src) {
    echo 'background-image:url(' . $src . ');';
  }
}

//acf PCSPで別の背景画像を指定する場合、styleタグで出力する
function the_acf_responsive_background_style($className, $pcSize = 'full', $spSize = 'full', $pcFieldName = 'image', $spFieldName = 'image-sp', $context = 'sub')
{
?>
  <style>
    <?php echo '.' . $className;

    ?> {
      <?php the_acf_background_image_style($pcFieldName, $pcSize, $context);
      ?>
    }

    <?php if (($context == 'sub' && get_sub_field($spFieldName)) || get_field($spFieldName)) {
    ?>@media screen and (max-width: 767px) {
      <?php echo '.' . $className;

      ?> {
        <?php the_acf_background_image_style($spFieldName, $spSize, $context);
        ?>
      }
    }

    <?php
    }

    ?>
  </style>
<?php
}

//acf画像タグ出力
function the_acf_image($name, $size = "full", $attrs = array(), $post = null)
{
  echo get_acf_image($name, $size, $attrs, $post);
}

function get_acf_image($name, $size = "full", $attrs = array(), $post = null)
{
  $src = get_acf_image_src($name, $size, $post);
  if (!$src) {
    return null;
  }
  $attrsStr = '';
  foreach ($attrs as $name => $value) {
    $attrsStr .= $name . '=' . $value;
  }
  return '<img loading="lazy" src="' . $src . '" ' . $attrsStr . '>';
}


function the_acf_sub_image($name, $size = "full", $attrs = array())
{
  the_acf_image($name, $size, $attrs, 'sub');
}


function the_acf_picture($pcImage, $spImage, $attrs = array(), $post = null)
{
  $pcSrc = get_acf_image_src($pcImage[0], $pcImage[1], $post);
  $spSrc = get_acf_image_src($spImage[0], $spImage[1], $post);
?>
  <picture <?php echo array_to_attr($attrs); ?>>
    <source media="print,only screen and (min-width:768px)" srcset="<?php echo $pcSrc; ?>">
    <source media="only screen and (max-width:767px)" srcset="<?php echo $spSrc; ?>">
    <img loading="lazy" src="<?php echo $pcSrc; ?>" alt="">
  </picture>
  <?php
}

function the_acf_sub_picture($pcImage, $spImage, $attrs = array())
{
  the_acf_picture($pcImage, $spImage, $attrs, 'sub');
}




//acfからリンクタグ取得
function the_acf_link($name, $inner = null, $attrs = array(), $post = null, $alternative = null)
{
  if (!$post) {
    global $post;
  }

  if ($post == 'sub') {
    if (function_exists('get_sub_field')) {
      $link = get_sub_field($name);
    }
  } else {
    if (function_exists('get_field')) {
      $link = get_field($name, $post->ID);
    }
  }

  if (isset($attrs['class'])) {
    $class = $attrs['class'];
  } else {
    $class = '';
  }

  if (!empty($link)) {
    echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '" class="' . $class . '">';
  } elseif ($alternative) {
    echo '<' . $alternative . ' class="' . $class . '">';
  }
  if (!empty($inner)) {
    $inner();
  }

  if (!empty($link)) {
    echo '</a>';
  } elseif ($alternative) {
    echo '</' . $alternative . '>';
  }
}

function the_acf_sub_link($name, $inner = null, $attrs = array(), $alternative = null)
{
  the_acf_link($name, $inner, $attrs, 'sub', $alternative);
}

//投稿に登録されているタームを一つだけ返す
function get_first_term($taxonomy = null, $post_id = null, $useTopLevel = false)
{
  if (!$taxonomy) {
    $taxonomy = get_first_object_taxonomy();
  }
  if (!$post_id) {
    global $post;
    $post_id = $post->ID;
  }

  if ($terms = get_the_terms($post_id, $taxonomy)) {
    if (is_wp_error($terms)) {
      return false;
    }

    $firstTerm = array_pop($terms);


    if ($useTopLevel) {
      while ($firstTerm->parent) {
        $firstTerm = get_term($firstTerm->parent);
      }
    }
    return $firstTerm;
  }
}

/*

タームをカンマなどでつなげて返す

*/
function get_term_links($post, $taxonomy, $link = true, $itemClass = '')
{
  $terms = get_the_terms($post, $taxonomy);
  if ($terms) {
    if (is_wp_error($terms)) {
      return false;
    }
    $termLinks = array_map(function ($term) use ($link, $itemClass) {
      if ($link) {
        return '<a class="' . $itemClass . '" href="' . get_term_link($term) . '">' . $term->name . '</a>';
      } else {
        return '<span class="' . $itemClass . '">' . $term->name . '</span>';
      }
    }, $terms);

    return $termLinks;
  }
}

function get_term_names_html($post, $taxonomy, $link = true, $glue = '', $before = '', $after = '', $itemClass = '')
{
  $terms = get_term_links($post, $taxonomy, $link, $itemClass = '');
  if ($terms) {
    return $before . implode($glue, $terms) . $after;
  }
}

function get_term_name_in_archive()
{
  $queriedObject = get_queried_object();
  return $queriedObject->name ?? '';
}


//h1かdivを出力
function the_h1div($inner, $attrs)
{
  if (is_front_page()) {
    $tag = 'h1';
  } else {
    $tag = 'div';
  }

  echo '<' . $tag . ' ' . array_to_attr($attrs) . ' >';

  if (!empty($inner)) {
    $inner();
  }
  echo '</' . $tag . '>';
}

//現在のページのスラッグ、一番上のページのスラッグ、投稿タイプのクラスも含めたbody_class
function body_class_ex($class = '')
{
  global $post;
  if (is_page()) {
    $class .= ' page-root-slug-' . get_root_page($post)->post_name . ' page-slug-' . $post->post_name;
  }
  $class .= ' post-type-' . get_post_type();
  return body_class($class);
}

//一番上の親ページを取得
function get_root_page($page = null)
{
  global $post;
  if (!$page) {
    $page = $post;
  }
  while ($page->post_parent) {
    $parentid = $page->post_parent;
    $page = get_post($parentid);
  }
  return $page;
}

//一番上のページか
function is_root_page()
{
  global $post;
  if (is_page() && !$post->post_parent) {
    return true;
  }
  return false;
}



//一番上の親ページの一つ下を取得
function get_second_page($page)
{
  $second = $page;
  while ($page->post_parent) {
    $second = $page;
    $parentid = $page->post_parent;
    $page = get_post($parentid);
  }
  return $second;
}

//指定したカスタムフィールドの値を持つ一番近い親ページを取得（自分含む）
function get_closest_page_has_field($fieldName)
{
  global $post;
  $page = $post;
  if (get_field($fieldName, $page)) {
    return $page;
  }
  while ($page->post_parent) {
    $parentid = $page->post_parent;
    $page = get_post($parentid);
    if (get_field($fieldName, $page)) {
      return $page;
    }
  }
  return false;
}

//childpageがあるか
function has_children()
{
  global $post;

  $children = get_pages(array('child_of' => $post->ID));
  if (count($children) == 0) {
    return false;
  } else {
    return true;
  }
}

// 今いるページの一番親ページの子ページを全て取得
function get_child_pages_of_root()
{
  $rootPage = get_root_page();
  $childPages = get_pages([
    'parent' => $rootPage->ID
  ]);
  return $childPages;
}


//カテゴリアイコン
function the_term_icon($taxonomy, $class = null)
{
  global $post;
  $term = get_first_term($taxonomy);
  if ($term) {
  ?>
    <a class="term <?php echo $class; ?>" href="<?php echo get_term_link($term); ?>" style="background-color:<?php echo get_field('color', $term); ?>;color:<?php echo get_field('textcolor', $term); ?>;"><?php echo $term->name; ?></a>
  <?php
  }
}

//カテゴリアイコン
function the_cat_icon($taxonomy, $class = 'cat', $tag = "span", $useTopLevel = false)
{
  global $post;
  $term = get_first_term($taxonomy, null, $useTopLevel);
  if ($term) {
  ?>
    <<?php echo $tag; ?> class="<?php echo $class; ?>" style="background-color:<?php echo get_field('color', $term); ?>;color:<?php echo get_field('textcolor', $term); ?>;"><?php echo $term->name; ?></<?php echo $tag; ?>>
  <?php
  }
}

/*

固定記事を含めて投稿を取得

*/
function get_posts_with_fixed($args, $fixedPostIds = array())
{
  //固定投稿がなければ通常通り投稿を取得
  if (!$fixedPostIds) {
    return get_posts($args);
  }
  //固定投稿を取得
  $fixedPosts = get_posts($args + array('include' => $fixedPostIds));
  //固定投稿以外を取得
  $posts = get_posts($args + array('exclude' => $fixedPostIds));
  //二つの投稿をマージして指定された記事数のみ抜き出し
  $posts = array_slice(array_merge($fixedPosts, $posts), 0, $args['numberposts']);
  return $posts;
}


/*

頭にnull(全ての記事用)を含んだtermsを取得

*/
function get_terms_with_null($taxonomy, $args = array())
{
  $terms = get_terms($taxonomy, $args);
  array_unshift($terms, null);
  return $terms;
}

/*

新しい記事（一週間以内）かどうか

*/
function is_new_post()
{
  return strtotime('now') - get_the_time('U') < 60 * 60 * 24 * 7;
}

function the_time_tag()
{
  ?>
  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
<?php
}

/*

ACF オプションページを追加

*/

function add_acf_options_page($name, $title)
{
  if (function_exists('acf_add_options_sub_page')) {
    acf_add_options_page(array(
      'page_title' => $title,
      'menu_title' => $title,
      'menu_slug' => $name,
    ));
  }
}


/*

全ての親階層にサブページメニューを登録

*/

function register_subpage_navs()
{

  $pages = get_pages(array(
    'parent'           => 0,
    'post_type'        => 'page',
    'post_status'      => 'publish'
  ));

  foreach ($pages as $page) {
    register_nav_menu('subnav_' . $page->post_name, '下層メニュー ' . $page->post_title);
  }
}


/*

アイキャッチかデフォルト画像を表示

*/

function get_the_post_thumbnail_or($post, $size = null, $fallbackImageSrc = null, $attrs = array())
{
  if (has_post_thumbnail()) {
    return get_the_post_thumbnail($post, $size, $attrs);
  } elseif ($fallbackImageSrc) {
    return '<img loading="lazy" src="' . $fallbackImageSrc . '" ' . array_to_attr($attrs) . '>';
  }
}


/*

アイキャッチかタームのデフォルト画像か指定されたデフォルト画像を表示

*/

function get_the_post_thumbnail_or_or($post, $size = null, $taxonomyName = "", $termImgFieldName = "img-thumb", $fallbackImageSrc = null, $attrs = array())
{
  //サムネイル
  if (has_post_thumbnail()) {
    return get_the_post_thumbnail($post, $size, $attrs);
  }

  //termのデフォルト画像
  if (!$taxonomyName) {
    // $taxonomyName = get_post_type().'_cat';
    $taxonomyName = get_first_object_taxonomy(get_post_type());
  }

  if ($taxonomyName) {
    $term = get_first_term($taxonomyName);
    if ($term) {
      $image = get_acf_image($termImgFieldName, $size, array(), $term);
      if ($image) {
        return $image;
      }
    }
  }



  //共通のデフォルト画像
  if ($fallbackImageSrc) {
    return '<img loading="lazy" src="' . $fallbackImageSrc . '" ' . array_to_attr($attrs) . '>';
  }
}


/*

サイドバーカテゴリ

*/
function the_term_nav_items($postTypeName,$taxonomyName = ''){
  if(!$taxonomyName){
    $taxonomyName = $postTypeName.'_cat';
  }
  ?>
  <li class="<?php echo is_post_type_archive($postTypeName) ? 'current' : ''; ?>"><a href="<?php echo get_post_type_archive_link($postTypeName); ?>">すべて</a></li>
  <?php
      $terms = get_terms( $taxonomyName, array('hide_empty' => false));
      $queriedObject = get_queried_object();
      foreach($terms as $term){
  ?>
  <li class="<?php echo $term->name==$queriedObject->name ? 'current' : ''; ?>"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></li>
  <?php
      }
}

/*

サイドバー年度別アーカイブ

*/
function the_nav_fiscal_year_archive($args = array())
{
?>
  <ul>
    <?php
    $archives = get_archives_by_fiscal_year(array('post_type' => get_post_type()));
    foreach ($archives as $archive) :
    ?>
      <li class="<?php isset($args['li_class']) ? $args['li_class'] : ''; ?>"><a href="<?php echo home_url() ?>/<?php echo esc_html($archive->year) ?>/?post_type=<?php echo get_post_type(); ?>"><?php echo esc_html($archive->year) ?>年度</a></li>
    <?php endforeach; ?>
  </ul>
<?php
}

//スラッグを強制的に投稿IDにする
function force_id_slug($post_id)
{
  global $wpdb;
  $posts_data = get_post($post_id, ARRAY_A);
  $slug = $posts_data['post_name'];
  if ($post_id != $slug) {
    $my_post = array();
    $my_post['ID'] = $post_id;
    $my_post['post_name'] = $post_id;
    wp_update_post($my_post);
  }
}

function force_id_slug_for($postTypes)
{
  foreach ($postTypes as $postType) {
    add_action('publish_' . $postType, 'force_id_slug');
  }
}

//マルチサイト ブログのIDを判別
function is_blog_id($id)
{
  if ($id == get_current_blog_id()) {
    return true;
  }
}

//投稿タイプのラベルを表示
function get_post_type_label()
{
  $postType = get_post_type();
  if (!$postType) {
    return;
  }
  $obj = get_post_type_object($postType);
  if ($obj) {
    return $obj->label;
  }
}

//投稿タイプに紐づいている一つ目のタクソノミー名を取得
function get_first_object_taxonomy($attachment = null)
{
  if (!$attachment) {
    $attachment = get_post_type();
  }
  $taxonomies = get_object_taxonomies($attachment);
  if ($taxonomies) {
    return $taxonomies[0];
  }
}

//ページングの何ページ目にいるか
function is_nth_page($num)
{
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  if ($num == $paged) {
    return true;
  }
  return false;
}

//更新表示をなくす
function remove_core_updates()
{
  global $wp_version;
  return (object) array('last_checked' => time(), 'version_checked' => $wp_version,);
}
add_filter('pre_site_transient_update_core', 'remove_core_updates'); //hide updates for WordPress itself
add_filter('pre_site_transient_update_plugins', 'remove_core_updates'); //hide updates for all plugins
add_filter('pre_site_transient_update_themes', 'remove_core_updates'); //hide updates for all themes

//
function bcn_set_detail_title()
{
  add_filter('bcn_breadcrumb_title', 'helper_bcn_breadcrumb_title', 10, 3);
}

function helper_bcn_breadcrumb_title($title, $this_type, $this_id)
{
  if ($this_type[1] == 'post-' . get_post_type() && get_post_type() != 'page') {
    $title = '詳細';
  }
  return $title;
};

function the_bread($args)
{
  $class = 'm-bread';
  if (!empty($args['class'])) {
    $class = $args['class'];
  }
?>
  <ul class="<?php echo $class; ?>">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
  </ul>
<?php
}

/*

brを消さない

*/
function override_mce_options($initArray)
{
  $opts = '*[*]';
  $initArray['valid_elements'] = $opts;
  $initArray['extended_valid_elements'] = $opts;
  $initArray['remove_redundant_brs'] = false;
  // $initArray['remove_linebreaks'] = false;
  return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');

/*

投稿タイプなどをアクセス制限

*/
function protect_by_option($usernameFieldName = null, $paswordFieldName, $content, $loginForm)
{

  $canview = false;
  $err = '';

  if ($usernameFieldName) {
    $username = get_field($usernameFieldName, 'option');
  }

  $password = get_field($paswordFieldName, 'option');

  // IDとパスワード
  if ($usernameFieldName && $username && $password) {
    //既にセッションに入っているID PASSが一致すれば
    if (
      !empty($_SESSION[$usernameFieldName]) &&
      ($_SESSION[$usernameFieldName] === $username) &&
      !empty($_SESSION[$paswordFieldName]) &&
      ($_SESSION[$paswordFieldName] === $password)
    ) {
      $canview = true;
      //フォームからの送信
    } elseif (isset($_POST['username']) && isset($_POST['password'])) {
      if (($_POST['password'] == $password) && ($_POST['username'] == $username)) {
        $canview = true;
        $_SESSION[$usernameFieldName] = $username;
        $_SESSION[$paswordFieldName] = $password;
      } else {
        $err = 'ユーザー名かパスワードが違います。';
      }
    }
    // パスワードのみ
  } elseif ($password) {
    //既にセッションに入っているPASSが一致すれば
    if (
      !empty($_SESSION[$paswordFieldName]) &&
      ($_SESSION[$paswordFieldName] === $password)
    ) {
      $canview = true;
      //フォームからの送信
    } elseif (isset($_POST['password'])) {
      if (($_POST['password'] == $password)) {
        $canview = true;
        $_SESSION[$paswordFieldName] = $password;
      } else {
        $err = 'パスワードが違います。';
      }
    }
  }
  if ($canview) {
    $content();
  } else {
    $loginForm($err);
  }
}

// 右上をログアウトのみにする
function make_profile_to_logout()
{

  //https://wordpress.stackexchange.com/questions/23035/remove-edit-your-profile-from-admin-menu-bar
  //http://codex.wordpress.org/Function_Reference/get_nodes
  //http://codex.wordpress.org/Function_Reference/add_node
  add_action('admin_bar_menu', '_66_remove_profile', 999);
  add_action('admin_bar_menu', '_66_add_logout', 999);
}


function _66_remove_profile($wp_admin_bar)
{
  $wp_admin_bar->remove_node('search');  // remove the search element
  // $user = wp_get_current_user();
  // if( current_user_can('editor') || current_user_can('author')) {
  $wp_admin_bar->remove_node('my-account');
  // }
}

function _66_add_logout($wp_admin_bar)
{
  // $user = wp_get_current_user();
  // if( current_user_can('editor') || current_user_can('author')) {
  $args = array(
    'id'     => 'logout',           // id of the existing child node (New > Post)
    'title'  => 'ログアウト',   // alter the title of existing node
    'parent' => 'top-secondary',    // set parent
  );
  $wp_admin_bar->add_node($args);
  // }
}


// disable admin bar css
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header()
{
  remove_action('wp_head', '_admin_bar_bump_cb');
}
