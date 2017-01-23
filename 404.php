<?php get_header(); ?>

<main>
	<article class="page-not-found">
		<header>
			<h1 class="entry-title"><?php _e( 'Not Found', 'irohco' ); ?></h1>
		</header>

		<section class="entry-content">
			<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'irohco' ); ?></p>
			<?php get_search_form(); ?>
		</section>
	</article>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
