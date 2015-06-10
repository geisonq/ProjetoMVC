<?php
class CategoriaModel extends Model {
    private  $id;
    private  $nome;
    
   
 
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    public function select($orderBy = 'ID') {
        $sql = "SELECT * FROM CATEGORIA ORDER BY  " . $orderBy;
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function insert() {
        $stmt = $this->conexao->prepare("INSERT INTO CATEGORIA(NOME) VALUES (:nome)");
        $stmt->bindValue(':nome', $this->getNome());

        return $stmt->execute();
    }

    public function update() {
        $stmt = $this->conexao->prepare("UPDATE CATEGORIA SET"
                . " NOME = :nome "
                . " WHERE id = :id");

        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':id', $this->getId());

        return $stmt->execute();
    }

    public function delete() {
        $stmt = $this->conexao->prepare("DELETE FROM CATEGORIA WHERE ID = :id");
        $stmt->bindValue(':id', $this->getId());

        return $stmt->execute();
    }

    public function selectById() {
        $stmt = $this->conexao->prepare("SELECT * FROM CATEGORIA WHERE ID = :id");
        $stmt->bindValue(':id', $this->getId());

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
