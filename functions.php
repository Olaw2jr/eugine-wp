<?php
/**
 * Eugine functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Eugine
 * @since Eugine 1.0
 */

/**
 * Set up the content width value based on the theme's design.
 *
 * @see eugine_content_width()
 *
 * @since Eugine 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 474;
}

if ( ! function_exists( 'eugine_setup' ) ) :
/**
 * Twenty Fourteen setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since Twenty Fourteen 1.0
 */
function eugine_setup() {

	/*
	 * Make Twenty Fourteen available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Fourteen, use a find and
	 * replace to change 'eugine' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'eugine', get_template_directory() . '/languages' );

	// This theme styles the visual editor to resemble the theme style.
	//add_editor_style( array( 'css/editor-style.css', eugine_font_url(), 'genericons/genericons.css' ) );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 358, 191, true );
	add_image_size( 'eugine-full-width', 1500, 500, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'eugine' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'eugine' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'eugine_custom_background_args', array(
		'default-color' => 'f5f5f5',
	) ) );

}
endif; // eugine_setup
add_action( 'after_setup_theme', 'eugine_setup' );

/**
 * Adjust content_width value for image attachment template.
 *
 * @since Twenty Fourteen 1.0
 */
function eugine_content_width() {
	if ( is_attachment() && wp_attachment_is_image() ) {
		$GLOBALS['content_width'] = 810;
	}
}
add_action( 'template_redirect', 'eugine_content_width' );