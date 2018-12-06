<?php
/*
Template Name: トップページ
*/
?>
<?php get_header(); ?>

<main role="main">
    <article>

        <section>
            <div id="main_slide_wrapper">
                <!-- Flickity -->


                <div id="main_gallery" class="gallery">



                    <div class="gallery-cell">
                        <a href="https://www.nicovideo.jp/watch/sm33791250" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/movie/guilty mind_note.png">
                        </a>

                    </div>


                    <div class="gallery-cell">
                        <a href="https://www.nicovideo.jp/watch/sm33987306" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/movie/ballade_note.jpg">
                        </a>

                    </div>


                    <div class="gallery-cell">
                        <a href="<?php echo home_url(); ?>/illustration">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/personal works/rin_len_10th_note.jpg" />
                        </a>

                    </div>


                    <div class="gallery-cell">
                        <a href=" https://tonoakari.wixsite.com/mysite" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/planning/voice drama_image_note.jpg" />
                        </a>

                    </div>


                </div>



                <div id="mainslide_previous" class="mainslide_button_wrap">
                    <div class="button_overlay"></div>
                </div>

                <div id="mainslide_next" class="mainslide_button_wrap">
                    <div class="button_overlay"></div>
                </div>
                <!-- /Flickity -->
            </div>
            <div class="inner">
                <h2 class="top_title">
                    Movie
                </h2>
                <ul class="top_movie">
                    <li>
                        <script type="application/javascript" src="https://embed.nicovideo.jp/watch/sm33987306/script?w=445&h=250"></script><noscript><a href="https://www.nicovideo.jp/watch/sm33987306">君想いバラード / feat.鏡音レン</a></noscript>
                    </li>
                    <li>
                        <script type="application/javascript" src="https://embed.nicovideo.jp/watch/sm33791250/script?w=445&h=250"></script><noscript><a href="https://www.nicovideo.jp/watch/sm33791250">guilty mind / feat.初音ミク</a></noscript>
                    </li>
                    <li>
                        <script type="application/javascript" src="https://embed.nicovideo.jp/watch/sm33596870/script?w=445&h=250"></script><noscript><a href="https://www.nicovideo.jp/watch/sm33596870">【鏡音レン】ありのままでいさせてくれ【オリジナル】</a></noscript>
                    </li>
                    <li>
                        <script type="application/javascript" src="https://embed.nicovideo.jp/watch/sm33596870/script?w=445&h=250"></script><noscript><a href="https://www.nicovideo.jp/watch/sm33596870">【鏡音レン】ありのままでいさせてくれ【オリジナル】</a></noscript>
                    </li>
                </ul>
                <div class="center">
                    <a target="_blank" href="http://www.nicovideo.jp/mylist/62143728">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/common/niconico_logo.png" alt="Note Illustration" class="niconico_logo">
                    </a>
                </div>
                <div class="cf">
                    <div class="left top_works">
                        <h2 class="top_title">
                            Works
                        </h2>
                        <div class="top_works_wrap">
                            <?php $my_query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page'=>-1,
)); ?>
                            <?php if($my_query->have_posts()): ?>
                            <?php while($my_query->have_posts()): ?>
                            <?php $my_query->the_post(); ?>
                            <?php the_content(); ?>
                            <?php endwhile; ?>
                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="right top_twitter">
                        <h2 class="top_title">
                            Twitter
                        </h2>
                        <div class="top_twitter_wrap">
                            <a class="twitter-timeline" href="https://twitter.com/note_illust?ref_src=twsrc%5Etfw">Tweets by note_illust</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </article>
</main>

<?php get_footer(); ?>
