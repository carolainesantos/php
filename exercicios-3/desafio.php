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
            echo "Aula 11";
          ?>
      </h3>
    </div>

  <?php 
  // Verifica se o formulário foi submetido
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtém os valores enviados pelo formulário
    $inicio = $_GET["inicio"];
    $final = $_GET["final"];
    $incremento = $_GET["opcoes"];

    // Converte os valores para inteiros
    $inicio = intval($inicio);
    $final = intval($final);
    $incremento = intval($incremento);

    // Verifica a direção do incremento
    if ($inicio < $final && $incremento > 0) {
      // Incremento positivo
      // Loop para imprimir os números de forma crescente
      for ($i = $inicio; $i <= $final; $i += $incremento) {
          echo $i . "<br>";
      }
    } elseif ($inicio > $final && $incremento) {
      // Loop para imprimir os números de forma decrescente
      for ($i = $inicio; $i >= $final; $i -= $incremento) {
        echo $i . "  ";
      }
    }
  }
  ?>

  <br/><br/>
  <a href= "javascript:history.go(-1)" class="botao" >Voltar</a>

</body>
</html>