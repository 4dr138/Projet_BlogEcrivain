<?php

class auteur {

    public $action = 'auteur';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }


// Fonction d'affichage de la vue Auteur appelée dans le routeur
    public function auteur(){
        $view = new view();
        $view->render('auteur', array('title' => 'Auteur'));
    }
}