<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudadndo PHP</title>
  <link rel="stylesheet" href="./css/style09.css">
  
</head>
<body>
<div class="card-container">
    <div class="card01">
      <div class="title">
        <h3>
          <?php
        echo "Aula 09";
        ?>
      </h3>
    </div>

  <?php 
    $valor = $_GET["b"];
    $rq = sqrt($valor);
    echo "A raiz de  $valor é igual a: ". number_format($rq, 2);
  ?>
  <a href="01exerc.html">Voltar</a>
</body>
</html>