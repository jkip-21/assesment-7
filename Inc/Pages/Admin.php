<?php
/**
 * @package EmployeePlugin
 */

 namespace Inc\Pages;

// use \Inc\Api\Callbacks;
use \Inc\Api\SettingsApi;
use \Inc\Api\Callbacks\AdminCallbacks;


/**
* 
*/
class Admin
{
	public $settings;

	public $pages = array();

	public $subpages = array();

	public $callbacks;

	public function register() 
	{
		$this->callbacks = new AdminCallbacks();
		$this->settings = new SettingsApi();
		$this->adminPages();
		$this->adminsubpages();
		$this->settings->addPages( $this->pages )->withSubPage( 'Employee' )->addSubPages( $this->subpages )->register();
	}
	public function adminPages()
	{

		$this->pages = array(
			array(
				'page_title' => 'Employee Plugin', 
				'menu_title' => 'Employee', 
				'capability' => 'manage_options', 
				'menu_slug' => 'employee_plugin', 
				'callback' => array($this->callbacks,'employeeDasboard'), 
				'icon_url' => 'dashicons-store', 
				'position' => 110
			)
		);

	}
	public function adminsubpages(){
		$this->subpages = array(
			array(
				'parent_slug' => 'employee_plugin', 
				'page_title' => 'Custom Post Types', 
				'menu_title' => 'Create Employee', 
				'capability' => 'manage_options', 
				'menu_slug' => 'meek_cpt', 
				'callback' => array($this->callbacks,'newEmployeeMain'),
			),
			array(
				'parent_slug' => 'employee_plugin', 
				'page_title' => 'Custom View Employee', 
				'menu_title' => 'View Employee', 
				'capability' => 'manage_options', 
				'menu_slug' => 'employee_taxonomies', 
				'callback' => array($this->callbacks,'employeeDataMain'),
			),
		);
	}

	
}