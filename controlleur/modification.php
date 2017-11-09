<?php

class modification {

    public $action = 'Modification';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }

// Fonction d'affichage de la vue Editeur appelée dans le routeur
    public function modif_billet(){
        $view = new view();
        $view->render('Modification');
    }

//    Fonction de mise à jour d'un billet en fonction de son id par le biais de l'éditeur TinyMCE
    public function updateBillet($params){

        $newbillet = new Billet();
//        on récupère les données sur la vue associée par les variables passées en name et récupérée en premier lieu dans
//        le routeur par un $_POST
        $newbillet->setbilTitre($params['titre']);
        $newbillet->setbilContenu($params['contenu']);
        $newbillet->setbilId($params['id']);
        $em = new billetManager();
        $em->update($newbillet);

        $view = new View;
        $view->render('Choix');

    }

//    Fonction de suppression d'un billet en fonction de son id
    public function deleteBillet($params){
        $delbillet = new Billet();
        $delbillet->setbilId($params['id']);
        $em = new billetManager();
        $em->delete($delbillet);

        var_dump($delbillet);

        $view = new View;
        $view->render('Choix');
    }

}