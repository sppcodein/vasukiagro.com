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

/**
 * Get featured blog posts
 *
 * @param int $count Number of posts to retrieve.
 * @return array Array of featured post objects.
 */
function vac_get_featured_news_posts( int $count = 3 ): array {
    $cache_key = 'vac_featured_news_' . $count;
    $posts     = get_transient( $cache_key );

    if ( false === $posts ) {
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => $count,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
            'meta_query'     => array(
                array(
                    'key'     => 'vac_featured_news',
                    'value'   => '1',
                    'compare' => '=',
                ),
            ),
        );

        $query = new WP_Query( $args );
        $posts = $query->posts;

        // If no featured posts found, get latest posts
        if ( empty( $posts ) ) {
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => $count,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $query = new WP_Query( $args );
            $posts = $query->posts;
        }

        wp_reset_postdata();

        // Cache for 1 hour
        set_transient( $cache_key, $posts, HOUR_IN_SECONDS );
    }

    return $posts;
}

/**
 * Get featured image URL for a post
 *
 * @param int $post_id Post ID.
 * @return string Featured image URL or placeholder.
 */
function vac_get_post_thumbnail_url( int $post_id ): string {
    $thumbnail_id = get_post_thumbnail_id( $post_id );
    
    if ( $thumbnail_id ) {
        $thumbnail_url = wp_get_attachment_image_url( $thumbnail_id, 'large' );
        if ( $thumbnail_url ) {
            return $thumbnail_url;
        }
    }
    
    // Fallback image if no featured image
    return get_template_directory_uri() . '/assets/img/placeholder-news.svg';
}

/**
 * Render featured news cards
 *
 * @param array $atts Shortcode attributes.
 * @return string HTML output of featured news cards.
 */
function vac_render_featured_news_cards( array $atts = array() ): string {
    $atts = shortcode_atts(
        array(
            'count' => 3,
        ),
        $atts,
        'vac_featured_news_cards'
    );

    $posts = vac_get_featured_news_posts( (int) $atts['count'] );

    if ( empty( $posts ) ) {
        return '';
    }

    ob_start();
    ?>
    <div class="vac-featured-news-grid">
        <?php
        $delay = 0;
        foreach ( $posts as $post ) :
            setup_postdata( $post );
            
            $post_id        = $post->ID;
            $permalink      = get_permalink( $post_id );
            $title          = get_the_title( $post_id );
            $content        = get_the_content( $post_id );
            $date           = get_the_date( 'F j, Y', $post_id );
            
            // Get thumbnail URL
            $thumbnail_url = '';
            if ( has_post_thumbnail( $post_id ) ) {
                $thumbnail_url = get_the_post_thumbnail_url( $post_id, 'large' );
            }
            if ( ! $thumbnail_url ) {
                $thumbnail_url = get_template_directory_uri() . '/assets/img/placeholder-news.svg';
            }
            
            $categories     = get_the_category( $post_id );
            $category_name  = ! empty( $categories ) ? esc_html( $categories[0]->name ) : '';

            $animation_class = 'animate-on-scroll fade-in';
            if ( $delay > 0 ) {
                $animation_class .= ' animate-delay-' . $delay;
            }
            ?>
            <article class="vac-news-card <?php echo esc_attr( $animation_class ); ?>" itemscope itemtype="https://schema.org/NewsArticle">
                <a href="<?php echo esc_url( $permalink ); ?>" class="vac-news-card__link">
                    <div class="vac-news-card__image-wrapper">
                        <?php if ( $category_name ) : ?>
                            <span class="vac-news-card__category" itemprop="articleSection"><?php echo esc_html( $category_name ); ?></span>
                        <?php endif; ?>
                        <img src="<?php echo esc_url( $thumbnail_url ); ?>" 
                             alt="<?php echo esc_attr( $title ); ?>"
                             class="vac-news-card__image"
                             itemprop="image" 
                             loading="lazy" />
                        <div class="vac-news-card__overlay"></div>
                    </div>
                    <div class="vac-news-card__content">
                        <h3 class="vac-news-card__title" itemprop="headline">
                            <?php echo esc_html( $title ); ?>
                        </h3>
                        <p class="vac-news-card__excerpt" itemprop="description">
                            <?php echo esc_html( wp_trim_words( $content, 100 ) ); ?>
                        </p>
                        <div class="vac-news-card__meta">
                            <time datetime="<?php echo esc_attr( get_the_date( 'c', $post_id ) ); ?>" 
                                  itemprop="datePublished">
                                <?php echo esc_html( $date ); ?>
                            </time>
                            <span class="vac-news-card__read-more">
                                <?php esc_html_e( 'Read More', 'vac-block-theme' ); ?> →
                            </span>
                        </div>
                    </div>
                </a>
                
                <!-- Schema.org structured data -->
                <meta itemprop="author" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
                <meta itemprop="publisher" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
                <link itemprop="url" href="<?php echo esc_url( $permalink ); ?>" />
            </article>
            <?php
            $delay++;
        endforeach;
        wp_reset_postdata();
        ?>
    </div>
    <?php

    return ob_get_clean();
}
add_shortcode( 'vac_featured_news_cards', 'vac_render_featured_news_cards' );

