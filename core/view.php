<?php

class view {
// Titre de la vue (défini dans le fichier vue)
    protected $titre;

// Fonction render qui permet affichage de la vue -> Appelée dans chaque controleur
    public function render($view, $params=null)
    {
        if($params)
        {
            foreach ($params as $name => $value)
            {
                ${$name} = $value;
            }

        }
        if(!isset($title)) $title = $view;
        ob_start();
        include_once(VIEW . $view . '.php');
        $contenu = ob_get_clean();
        include_once(VIEW . 'gabarit.php');
    }

}