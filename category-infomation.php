<?php get_header(); ?>

    <div id="category">
    <img src="<?php echo esc_url(get_theme_file_uri('images/logo3.png')); ?>" alt="top-img" width="350px" height="auto">
        <div id="infomation-title">
            <h1>INFOMATION</h1>
            <h2><div class="infomation-box"></div>最新情報<div class="infomation-box"></div></h2>
        </div>
        <div id="infomation-item">
            <?php
            if (have_posts()):
                while (have_posts()):the_post();
            ?>
                <div class="infomation">
                    <p><?php the_time("Y年m月d日"); ?></p>
                    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <p>【お知らせ】<?php echo mb_strimwidth( strip_tags( get_the_content() ), 0, 200, '　[…]', 'UTF-8' ); ?></p>
                </div>
            <?php
                endwhile;
                //--ページネーション
                the_posts_pagination();
            endif;
            ?>
        </div>
    </div>

<?php get_footer(); ?>