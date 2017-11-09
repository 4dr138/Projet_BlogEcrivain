<?php
// show errors if not in php.ini
ini_set('display_errors','on');
error_reporting(E_ALL);

// autoload all class in entity folder
function loadClass($class){
    if(file_exists('entity/'.$class.'.php')) {
        include 'entity/'.$class.'.php'; 
    } else if (file_exists('controlleur/'.$class.'.php')) {
        include 'controlleur/'.$class.'.php';
    } else {
        include 'core/'.$class.'.php';
    }
}
spl_autoload_register("loadClass");


$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
$root =  $_SERVER['DOCUMENT_ROOT'].'/';


// CONSTANT
define('HOST', $host."P3_V9/");
define('ROOT', $root."P3_V9/");
define('ASSETS', ROOT."assets/");
define('ENTITY', ROOT."entity/");
define('PARTIAL', ROOT."partial/");
define('VIEW', ROOT."view/");
define('TINY', ROOT."TinyMCE/");


//echo ROOT;