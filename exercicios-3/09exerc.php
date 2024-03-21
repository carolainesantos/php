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
      $c = 10;
      while ($c >= 0) {
        echo $c . " . ";
        $c-=2;
      }
  ?>

</body>
</html>