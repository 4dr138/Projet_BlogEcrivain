<?php

class view {
// Titre de la vue (défini dans le fichier vue)
    protected $titre;

// Fonction render qui permet affichage de la vue -> Appelée dans chaque controleur
    public function render($view)
    {
        include_once(VIEW . $view . '.php');
        $titre = $this->getTitre($view);
        return $titre;
    }

// Récupération du titre de la vue selon le controleur
    public function getTitre($view)
    {
        $titre = $view;
        return $titre;
    }

}