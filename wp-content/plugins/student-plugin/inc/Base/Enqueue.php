<?php
/**
 * @package  StudentPlugin
 */

 namespace Inc\Base;

 use Inc\Base\BaseController;

 class Enqueue extends BaseController{
    public function register(){
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }
    function enqueue(){
        wp_enqueue_style('studentpluginstyle', $this->plugin_url . 'assets/students.css');
        wp_enqueue_script('studentpluginscript', $this->plugin_url. 'assets/students.js');
    }
 }