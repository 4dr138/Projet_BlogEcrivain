<?php

// Classe billetManager - Fonctions appelées dans les différents controleurs

class commentaireManager extends bddmanager
{

    // Récupération des commentaires
    public function getCommentaires($id = null)
    {
        $bdd = $this->bdd;
        $query = 'SELECT COM_ID AS id, COM_DATE AS date_b, COM_AUTEUR AS auteur, COM_CONTENU AS contenu FROM T_COMMENTAIRE';
        ($id == null) ? $where = '' : $where = ' WHERE BIL_ID= :id ';
        $query .= $where;
        $query .= ' ORDER BY COM_ID desc ';
        ($id == null) ? $limit = 'LIMIT 0,3' : $limit = '';
        $query .= $limit;
        // echo $query; exit;
        $req = $bdd->prepare($query);
        if ($id) $req->bindParam(':id', $id);
        $req->execute();

        if ($req->rowCount() > 0) {
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                // instance of a commentaire object
                $commentaire = new Commentaire();
                // hydrate manualy from bdd datas
                $commentaire->hydrate($row);

                $commentaires[] = $row;
            }
            return $commentaires;
        }
    }

//  Ajout du commentaire
     /* @param Commentaire $commentaire
     */
    public function addCommentaire(Commentaire $commentaire)
    {

        $bdd = $this->bdd;
        $query ='INSERT INTO t_commentaire (COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID) VALUES (NOW(), :auteur, :contenu, :billet_id)';
        $req = $bdd->prepare($query);
        $req->bindValue(':auteur', $commentaire->getcomAuteur(), PDO::PARAM_STR);
        $req->bindValue(':contenu', $commentaire->getComContenu(), PDO::PARAM_STR);
        $req->bindValue(':billet_id', $commentaire->getBilletId(), PDO::PARAM_INT);
        $req->execute();

    }
}

