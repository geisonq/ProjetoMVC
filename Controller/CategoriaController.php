<?php
class CategoriaController {

    public function inserir() {
        $msg = FALSE;

        if (isset($_POST['nome'])) {
            $categoriaModel = new CategoriaModel();
            $categoriaModel->setNome($_POST['nome']);


            if ($categoriaModel->insert()) {
                $msg = "Registro cadastrado com sucesso!";
            } else {
                $msg = "Erro ao cadastrar!";
            }
        }

        include('View/Categoria/inserir.php');
    }

    public function deletar() {
        $msg = FALSE;

        if (isset($_GET['id'])) {
            $categoriaModel = new CategoriaModel();
            $categoriaModel->setId($_GET['id']);

            if ($categoriaModel->delete()) {
                $msg = "Registro deletado com sucesso!";
            } else {
                $msg = "Erro ao deletar!";
            }
        }

        include('View/Categoria/deletar.php');
    }

    public function listar() {
        $orderBy = 'id';

        if (isset($_GET['orderBy'])) {
            $orderBy = $_GET['orderBy'];
        }

        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->select($orderBy);

        include('View/Categoria/listar.php');
    }

    public function atualizar() {

        $categoriaModel = new CategoriaModel();
        $msg = '';

        if (isset($_POST['nome'])) {
            $categoriaModel->setId($_GET['id']);
            $categoriaModel->setNome($_POST['nome']);

            if ($categoriaModel->update()) {
                $msg = "Registro atualizado com sucesso!";
            } else {
                $msg = "Erro ao atualizar!";
            }
        }

        if ($_GET['id']) {
            $categoriaModel->setId($_GET['id']);
            $categoria = $categoriaModel->selectById();
        }

        include('View/Categoria/atualizar.php');
    }

}
