<?php

include_once(PARTIAL . '_head.php');
include_once(PARTIAL . '_nav.php');

?>

<!--Appel de la méthode addBillet dans son controleur-->
<form name="formulaire" id="formulaire" action="index.php?action=addBillet" method="post">
    <label for="texte" ><br><strong>Veuillez saisir le nouvel épisode ici : </strong> <br></label><br />
    <label for="titre" ><strong>Titre de l'épisode :<input type = "text" rows="5" class="input" size="50" style="height:25px;" name = 'params[titre]' id = "titre" /></strong></label>
    <br /><br />
<!--    Par le biais du params[], on récupère les données titre et contenu, pour les créer ensuite dans un nouveau billet-->
    <textarea id="texte" class="input" name="params[contenu]" rows="25" ></textarea>
    <br />
    <input id="submit_button" type="submit" value="Envoyer" />
</form>

<?php include_once(PARTIAL . '_footer.php');

?>
