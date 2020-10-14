<?php get_header(); ?>

    <div id="single">
        <?php
        if (have_posts()):
            while (have_posts()):the_post();
        ?>
            <div class="single-date">記事公開日 : <?php the_time('Y年m月d日'); ?></div>
            <h3>
                <div class="single-title"><?php the_title(); ?></div>
                <span class="single-category"><?php the_category(); ?></span>
            </h3>
            <h4>【お知らせ内容】</h4>
            <p><?php the_content(); ?></p>
        <?php
            endwhile;
        endif;
        ?>
    </div>
    
<?php get_footer(); ?>