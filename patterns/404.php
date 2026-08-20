<?php
/**
 * Title: 404 Error Page
 * Slug: mobiki/404
 * Categories: mobiki-sections
 * Description: 404 Error Page Pattern for Mobiki Theme
 *
 * @package mobiki
 */

?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

	<!-- wp:group {"className":"section-header","layout":{"type":"constrained"}} -->
	<div class="wp-block-group section-header">
		<!-- wp:group {"className":"section-label","layout":{"type":"constrained"}} -->
		<div class="wp-block-group section-label">
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'ERROR 404', 'mobiki' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:heading {"className":"section-title","level":1} -->
		<h1 class="section-title"><?php esc_html_e( 'Page not found.', 'mobiki' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"section-description"} -->
		<p class="section-description">
			<?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'mobiki' ); ?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"50px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:50px">
		<!-- wp:paragraph -->
		<p style="text-align: center; font-size: 80px; margin-bottom: 30px;">🔍</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"30px"}}}} -->
		<p class="has-text-align-center" style="margin-bottom:30px">
			<?php esc_html_e( 'Please use the links below to find the page you are looking for:', 'mobiki' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"
					href="/"><?php esc_html_e( 'Back to Top', 'mobiki' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<div class="divider" aria-hidden="true" style="margin: 60px 0;">
		<div class="divider-line"></div>
		<div class="divider-circle"></div>
	</div>
	<!-- /wp:html -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":3,"align":"center","style":{"spacing":{"margin":{"bottom":"30px"}}}} -->
		<h3 class="has-text-align-center" style="margin-bottom:30px"><?php esc_html_e( 'Recent Posts', 'mobiki' ); ?>
		</h3>
		<!-- /wp:heading -->

		<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":false,"className":"blog-list"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->