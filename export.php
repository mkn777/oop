<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Kakuei
 * Date: 9/26/2019
 * Time: 12:07 PM
 */

require_once "classes/jsonexport.php";
require_once "classes/htmlexport.php";



$export = "json";

$handler = $export.'export';
//var_dump($handler);

$handlerobj = new $handler;

$handlerobj->export();

class exporthandler {

    public function doexport(can_export $handler)
    {
        $handler->export();

    }
}

$object = new exporthandler();
$object->doexport($handlerobj);