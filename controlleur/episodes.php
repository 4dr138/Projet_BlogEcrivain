<?php


class episodes {

    public $action = 'episodes';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";

    }

// Fonction d'affichage de la vue Episodes appelée dans le routeur
    public function listeEpisodes(){

        $multiBillet = new billetManager;
        $multiBills = $multiBillet->getBillets();

        $multiCommentaire = new commentaireManager;
        $multiComms = $multiCommentaire->getCommentaireSide();

        $view = new view();
        $view->render('episodes', array('title' => 'Episodes', 'multiBills' => $multiBills, 'multiComms' => $multiComms));
    }



}

