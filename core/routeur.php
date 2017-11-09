<?php


class Routeur {

//    Déclaration des variables associées au différents controleurs
    private $ctrlAccueil;
    private $ctrlBillet;
    private $ctrlEpisodes;
    private $ctrlAuteur;
    private $ctrlContact;
    private $ctrlErreur;
    private $action;
    private $ctrlEditeur;
    private $ctrlAdministration;
    private $ctrlBackEnd;
    private $ctrlChoix;
    private $ctrlModification;

// Déclaration des méthodes créées dans chaque controleur
    public function __construct() {
        $this->ctrlAccueil = new accueil();
        $this->ctrlBillet = new billetunique();
        $this->ctrlEpisodes = new episodes();
        $this->ctrlAuteur = new auteur();
        $this->ctrlContact = new contact();
        $this->ctrlErreur = new erreur();
        $this->ctrlEditeur = new editeur();
        $this->ctrlAdministration = new administration();
        $this->ctrlBackEnd = new back_end();
        $this->ctrlChoix = new choix();
        $this->ctrlModification = new modification();
    }

// Traite une requête entrante -> Redirection automatique vers chacun des controleurs selon sélection
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                $action = $_GET['action'];
                switch ($action) {
                    case 'billet' :
                        $id = $_GET['id'];
                        $this->ctrlBillet->billetunique();
                        break;
                    case 'episodes' :
                        $this->ctrlEpisodes->listeEpisodes();
                        break;
                    case 'auteur' :
                        $this->ctrlAuteur->auteur();
                        break;
                    case 'contact' :
                        $this->ctrlContact->contact();
                        break;
                    case 'editeur' :
                        $this->ctrlEditeur->editeur();
                        break;
                    case 'administration':
                        $this->ctrlAdministration->administration();
                        break;
                    case 'back_end':
                        $this->ctrlBackEnd->back_end();
                        break;
                    case 'choix':
                        $this->ctrlChoix->choix();
                        break;
                    case 'modification':
                        $this->ctrlModification->modif_billet();
                        break;
                    case 'addComment':
                        $params = $_POST['params'];
                        $controlleur = $this->ctrlBillet;
                        $controlleur->addComment($params);
                        break;
                    case 'connectAdmin' :
                        $pseudo = $_POST['pseudo'];
                        $password = $_POST['password'];
                        $controlleur = $this->ctrlAdministration;
                        $controlleur->connectAdmin($pseudo, $password);
                        break;
                    case 'addBillet' :
                        $params = $_POST['params'];
                        $controlleur = $this->ctrlEditeur;
                        $controlleur->addBillet($params);
                        break;
                    case 'updateBillet' :
                        $params = $_POST['params'];
                        $controlleur = $this->ctrlModification;
                        $controlleur->updateBillet($params);
                        break;
                    case 'deleteBillet' :
                        $params = $_POST['params'];
                        $controlleur = $this->ctrlModification;
                        $controlleur->deleteBillet($params);
                        break;

                }
            }
            else {
                $this->ctrlAccueil->index();  // action par défaut
            }
        }
        catch (Exception $e) {
          $this->ctrlErreur->erreur();
        }
    }
}
