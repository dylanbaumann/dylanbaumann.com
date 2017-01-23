<?php
add_action( 'after_setup_theme', 'irohco_setup' );
function irohco_setup() {
	load_theme_textdomain( 'irohco', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );

	global $content_width;

	if ( ! isset( $content_width ) ) $content_width = 640;
		register_nav_menus(
			array( 'main-menu' => __( 'Main Menu', 'irohco' )
		)
	);
}

add_action( 'wp_enqueue_scripts', 'irohco_load_scripts' );
function irohco_load_scripts() {
	wp_enqueue_script( 'jquery' );
}

add_action( 'comment_form_before', 'irohco_enqueue_comment_reply_script' );
function irohco_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_filter( 'the_title', 'irohco_title' );
function irohco_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}

add_filter( 'wp_title', 'irohco_filter_wp_title' );
function irohco_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'irohco_widgets_init' );
function irohco_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'irohco' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

function irohco_custom_pings( $comment ) {
	$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}

add_filter( 'get_comments_number', 'irohco_comments_number' );
function irohco_comments_number( $count ) {
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}


// Helper class to add Custom Post Types
function init_custom_post_types() {
	$post_types = array(
		'experiments' => array(
			'slug'			=> 'experiments',
			'title'			=> 'Experiments',
			'singular'		=> 'Experiment',
			'plural'		=> 'Experiments',
			'menu_icon'		=> 'dashicons-welcome-view-site',
			'supports'		=> array( 'title', 'content', 'editor', 'excerpt', 'page-attributes', 'revisions', 'permalinks', 'comments', 'taxonom' ),
			'position'		=> 11,
			'has_archive'	=> true
		),
		'game' => array(
			'slug'			=> 'games',
			'title'			=> 'Games',
			'singular'		=> 'Game',
			'plural'		=> 'Games',
			'menu_icon'		=> 'dashicons-carrot',
			'supports'		=> array( 'title', 'content', 'editor', 'excerpt', 'page-attributes', 'revisions', 'permalinks', 'comments' ),
			'position'		=> 11,
			'has_archive'	=> true
		),
	);

	foreach ($post_types as $name => $options) {
		$labels = array(
			'name'               => _x( $options['title'], 'post type general name', 'flywheel' ),
			'singular_name'      => _x( $options['singular'], 'post type singular name', 'flywheel' ),
			'menu_name'          => _x( $options['title'], 'admin menu', 'flywheel' ),
			'name_admin_bar'     => _x( $options['singular'], 'add new on admin bar', 'flywheel' ),
			'add_new'            => _x( 'Add ' . $options['singular'], $name, 'flywheel' ),
			'add_new_item'       => __( 'Add New ' . $options['singular'], 'flywheel' ),
			'new_item'           => __( 'New ' . $options['singular'], 'flywheel' ),
			'edit_item'          => __( 'Edit ' . $options['singular'], 'flywheel' ),
			'view_item'          => __( 'View ' . $options['singular'], 'flywheel' ),
			'all_items'          => __( 'All ' . $options['plural'], 'flywheel' ),
			'search_items'       => __( 'Search ' . $options['plural'], 'flywheel' ),
			'parent_item_colon'  => __( 'Parent ' . $options['plural'], 'flywheel' ),
			'not_found'          => __( 'No ' . strtolower($options['plural']) . ' found.', 'flywheel' ),
			'not_found_in_trash' => __( 'No ' . strtolower($options['plural']) . ' found in Trash.', 'flywheel' )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => $options['slug'], 'with_front' => true ),
			'capability_type'    => 'post',
			'has_archive'        => $options['has_archive'],
			'hierarchical'       => true,
			'menu_position'      => $options['position'],
			'menu_icon'          => $options['menu_icon'],
			'supports'           => $options['supports']
		);

		register_post_type( $name, $args );
	}
}
add_action( 'init', 'init_custom_post_types' );


// Helper class to add Custom Taxonomies
function init_taxonomies() {

	// You can edit these options here
	$taxonomies = array(
		'game_categories' => array(
			'slug'			=> 'category',
			'hierarchical'	=> true, // true is like categories, false is like tags
			'singular'		=> 'Category',
			'plural'		=> 'Categories',
			'attached_to'	=> array( 'game' )
		),
		'experiments_categories' => array(
			'slug'			=> 'category',
			'hierarchical'	=> true, // true is like categories, false is like tags
			'singular'		=> 'Category',
			'plural'		=> 'Categories',
			'attached_to'	=> array( 'experiments' )
		),
	);

	// The post types are added here.
	foreach ($taxonomies as $name => $options) {
		$labels = array(
			'name'              => _x( $options['plural'], 'taxonomy general name' ),
			'singular_name'     => _x( $options['singular'], 'taxonomy singular name' ),
			'search_items'      => __( 'Search ' . $options['plural'] ),
			'all_items'         => __( 'All ' . $options['plural'] ),
			'parent_item'       => __( 'Parent ' . $options['singular'] ),
			'parent_item_colon' => __( 'Parent ' . $options['singular'].':' ),
			'edit_item'         => __( 'Edit ' . $options['singular'] ),
			'update_item'       => __( 'Update ' . $options['singular'] ),
			'add_new_item'      => __( 'Add New ' . $options['singular'] ),
			'new_item_name'     => __( 'New ' . $options['singular'] . ' Name' ),
			'menu_name'         => __( $options['plural'] ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => $options['slug'], 'with_front' => false ),
		);

		if (!$options['hierarchical']) {
			$args['hierarchical'] = $options['hierarchical'];
			$args['update_count_callback'] = '_update_post_term_count';
			$labels['popular_items'] = __( 'Popular '. $options['singular'] );
			$labels['parent_item'] = null;
			$labels['parent_item_colon'] = null;
			$labels['separate_items_with_commas'] = __( 'Separate ' . $options['plural'] . ' with commas' );
			$labels['add_or_remove_items'] = __( 'Add or remove ' . $options['plural'] );
			$labels['choose_from_most_used'] = __( 'Choose from the most used ' . $options['plural'] );
			$labels['not_found'] = __( 'No ' . $options['plural'] . ' found.' );
			$args['labels'] = $labels;
		}

		register_taxonomy( $name, $options['attached_to'], $args );
	}
}
add_action( 'init', 'init_taxonomies', 0 );
