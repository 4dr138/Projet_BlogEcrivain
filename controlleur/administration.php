<?php

class administration {

    public $action = 'administration';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }

// Fonction d'affichage de la vue Administration appelée dans le routeur
    public function administration(){
        $view = new view();
        $view->render('administration', array('title' => 'Administration'));
    }

//    Fonction de connexion à l'espace d'administration (on fait passer les variables pseudo et password récupérées sur la vue
    public function connectAdmin($pseudo, $password){
        $ei = new identification;
        $view = new view();
        if($ei->connexion($pseudo, $password))
        {
            $multiCommentaire = new commentaireManager;
            $multiCommentaire->getCommentaireSide();

             $view = new back_end();
             $view->back_end();
        }
        else
        {
            $_SESSION['message'] = 'L\'un des deux champs rempli est incorrect ou n\'existe pas, veuillez ré-essayer.';
            $view->render('administration', array('title' => 'Administration'));
        }
    }
}

?>