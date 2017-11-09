<?php

// Connexion à la BDD
 class bddmanager
{
    protected $bdd;
    private $host = "localhost";
    private $login = "root";
    private $password = "";

    public function __construct()
    {
        try {
//            On protège l'ensemble des requêtes des injections SQL grâce à PDO + grâce aux requetes préparées dans le code'
            $bdd = new PDO('mysql:host=' . $this->host . ';dbname=monblog;charset=utf8', $this->login, $this->password);
            $this->bdd = $bdd;
        }
        catch(Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }

}

?>