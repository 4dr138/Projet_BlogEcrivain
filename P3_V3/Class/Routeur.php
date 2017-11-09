<?php

require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurBillet.php';
require_once 'Vue/Vue.php';

class Routeur {

  private $ctrlAccueil;
  private $ctrlBillet;
  private $ctrlEpisodes;
  private $ctrlAuteur;
  private $ctrlContact;

  public function __construct() {
    $this->ctrlAccueil = new ControleurAccueil();
    $this->ctrlBillet = new ControleurBillet();
    $this->ctrlEpisodes = new ControleurEpisodes();
    $this->ctrlAuteur = new ControleurAuteur();
    $this->ctrlContact = new ControleurContact();
    $this->ctrlErreur = new ControleurErreur();
  }

  // Traite une requête entrante
  public function routerRequete()
  {
      try {
          if (isset($_GET['action'])) {
              $action = $_GET['action'];
              switch ($action) {
                  case 'billet' :
                      $id = $_GET['id'];
                      $this->ctrlBillet->billet();
                      break;
                  case 'episodes' :
                      $this->ctrlEpisodes->episodes();
                      break;
                  case 'auteur' :
                      $this->ctrlAuteur->auteur();
                      break;
                  case 'contact' :
                      $this->ctrlContact->contact();
                      break;
              }
          } else {
              $this->ctrlAccueil->accueil();  // action par défaut
          }
      } catch (Exception $e) {
          erreur($e->getMessage());
          $this->ctrlErreur->erreur();
      }
  }
