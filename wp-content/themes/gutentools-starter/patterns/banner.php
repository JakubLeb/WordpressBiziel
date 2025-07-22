<?php
/**
 * Title: Featured Banner
 * Slug: gutentools-starter/banner
 * Categories: gutentools-starter
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Banner"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"gradient":"gradient-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-gradient-1-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"has-highlighted"} -->
<p class="has-highlighted"><mark style="background-color:#fff" class="has-inline-color has-primary-color"><?php echo esc_html__( 'Gutentools Starter', 'gutentools-starter' ); ?></mark></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"58px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}}} -->
<h2 class="wp-block-heading" style="font-size:58px;font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'Empowering Workforce Solutions | Gutentools Starter', 'gutentools-starter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}}} -->
<p style="line-height:1.6"><?php echo esc_html__( "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.", 'gutentools-starter' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"},"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:button {"style":{"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px"><?php echo esc_html__( 'CONTACT US', 'gutentools-starter' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"secondary","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px"><?php echo esc_html__( 'WATCH VIDEO', 'gutentools-starter' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg","id":863,"dimRatio":10,"isDark":false,"className":"hoverImageWrapper","style":{"color":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light hoverImageWrapper"><img class="wp-block-cover__image-background wp-image-863" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->