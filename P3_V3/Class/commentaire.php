<?php

class Commentaire
{
    protected $id;
    protected $date;
    protected $auteur;
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


    public function getAuteur()
    {
        return $this->auteur;
    }
    public function setAuteur($string)
    {
        $this->auteur = $string;
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