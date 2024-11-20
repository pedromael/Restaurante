<?php
class conectar
{
    public $pdo;
    public $erro;

    public $nome = "BD_Sistema";
    private $pass = "senha_segura";
    private $user = "phpmyadmin_user";
    private $host = "localhost";

    public function __construct() {
        try {
            $this->pdo = new PDO(dsn: "mysql:dbname=".$this->nome.";host=".$this->host,username: $this->user,password: $this->pass);
        } catch (PDOexception $e) {
            $this->erro = $e->getMessage();
        }
    }    
}
?>