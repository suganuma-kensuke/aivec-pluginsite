<?php get_header(); ?>

    <div id="category">
    <img src="<?php echo esc_url(get_theme_file_uri('images/logo3.png')); ?>" alt="top-img" width="350px" height="auto">
        <div id="release-title">
            <h1>RELEASE</h1>
            <h2>リリース情報</h2>
        </div>
        <div id="release-item">
            <?php
            if (have_posts()):
                while (have_posts()):the_post();
            ?>
                <div class="release">
                    <p><?php the_time("Y年m月d日"); ?></p>
                    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <p>【更新内容】<?php echo mb_strimwidth( strip_tags( get_the_content() ), 0, 200, '　[…]', 'UTF-8' ); ?></p>
                </div>
            <?php
                endwhile;
                //ページネーション
                the_posts_pagination();
            endif;
            ?>
        </div>
    </div>
    
<?php get_footer(); ?>