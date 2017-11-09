<?php

include_once(PARTIAL . '_head.php');
include_once(PARTIAL . '_nav.php');

//Instanciation pour faire apparaitre les commentaires sur la seconde div
$multiCommentaire = new commentaireManager;
$multiComms = $multiCommentaire->getCommentaires();

?>

<!-- Première balise div qui place le contenu à gauche de la page-->
<div id ='contenu'>
<br />
<article>
    <header>
<!--        Lien vers l'éditeur de texte-->
        <a href="<?= "index.php?action=editeur"; ?>">
            <h1 class="titreBillet">Pour ajouter un billet, cliquez ici !</h1>
        </a>
    </header>
</article>

<br />
<hr />

<br />

<article>
    <header>
<!--        Lien vers la modification/suppression des billets-->
        <a href="<?= "index.php?action=choix"; ?>">
            <h1 class="titreBillet">Pour modifier / supprimer un billet, cliquez ici !</h1>
        </a>
    </header>
</article>
<br />
<hr />
<br />
</div>


<!--Seconde balise div qui place le contenu à droite de la page-->
<div id="bloc_droite">
    <h1>Derniers commentaires</h1>
<!--        Parcours du tableau retourné par le commentaireManager pour afficher les différents commentaires-->
    <?php if (is_array($multiComms))
        foreach ($multiComms as $commentaires):
            ?>
            <header>
<!--                Affichage du champ "Auteur" associé au commentaire-->
                <h1 class="titreCommentaire"><?php echo $commentaires['auteur']; ?></h1>
<!--                Affichage du champ "Date_b" associé au commentaire-->
                <time><?php echo $commentaires['date_b']; ?></time>
            </header>
<!--                Affichage du champ "Date_b" associé au commentaire-->
            <p><?php echo $commentaires['contenu']; ?></p>
            <hr />
        <?php endforeach; ?>
</div>


<?php include_once(PARTIAL . '_footer.php');

?>
