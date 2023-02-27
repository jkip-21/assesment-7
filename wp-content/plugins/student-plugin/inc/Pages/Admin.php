<?php
/**
 * @package  StudentPlugin
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
				'page_title' => 'student_plugin', 
				'menu_title' => 'Student', 
				'capability' => 'manage_options', 
				'menu_slug' => 'student_plugin', 
				'callback' => array($this->callbacks,'StudentMembers'), 
				'icon_url' => 'dashicons-store', 
				'position' => 110
			)
		);

		$this->subpages = array(
			array(
				'parent_slug' => 'student_plugin', 
				'page_title' => 'Custom Post Types', 
				'menu_title' => 'Create Student', 
				'capability' => 'manage_options', 
				'menu_slug' => 'Student_cpt', 
				'callback' => function() { echo '<h1>CPT Manager</h1>'; }
			),
			array(
				'parent_slug' => 'student_plugin', 
				'page_title' => 'Custom View Student', 
				'menu_title' => 'View Student', 
				'capability' => 'manage_options', 
				'menu_slug' => 'Student_taxonomies', 
				'callback' => function() { echo '<h1>Taxonomies Manager</h1>'; }
			),
		);
	}

	public function register() 
	{
		$this->settings->addPages( $this->pages )->withSubPage( 'Student' )->addSubPages( $this->subpages )->register();
	}
}