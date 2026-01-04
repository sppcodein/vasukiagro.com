<?php
/**
 * Block patterns for VASUKI AGRO CHEMICALS LLP theme
 *
 * @package VAC_Block_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register block patterns
 */
function vac_block_theme_register_block_patterns() {
    // Product Features Block Pattern
    register_block_pattern(
        'vac-block-theme/product-features',
        array(
            'title'       => __( 'Product Features Grid', 'vac-block-theme' ),
            'description' => __( 'A grid layout showcasing product features with icons', 'vac-block-theme' ),
            'categories'  => array( 'vac-blocks' ),
            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"soft-sand","className":"product-features-section animate-on-scroll fade-in","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-features-section animate-on-scroll fade-in has-soft-sand-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
    <!-- wp:heading {"textAlign":"center","textColor":"primary-green"} -->
    <h2 class="wp-block-heading has-text-align-center has-primary-green-color has-text-color">Why Choose Our Products?</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Our natural bio-products offer numerous benefits for your crops</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--40)">
        <!-- wp:column {"className":"animate-on-scroll fade-in-left"} -->
        <div class="wp-block-column animate-on-scroll fade-in-left">
            <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"white","className":"feature-card"} -->
            <div class="wp-block-group feature-card has-white-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":64,"height":64,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'64\' height=\'64\' fill=\'%232E7D32\' viewBox=\'0 0 24 24\'%3E%3Cpath d=\'M12 22c4.97 0 9-4.03 9-9-4.97 0-9 4.03-9 9zm0-18c-4.97 0-9 4.03-9 9 4.97 0 9-4.03 9-9zm0 0c0 4.97 4.03 9 9 9-4.97 0-9-4.03-9-9zm0 0c0-4.97-4.03-9-9-9 4.97 0 9 4.03 9 9z\'/%3E%3C/svg%3E" alt="100% Natural" width="64" height="64"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"textColor":"primary-green"} -->
                <h3 class="wp-block-heading has-text-align-center has-primary-green-color has-text-color">100% Natural</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Made from completely natural bio-materials, our products are safe for plants, soil, and the environment.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"animate-on-scroll fade-in"} -->
        <div class="wp-block-column animate-on-scroll fade-in">
            <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"white","className":"feature-card"} -->
            <div class="wp-block-group feature-card has-white-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":64,"height":64,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'64\' height=\'64\' fill=\'%232E7D32\' viewBox=\'0 0 24 24\'%3E%3Cpath d=\'M15.5 4.5c0 2-2.5 3.5-2.5 5h-2c0-1.5-2.5-3-2.5-5 0-2.5 2.5-2.5 3.5-1.5 1-1 3.5-1 3.5 1.5zm-7.21 9.35l-2.12-2.12c-.2-.2-.2-.51 0-.71.2-.2.51-.2.71 0l1.41 1.41 3.54-3.54c.2-.2.51-.2.71 0 .2.2.2.51 0 .71l-4.24 4.24zM10 10c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1zm2 0c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1zm2 0c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1z\'/%3E%3C/svg%3E" alt="Better Yields" width="64" height="64"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"textColor":"primary-green"} -->
                <h3 class="wp-block-heading has-text-align-center has-primary-green-color has-text-color">Better Yields</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Proven to increase crop yields by enhancing nutrient uptake and strengthening plant root systems.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"animate-on-scroll fade-in-right"} -->
        <div class="wp-block-column animate-on-scroll fade-in-right">
            <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"white","className":"feature-card"} -->
            <div class="wp-block-group feature-card has-white-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":64,"height":64,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'64\' height=\'64\' fill=\'%232E7D32\' viewBox=\'0 0 24 24\'%3E%3Cpath d=\'M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m0 16H5V5h14zm-4-4h2v-4h-2v4M6 17h2V7H6zM10 17h2v-7h-2z\'/%3E%3C/svg%3E" alt="Cost Effective" width="64" height="64"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"textColor":"primary-green"} -->
                <h3 class="wp-block-heading has-text-align-center has-primary-green-color has-text-color">Cost Effective</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Our products provide exceptional value, reducing the need for expensive synthetic fertilizers and pesticides.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--30)">
        <!-- wp:column {"className":"animate-on-scroll fade-in-left"} -->
        <div class="wp-block-column animate-on-scroll fade-in-left">
            <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"white","className":"feature-card"} -->
            <div class="wp-block-group feature-card has-white-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":64,"height":64,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'64\' height=\'64\' fill=\'%232E7D32\' viewBox=\'0 0 24 24\'%3E%3Cpath d=\'M23 18h-3v-1.5c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v1.5h-3c-.55 0-1 .45-1 1s.45 1 1 1h3v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-1.5h3c.55 0 1-.45 1-1s-.45-1-1-1zm-10 2H6.5c-.66 0-1.21-.42-1.42-1.01l-1.97-5.67c-.07-.21-.11-.43-.11-.66v-.16l-1.07-1.07c-.31-.31-.38-.78-.17-1.16.21-.38.63-.62 1.07-.62h6.53L6.09 7.33c-.38-.38-.38-1.01 0-1.39s1.01-.38 1.39 0l4.14 4.14c.38.38.38 1.01 0 1.39L7.48 15.61h4.52c.55 0 1 .45 1 1s-.45 1-1 1z\'/%3E%3C/svg%3E" alt="Soil Health" width="64" height="64"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"textColor":"primary-green"} -->
                <h3 class="wp-block-heading has-text-align-center has-primary-green-color has-text-color">Soil Health</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Our products improve soil structure, increase beneficial microbial activity, and enhance long-term soil fertility.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"animate-on-scroll fade-in"} -->
        <div class="wp-block-column animate-on-scroll fade-in">
            <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"white","className":"feature-card"} -->
            <div class="wp-block-group feature-card has-white-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":64,"height":64,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'64\' height=\'64\' fill=\'%232E7D32\' viewBox=\'0 0 24 24\'%3E%3Cpath d=\'M7 20c0 .55-.45 1-1 1s-1-.45-1-1v-3c-.73-2.58-3.07-3.47-3.07-5.5 0-1.5 1.23-2.5 2.47-3-.35-1.75.31-2.95 1.28-3.8.76-.67 1.82-1.2 2.72-1.2s1.98.52 2.72 1.2c.97.85 1.61 2.05 1.28 3.8 1.24.5 2.47 1.5 2.47 3 0 2.03-2.34 2.92-3.07 5.5v3c0 .55-.45 1-1 1s-1-.45-1-1v-1H7zm5-10.5c0-.83-.67-1.5-1.5-1.5h-2c-.83 0-1.5.67-1.5 1.5 0 .83.67 1.5 1.5 1.5h2c.83 0 1.5-.67 1.5-1.5M13 18c0 .55.45 1 1 1h.5c.28 0 .5.22.5.5v.5c0 .55.45 1 1 1s1-.45 1-1v-.5c0-.28.22-.5.5-.5s.5.22.5.5v.5c0 .55.45 1 1 1s1-.45 1-1v-.5c0-.28.22-.5.5-.5h.5c.55 0 1-.45 1-1s-.45-1-1-1h-7c-.55 0-1 .45-1 1m-.79-13.09l.29-.3a1 1 0 0 0 0-1.41l-1.5-1.5c-.39-.39-1.02-.39-1.41 0s-.39 1.02 0 1.41l1.5 1.5c.39.39 1.02.39 1.41 0l-.29.3\'/%3E%3C/svg%3E" alt="Eco-Friendly" width="64" height="64"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"textColor":"primary-green"} -->
                <h3 class="wp-block-heading has-text-align-center has-primary-green-color has-text-color">Eco-Friendly</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Our sustainable products reduce environmental impact by eliminating harmful chemicals from your agricultural practices.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"animate-on-scroll fade-in-right"} -->
        <div class="wp-block-column animate-on-scroll fade-in-right">
            <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"white","className":"feature-card"} -->
            <div class="wp-block-group feature-card has-white-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":64,"height":64,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'64\' height=\'64\' fill=\'%232E7D32\' viewBox=\'0 0 24 24\'%3E%3Cpath d=\'M20 2H4c-1 0-2 1-2 2v16c0 1 1 2 2 2h16c1 0 2-1 2-2V4c0-1-1-2-2-2m-.6 18H4.6c-.3 0-.6-.3-.6-.6V4.6c0-.3.3-.6.6-.6h14.8c.3 0 .6.3.6.6v14.8c0 .3-.3.6-.6.6M8 11h3v2H8v3H6v-3H3v-2h3V8h2v3m10 4h-4v-2h4v2m0-4h-4V9h4v2z\'/%3E%3C/svg%3E" alt="Versatile" width="64" height="64"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"textColor":"primary-green"} -->
                <h3 class="wp-block-heading has-text-align-center has-primary-green-color has-text-color">Versatile Use</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Suitable for various crops and growing conditions, from small farms to large agricultural operations.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->',
        )
    );
    
    // Testimonials Block Pattern
    register_block_pattern(
        'vac-block-theme/testimonials',
        array(
            'title'       => __( 'Farmer Testimonials', 'vac-block-theme' ),
            'description' => __( 'A testimonial slider showcasing farmer feedback', 'vac-block-theme' ),
            'categories'  => array( 'vac-blocks' ),
            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"primary-green","textColor":"white","className":"testimonials-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonials-section has-white-color has-primary-green-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
    <!-- wp:heading {"textAlign":"center","textColor":"white"} -->
    <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color">What Farmers Are Saying</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","textColor":"white"} -->
    <p class="has-text-align-center has-white-color has-text-color">Hear from farmers who have experienced the benefits of our products</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--40)">
        <!-- wp:column {"className":"animate-on-scroll fade-in-left"} -->
        <div class="wp-block-column animate-on-scroll fade-in-left">
            <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"white","textColor":"dark-gray","className":"testimonial-card"} -->
            <div class="wp-block-group testimonial-card has-dark-gray-color has-white-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2rem"}}} -->
                <p class="has-text-align-center" style="font-size:2rem">★★★★★</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-text-align-center" style="font-style:italic">"Since using Vasuki\'s bio-fertilizers, my cotton yield has increased by 30%. The soil quality has visibly improved, and I\'ve been able to reduce my reliance on chemical fertilizers."</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":60,"height":60,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="https://placehold.co/120x120/795548/FFFFFF?text=R" alt="Farmer" style="border-radius:50%;object-fit:cover;width:60px;height:60px"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"level":4,"textColor":"primary-green"} -->
                        <h4 class="wp-block-heading has-primary-green-color has-text-color">Rajesh Patel</h4>
                        <!-- /wp:heading -->
                        
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
                        <p style="font-size:0.9rem">Cotton Farmer, Gujarat</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column {"className":"animate-on-scroll fade-in"} -->
        <div class="wp-block-column animate-on-scroll fade-in">
            <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"white","textColor":"dark-gray","className":"testimonial-card"} -->
            <div class="wp-block-group testimonial-card has-dark-gray-color has-white-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2rem"}}} -->
                <p class="has-text-align-center" style="font-size:2rem">★★★★★</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-text-align-center" style="font-style:italic">"I was skeptical at first, but after one growing season with Vasuki\'s growth promoters, my vegetables are healthier with better color and taste. My customers at the market have definitely noticed the difference!"</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":60,"height":60,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="https://placehold.co/120x120/795548/FFFFFF?text=L" alt="Farmer" style="border-radius:50%;object-fit:cover;width:60px;height:60px"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"level":4,"textColor":"primary-green"} -->
                        <h4 class="wp-block-heading has-primary-green-color has-text-color">Lakshmi Devi</h4>
                        <!-- /wp:heading -->
                        
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
                        <p style="font-size:0.9rem">Vegetable Farmer, Karnataka</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column {"className":"animate-on-scroll fade-in-right"} -->
        <div class="wp-block-column animate-on-scroll fade-in-right">
            <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"white","textColor":"dark-gray","className":"testimonial-card"} -->
            <div class="wp-block-group testimonial-card has-dark-gray-color has-white-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2rem"}}} -->
                <p class="has-text-align-center" style="font-size:2rem">★★★★★</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-text-align-center" style="font-style:italic">"My rice crops were struggling with poor soil conditions until I discovered Vasuki\'s soil enhancers. Now my fields are thriving, and I\'ve seen a significant reduction in plant diseases."</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":60,"height":60,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="https://placehold.co/120x120/795548/FFFFFF?text=S" alt="Farmer" style="border-radius:50%;object-fit:cover;width:60px;height:60px"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"level":4,"textColor":"primary-green"} -->
                        <h4 class="wp-block-heading has-primary-green-color has-text-color">Sunil Kumar</h4>
                        <!-- /wp:heading -->
                        
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
                        <p style="font-size:0.9rem">Rice Farmer, Tamil Nadu</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
        <!-- wp:button {"backgroundColor":"white","textColor":"primary-green","className":"is-style-fill"} -->
        <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-green-color has-white-background-color has-text-color has-background wp-element-button">Read More Success Stories</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
        )
    );
    
    // Call to Action Block Pattern
    register_block_pattern(
        'vac-block-theme/cta-banner',
        array(
            'title'       => __( 'Call to Action Banner', 'vac-block-theme' ),
            'description' => __( 'A banner with call to action button', 'vac-block-theme' ),
            'categories'  => array( 'vac-blocks' ),
            'content'     => '<!-- wp:cover {"url":"https://example.com/wp-content/uploads/2024/05/agriculture-field.jpg","id":156,"dimRatio":80,"overlayColor":"primary-green","align":"full","className":"cta-banner animate-on-scroll fade-in"} -->
<div class="wp-block-cover alignfull cta-banner animate-on-scroll fade-in"><span aria-hidden="true" class="wp-block-cover__background has-primary-green-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-156" alt="" src="https://example.com/wp-content/uploads/2024/05/agriculture-field.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center","textColor":"white","fontSize":"x-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-x-large-font-size">Ready to Transform Your Farming Practices?</h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","textColor":"white"} -->
        <p class="has-text-align-center has-white-color has-text-color">Discover how our natural bio-products can improve your crop yield and soil health</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"backgroundColor":"white","textColor":"primary-green","className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-green-color has-white-background-color has-text-color has-background wp-element-button">Contact Us Today</a></div>
            <!-- /wp:button -->
            
            <!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button">Browse Products</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div></div>
<!-- /wp:cover -->',
        )
    );
}
add_action( 'init', 'vac_block_theme_register_block_patterns' );
