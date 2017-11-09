<?php

// Classe billetManager - Fonctions appelées dans les différents controleurs

class billetManager extends bddmanager
{
//    Fonction de récupération de tous les billets
    public function getBillets()
    {
        $bdd = $this->bdd;
        $query = "SELECT * FROM T_BILLET ORDER BY BIL_ID DESC";
        $req = $bdd->prepare($query);
        $req->execute();
        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            // On instancie le nouvel objet
            $billet = new Billet();
            // Hydratation depuis la bdd
            $billet->hydrate($row);
            // Tableau du nouvel objet pour pouvoir le retourner correctement dans la page
            $billets[] = $billet;
        };
           return $billets;
    }

//    Fonction de mise à jour d'un billet
    public function update(Billet $billet) {
        $bdd = $this->bdd;
        $query = "UPDATE T_BILLET SET BIL_TITRE = :titre, BIL_CONTENU = :contenu where BIL_ID =" .$billet->getbilId();
        $req = $bdd->prepare($query);
//        On récupère les données de la requête et on met à jour les champs correspondants
        $req->bindValue(':titre', $billet->getbilTitre(), PDO::PARAM_STR);
        $req->bindValue(':contenu', $billet->getbilContenu(), PDO::PARAM_STR);
        $req->execute();
    }

//    Fonction de suppression d'un billet (fait appel à la delete cascade pour supprimer commentaires associés
    public function delete(Billet $billet)
    {
        $bdd = $this->bdd;
        $query = 'DELETE FROM T_BILLET where BIL_ID ='.$billet->getbilId();
        $req = $bdd->prepare($query);
        $req->execute();
    }

//    Fonction de création d'un billet
    public function create(Billet $billet) {
        $bdd = $this->bdd;
        $query ='INSERT INTO T_BILLET (BIL_TITRE, BIL_CONTENU, BIL_DATE) VALUES (:titre, :contenu, NOW())';
        $req = $bdd->prepare($query);
        $req->bindValue(':titre', $billet->getbilTitre(), PDO::PARAM_STR);
        $req->bindValue(':contenu', $billet->getbilContenu(), PDO::PARAM_STR);
        $req->execute();
    }

    // Récupération du Billet selon son Id
    public function getBilletById($bilId)
    {
        $bdd = $this->bdd;
        $query = "SELECT * FROM T_BILLET WHERE BIL_ID = ".$bilId;
        $req = $bdd->prepare($query);
        $req->execute();
        $row = $req->fetch(PDO::FETCH_ASSOC);
        $billet = new Billet();
        $billet->hydrate($row);
        $billet_unique[] = $billet;
        return $billet_unique;

    }

}

