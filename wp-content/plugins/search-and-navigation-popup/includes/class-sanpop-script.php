<?php
/**
 * Script Class
 * Handles the script and style functionality of plugin
 *
 * @package search-and-navigation-popup
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class Sanpop_Script {

	function __construct() {

		// Action to add script at front side
		add_action( 'wp_enqueue_scripts', array($this, 'sanpop_front_style') );		
		
		// Action to add script at front side
		add_action( 'wp_enqueue_scripts', array($this, 'sanpop_plugin_script') );		
		
	}
	
	/**
	 * Function to add style at front side
	 * 
	 * @package search-and-navigation-popup
	 * @since 1.0.0
	 */
	function sanpop_front_style() {		

		// Registring and enqueing button with style pro css
		wp_register_style( 'sanpop-public-style', SANPOP_URL.'assets/css/sanpop-public-style.css', array(), SANPOP_VERSION );
		wp_enqueue_style( 'sanpop-public-style' );

	}
	
	/**
	 * Function to add script at front side
	 * 
	 * @package search-and-navigation-popup
	 * @since 1.0.0
	 */
	function sanpop_plugin_script() {			
		
		if( !wp_script_is( 'jquery-custombox-legacy', 'registered' ) ) {
			wp_register_script( 'jquery-custombox-legacy', SANPOP_URL.'assets/js/custombox.legacy.min.js', array('jquery'), SANPOP_VERSION, true );	
		}	
		if( !wp_script_is( 'jquery-custombox', 'registered' ) ) {
			wp_register_script( 'jquery-custombox', SANPOP_URL.'assets/js/custombox.min.js', array('jquery'), SANPOP_VERSION, true );
		}		
		
	}	
}

$sanpop_script = new Sanpop_Script();