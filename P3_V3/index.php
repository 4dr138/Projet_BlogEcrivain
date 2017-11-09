<?php 

include_once('_config.php');
include_once(FONCTIONS . 'Modele.php');
try {
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
      case 'billet' :
        $id = $_GET['id'];
        include_once(CONTROLEUR . 'billet.php');
        break;
      case 'episodes' :
        include_once(CONTROLEUR . 'episodes.php');
        break;
      case 'auteur' :
        include_once(CONTROLEUR . 'auteur.php');
        break;
      case 'contact' :
        include_once(CONTROLEUR . 'contact.php');
        break; 
    }
  }
  else {
    include_once(CONTROLEUR . 'accueil.php');  // action par défaut
  } 
}
catch (Exception $e) {
    erreur($e->getMessage());
    include_once(CONTROLEUR . 'erreur.php');
}
