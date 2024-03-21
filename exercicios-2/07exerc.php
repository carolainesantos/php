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
            echo "Aula 09";
          ?>
      </h3>
    </div>

  <?php 
    echo "<h4>Switch PHP</h4>";
    $d = isset($_GET["ds"])?$_GET["ds"]:0;

    switch($d){
      case 2:
      case 3:
      case 4:
      case 5:
      case 6:
        echo "Levanta e vai estudar! :)";
        break;
      case 7:
      case 8:
        echo "Descanse pequeno gafanhoto! :D";
        break;
      default:
        echo "Dia da semana invalido!";
    }
  ?>

  <a href= "javascript:history.go(-1)" class="botao" >Voltar</a>

</body>
</html>