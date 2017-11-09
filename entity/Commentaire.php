<?php

date_default_timezone_set("Europe/Paris");
// Création de la classe Commentaire / Définition des setters et getters


class Commentaire
{
    protected $comId;
    protected $comDate;
    protected $comAuteur;
    protected $comContenu;
    protected $billetId;
    protected $comSignalement;

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


    public function setComSignalement($comSignalement){

        $this->comSignalement = $comSignalement;
    }

    public function getComSignalement(){

        return $this->comSignalement;
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
        $mynewdate = date("d/m/y" . ' à ' . "H:i:s", strtotime($this->comDate));
        return $mynewdate;
    }
    public function setcomDate($comDate)
    {
        $this->comDate = $comDate;
    }


    public function getcomAuteur()
    {
        return $this->comAuteur;
    }
    public function setcomAuteur($comAuteur)
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
