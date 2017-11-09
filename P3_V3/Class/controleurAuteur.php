<?php

include_once(FONCTIONS . 'Modele.php');;
include_once(VUE . 'Vue.php');

class ControleurAuteur {

  public function auteur() {
    $vue = new Vue("auteur");
  }
}
