<?php

$multiBillet = new billetManager;
$multiBills = $multiBillet->getBillets();

include_once(PARTIAL . '_head.php');
include_once(PARTIAL . '_nav.php');

?>

<!--On parcourt le tableau généré par la méthode getBillets pour récupérer les données des billets-->
    <?php if (is_array($multiBills))
        foreach ($multiBills as $billets): ?>
            <article>
                <h1 class="numeroBillet">Extrait de l'Episode <?php echo $billets->bilId; ?></h1>
                <header>
                    <a href="<?= "index.php?action=modification&id=" . $billets->bilId; ?>">
                        <h1 class="titreBillet"><?php echo $billets->bilTitre ?></h1>
                    </a>
                    <time><?php echo $billets->bilDate; ?></time>
                </header>
                <p><?php echo $billets->bilContenu; ?></p>
            </article>
            <hr />
        <?php endforeach; ?>


<?php include_once(PARTIAL . '_footer.php');

?>
