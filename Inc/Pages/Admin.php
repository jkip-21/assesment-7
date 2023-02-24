<?php
/**
 * @package  MeekPlugin
 */

 namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;


/**
* 
*/
class Admin extends BaseController
{
	public $settings;

	public $pages = array();

	public $subpages = array();

	public function __construct()
	{
		$this->settings = new SettingsApi();

		$this->pages = array(
			array(
				'page_title' => 'Meek Plugin', 
				'menu_title' => 'Employee', 
				'capability' => 'manage_options', 
				'menu_slug' => 'meek_plugin', 
				'callback' => array($this->callbacks,'MeekMembers'), 
				'icon_url' => 'dashicons-store', 
				'position' => 110
			)
		);

		$this->subpages = array(
			array(
				'parent_slug' => 'meek_plugin', 
				'page_title' => 'Custom Post Types', 
				'menu_title' => 'Create Employee', 
				'capability' => 'manage_options', 
				'menu_slug' => 'meek_cpt', 
				'callback' => function() { echo '<h1>CPT Manager</h1>'; }
			),
			array(
				'parent_slug' => 'meek_plugin', 
				'page_title' => 'Custom View Employee', 
				'menu_title' => 'View Employee', 
				'capability' => 'manage_options', 
				'menu_slug' => 'meek_taxonomies', 
				'callback' => function() { echo '<h1>Taxonomies Manager</h1>'; }
			),
		);
	}

	public function register() 
	{
		$this->settings->addPages( $this->pages )->withSubPage( 'Employee' )->addSubPages( $this->subpages )->register();
	}
}