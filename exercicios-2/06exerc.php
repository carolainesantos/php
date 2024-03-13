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
    echo "<h4>Switch PHP</h4>";
    $n = isset($_GET["num"]) ?$_GET["num"] : 0;
    $o = isset($_GET["oper"]) ?$_GET["oper"] : 1;
    switch($o){
      case 1:
        $r = $n * 2;
        echo "O dobro de $n é $r";
        break;
      case 2:
        $r = $n ^ 3;
        echo "O cubo de $n é $r";
        break;
      case 3:
        $r = sqrt($n);
        echo "A raiz quadrada de $n é $r";
        break;
      default:
        echo "Opção inválida";
        break;
    }
    echo "<br/>O resultado da operação solicitada foi <span class='foco'>$r</span>";
  ?>

  <a href= "06exerc.html" class="botao" >Voltar a Page HTML</a>

</body>
</html>