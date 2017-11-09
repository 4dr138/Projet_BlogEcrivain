<?php

class choix
{

    public $action = 'choix';

    public function __construct()
    {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }


// Fonction d'affichage de la vue Choix appelée dans le routeur
    public function choix()
    {
        $multiBillet = new billetManager;
        $multiBills = $multiBillet->getBillets();

        if(isset($_SESSION['password'])) {
            $view = new view();
            $view->render('choix', array('title' => 'Choix', 'multiBills' => $multiBills));
        }

    }
}

