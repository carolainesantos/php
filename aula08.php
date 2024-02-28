<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudadndo PHP</title>
  <link rel="stylesheet" href="./css/style08.css">
</head>
<body>
<div class="card-container">
    <div class="card01">
      <div class="title">
        <h3>
          <?php
        echo "Aula 08";
        ?>
      </h3>
    </div>

   <!-- Este exemplo mostra a comparação de valor igual -->
  <?php 
    echo "<h4>Operadores Lógicos</h4>";
    $ano = $_GET["ano"];
    $idade = 2024 - $ano; 
    echo "Quem nasceu em $ano tem $idade anos <br/>";
    $tipo = ($idade>=18 && $idade<65)?" OBRIGATÓRIO":" NÃO OBRIGATÓRIO";
    echo "<br/>E dessa forma seu voto é: $tipo";
   
    echo "<br/>___________________________________________________________";
  ?>


  
</body>
</html>