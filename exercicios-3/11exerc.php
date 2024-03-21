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
          "Aula 12"
        </h3>
    </div>

    <div>
      <form method="get" action="">
        <?php 
          $c = 0;
          do {
            echo "$c ";
            $c+=2;
          } while ($c <= 20);
        ?>
        <input type="submit" value="Enviar" class="botao"/> 
      </form>
    </div>

</body>
</html>