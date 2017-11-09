<?php


class Routeur {

  private $ctrlAccueil;
  private $ctrlBillet;
  private $ctrlEpisodes;
  private $ctrlAuteur;
  private $ctrlContact;
  private $ctrlErreur;
  private $action;

  public function __construct() {
    $this->ctrlAccueil = new ControleurAccueil();
    $this->ctrlBillet = new ControleurBillet();
    $this->ctrlEpisodes = new ControleurEpisodes();
    $this->ctrlAuteur = new ControleurAuteur();
    $this->ctrlContact = new ControleurContact();
    $this->ctrlErreur = new ControleurErreur();
  }

  // Traite une requête entrante
  public function routerRequete() {
  try {
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
      case 'billet' :
        $id = $_GET['id'];
        $this->ctrlBillet->billetUnique();
        break;
      case 'episodes' :
        $this->ctrlEpisodes->listeEpisodes();
        break;
      case 'auteur' :
        $this->ctrlAuteur->auteur();
        break;
      case 'contact' :
        $this->ctrlContact->contact();
        break; 
    }
  }
  else {
    $this->ctrlAccueil->index();  // action par défaut
  } 
}
catch (Exception $e) {
    $this->ctrlErreur->erreur();
    }
  }
}
