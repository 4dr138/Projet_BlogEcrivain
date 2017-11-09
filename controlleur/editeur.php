<?php

class editeur {

    public $action = 'editeur';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }

// Fonction d'affichage de la vue Editeur appelée dans le routeur
    public function editeur(){
        $view = new view();
        $view->render('editeur', array('title' => 'Editeur'));

    }

//    Fonction d'ajout de billet par le biais de l'éditeur TinyMCE
    public function addBillet($params)
    {
        if(isset($_SESSION['password'])) {
            // traitement de la page
            $newbillet = new Billet();
            $newbillet->setbilTitre($params['titre']);
            $newbillet->setbilContenu($params['contenu']);
            $em = new billetManager();
            $em->create($newbillet);

            $view = new episodes;
            $view->listeEpisodes();
        }
    }
}