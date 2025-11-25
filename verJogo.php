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
    <?php
        $listajogo = mostrarUsuario();
        while($jogo = mysqli_fetch_assoc($listajogo)){
            echo "<p>". $jogo['nome'] . "</p>"; 
            echo "<p>". $jogo['preco'] . "</p>";
            echo "<p>". $jogo['preco_promo'] . "</p>" . "</br>";  
        }
    ?>
</body>
</html>