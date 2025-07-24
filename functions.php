<?php
/**
 * Alex's Block Theme Functions
 *
 * @package AlexBlockTheme
 * @since 1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup function.
 *
 * @since 1.0.0
 */
function alex_block_theme_setup() {
	// Add theme support for various features.
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// Add support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for experimental link color.
	add_theme_support( 'experimental-link-color' );

	// Add support for custom units.
	add_theme_support( 'custom-units', 'rem', 'em' );

	// Add support for custom line height.
	add_theme_support( 'custom-line-height' );

	// Add support for custom spacing.
	add_theme_support( 'custom-spacing' );

	// Add support for custom font sizes.
	add_theme_support( 'custom-font-sizes' );

	// Add support for custom colors.
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Primary', 'tech-book-club' ),
			'slug'  => 'primary',
			'color' => '#e67e22',
		),
		array(
			'name'  => __( 'Secondary', 'tech-book-club' ),
			'slug'  => 'secondary',
			'color' => '#16a085',
		),
		array(
			'name'  => __( 'Dark', 'tech-book-club' ),
			'slug'  => 'dark',
			'color' => '#2c3e50',
		),
		array(
			'name'  => __( 'Light', 'tech-book-club' ),
			'slug'  => 'light',
			'color' => '#ecf0f1',
		),
		array(
			'name'  => __( 'White', 'tech-book-club' ),
			'slug'  => 'white',
			'color' => '#ffffff',
		),
		array(
			'name'  => __( 'Gray 100', 'tech-book-club' ),
			'slug'  => 'gray-100',
			'color' => '#f8f9fa',
		),
		array(
			'name'  => __( 'Gray 200', 'tech-book-club' ),
			'slug'  => 'gray-200',
			'color' => '#e9ecef',
		),
		array(
			'name'  => __( 'Gray 300', 'tech-book-club' ),
			'slug'  => 'gray-300',
			'color' => '#dee2e6',
		),
		array(
			'name'  => __( 'Gray 600', 'tech-book-club' ),
			'slug'  => 'gray-600',
			'color' => '#6c757d',
		),
		array(
			'name'  => __( 'Gray 800', 'tech-book-club' ),
			'slug'  => 'gray-800',
			'color' => '#343a40',
		),
	) );

	// Add support for custom gradients.
	add_theme_support( 'editor-gradient-presets', array(
		array(
			'name'     => __( 'Primary to Secondary', 'tech-book-club' ),
			'gradient' => 'linear-gradient(135deg, #e67e22 0%, #16a085 100%)',
			'slug'     => 'primary-to-secondary',
		),
		array(
			'name'     => __( 'Light to White', 'tech-book-club' ),
			'gradient' => 'linear-gradient(135deg, #ecf0f1 0%, #ffffff 100%)',
			'slug'     => 'light-to-white',
		),
	) );

	// Add support for custom font sizes.
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => __( 'Small', 'tech-book-club' ),
			'size' => 14,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Medium', 'tech-book-club' ),
			'size' => 16,
			'slug' => 'medium',
		),
		array(
			'name' => __( 'Large', 'tech-book-club' ),
			'size' => 18,
			'slug' => 'large',
		),
		array(
			'name' => __( 'Extra Large', 'tech-book-club' ),
			'size' => 24,
			'slug' => 'x-large',
		),
		array(
			'name' => __( '2X Large', 'tech-book-club' ),
			'size' => 32,
			'slug' => 'xx-large',
		),
		array(
			'name' => __( '3X Large', 'tech-book-club' ),
			'size' => 48,
			'slug' => 'xxx-large',
		),
	) );

	// Register navigation menus.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'tech-book-club' ),
		'footer'  => __( 'Footer Menu', 'tech-book-club' ),
	) );

	// Add image sizes.
	add_image_size( 'hero-image', 800, 600, true );
	add_image_size( 'feature-image', 400, 300, true );
	add_image_size( 'testimonial-avatar', 100, 100, true );
}
add_action( 'after_setup_theme', 'alex_block_theme_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function alex_block_theme_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'alex-block-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	// Enqueue theme script.
	wp_enqueue_script( 'alex-block-theme-script', get_template_directory_uri() . '/js/theme.js', array(), wp_get_theme()->get( 'Version' ), true );

	// Localize script for AJAX.
	wp_localize_script( 'alex-block-theme-script', 'alexBlockThemeAjax', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'alex_block_theme_nonce' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'alex_block_theme_scripts' );

/**
 * Add custom block styles.
 *
 * @since 1.0.0
 */
function alex_block_theme_block_styles() {
	// Register block styles.
	register_block_style( 'core/button', array(
		'name'         => 'outline',
		'label'        => __( 'Outline', 'tech-book-club' ),
		'inline_style' => '
			.is-style-outline .wp-block-button__link {
				background-color: transparent;
				border: 2px solid var(--wp--preset--color--primary);
				color: var(--wp--preset--color--primary);
			}
			.is-style-outline .wp-block-button__link:hover {
				background-color: var(--wp--preset--color--primary);
				color: var(--wp--preset--color--white);
			}
		',
	) );

	register_block_style( 'core/group', array(
		'name'         => 'hero-section',
		'label'        => __( 'Hero Section', 'tech-book-club' ),
		'inline_style' => '
			.is-style-hero-section {
				padding: 4rem 0;
				background: linear-gradient(135deg, var(--wp--preset--color--light) 0%, var(--wp--preset--color--white) 100%);
			}
		',
	) );

	register_block_style( 'core/group', array(
		'name'         => 'cta-section',
		'label'        => __( 'CTA Section', 'tech-book-club' ),
		'inline_style' => '
			.is-style-cta-section {
				padding: 4rem 0;
				background: linear-gradient(135deg, var(--wp--preset--color--secondary), #1abc9c);
				color: var(--wp--preset--color--white);
				text-align: center;
			}
		',
	) );
}
add_action( 'init', 'alex_block_theme_block_styles' );

/**
 * Add custom block patterns.
 *
 * @since 1.0.0
 */
function alex_block_theme_block_patterns() {
	// Register block pattern category.
	register_block_pattern_category( 'alex-block-theme', array(
		'label' => __( 'Alex\'s Block Theme', 'alex-block-theme' ),
	) );
}
add_action( 'init', 'alex_block_theme_block_patterns' );

/**
 * Customize the excerpt length.
 *
 * @since 1.0.0
 * @param int $length Excerpt length.
 * @return int Modified excerpt length.
 */
function alex_block_theme_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'alex_block_theme_excerpt_length' );

/**
 * Customize the excerpt more string.
 *
 * @since 1.0.0
 * @param string $more Excerpt more string.
 * @return string Modified excerpt more string.
 */
function alex_block_theme_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'alex_block_theme_excerpt_more' );

