<?php

include_once(FONCTIONS . 'Modele.php');;
include_once(VUE . 'Vue.php');

class ControleurBillet {

  private $billet;
  private $commentaires;

  public function __construct() {
    $this->billet = new Billet();
    $this->commentaires = new Commentaire();
  }

  // Affiche la liste de tous les billets du blog
  public function billet(){
    $billet = getBilletById($id);
	  $commentaires = getCommentaires($id);
    $vue = new Vue("Billet");
    $vue->generer(array('billet' => $billet, 'commentaires' => $commentaires));
  }
}
