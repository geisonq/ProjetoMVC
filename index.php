<?php
class ClassAutoloader {

    public function __construct() {
        spl_autoload_register(array($this, 'loader'));
    }

    private function loader($className) {
        
        if(file_exists('Controller/' . $className . '.php')){
            $pasta = 'Controller/';
        } elseif(file_exists('Model/' . $className . '.php')) {
            $pasta = 'Model/';
        }
        
         include_once $pasta . $className . '.php';
        
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
    $action = 'listar';
}

$controller = new $controller();
$controller->$action();
