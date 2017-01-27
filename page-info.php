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
			<section id="info-blizzard">
				<?php the_field('info_blizzard'); ?>

				<div class="game-info">
					<p class="toon-name">
						<span class="wow-name">Name</span>, <span class="wow-race">Race</span> <span class="wow-class">Class</span><br>
						Level <span class="wow-level"></span><br>
						<span class="wow-realm">Realm</span><br>
						Honorable Kills: <span class="wow-HKills"></span>
					</p>
					<div class="wow-thumbnail"></div>
				</div>
			</section>
		<?php endif; ?>
	</article>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
