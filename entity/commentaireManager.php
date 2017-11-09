<?php

// Classe billetManager - Fonctions appelées dans les différents controleurs

class commentaireManager extends bddmanager
{
//  Ajout du commentaire
    public function addCommentaire(Commentaire $commentaire)
    {

        $bdd = $this->bdd;
        $query = 'INSERT INTO t_commentaire (COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID, COM_SIGNALEMENT) VALUES (NOW(), :auteur, :contenu, :billet_id, 0)';
        $req = $bdd->prepare($query);
        $req->bindValue(':auteur', $commentaire->getcomAuteur(), PDO::PARAM_STR);
        $req->bindValue(':contenu', $commentaire->getComContenu(), PDO::PARAM_STR);
        $req->bindValue(':billet_id', $commentaire->getBilletId(), PDO::PARAM_INT);
        $req->execute();

    }

//    Suppression du commentaire
    public function deleteCommentaire(Commentaire $commentaire)
    {
        $bdd = $this->bdd;
        $query = 'DELETE FROM t_commentaire WHERE COM_ID =' . $commentaire->getcomId();
        $req = $bdd->prepare($query);
        $req->execute();
    }

//    Ajout du signalement dans la table par l'id pour modification en administration
    public function addSignalement(Commentaire $commentaire)
    {
        $bdd = $this->bdd;
        $query = 'UPDATE t_commentaire SET COM_SIGNALEMENT = 1 WHERE COM_ID =' . $commentaire->getcomId();
        $req = $bdd->prepare($query);
        $req->bindValue('1', $commentaire->getComSignalement(), PDO::PARAM_INT);
        $req->execute();
    }

// Récupération des commentaires qui ont un signalement

    public function getCommentaireSignale()
    {
        $bdd = $this->bdd;
        $query = 'SELECT * FROM T_COMMENTAIRE WHERE COM_SIGNALEMENT = 1';
        $req = $bdd->prepare($query);
        $req->execute();
        if ($req->rowCount() > 0) {
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                // instance of a commentaire object
                $commentaire = new Commentaire();
                // hydrate manualy from bdd datas
                $commentaire->hydrate($row);

                $commentaires[] = $commentaire;
            }
            return $commentaires;
        }
        else
        {
            return false;
        }
    }


//    Supression des commentaires avec un signalement associé
    public function deleteCommentaireSignale(Commentaire $commentaire)
    {
        $bdd = $this->bdd;
        $query = 'DELETE FROM t_commentaire WHERE COM_ID =' . $commentaire->getcomId();
        $req = $bdd->prepare($query);
        $req->execute();
    }

//    Récupération des commentaires sur le coté (top 3)
    public function getCommentaireSide()

    {
        $bdd = $this->bdd;
        $query = "SELECT * FROM t_commentaire ORDER BY COM_ID DESC LIMIT 0,3";
        $req = $bdd->prepare($query);
        $req->execute();
            while ($row = $req->fetch(PDO::FETCH_ASSOC))
                {
                    // On instancie le nouvel objet
                    $commentaire = new Commentaire();
                    // Hydratation depuis la bdd
                    $commentaire->hydrate($row);
                    // Tableau du nouvel objet pour pouvoir le retourner correctement dans la page
                    $commentaires[] = $commentaire;
                }
        if(empty($commentaires))
            {
                $commentaires = '';
            }
        return $commentaires;

    }

//    Récupération des commentaires par leurs id
    public function getComById($billetId)
    {
        $bdd = $this->bdd;
        $query = "SELECT * FROM t_commentaire WHERE BIL_ID = " . $billetId;
        $req = $bdd->prepare($query);
        $req->execute();
            while ($row = $req->fetch(PDO::FETCH_ASSOC))
                {
                    $commentaire = new Commentaire();
                    $commentaire->hydrate($row);
                    $commentaires[] = $commentaire;
                }
            if(empty($commentaires))
                {
                    $commentaires = '';
                }
            return $commentaires;
    }
}

