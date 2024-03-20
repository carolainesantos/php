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
          "Aula 11"
        </h3>
    </div>

    <div>
      <form method="get" action="10-parte2.php">
        <?php 
          $c = 1;
          while($c <= 5){
           echo "Valor $c: <input type='number' name='v$c' 
           max='100' min='0' value='0'/></br>";
           $c++;
          }
        ?>
        <input type="submit" value="Enviar" class="botao"/> 
      </form>
    </div>

</body>
</html>