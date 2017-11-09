<?php

include_once(PARTIAL . '_head.php');
include_once(PARTIAL . '_nav.php');


?>

<!--Appel de la méthode connectAdmin qui gère l'accès à la bdd en fonction des infos rentrées-->

<h2>Formulaire de connexion</h2>
<form id="commentaire_form" action='index.php?action=connectAdmin' method="POST" enctype="multipart/form-data">
    <label>Pseudo: <br /><input type="text" name="pseudo"/></label><br/>
    <label>Mot de passe: <br /><input type="password" name="password"/></label><br/>
    <br /><input type="submit" value="Connexion"/>
</form>



<?php include_once(PARTIAL . '_footer.php');

?>
