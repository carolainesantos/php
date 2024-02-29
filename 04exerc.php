<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
     $txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
     $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
     $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000"; 
  ?>

  <!-- o primeiro ';' é do php e o utimo ';' é do html-->
  <style>
    span.texto{  
      font-size: <?php echo $tam; ?>; 
      color: <?php echo $cor; ?>;
    }
  </style>

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
    echo "<span class='texto'>$txt</span>";
  ?>

  <a href="04exerc.html">Voltar a Page HTML</a>

</body>
</html>