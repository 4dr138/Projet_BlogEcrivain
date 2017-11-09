<?php

// Si il existe un id associé au billet, on récupère le billet en fonction de son id et les commentaires liés au billet par son id
if(isset($_GET['id']))
{
    $billet_id = $_GET['id'];
    $manager = new billetManager();
    $billet = $manager->getBilletById($billet_id);
    $commentaireassocie = new commentaireManager();
    $commentaires = $commentaireassocie->getCommentaires($billet_id);
}

include_once(PARTIAL . '_head.php');
include_once(PARTIAL . '_nav.php');

?>

<!--On parcours le tableau créé par la méthode getBilletById pour récupérer les informations stockées dans les champs du billet-->
    <?php foreach ($billet as $billet_unique): ?>
    <article>
        <header>
            <h1 class="titreBillet">Billet numéro <?php echo $billet_unique->bilId; ?><br />
            <br /><?php echo $billet_unique->bilTitre; ?></h1>
            <time><?= $billet_unique->bilDate; ?></time>
        </header>
        <p><?= $billet_unique->bilContenu; ?></p>
    </article>
    <hr />
    <?php endforeach ?>

<!--On parcours le tableau créé par la méthode getCommentaires pour récupérer les informations stockées dans les champs du commentaire (en utilisant l'id du billet)-->
<div id="commentaires">
    <header>
        <h3 id="titreReponses">Commentaires :</h3>
    </header>
<?php if(isset($commentaires))
foreach ($commentaires as $commentaire): ?>
    <p><strong><?= $commentaire['auteur'] ?><br /></strong><?= $commentaire['date_b'] ?></p>
    <p><?= $commentaire['contenu']?></p>
    <hr />
<?php endforeach; ?>

<!--    On appelle la méthode de création de commentaire (addComment) qui récupère les informations du formulaire pour les faire passer dans la méthode du commentaireManager-->
    <p> Pour poster un commentaire, veuillez remplir ces champs :</p>
    <form id="commentaire_form" action='index.php?action=addComment' method="POST" enctype="multipart/form-data">
        <input type="hidden" name="params[billet_id]" value="<?php echo $billet_unique->bilId?>"/>
        <div class="row">
            <label for="auteur">Votre pseudo:</label><br />
            <input id="auteur" class="input" name="params[auteur]" type="text" value="" size="30" /><br />
        </div>
        <div class="row">
            <label for="commBillet">Votre commentaire:</label><br />
            <textarea id="commBillet" class="input" name="params[commBillet]" rows="7" cols="30"></textarea><br />
        </div>
        <input id="submit_button" type="submit" value="Envoyer" />
    </form>
</div>

<?php include_once(PARTIAL . '_footer.php'); ?>
