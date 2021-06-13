<?php
    //テーマサポート
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); //サムネイル
    add_theme_support( 'automatic-feed-links' );//自動フィードリンク
    add_theme_support( "custom-header");
    add_theme_support( "custom-background");
    add_editor_style() ;
   
    //margin-top;32pxを無くす対応
    add_filter('show_admin_bar','__return_false');

    //外部ファイルの読み込み
    //<link rel="stylesheet" href="css/style.css">
    //script src="js/jquery-3.5.1.min.js"></script>
    //<script src="js/RaiseTech_hamburger.js"></script>\
    function add_files() {
    wp_enqueue_script('jquery-3.5.1.min',get_template_directory_uri().'/js/jquery-3.5.1.min.js',array(),'1.0.0');
    wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');
    wp_enqueue_style('style',get_template_directory_uri().'/style.css',array(),'1.0.0');
    if(is_single()){
        wp_enqueue_script('RaiseTech_hambueger_single',get_template_directory_uri().'/js/RaiseTech_hambueger_single.js',array(),'1.0.0');
        }else{
        wp_enqueue_script('RaiseTech_hamburger',get_template_directory_uri().'/js/RaiseTech_hamburger.js',array(),'1.0.0');
        }
    }
    add_action( 'wp_enqueue_scripts', 'add_files' );
    
    //条件分岐？
    
    /*サイドバーへのウィジェット
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
          'name' => 'ヘッダーウィジェット',
          'id' => 'header',
          'description' => 'ヘッダーウィジェット',
          'before_widget' => '<div>',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '<h3'
       ));
       //エラー回避？
       add_action( 'widgets_init', 'my_theme_widgets_init' );
    }
    */
    
    /*
    * 投稿にアーカイブ(投稿一覧)を持たせるようにします。
    * ※ 記載後にパーマリンク設定で「変更を保存」してください。
    */
    function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'archive'; // ページ名
    }
    return $args;
    }
    add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
    
    //the_except();に付与される<p>タグを削除する。wpautopが自動整形機能で、the_exceptのときremoveする。
    remove_filter('the_excerpt', 'wpautop');
    /*
    function add_query_vars_filter( $vars ){
        $vars[] = "hamburger";
        $vars[] = "cheeseburger";
        $vars[] = "teriyakiburger";
        $vars[] = "avocadoburger";
        $vars[] = "fishburger";
        $vars[] = "baconburger";
        $vars[] = "chickenburger";
        $vars[] = "potato";
        $vars[] = "salad";
        $vars[] = "nugget";
        $vars[] = "corn";
        $vars[] = "cola";
        $vars[] = "fanta";
        $vars[] = "orange";
        $vars[] = "apple";
        $vars[] = "tea";
        $vars[] = "coffee";
        return $vars;
    }
    add_filter( 'query_vars', 'add_query_vars_filter' );
    */

    //functions.phpに定義する関数
function get_index() {
    //グローバル変数を使う為の宣言
    global $post;
    //マッチングで<h>タグを取得する $matchesに検索結果に適合したテキストが代入される
    preg_match('/<h[2-3]>.+<\/h[2-3]>/u', $post->post_content, $matches);
    //$matchに代入されているテキストから<h3></h3>タグを削除
    $result = preg_replace('/<h2><h3>/u', "$1", $matches[0]);
    echo  $result;      
}

//the_except();に付与される<p>タグを削除する。wpautopが自動整形機能で、the_exceptのときremoveする。
remove_filter('get_index', 'wpautop');

/**
* 抜粋の文字数制限
* $str 文字　,$int カット文字数,$end 語尾の文字
* @return str
*/


function na_trim_words($str,$int,$end=''){
    $post_content = strip_tags($str);
    if(mb_strlen($post_content)>$int ) {
        $post_content = mb_substr($post_content,0,$int);
        $post_content = str_replace(array("\r", "\n"), '', $post_content).$end; 
    } else { 
        $post_content = str_replace(array("\r", "\n"), '', $post_content);
    }
    return $post_content;
}

//スラッグ表示
function add_page_columns_name($columns) {
    $columns['slug'] = "スラッグ";
    return $columns;
}
function add_page_column($column_name, $post_id) {
    if( $column_name == 'slug' ) {
        $post = get_post($post_id);
        $slug = $post->post_name;
        echo esc_attr($slug);
    }
}
add_filter( 'manage_pages_columns', 'add_page_columns_name');
add_action( 'manage_pages_custom_column', 'add_page_column', 10, 2);


//ページナビゲーションのHTML構造調整
/*
function my_pagenavi($args=array()){
    if( !function_exists('wp_pagenavi') ) return;
 
    $defaults = array(
        'before' => '<nav id="pager">',
        'after' => '</nav>',
        'wrapper_tag' => 'ul',
    );
    $args = is_array($args) ? array_merge($defaults, $args) : $args;
 
    add_filter('wp_pagenavi', 'my_filter_wp_pagenavi', 10, 1);
 
    wp_pagenavi($args);
 
    remove_filter('wp_pagenavi', 'my_filter_wp_pagenavi', 10);
}

function my_filter_wp_pagenavi($html) {
 
    // <a>タグの不要なclassの削除＋<li>で囲む
    $pattern     = "/<a[\s\S]+?href=.([^\'\"]+)[\'\"][^>]*?>([^<]*?)<\/a>/u";
    $replacement = '<li><a href=></a></li>';
    $html        = preg_replace($pattern, $replacement, $html);
 
    // class="pages"付きの<span>を置換
    $pages_ptn = "/<span class=[\'\"]pages[\'\"]>([\s\S]*?)<\/span>/u";
    $pages_rep = '<li class="pages"><span></span></li>';
    $html      = preg_replace($pages_ptn, $pages_rep, $html);
 
    // class="current"付きの<span>を置換
    $current_href = esc_attr( get_pagenum_link( get_query_var('paged', 1) ) );
$current_ptn  = "/<span class=[\'\"]current[\'\"]>([\s\S]*?)<\/span>/u";
    $current_rep  = '<li class="is-current"><span></span></li>';
    $html         = preg_replace($current_ptn, $current_rep, $html);
 
    return $html;
}
*/
    
//管理画面でカスタムメニューを有効化する
//functions.php
function register_my_menu() { 
    register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
    //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
      'sidebar' => 'sidebar',
    ) );
  }
  add_action( 'after_setup_theme', 'register_my_menu' );

  function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="p-nav__burgermenu" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class');   

function demo_script() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'demo_script' );

if ( ! isset( $content_width ) ) $content_width = 525;

?>