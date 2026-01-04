<?php
/**
 * Block styles for VASUKI AGRO CHEMICALS LLP theme
 *
 * @package VAC_Block_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register custom block styles
 */
function vac_block_theme_register_block_styles() {
    // Custom button styles
    register_block_style(
        'core/button',
        array(
            'name'         => 'button-grow',
            'label'        => __( 'Grow on Hover', 'vac-block-theme' ),
            'inline_style' => '
                .is-style-button-grow {
                    transition: all 0.3s ease !important;
                }
                .is-style-button-grow:hover {
                    transform: scale(1.05) !important;
                }
            ',
        )
    );
    
    // Custom group styles with borders
    register_block_style(
        'core/group',
        array(
            'name'         => 'leaf-border',
            'label'        => __( 'Leaf Border', 'vac-block-theme' ),
            'inline_style' => '
                .is-style-leaf-border {
                    border: 2px solid var(--wp--preset--color--light-green) !important;
                    border-radius: 8px !important;
                    position: relative !important;
                    padding: 2rem !important;
                }
                .is-style-leaf-border:before {
                    content: "" !important;
                    position: absolute !important;
                    top: -15px !important;
                    left: 20px !important;
                    width: 30px !important;
                    height: 30px !important;
                    background-image: url(\'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="%238BC34A" viewBox="0 0 24 24"%3E%3Cpath d="M17.66 8L12 2.35 6.34 8C4.78 9.56 4 11.64 4 13.64s.78 4.11 2.34 5.67 3.61 2.35 5.66 2.35 4.1-.79 5.66-2.35S20 15.64 20 13.64 19.22 9.56 17.66 8zM6 14c.01-2 .62-3.27 1.76-4.4L12 5.27l4.24 4.38C17.38 10.77 17.99 12 18 14H6z"%3E%3C/path%3E%3C/svg%3E\') !important;
                    background-repeat: no-repeat !important;
                }
            ',
        )
    );
    
    // Custom image styles
    register_block_style(
        'core/image',
        array(
            'name'         => 'leaf-frame',
            'label'        => __( 'Leaf Frame', 'vac-block-theme' ),
            'inline_style' => '
                .is-style-leaf-frame {
                    border: 3px solid var(--wp--preset--color--light-green) !important;
                    border-radius: 8px !important;
                    position: relative !important;
                    padding: 5px !important;
                }
                .is-style-leaf-frame:after {
                    content: "" !important;
                    position: absolute !important;
                    bottom: -10px !important;
                    right: -10px !important;
                    width: 30px !important;
                    height: 30px !important;
                    background-image: url(\'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="%232E7D32" viewBox="0 0 24 24"%3E%3Cpath d="M12 22c4.97 0 9-4.03 9-9-4.97 0-9 4.03-9 9zm0-18c-4.97 0-9 4.03-9 9 4.97 0 9-4.03 9-9zm0 0c0 4.97 4.03 9 9 9-4.97 0-9-4.03-9-9zm0 0c0-4.97-4.03-9-9-9 4.97 0 9 4.03 9 9z"%3E%3C/path%3E%3C/svg%3E\') !important;
                    background-repeat: no-repeat !important;
                }
            ',
        )
    );
    
    // Custom paragraph styles
    register_block_style(
        'core/paragraph',
        array(
            'name'         => 'highlighted-text',
            'label'        => __( 'Highlighted Text', 'vac-block-theme' ),
            'inline_style' => '
                .is-style-highlighted-text {
                    background-color: rgba(139, 195, 74, 0.2) !important;
                    padding: 0.2em 0.4em !important;
                    border-radius: 3px !important;
                    font-weight: 500 !important;
                }
            ',
        )
    );
    
    // Custom list styles
    register_block_style(
        'core/list',
        array(
            'name'         => 'checklist-green',
            'label'        => __( 'Green Checklist', 'vac-block-theme' ),
            'inline_style' => '
                .is-style-checklist-green {
                    list-style: none !important;
                    padding-left: 1.5em !important;
                }
                .is-style-checklist-green li {
                    position: relative !important;
                    margin-bottom: 0.5em !important;
                }
                .is-style-checklist-green li:before {
                    content: "✓" !important;
                    position: absolute !important;
                    left: -1.5em !important;
                    color: var(--wp--preset--color--primary-green) !important;
                    font-weight: bold !important;
                }
            ',
        )
    );
}
add_action( 'init', 'vac_block_theme_register_block_styles' );
