<?php
/**
 * Mobiki functions and definitions
 *
 * @package mobiki
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Theme Version.
if ( ! defined( 'MOBIKI_THEME_VERSION' ) ) {
	define( 'MOBIKI_THEME_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! function_exists( 'mobiki_setup' ) ) :
	/**
	 * Theme setup.
	 */
	function mobiki_setup() {
		// Add editor styles support.
		add_theme_support( 'editor-styles' );
		// Pass a theme-relative path so WordPress inlines the file instead of fetching it over HTTP.
		add_editor_style( 'assets/css/editor-style.css' );

		// Add block editor support.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'block-patterns' );
		add_theme_support( 'block-templates' );
		add_theme_support( 'block-template-parts' );

		// Add title tag support.
		add_theme_support( 'title-tag' );

		// Add post thumbnails support.
		add_theme_support( 'post-thumbnails' );

		// Add HTML5 support.
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add post formats support.
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'audio',
				'chat',
				'gallery',
				'image',
				'link',
				'quote',
				'status',
				'video',
			)
		);

		// Add custom logo support.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 400,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		// Add responsive embeds support.
		add_theme_support( 'responsive-embeds' );

		// Add wide alignment support.
		add_theme_support( 'align-wide' );
	}
endif;
add_action( 'after_setup_theme', 'mobiki_setup' );

/**
 * Enqueue styles and scripts.
 */
function mobiki_enqueue_scripts() {
	// Load the stylesheet.
	wp_enqueue_style(
		'mobiki-style',
		get_stylesheet_uri(),
		array(),
		MOBIKI_THEME_VERSION
	);

	// Main stylesheet.
	wp_enqueue_style(
		'mobiki-original-style',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'mobiki-style' ),
		MOBIKI_THEME_VERSION
	);

	// Main script.
	wp_enqueue_script(
		'mobiki-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		MOBIKI_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'mobiki_enqueue_scripts' );

/**
 * Register block pattern categories.
 */
function mobiki_register_block_pattern_categories() {
	register_block_pattern_category(
		'mobiki-hero',
		array( 'label' => __( 'Hero Section', 'mobiki' ) )
	);
	register_block_pattern_category(
		'mobiki-sections',
		array( 'label' => __( 'Sections', 'mobiki' ) )
	);
}
add_action( 'init', 'mobiki_register_block_pattern_categories' );


/**
 * Adjust the excerpt length.
 *
 * @param int $length Excerpt length.
 * @return int
 */
function mobiki_theme_excerpt_length( $length ) {
	unset( $length );
	return 60;
}
add_filter( 'excerpt_length', 'mobiki_theme_excerpt_length' );

/**
 * Change the excerpt's trailing string.
 *
 * @param string $more String appended to the end of the excerpt.
 * @return string
 */
function mobiki_theme_excerpt_more( $more ) {
	unset( $more );
	return '...';
}
add_filter( 'excerpt_more', 'mobiki_theme_excerpt_more' );
