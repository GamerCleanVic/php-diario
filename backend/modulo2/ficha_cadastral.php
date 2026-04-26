<?php
$nome = "Bertoldo";
$idade = 25;
$sexo = "M";
$salario_mensal = 2210.30;
$salario_anual = ($salario_mensal * 12);
$status_emprego = true;
$anos_aposentadoria = null;
$habilidades = ["PHP", "JavaScript", "HTML", "CSS"];

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
            <p>Salário Mensal: <b><?= $salario_mensal; ?></b></p>
            <p>Salário Anual: <b><?= $salario_anual; ?></b></p>
            <p>Status de Emprego: <b><?= ($status_emprego) ? 'Empregado' : 'Desempregado'; ?></b></p>
            <p>Anos para Aposentadoria: <b><?= ($sexo == 'M') ? 
              ($anos_aposentadoria = ($idade - 65)) : 
              ($anos_aposentadoria = ($idade - 62))?></b></p>
            <p>Habilidades: <b><?php foreach($habilidades as $item){ echo $item.', ';} ?></b></p>
        </div>
    </div>

</body>
</html>
