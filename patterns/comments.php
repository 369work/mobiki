<?php

/**
 * Title: Comments Section
 * Slug: mobiki/comments
 * Categories: mobiki-sections
 * Description: Comments Section
 */
?>
<!-- wp:group {"className":"comments space-xl","layout":{"type":"constrained"}} -->
<div class="wp-block-group comments space-xl">
    <!-- wp:comments {"className":"wp-block-comments-query-loop space-md","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-comments wp-block-comments-query-loop space-md"
        style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:heading {"className":"section-title section-title-decoration"} -->
        <h2 class="wp-block-heading section-title section-title-decoration">
            <?php esc_html_e('Comments', 'mobiki'); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:comments-title {"level":3} /-->

        <!-- wp:comment-template -->
        <!-- wp:group {"className":"space-sm"} -->
        <div class="wp-block-group space-sm">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
            <div class="wp-block-group">
                <!-- wp:avatar {"size":50} /-->

                <!-- wp:group -->
                <div class="wp-block-group">
                    <!-- wp:comment-date /-->
                    <!-- wp:comment-author-name /-->
                    <!-- wp:spacer {"height":"1rem"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:comment-content /-->
                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group">
                        <!-- wp:comment-edit-link /-->
                        <!-- wp:comment-reply-link /-->
                    </div>
                    <!-- /wp:group -->
                    <!-- wp:spacer {"height":"1rem"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:comment-template -->

        <!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:comments-pagination-previous /-->
        <!-- wp:comments-pagination-next /-->
        <!-- /wp:comments-pagination -->

        <!-- wp:post-comments-form /-->
    </div>
    <!-- /wp:comments -->
</div>
<!-- /wp:group -->