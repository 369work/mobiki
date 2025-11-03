<?php
/**
 * Title: Footer Content
 * Slug: mobiki/footer-content
 * Categories: mobiki-sections
 * Description: Footer Content for Mobiki Theme
 */
?>
<!-- wp:group {"className":"footer-content","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group footer-content">
    <!-- wp:paragraph {"className":"footer-logo"} -->
    <p class="footer-logo"><?php bloginfo('name'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"className":"footer-text"} -->
    <p class="footer-text">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><?php esc_html_e(' All Rights Reserved.', 'mobiki'); ?></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->