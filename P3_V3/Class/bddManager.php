<?php


class BddManager
{
    protected $bdd;
    private $host = "localhost";
    private $login = "root";
    private $password = "";

    public function __construct()
    {
        $bdd = new PDO('mysql:host='.$this->host.';dbname=mytop;charset=utf8', $this->login, $this->password);
        $this->bdd = $bdd;
        
    }

}