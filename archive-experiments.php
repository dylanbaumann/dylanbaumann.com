<?php get_header(); ?>

<main class="container post-list experiments-list">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'excerpt' ); ?>
	<?php endwhile; endif; ?>

	<?php get_template_part( 'nav', 'below' ); ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
