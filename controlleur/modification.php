<?php

class modification {

    public $action = 'modification';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }

// Fonction d'affichage de la vue Editeur appelée dans le routeur
    public function modif_billet(){
        if(isset($_SESSION['password'])) {
            if (isset($_GET['id'])) {
                $billet_id = $_GET['id'];
                $billetseul = new Billet;
                $billetseul->setbilId($billet_id);
                $billet = new billetManager();
                $billet_unique = $billet->getBilletById($billet_id);

                $comment_id = $_GET['id'];
                $commentaireassocie = new Commentaire;
                $commentaireassocie->setBilletId($comment_id);
                $commentaire = new commentaireManager();
                $commentaires = $commentaire->getComById($comment_id);

                $view = new view();
                $view->render('modification', array('title' => 'Modification', 'billet_unique' => $billet_unique, 'commentaires' => $commentaires));
            }
        }
    }

//    Fonction de mise à jour d'un billet en fonction de son id par le biais de l'éditeur TinyMCE
    public function updateBillet($params){

        if(isset($_SESSION['password'])) {
            $newbillet = new Billet();
//        on récupère les données sur la vue associée par les variables passées en name et récupérée en premier lieu dans
//        le routeur par un $_POST
            $newbillet->setbilTitre($params['titre']);
            $newbillet->setbilContenu($params['contenu']);
            $newbillet->setbilId($params['id']);
            $em = new billetManager();
            $em->update($newbillet);

            $view = new back_end();
            $view->back_end();
        }

    }

//    Fonction de suppression d'un billet en fonction de son id
    public function deleteBillet($params)
    {

        if (isset($_SESSION['password'])) {
            $delbillet = new Billet();
            $delbillet->setbilId($params['id']);
            $em = new billetManager();
            $em->delete($delbillet);
            $view = new back_end();
            $view->back_end();
        }
    }

//    Fonction de suppression d'un commentaire
public function deleteCommentaire($params){

    if(isset($_SESSION['password'])) {
        $delcomm = new Commentaire();
        $delcomm->setcomId($params['id']);
        $dm = new commentaireManager();
        $dm->deleteCommentaire($delcomm);

        $view = new back_end();
        $view->back_end();

    }

}

}