/**
 * Add custom image sizes to media library.
 *
 * @since 1.0.0
 * @param array $sizes Image sizes.
 * @return array Modified image sizes.
 */
function alex_block_theme_custom_image_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'hero-image'         => __( 'Hero Image', 'alex-block-theme' ),
		'feature-image'      => __( 'Feature Image', 'alex-block-theme' ),
		'testimonial-avatar' => __( 'Testimonial Avatar', 'alex-block-theme' ),
	) );
}
add_filter( 'image_size_names_choose', 'alex_block_theme_custom_image_sizes' );

/**
 * Add custom body classes.
 *
 * @since 1.0.0
 * @param array $classes Body classes.
 * @return array Modified body classes.
 */
function alex_block_theme_body_classes( $classes ) {
	// Add class for block theme.
	$classes[] = 'block-theme';

	// Add class for Alex's block theme.
	$classes[] = 'alex-block-theme';

	return $classes;
}
add_filter( 'body_class', 'alex_block_theme_body_classes' );

/**
 * Add theme support for WooCommerce.
 *
 * @since 1.0.0
 */
function alex_block_theme_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'alex_block_theme_woocommerce_support' );

/**
 * Add customizer settings.
 *
 * @since 1.0.0
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function alex_block_theme_customize_register( $wp_customize ) {
	// Add section for theme options.
	$wp_customize->add_section( 'alex_block_theme_options', array(
		'title'    => __( 'Alex\'s Block Theme Options', 'alex-block-theme' ),
		'priority' => 30,
	) );

	// Add setting for hero subtitle.
	$wp_customize->add_setting( 'hero_subtitle', array(
		'default'           => __( 'Turn your reading time into learning time with fellow tech enthusiasts.', 'alex-block-theme' ),
		'sanitize_callback' => 'sanitize_text_field',
	) );

	// Add control for hero subtitle.
	$wp_customize->add_control( 'hero_subtitle', array(
		'label'   => __( 'Hero Subtitle', 'alex-block-theme' ),
		'section' => 'alex_block_theme_options',
		'type'    => 'text',
	) );

	// Add setting for CTA text.
	$wp_customize->add_setting( 'cta_text', array(
		'default'           => __( 'Ready to debug your reading list?', 'alex-block-theme' ),
		'sanitize_callback' => 'sanitize_text_field',
	) );

	// Add control for CTA text.
	$wp_customize->add_control( 'cta_text', array(
		'label'   => __( 'CTA Text', 'alex-block-theme' ),
		'section' => 'alex_block_theme_options',
		'type'    => 'text',
	) );
}
add_action( 'customize_register', 'alex_block_theme_customize_register' );

/**
 * Add theme support for Gutenberg editor.
 *
 * @since 1.0.0
 */
