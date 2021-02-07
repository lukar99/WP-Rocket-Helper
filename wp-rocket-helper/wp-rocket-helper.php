<?php
/**
* @package Wp_Rocket_Helper
*/
/*
Plugin Name: WP Rocket Helper Plugin
Plugin URI: https://wp-rocket.me
Description: Helper plugin that prevents WP Rocket warning notices to occure when a user sets strict permissions on files
Version: 1.0.0
Requires PHP: 7.0
Author: Luka Roglic
Author URI: https://wp-media.me
License: GPLv2 or later
Text Domain: rocket
*/

function notice_prevention_htaccess(){
   remove_action('admin_notices', 'rocket_warning_htaccess_permissions', 20);
}
add_action('admin_notices', 'notice_prevention_htaccess', 1);

function notice_prevention_cache(){
   remove_action('admin_notices', 'rocket_warning_cache_dir_permissions', 20);
}
add_action('admin_notices', 'notice_prevention_cache', 1);
