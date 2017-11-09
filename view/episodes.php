<?php

$multiBillet = new billetManager;
$multiBills = $multiBillet->getBillets();

$multiCommentaire = new commentaireManager;
$multiComms = $multiCommentaire->getCommentaires();

include_once(PARTIAL . '_head.php');
include_once(PARTIAL . '_nav.php');

?>

<!--On parcours le tableau créé par le getBillets pour afficher les différents épisodes-->
<div id="contenu">
<?php if (is_array($multiBills))
 foreach ($multiBills as $billets): ?>
        <article>
            <h1 class="numeroBillet">Extrait de l'Episode <?php echo $billets->bilId; ?></h1>
            <header>
                <a href="<?= "index.php?action=billet&id=" . $billets->bilId; ?>">
                    <h1 class="titreBillet"><?php echo $billets->bilTitre ?></h1>
                </a>
                <time><?php echo $billets->bilDate; ?></time>
            </header>
            <p><?php echo $billets->bilContenu; ?></p>
        </article>
        <hr />
    <?php endforeach; ?>

</div>

<!--On parcours le tableau créé par le getCommentaires pour afficher les différents épisodes-->
<div id="bloc_droite">

    <h1>Derniers commentaires</h1>
    <?php if (is_array($multiComms))
    foreach ($multiComms as $commentaires):
        ?>
        <header>
            <h1 class="titreCommentaire"><?php echo $commentaires['auteur']; ?></h1>
            <time><?php echo $commentaires['date_b']; ?></time>
        </header>
        <p><?php echo $commentaires['contenu']; ?></p>
        <hr />
    <?php endforeach; ?>
</div>

<?php include_once(PARTIAL . '_footer.php');

?>
