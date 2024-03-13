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
    echo "<h4>Integração HTML5 + PHP</h4>";
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];
    $media = ($n1 + $n2) / 2;

      if($media >= 7) {
        echo "APROVADO";
      } 
      elseif ($media < 7 && $media >= 5) {
        echo "RECUPERAÇÃO";
      }
      else {
        echo "REPROVADO";
      }
  ?>

  <a href= "05exerc.html" >Voltar a Page HTML</a>

</body>
</html>