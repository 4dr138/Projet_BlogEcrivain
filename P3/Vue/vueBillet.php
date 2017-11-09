<?php $titre = "Mon Blog - " . $billet['titre']; ?>


<!-- On affiche un billet unitaire, avec les commentaires qui lui sont associés -->
<?php ob_start(); ?>
<article>
  <header>
    <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
    <time><?= $billet['date'] ?></time>
  </header>
  <p><?= $billet['contenu'] ?></p>
</article>
<hr />
<header>
  <h1 id="titreReponses">Commentaires :</h1>
</header>
<?php foreach ($commentaires as $commentaire): ?>
  <p><?= $commentaire['date'] ?> - <strong><?= $commentaire['auteur'] ?> : </strong></p>
  <p><?= $commentaire['contenu'] ?></p>
  <hr />
<?php endforeach; ?>
<hr />
<!-- Post de commentaires -->
<p> Pour poster un commentaire, veuillez remplir ces champs :</p>
    <form id="commentaire_form" action="#" method="POST" enctype="multipart/form-data">
        <div class="row">
          <label for="pseudo">Votre pseudo:</label><br />
           <input id="pseudo" class="input" name="pseudo" type="text" value="" size="30" /><br />
        </div>
        <div class="row">
          <label for="message">Votre commentaire:</label><br />
            <textarea id="commentaire" class="input" name="commentaire" rows="7" cols="30"></textarea><br />
        </div>
           <input id="submit_button" type="submit" value="Envoyer" />
        </form>     


<?php $contenu = ob_get_clean(); ?>

<?php ob_start(); ?>

<?php $bloc_droite = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>
