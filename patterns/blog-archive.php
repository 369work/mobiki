<?php
/**
 * Title: Blog archive
 * Slug: mobiki/blog-archive
 * Categories: mobiki-sections
 * Description: Blog Archive
 *
 * @package mobiki
 */

?>
<!-- wp:group {"tagName":"section","layout":{"type":"constrained","contentSize":"100%"}} -->
<section id="blog-archive" class="wp-block-group">
	<!-- wp:group {"className":"section-header","layout":{"type":"constrained"}} -->
	<div class="wp-block-group section-header">
		<!-- wp:group {"className":"section-label","layout":{"type":"constrained"}} -->
		<div class="wp-block-group section-label">
			<!-- wp:paragraph -->
			<p>
				<?php
				if ( is_category() ) {
					echo esc_html( strtoupper( single_cat_title( '', false ) ) );
				} elseif ( is_tag() ) {
					echo esc_html( strtoupper( single_tag_title( '', false ) ) );
				} elseif ( is_author() ) {
					echo esc_html( strtoupper( get_the_author() ) );
				} elseif ( is_date() ) {
					echo esc_html( strtoupper( get_the_archive_title() ) );
				} else {
					esc_html_e( 'BLOG', 'mobiki' );
				}
				?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:heading {"className":"section-title","level":1} -->
		<h1 class="section-title">
			<?php
			if ( is_category() ) {
				echo esc_html( single_cat_title( '', false ) );
			} elseif ( is_tag() ) {
				echo esc_html( single_tag_title( '', false ) );
			} elseif ( is_author() ) {
				echo esc_html( get_the_author() );
			} elseif ( is_date() ) {
				echo esc_html( get_the_archive_title() );
			} else {
				esc_html_e( 'Blog', 'mobiki' );
			}
			?>
		</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"section-description"} -->
		<p class="section-description">
			<?php
			if ( is_category() || is_tag() ) {
				echo esc_html( term_description() );
			} elseif ( is_author() ) {
				echo esc_html( get_the_author_meta( 'description' ) );
			} else {
				esc_html_e( 'We share our thoughts and the latest information on design.', 'mobiki' );
			}
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"blog-list","layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group blog-list">
		<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":1},"layout":{"type":"constrained","contentSize":"100%"}} -->
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

			<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->

			<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'No posts found.', 'mobiki' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
