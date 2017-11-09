<?php

include_once(FONCTIONS . 'Modele.php');;
include_once(VUE . 'Vue.php');

class ControleurErreur {

  public function erreur() {
    $vue = new Vue("erreur");
  }
}
