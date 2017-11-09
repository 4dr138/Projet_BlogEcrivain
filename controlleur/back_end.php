<?php

class back_end
{

    public $action = 'Back_End';

    public function __construct()
    {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }


// Fonction d'affichage de la vue Back_end appelée dans le routeur
    public function back_end()
    {
        $view = new view();
        $view->render('Back_End');
    }
}
