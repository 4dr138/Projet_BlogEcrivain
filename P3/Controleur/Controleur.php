<?php

include_once ('_config.php');
include_once (MODELE.'Modele.php');

// Affiche la liste de tous les billets du blog
function accueil() {
  $billets = getBillets();
  $commentaires = getCommentaires();
  include_once(VUE.'vueAccueil.php');
}

// Affiche les détails sur un billet
function billet($idBillet) {
  $billet = getBillet($idBillet);
  $commentaires = getCommentaires($idBillet);
  include_once(VUE.'vueBillet.php');
}

// Affiche une erreur
function erreur($msgErreur) {
  include_once(VUE.'vueErreur.php');
}
