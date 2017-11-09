<?php

class deconnexion{

    public $action = 'deconnexion';

    public function __construct()
    {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }

    public function deconnexion(){

            session_destroy();

            $view = new view();
            $view->render('accueil', array('title' => 'Accueil'));

    }
}