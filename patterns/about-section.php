<?php

/**
 * Title: About Section
 * Slug: mobiki/about-section
 * Categories: mobiki-sections
 * Description: An about me section pattern for Mobiki theme.
 */
?>

<!-- wp:group {"tagName":"section","layout":{"type":"constrained","contentSize":"100%"}} -->
<section id="about" class="wp-block-group">
    <!-- wp:group {"className":"section-header","layout":{"type":"constrained"}} -->
    <div class="wp-block-group section-header">
        <!-- wp:group {"className":"section-label","layout":{"type":"constrained"}} -->
        <div class="wp-block-group section-label">
            <!-- wp:paragraph -->
            <p><?php esc_html_e('ABOUT ME', 'mobiki'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"className":"section-title","level":2} -->
        <h2 class="section-title"><?php esc_html_e('About me', 'mobiki'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"section-description"} -->
        <p class="section-description"><?php esc_html_e('Through design, we create experiences that resonate with people\'s hearts.', 'mobiki'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"about-content","layout":{"type":"constrained"}} -->
    <div class="wp-block-group about-content">
        <!-- wp:paragraph {"className":"about-image"} -->
        <p class="about-image">
            👤
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"about-text"} -->
        <p class="about-text"><?php esc_html_e('Hello. I am a web designer based in Tokyo.', 'mobiki'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"about-text"} -->
        <p class="about-text"><?php esc_html_e('I prioritize user experience and strive for designs that balance beauty and functionality. With a mobile-first approach, I aim to deliver the best experience across all devices.', 'mobiki'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"about-text"} -->
        <p class="about-text"><?php esc_html_e('Design is not just about aesthetics; it is about enriching people\'s lives.', 'mobiki'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->