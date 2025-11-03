<?php
/**
 * mobiki functions and definitions
 *
 * @package mobiki
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action('shutdown', 'wp_ob_end_flush_all', 1);
add_action('shutdown', function () {
    while (@ob_end_flush());
});

// Theme Version
if (!defined('MOBIKI_THEME_VERSION')) {
    define('MOBIKI_THEME_VERSION', wp_get_theme()->get('Version'));
}

if ( ! function_exists( 'mobiki_setup' ) ) :
    /**
     * テーマのセットアップ
     */
    function mobiki_setup() {
        // 翻訳ファイルの読み込み(6.6 未満に対応)
        load_theme_textdomain( 'mobiki', get_template_directory() . '/languages' );

        // エディタースタイルのサポート
        add_theme_support('editor-styles');
        add_editor_style(get_parent_theme_file_uri('assets/css/editor-style.css'));

        // ブロックエディターのサポート
        add_theme_support('wp-block-styles');
        add_theme_support('block-patterns');
        add_theme_support('block-templates');
        add_theme_support('block-template-parts');

        // タイトルタグのサポート
        add_theme_support( 'title-tag' );

        // アイキャッチ画像のサポート
        add_theme_support( 'post-thumbnails' );

        // HTML5のサポート
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ) );

        // 投稿フォーマットのサポート
        add_theme_support('post-formats', array(
            'aside',
            'audio',
            'chat',
            'gallery',
            'image',
            'link',
            'quote',
            'status',
            'video'
        ));

        // カスタムロゴのサポート
        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ) );

        // レスポンシブ埋め込みのサポート
        add_theme_support( 'responsive-embeds' );

        // ワイドアラインメントのサポート
        add_theme_support( 'align-wide' );
    }
endif;
add_action( 'after_setup_theme', 'mobiki_setup' );

/**
 * スタイルとスクリプトの読み込み
 */
function mobiki_enqueue_scripts() {
    // CSSの読み込み
    wp_enqueue_style(
        'mobiki-style',
        get_stylesheet_uri(),
        array(),
        MOBIKI_THEME_VERSION
    );

    // メインスタイル
    wp_enqueue_style(
        'mobiki-original-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array('mobiki-style'),
        MOBIKI_THEME_VERSION
    );

    // メインスクリプト
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
 * エディタ用スタイルの読み込み（ブロックエディタ & フルサイトエディタ両対応）
 */
function mobiki_enqueue_editor_assets() {
    // エディタ用スタイルを読み込み
    if ( ! is_admin() ) {
        return;
    }

    wp_enqueue_style(
        'mobiki-editor-style',
        get_template_directory_uri() . '/assets/css/editor-style.css',
        array(),
        MOBIKI_THEME_VERSION
    );
}
add_action( 'enqueue_block_editor_assets', 'mobiki_enqueue_editor_assets' );

/**
 * ブロックパターンカテゴリーの登録
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
 * 画像にloading="lazy"属性を自動追加
 */
function mobiki_add_lazy_loading_to_images( $content ) {
    // img タグにloading="lazy"を追加
    $content = preg_replace('/<img((?![^>]*loading=)[^>]*)>/i', '<img$1 loading="lazy">', $content);
    return $content;
}
add_filter( 'the_content', 'mobiki_add_lazy_loading_to_images' );
add_filter( 'post_thumbnail_html', 'mobiki_add_lazy_loading_to_images' );

/**
 * 抜粋の長さを調整
 */
function mobiki_theme_excerpt_length($length)
{
    return 60;
}
add_filter('excerpt_length', 'mobiki_theme_excerpt_length');

/**
 * 抜粋の最後の文字を変更
 */
function mobiki_theme_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'mobiki_theme_excerpt_more');


// 管理画面の外観の中にテーマのオリジナル設定ページを作る
require get_template_directory() . '/inc/admin-theme-settings.php';