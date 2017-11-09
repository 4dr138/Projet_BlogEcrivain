<?php

class back_end
{

    public $action = 'back_end';

    public function __construct()
    {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }


// Fonction d'affichage de la vue Back_end appelée dans le routeur
    public function back_end()
    {

        $multiCommentaire = new commentaireManager;
        $commentaires = $multiCommentaire->getCommentaireSide();

        if(isset($_SESSION)) {
            $view = new view();
            $view->render('back_end', array('title' => 'Back_End', 'commentaires' => $commentaires));
        }
    }
}
