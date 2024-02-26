<?php
/**
 * Plugin generic functions file
 *
 * @package search-and-navigation-popup
 * @since 1.0.0
 */

 // Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Function to get unique value number
 * 
 * @package search-and-navigation-popup
 * @since 1.0
 */
function sanpop_get_unique() {
	static $unique = 0;
	$unique++;

	return $unique;
}

function sanpop_pluginmenu_setup() {
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'sanpop-popup-menu'    => __( 'Popup Menu', 'search-and-navigation-popup' ),		
	) );
	
}	
add_action( 'after_setup_theme', 'sanpop_pluginmenu_setup' );