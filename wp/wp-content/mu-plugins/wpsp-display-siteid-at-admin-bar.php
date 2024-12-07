<?php
/**
 * @package wpsp-display-siteid-at-admin-bar
 */
/*
Plugin Name: wpsp-display-siteid-at-admin-bar
Plugin URI: https://wpscalepro.com/
Description: Display site id on admin bar
Version: 1.0.0
Author: Erfan Ilyas
Author URI: https://wpscalepro.com/
License: GPLv2 or later
*/


// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



// add links/menus to the admin bar
add_action( 'admin_bar_menu', function(){
	
	global $wp_admin_bar;
	
	$wp_admin_bar->add_menu( array(
		'parent' => false, // use 'false' for a root menu, or pass the ID of the parent menu
		'id' => 'lb-region-name', // link ID, defaults to a sanitized title value
		'href' => '#',
		'title' => 'Site ID: '.WPSP_SITE_ID,
	));
	
}, 500 );