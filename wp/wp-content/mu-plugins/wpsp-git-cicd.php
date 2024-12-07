<?php
/**
 * @package wpsp-git-cicd
 */
/*
Plugin Name: wpsp-git-cicd
Plugin URI: https://wpscalepro.com/
Description: git cicd
Version: 1.0.0
Author: Erfan Ilyas
Author URI: https://wpscalepro.com/
License: GPLv2 or later
*/


// Log when a plugin or theme is installed or updated
add_action( 'upgrader_process_complete', 'wpsp_upgrader_process_complete' );
function wpsp_upgrader_process_complete(){
    wpsp_push_git_cicd( 'wpsp_upgrader_process_complete' );
}


// Log when a plugin is deleted
add_action( 'delete_plugin', 'wpsp_log_plugin_deleted' );
function wpsp_log_plugin_deleted(){
    wpsp_push_git_cicd( 'wpsp_log_plugin_deleted' );
}

// Log when a theme is deleted
add_action( 'delete_theme', 'wpsp_log_theme_deleted' );
function wpsp_log_theme_deleted(){
    wpsp_push_git_cicd( 'wpsp_log_theme_deleted' );
}


function wpsp_push_git_cicd( $hook ){
  error_log( $hook );
  file_put_contents( '/mnt/network-share/network-data/WPScalePro.push', time() );
}