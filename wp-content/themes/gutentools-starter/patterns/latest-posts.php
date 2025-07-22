<?php
/**
 * Title: Latest Posts
 * Slug: gutentools-starter/latest-posts
 * Categories: gutentools-starter
 * Keywords: latest-posts
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"categories":["gutentools-starter"],"patternName":"gutentools-starter/latest-posts","name":"Latest Posts"},"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:20px;padding-bottom:var(--wp--preset--spacing--50);padding-left:20px"><!-- wp:paragraph {"align":"left","className":"has-highlighted"} -->
<p class="has-text-align-left has-highlighted"><mark style="background-color:#fff" class="has-inline-color has-primary-color"><?php echo esc_html__( 'News & Update', 'gutentools-starter' ); ?></mark></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}}} -->
<h2 class="wp-block-heading has-text-align-left" style="padding-bottom:var(--wp--preset--spacing--30);font-size:42px;font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'Our Latest Blog for Branding &amp; Marketing ', 'gutentools-starter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
<!-- wp:group {"style":{"border":{"radius":"10px","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-style:none;border-width:0px;border-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"10px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"0","top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-date /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600","fontSize":"21px"}}} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":13} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->