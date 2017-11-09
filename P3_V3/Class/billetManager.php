<?php

class billetManager extends bddManager
 

 { public function getBillets()
    {
        $bdd = $this->bdd;
        $query = "select BIL_ID as id, BIL_DATE as date,'  . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'   . ' order by BIL_ID desc LIMIT 0,5";
        $req = $bdd->prepare($query);
        $req->execute();

        while($row = $req->fetch(PDO::FETCH_ASSOC))
        {
            $billets = new billet();
            $billets->setTitre($row['titre']);
            $billets->setContenu($row['contenu']);
            $billets->setDate($row['date']);
            $billets->setId($row['id']);

            $billets[] = $billets;
        }
        return $billets;

    }

    public function getBilletById($id)
    {
        
        $bdd = $this->bdd;
        $query = 'select BIL_ID as id, BIL_DATE as date,' . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'. ' where BIL_ID=?';
        $req = $bdd->prepare($query);
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();


        $row = $req->fetch(PDO::FETCH_ASSOC);

        $billet = new billet();
        $billet->setTitre($row['titre']);
        $billet->setContenu($row['contenu']);
        $billet->setDate($row['date']);
        $billet->setId($row['id']);

        
        echo $billet->getId();
        
        return $billet;
    }


}