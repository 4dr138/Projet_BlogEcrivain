<?php
// show errors if not in php.ini
ini_set('display_errors','on');
error_reporting(E_ALL);


// autoload all class in entity folder
function __autoload($class){

    if(file_exists(CONTROLEUR .$class.".php"))
    {
        include(CONTROLEUR .$class.".php");
    }

    else
    {
    	include('index.php');
	}
}


$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
$root =  $_SERVER['DOCUMENT_ROOT'].'/';


// CONSTANT
define('HOST', $host."P3_V7/");
define('ROOT', $root."P3_V7/");
define('VUE', ROOT."Vue/");
define('MODELE', ROOT."Modele/");
define('CONTROLEUR', ROOT."Controleur/");
define('CONTENU', HOST."Contenu/");

 // echo GABARIT;