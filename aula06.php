<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudadndo PHP</title>
  <link rel="stylesheet" href="./css/style06.css">
</head>
<body>
<div class="card-container">
    <div class="card01">
      <div class="title">
        <h3>
          <?php
        echo "Aula 06";
        ?>
      </h3>
    </div>

   <!-- Este exemplo mostra o ano atual-->
  <?php 
    echo "<h4>Decremento ou Incremento em PHP</h4>";
    $atual = $_GET["aa"];
    echo "O ano atual é: $atual e o ano anterior é " . --$atual;// aqui diminui 1
  ?>

  <!-- Este exemplo mostra a referencia da variavel a qual ele esta apontando-->
  <!-- Colocar um caractere & na frente de uma variável vai criar um ponteiro em PHP. Ela não será uma  variável de fato, mas será uma referência à variável original. -->
  <?php 
    echo "<h4>Operadores de atribuição em PHP</h4>";
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variável A vale $a";
    echo "<br/>A variável B vale $b";
  ?>

   <!-- Este exemplo mostra Variáveis de Variáveis (variáveis variantes) 
      Colocar um segundo $ na frente de uma variável também possui um efeito bem peculiar. Ele vai criar uma variável dinamicamente, dependendo do conteúdo da variável original. Essas são as variáveis de variáveis em PHP.
    -->
  <?php 
    
  ?>
</body>
</html>