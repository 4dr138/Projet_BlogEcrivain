<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?php echo CONTENU . 'style.css'; ?>" />
    <title><?= $titre ?></title>
  </head>
  <body>
<!-- Barre de menu -->
<div id="global">
    <div id="Menu">
    	<ul>
  			<li><a href="<?= "index.php"?>"> Accueil </a></li>
  			<li><a href="<?= "index.php?action=episodes"?>">Episodes</a></li>
        <li><a href="<?= "index.php?action=auteur"?>">L'auteur</a></li>
 			  <li><a href="<?= "index.php?action=contact"?>">Contact</a></li>
		</ul>
	 </div>
<!-- En-tete -->
      <header>
        <a href="<?= "index.php"?>"><h1 id="titreBlog">Billet simple pour l'Alaska</h1></a>
        <!-- <p>Jean Forteroche, né en 1978, est un romancier...</p> -->
      </header>



      <div id="contenu">
        <?= $contenu ?>
      </div>

      <div id="bloc_droite">
      <?= $bloc_droite ?>
     </div> 

     <footer>
      <p>blabla</p>
     </footer>
</div>
      
  </body>
</html>