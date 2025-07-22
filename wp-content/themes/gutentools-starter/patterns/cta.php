<?php
/**
 * Title: CTA
 * Slug: gutentools-starter/cta
 * Categories: gutentools-starter
 * Keywords: cta
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg","id":863,"dimRatio":80,"isUserOverlayColor":true,"minHeight":500,"customGradient":"linear-gradient(333deg,rgb(20,21,21) 0%,rgb(1,135,119) 100%)","sizeSlug":"large","metadata":{"categories":["gutentools-starter"],"patternName":"gutentools-starter/cta","name":"CTA"},"className":"wow animate__animated animate__fadeIn","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"20px","left":"20px","top":"100px","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-cover wow animate__animated animate__fadeIn" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px;min-height:500px"><img class="wp-block-cover__image-background wp-image-863 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(333deg,rgb(20,21,21) 0%,rgb(1,135,119) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"left","className":"has-highlighted"} -->
<p class="has-text-align-left has-highlighted"><mark style="background-color:#fff" class="has-inline-color has-primary-color"><?php echo esc_html__( 'Call to Actions', 'gutentools-starter' ); ?></mark></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"padding":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-left has-white-color has-text-color has-link-color" style="padding-bottom:0;font-size:42px;font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'Start Your Journey with Us', 'gutentools-starter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"},"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:button {"style":{"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px"><?php echo esc_html__( 'CONTACT US', 'gutentools-starter' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"secondary","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px"><?php echo esc_html__( 'WATCH VIDEO', 'gutentools-starter' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"left","className":"banner-subdescription","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} -->
<p class="has-text-align-left banner-subdescription has-white-color has-text-color has-link-color has-medium-font-size" style="padding-top:var(--wp--preset--spacing--10);padding-right:0;padding-bottom:var(--wp--preset--spacing--10);padding-left:0"><?php echo esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English.', 'gutentools-starter' ); ?> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->