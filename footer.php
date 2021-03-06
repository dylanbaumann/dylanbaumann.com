	</section>

	<footer id="site-footer" class="container">
		<div id="site-copyright">
			<p><small>&copy;<?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?>.</small></p>
		</div>
	</footer>

<?php wp_footer(); ?>


<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-3.1.1.min.js"></script>

<?php /* Google Analytics */ ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28311173-1', 'auto');
  ga('send', 'pageview');
</script>



<?php if(is_page('Info')): ?>
	<script src="<?php echo get_template_directory_uri() ?>/assets/js/blizzardapi.js"></script>
<?php endif; ?>

</body>
</html>
