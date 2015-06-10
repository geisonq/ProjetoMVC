<?php

session_start();
include_once "Libs/Auth.php";

class ClassAutoloader {

    public function __construct() {
        spl_autoload_register(array($this, 'loader'));
    }

    private function loader($nomeClasse) {
        if(file_exists('Controller/' . $nomeClasse . '.php')){
            $pasta = 'Controller/';
        } elseif(file_exists('Model/' . $nomeClasse . '.php')) {
            $pasta = 'Model/';
        }
        
         include_once $pasta . $nomeClasse . '.php';
    }

}
new ClassAutoloader();

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = 'UsuarioController';
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'login';
}

$controller = new $controller();
$controller->$action();
