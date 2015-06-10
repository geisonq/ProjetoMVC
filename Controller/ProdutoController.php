<?php

class ProdutoController {

    public function inserir() {
        $msg = FALSE;

        if (isset($_POST['nome'])&&isset($_POST['descricao'])&&isset($_POST['valor'])
                &&isset($_POST['preco'])&&isset($_POST['quantidade'])&&isset($_POST['categoria'])) {
            $produtoModel = new ProdutoModel();
            $produtoModel->setNome($_POST['nome']);
            $produtoModel->setDescricao($_POST['descricao']);
            $produtoModel->setValor($_POST['valor']);
            $produtoModel->setPreco($_POST['preco']);
            $produtoModel->setQuantidade($_POST['quantidade']);
            $produtoModel->setIdCategoria($_POST['categoria']);

            if ($produtoModel->insert()) {
                $msg = "Registro cadastrado com sucesso!";
            } else {
                $msg = "Erro ao cadastrar!";
            }
        }

        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->select();
        include('View/Produto/inserir.php');
    }

    public function deletar() {
        $msg = FALSE;

        if ($_GET['id']) {
            $produtoModel = new ProdutoModel();
            $produtoModel->setId($_GET['id']);

            if ($produtoModel->delete()) {
                $msg = "Registro deletado com sucesso!";
            } else {
                $msg = "Erro ao deletar!";
            }
        }

        include('View/Produto/deletar.php');
    }

    public function listar() {
        $orderBy = 'id';

        if (isset($_GET['orderBy'])) {
            $orderBy = $_GET['orderBy'];
        }

        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->select($orderBy);

        include('View/Produto/listar.php');
    }

    public function atualizar() {

        $produtoModel = new ProdutoModel();
        $msg = '';

        if (isset($_POST['nome'])&&isset($_POST['descricao'])&&isset($_POST['valor'])
                &&isset($_POST['preco'])&&isset($_POST['quantidade'])&&isset($_POST['categoria'])) {
            $produtoModel->setId($_GET['id']);
            $produtoModel->setNome($_POST['nome']);
            $produtoModel->setDescricao($_POST['descricao']);
            $produtoModel->setValor($_POST['valor']);
            $produtoModel->setPreco($_POST['preco']);
            $produtoModel->setQuantidade($_POST['quantidade']);
            $produtoModel->setIdCategoria($_POST['categoria']);

            if ($produtoModel->update()) {
                $msg = "Registro atualizado com sucesso!";
            } else {
                $msg = "Erro ao atualizar!";
            }
        }

        if ($_GET['id']) {
            $produtoModel->setId($_GET['id']);
            $produto = $produtoModel->selectById();
        }

        include('View/Produto/atualizar.php');
    }

}
