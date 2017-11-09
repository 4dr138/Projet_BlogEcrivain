<?php

class ControleurBillet {

  private $billet;
  private $commentaires;

  private $fichier;
  // Titre de la vue (défini dans le fichier vue)
  private $titre;
  
  public $action = 'Billet';

  public function __construct() {
    // Détermination du nom du fichier vue à partir de l'action
    $this->fichier = VUE . $this->action . ".php";

  }

  public function billetUnique(){
    $view = new Vue();
    $view->render2('Billet'); 
  }

  // Affiche la liste de tous les billets du blog
/*  public function billet(){
    $billet = getbilletbyid($id);
	  $commentaires = getcommentaires($id);
    $vue = new vue("billet");
    $vue->generer(array('billet' => $billet, 'commentaires' => $commentaires));
  }*/
}
