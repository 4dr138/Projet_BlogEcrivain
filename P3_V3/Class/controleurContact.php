<?php

include_once(FONCTIONS . 'Modele.php');;
include_once(VUE . 'Vue.php');

class ControleurContact {

  public function contact() {
    $vue = new Vue("contact");
  }
}
