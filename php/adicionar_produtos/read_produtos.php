<?php

include 'db.php';

$sql = "SELECT * FROM produto";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Preço </th>
            <th> Estoque </th>
            <th> Data de Criação </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['id']} </td>
                <td> {$row['nome']} </td>
                <td> {$row['preco']} </td>
                <td> {$row['estoque']} </td>
                <td> {$row['created_at']} </td>
                <td> 
                    <a href='update_produtos.php?id={$row['id']}'>Editar<a>
                    <a href='delete_produtos.php?id={$row['id']}'>Excluir<a>
                
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$conn -> close();

echo "<a href='create_produtos.php'>Inserir novo Registro</a>";

?>