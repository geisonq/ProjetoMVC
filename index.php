<?php
include_once 'Controller/UsuarioController.php';

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
} else {
    $controller = 'UsuarioController';
}

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else {
    $action = 'inserir';
}

$controller = new $controller();
$controller->$action();