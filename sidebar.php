<aside id="sidebar">
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<div class="widget-area">
			<ul class="no-bullets">
				<?php dynamic_sidebar( 'primary-widget-area' ); ?>
			</ul>
		</div>
	<?php endif; ?>
</aside>
