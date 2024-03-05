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
     $a = isset($_GET["ano"])?$_GET["ano"]:1900;
     $i = date("Y") - $a;
     echo "<h4>Você nasceu no ano: $a e tem $i anos.</h4>";

    /* exemplo 01
      if($i >=18) {
       $v = "ja pode votar";
       $d = "ja pode dirigir";
     } 
     else {
      $v = "não pode votar";
      $d = "não pode dirigir";
    }  
    echo "Com essa idade você, $v e também $d. <br/>"; */

    if($i < 16) {
      $tipoVoto = "não vota";
    } 
    elseif (($i >= 16 && $i < 18) || ($i > 65)) {
      $tipoVoto = "voto opcional";
    }
    else {
      $tipoVoto = "voto obrigatório";
    }
    echo "Para essa idade, $tipoVoto. <br/>";
  ?>
  <a href="04exerc.html">Voltar a Page HTML</a>

</body>
</html>