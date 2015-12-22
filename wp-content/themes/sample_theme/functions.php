<?php
//エラー出力の設定
if(strrpos($_SERVER["HTTP_HOST"], 'theguild.jp') === false) {
    ini_set('display_errors', 1);
} else {
    ini_set('display_errors', 0);
}

// featured imagesを有効に
add_theme_support( 'post-thumbnails' );


// Mediaのサイズ設定を強制的に書き換える
function themename_enforce_image_size_options() {
    // thumbnail
    update_option( 'thumbnail_size_w', 640 );
    update_option( 'thumbnail_size_h', 360 );
    update_option( 'thumbnail_crop', 1 );
    // medium
    update_option( 'medium_size_w', 640 );
    update_option( 'medium_size_h', 99999 );
    // large
    update_option( 'large_size_w', 1280 );
    update_option( 'large_size_h', 99999 );
}
add_action( 'switch_theme', 'themename_enforce_image_size_options' );

// 追加の画像サイズ
// thumbnail (medium: 640 x 640)
// add_image_size( 'thumbnail-small', 320, 320 );

// medium-large (960 x n)
// add_image_size( 'medium-large', 960, 99999 );
// add_image_size( 'medium-large_16by9', 960, 540, true );

// large (1280 x n)
add_image_size( 'large_16by9', 1280, 720, true );
add_image_size( 'large_16by9.9', 1280, 792, true );

// x-large (1440 x n)
// add_image_size( 'x-large', 1440, 99999 );
// add_image_size( 'x-large_16by9.9', 1440, 891, true );

// xx-large (1920 x n)
// add_image_size( 'xx-large', 1920, 99999 );
add_image_size( 'xx-large_16by9.9', 1920, 1188, true );


// 抜粋を入力可能にする
add_post_type_support('post','excerpt');
add_post_type_support('page','excerpt');


// 挿入する画像のsrcからホスト部分を取り除く
function delete_host_from_attachment_url( $url )
{
    $regex = '/^http(s)?:\/\/[^\/\s]+(.*)$/';
    if ( preg_match( $regex, $url, $m ) ) {
        $url = $m[2];
    }
    return $url;
}
add_filter( 'wp_get_attachment_url', 'delete_host_from_attachment_url' );
add_filter( 'attachment_link', 'delete_host_from_attachment_url' );


// 記事編集ページでカテゴリの順番を選択状態によって変えない
function lig_wp_category_terms_checklist_no_top( $args, $post_id = null ) {
    $args['checked_ontop'] = false;
    return $args;
}
add_action( 'wp_terms_checklist_args', 'lig_wp_category_terms_checklist_no_top' );


// Enable Option ACF Page
if ( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

// post_ per_pageの数値
function iti_custom_posts_per_page($query)
{
    if ( !$query->query_vars['posts_per_page'] ){
        if ( is_home() ) {
            $query->query_vars['posts_per_page'] = 6;
        } else if( is_category('works') ){
            $query->query_vars['posts_per_page'] = 10;
        } else if( is_category('news') ){
            $query->query_vars['posts_per_page'] = 5;
        }
    }
    return $query;
}
add_filter( 'pre_get_posts', 'iti_custom_posts_per_page' );


// 月の表記を強制的に英語にする
function convert_month_to_en($m){
    switch ($m) {
        case '1月':
            return 'Jan';
            break;
        case '2月':
            return 'Feb';
            break;
        case '3月':
            return 'Mar';
            break;
        case '4月':
            return 'Apr';
            break;
        case '5月':
            return 'May';
            break;
        case '6月':
            return 'Jun';
            break;
        case '7月':
            return 'Jul';
            break;
        case '8月':
            return 'Aug';
            break;
        case '9月':
            return 'Sep';
            break;
        case '10月':
            return 'Oct';
            break;
        case '11月':
            return 'Nov';
            break;
        case '12月':
            return 'Dec';
            break;
    }
    return $m;
}
