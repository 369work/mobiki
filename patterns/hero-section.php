<?php
/**
 * Title: Hero Section
 * Slug: mobiki/hero-section
 * Categories: mobiki-sections
 * Description: Hero section with decorative elements, title, subtitle, and image.
 *
 * @package mobiki
 */

?>

<!-- wp:group {"className":"hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group hero">
	<!-- wp:html -->
	<div class="hero-decoration deco1" aria-hidden="true"></div>
	<div class="hero-decoration deco2" aria-hidden="true"></div>
	<!-- /wp:html -->

	<!-- wp:group {"className":"hero-content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group hero-content">
		<!-- wp:paragraph {"className":"hero-image"} -->
		<p class="hero-image">✨</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"className":"hero-title","level":1} -->
		<h1 class="hero-title">
			<?php esc_html_e( 'Creative', 'mobiki' ); ?><br><?php esc_html_e( 'Designer', 'mobiki' ); ?>
		</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"hero-subtitle"} -->
		<p class="hero-subtitle">
			<?php esc_html_e( 'With designs that resonate with the heart', 'mobiki' ); ?><br><?php esc_html_e( 'Bring your vision to life.', 'mobiki' ); ?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->