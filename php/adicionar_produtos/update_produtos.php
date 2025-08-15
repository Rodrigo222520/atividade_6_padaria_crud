<?php

include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name']; //MUDA
    $email = $_POST['email']; //MUDA

    $sql = "UPDATE produto SET name ='$name',email ='$email' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Registro atualizado com sucesso.
        <a href='read_produtos.php'>Ver registros.</a>
        ";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    exit();
}

$sql = "SELECT * FROM produto WHERE id=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Create</title>
</head>
<body>
    <form method="POST" action="update_produtos.php">
         <div class="quadrado_marrom">

         <label for="nome">Produto:</label>
         <input type="text" class="form_produto" name="nome" required>

         <label for="preco">Preço:</label> <br><br> 
         <input type="number" class="form_produto" name="preco" required>

         <label for="estoque">Quantidade no estoque:</label>
         <input type="number" class="form_produto" name="estoque" required>

       
        <a href="/adicionar_produtos/read_Produtos.php">
            <button><img class="diminuirImagem2" src="../../assets/icons/mais.webp"></button>
        </a>
    <div>
    </form>
</body>