<?php

// Création de la classe Commentaire / Définition des setters et getters


class Commentaire
{
    protected $comId;
    protected $comDate;
    protected $comAuteur;
    protected $comContenu;
    protected $billetId;

    public function hydrate($donnees)
    {
        foreach ($donnees as $attribut => $valeur)
        {
            $methode = 'set'.str_replace(' ', '', ucwords(str_replace('_', ' ', $attribut)));

            if (is_callable(array($this, $methode)))
            {
                $this->$methode($valeur);
            }
        }
    }

    public function setBilletId($billet_id)
    {
        $this->billetId = $billet_id;
    }
    
    public function getBilletId()
    {
        return $this->billetId;
    }
    
    public function getcomId()
    {
        return $this->comId;
    }
    public function setcomId($comId)
    {
        $this->comId = $comId;
    }


    public function getcomDate()
    {
        return $this->comDate;
    }
    public function setDate($comDate)
    {
        $this->comDate = $comDate;
    }


    public function getcomAuteur()
    {
        return $this->comAuteur;
    }
    public function setAuteur($comAuteur)
    {
        $this->comAuteur = $comAuteur;
    }


    public function getcomContenu()
    {
        return $this->comContenu;
    }
    public function setcomContenu($comContenu)
    {
        $this->comContenu = $comContenu;
    }

}
