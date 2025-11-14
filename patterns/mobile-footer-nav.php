<?php

/**
 * Title: Mobile Footer Navigation
 * Slug: mobiki/mobile-footer-nav
 * Categories: mobiki-sections
 * Description: Mobile Footer Navigation Pattern for Mobiki Theme
 */
?>
<!-- wp:group {"className":"mobile-footer-nav","layout":{"type":"constrained"}} -->
<nav class="wp-block-group mobile-footer-nav" aria-label="<?php esc_attr_e('Mobile Footer Navigation', 'mobiki'); ?>">
    <!-- wp:html -->
    <div>
        <a href="<?php echo esc_url(home_url('/')); ?>#about">
            <span class="nav-icon" role="img" aria-label="<?php esc_attr_e('ABOUT', 'mobiki'); ?>">👤</span>
            <span><?php esc_html_e('ABOUT', 'mobiki'); ?></span>
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>#work">
            <span class="nav-icon" role="img" aria-label="<?php esc_attr_e('WORK', 'mobiki'); ?>">💼</span>
            <span><?php esc_html_e('WORK', 'mobiki'); ?></span>
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>#contact">
            <span class="nav-icon contact-icon-special" role="img" aria-label="<?php esc_attr_e('CONTACT', 'mobiki'); ?>">✉️</span>
            <span><?php esc_html_e('CONTACT', 'mobiki'); ?></span>
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>#blog">
            <span class="nav-icon" role="img" aria-label="<?php esc_attr_e('BLOG', 'mobiki'); ?>">📝</span>
            <span><?php esc_html_e('BLOG', 'mobiki'); ?></span>
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>#service">
            <span class="nav-icon" role="img" aria-label="<?php esc_attr_e('SERVICE', 'mobiki'); ?>">⚙️</span>
            <span><?php esc_html_e('SERVICE', 'mobiki'); ?></span>
        </a>
    </div>
    <!-- /wp:html -->
</nav>
<!-- /wp:group -->