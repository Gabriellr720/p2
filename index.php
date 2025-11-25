<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="syle.css">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de jogo</h1>
    <form method= "POST" action="processamento.php">
        <label for="">Nome</label>
        <input type="text" name="nome" placeholder="Nome: ">
        <br>
        <br>
        <label for="">Preço Original</label>
        <input type="text" name="preco" placeholder="Preço original : ">
        <br>
        <br>
        <label for="">Preço em Promoção</label>
        <input type="text" name="preco_promo" placeholder="Preço em promoção : ">
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>