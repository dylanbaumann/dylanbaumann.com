<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php if ( is_singular() ) {
			echo '<h1 class="entry-title">';
		} else {
			echo '<h2 class="entry-title">';
		} ?>
			<?php edit_post_link('edit'); ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
		<?php if ( is_singular() ) {
			echo '</h1>';
		} else {
			echo '</h2>';
		} ?>

		<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
	</header>

	<?php the_excerpt(); ?>
</article>
