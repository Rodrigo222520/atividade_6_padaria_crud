<?php

include("../adicionar_pedidos/db.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $preco = $_POST['preco'];
    $nome = $_POST['nome'];
    $estoque = $_POST['estoque'];
    $sql = "INSERT INTO produto (nome, preco, estoque) VALUES ('$nome', '$preco', '$estoque')";
    $res = mysqli_query($conn, $sql);
    if ($conn->query($sql) === true) {
        echo "Preço cadastrado!";
    }else{
        echo "Erro ao cadastrar preço!";
    }
}
        

$conn->close()
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Produtos</title>
</head>
<body>
<footer>
<div class="header_background">
        <img class="header_esquerda" src="../../assets/logos/logo.webp">
</div>
</footer>
<br>
<main>
    <form method="POST" action="create_produtos.php">
         <div class="quadrado_marrom">

         <label for="nome">Produto:</label>
         <input type="text" class="form_produto" name="nome" required>

         <label for="preco">Preço:</label> <br><br> 
         <input type="number" class="form_produto" name="preco" required>

         <label for="estoque">Quantidade no estoque:</label>
         <input type="number" class="form_produto" name="estoque" required>

       
        <a href="/adicionar_produtos/read_Produtos.php">
            <button><img class="diminuir_Imagem2" src="../../assets/icons/mais.webp"></button>
        </a>
    <div>
    </form>
   
    

</body>
</html>
