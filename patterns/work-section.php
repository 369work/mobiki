<?php
/**
 * Title: Work Section
 * Slug: mobiki/work-section
 * Categories: mobiki-sections
 * Description: Section for showcasing works
 *
 * @package mobiki
 */

?>

<!-- wp:group {"tagName":"section","layout":{"type":"constrained","contentSize":"100%"}} -->
<section id="work" class="wp-block-group">
	<!-- wp:group {"className":"section-header","layout":{"type":"constrained"}} -->
	<div class="wp-block-group section-header">

		<!-- wp:group {"className":"section-label","layout":{"type":"constrained"}} -->
		<div class="wp-block-group section-label">
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'WORKS', 'mobiki' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:heading {"className":"section-title","level":2} -->
		<h2 class="section-title"><?php esc_html_e( 'Project History', 'mobiki' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"section-description"} -->
		<p class="section-description">
			<?php esc_html_e( 'A showcase of some of the projects we have worked on.', 'mobiki' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"work-list","layout":{"type":"constrained"}} -->
	<div class="wp-block-group work-list">

		<!-- wp:group {"tagName":"article","className":"work-item","layout":{"type":"constrained"}} -->
		<article class="wp-block-group work-item">
			<!-- wp:paragraph {"className":"work-image"} -->
			<p class="work-image">🎨</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"work-info","layout":{"type":"constrained"}} -->
			<div class="wp-block-group work-info">
				<!-- wp:heading {"className":"work-title","level":3} -->
				<h3 class="work-title"><?php esc_html_e( 'Branding site production', 'mobiki' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"work-description","moreText":""} -->
				<p class="work-description">
					<?php esc_html_e( 'We created a website to establish the brand identity of a startup company. With a modern design and intuitive UI, we maximized the appeal of the brand.', 'mobiki' ); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</article>
		<!-- /wp:group -->
		<!-- wp:group {"tagName":"article","className":"work-item","layout":{"type":"constrained"}} -->
		<article class="wp-block-group work-item">
			<!-- wp:paragraph {"className":"work-image"} -->
			<p class="work-image">📱</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"work-info","layout":{"type":"constrained"}} -->
			<div class="wp-block-group work-info">
				<!-- wp:heading {"className":"work-title","level":3} -->
				<h3 class="work-title"><?php esc_html_e( 'Mobile App UI Design', 'mobiki' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"work-description","moreText":""} -->
				<p class="work-description">
					<?php esc_html_e( 'We were responsible for the UI/UX design of an e-commerce application. Focusing on usability, we designed a seamless flow to purchase.', 'mobiki' ); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</article>
		<!-- /wp:group -->
		<!-- wp:group {"tagName":"article","className":"work-item","layout":{"type":"constrained"}} -->
		<article class="wp-block-group work-item">
			<!-- wp:paragraph {"className":"work-image"} -->
			<p class="work-image">🖼️</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"work-info","layout":{"type":"constrained"}} -->
			<div class="wp-block-group work-info">
				<!-- wp:heading {"className":"work-title","level":3} -->
				<h3 class="work-title"><?php esc_html_e( 'Portfolio Site', 'mobiki' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"work-description","moreText":""} -->
				<p class="work-description">
					<?php esc_html_e( 'We designed a portfolio site for creators. The structure focuses on visuals to maximize the appeal of the works.', 'mobiki' ); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</article>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->