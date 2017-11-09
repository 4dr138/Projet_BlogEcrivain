<!--Appel de la méthode connectAdmin qui gère l'accès à la bdd en fonction des infos rentrées-->

<h2>Formulaire de connexion</h2>
<form id="commentaire_form" action='index.php?action=connectAdmin' method="POST" enctype="multipart/form-data">
    <label>Pseudo: <br /><input type="text" name="pseudo"/></label><br/>
    <label>Mot de passe: <br /><input type="password" name="password"/></label><br/>
    <br /><input type="submit" value="Connexion"/>
    <br /><br /><br />

<!--    Affichage du message d'erreur si erreur lors de la saisie-->
    <strong><?php if(isset($_SESSION['message'])) echo $_SESSION['message']; unset($_SESSION['message']); ?></strong>
</form>


