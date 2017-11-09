<?php

class contact {

    public $action = 'Contact';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }

// Fonction d'affichage de la vue Contact appelée dans le routeur
    public function contact(){
        $view = new view();
        $view->render('Contact');
    }
}