<?php
    require_once 'funcaoBD.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar jogo</title>
</head>
<body>
    <h1>Visualizar Jogos</h1>
    <?php
        $listajogo = mostrarUsuario();
        while($jogo = mysqli_fetch_assoc($listajogo)){
            echo "<p> Nome: ". $jogo['nome'] . "</p>"; 
            echo "<p> Preço Original: ". $jogo['preco'] . "</p>";
            echo "<p> Preço em Promoção: ". $jogo['preco_promo'] . "</p>" . "</br>";  
        }
    ?>
</body>
</html>