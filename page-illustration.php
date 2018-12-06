<?php
get_header(); ?>
<main role="main">
    <article>
        <section>
            <div class="inner">
                <?php $my_query = new WP_Query(array(
    'post_type' => 'gallery',
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
        </section>
    </article>
</main>
<?php get_footer();
