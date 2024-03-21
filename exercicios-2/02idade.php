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
    echo "<h4>Integração HTML5 + PHP</h4>";

    // $nome = $_GET["nome"];
    // $ano = $_GET["ano"];
    // $sexo = $_GET["sexo"];
    // $idade = date("Y") - $ano; // y em minusculo mostra por exemplo: 2024 ira aparecer 24

    /* isset serve pra q se algo foi configurado ele 
    envia o parametro recebido pela url, se não ele 
    mostra a mensagem "não inf.." */
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[nome não informado]"; 
    $ano =  isset($_GET["ano"])?$_GET["ano"]:0;                                           
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sexo não informado]";
    $idade = date("Y");

    echo "$nome é $sexo e tem $idade anos.";
  ?>

  <a href="02exerc.html">Voltar a Page HTML</a>

</body>
</html>