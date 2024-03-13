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
            echo "Aula 10";
          ?>
      </h3>
    </div>

  <?php 
      if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Obtém o estado selecionado
        $estado = $_GET['estado'];
        
        // Exibe o estado selecionado
        echo "Você selecionou o estado: $estado";
      }
  ?>

  <a href= "javascript:history.go(-1)" class="botao" >Voltar</a>

</body>
</html>