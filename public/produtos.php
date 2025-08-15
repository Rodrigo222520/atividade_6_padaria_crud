<?php





?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<header>
<div class="header_background">
    <div class="posicao_seta">
        <img class="header_esquerda" src="../assets/icons/seta_voltar.png" alt="Seta de voltar">
        <img class="tamanho_logo" src="../assets/logos/logo_padaria.png" alt="Logo da padaria">
    </div>
<img class="tamanho_logo" src="../assets/logos/logo_padaria.png" alt="Logo da padaria">
<a href="../php/carrinho/carinho.php">
<button id="botao_ver_carrinho">
<img id="tamanho_icone_carrinho" src="../assets/icons/carrinho.png" alt="Carrinho">
<p>Ver carrinho</p>
</button>
</a>
</div>
<a href="../php/adicionar_produtos/create_produtos.php">
<button id="botao_adicionar_produtos"></button>
<img class="display_flex" id="tamanho_icone_adicionar" src="../assets/icons/mais.webp" alt="Botão de adicionar">
</a>
</header>

<main>
<img id="imagem_produtos" src="../assets/icons/imagem_produtos.png" alt="Imagem de Produtos">
<div class="display_flex_produtos">
<div class="produtos">
<img class="tamanho_imagem_produtos "src="../assets/icons/Pao.webp" alt="Imagem do pão">
<div class="preços"><p>R$6,50</p></div>
<p class="texto_produtos">Pão Frances</p>
<button class="mini_carrinho">
    <img class="imagem_mini_carrinho" src="../assets/icons/imagemCarrinho.webp" alt="Imagem do carrinho">
</button>
</div>
<div class="produtos">
<img class="tamanho_imagem_produtos "src="../assets/icons/Bolo-de-Chocolate.webp" alt="Imagem do bolo">
<div class="preços"><p>R$6,50</p></div>
<p class="texto_produtos">Bolo de chocolate</p>
<button class="mini_carrinho">
    <img class="imagem_mini_carrinho" src="../assets/icons/imagemCarrinho.webp" alt="Imagem do carrinho">
</button>
<div class="produtos">
<img class="tamanho_imagem_produtos "src="../assets/icons/Croissant.jpg" alt="Imagem do croissant">
<div class="preços"><p>R$6,50</p></div>
<p class="texto_produtos">Croissant</p>
<button class="mini_carrinho">
    <img class="imagem_mini_carrinho" src="../assets/icons/imagemCarrinho.webp" alt="Imagem do carrinho">
</button>
<div class="produtos">
<img class="tamanho_imagem_produtos" src="../assets/icons/Pastel.webp" alt="Imagem do pastel">
<div class="preços"><p>R$6,50</p></div>
<p class="texto_produtos">Pastel</p>
<button class="mini_carrinho">
    <img class="imagem_mini_carrinho" src="../assets/icons/imagemCarrinho.webp" alt="Imagem do carrinho">
</button>
</div>
<div class="produtos">
<img class="tamanho_imagem_produtos" src="../assets/icons/Pão de Queijo.jpg" alt="Imagem do pão de queijo">
<div class="preços"><p>R$6,50</p></div>
<p class="texto_produtos">Pão de queijo</p>
<button class="mini_carrinho">
    <img class="imagem_mini_carrinho" src="../assets/icons/imagemCarrinho.webp" alt="Imagem do carrinho">
</button>
</div>
</div>
</div>
</div>
</main>

<footer>

</footer>
</body>
</html>

