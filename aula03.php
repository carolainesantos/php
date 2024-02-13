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

    <!-- Seção: Variáveis em PHP -->
    <h4>Operações Aritméticas em PHP</h4>
    <?= "• Toda variável em PHP deve conter um (\$) antes do nome da mesma.<br>" ?>

    <!-- Seção: Comandos de saída do PHP -->
    <h4>Comandos de Saída do PHP</h4>
    <?= "Os comandos ECHO, PRINT e PRINTF servem para gerar saídas na tela. Um exemplo simples desse comando é:<br><br>" ?>
    <?= "echo 'Estou aprendendo variáveis em PHP';<br><br>" ?>
    <?= "Foi utilizada uma tag HTML para a quebra de linha. Isso é possível, já que o PHP se integra com essa tecnologia.<br><br>" ?>

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