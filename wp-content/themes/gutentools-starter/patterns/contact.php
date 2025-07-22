<?php
/**
 * Title: Contact
 * Slug: gutentools-starter/contact
 * Categories: gutentools-starter
 * Keywords: contact
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"categories":["gutentools-starter"],"patternName":"gutentools-starter/contact","name":"Contact"},"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"100px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"left","className":"has-highlighted"} -->
<p class="has-text-align-left has-highlighted"><mark style="background-color:#fff" class="has-inline-color has-primary-color"><?php echo esc_html__( 'Say Hello to Us', 'gutentools-starter' ); ?></mark></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"contact-form","layout":{"type":"constrained"}} -->
<div class="wp-block-group contact-form"><!-- wp:heading {"style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"padding":{"bottom":"0","top":"var:preset|spacing|10"}}}} -->
<h2 class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:0;font-size:42px;font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'Contact Us', 'gutentools-starter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}}} -->
<p style="padding-bottom:var(--wp--preset--spacing--10)"><?php echo esc_html__( 'We are glad that you want to get in touch with us. If you have any questions comments or feedbacks please fill free to contact.', 'gutentools-starter' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Add Yours From Shortcode', 'gutentools-starter' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/faq.jpg","id":759,"dimRatio":0,"customOverlayColor":"#7c6a52","isUserOverlayColor":true,"minHeight":650,"minHeightUnit":"px","isDark":false,"style":{"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:10px;min-height:650px"><img class="wp-block-cover__image-background wp-image-759" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/faq.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#7c6a52"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->