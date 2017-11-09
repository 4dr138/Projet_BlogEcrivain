<?php
// show errors if not in php.ini
ini_set('display_errors','on');
error_reporting(E_ALL);

include_once('_config.php');

$routeur = new Routeur();
$routeur->routerRequete();