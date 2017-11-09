<?php

// On récupère les id de chaque billets pour pouvoir les récupérer un par un dans la vue
if(isset($_GET['id'])) {
    $billet_id = $_GET['id'];
    $manager = new billetManager();
    $billet = $manager->getBilletById($billet_id);
}

include_once(PARTIAL . '_head.php');
include_once(PARTIAL . '_nav.php');

?>

<!--On récupère les billets à l'aide du tableau créé par la méthode getbilletbyid-->
<?php if(is_array($billet))
foreach ($billet as $billet_unique): ?>

<!--    Premier formulaire qui fait appel à la méthode update-->
<form name="formulaire" id="formulaire" action="index.php?action=updateBillet" method="post">
    <label for="texte" ><br><strong>Article à modifier : </strong> <br></label><br />

<!--On récupère les données (id/contenu/titre) de chaque billet pour les intégrer à l'éditeur TinyMCE-->
    <label for="titre" ><strong>Titre de l'épisode <?php echo $billet_unique->bilId ?>: <input type = "text" rows="5" class="input" size="50" style="height:25px;"
    name = "params[titre]" id = "titre" value = "<?php echo $billet_unique->bilTitre ?>"</strong></label>

<!--    Champ caché pour récupérer l'id-->
    <input type="hidden" name = 'params[id]'  value="<?php echo $billet_unique->bilId ?>"/>
    <br /><br />

<!--    Récupération du contenu-->
    <textarea id="texte" class="input" name="params[contenu]" rows="25" ><?php echo $billet_unique->bilContenu ?></textarea>
    <br />
    <input id="submit_button" type="submit" value="Modifier" />
<!--    Fermeture du formulaire = fin de l'appel à la méthode update-->
</form>

<!--    Second formulaire qui appelle la méthode delete-->
    <form name="formulaire" id="formulaire" action="index.php?action=deleteBillet" method="post">
<!--        On récupère seulement l'id du billet pour supprimer la ligne correspondante dans la table-->
        <input type="hidden" name = 'params[id]'  value="<?php echo $billet_unique->bilId ?>"/>
        <input id="submit_button" type="submit" value="Supprimer" />
<!--        Fin de la méthode delete-->
    </form>
<!--    Fermeture du parcours de données du tableau-->
<?php endforeach ?>

<?php include_once(PARTIAL . '_footer.php');

?>
