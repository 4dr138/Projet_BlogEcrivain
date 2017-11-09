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

<!--    Lien vers la modification des derniers commentaires signalés -->
    <article>
        <header>
            <!--        Lien vers la modification/suppression des billets-->
            <a href="<?= "index.php?action=signalement"; ?>">
                <h1 class="titreBillet">Pour supprimer un commentaire signalé, cliquez ici !</h1>
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
    <hr />
<!--        Parcours du tableau retourné par le commentaireManager pour afficher les différents commentaires-->
    <?php if (is_array($commentaires)) : ?>
        <?php foreach ($commentaires as $commside): ?>
            <header>
<!--                Affichage du champ "Auteur" associé au commentaire-->
                <h1 class="titreCommentaire"><?php echo $commside->getcomAuteur(); ?></h1>
<!--                Affichage du champ "Date_b" associé au commentaire-->
                <time><?php echo $commside->getcomDate(); ?></time>
            </header>
<!--                Affichage du champ "Date_b" associé au commentaire-->
            <p><?php echo $commside->getcomContenu(); ?></p>
            <hr />
        <?php endforeach; ?>
    <?php endif; ?>
</div>


<footer><strong><a href="<?= "index.php?action=deconnexion"?>">Déconnexion</a></strong></footer>
