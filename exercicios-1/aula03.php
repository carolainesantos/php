<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudando PHP</title>
  <link rel="stylesheet" href="./css/style03.css">
</head>
<body>
  <div class="card-container">
    <div class="card01">
      <div class="title">
        <h3>
          <?php
        echo "Aula 03";
        ?>
      </h3>
    </div>
    
    <!-- Seção: Operações Aritméticas em PHP -->
    <h4>Operações Aritméticas em PHP:</h4>
    <?= " Uma coisa importante é saber a ordem de precedência de operadores aritméticos em PHP. <br>Sempre em uma expressão, os operadores que serão executados são, na ordem:<br><br>" ?>
    
    <?= "• Em primeiro lugar, parênteses ( ).<br>" ?>
    <?= "• Em segundo lugar, operadores de multiplicação, divisão e módulo * / %<br>" ?>
    <?= "• Em seguida, as adições e subtrações + - <br>" ?>

    <!-- Seção: Exemplo de Código PHP -->
    <div>
      <h4>Exemplo de código PHP:</h4>
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
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h3>Valores recebidos na url: $n1 e $n2</h3> ";

    $media = ($n1 + $n2) / 2;
    echo "Saída → A soma vale: ". ($n1 + $n2);
    echo "<br/> Saída → A sub vale: ". ($n1 - $n2);
    echo "<br/>Saída → A multip vale: ". ($n1 * $n2);
    echo "<br/>Saída → A divi vale: ". ($n1 / $n2);
    echo "<br/>Saída → O modulo vale: ". ($n1 % $n2);
    echo "<br/>Saída → O modulo vale: ". ($n1 % $n2);
    echo "<br/>Saída → A média vale: ". $media;
    ?>

<h4>Obtendo valores da URL com PHP:</h4>
        <?= " Exemplo de url abaixo:<br>" ?>
        <?= "http://localhost/aula05/operadores.php?a=3&b=2<br><br>" ?>
  </div> <!-- Fecha div container-->
  
  <div class="card02">
    <div class="Conteudo">
      
        <?= "No link anterior, o arquivo operadores.php está sendo chamado dentro da pasta <br>aula05 do servidor local. Na linha, serão passados dois valores:<br> 'a' valendo 3 e 'b' valendo 2.<br><br>" ?>
        <?= "Para pegar esses valores no script PHP, deve usar o código:<br>" ?>
          <pre>
            <?= htmlspecialchars('$valor1 = $_GET["a"];') ?><br>
            <?= htmlspecialchars('$valor2 = $_GET["b"];') ?>
          </pre>
          <p>No código anterior, o parâmetro a (3) passado pela URL será armazenado na variável $valor1.</p>
          <p>De maneira similar, a variável $valor2 vai conter o valor do parâmetro b (2).<br>
              Obs: Usar sempre $_GET com todas as letras maiusculas.</p>

          <h4>Funções Matemáticas em PHP:</h4>

          <p>abs() : Retorna o valor absoluto de um número.<br>
              Exemplo: abs(-5) = 5</p>

          <p>pow(): Calcula uma potência<br>
              exemplo: pow(3,2) = 32 = 9</p>

          <p>sqrt(): Calcula a raiz quadrada de um número.<br>
              exemplo: sqrt(25) = 5</p>

          <p>round(): Arredonda valores.<br>
              exemplo: round(3.8) = 4</p>

          <p>intval() : Trunca um número.<br>
              Retorna a parte inteira de um valor.<br>
              exemplo: abs(8.7) = 8</p>

          <p>number_format() : Formata um número Real.<br>
              exemplo: number_format(3258.754, 2, “,”, “.”) = 3.258. 75.</p>

          <p>Obs: Ainda existem os métodos ceil() e floor() para arredondamentos para cima e para baixo, respectivamente. A função round() vai usar as regras de arredondamento.</p>
        </div>
      </div>
  </body>
</html>