<?php
/**
 * Wordpress Boilerplate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wordpress_Boilerplate
 */

if ( ! function_exists( 'wordpress_boilerplate_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wordpress_boilerplate_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Wordpress Boilerplate, use a find and replace
		 * to change 'wordpress-boilerplate' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wordpress-boilerplate', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-primary' => esc_html__( 'Primary', 'wordpress-boilerplate' ),
			'menu-footer-primary' => esc_html__( 'Footer Primary', 'wordpress-boilerplate' ),
			'menu-footer-secondary' => esc_html__( 'Footer Secondary', 'wordpress-boilerplate' ),
			'menu-footer-tertiary' => esc_html__( 'Footer Tertiary', 'wordpress-boilerplate' ),
			'menu-top' => esc_html__( 'Top', 'wordpress-boilerplate' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wordpress_boilerplate_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wordpress_boilerplate_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wordpress_boilerplate_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wordpress_boilerplate_content_width', 640 );
}
add_action( 'after_setup_theme', 'wordpress_boilerplate_content_width', 0 );


//THIS FUNCTION PRINTS THE CURRENT TEMPLATE FILE PATH BELOW THE FOOTER FOR DEBUGGING
function meks_which_template_is_loaded() {
	if ( is_super_admin() ) {
		global $template;
		print_r( $template );
	}
}
 
add_action( 'wp_footer', 'meks_which_template_is_loaded' );

//-----------------------------------------------------
// Register widget area.
	/**
	 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
	**/
//-----------------------------------------------------

function wordpress_boilerplate_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wordpress-boilerplate' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wordpress-boilerplate' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title border-bottom">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'wordpress_boilerplate_widgets_init' );





 //-----------------------------------------------------
 // Enqueue scripts and styles
 //-----------------------------------------------------

function wordpress_boilerplate_scripts() {

	// Styles
	wp_enqueue_style( 'wordpress-boilerplate-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
	wp_enqueue_style( 'slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );
	wp_enqueue_style( 'custom-styles', get_stylesheet_directory_uri() . '/lib/css/style.css' );

	// Scripts
	// wp_enqueue_script( 'wordpress-boilerplate-navigation', get_template_directory_uri() . '/lib/js/min/navigation.min.js', array(), null, true );
	wp_enqueue_script( 'wordpress-boilerplate-skip-link-focus-fix', get_template_directory_uri() . '/lib/js/min/skip-link-focus-fix.min.js', array(), null, true );

	// wp_deregister_script( 'jquery' );
	// wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), null, true);
	wp_register_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), null, true );
	wp_register_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), null, true );
	wp_register_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true );
	wp_register_script( 'sticky-js', get_stylesheet_directory_uri() . '/lib/js/min/jquery.sticky.min.js', array('jquery'), null, true );


	// wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'popper-js' );
	wp_enqueue_script( 'bootstrap-js' );
	wp_enqueue_script( 'slick-js' );
	wp_enqueue_script( 'sticky-js' );
	wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/lib/js/min/scripts.min.js', array('jquery'), null, true );


	// wp_register_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), null, true);
	//wp_enqueue_script( 'jquery-migrate' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wordpress_boilerplate_scripts' );





//-----------------------------------------------------
// Uderscores Stuff...
//-----------------------------------------------------
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




//-----------------------------------------------------
// Remove Emoji's
//-----------------------------------------------------

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );





//-----------------------------------------------------
// Remove the WordPress Generator Meta Tag
//-----------------------------------------------------

function remove_generator_filter() { return ''; }

if (function_exists('add_filter')) {
	$types = array('html', 'xhtml', 'atom', 'rss2', /*'rdf',*/ 'comment', 'export');

	foreach ($types as $type)
	add_filter('get_the_generator_'.$type, 'remove_generator_filter');
}





//-----------------------------------------------------
// Adding Descriptions to Nav
//-----------------------------------------------------

function prefix_nav_description( $item_output, $item, $depth, $args ) {
	if ( !empty( $item->description ) ) {
		$item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
}
return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );



//-----------------------------------------------------
// Bootstrap 4 Navwalker
//-----------------------------------------------------

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


//-----------------------------------------------------
// SVG Upload
//-----------------------------------------------------

function my_custom_mime_types( $mimes ) {

// New allowed mime types.
$mimes['svg'] = 'image/svg+xml';
$mimes['svgz'] = 'image/svg+xml';

return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );





//-----------------------------------------------------
// Add HTML5 theme support.
//-----------------------------------------------------
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );





//array( 'post', 'page', 'bio', 'products', 'resources', 'research_product' )

function my_searchwp_indexed_post_types( $post_types ) {
	return array( 'post', 'page', 'bio', 'products', 'resources', 'research_project' );
}
add_filter( 'searchwp_indexed_post_types', 'my_searchwp_indexed_post_types' );





@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );




// function wpex_order_category( $query ) {
// 	// exit out if it's the admin or it isn't the main query
// 	if ( is_admin() || ! $query->is_main_query() ) {
// 		return;
// 	}
// 	// order category archives by title in ascending order
// 	if ( is_archive() ) {
// 		$query->set( 'order' , 'desc' );
// 		$query->set( 'orderby', 'date');
// 		return;
// 	}
// }
// add_action( 'pre_get_posts', 'wpex_order_category', 1 );




