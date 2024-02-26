<?php
/**
 * Plugin Name: Search and Navigation Popup
 * Plugin URI: https://www.wponlinesupport.com/plugins
 * Text Domain: search-and-navigation-popup
 * Description: Display a search box OR navigation  popup by clicking on a button. 
 * Domain Path: /languages/
 * Version: 1.1
 * Author: WP OnlineSupport
 * Author URI: https://www.wponlinesupport.com
 * Contributors: WP OnlineSupport
*/

if( !defined( 'SANPOP_VERSION' ) ) {
	define( 'SANPOP_VERSION', '1.1' ); // Version of plugin
}
if( !defined( 'SANPOP_DIR' ) ) {
    define( 'SANPOP_DIR', dirname( __FILE__ ) ); // Plugin dir
}
if( !defined( 'SANPOP_URL' ) ) {
    define( 'SANPOP_URL', plugin_dir_url( __FILE__ )); // Plugin url
}
if( !defined( 'SANPOP_PLUGIN_BASENAME' ) ) {
	define( 'SANPOP_PLUGIN_BASENAME', plugin_basename( __FILE__ ) ); // plugin base name
}

/**
 * Load Text Domain
 * This gets the plugin ready for translation
 * 
 * @package Popup anything on click
 * @since 1.0.0
 */
add_action('plugins_loaded', 'sanpop_load_textdomain');
function sanpop_load_textdomain() {
	load_plugin_textdomain( 'search-and-navigation-popup', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}

// Funcions File
require_once( SANPOP_DIR .'/includes/sanpop-functions.php' );

// Script Class File
require_once( SANPOP_DIR . '/includes/class-sanpop-script.php' );

// Shortcode file
require_once( SANPOP_DIR . '/includes/shortcode/sanpop-menupopup-shortcode.php' );
require_once( SANPOP_DIR . '/includes/shortcode/sanpop-searchpopup-shortcode.php' );