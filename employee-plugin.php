<?php
/**
 * @package  EmployeePlugin
 */

 /*
   Plugin Name: Employee Plugin
   Plugin URI: http://meek.com/plugin
   Description: First attempt plugin
   Version: 1.0.0
   Author: Meek
   Author URI: http://meek.com/plugin
   License: GPLv2 or later
   Text Domain: Meek-plugin
  */


//Secure a plugin
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
function activate_employee_plugin() {
	Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_employee_plugin' );

/**
 * The code that runs during plugin deactivation
 */
function deactivate_employee_plugin() {
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_employee_plugin' );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::register_services();
}