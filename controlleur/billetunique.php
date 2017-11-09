<?php

class billetunique {

    public $action = 'billet';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }

// Fonction d'affichage de la vue Billet appelée dans le routeur
    public function billetunique()
    {

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

            $view = new view;
            $view->render('billet', array('title' => 'Billet', 'billet_unique' => $billet_unique, 'commentaires' => $commentaires));
        }
    }

// Fonction de création du billet en fonction de l'Id du billet / Associé au commentaireManager pour la BDD
    public function addComment($params)
    {
        // traitement de la page
        $comment = new Commentaire();
        $comment->setcomAuteur($params['auteur']);
        $comment->setcomContenu($params['commBillet']);
        $comment->setBilletId($params['id']);
        $em = new commentaireManager();
        $em->addCommentaire($comment);

        $view = new episodes;
        $view->listeEpisodes();

    }

//    Fonction de signalisation de commentaire
    public function signalerCommentaire($params){
        $signal = new Commentaire;
        $signal->setcomId($params['id']);
        $signal->setComSignalement($params['signalement']);
        $sm = new commentaireManager();
        $signalement = $sm->addSignalement($signal);

        //envoi vers la vue
        $view = new episodes;
        $view->listeEpisodes();
    }

}