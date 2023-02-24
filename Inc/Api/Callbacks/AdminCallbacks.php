<?php
/**
 * @package  MeekPlugin
 */

namespace Inc\Api\Callbacks;
use Inc\Base\BaseController;

class AdminCallbacks extends BaseController{
    public function MeekMain(){
        return require_once("$this->plugin_path/templates/meekinputmembers.php");
    }
    public function Cohort9Main(){
        return require_once("$this->plugin_path/templates/meekviewmembers.php");
    }
    public function meekOptionsGroup($input){
        return $input;
    }
    public function meekAdminSection(){
        echo 'This is the first section';
    }
    public function meekTextExample(){
        $value = esc_attr(get_option('meek_example'));
        echo '<input type="text" class="regular-text" name="meek_example" value="'.$value.'" placeholder="Write Your First Name"';
    }
    public function meekSecondName(){
        $value = esc_attr(get_option('second_name'));
        echo '<input type="text" class="regular-text" name="second_name" value="'.$value.'" placeholder="Write Your Second Name"';
    }
}