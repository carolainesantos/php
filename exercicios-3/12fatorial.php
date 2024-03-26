<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudadndo PHP</title>
  <link rel="stylesheet" href="../css/style09.css">
</head>

<body>
<div class="card-container">
    <div class="card01">
      <div class="title">
        <h3>
          <?php
            echo "Aula 12";
          ?>
      </h3>
    </div>

  <?php
    $v = isset($_GET["val"]) ?$_GET["val"] : 1;
    echo "<h4>Calculando o Fatorial de $v<h4/>";
    $c = $v;
    $fat = 1;
    do {
      $fat = $fat * $c;
      $c--;
    } while($c >= 1);
    echo "<h3>$v ! = $fat";
  ?>

  <a href= "javascript:history.go(-1)" class="<br/>botao" >Voltar</a>

</body>
</html>