<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudadndo PHP</title>
  <link rel="stylesheet" href="./css/style07.css">
</head>
<body>
<div class="card-container">
    <div class="card01">
      <div class="title">
        <h3>
          <?php
        echo "Aula 07";
        ?>
      </h3>
    </div>

   <!-- Este exemplo mostra a comparação de valor igual -->
  <?php 
    echo "<h4>Operadores Relacionais (Igual)</h4>";
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores recebidos foram $n1 e $n2<br/>";
    $resultado = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
    echo "O resultado será $resultado";
    echo "<br/>___________________________________________________________";
  ?>

  <!-- Este exemplo mostra a comparação de valores identicos (valor e tipo)
    exemplo = 3 e "tres" ou "3" = são comparações de identicos neste exemplo a resposta é Nao pq elas nao sao do mesmo tipo apenas valores iguais -->
  <?php 
    echo "<h4>Operadores Relacionais (Identicos)</h4>";
    $x = 3;
    $y = "3";
    $r = ($x === $y) ? "SIM" : "NÃO"; 
    echo "As variaveis A e B são iguais? $r";
    echo "<br/>___________________________________________________________";
  ?>

   <!--  -->
  <?php 
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $media = ($nota1 + $nota2) / 2;
    echo "A media entre $nota1 e $nota2 é $media";
  ?>
</body>
</html>