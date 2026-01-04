<?php
/**
 * VAC Block Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package VAC_Block_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define theme version
define( 'VAC_BLOCK_THEME_VERSION', '1.0.0' );

// Include block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Include block styles
require get_template_directory() . '/inc/block-styles.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function vac_block_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Enable support for responsive embeds.
    add_theme_support( 'responsive-embeds' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Add support for editor styles.
    add_theme_support( 'editor-styles' );

    // Add support for core block visual styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for custom logo.
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 120,
            'width'       => 350,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    // Register nav menus.
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary Menu', 'vac-block-theme' ),
            'footer'  => esc_html__( 'Footer Menu', 'vac-block-theme' ),
        )
    );
}
add_action( 'after_setup_theme', 'vac_block_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function vac_block_theme_scripts() {
    // Enqueue main stylesheet.
    wp_enqueue_style( 
        'vac-block-theme-style', 
        get_stylesheet_uri(), 
        array(), 
        VAC_BLOCK_THEME_VERSION 
    );
    
    // Enqueue custom CSS
    wp_enqueue_style(
        'vac-custom-css',
        get_template_directory_uri() . '/assets/css/custom.css',
        array(),
        VAC_BLOCK_THEME_VERSION
    );

    // Enqueue animations JS
    wp_enqueue_script(
        'vac-animations-js',
        get_template_directory_uri() . '/assets/js/animations.js',
        array('jquery'),
        VAC_BLOCK_THEME_VERSION,
        true
    );
    
    // Add animations library
    wp_enqueue_style(
        'animate-css',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
        array(),
        '4.1.1'
    );
    
    // Load web fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600&display=swap',
        array(),
        null
    );
}
add_action( 'wp_enqueue_scripts', 'vac_block_theme_scripts' );

/**
 * Add preconnect for Google Fonts.
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function vac_block_theme_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'vac_block_theme_resource_hints', 10, 2 );

/**
 * Block pattern category registration.
 */
function vac_block_register_pattern_categories() {
    register_block_pattern_category(
        'vac-blocks',
        array( 'label' => esc_html__( 'Vasuki Agro', 'vac-block-theme' ) )
    );
}
add_action( 'init', 'vac_block_register_pattern_categories' );
