<?php
/**
 * Created by PhpStorm.
 * User: dominicdowding
 * Date: 15/03/15
 * Time: 15:50
 */

defined("LIBRARY_PATH")
or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/classes'));


defined("TEMPLATES_PATH")
or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . 'resources/templates'));

foreach (glob("classes/*.php") as $filename)
{
    include $filename;
}


/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

?>