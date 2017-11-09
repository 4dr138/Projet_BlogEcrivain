<?php

class accueil {


    public $action = 'Accueil';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }

// Fonction d'affichage de la vue Accueil appelée dans le routeur
    public function index(){
        $view = new view();
        $view->render('Accueil');
    }
}