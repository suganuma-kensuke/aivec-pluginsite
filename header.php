<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ba-throttle-debounce.min.js"></script>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div id="body">
      
      <!--ページトップへ戻るボタン-->
      <div id="back-to-top">
        <a href="#"><i class="fas fa-angle-double-up"></i></a>
      </div>

      <!--ヘッダー-->
      <header>
        <div class="header-wrapper">
          <div class="header-wrapper-left"></div>
          <div class="header-wrapper-right"></div>
          <div class="header">
            <div class="header-left">
              <a href="<?php echo esc_url(home_url('/#/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/logo1.png')); ?>" alt="logo1" width="135px" height="auto"></a>
            </div>
            <div class="header-center">
              <i class="fas fa-caret-down">
                <!--プラグイン販売のドロップダウンメニュー-->
                <nav class="global_plugin dropdown">
                  <!--ドロップダウンメニュー(プラグイン販売)のカスタムメニュー有効化-->
                  <?php
                    wp_nav_menu(
                      array (
                        'theme_location'=>'place_global_plugin',
                        'container'=>false,
                      )
                    );
                  ?>
                </nav>
              </i>
              <nav>
                <!--ヘッダーナビゲーション(中央)のカスタムメニュー有効化-->
                <?php
                  wp_nav_menu(
                    array (
                      'theme_location'=>'place_global_center',
                      'container'=>false,
                    )
                  );
                ?>
              </nav>
            </div>
            <div class="header-right">
              <i class="fas fa-caret-down">
                <!--Myページのドロップダウンメニュー-->
                <nav class="global_mypage dropdown">
                  <!--ドロップダウンメニュー(Myページ)のカスタムメニュー有効化-->
                  <?php
                    wp_nav_menu(
                      array (
                        'theme_location'=>'place_global_mypage',
                        'container'=>false,
                      )
                    );
                  ?>
                </nav>
              </i>
              </nav>
              <nav>
                <!--ヘッダーナビゲーション(右)のカスタムメニュー有効化-->
                <?php
                  wp_nav_menu(
                    array (
                      'theme_location'=>'place_global_right',
                      'container'=>false,
                    )
                  );
                ?>
              </nav>
            </div>
          </div>
        </div>
      </header>
