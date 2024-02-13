<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudando PHP</title>
  <link rel="stylesheet" href="./css/style03.css">
</head>
<body>
<div class="card">
    <div class="title">
      <h3>
        <?php
        echo "Aula 03";
        ?>
      </h3>
    </div>

    <!-- Seção: Operações Aritméticas em PHP -->
    <h4>Operações Aritméticas em PHP</h4>
    <?= " Uma coisa importante é saber a ordem de precedência de operadores aritméticos em PHP. Sempre em uma expressão, os operadores que serão executados são, na ordem:<br><br>" ?>

    <?= "• Em primeiro lugar, parênteses ( ).<br>" ?>
    <?= "• Em segundo lugar, operadores de multiplicação, divisão e módulo * / %<br>" ?>
    <?= "• Em seguida, as adições e subtrações + - <br>" ?>

    <!-- Seção: Obtendo valores da URL com PHP -->
    <h4>Obtendo valores da URL com PHP</h4>
    <?= " Exemplo de url abaixo:<br>" ?>
    <?= "http://localhost/aula05/operadores.php?a=3&b=2<br><br>" ?>
    <?= "No link acima, o arquivo operadores.php está sendo chamado dentro da pasta aula05 do servidor local. Na linha, serão passados dois valores: a valendo 3 e b valendo 2.<br><br>" ?>
    <?= "Para pegar esses valores no script PHP, usar o código:<br>" ?>
    <pre>
      <?= htmlspecialchars('$valor1 = $_GET["a"];') ?><br>
      <?= htmlspecialchars('$valor2 = $_GET["b"];') ?>
    </pre>

    <!-- Seção: Exemplo de Código PHP -->
    <div>
      <h4>Exemplo de Código PHP:</h4>
      <pre>
        <?php
        $n1 = 97;
        $n2 = 3;
        $media = ($n1 + $n2) / 2;

        echo "<br>";
        echo htmlspecialchars('<?php $n1 = 3;  $n2 = 97;  echo "A soma vale:". ($n1 + $n2); ?>'); echo "<br>";
        echo htmlspecialchars('<?php $n1 = 3;  $n2 = 97;  echo "A sub vale:". ($n1 - $n2); ?>'); echo "<br>";
        echo htmlspecialchars('<?php $n1 = 3;  $n2 = 97;  echo "A multip vale:". ($n1 * $n2); ?>'); echo "<br/>";
        echo htmlspecialchars('<?php $n1 = 3;  $n2 = 97;  echo "A divi vale:". ($n1 / $n2); ?>'); echo "<br/>";
        echo htmlspecialchars('<?php $n1 = 3;  $n2 = 97;  echo "O modulo vale:". ($n1 % $n2); ?>');
        ?>
      </pre>
    </div>

    <?php
    $n1 = 97;
    $n2 = 3;
    $media = ($n1 + $n2) / 2;
    echo "Saída → A soma vale: ". ($n1 + $n2);
    echo "<br/> Saída → A sub vale: ". ($n1 - $n2);
    echo "<br/>Saída → A multip vale: ". ($n1 * $n2);
    echo "<br/>Saída → A divi vale: ". ($n1 / $n2);
    echo "<br/>Saída → O modulo vale: ". ($n1 % $n2);
    echo "<br/>Saída → O modulo vale: ". ($n1 % $n2);
    echo "<br/>Saída → A média vale: ". $media;
    ?>
  </div>
</body>
</html>