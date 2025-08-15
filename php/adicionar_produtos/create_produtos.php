<?php

include("../adicionar_pedidos/db.php");

$nome= 0;
$preco= 0;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $preco = $_POST['preco'];
    $nome = $_POST['nome'];
}
    $sql = "INSERT INTO produto (nome, preco) VALUES ('$nome', '$preco')";
    $res = mysqli_query($conn, $sql);
    if ($conn->query($sql) === true) {
        echo "Preço cadastrado!";
    }else{
        echo "Erro ao cadastrar preço!";
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
    <form method="POST" action="">
         <div class="quadrado_marrom">
         <label for="preco">Preço:</label> <br><br> <input type="text" class="form_produto" name="preco" required>
         <label for="produto">Produto:</label><input type="text" class="form_produto" name="produto" required>
       
        <a href="/adicionar_produtos/read_Produtos.php">
            <button><img class="diminuir_Imagem2" src="../../assets/icons/mais.webp"></button>
        </a>
    <div>
    </form>
   
    

</body>
</html>
