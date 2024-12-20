<?php

//基本設定
function my_setup()
{
 add_theme_support('post-thumbnails'); 
 add_theme_support('automatic-feed-links'); 
 add_theme_support('title-tag'); 
 add_theme_support(
   'html5',
   array( 
     'search-form',
     'comment-form',
     'comment-list',
     'gallery',
     'caption',
   )
 );
}
add_action('after_setup_theme', 'my_setup');

// common cssとcommon jsなどを読み込ませるための記述
function my_script_init()
{
  wp_enqueue_style('my-common', get_template_directory_uri() . '/assets/css/common/style.css', array(), date('Ymd-Hi'), 'all');
  wp_enqueue_style('jquery-ui-style', get_template_directory_uri() . '/assets/css/common/jquery-ui.min.css', array(), '1.0', 'all');
  wp_enqueue_script('my-common', get_template_directory_uri() . '/assets/js/common/script.js', array( 'jquery' ), date('Ymd-Hi'), false);
  wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/common/jquery-ui.min.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


function add_file_types_to_uploads( $mimes ) {
    $mimes['webp'] = 'image/webp';  // WEBPを許可
    $mimes['svg'] = 'image/svg+xml';  // SVGを許可
    return $mimes;
}
add_filter( 'upload_mimes', 'add_file_types_to_uploads' );


//認証なしで管理者メアド変更できるようにする
remove_action( 'add_option_new_admin_email', 'update_option_new_admin_email' );
remove_action( 'update_option_new_admin_email', 'update_option_new_admin_email' );
  
function wpdocs_update_option_new_admin_email( $old_value, $value ) {
    update_option( 'admin_email', $value );
}
add_action( 'add_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );
add_action( 'update_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );


// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
   if ('post' == $post_type) {
       $args['rewrite'] = true; 
       $args['has_archive'] = 'topics'; 
   }
   return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// Contact Form 7で自動的な<p>タグの挿入を無効化
add_filter('wpcf7_autop_or_not', '__return_false');


//いらないメニューを非表示
function remove_menus() {
  remove_menu_page( 'edit-comments.php' ); // コメント.
}
add_action( 'admin_menu', 'remove_menus', 999 );