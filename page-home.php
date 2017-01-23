<?php get_header(); ?>

<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="page-home" <?php post_class(); ?>>
			<section class="entry-content">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				<?php the_content(); ?>
				<div class="entry-links"><?php wp_link_pages(); ?></div>
			</section>
		</article>
		<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
