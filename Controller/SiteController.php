<?php

class SiteController  {
    
    function index(){
        
        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->select("id");
        
        include 'View/Site/index.php';
    }
    
}
