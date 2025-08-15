<?php

    session_start();
    include '../adicionar_pedidos/db.php';

if (isset($_POST['id_produto'])) {
    $id_produto = intval($_POST['id_produto']);
    $quantidade = isset($_POST['quantidade']) ? intval($_POST['quantidade']) : 1;

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    if (isset($_SESSION['carrinho'][$id_produto])) {
        $_SESSION['carrinho'][$id_produto] += $quantidade;
    } else {
        $_SESSION['carrinho'][$id_produto] = $quantidade;
    }
}
    echo "<h1>Seu Carrinho</h1>";
    if (empty($_SESSION['carrinho'])) {
        echo "Carrinho vazio<br>";
        echo "<a href='produtos.php'>Voltar para Produtos</a>";
        exit;
    }   

    $total = 0;

    foreach ($_SESSION['carrinho'] as $id_produto => $quantidade) {
    $sql = "SELECT * FROM produto WHERE id = $id_produto";
    $result = $conn->query($sql);
    $produto = $result->fetch_assoc();

     $subtotal = $produto['preco'] * $quantidade;
    $total += $subtotal;

    echo "<p>{$produto['nome']} - R$ " . number_format($produto['preco'], 2, ',', '.') .
         " x $quantidade = R$ " . number_format($subtotal, 2, ',', '.') . "</p>";

    // Botão para remover produto
    echo "<form method='POST' action='remover.php' style='display:inline'>
            <input type='hidden' name='id_produto' value='$id_produto'>
            <button type='submit'>Remover</button>
          </form>";
}

// Total geral
echo "<h3>Total: R$ " . number_format($total, 2, ',', '.') . "</h3>";

// Botão para finalizar
echo "<form method='POST' action='finalizar.php'>
        <button type='submit'>Finalizar Compra</button>
      </form>";

echo "<br><a href='produtos.php'>Continuar Comprando</a>";
?>