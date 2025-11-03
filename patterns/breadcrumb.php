<?php

/**
 * Title: Breadcrumb
 * Slug: mobiki/breadcrumb
 * Categories: mobiki-sections
 * Description: Breadcrumb navigation
 */
?>
<!-- wp:group {"className":"breadcrumb-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group breadcrumb-wrapper">
    <!-- wp:html -->
    <nav aria-label="Breadcrumb" class="breadcrumb">
        <ol>
            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'mobiki'); ?></a></li>
            <li aria-current="page"><?php the_title(); ?></li>
        </ol>
    </nav>
    <!-- /wp:html -->
</div>
<!-- /wp:group -->