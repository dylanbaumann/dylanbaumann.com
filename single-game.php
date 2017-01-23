<?php get_header(); ?>

<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>

	<section class="single-footer">
		<?php get_template_part( 'nav', 'below-single' ); ?>
	</section>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
