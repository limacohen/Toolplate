<?php
/**
 * @package WordPress
 * @subpackage Toolplate
 */

/**
 * Make theme available for translation
 * Translations can be filed in the /languages/ directory
 * If you're building a theme based on toolplate, use a find and replace
 * to change 'toolplate' to the name of your theme in all the template files
 */
load_theme_textdomain( 'toolplate', TEMPLATEPATH . '/languages' );

$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable( $locale_file ) )
	require_once( $locale_file );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640;

/**
 * This theme uses wp_nav_menu() in one location.
 */
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'toolplate' ),
) );

/**
 * Add default posts and comments RSS feed links to head
 */
add_theme_support( 'automatic-feed-links' );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function toolplate_page_menu_args($args) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'toolplate_page_menu_args' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function toolplate_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Sidebar 1', 'toolplate' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<p class="widget-title">',
		'after_title' => '</p>',
	) );

	register_sidebar( array (
		'name' => __( 'Sidebar 2', 'toolplate' ),
		'id' => 'sidebar-2',
		'description' => __( 'An optional second sidebar area', 'toolplate' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<p class="widget-title">',
		'after_title' => '</p>',
	) );	
}
add_action( 'init', 'toolplate_widgets_init' );
