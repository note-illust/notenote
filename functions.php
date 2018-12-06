<?php

//ウィジェット起動
//register_sidebar();


//アイキャッチ表示
add_theme_support('post-thumbnails');


//サイトナビゲーション
//register_nav_menus(array('category' => 'カテゴリー順序'));


//管理バーの消去
add_filter('show_admin_bar', '__return_false');


// wp_get_archivesの年表記を置き換える
function my_archives_link($html){
  $html = str_replace('年','/',$html);
  $html = str_replace('月','',$html);
  return $html;
}
add_filter('get_archives_link', 'my_archives_link');


// アーカイブウィジェットの年表記を置き換える
function my_archives( $html ){
  $html = str_replace('年','/',$html);
  $html = str_replace('月','',$html);
  return $html;
}
add_filter( 'widget_archives_args','my_archives');


//wp_titleの$sepが「｜」または半角スペースの場合は余分な空白削除
function my_title_fix($title, $sep, $seplocation){
    if(!$sep || $sep == "｜"){
        $title = str_replace(' '.$sep.' ', $sep, $title);
    }
    return $title;
}
add_filter('wp_title', 'my_title_fix', 10, 3);


//記事タイトルがない場合の対応　（no title）が変更できる
function set_the_title($title = "") {
    $sNoTitle = "(no title)";

    if(strlen($title) === 0) {
        return $sNoTitle;
    }
    return $title;
}
add_filter('the_title', 'set_the_title');


//ショートコード読み込み
/*ショートコード用のphpデータ作成
[myphp1 file='ファイル名']←を記事に配置することで使用可能*/
function short_php($params = array()) {
  extract(shortcode_atts(array(
    'file' => 'default'
  ), $params));
  ob_start();
  include(get_theme_root() . '/' . get_template() . "/$file.php");
  return ob_get_clean();
}
add_shortcode('myphp1', 'short_php');

//カテゴリーの並び順
add_filter( 'wp_terms_checklist_args', 'ps_wp_terms_checklist_args' , 10, 2 );
function ps_wp_terms_checklist_args( $args, $post_id ){
	
	if ( $args['checked_ontop'] !== false ){
		$args['checked_ontop'] = false;
	}
 
	return $args;
}
//ギャラリー
function create_post_type() {
  register_post_type(
  ' gallery',
  array(
    'label' => 'ギャラリー',
    'labels' => array(
       'all_items' => 'ギャラリー',
       ),
    'description' => 'ギャラリーの新規追加',
    'public' => true,
    'has_archive' => true,
	'menu_position' =>5,
	'hierarchical' => true,
    'supports' => array(
      'title',
      'editor',
      'author',
	  'revisions',
      ),
  )
    );
	register_taxonomy(
        ' gallery_cat',
        ' gallery',
        array(
            'hierarchical' => true,
            'label' => 'カテゴリー',
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'singular_label' => 'カテゴリー'
        )
    );
  	register_taxonomy(
    	' gallery_tag',
		' gallery',
	array(
		'hierarchical' => true,
		'update_count_callback' => '_update_post_term_count',
		'label' => 'タグ',
		'singular_label' => 'タグ',
		'public' => true,
		'show_ui' => true
		)
	);

}
add_action( 'init', 'create_post_type' );
?>
