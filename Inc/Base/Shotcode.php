<?php
/**
 * @package  EmployeePlugin
 */

 namespace Inc\Base;

class ShortCode
{
    public function register()
    {
        add_shortcode('employees', [$this, 'displayTable']);
    }

 public function displayTable()
 {
    $html = "";
    $html .= "<h2>This is a table</h2>";
    $html .= "<table>";
    $html .= "<tr>";
    $html .= "<th>Column 1</th>";
    $html .= "<th>Column 2</th>";
    $html .= "<th>Column 3</th>";
    $html .= "<th>Column 4</th>";
    $html .= "</tr>";
    $html .= "</table>";
    return $html;
 }
}