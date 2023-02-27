<?php
/**
 * @package  StudentPlugin
 */

 namespace Inc\Base;

 use Inc\Base\BaseController;

 class SettingsLink extends BaseController{
    public function register(){
        add_filter("plugi_action_links_$this->plugin", array($this, 'settings_link'));
    }

    public function settings_link(){
        $settings_link = '<a href="admin.php?page=student_plugin">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
 }