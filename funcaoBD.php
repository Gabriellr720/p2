<?php
    function conectarBD(){
        $conecte = mysqli_connect("localhost", "root", "", "p2");
        return $conecte; 
    }

    function inserirUsuario($nome, $preco, $preco_promo){
        $conexao = conectarBD();
        $consulta = "INSERT INTO jogo (nome, preco, preco_promo)
                    VALUES ('$nome', '$preco', '$preco_promo')"; 
        mysqli_query($conexao, $consulta); 
    }

    /*function mostrarUsuario(){
        $conexao = conectarBD();
        $consulta = "SELECT * FROM jogo";
        $listajogo = mysqli_query($consulta, $conexao); 
        return listajogo; 
    }*/
?>