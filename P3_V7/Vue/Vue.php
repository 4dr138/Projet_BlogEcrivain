<?php

class Vue {

  // Nom du fichier associé à la vue
  private $fichier;
  // Titre de la vue (défini dans le fichier vue)
  private $titre;

  // public function __construct($action) {
  //   // Détermination du nom du fichier vue à partir de l'action
  //   $this->fichier = VUE . $action . ".php";
  // }

  public function render($view)
  {
    include_once(VUE . $view . '.php');
  }

  public function render2($view)
  {
    $titre = $this->getTitre($view);
    $contenu = $this->getContenu($view);
    $bloc_droite = $this->getBlocDroite($view);
    include_once(VUE . 'gabarit.php');

  }
  public function getContenu($view)
  {
    $contenu=file_get_contents(VUE . $view .'.php');
    ob_start();
    echo $contenu;
    $contenu = ob_get_clean();    
    return $contenu;
  }
  public function getBlocDroite($view)
  {
    $bloc_droite=file_get_contents(VUE . $view .'.php');
    ob_start();
    echo $bloc_droite;
    $bloc_droite = ob_get_clean();
    return $bloc_droite;
  }
  public function getTitre($view)
  {
    $titre = $view;
    return $titre;
  }


  // // Génère et affiche la vue
  //  public function generer($donnees) {
  // //   // Génération de la partie spécifique de la vue
  //    $contenu = $this->genererFichier($this->fichier, $donnees);
  // //   // Génération du gabarit commun utilisant la partie spécifique
  //    $vue = $this->genererFichier('gabarit.php',
  //      array('titre' => $this->titre, 'contenu' => $contenu, 'bloc_droite' => $bloc_droite));
  // //   // Renvoi de la vue au navigateur
  //    echo $vue;
  //  }

  // // Génère un fichier vue et renvoie le résultat produit
  //  private function genererFichier($fichier, $donnees) {
  //    if (file_exists($fichier)) {
  // //     // Rend les éléments du tableau $donnees accessibles dans la vue
  //      extract($donnees);
  // //     // Démarrage de la temporisation de sortie
  //      ob_start();
  // //     // Inclut le fichier vue
  // //     // Son résultat est placé dans le tampon de sortie
  //      require $fichier;
  // //     // Arrêt de la temporisation et renvoi du tampon de sortie
  //      return ob_get_clean();
  //    }
  //    else {
  //      throw new Exception("Fichier '$fichier' introuvable");
  //    }
  //  }
}