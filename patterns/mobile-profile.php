<?php

/**
 * Title: Mobile Profile section
 * Slug: mobiki/mobile-profile
 * Categories: mobiki-sections
 * Description: Mobile Profile Card section for Mobiki Theme
 */

?>
<!-- wp:group {"className":"mobile-profile-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group mobile-profile-card" aria-label="<?php esc_attr_e('Mobile Profile Card', 'mobiki'); ?>">
    <!-- wp:paragraph {"className":"profile-avatar"} -->
    <p class="profile-avatar">👨‍💻</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"className":"profile-intro"} -->
    <p class="profile-intro">
        <?php esc_html_e('Web Designer & Developer', 'mobiki'); ?><br>
        <?php esc_html_e('With creative design and development skills,', 'mobiki'); ?><br>
        <?php esc_html_e('I aim to provide the best user experience.', 'mobiki'); ?>
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"className":"profile-status"} -->
    <p class="profile-status"><?php esc_html_e('Available for work', 'mobiki'); ?></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->