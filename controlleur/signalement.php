<?php

class signalement {

    public $action = 'signalement';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }

// Fonction d'affichage de la vue Editeur appelée dans le routeur
    public function signalement(){

        $view = new view();
        $signalement = new commentaireManager;
        $commSignale = $signalement->getCommentaireSignale();

        if($commSignale == false) {
            $_SESSION['message'] = 'Pour le moment, il n\'existe aucun commentaire signalé.';
            $view->render('signalement', array('title' => 'Signalement', 'commSignale' => $commSignale));        }
        else
        {
            $view->render('signalement', array('title' => 'Signalement', 'commSignale' => $commSignale));
        }

    }

//    Fonction suppression commentaire signalé
    public function deleteCommentaireSignale($params)
    {

        if (isset($_SESSION['password'])) {
            $delcomm = new Commentaire();
            $delcomm->setcomId($params['id']);
            $dm = new commentaireManager();
            $dm->deleteCommentaire($delcomm);

            $view = new choix();
            $view->choix();

        }
    }


}