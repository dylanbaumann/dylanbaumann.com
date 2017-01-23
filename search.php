<?php get_header(); ?>

<main>
	<section class="page-overview">
		<?php if ( have_posts() ) : ?>
			<header>
				<h1 class="entry-title"><?php printf( __( 'Search Results for "%s"', 'irohco' ), get_search_query() ); ?></h1>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry' ); ?>
			<?php endwhile; ?>

			<?php get_template_part( 'nav', 'below' ); ?>
		<?php else : ?>
			<header>
				<h1 class="entry-title"><?php _e( 'Nothing Found', 'irohco' ); ?></h1>
			</header>

			<section class="entry-content">
				<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'irohco' ); ?></p>
				<?php get_search_form(); ?>
			</section>
		<?php endif; ?>
	</section>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
