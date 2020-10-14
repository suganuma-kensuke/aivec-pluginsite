<?php
function my_enqueue_scripts() {
    //CSSの読み込み
    wp_enqueue_style(
        'my_css', 
        esc_url(get_theme_file_uri('css/style2.css')),
        array()
    );
    //jQueryの読み込み
	wp_enqueue_script(
        'my_js', 
        esc_url(get_theme_file_uri('js/script.js')), 
        array()
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

//ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
    array(
        'place_global_center'=>'グローバル化(header-center)', //ヘッダーナビゲーション(中央)
        'place_global_right'=>'グローバル化(header-right)', //ヘッダーナビゲーション(右)
        'place_global_plugin'=>'グローバル化(プラグイン販売)', //ドロップダウンメニュー(プラグイン販売)
        'place_global_mypage'=>'グローバル化(Myページ)', //ドロップダウンメニュー(Myページ)
        'place_footer'=>'フッターナビ',
    )
);
