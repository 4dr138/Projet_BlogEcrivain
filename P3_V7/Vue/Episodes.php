<?php $listeBillet = new ControleurEpisodes();
      $billets = $listeBillet->episodes();

?>



<?php foreach ($billets as $billet): ?>
        <article>
          <h1 class="numeroBillet">Extrait de l'Episode <?php $billet->getId(); ?></h1>
          <header>
            <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
            <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            </a>
      <time><?php echo $billet->getDate(); ?></time>
          </header>
          <p><?php echo $billet->getContenu(); ?></p>
        </article>
        <hr />

        <?php endforeach; ?>
        <?php $contenu = ob_get_clean(); ?>

<!-- Bloc de droite = Listing derniers commentaires -->
<?php ob_start(); ?>
        <h1>Derniers commentaires</h1>
        <?php foreach ($commentaires as $commentaire):
        ?>  
        <header>  
          <h1 class="titreCommentaire"><?= $commentaire['auteur'] ?></h1>
          <time><?= $commentaire['date_b'] ?></time>
        </header>   
        <p><?= $commentaire['contenu'] ?></p>
          <hr />
        <?php endforeach; ?>
        <?php $bloc_droite = ob_get_clean(); ?>
