<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de jogo</h1>
    <form method= "POST" action="processamento.php">
        <input type="text" name="nome" placeholder="Nome: ">
        <input type="text" name="preco" placeholder="Preço : ">
        <input type="text" name="preco_promo" placeholder="Preço em promoção : ">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>