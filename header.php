<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Load webfonts -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i|Source+Sans+Pro:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="site-header" class="container" role="banner">
		<div id="site-info">
			<a id="logo" href="<?php echo esc_url( home_url('/') ); ?>" title="<?php echo esc_html( get_bloginfo('name') ); ?>" rel="home">
				<?php echo esc_html( get_bloginfo('name') ); ?>
			</a>

			<?php /*
			Personal Site: removing for me (shouldn't remove from all)
			<div id="site-description">
				<p><small><?php bloginfo('description'); ?></small></p>
			</div>
			*/ ?>
		</div>

		<nav id="site-menu">
			<?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
		</nav>
	</header>

	<section class="layout-sidebar">
