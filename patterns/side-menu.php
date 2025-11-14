<?php

/**
 * Title: Side Menu
 * Slug: mobiki/side-menu
 * Categories: mobiki-sections
 * Description: Side Menu Pattern for Mobiki Theme
 */
?>
<!-- wp:group {"className":"side-menu","layout":{"type":"constrained"}} -->
<div aria-label="<?php esc_attr_e('main navigation', 'mobiki'); ?>" class="wp-block-group side-menu">
    <!-- wp:navigation {"className":"wp-block-navigation side-menu-nav","layout":{"type":"flex","orientation":"vertical"}} -->
    <!-- wp:navigation-link {"label":"ABOUT","url":"<?php echo esc_url(home_url('/')); ?>#about"} /-->
    <!-- wp:navigation-link {"label":"WORK","url":"<?php echo esc_url(home_url('/')); ?>#work"} /-->
    <!-- wp:navigation-link {"label":"BLOG","url":"<?php echo esc_url(home_url('/')); ?>#blog"} /-->
    <!-- wp:navigation-link {"label":"SERVICE","url":"<?php echo esc_url(home_url('/')); ?>#service"} /-->
    <!-- wp:navigation-link {"label":"CONTACT","url":"<?php echo esc_url(home_url('/')); ?>#contact","className":"contact-btn"} /-->
    <!-- /wp:navigation -->

    <!-- wp:group {"className":"sns-buttons","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div aria-label="<?php esc_attr_e('SNS Link', 'mobiki'); ?>" class="wp-block-group sns-buttons">
        <!-- wp:paragraph -->
        <p><a href="https://twitter.com" class="sns-btn twitter" aria-label="<?php esc_attr_e('Twitter', 'mobiki'); ?>" target="_blank" rel="noopener noreferrer"><span role="img" aria-label="<?php esc_attr_e('Twitter', 'mobiki'); ?>">🐦</span></a></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p><a href="https://instagram.com" class="sns-btn instagram" aria-label="<?php esc_attr_e('Instagram', 'mobiki'); ?>" target="_blank" rel="noopener noreferrer"><span role="img" aria-label="<?php esc_attr_e('Instagram', 'mobiki'); ?>">📷</span></a></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p><a href="https://github.com" class="sns-btn github" aria-label="<?php esc_attr_e('GitHub', 'mobiki'); ?>" target="_blank" rel="noopener noreferrer"><span role="img" aria-label="<?php esc_attr_e('GitHub', 'mobiki'); ?>">💻</span></a></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p><a href="https://linkedin.com" class="sns-btn linkedin" aria-label="<?php esc_attr_e('LinkedIn', 'mobiki'); ?>" target="_blank" rel="noopener noreferrer"><span role="img" aria-label="<?php esc_attr_e('LinkedIn', 'mobiki'); ?>">💼</span></a></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->