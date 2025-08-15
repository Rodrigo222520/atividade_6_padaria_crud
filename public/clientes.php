<?php
$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $mensagem = "Cliente <strong>$nome</strong> cadastrado com sucesso!";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Clientes - Bumba Meu Pão</title>
    <meta name="viewport" content="width=1366, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            border: 0;
            background: #fff;
            font-family: 'Roboto Slab', serif;
        }
        body {
            box-sizing: border-box;
        }
        *:focus {
            outline: none !important;
            box-shadow: none !important;
        }
        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 1000px #fff inset !important;
            box-shadow: 0 0 0 1000px #fff inset !important;
            -webkit-text-fill-color: #000 !important;
        }
        .faixa-cabecalho {
            background: rgb(169, 107, 42);
            height: 130px;
            width: 100vw;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 0;
        }
        .seta-voltar {
            position: absolute;
            left: 30px;
            top: 32px;
            width: 64px;
            height: 64px;
            cursor: pointer;
            background: none;
            border: none;
        }
        .logo-centro {
            margin: 0 auto;
            text-align: center;
        }
        .logo-centro img {
            height: 85px;
            margin-top: 7px;
        }
        .conteudo-principal {
            background: #dfad7f;
            padding: 24px 35px 40px 35px;
        }
        .mensagem-alerta {
            background: #c2e6c2;
            color: #225522;
            padding: 16px;
            border-radius: 6px;
            font-size: 1.3rem;
            margin-bottom: 22px;
            text-align: center;
            font-family: 'Roboto', Arial, sans-serif;
        }
        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }
        .linha-campos {
            display: flex;
            gap: 20px;
            width: 100%;
        }
        .linha-campos label {
            color: #fff;
            font-size: 1.45rem;
            margin-bottom: 4px;
            font-family: 'Roboto Slab', serif;
            font-weight: bold;
        }
        .campo-grupo {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .campo-grupo-largo {
            flex: 2;
            display: flex;
            flex-direction: column;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"] {
            font-size: 1.28rem;
            padding: 8px;
            border: none;
            border-radius: 3px;
            background: #fff;
            font-family: 'Roboto', Arial, sans-serif;
            font-weight: 500;
        }
        .faixa-botoes {
            width: 100vw;
            background: #a96b2a;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 0 18px 0;
        }
        .botao-acao {
            display: flex;
            align-items: center;
            margin: 0 38px;
            cursor: pointer;
            font-size: 1.65rem;
            font-family: 'Roboto Slab', serif;
            color: #442e12;
            font-weight: bold;
            text-decoration: none;
            background: none;
            border: none;
        }
        .botao-acao svg {
            margin-right: 10px;
            width: 42px;
            height: 42px;
        }
       .imagem-fundo-inferior {
            width: 100vw;
            height: 250px;
            object-fit: cover;
            display: block;
            border: none;
            margin: 0;
            padding: 0;
        }
        @media (max-width: 1400px) {
            .conteudo-principal { padding: 16px 5vw 32px 5vw; }
            .faixa-botoes { padding: 8px 0; }
        }
    </style>
</head>
<body>
    <div class="faixa-cabecalho">
        <button class="seta-voltar" onclick="window.history.back()">
            <svg viewBox="0 0 64 64" fill="#dfad7f"><polygon points="44,8 36,0 8,28 36,56 44,48 24,28"/></svg>
        </button>
        <div class="logo-centro">
            <img src="../assets/logos/icones-logo-padaria.png" alt="Padaria Bumba Meu Pão">
        </div>
    </div>
    <div class="conteudo-principal">
        <?php if ($mensagem): ?>
            <div class="mensagem-alerta"><?= $mensagem ?></div>
        <?php endif; ?>
        <form method="POST" autocomplete="off">
            <div class="linha-campos">
                <div class="campo-grupo-largo">
                    <label for="nome">Nome Completo *</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="campo-grupo">
                    <label for="rg">RG:</label>
                    <input type="text" id="rg" name="rg">
                </div>
            </div>
            <div class="linha-campos">
                <div class="campo-grupo">
                    <label for="cpf">CPF/CNPJ *</label>
                    <input type="text" id="cpf" name="cpf" required>
                </div>
                <div class="campo-grupo">
                    <label for="data_nasc">Data Nascimento *</label>
                    <input type="date" id="data_nasc" name="data_nasc" required>
                </div>
                <div class="campo-grupo-largo">
                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco">
                </div>
            </div>
            <div class="linha-campos">
                <div class="campo-grupo-largo">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="campo-grupo">
                    <label for="telefone">Telefone *</label>
                    <input type="text" id="telefone" name="telefone" required>
                </div>
                <div class="campo-grupo">
                    <label for="status">Status</label>
                    <input type="text" id="status" name="status">
                </div>
            </div>
            <div class="linha-campos">
                <div class="campo-grupo">
                    <label for="uf">UF</label>
                    <input type="text" id="uf" name="uf">
                </div>
                <div class="campo-grupo">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade">
                </div>
                <div class="campo-grupo">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep">
                </div>
                <div class="campo-grupo-largo">
                    <label for="complemento">Complementos Opcionais</label>
                    <input type="text" id="complemento" name="complemento">
                </div>
            </div>
            <div class="faixa-botoes">
                <button type="submit" class="botao-acao" title="Confirmar">
                    <svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="22" stroke="#222" stroke-width="2" fill="#fff"/><path d="M15 24l7 7 11-11" stroke="#a96b2a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Confirmar
                </button>
                <button type="reset" class="botao-acao" title="Cancelar">
                    <svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="22" stroke="#222" stroke-width="2" fill="#fff"/><path d="M16 16l16 16M32 16L16 32" stroke="#a96b2a" stroke-width="3" stroke-linecap="round"/></svg>
                    Cancelar
                </button>
            </div>
        </form>
    </div>
    <img class="imagem-fundo-inferior" src="../assets/icons/fundo_paes.png" alt="Pães">
</body>
</html>