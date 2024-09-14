<?php
    require_once "item/constants.php";

    include "item/data.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Explorando Variáveis em PHP</title>
</head>
<body>
<div class="container">
<div class="card">
<h1 class="title1">Ficha Cadastral</h1>
<p>Nome: <strong><?= $nome ?></strong></p>
<p>Idade: <strong><?= $idade ?></strong></p>
<p>Sexo: <strong><?= $sexo ?></strong></p>
<p>Salário Mensal: <strong>R$ <?= number_format($salario_mensal, 2, ',', '.') ?></strong></p>
<p>Salário Anual: <strong>R$ <?= number_format($salario_anual, 2, ",", ".") ?></strong></p>
<p>Status de Emprego: <strong><?= $status_emprego ?></strong></p>
<p>Anos para Aposentadoria: <strong><?= $aposentadoria ?></strong></p>
<p>Habilidades: <strong><?= $stacks ?></strong></p>
</div>
</div>
</body>
</html>
