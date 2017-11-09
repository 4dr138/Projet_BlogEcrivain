<?php
// On récupère d'abord les commentaires depuis la base de données
	function getCommentaires($id=null)
		{
			$bdd = getBdd();
			$query = 'select COM_ID as id, COM_DATE as date_b, COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE';
			($id == null) ? $where='' : $where=' WHERE BIL_ID= :id ';
			$query .= $where;
			$query .= ' ORDER BY COM_ID desc ';
			($id == null) ? $limit='LIMIT 0,3' : $limit='';
			$query .= $limit;
			// echo $query; exit;
			$req=$bdd->prepare($query);
			if($id) $req->bindParam(':id', $id);
			$req->execute();

			if ($req->rowCount() > 0){
				while($row=$req->fetch(PDO::FETCH_ASSOC))
					{
						$commentaires[] = $row;
					}
   				return $commentaires; 
   				}
 			else {
  			 		$commentaires[] = null;
 			}
 			return $commentaires;
		}

// On récupère les tickets depuis la BDD

	function getBillets()
		{
			$bdd = getBdd();
			$billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'  . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'   . ' order by BIL_ID desc');
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


// fonction d'ajout de commentaire dans la BDD
	
	function addCommentaire()
	{
		$bdd = getBdd();
 		$addComm = $bdd->prepare('insert into T_COMMENTAIRE (COM_ID as id, COM_AUTEUR as auteur, COM_CONTENU as contenu, COM_DATE as date)
		VALUES (:id, :auteur, :contenu, NOW())');
  		
 		$addComm->execute(array(
    							'id'=> $_POST['billet'],
   								'auteur'=> $_POST['auteur'],
    							'contenu'=> $_POST['contenu']
    						));
	}
