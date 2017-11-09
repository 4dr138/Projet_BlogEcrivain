<?php

require_once(VUE .  'Vue.php');

class ControleurAccueil {

  private $fichier;
  // Titre de la vue (défini dans le fichier vue)
  private $titre;

  public $action = 'Accueil';
  public $donnees = 'Accueil';

  public function __construct() {
    // Détermination du nom du fichier vue à partir de l'action
    $this->fichier = VUE . $this->action . ".php";
  }

  public function index(){
    $view = new Vue();
    $view->render2('Accueil');
  }
}