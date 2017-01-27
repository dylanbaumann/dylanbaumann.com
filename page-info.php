<?php get_header(); ?>

<main>
	<article id="page-info" <?php post_class(); ?>>

		<?php /* If there's introductory content */ ?>
		<?php if( get_field('info_intro') ): ?>
			<section id="intro-info">
				<?php the_field('info_intro'); ?>
			</section>
		<?php endif; ?>

		<?php /* Blizzard content */ ?>
		<?php if( get_field('info_blizzard') ): ?>
			<section id="intro-blizzard">
				<?php the_field('info_blizzard'); ?>

				<div class="warcraft-info">
				</div>
			</section>
		<?php endif; ?>
	</article>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
