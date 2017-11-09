<?php

include_once(FONCTIONS . 'Modele.php');;
include_once(VUE . 'Vue.php');

class ControleurAccueil {

  public function accueil() {
    $vue = new Vue("accueil");
  }
}