/**
 * Clear featured news cache when posts are updated
 *
 * @param int $post_id Post ID.
 * @return void
 */
function vac_clear_featured_news_cache( int $post_id ): void {
    if ( 'post' === get_post_type( $post_id ) ) {
        // Clear all featured news caches for all counts
        for ( $i = 1; $i <= 10; $i++ ) {
            delete_transient( 'vac_featured_news_' . $i );
        }
    }
}
add_action( 'save_post', 'vac_clear_featured_news_cache' );
add_action( 'delete_post', 'vac_clear_featured_news_cache' );

/**
 * Add meta box for featured news toggle
 *
 * @return void
 */
function vac_add_featured_news_meta_box(): void {
    add_meta_box(
        'vac_featured_news',
        __( 'Featured News', 'vac-block-theme' ),
        'vac_featured_news_meta_box_callback',
        'post',
        'side',
        'high'
    );
}
add_action( 'add_meta_boxes', 'vac_add_featured_news_meta_box' );

/**
 * Meta box callback for featured news
 *
 * @param WP_Post $post Current post object.
 * @return void
 */
function vac_featured_news_meta_box_callback( WP_Post $post ): void {
    wp_nonce_field( 'vac_featured_news_nonce_action', 'vac_featured_news_nonce' );
    
    $is_featured = get_post_meta( $post->ID, 'vac_featured_news', true );
    ?>
    <label>
        <input type="checkbox" 
               name="vac_featured_news" 
               value="1" 
               <?php checked( $is_featured, '1' ); ?> />
        <?php esc_html_e( 'Display this post in Featured News section', 'vac-block-theme' ); ?>
    </label>
    <?php
}

/**
 * Save featured news meta data
 *
 * @param int $post_id Post ID.
 * @return void
 */
function vac_save_featured_news_meta( int $post_id ): void {
    // Verify nonce
    if ( ! isset( $_POST['vac_featured_news_nonce'] ) ||
         ! wp_verify_nonce( $_POST['vac_featured_news_nonce'], 'vac_featured_news_nonce_action' ) ) {
        return;
    }

    // Check autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check permissions
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Save or delete meta
    if ( isset( $_POST['vac_featured_news'] ) && '1' === $_POST['vac_featured_news'] ) {
        update_post_meta( $post_id, 'vac_featured_news', '1' );
    } else {
        delete_post_meta( $post_id, 'vac_featured_news' );
    }
}
add_action( 'save_post', 'vac_save_featured_news_meta' );

/**
 * Add JSON-LD structured data for news articles
 *
 * @return void
 */
function vac_add_news_structured_data(): void {
    if ( ! is_singular( 'post' ) ) {
        return;
    }

    global $post;

    $schema = array(
        '@context'      => 'https://schema.org',
        '@type'         => 'NewsArticle',
        'headline'      => get_the_title(),
        'datePublished' => get_the_date( 'c' ),
        'dateModified'  => get_the_modified_date( 'c' ),
        'author'        => array(
            '@type' => 'Organization',
            'name'  => get_bloginfo( 'name' ),
        ),
        'publisher'     => array(
            '@type' => 'Organization',
            'name'  => get_bloginfo( 'name' ),
            'logo'  => array(
                '@type' => 'ImageObject',
                'url'   => get_site_icon_url(),
            ),
        ),
        'description'   => get_the_excerpt(),
        'mainEntityOfPage' => array(
            '@type' => 'WebPage',
            '@id'   => get_permalink(),
        ),
    );

    // Add featured image if available
    if ( has_post_thumbnail() ) {
        $schema['image'] = array(
            '@type' => 'ImageObject',
            'url'   => get_the_post_thumbnail_url( $post->ID, 'full' ),
        );
    }

    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}
add_action( 'wp_head', 'vac_add_news_structured_data' );
