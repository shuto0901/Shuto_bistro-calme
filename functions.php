<?php

// <title>タグを出力する

add_theme_support( 'title-tag' );

add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title){
    if(is_home()) {
        unset($title['tagline']);
        $title['title'] = 'BISTRO CALMEは、カジュアルなワインバーよりなビストロです。';
    }
    return $title;
}

// アイキャッチ画像を使用可能にする

add_theme_support( 'post-thumbnails' );


add_theme_support( 'menus' );

function my_posts_search( $search, $wp_query ){
	// クエリを修正する条件
    if ( $wp_query->is_main_query() && is_search() &&  !is_admin() ){
		// 検索結果に対して投稿ページのみとする条件を追加
    	$search .= " AND post_type = 'post' ";
    }
	return $search;
}
add_filter('posts_search','my_posts_search', 99, 2);

add_action('pre_get_posts','my_pre_get_posts');
function my_pre_get_posts($query) {
    if(is_admin() || ! $query->is_main_query() ){
        return;
    }

    if($query->is_home() ) {
        $query->set('posts_per_page', 3);
        return;
    }
}

add_action('wp', 'my_wpautop');
function my_wpautop(){
    if(is_page('contact')){
        remove_filter('the_content', 'wpautop');
    }
}

/**
 * 簡単なショートコード
 */
function shortcode_test() {
    return "「ショートコードのテストです」";
}
add_shortcode( 'test', 'shortcode_test' );

/**
 * リンクを含むショートコード
 */
function shortcode_twitter() {
    return 'こんにちは！ナカシマ（<a href="https://twitter.com/kanakogi" target="_blank">@kanakogi</a>）です。';
}
add_shortcode('twitter', 'shortcode_twitter');

/**
 * No Image画像を表示する関数
 */
function display_thumbnail() {
    if ( has_post_thumbnail() ) {
        echo '<a href="'.get_permalink().'">'.get_the_post_thumbnail( 'thumbnail' ).'</a>';
    }else {
        echo '<a href="'.get_permalink().'"><img src="'.get_template_directory_uri().'/images/common/noimage.png" height="180" width="180" alt=""></a>';
    }
}

/**
 * カスタムフィールドの画像を表示する関数
 */
function display_image($field_name, $size = 'large') {
    $pic = get_field($field_name);
    if (!empty($pic)) {
        $url = $pic['sizes'][ $size ]; //画像のURL
        echo '<img src="'. $url .'" alt="">';
    }
}
