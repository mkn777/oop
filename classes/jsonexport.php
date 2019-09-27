<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Kakuei
 * Date: 9/26/2019
 * Time: 12:05 PM
 */
require_once 'C:\xampp\htdocs\oop\interface\can_export.php';

class jsonexport implements can_export {


    public function export()
    {
        // TODO: Implement export() method.
        echo "data exported in json";
    }
}