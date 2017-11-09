<?php

// Création de la classe Billet / Définition des setters et getters

class Billet
{
    public $bilId;
    public $bilDate;
    public $bilTitre;
    public $bilContenu;

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

    public function getbilId()
    {
        return $this->bilId;
    }
    public function setbilId($bilId)
    {
        $this->bilId = $bilId;
    }


    public function getbilDate()
    {
        return $this->bilDate;
    }
    public function setbilDate($bilDate)
    {
        $this->bilDate = $bilDate;
    }


    public function getbilTitre()
    {
        return $this->bilTitre;
    }
    public function setbilTitre($bilTitre)
    {
        $this->bilTitre = $bilTitre;
    }

    public function getbilContenu()
    {
        return $this->bilContenu;
    }
    public function setbilContenu($bilContenu)
    {
        $this->bilContenu = $bilContenu;
    }
}