<?php
/**
 * Title: Post Navigation
 * Slug: mobiki/post-navigation
 * Categories: mobiki-sections
 * Description: Navigation links for previous and next posts.
 */
?>

<!-- wp:group {"className":"navigation-wrapper","tagName":"nav","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<nav class="wp-block-group navigation-wrapper">
	<!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_html_x( 'Previous: ', 'Label before the title of the previous post. There is a space after the colon.', 'mobiki' ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
	<!-- wp:post-navigation-link {"label":"<?php echo esc_html_x( 'Next: ', 'Label before the title of the next post. There is a space after the colon.', 'mobiki' ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
</nav>
<!-- /wp:group -->
