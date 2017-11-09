<?php


class episodes {

    public $action = 'Episodes';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";

    }

// Fonction d'affichage de la vue Episodes appelée dans le routeur
    public function listeEpisodes(){

        $view = new view();
        $view->render('Episodes');
    }



}

