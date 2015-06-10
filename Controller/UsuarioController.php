<?php

class UsuarioController {

    private $usuarioModel;

    public function login() {

        $msg = false;

        if (isset($_POST['username']) && isset($_POST['senha'])) {
            $usuarioModel = new UsuarioModel();
            $usuarioModel->setUsername($_POST['username']);
            $usuarioModel->setSenha($_POST['senha']);

            $usuario = $usuarioModel->verificaLogin();

            if ($usuario) {
                $_SESSION['login'] = $usuario;
                header("Location: index.php?controller=UsuarioController&action=listar");
            } else {
                $msg = "Senha ou Usuario Invalidos!";
            }
        }

        include('View/Usuario/login.php');
    }

    public function inserir() {
        Auth::bloquearAcesso();
        $msg = FALSE;

        if (isset($_POST['username'])) {
            $usuarioModel = new UsuarioModel();
            $usuarioModel->setUsername($_POST['username']);
            $usuarioModel->setEmail($_POST['email']);
            $usuarioModel->setSenha($_POST['senha']);

            if ($usuarioModel->insert()) {
                $msg = "Registro cadastrado com sucesso!";
            } else {
                $msg = "Erro ao cadastrar!";
            }
        }

        include('View/Usuario/inserir.php');
    }

    public function deletar() {
        Auth::bloquearAcesso();
        $msg = FALSE;

        if ($_GET['id']) {
            $usuarioModel = new UsuarioModel();
            $usuarioModel->setId($_GET['id']);

            if ($usuarioModel->delete()) {
                $msg = "Registro deletado com sucesso!";
            } else {
                $msg = "Erro ao deletar!";
            }
        }

        include('View/Usuario/deletar.php');
    }

    public function listar() {

        Auth::bloquearAcesso();

        $orderBy = 'id';

        if (isset($_GET['orderBy'])) {
            $orderBy = $_GET['orderBy'];
        }

        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->select($orderBy);

        include('View/Usuario/listar.php');
    }

    public function atualizar() {
        Auth::bloquearAcesso();
        $usuarioModel = new UsuarioModel();
        $msg = '';

        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['senha'])) {
            $usuarioModel->setId($_GET['id']);
            $usuarioModel->setUsername($_POST['username']);
            $usuarioModel->setEmail($_POST['email']);
            $usuarioModel->setSenha($_POST['senha']);

            if ($usuarioModel->update()) {
                $msg = "Registro atualizado com sucesso!";
            } else {
                $msg = "Erro ao atualizar!";
            }
        }

        if ($_GET['id']) {
            $usuarioModel->setId($_GET['id']);

            $usuario = $usuarioModel->selectById();
        }

        include('View/Usuario/atualizar.php');
    }

}
