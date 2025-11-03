<?php

/**
 * Title: Service Section
 * Slug: mobiki/service-section
 * Categories: mobiki-sections
 * Description: Section for providing services
 */
?>

<!-- wp:group {"tagName":"section","layout":{"type":"constrained","contentSize":"100%"}} -->
<section id="service" class="wp-block-group">
    <!-- wp:group {"className":"section-header","layout":{"type":"constrained"}} -->
    <div class="wp-block-group section-header">
        <!-- wp:group {"className":"section-label","layout":{"type":"constrained"}} -->
        <div class="wp-block-group section-label">
            <!-- wp:paragraph -->
            <p><?php esc_html_e('SERVICE', 'mobiki'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"className":"section-title","level":2} -->
        <h2 class="section-title"><?php esc_html_e('Services provided', 'mobiki'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"section-description"} -->
        <p class="section-description"><?php esc_html_e('Services offered: We provide optimal solutions tailored to our customers\' needs.', 'mobiki'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"service-list","layout":{"type":"constrained"}} -->
    <div class="wp-block-group service-list">

        <!-- wp:group {"className":"service-item","tagName":"article","layout":{"type":"constrained"}} -->
        <article class="wp-block-group service-item">
            <!-- wp:paragraph {"className":"service-icon"} -->
            <p class="service-icon" role="img" aria-label="Web Design Icon">💻</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"className":"service-name"} -->
            <h3 class="service-name"><?php esc_html_e('WEB Design', 'mobiki'); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"service-description"} -->
            <p class="service-description"><?php esc_html_e('We design beautiful and functional websites that prioritize the user experience.', 'mobiki'); ?></p>
            <!-- /wp:paragraph -->
        </article>
        <!-- /wp:group -->

        <!-- wp:group {"className":"service-item","tagName":"article","layout":{"type":"constrained"}} -->
        <article class="wp-block-group service-item">
            <!-- wp:paragraph {"className":"service-icon"} -->
            <p class="service-icon" role="img" aria-label="UI/UX Icon">📐</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"className":"service-name"} -->
            <h3 class="service-name"><?php esc_html_e('UI/UX Design', 'mobiki'); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"service-description"} -->
            <p class="service-description"><?php esc_html_e('We provide interface design that balances usability and aesthetics.', 'mobiki'); ?></p>
            <!-- /wp:paragraph -->
        </article>
        <!-- /wp:group -->

        <!-- wp:group {"className":"service-item","tagName":"article","layout":{"type":"constrained"}} -->
        <article class="wp-block-group service-item">
            <!-- wp:paragraph {"className":"service-icon"} -->
            <p class="service-icon" role="img" aria-label="Branding Icon">🎯</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"className":"service-name"} -->
            <h3 class="service-name"><?php esc_html_e('Branding', 'mobiki'); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"service-description"} -->
            <p class="service-description"><?php esc_html_e('We support branding that maximizes the value of companies and services.', 'mobiki'); ?></p>
            <!-- /wp:paragraph -->
        </article>
        <!-- /wp:group -->

        <!-- wp:group {"className":"service-item","tagName":"article","layout":{"type":"constrained"}} -->
        <article class="wp-block-group service-item">
            <!-- wp:paragraph {"className":"service-icon"} -->
            <p class="service-icon" role="img" aria-label="Front-end Development Icon">⚡</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"className":"service-name"} -->
            <h3 class="service-name"><?php esc_html_e('Front-end Development', 'mobiki'); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"service-description"} -->
            <p class="service-description"><?php esc_html_e('We provide high-quality front-end development using modern technologies.', 'mobiki'); ?></p>
            <!-- /wp:paragraph -->
        </article>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->