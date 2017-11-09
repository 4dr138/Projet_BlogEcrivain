<?php

class billetManager extends bddManager
{

 /**
     * return all billets in bdd
     *
     * @return array
     */
    public function getBillets() {
        $bdd = $this->bdd;
        $query = "SELECT * FROM T_BILLET";
        $req = $bdd->prepare($query);
        $req->execute();
        while($row = $req->fetch(PDO::FETCH_ASSOC)) {
            // instance of a billet object
            $billet = new Billet();
            // hydrate manualy from bdd datas
            $billet->hydrate($row);
            // now you have an array of object (instead of an array of array)
            $billets[] = $billet;
        };
        return $billets;

    }
    /**
     * save the book in bdd
     *
     *
     */
    public function persist(Billet $billet)
    {
        if($billet->getId() == null) {
            $this->create($billet);
        } else {
            $this->update($billet);
        }
    }
    /**
     * update a book in bdd
     * @return $this
     */
    public function update(Billet $billet) {
        $bdd = $this->bdd;
        $req = $bdd->prepare("UPDATE T_BILLET SET BIL_TITRE = :titre, BIL_CONTENU = :contenu, BIL_DATE = :date WHERE id = :id");
        $req->execute(
            array(
                'titre'       => $billet->getTitre(),
                'contenu'     => $billet->getContenu(),
                'date'        => $billet->getDate(),
                'id'          => $billet->getId()
        ));
        return $this;
    }
    /**
     * create a new book in bdd
     *

     * @return $this
     */
    public function create(Billet $billet) {
        $bdd = $this->bdd;
        $req = $bdd->prepare("INSERT INTO T_BILLET (titre, contenu, date) VALUES (:titre, :contenu, :date)");
        $req->execute(
            array(
                'titre'       => $billet->getTitre(),
                'contenu'     => $billet->getContenu(),
                'date'        => $billet->getDate(),
                'id'          => $billet->getId()
            )
        );
        return $this;
    }

    public function getBilletById($id)
    {
        $bdd = $this->bdd;
        $query = "SELECT * FROM T_BILLET WHERE id = ".$id;
        $req = $bdd->prepare($query);
        $req->execute();
        $row = $req->fetch(PDO::FETCH_ASSOC);
        $billet = new Billet();
        $billet->hydrate($row);
        return $billet;
    }
}

//  { public function getBillets()
//     {
//         $bdd = $this->bdd;
//         $query = "select BIL_ID as id, BIL_DATE as date,'  . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'   . ' order by BIL_ID desc LIMIT 0,5";
//         $req = $bdd->prepare($query);
//         $req->execute();

//         while($row = $req->fetch(PDO::FETCH_ASSOC))
//         {
//             $billets = new billet();
//             $billets->setTitre($row['titre']);
//             $billets->setContenu($row['contenu']);
//             $billets->setDate($row['date']);
//             $billets->setId($row['id']);

//             $billets[] = $billets;
//         }
//         return $billets;

//     }

//     public function getBilletById($id)
//     {
        
//         $bdd = $this->bdd;
//         $query = 'select BIL_ID as id, BIL_DATE as date,' . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'. ' where BIL_ID=?';
//         $req = $bdd->prepare($query);
//         $req->bindValue(":id", $id, PDO::PARAM_INT);
//         $req->execute();


//         $row = $req->fetch(PDO::FETCH_ASSOC);

//         $billet = new billet();
//         $billet->setTitre($row['titre']);
//         $billet->setContenu($row['contenu']);
//         $billet->setDate($row['date']);
//         $billet->setId($row['id']);

        
//         echo $billet->getId();
        
//         return $billet;
//     }


// }