// add_filter('upload_mimes', 'custom_upload_mimes');
//  function custom_upload_mimes ( $existing_mimes = array() ) {
//  // add your extension to the array
//  // $existing_mimes['ppsm'] = 'application/vnd.ms-powerpoint';
//  $existing_mimes['ppsm'] = 'application/vnd.ms-powerpoint';
//  // or: $existing_mimes['ppt|pot|pps'] = 'application/vnd.ms-powerpoint';
//  // to add multiple extensions for the same mime type
//  // add as many as you like
//  // removing existing file types
//  unset( $existing_mimes['exe'] );
//  // add as many as you like
//  // and return the new full result
//  return $existing_mimes;
//  }




// add_filter( 'upload_mimes', 'my_myme_types', 1, 1 );
// function my_myme_types( $mime_types ) {
//   $mime_types['ppsm'] = 'application/vnd.ms-powerpoint';     // Adding .svg extension
//   // $mime_types['json'] = 'application/json'; // Adding .json extension
//
//   unset( $mime_types['ppsm'] );  // Remove .xls extension
//   // unset( $mime_types['xlsx'] ); // Remove .xlsx extension
//
//   return $mime_types;
// }

// function my_myme_types($mime_types){
//     $mime_types['ppsm'] = 'application/vnd.ms-powerpoint'; //Adding svg extension
//     return $mime_types;
// }
// add_filter('upload_mimes', 'my_myme_types', 1, 1);




add_filter( 'manage_media_columns', 'sk_media_columns_filesize' );
/**
 * Filter the Media list table columns to add a File Size column.
 *
 * @param array $posts_columns Existing array of columns displayed in the Media list table.
 * @return array Amended array of columns to be displayed in the Media list table.
 */
function sk_media_columns_filesize( $posts_columns ) {
	$posts_columns['filesize'] = __( 'File Size', 'my-theme-text-domain' );

	return $posts_columns;
}

add_action( 'manage_media_custom_column', 'sk_media_custom_column_filesize', 10, 2 );
/**
 * Display File Size custom column in the Media list table.
 *
 * @param string $column_name Name of the custom column.
 * @param int    $post_id Current Attachment ID.
 */
function sk_media_custom_column_filesize( $column_name, $post_id ) {
	if ( 'filesize' !== $column_name ) {
		return;
	}

	$bytes = filesize( get_attached_file( $post_id ) );

	echo size_format( $bytes, 2 );
}

add_action( 'admin_print_styles-upload.php', 'sk_filesize_column_filesize' );
/**
 * Adjust File Size column on Media Library page in WP admin
 */
function sk_filesize_column_filesize() {
	echo
	'<style>
		.fixed .column-filesize {
			width: 10%;
		}
	</style>';
}




// function my_searchwp_exclude( $ids, $engine, $terms ) {
//
// 	$entries_to_exclude = get_posts(
// 		array(
// 			// 'post_type' => 'page',
// 			'post_parent_in' => array(29389),
// 			'nopaging'  => true,
// 			'fields'    => 'ids',
//
// 		)
// 	);
//
// 	$ids = array_unique( array_merge( $ids, array_map( 'absint', $entries_to_exclude ) ) );
//
// 	return $ids;
// }
//
// add_filter( 'searchwp_exclude', 'my_searchwp_exclude', 10, 3 );




// function my_searchwp_exclude( $ids, $engine, $terms )
// {
//   $ids[] = 29389; // forcefully exclude post 78
//   return $ids;
// }
//
// add_filter( 'searchwp_exclude', 'my_searchwp_exclude', 10, 3 );




// function tribe_attachment_404_fix () {
// 	if (class_exists('Tribe__Events__Main')) {
// 		remove_action( 'init', array( Tribe__Events__Main::instance(), 'init' ), 10 );
// 		add_action( 'init', array( Tribe__Events__Main::instance(), 'init' ), 1 );
// 	}
// }
//
// add_action( 'after_setup_theme', 'tribe_attachment_404_fix' );




/**
 * Redirection Plugin Editor access
 */
add_filter( 'redirection_role', 'redirection_to_editor' );
function redirection_to_editor() {
	return 'edit_pages';
}




$subRole = get_role( 'subscriber' );
$subRole->add_cap( 'read_private_posts' );
$subRole->add_cap( 'read_private_pages' );





// remove "Private: " from titles
function remove_private_prefix($title) {
	$title = str_replace('Private: ', '', $title);
	return $title;
}
add_filter('the_title', 'remove_private_prefix');



add_filter('pre_get_posts', 'order_archive_by_title');
function order_archive_by_title($q) {
	if ( $q->is_archive && isset($q->query['post_type']) && in_array($q->query['post_type'], array('products')) ) {
		$q->set('orderby', 'title');
		$q->set('order', 'ASC');
	}
	return $q;
}




function my_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
	' . __( "To view this protected page, enter the password below:" ) . '
	<label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
	</form>
	';
	return $o;
}
add_filter( 'the_password_form', 'my_password_form' );





//-----------------------------------------------------
// ACF Options
//-----------------------------------------------------

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'General',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social',
		'menu_title'	=> 'Social',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Resources',
		'menu_title'	=> 'Resources',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Products',
		'menu_title'	=> 'Products',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Research',
		'menu_title'	=> 'Research',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Search',
		'menu_title'	=> 'Search',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'News',
		'menu_title'	=> 'News',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> '404',
		'menu_title'	=> '404',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Calendar',
		'menu_title'	=> 'Calendar',
		'parent_slug'	=> 'theme-general-settings',
	));

add_filter('comment_form_default_fields', 'website_remove');
function website_remove($fields)
	{
		if(isset($fields['url']))
		unset($fields['url']);
		return $fields;
	}
}

//Custom Cookies



