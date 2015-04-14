<?php

include_once 'Model/UsuarioModel.php';

class UsuarioController {

    private $modeloUsuario;

    public function inserir() {
        $msg = FALSE;
        
        if(isset($_POST['username'])){
            $modeloUsuario = new UsuarioModel();
            $modeloUsuario->setUsername($_POST['username']);
            $modeloUsuario->setEmail($_POST['email']);
            $modeloUsuario->setSenha($_POST['senha']);
            
            $modeloUsuario->insert();
            
            $msg = "Registro cadastrado com sucesso!";
        }
        
        include('View/Usuario/inserir.php');
    }

    public function deletar() {
        
    }

    public function listar() {
        $modeloUsuario = new UsuarioModel();
        $usuarios = $modeloUsuario->select();
        
        include('View/Usuario/listar.php');
    }

}
