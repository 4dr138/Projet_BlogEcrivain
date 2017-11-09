<?php

include_once(FONCTIONS . 'Modele.php');;
include_once(VUE . 'Vue.php');

class ControleurEpisodes {

  private $billets;
  private $commentaires;

  public function __construct() {
    $this->billet = new Billet();
    $this->commentaire = new Commentaire();
  }

  // Affiche la liste de tous les billets du blog
  public function episodes() {
    $billets = getBillets();
	$commentaires = getCommentaires();
    $vue = new Vue("Episodes");
    $vue->generer(array('billets' => $billets, 'commentaires' => $commentaires));
  }
}
