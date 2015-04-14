<?php

class Model {

    protected $conexao;
    
    private $host = 'localhost';
    private $dbname = 'lpwii';
    private $usuario = 'root';
    private $senha = '';

    function __construct() {
        $this->conexao = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname}", 
                $this->usuario, 
                $this->senha);
    }

}