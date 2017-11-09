<?php

date_default_timezone_set("Europe/Paris");
// Création de la classe Billet / Définition des setters et getters

class Billet
{
    protected $bilId;
    protected $bilDate;
    protected $bilTitre;
    protected $bilContenu;

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
        $mynewdate = date("d/m/y" . ' à ' . "H:i:s", strtotime($this->bilDate));
        return $mynewdate;
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