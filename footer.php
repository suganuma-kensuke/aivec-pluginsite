  <div id="footer-margin"></div>

  <!--フッター-->
  <footer>
    <div id="footer-wrapper">
      <div id="footer-wrapper-left"></div>
      <div id="footer-wrapper-right"></div>
      <div id="footer">
        <div id="footer-left">
          <img src="<?php echo esc_url(get_theme_file_uri('images/logo2.png')); ?>" alt="logo2" width="75px;" height="auto">
        </div>
        <div id="footer-center">
          <p><i class="fas fa-map-marker-alt"></i>サイトマップ</p>
          <nav id="sitemap">
              <!--フッターナビゲーションのカスタムメニュー有効化-->
              <?php
                wp_nav_menu(
                  array (
                    'theme_location'=>'place_footer',
                    'container'=>false,
                  )
                );
              ?>
          </nav>
        </div>
        <div id="footer-right">
          <a href="#"><i class="fas fa-sign-in-alt"></i>ログイン</a>
          <a href="#"><i class="fas fa-file-alt"></i>新規登録</a>
        </div>
      </div>
    </div>
    <div id="copyright">
      <small>Copyright © 2020.Aivec llc All Rights Reserved.</small>
    </div>
  </footer>
  
</div>

<?php wp_footer(); ?>
</body>

</html>
