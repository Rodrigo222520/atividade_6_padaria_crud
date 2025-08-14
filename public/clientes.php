<?php



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>


   <form action="/action_page.php">
  <label for="nomeCompleto">Nome Completo *</label><br>
  <input type="text" id="nomeCompleto" name="nomeCompleto" ><br>
  <label for="rg">RG</label><br>
  <input type="text" id="rg" name="rg" ><br><br>
  <label for="sexo">Sexo</label><br>
  <input type="text" id="sexo" name="sexo" ><br>
  <label for="cpfCnpj">CPF/CNPJ *</label><br>
  <input type="text" id="cpfCnpj" name="cpfCnpj" ><br>
  <label for="dataNasc">Data Nascimento *:</label><br>
  <input type="text" id="dataNasc" name="dataNasc" ><br>
  <label for="endereco">Endereço</label><br>
  <input type="text" id="endereco" name="endereco" ><br>
  <label for="email">Email *</label><br>
  <input type="text" id="email" name="email" ><br>
  <label for="telefone">Telefone *</label><br>
  <input type="text" id="telefone" name="telefone" ><br>
  <label for="status">Status </label><br>
  <input type="text" id="status" name="status" ><br>
  <label for="uf">UF</label><br>
  <input type="text" id="uf" name="uf" ><br>
  <label for="cidade">Cidade</label><br>
  <input type="text" id="cidade" name="cidade" ><br>
  <label for="cep">CEP </label><br>
  <input type="text" id="cep" name="cep" ><br>
  <label for="compleOpc">Complementos Opcionais</label><br>
  <input type="text" id="compleOpc" name="compleOpc" ><br>
  <input type="submit" value="Submit">
</form> 

<div class="faixa"> Confirmar Cancelar Alterar</div>

<style>
  .faixa {
    background-color: brown;
    color: white;
    padding: 20px;
    text-align: center;
  }
</style>

<br>
</body>
</html>