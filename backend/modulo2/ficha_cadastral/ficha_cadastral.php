<?php
require_once 'constants.php';
require_once 'data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Ficha Cadastral</title>
</head>
<body style="background-color: #181818; color: #ccc;">
    
    <div class="container-ficha1">
        <div class="card-ficha1">
            <nav>
                <h1>Ficha Cadastral</h1>
            </nav>            
            <p>Nome: <b><?= $nome; ?></b></p>
            <p>Idade: <b><?= $idade; ?></b></p>
            <p>Sexo: <b><?= $sexo; ?></b></p>
            <p>Salário Mensal: <b>R$ <?= number_format($salario_mensal, 2, ',', '.'); ?></b></p>
            <p>Salário Anual: <b>R$ <?= number_format($salario_anual, 2, ',', '.'); ?></b></p>
            <p>Status de Emprego: <b><?= $situacaoEmprego ?></b></p>
            <p>Anos para Aposentadoria: <b> <?= 
              $anos_necessarios_para_aposentar - $idade ?> </b></p>
            <p>Habilidades: <b><?php foreach($habilidades as $item){
             echo $item.', ';} ?></b></p>
        </div>
    </div>

</body>
</html>
