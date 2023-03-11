<?php
/**
 * 2019 Typper
 */
include_once "vendor/autoload.php";

$currentDirectory = dirname($_SERVER['SCRIPT_NAME']);
$path = trim(str_replace($currentDirectory, '', $_SERVER["REQUEST_URI"]), '/');


#include_once "src/templates/it-works.php";
#var_dump($_SERVER["REQUEST_URI"]);


#echo phpinfo();