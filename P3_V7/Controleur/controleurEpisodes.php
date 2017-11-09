<?php


class ControleurEpisodes {

  protected $billets;
  protected $commentaires;
  public $action = 'Episodes';


  // Affiche la liste de tous les billets du blog

    /**
     *
     */
    public function episodes() {
      $multiBillet = new billetManager;
      $billets = $multiBillet->getBillets();



//    $billets = $this>getBillets();
//    $commentaires = $this->getCommentaires();
    // $view->generer(array('billets' => $billets, 'commentaires' => $commentaires));
  }

  public function listeEpisodes(){
    $view = new Vue();
    $view->render2('Episodes'); 
  }



}

