<?php

/**
 * Title: Profile section
 * Slug: mobiki/profile
 * Categories: mobiki-sections
 * Description: Profile section for Mobiki Theme
 */

$profile_description = get_theme_mod('mobiki_profile_description', '');
?>
<!-- wp:group {"className":"side-profile","layout":{"type":"constrained"}}} -->
<div class="wp-block-group side-profile" aria-label="Profile Information">
        <!-- wp:paragraph {"className":"profile-avatar"} -->
        <p class="profile-avatar">👨‍💻</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"profile-intro"} -->
        <p class="profile-intro">
                <?php if (!empty($profile_description)) : ?>
                        <?php echo esc_html($profile_description); ?>
                <?php else : ?>
                        <?php esc_html_e('Web Designer & Developer', 'mobiki'); ?><br>
                        <?php esc_html_e('With creative design and development skills,', 'mobiki'); ?><br>
                        <?php esc_html_e('I aim to provide the best user experience.', 'mobiki'); ?>
                <?php endif; ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"profile-status"} -->
        <p class="profile-status"><?php esc_html_e('Available for work', 'mobiki'); ?></p>
        <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->