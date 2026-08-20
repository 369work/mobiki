<?php
/**
 * Title: Footer Content
 * Slug: mobiki/footer-content
 * Categories: mobiki-sections
 * Description: Footer Content for Mobiki Theme
 *
 * @package mobiki
 */

?>

<!-- wp:group {"className":"footer-content","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group footer-content">
	<!-- wp:html -->
	<button class="footer-nav-toggle" aria-label="<?php esc_attr_e( 'Open Post Menu', 'mobiki' ); ?>"
		aria-expanded="false">
		<span class="menu-text"><?php esc_html_e( 'Posts', 'mobiki' ); ?></span>
		<span class="hamburger-icon">
			<span class="hamburger-line"></span>
			<span class="hamburger-line"></span>
			<span class="hamburger-line"></span>
		</span>
	</button>

	<div class="footer-nav-overlay" aria-hidden="true"></div>

	<nav class="footer-nav-menu" aria-hidden="true">
		<div class="footer-nav-inner">
			<button class="footer-nav-close" aria-label="<?php esc_attr_e( 'Close Menu', 'mobiki' ); ?>">
				<span aria-hidden="true">&times;</span>
			</button>

			<div class="footer-nav-content">
				<h3 class="footer-nav-title"><?php esc_html_e( 'Posts', 'mobiki' ); ?></h3>

				<ul class="footer-nav-links">
					<li><a
							href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>"><?php esc_html_e( 'All Posts', 'mobiki' ); ?></a>
					</li>
				</ul>

				<!-- Search Form -->
				<div class="footer-search-form">
					<form role="search" method="get" class="search-form"
						action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<label for="footer-search-input">
							<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'mobiki' ); ?></span>
							<input type="search" id="footer-search-input" class="search-field"
								placeholder="<?php esc_attr_e( 'Search posts...', 'mobiki' ); ?>"
								value="<?php echo get_search_query(); ?>" name="s"
								aria-label="<?php esc_attr_e( 'Search for posts', 'mobiki' ); ?>" />
						</label>
						<button type="submit" class="search-submit"
							aria-label="<?php esc_attr_e( 'Submit search', 'mobiki' ); ?>">
							<span class="search-icon" aria-hidden="true">🔍</span>
							<span class="search-text"><?php esc_html_e( 'Search', 'mobiki' ); ?></span>
						</button>
					</form>
				</div>

				<ul class="footer-nav-links">
					<?php
					$categories = get_categories(
						array(
							'hide_empty' => true,
							'number'     => 6,
						)
					);
					if ( $categories ) {
						echo '<li class="nav-divider">' . esc_html__( 'Categories', 'mobiki' ) . '</li>';
						foreach ( $categories as $category ) {
							echo '<li><a href="' . esc_url( get_category_link( intval( $category->term_id ) ) ) . '">' . esc_html( $category->name ) . ' <span class="post-count">(' . esc_html( intval( $category->count ) ) . ')</span></a></li>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						}
					}

					$tags = get_tags(
						array(
							'hide_empty' => true,
							'number'     => 5,
							'orderby'    => 'count',
							'order'      => 'DESC',
						)
					);
					if ( $tags ) {
						echo '<li class="nav-divider">' . esc_html__( 'Popular Tags', 'mobiki' ) . '</li>';
						foreach ( $tags as $ta ) {
							echo '<li><a href="' . esc_url( get_tag_link( $ta->term_id ) ) . '">#' . esc_html( $ta->name ) . '</a></li>';
						}
					}
					?>
				</ul>
			</div>
		</div>
	</nav>
	<!-- /wp:html -->

	<!-- wp:paragraph {"className":"footer-logo"} -->
	<p class="footer-logo"><?php bloginfo( 'name' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"className":"footer-text"} -->
	<p class="footer-text">&copy; <?php echo esc_html( gmdate( 'Y-m-d' ) ); ?>
		<?php bloginfo( 'name' ); ?><?php esc_html_e( ' All Rights Reserved.', 'mobiki' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->