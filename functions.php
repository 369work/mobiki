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

/**
 * Add the About Mobiki page under Appearance.
 *
 * @since 1.9
 */
function mobiki_add_about_page() {
	add_theme_page(
		__( 'About Mobiki', 'mobiki' ),
		__( 'About Mobiki', 'mobiki' ),
		'edit_theme_options',
		'mobiki-about',
		'mobiki_render_about_page'
	);
}
add_action( 'admin_menu', 'mobiki_add_about_page' );

/**
 * Load the About Mobiki page styles on that page only.
 *
 * @since 1.9
 *
 * @param string $hook_suffix The current admin page.
 */
function mobiki_enqueue_about_page_styles( $hook_suffix ) {
	if ( 'appearance_page_mobiki-about' !== $hook_suffix ) {
		return;
	}

	wp_enqueue_style( 'mobiki-admin', get_template_directory_uri() . '/assets/css/admin.css', array(), MOBIKI_THEME_VERSION );
}
add_action( 'admin_enqueue_scripts', 'mobiki_enqueue_about_page_styles' );

/**
 * Render the About Mobiki page.
 *
 * @since 1.9
 */
function mobiki_render_about_page() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	$new_tab = '<span class="screen-reader-text">' . esc_html__( '(opens in a new tab)', 'mobiki' ) . '</span>';
	?>
	<div class="wrap mobiki-about">
		<h1><?php esc_html_e( 'About Mobiki', 'mobiki' ); ?></h1>
		<p class="mobiki-about__lead"><?php esc_html_e( 'Mobiki is a mobile-first portfolio block theme for creators and personal blogs. You can edit the templates, patterns and styles from the Site Editor.', 'mobiki' ); ?></p>

		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Get Started', 'mobiki' ); ?></h2>
			<p><?php esc_html_e( 'Open the Site Editor to change the front page, side menu, profile card and colors.', 'mobiki' ); ?></p>
			<p>
				<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>">
					<?php esc_html_e( 'Open the Site Editor', 'mobiki' ); ?>
				</a>
			</p>
		</div>

		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Review the Mobiki Theme', 'mobiki' ); ?></h2>
			<p><?php esc_html_e( 'Thank you for using the Mobiki theme! We would love to hear your feedback. Please take a moment to leave a review.', 'mobiki' ); ?></p>
			<p>
				<a class="button" href="https://wordpress.org/support/theme/mobiki/reviews/" target="_blank" rel="noopener noreferrer">
					<?php esc_html_e( 'Leave a Review', 'mobiki' ); ?>
					<?php echo $new_tab; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>
				</a>
			</p>
		</div>

		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Theme Support', 'mobiki' ); ?></h2>
			<p><?php esc_html_e( 'Free support for the Mobiki theme is provided on the WordPress.org support forum.', 'mobiki' ); ?></p>
			<p>
				<a class="button" href="https://wordpress.org/support/theme/mobiki/" target="_blank" rel="noopener noreferrer">
					<?php esc_html_e( 'Support Forum', 'mobiki' ); ?>
					<?php echo $new_tab; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>
				</a>
			</p>
			<p><?php esc_html_e( 'Paid customization and paid email support are also available. For details, please contact 369Theme.', 'mobiki' ); ?></p>
			<p class="mobiki-about__links">
				<a class="button" href="https://369theme.com/order" target="_blank" rel="noopener noreferrer">
					<?php esc_html_e( 'Request Customization', 'mobiki' ); ?>
					<?php echo $new_tab; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>
				</a>
				<a class="button" href="https://369theme.com/contact?product=mobiki" target="_blank" rel="noopener noreferrer">
					<?php esc_html_e( 'Contact 369Theme', 'mobiki' ); ?>
					<?php echo $new_tab; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>
				</a>
			</p>
		</div>
	</div>
	<?php
}
