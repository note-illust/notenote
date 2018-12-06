<?php
get_header(); ?>
<main role="main">
    <article>
        <section>
            <div class="inner contact_inner">
                <p class="contact_text">
                    イラスト・カット等、イラスト関連のお仕事を承ります。<br>
                    note.illust＊gmail.com(＊→@)<br>
                    <br>
                    ※ご依頼の際に「イラストの詳細(サイズや枚数等)」「締切り」「ご予算」等、ご記載くださいますようお願いいたします。<br>
                    ※返信メールは３日以内にお返事しております。<br>
                    ※もしも返信が届かない場合は、エラーの可能性がございますので、お手数ですが再度送信をお願いいたします。
                </p>
                <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
        </section>
    </article>
</main>
<?php get_footer();
