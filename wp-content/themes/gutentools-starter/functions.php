<?php


/**
 * Gutentools Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage Gutentools Starter
 * @since Gutentools Starter 1.0
 */

 function gutentools_starter_block_assets(){
    // Enqueue theme stylesheet for the front-end.
    wp_enqueue_style( 'gutentools-starter-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );
	wp_enqueue_script('jquery-sticky', get_template_directory_uri() . '/assets/js/jquery-sticky.js', array('jquery') );  
	wp_enqueue_script('gutentools-starter-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
  
}

add_action('enqueue_block_assets', 'gutentools_starter_block_assets');

// register own theme pattern

function gutentools_starter_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'gutentools-starter' => array( 'label' => __( 'Gutentools Starter', 'gutentools-starter' ) )
	);

	$block_pattern_categories = apply_filters( 'gutentools_starter_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'gutentools_starter_register_pattern_category');

//recommend plugins
require get_theme_file_path( '/inc/tgm-plugin/tgmpa-hook.php' );
