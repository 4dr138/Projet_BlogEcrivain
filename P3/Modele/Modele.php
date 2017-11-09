<?php
// On récupère d'abord les commentaires depuis la base de données
	function getCommentaires()
		{
			$bdd = getBdd();
     		$commentaires = $bdd->query('select COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE ORDER BY COM_ID desc LIMIT 0,3');
     		return $commentaires;
		}

// On récupère les tickets depuis la BDD

	function getBillets()
		{
			$bdd = getBdd();
			$billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'  . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'   . ' order by BIL_ID desc LIMIT 0,5');
			return $billets;
		}

// Fonction de connexion à la BDD

	function getBdd()
		{
			$bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // On attribue une exception à la connexion à la base de donnée = message erreur
			return $bdd;
		}


// Fonction de récupération des informations du billet
	function getBillet($idBillet) 
	{
  			$bdd = getBdd();
 			$billet = $bdd->prepare('select BIL_ID as id, BIL_DATE as date,' . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'. ' where BIL_ID=?');
  			$billet->execute(array($idBillet));
  			if ($billet->rowCount() == 1)
   				return $billet->fetch();  // Accès à la première ligne de résultat
 			else
  			 	throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
	}

// Fonction de récupération des commentaires associés à un billet

	function getCommBillet($idBillet)
	{
		$bdd = getBdd();
 		$commBillet = $bdd->prepare('select COM_ID as id, COM_DATE as date,'. ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'. ' where BIL_ID=?');
  		$commBillet->execute(array($idBillet));
  		return $commBillet;
	}

// fonction d'ajout de commentaire dans la BDD
	
