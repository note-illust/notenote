<?php
/*
Template Name: トップページ
*/
?>
<?php get_header(); ?>

	<main role="main">
		<article>

			<section>
				<?php if(have_posts()): while(have_posts()): ?>
				<?php the_post(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</section>

		</article>
	</main>

<?php get_footer(); ?>
