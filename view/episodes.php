

<!--On parcours le tableau créé par le getBillets pour afficher les différents épisodes-->
<div id="contenu">
    <?php if (is_array($multiBills)) : ?>
        <?php foreach ($multiBills as $billets): ?>
            <article>
                <h1 class="numeroBillet">Extrait de l'Episode <?php echo $billets->getbilId(); ?></h1>
                <header>
                    <a href="<?= "index.php?action=billet&id=" . $billets->getbilId(); ?>">
                        <h1 class="titreBillet"><?php echo $billets->getbilTitre(); ?></h1>
                    </a>
                    <time><?php echo $billets->getbilDate(); ?></time>
                </header>
                <p><?php echo $billets->getbilContenu(); ?></p>
            </article>
            <hr />
        <?php endforeach; ?>
    <?php endif; ?>

</div>

<!--On parcours le tableau créé par le getBillets pour afficher les différents épisodes-->
<div id="bloc_droite">

    <h1>Derniers commentaires</h1>
    <hr />
    <?php if (is_array($multiComms)) : ?>
        <?php foreach ($multiComms as $commentaires): ?>
            <header>
                <h1 class="titreCommentaire"><?php echo $commentaires->getcomAuteur(); ?></h1>
                <time><?php echo $commentaires->getcomDate(); ?></time>
            </header>
            <p><?php echo $commentaires->getcomContenu(); ?></p>
            <hr />
        <?php endforeach; ?>
    <?php endif; ?>
</div>

