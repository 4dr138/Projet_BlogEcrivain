<?php


class Billet
{
    protected $id;
    protected $date;
    protected $titre;
    protected $contenu;


    public function getId()
    {
        return $this->id;
    }
    public function setId($int)
    {
        $this->id = $int;
    }


    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }


    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($string)
    {
        $this->titre = $string;
        return $this;
    }


    public function getContenu()
    {
        return $this->contenu;
    }
    public function setContenu($string)
    {
        $this->contenu = $string;
        return $this;
    }
}