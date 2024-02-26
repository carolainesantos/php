<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudadndo PHP</title>
  <link rel="stylesheet" href="./css/style05.css">
</head>
<body>
<div class="card-container">
    <div class="card01">
      <div class="title">
        <h3>
          <?php
        echo "Aula 05";
        ?>
      </h3>
    </div>

    <h3>Operadores de Atribuição</h3>

    <?php 
      $preco = $_GET["p"];
      echo "O preço do produto é R$ " . number_format($preco, 2); 
      $preco -= ($preco * 10) /100; 
      echo "<br>E o novo preço com 10% de desconto será : R$ " . number_format($preco, 2);

      // pra pegar a pocentagem de algo pega o valor desejado e 
      // multiplica pela porcentagem  desejada e depois divide por 100 Ex= 10% de $500. 
      // $preco += ($preco*10/100);
      // (500 * 10 / 100)
      // echo "<br>E o novo preço com 10% de aumento será : R$ $preco";
    ?>

      

</body>
</html>