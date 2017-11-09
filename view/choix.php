

<!--On parcourt le tableau généré par la méthode getBillets pour récupérer les données des billets-->
    <?php if (is_array($multiBills)) : ?>
        <?php foreach ($multiBills as $billets): ?>
            <article>
                <h1 class="numeroBillet">Extrait de l'Episode <?php echo $billets->getbilId(); ?></h1>
                <header>
                    <a href="<?= "index.php?action=modification&id=" . $billets->getbilId(); ?>">
                        <h1 class="titreBillet"><?php echo $billets->getbilTitre(); ?></h1>
                    </a>
                    <time><?php echo $billets->getbilDate(); ?></time>
                </header>
                <p><?php echo $billets->getbilContenu(); ?></p>
            </article>
            <hr />
        <?php endforeach; ?>
    <?php endif; ?>

