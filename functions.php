<?php
//JavaScriptファイルの読み込み
function js_add() {
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'js_add');
// アイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');
//カスタムメニュー機能を使用可能にする
add_theme_support('menus');
//メニュー位置を決める
register_nav_menus(array(
    'top_menu' => 'トップページ用メニュー',
    'blog_menu' => 'ブログトップ用メニュー',
    'footer_menu_L' => 'フッター用メニュー（左）',
    'footer_menu_R' => 'フッター用メニュー（右）',
));
//ウィジェットエリアの追加
add_action(
    'widgets_init',
    function(){
        register_sidebar(array(
            'id' => 'right_sidebar',
            'name' => 'サイドバー',
            'description' => 'ブログの右に表示されるサイドバーです'
        ));

    }
);
?>
<?php
// ロゴ画像をカスタマイザーから設定する
add_action('customize_register', 'theme_customize');
function theme_customize($wp_customize){
    //ロゴ画像
    $wp_customize->add_section('logo_section',array(
        'title' => 'ロゴ画像',
        'priority' => 100,
        'description' => 'ロゴ画像を使用する場合はアップロードしてください。画像を使用しない場合はタイトルがテキストで表示されます。',
    ));
    $wp_customize->add_setting('logo_url');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_url', array(
        'label' => 'ロゴ画像',
        'section' => 'logo_section',
        'settings' => 'logo_url',
        'description' => 'ロゴ画像を設定してください。',
    )));
}

// テーマカスタマイザーで設定された画像のURLを取得
//ロゴ画像
function get_the_logo_url(){
    return esc_url(get_theme_mod('logo_url'));
}

//人気記事を表示させる
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==""){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.'Views';
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==""){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//カスタマイザーに色の項目を追加する
function theme_customizer_extension($wp_customize) {
    $wp_customize->add_setting( 'header_background_color', array(
    'default' => '#fff',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
    'label' => 'ヘッダー背景色',
    'section' => 'colors',
    'settings' => 'header_background_color',
    'priority' => 20,
    )));

    $wp_customize->add_setting( 'background_color', array(
        'default' => '#fff',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
        'label' => '背景色',
        'section' => 'colors',
        'settings' => 'background_color',
        'priority' => 20,
        )));

    $wp_customize->add_setting( 'widgettitle_color', array(
        'default' => '#fff',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'widgettitle_color', array(
        'label' => 'ウィジェットタイトル背景色',
        'section' => 'colors',
        'settings' => 'widgettitle_color',
        'priority' => 20,
        )));


   }

   add_action('customize_register', 'theme_customizer_extension');
   
   function customizer_color() {

    $header_background_color = get_theme_mod( 'header_background_color', '#fff');
    $background_color = get_theme_mod( 'background_color', '#fff');
    $widgettitle_color = get_theme_mod( 'widgettitle_color', '#fff');

    ?>
    <style type="text/css">
     /* ヘッダー */
    .navbar {
        background-color: <?php echo $header_background_color; ?>;
    }
    /* 背景色 */
    body {
        background-color: <?php echo $background_color; ?>;
    }

    /* ウィジェットタイトル背景色 */
    .widgettitle{
        background-color: <?php echo $widgettitle_color; ?>;
    }
    </style>
    <?php
    }
    add_action( 'wp_head', 'customizer_color');
?>