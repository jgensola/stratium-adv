<?php
/**
 * The template includes necessary functions for theme.
 *
 * @package advercom
 * @since 1.0
 */

if ( ! isset( $content_width ) ) {
	$content_width = 1200; /* pixels */
}


defined( 'PAO_T_URI' ) or define( 'PAO_T_URI', get_template_directory_uri() );
defined( 'PAO_T_PATH' ) or define( 'PAO_T_PATH', get_template_directory() );

// Include functions
require_once PAO_T_PATH . '/include/class-tgm-plugin-activation.php';
require_once PAO_T_PATH . '/include/helper-functions.php';
require_once PAO_T_PATH . '/include/actions-config.php';
require_once PAO_T_PATH . '/include/custom-header.php';
require_once PAO_T_PATH . '/include/filters.php';
require_once PAO_T_PATH . '/include/customizer.php';
require_once PAO_T_PATH . '/include/menu-walker.php';
require_once PAO_T_PATH . '/include/custom-menu.php';

require_once PAO_T_PATH . '/wp-updates-theme.php';
new WPUpdatesThemeUpdater_2343( 'http://wp-updates.com/api/2/theme', basename( get_template_directory() ) );

// after setup
if (!function_exists('pao_after_setup')) {
	function pao_after_setup() {
		register_nav_menus( array( 'primary-menu' => esc_attr__( 'Primary menu', 'pao' ) ) );
		add_theme_support( 'post-formats', array( 'video', 'gallery', 'audio', 'quote', 'link' ) );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );

		load_theme_textdomain( 'pao', PAO_T_PATH . '/languages' );

	}
}
add_action( 'after_setup_theme', 'pao_after_setup' );





if (!function_exists('pao_child_font')) {
	function pao_child_font($fonts)
	{
		if (is_array($fonts)) {
			$fonts[] = 'BebasNeueBook';
		}
		return $fonts;
	}
}

add_filter( 'cs_websafe_fonts', 'pao_child_font' );
