<?php
/**
 * Title: Search Results
 * Slug: mobiki/search-results
 * Categories: mobiki-sections
 * Description: Search results content
 *
 * @package mobiki
 */

?>

<!-- wp:group {"className":"main-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group main-content">

	<!-- wp:query-title {"type":"search","className":"section-title section-title-decoration"} /-->

	<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"className":"blog-list"} -->
		<!-- wp:group {"tagName":"article","className":"blog-item","layout":{"type":"constrained"}} -->
		<article class="wp-block-group blog-item">
			<!-- wp:post-date {"className":"blog-date"} /-->
			<!-- wp:post-title {"className":"blog-title","level":3,"isLink":true} /-->
			<!-- wp:post-excerpt {"className":"blog-excerpt","moreText":""} /-->
		</article>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"60px"}}}} -->
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