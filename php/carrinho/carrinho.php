<?php
    //Começo para iniciar código com sessão
    session_start();
    include '../adicionar_pedidos/db.php';

    //Verifica no MySQL se há o produto
    if (isset($_POST['id_produto'])) {
    $id_produto = intval($_POST['id_produto']);
    $quantidade = isset($_POST['quantidade']) ? intval($_POST['quantidade']) : 1;

    //Indentificando sobre se há algo no carrinho
    if (!isset($_SERVER['carrinho'])) {
        $_SERVER['carrinho'] = [];
    }

    //Se houver item no carrinho ele compara os itens e caso tenha itens repetidos ele junta e aumenta a quantidade de itens, se não ele continua com 1 de quantidade
    if (isset($_SERVER['carrinho'][$id_produto])) {
        $_SERVER['carrinho'][$id_produto] += $quantidade;
    } else {
        $_SERVER['carrinho'][$id_produto] = $quantidade;
    }
}   
    
    //Titulo no topo da imagem
    echo "<h1>Seu Carrinho</h1>";

    //Se não houver nenhum item no carrinho ele aparecerá a mensagem "carrinho vazio" e aparecerá a opção de voltar para produtos
    if (empty($_SERVER['carrinho'])) {
        echo "Carrinho vazio<br>";
        echo "<a href='produtos.php'>Voltar para Produtos</a>";
        exit;
    }   

    //Váriavel para mostrar o total da compra
    $total = 0;

    //Busca dentro do banco de dados os produtos
    foreach ($_SERVER['carrinho'] as $id_produto => $quantidade) {
    $sql = "SELECT * FROM produto WHERE id = $id_produto";
    $result = $conn->query($sql);
    $produto = $result->fetch_assoc();

    //Cálculo para ver o valor toral da conta da pessoa
     $subtotal = $produto['preco'] * $quantidade;
    $total += $subtotal;


    //Escrita que vai aparecer para o cliente: Produto, Preço, quantidade
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