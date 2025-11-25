<?php
    require_once 'funcaoBD.php';

    if(!empty($_POST['nome']) && !empty($_POST['preco']) && !empty($_POST['preco_promo'])){

        $nome = $_POST['nome']; 
        $preco = $_POST['preco'];
        $preco_promo = $_POST['preco_promo']; 

        inserirUsuario($nome, $preco, $preco_promo); 

        //echo "Nome". $nome . "Preço". $preco . "Preço em promoção: ". $preco_promo;
        header('location: index.php');
        die(); 
    }

    
?>