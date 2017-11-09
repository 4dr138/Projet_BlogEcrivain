<?php

class erreur {

   public $action = 'erreur';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";

    }


// Fonction d'affichage de la vue Erreur appelée dans le routeur
    public function erreur(){
        $view = new view();
        $view->render('erreur', array('title' => 'Erreur'));
    }

}