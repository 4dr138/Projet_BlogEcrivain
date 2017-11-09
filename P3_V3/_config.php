<?php
// show errors if not in php.ini
ini_set('display_errors','on');
error_reporting(E_ALL);


// autoload all class in entity folder
function loadClass($class){



    if(file_exists('entity/'.$class.".php"))
    {
        include("entity/".$class.".php");
    }

    include("class/".$class.".php");


}
spl_autoload_register("loadClass");


$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
$root =  $_SERVER['DOCUMENT_ROOT'].'/';


// CONSTANT
define('HOST', $host."P3_V3/");
define('ROOT', $root."P3_V3/");
define('VUE', ROOT."Vue/");
define('MODELE', ROOT."Modele/");
define('CLASSES', ROOT."class/");
define('CONTROLEUR', ROOT."Controleur/");
define('GABARIT', ROOT."Vue/gabarit/");
define('FONCTIONS', ROOT."Fonctions/");
define('CONTENU', HOST."Contenu/");

 // echo GABARIT;