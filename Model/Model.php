<?php
class Model {

    protected $conexao;
    
    private $host = 'localhost';
    private $dbname = 'lpwii';
   // private $dbname = 'u898720715_lpwii';
    private $usuario = 'root';
   // private $usuario = 'u898720715_lpwii';
    private $senha = '';
    //private $senha = 'lpw123';

    function __construct() {
        $this->conexao = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname}", 
                $this->usuario, 
                $this->senha);
                
        $this->conexao->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
    }

}