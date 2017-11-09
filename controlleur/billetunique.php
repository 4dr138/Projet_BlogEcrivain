<?php

class billetunique {

    public $action = 'Billet';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }

// Fonction d'affichage de la vue Billet appelée dans le routeur
    public function billetunique(){
        $view = new view();
        $view->render('Billet');
    }

// Fonction de création du billet en fonction de l'Id du billet / Associé au commentaireManager pour la BDD
    public function addComment($params)
    {
        // traitement de la page
        $comment = new Commentaire();
        $comment->setAuteur($params['auteur']);
        $comment->setcomContenu($params['commBillet']);
        $comment->setBilletId($params['billet_id']);
        $em = new commentaireManager();
        $em->addCommentaire($comment);

        // envoie vers la vue Episodes
        $view = new View;
        $view->render('Episodes');
    }

}