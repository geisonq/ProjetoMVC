<?php
class ProdutoModel extends Model {
    private  $id;
    private  $nome;
    private  $descricao;
    private  $preco;
    private  $valor;
    private  $quantidade;
    private  $idCategoria;
 
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPreco() {
        return $this->preco;
    }

    function getValor() {
        return $this->valor;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    function setPreco($preco) {
        $this->preco = $preco;
        return $this;
    }

    function setValor($valor) {
        $this->valor = $valor;
        return $this;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
        return $this;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
        return $this;
    }

    public function select($orderBy) {
        $sql = "SELECT * FROM PRODUTO ORDER BY  " . $orderBy;
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function insert() {
        $stmt = $this->conexao->prepare("INSERT INTO PRODUTO(NOME, DESCRICAO, PRECO, VALOR, QUANTIDADE, IDCATEGORIA) "
                . "VALUES (:nome, :descricao, :preco, :valor, :quantidade, :idcategoria)");
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':descricao', $this->getDescricao());
        $stmt->bindValue(':preco', $this->getPreco());
        $stmt->bindValue(':valor', $this->getValor());
        $stmt->bindValue(':quantidade', $this->getQuantidade());
        $stmt->bindValue(':idcategoria', $this->getIdCategoria());
  

        return $stmt->execute();
    }

    public function update() {
        $stmt = $this->conexao->prepare("UPDATE PRODUTO SET"
                . " NOME = :nome, "
                . " DESCRICAO = :descricao, "
                . " PRECO = :preco, "
                . " VALOR = :valor, "
                . " QUANTIDADE = :quantidade, "
                . " IDCATEGORIA = :idcategoria "
                . " WHERE ID = :id");

        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':descricao', $this->getDescricao());
        $stmt->bindValue(':preco', $this->getPreco());
        $stmt->bindValue(':valor', $this->getValor());
        $stmt->bindValue(':quantidade', $this->getQuantidade());
        $stmt->bindValue(':idcategoria', $this->getIdCategoria());
        $stmt->bindValue(':id', $this->getId());

        return $stmt->execute();
    }

    public function delete() {
        $stmt = $this->conexao->prepare("DELETE FROM PRODUTO WHERE ID = :id");
        $stmt->bindValue(':id', $this->getId());

        return $stmt->execute();
    }

    public function selectById() {
        $stmt = $this->conexao->prepare("SELECT * FROM PRODUTO WHERE ID = :id");
        $stmt->bindValue(':id', $this->getId());

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
