<?php


class ControleurAuteur {

private $fichier;
  // Titre de la vue (défini dans le fichier vue)
  private $titre;
  
  public $action = 'Auteur';

  public function __construct() {
    // Détermination du nom du fichier vue à partir de l'action
    $this->fichier = VUE . $this->action . ".php";

  }

  public function auteur(){
    $view = new Vue();
    $view->render2('Auteur'); 
    }
}