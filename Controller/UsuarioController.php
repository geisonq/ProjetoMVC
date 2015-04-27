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
        $msg = FALSE;
        
        if($_GET['id']) {
            $usuarioModel = new UsuarioModel();
            $usuarioModel->setId($_GET['id']);
            
            if($usuarioModel->delete()) {
                 $msg = "Registro deletado com sucesso!";
            } else {
                $msg = "Erro ao deletar!";
            }
        }
        
        include('View/Usuario/deletar.php');
        
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
        
        include('View/Usuario/atualizar.php');
    }

}
