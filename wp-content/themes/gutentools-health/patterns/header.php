<?php
/**
 * Title: Header
 * Slug: gutentools-health/header
 * Categories: header, gutentools-health
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<header id="sticky-header" class="wp-block-group has-white-background-color has-background" style="padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontSize":"32px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"black","icon":"menu","overlayBackgroundColor":"white-text-color","overlayTextColor":"black","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"spacing":{"blockGap":"30px"},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"}}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Book now', 'gutentools-health' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->