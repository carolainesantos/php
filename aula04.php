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
    echo "O valor absoluto de $v2 é = " . abs($v2);
    echo "<br>A potencia do valor de $v1<sup>$v2</sup>  é = " . pow($v1, $v2);
    echo "<br>A raiz de $v1 é = " . sqrt($v1);
    echo "<br>O valor de $v2 arredondado é = " . round($v2); // ceil=sempre arredonda pra cima ou floor= sempre pra baixo
    echo "<br>A parte inteira de $v2 é = " . intval($v2); // trunca numeros 
    echo "<br>O valor de $v1 em moeda é = R$" . number_format($v1, 2,",", ".");
  ?>
</body>
</html>