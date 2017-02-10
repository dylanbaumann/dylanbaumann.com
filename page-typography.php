<?php get_header(); ?>

<main>
	<article id="page-typography" <?php post_class(); ?>>

		<section>
			<h2>Text &amp; Links</h2>
			<p>Showing how text and links behave.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit <a>anim id est laborum</a>.</p>

			<p>Sed pharetra nulla odio, ac pharetra tortor semper nec. Donec mi orci, maximus cursus tellus id, tempus dapibus tortor. Phasellus dignissim non dui sit amet volutpat.</p>

			<p>Quisque quis hendrerit odio, id auctor nisi. Nam tincidunt auctor nibh, et pretium dolor varius at. Etiam a sodales libero. In fermentum faucibus magna. Duis sed neque ut nulla condimentum faucibus vitae a sem. Suspendisse blandit neque sit amet ullamcorper dignissim. Proin condimentum quis velit at malesuada. Mauris viverra non felis non fringilla. Quisque rhoncus tempus diam, vitae viverra ex rutrum convallis. Sed et eleifend elit. In purus sapien, condimentum ac vestibulum eget, varius eget ante.</p>
		</section>

		<hr>

		<section>
			<h2>Headlines</h2>
			<p>Showing off how headlines behave.</p>

			<h1>H1: Lorem ipsum dolor sit amet</h1>
			<p>This is a paragraph tag following the headline, showing both the margin-top and margin-bottom of headlines.</p>

			<h2>H2: Consectetur adipisicing elit, sed do eiusmod tempor</h2>
			<p>This is a paragraph tag following the headline, showing both the margin-top and margin-bottom of headlines.</p>

			<h3>H3: Incididunt ut labore et dolore magna aliqua</h3>
			<p>This is a paragraph tag following the headline, showing both the margin-top and margin-bottom of headlines.</p>

			<h4>H4: Ut enim ad minim veniam, quis nostrud</h4>
			<p>This is a paragraph tag following the headline, showing both the margin-top and margin-bottom of headlines.</p>

			<h5>H5: Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</h5>
			<p>This is a paragraph tag following the headline, showing both the margin-top and margin-bottom of headlines.</p>

			<h6>H6: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h6>
			<p>This is a paragraph tag following the headline, showing both the margin-top and margin-bottom of headlines.</p>
		</section>

		<hr>

		<section>
			<h2>Lists</h2>

			<p>How both Ordered and Unordered lists behave.</p>

			<ul>
				<li>Unordered list test</li>
				<li>Another list element. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
				<li>Yet another element in the list</li>
				<li>Some long text. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
			</ul>

			<p>Separated by a block of paragraph copy to demonstrate margin-bottom and margin-top settings.</p>

			<ol>
				<li>Ordered list</li>
				<li>
					Here's a nested unordered list
					<ol>
						<li>Nested Unordered list</li>
						<li>
							Nested ordered list
							<ol>
								<li>The first</li>
								<li>And the second</li>
							</ol>
						</li>
					</ol>
				</li>
				<li>Ordered List item</li>
				<li>Nested Ordered list
					<ol>
						<li>Some point</li>
						<li>
							Nested Unordered list
							<ol>
								<li>The first</li>
								<li>And the second</li>
							</ol>
						</li>
					</ol>
				</li>
			</ol>

			<p>Separated by a block of paragraph copy to demonstrate margin-bottom and margin-top settings.</p>
		</section>

		<hr>

		<section>
			<h2>Miscelanious Elements</h2>
			<p>Gotta love the little stuff</p>

			<p>
				<strong>&lt;strong&gt;</strong> (faux, don't use) <br>
				<em>&lt;emphasis&gt;</em> <br>
				<del>&lt;deleted&gt;</del> <br>
				<a>&lt;anchor&gt;</a> <br>
				<a href="#">&lt;anchor + href&gt;</a> <br>
				<acronym title="spelled-out version of the acronym">&lt;acronym&gt; (mouseover text)</acronym>
			</p>
		</section>

	</article>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
