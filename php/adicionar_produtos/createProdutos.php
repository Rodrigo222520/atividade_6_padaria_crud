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
        <a href="">
            <img class="header_esquerda" src="../../assets/logos/logo.webp">
        </a>
</div>
</footer>
<br>
<main>

    <form method="POST" action="create.php">
        <div class="quadradoMarrom">
        
        Preço:<input type="text" class="menu" name="preco"> Preço: <label for="preco">Preço:</label> <br><br>
        Produto: <input type="text" class="menu" name="produto">Produto: <label for="produto">Produto:</label>
        <button><img class="diminuirImagem2" src="../../assets/icons/mais.webp"></button>
    <div>
    </form>
    
    

</body>
</html>