function alex_block_theme_gutenberg_support() {
	// Add support for wide and full alignments.
	add_theme_support( 'align-wide' );

	// Add support for custom font sizes.
	add_theme_support( 'custom-font-sizes' );

	// Add support for custom line height.
	add_theme_support( 'custom-line-height' );

	// Add support for custom spacing.
	add_theme_support( 'custom-spacing' );

	// Add support for custom units.
	add_theme_support( 'custom-units' );
}
add_action( 'after_setup_theme', 'alex_block_theme_gutenberg_support' );

/**
 * Add customizer preview script.
 *
 * @since 1.0.0
 */
function alex_block_theme_customize_preview_js() {
	wp_enqueue_script( 'alex-block-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'customize_preview_init', 'alex_block_theme_customize_preview_js' );

/**
 * Add theme support for responsive embeds.
 *
 * @since 1.0.0
 */
function alex_block_theme_responsive_embeds() {
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'alex_block_theme_responsive_embeds' );

/**
 * Add theme support for post formats.
 *
 * @since 1.0.0
 */
function alex_block_theme_post_formats() {
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
}
add_action( 'after_setup_theme', 'alex_block_theme_post_formats' );

/**
 * Add theme support for custom background.
 *
 * @since 1.0.0
 */
function alex_block_theme_custom_background() {
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) );
}
add_action( 'after_setup_theme', 'alex_block_theme_custom_background' );

/**
 * Add theme support for custom header.
 *
 * @since 1.0.0
 */
function alex_block_theme_custom_header() {
	add_theme_support( 'custom-header', array(
		'default-image'      => '',
		'default-text-color' => '2c3e50',
		'width'              => 1200,
		'height'             => 400,
		'flex-height'        => true,
		'flex-width'         => true,
	) );
}
add_action( 'after_setup_theme', 'alex_block_theme_custom_header' );

/**
 * Add theme support for HTML5 markup.
 *
 * @since 1.0.0
 */
function alex_block_theme_html5_support() {
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
}
add_action( 'after_setup_theme', 'alex_block_theme_html5_support' );

/**
 * Add theme support for automatic feed links.
 *
 * @since 1.0.0
 */
function alex_block_theme_feed_links() {
	add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'alex_block_theme_feed_links' );

/**
 * Add theme support for title tag.
 *
 * @since 1.0.0
 */
function alex_block_theme_title_tag() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'alex_block_theme_title_tag' );

/**
 * Add theme support for post thumbnails.
 *
 * @since 1.0.0
 */
function alex_block_theme_post_thumbnails() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'alex_block_theme_post_thumbnails' );

/**
 * Add theme support for editor styles.
 *
 * @since 1.0.0
 */
function alex_block_theme_editor_styles() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'alex_block_theme_editor_styles' );

/**
 * Add theme support for wp block styles.
 *
 * @since 1.0.0
 */
function alex_block_theme_wp_block_styles() {
	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'alex_block_theme_wp_block_styles' );

/**
 * Add theme support for experimental link color.
 *
 * @since 1.0.0
 */
function alex_block_theme_experimental_link_color() {
	add_theme_support( 'experimental-link-color' );
}
add_action( 'after_setup_theme', 'alex_block_theme_experimental_link_color' );

/**
 * Add theme support for custom units.
 *
 * @since 1.0.0
 */
function alex_block_theme_custom_units() {
	add_theme_support( 'custom-units', 'rem', 'em' );
}
add_action( 'after_setup_theme', 'alex_block_theme_custom_units' );

/**
 * Add theme support for custom line height.
 *
 * @since 1.0.0
 */
function alex_block_theme_custom_line_height() {
	add_theme_support( 'custom-line-height' );
}
add_action( 'after_setup_theme', 'alex_block_theme_custom_line_height' );

/**
 * Add theme support for custom spacing.
 *
 * @since 1.0.0
 */
function alex_block_theme_custom_spacing() {
	add_theme_support( 'custom-spacing' );
}
add_action( 'after_setup_theme', 'alex_block_theme_custom_spacing' );

/**
 * Add theme support for custom font sizes.
 *
 * @since 1.0.0
 */
function alex_block_theme_custom_font_sizes() {
	add_theme_support( 'custom-font-sizes' );
}
add_action( 'after_setup_theme', 'alex_block_theme_custom_font_sizes' );

/**
 * Add theme support for align wide.
 *
 * @since 1.0.0
 */
function alex_block_theme_align_wide() {
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'alex_block_theme_align_wide' ); 