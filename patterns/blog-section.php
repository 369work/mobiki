<?php
/**
 * Title: Blog Section
 * Slug: mobiki/blog-section
 * Categories: mobiki-sections
 * Description: Blog Section
 *
 * @package mobiki
 */

?>

<!-- wp:group {"tagName":"section","layout":{"type":"constrained","contentSize":"100%"}} -->
<section id="blog" class="wp-block-group">
	<!-- wp:group {"className":"section-header","layout":{"type":"constrained"}} -->
	<div class="wp-block-group section-header">
		<!-- wp:group {"className":"section-label","layout":{"type":"constrained"}} -->
		<div class="wp-block-group section-label">
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'BLOG', 'mobiki' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:heading {"className":"section-title","level":2} -->
		<h2 class="section-title"><?php esc_html_e( 'Blog', 'mobiki' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"section-description"} -->
		<p class="section-description">
			<?php esc_html_e( 'We share our thoughts and the latest information on design.', 'mobiki' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"blog-list","layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group blog-list">
		<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":1},"layout":{"type":"constrained","contentSize":"100%"}} -->
		<div class="wp-block-query">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"1rem"}}} -->
			<!-- wp:group {"tagName":"article","className":"blog-item","layout":{"type":"constrained","contentSize":"100%"}} -->
			<article class="wp-block-group blog-item">
				<!-- wp:post-date {"className":"blog-date", "isLink":true} /-->
				<!-- wp:post-title {"className":"blog-title","level":3, "isLink":true} /-->
				<!-- wp:post-excerpt {"className":"blog-excerpt","moreText":"", "isLink":true} /-->
			</article>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"blog-link-wrapper","style":{"spacing":{"margin":{"top":"2rem"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group blog-link-wrapper" style="margin-top:2rem">
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"blog-link-button"} -->
			<div class="wp-block-button blog-link-button"><a
					class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button"
					href="
					<?php
					$blog_page_id = get_option( 'page_for_posts' );
					echo esc_url( $blog_page_id ? get_permalink( $blog_page_id ) : home_url( '/' ) );
					?>
			"><?php esc_html_e( 'View All Posts', 'mobiki' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
