<?php

include_once 'Model/UsuarioModel.php';

class UsuarioController {

    private $usuarioModel;

    public function inserir() {
        $msg = FALSE;
        
        if(isset($_POST['username'])){
            $usuarioModel = new UsuarioModel();
            $usuarioModel->setUsername($_POST['username']);
            $usuarioModel->setEmail($_POST['email']);
            $usuarioModel->setSenha($_POST['senha']);
            
            if($usuarioModel->insert()) {
                 $msg = "Registro cadastrado com sucesso!";
            } else {
                $msg = "Erro ao cadastrar!";
            }
                       
        }
        
        include('View/Usuario/inserir.php');
    }

    public function deletar() {
        
    }

    public function listar() {
        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->select();
        
        include('View/Usuario/listar.php');
    }
    
    public function atualizar() {
        
        if($_GET['id']) {
            $usuarioModel = new UsuarioModel();
            $usuarioModel->setId($_GET['id']);
            
            $usuario = $usuarioModel->selectById();
        }
        
        print_r($usuario);
    }

}
