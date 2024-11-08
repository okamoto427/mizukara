<?php

class AutoTitle
{
    public function __construct()
    {
        // add_theme_support('title-tag');
        // add_filter('pre_get_document_title', array($this, 'getTitle'));
    }

    public function getTree()
    {
        global $post;

        $arr = array();

        $postTypeObject = get_post_type_object(get_post_type());
        $postTypeArchiveName = $postTypeObject ? $postTypeObject->label : '';

        //投稿タイプ一覧
        if (is_post_type_archive()) {
            if (get_query_var('m')) {
                $arr[] = array(
                    'label' => $postTypeArchiveName,
                    'url' =>  get_post_type_archive_link(get_post_type())
                );
                $arr[] = array(
                    'label' => get_query_var('m') . '年'
                );
            } else {
                $arr[] = array(
                    'label' => $postTypeArchiveName
                );
            }

        //各カテゴリ一覧
        } else if (is_tax()) {
            $arr[] = array(
                'label' => $postTypeArchiveName,
                'url' =>  get_post_type_archive_link(get_post_type())
            );
            $arr[] = array(
                'label' => get_queried_object()->name
            );

        //固定ページ
        } elseif (is_page()) {
            $ancestors = get_post_ancestors($post);
            foreach ($ancestors as $ancestor) {
                $page = get_post($ancestor);
                array_unshift($arr, array(
                    'label' => $page->post_title,
                    'url' =>  get_permalink($page)
                ));
            }
            $arr[] = array(
                'label' => get_the_title()
            );

        //詳細ページ
        } else if (is_single()) {

            // $arr[] = array(
            //     'label' => $postTypeArchiveName,
            //     'url' =>  get_post_type_archive_link(get_post_type())
            // );

            //termが設定されていれば入れる
            // $term = get_first_term($post->ID, get_post_type() . '_cat');
            // if ($term) {
            //     $arr[] = array(
            //         'label' => $term->name,
            //         'url' =>  get_term_link($term, get_post_type() . '_cat')
            //     );
            // }

            $arr[] = array(
                'label' => get_the_title()
            );
            
        //404ページ
        } elseif (is_404()) {
            $arr[] = array(
                'label' =>'ページが見つかりませんでした。'
            );
		}

        return $arr;
    }


    public function getTitle()
    {
        if(is_front_page()){
          return get_bloginfo('name').' | '.get_bloginfo('description');
        }
        $tree = $this->getTree();
        // if(!$tree){
        //     return get_bloginfo('name').' '.get_bloginfo('description');
        // }
        $titleArr = array();
        // $titleArr[] = get_bloginfo('name').' '.get_bloginfo('description');
        $titleArr[] = get_bloginfo('name');

        foreach ($tree as $t) {
            $titleArr[] = $t['label'];
        }
        return implode(' | ', array_reverse($titleArr));
    }
}

// new AutoTitle();