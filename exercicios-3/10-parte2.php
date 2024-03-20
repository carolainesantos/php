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
        <?php 
          $i = 1;

          while($i <= 5){
            $v = "num" . $i;
            $url = "v" . $i;
            $$v = isset($_GET[$url])?$_GET[$url]:0;
            $i++;
          }
          echo "Numeros digitados: $num1, $num2, $num3, $num4, $num5.";

          // $i = 1;
          // while($i <= 5){
          //   $v = "num" . $i;
          //   echo "<span>Valor $i: " . $$v . "</span><br/>";
          //   $i++;
          // }
        ?>
    </div>
    <br/>
    <a href= "javascript:history.go(-1)" class="botao" >Voltar</a>
</body>
</html>