<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudando PHP</title>
  <link rel="stylesheet" href="./css/style04.css">
</head>
<body>
<div class="card-container">
    <div class="card01">
      <div class="title">
        <h3>
          <?php
        echo "Aula 04";
        ?>
      </h3>
    </div>


    <h3>Operações Aritméticas em PHP</h3>
  <?php 
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h4>Valores recebidos na url: $v1 e $v2</h4>";
    echo "O valor absoluto de $v2 e " . abs($v2);
  ?>
</body>
</html>