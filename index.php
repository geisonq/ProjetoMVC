<?php
include_once 'Controller/UsuarioController.php';

$controller = $_GET['controller'];
$action = $_GET['action'];

$controller = new $controller();
$controller->$action();