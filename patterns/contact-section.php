<?php

/**
 * Title: Contact Section
 * Slug: mobiki/contact-section
 * Categories: mobiki-sections
 * Description: Contact Section
 */

$admin_email =  get_theme_mod('mobiki_contact_email', get_option('admin_email'));
$phone_number = get_theme_mod('mobiki_phone_number', '123-456-7890');
?>

<!-- wp:group {"tagName":"section","layout":{"type":"constrained","contentSize":"100%"}} -->
<section id="contact" class="wp-block-group">
    <!-- wp:group {"className":"section-header","layout":{"type":"constrained"}} -->
    <div class="wp-block-group section-header">

        <!-- wp:group {"className":"section-label","layout":{"type":"constrained"}} -->
        <div class="wp-block-group section-label">
            <!-- wp:paragraph -->
            <p><?php esc_html_e('CONTACT', 'mobiki'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"className":"section-title","level":2} -->
        <h2 class="section-title"><?php esc_html_e('Contact US', 'mobiki'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"section-description"} -->
        <p class="section-description"><?php esc_html_e('Please feel free to contact us with any questions or inquiries regarding your project.', 'mobiki'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"contact-buttons","layout":{"type":"constrained"}} -->
    <div class="wp-block-group contact-buttons">
        <!-- wp:paragraph  -->
        <p><a href="mailto:<?php echo esc_attr($admin_email); ?>" class="contact-btn">
                <span class="contact-icon" role="img" aria-label="Mail Icon">✉️</span>
                <span><?php esc_html_e('CONTACT US BY EMAIL', 'mobiki'); ?></span>
            </a></p>

        <!-- /wp:paragraph -->
        <!-- wp:paragraph  -->
        <p>
            <a href="tel:<?php echo esc_attr($phone_number); ?>" class="contact-btn contact-btn-phone">
                <span class="contact-icon" role="img" aria-label="Phone Icon">📞</span>
                <span><?php esc_html_e('CONTACT US BY PHONE', 'mobiki'); ?></span>
            </a>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->