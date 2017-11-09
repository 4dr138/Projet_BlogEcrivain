<?php $titre = "Episodes"; ?>

<!-- On affiche la liste des différents billets publiés -->
<?php ob_start(); ?>
<article>
  <header>
  <?php foreach ($billet as $billets): ?>
<h1 class="titreBillet"><?= $billets['titre'] ?></h1>
    <time><?= $billets['date'] ?></time>
  </header>
  <p><?= $billets['contenu'] ?></p>
</article>
<hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>
