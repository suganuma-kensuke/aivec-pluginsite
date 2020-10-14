<?php get_header(); ?>

  <div class="slideshow">
      <div class="slideshow-slides">
          <a href="#" class="slide" id="slide-1"><img src="<?php echo esc_url(get_theme_file_uri('images/top-img1.png')); ?>" alt="top-img" width="100%" height="100%">
          <a href="#" class="slide" id="slide-2"><img src="<?php echo esc_url(get_theme_file_uri('images/top-img1.png')); ?>" alt="top-img" width="100%" height="100%">
          <a href="#" class="slide" id="slide-3"><img src="<?php echo esc_url(get_theme_file_uri('images/top-img1.png')); ?>" alt="top-img" width="100%" height="100%">
      </div>
      <div class="slideshow-nav">
          <a href="#" class="prev">Prev</a>
          <a href="#" class="next">Next</a>
      </div>
      <div class="slideshow-indicator"></div>
  </div>

  <div id='top-comment-wrapper'>
      <div id='top-comment'>
        <img src="<?php echo esc_url(get_theme_file_uri('images/aivec-logo2.gif')); ?>" alt='aivec.logo2' width='250px' height='auto'>
        <h1><i class="fas fa-shopping-cart"></i>プラグイン販売</h1>
        <p>アイベック合同会社では、主にWordpressのECプラグイン「Welcart」専用の拡張プラグインを開発しています。<br>
          独自の開発ノウハウで、EC事業者様へのソリューションを提供します。<br><br>
          Welcart専用拡張プラグインのAmazon PayやLINE Pay、お気に入りリストなどを販売しています。</p>
        <a href='plugin.html'><i class="fas fa-angle-right"></i>プラグイン一覧</a>
      </div>
    </div>

    <div id='top-plugin-box'>
      <div id='top-amazon-box'>
        <img src="<?php echo esc_url(get_theme_file_uri('images/amazon.gif')); ?>" alt='amazon' width='300' height='auto'>
        <p>あなたのカートに<br>お気に入りリストを拡張できます。</p>
        <a href='WCEXAmazonPy.html'><i class="fas fa-angle-right"></i>詳しく見る</a>
      </div>
      <div id='top-line-box'>
        <img src="<?php echo esc_url(get_theme_file_uri('images/line.gif')); ?>" alt='line' width='365px' height='auto'>
        <p>あなたのカートに<br>お気に入りリストを拡張できます。</p>
        <a href='LINEPayforWelcart.html'><i class="fas fa-angle-right"></i>詳しく見る</a>
      </div>
      <div id='top-wish-box'>
        <img src="<?php echo esc_url(get_theme_file_uri('images/wish.gif')); ?>" alt='wish' width='365px' height='auto'>
        <p>あなたのカートに<br>お気に入りリストを拡張できます。</p>
        <a href='WCEXWishList.html'><i class="fas fa-angle-right"></i>詳しく見る</a>
      </div>
    </div>
    
<?php get_footer(); ?>