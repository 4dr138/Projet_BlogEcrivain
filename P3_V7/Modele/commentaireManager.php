<?php

class commentaireManager extends bddManager
 

 { 

    public function getCommentaires($id=null)
        {
            $bdd = $this->bdd;
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


    // public function getCommentaires()
    // {
    //     $bdd = $this->bdd;
    //     $query = "select COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE ORDER BY COM_ID desc LIMIT 0,3";
    //     $req = $bdd->prepare($query);
    //     $req->execute();

    //     while($row = $req->fetch(PDO::FETCH_ASSOC))
    //     {
    //         $commentaires = new commentaire();
    //         $commentaires->setAuteur($row['auteur']);
    //         $commentaires->setContenu($row['contenu']);
    //         $commentaires->setDate($row['date']);
    //         $commentaires->setId($row['id']);

    //         $commentaires[] = $commentaires;
    //     }
    //     return $commentaires;

    // }
}