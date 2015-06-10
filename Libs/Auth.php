<?php

class Auth {
    static function bloquearAcesso(){
        if(!isset($_SESSION['login'])){
            header('Location: index.php');
        } 
    }
    
}
