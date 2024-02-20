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

   <!-- Este exemplo mostra a forma de se incrementar ou decrementar valores -->
  <?php 
    echo "<h4>Decremento ou Incremento em PHP</h4>";
    $atual = $_GET["aa"];
    echo "O ano atual é: $atual e o ano anterior é " . --$atual;
  ?>

  <!-- Este exemplo mostra a referencia da variavel a qual ele esta apontando-->
  <?php 
    echo "<h4>Operadores de atribuição em PHP</h4>";
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variável A vale $a";
    echo "<br/>A variável B vale $b";

  ?>
</body>
</html>