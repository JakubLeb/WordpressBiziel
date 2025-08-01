<?php
/**
 * Title: Latest Posts
 * Slug: gutentools-health/latest-posts
 * Categories: gutentools-health
 * Keywords: latest-posts
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"className":"responsive-spacing","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group responsive-spacing has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px"><!-- wp:group {"className":"title-spacing","style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group title-spacing" style="margin-bottom:60px"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Latest Blogs', 'gutentools-health' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-bottom:0;font-size:48px;line-height:1"><?php echo esc_html__( 'Latest News', 'gutentools-health' ); ?> &amp;<?php echo esc_html__( ' Updates', 'gutentools-health' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"25rem"}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"10px","width":"0px","style":"none"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-style:none;border-width:0px;border-radius:10px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"height":"300px","style":{"border":{"radius":"10px"}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"#999999"}}},"color":{"text":"#999999"},"typography":{"fontSize":"14px"}}} /-->

<!-- wp:post-author {"showAvatar":false,"style":{"elements":{"link":{"color":{"text":"#999999"}}},"color":{"text":"#999999"},"typography":{"fontSize":"14px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"top":"10px","bottom":"10px"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":12} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->