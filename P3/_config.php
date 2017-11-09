 <?php

$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
$root =  $_SERVER['DOCUMENT_ROOT'].'/';
// constant
define("HOST", $host.'P3/' );
define("ROOT", $root.'P3/' );
define("CONTENU", ROOT.'P3/contenu/');
define("VUE", ROOT.'P3/vue/'); 
define("MODELE", ROOT.'P3/MODELE/');
define("CONTROLEUR", ROOT.'P3/CONTROLEUR/');
// echo $host;

// echo $root;
// echo CONTENU;