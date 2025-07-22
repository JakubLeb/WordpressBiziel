<?php
/**
 * Title: Footer
 * Slug: gutentools-starter/footer
 * Categories: footer, gutentools-starter
 * Keywords: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"20px","right":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:20px;padding-bottom:var(--wp--preset--spacing--50);padding-left:20px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"40px"},"padding":{"bottom":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|secondary-bg","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary-bg);border-bottom-width:1px;margin-top:0;margin-bottom:40px;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":2,"textAlign":"left","style":{"typography":{"lineHeight":"1.3","fontSize":"24px"},"spacing":{"margin":{"bottom":"0px"}}}} /-->

<!-- wp:site-tagline {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"0","bottom":"0px"}}},"textColor":"base"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><a href="#"><?php echo esc_html__( 'Home', 'gutentools-starter' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><a href="#"><?php echo esc_html__( 'About', 'gutentools-starter' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><a href="#"><?php echo esc_html__( 'Blog', 'gutentools-starter' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><a href="#"><?php echo esc_html__( 'Contact', 'gutentools-starter' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo esc_html__( 'Fringilla vehicula malesuada himenaeos lacinia id dictumst suscipit lobortis morbi tristique vitae pharetra magna tincidunt scelerisque elit et phasellus enim commodo finibus', 'gutentools-starter' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"secondary-bg","iconColorValue":"#F9DBBA","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|20"},"margin":{"top":"40px","bottom":"40px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only" style="margin-top:40px;margin-bottom:40px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"24px"}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:24px"><?php echo esc_html__( 'Quick Links', 'gutentools-starter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"24px"}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:24px"><?php echo esc_html__( 'More Information', 'gutentools-starter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":31,"width":"24px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/arrow-right.png" alt="" class="wp-image-31" style="width:24px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( '+1-123-45678', 'gutentools-starter' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":31,"width":"24px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/arrow-right.png" alt="" class="wp-image-31" style="width:24px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Example@example.com', 'gutentools-starter' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":31,"width":"24px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/arrow-right.png" alt="" class="wp-image-31" style="width:24px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'SupTest City, 123-456, Basel, Switzerlandport', 'gutentools-starter' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"24px"}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:24px"><?php echo esc_html__( 'Support', 'gutentools-starter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"black","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-black-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color"><?php echo esc_html__( 'Gutentools Starter Developed By', 'gutentools-starter' ); ?> <a href="#"><?php echo esc_html__( 'Themegrove.com', 'gutentools-starter' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gutentools-starter-scroll-top"} -->
<p class="gutentools-starter-scroll-top"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->