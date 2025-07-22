<?php
/**
 * Title: Featured Banner
 * Slug: gutentools-health/banner
 * Categories: gutentools-health
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg","id":921,"dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"minHeight":680,"metadata":{"name":"Banner"},"className":"responsive-spacing","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover responsive-spacing" style="margin-top:0;margin-bottom:0;min-height:680px"><img class="wp-block-cover__image-background wp-image-921" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"64px","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:64px;line-height:1"><?php echo esc_html__( 'Top Doctors Exist In Our Hospital', 'gutentools-health' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"16px"},"spacing":{"margin":{"bottom":"48px","top":"24px"}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:24px;margin-bottom:48px;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Vulputate vehicula elit si scelerisque imperdiet iaculis fames mauris eu parturient orci malesuada metus netus neque dis urna hac quam ad phasellus', 'gutentools-health' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get Started', 'gutentools-health' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"secondary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button"><?php echo esc_html__( 'Book an Appointment', 'gutentools-health' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->