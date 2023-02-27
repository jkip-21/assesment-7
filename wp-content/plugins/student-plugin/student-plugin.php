<?php
/**
 * @package  StudentPlugin
 */

/*
  Plugin Name: Student Plugin
  Plugin URI: http://meek.com/plugin
  Description: Student plugin
  Version: 1.0.0
  Author: Meek
  Author URI: http://meek.com/plugin
  License: GPLv2 or later
  Text Domain: Student-plugin
 */

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}
function activate_student_plugin()
{
    Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_student_plugin');

/**
 * The code that runs during plugin deactivation
 */
function deactivate_student_plugin()
{
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_student_plugin');

/**
 * Initialize all the core classes of the plugin
 */
if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}
