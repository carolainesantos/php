<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="refresh" content="30"> Serve pra dar refresh automático a cada 30seg-->
  <title>Estudando PHP</title>

  <link rel="stylesheet" href="../css/style02.css">
</head>

<body>

  <div class="card">
    <div class="title">
      <h3>
        <?php
        echo "Aula 02";
        ?>
      </h3>
    </div>

    <!-- Seção: Variáveis em PHP -->
    <h4>Variáveis em PHP</h4>
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
        $idade = 26;
        $nome = "Carol";
        echo htmlspecialchars('<?php $idade = 26;  $nome = "Carol";  echo "$nome tem $idade anos."; ?>');
        ?>
      </pre>
    </div>

    <?php
    $idade = 26;
    $nome = "Carol";
    echo "Saída: $nome tem $idade anos.";
    ?>
  </div>

</body>
</html>
