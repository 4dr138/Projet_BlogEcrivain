
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
  <h3 id="titreReponses">Commentaires :</h3>
</header>
<?php foreach ($commentaires as $commentaire): ?>
  <p><strong><?= $commentaire['auteur'] ?><br /></strong><?= $commentaire['date_b'] ?></p>
  <p><?= $commentaire['contenu']?></p>
  <hr />
<?php endforeach; ?>
<!-- Post de commentaires -->
<p> Pour poster un commentaire, veuillez remplir ces champs :</p>
    <form id="commentaire_form" action="#" method="POST" enctype="multipart/form-data">
        <div class="row">
          <label for="auteur">Votre pseudo:</label><br />
           <input id="auteur" class="input" name="auteur" type="text" value="" size="30" /><br />
        </div>
        <div class="row">
          <label for="commBillet">Votre commentaire:</label><br />
            <textarea id="commBillet" class="input" name="commBillet" rows="7" cols="30"></textarea><br />
        </div>
        <!-- <input type="hidden" name="billet" value="<?php $_GET['billet']?>"/> -->
          <input id="submit_button" type="submit" value="Envoyer" />
        </form>     


<?php $contenu = ob_get_clean(); ?>



<?php include_once(GABARIT . 'template.php'); ?>