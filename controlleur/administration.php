<?php

class administration {

    public $action = 'Administration';

    public function __construct() {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = VIEW . $this->action . ".php";
    }

// Fonction d'affichage de la vue Administration appelée dans le routeur
    public function administration(){
        $view = new view();
        $view->render('Administration');
    }

//    Fonction de connexion à l'espace d'administration (on fait passer les variables pseudo et password récupérées sur la vue
    public function connectAdmin($pseudo, $password){
        $ei = new identification;
        $ei->connexion($pseudo, $password);
    }

}